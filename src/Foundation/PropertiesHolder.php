<?php

namespace Adminify\Foundation;

use Closure;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Support\Traits\Macroable;
use JsonSerializable;
use Opis\Closure\SerializableClosure;

class PropertiesHolder implements Arrayable, JsonSerializable
{
    use Macroable {
        __call as protected __macroableCall;
    }

    /**
     * Array of properties.
     *
     * @var array
     */
    protected $properties = [];

    /**
     * Array of getter functions that should be present in the json response.
     *
     * @var array
     */
    protected $getters = [];

    /**
     * List of properties that should be hidden from json response.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * Add hidden property.
     *
     * @param string $hidden
     * @return static
     */
    public function addHidden(string $hidden)
    {
        $this->hidden[] = $hidden;

        return $this;
    }

    /**
     * create new Properties Holder.
     *
     * @return static
     */
    public static function create()
    {
        return new static;
    }

    /**
     * Returns array of getter functions that should be present in the json response.
     *
     * @return array
     */
    public function getGetters(): array
    {
        return $this->getters;
    }

    /**
     * Hidden properties getter.
     *
     * @return array
     */
    public function getHidden(): array
    {
        return $this->hidden;
    }

    /**
     * Get the instance as an array for json serialization.
     *
     * @return array
     */
    public function jsonSerialize()
    {
        return $this->toArray();
    }

    /**
     * Get property value.
     *
     * @param string $key
     * @param mixed $default
     * @return mixed
     */
    public function property(string $key = null, $default = null)
    {
        if ($key === null) {
            return $this->properties;
        }

        return Arr::get($this->properties, $key, $default);
    }

    /**
     * Set property.
     *
     * @param string $key
     * @param mixed $value
     * @return $this
     */
    public function setProperty($key, $value)
    {
        if ($value instanceof Closure) {
            $value = new SerializableClosure($value);
        }
        $this->properties[$key] = $value;

        return $this;
    }

    /**
     * Get the instance as an array.
     *
     * @return array
     */
    public function toArray()
    {
        $out = $this->properties;
        foreach ($this->getGetters() as $getter) {
            $out[$getter] = $this->__get($getter);
        }

        // Clouser to convert Arrayable properties to array
        $convertArrayableToArray = function ($value) use (&$convertArrayableToArray) {
            if (is_array($value)) {
                return array_map($convertArrayableToArray, $value);
            }
            if ($value instanceof Arrayable) {
                return $value->toArray();
            }

            return $value;
        };
        $out = array_map($convertArrayableToArray, $out);

        return Arr::except($out, $this->getHidden());
    }

    /**
     * Set property with callback.
     *
     * @param string $method
     * @param mixed $arguments
     * @return static
     */
    public function __call($method, $arguments)
    {
        if (static::hasMacro($method)) {
            return static::__macroableCall($method);
        }
        if (count($arguments) == 1) {
            $this->setProperty($method, Arr::first($arguments));
        }

        return $this;
    }

    /**
     * Properties Getter.
     *
     * @param string $name
     * @return mixed
     */
    public function __get($name)
    {
        $method = 'get'.Str::studly($name);
        if (method_exists($this, $method)) {
            return call_user_func_array([$this, $method], []);
        }

        return $this->properties[$name] ?? null;
    }
}
