<?php

namespace Adminify\Components;

use Adminify\Components\Traits\Style;
use Adminify\Foundation\PropertiesHolder;
use Illuminate\Support\Str;

/**
 * @property-read string $tag
 * @property-read string $id
 * @property-read string $class
 * @property-read Component[] $children
 */
class Component extends PropertiesHolder
{
    use Style;

    /**
     * Component tag.
     *
     * @var string
     */
    protected $tag = 'div';

    /**
     * Array of children components.
     *
     * @var array|Component[]
     */
    protected $children = [];

    /**
     * Component id.
     *
     * @var null|string
     */
    protected $id = null;

    /**
     * Set children of component.
     *
     * @param Component|Component[] $children
     * @return static
     */
    public function children($children)
    {
        $this->children = is_array($children) ? $children : func_get_args();

        return $this;
    }

    /**
     * Component children getter.
     *
     * @return array|Component[]
     */
    public function getChildren(): array
    {
        return $this->children;
    }

    /**
     * Component class getter.
     *
     * @return string
     */
    public function getClass(): string
    {
        return implode(' ', $this->classes);
    }

    /**
     * Returns array of getter functions that should be present in the json response.
     *
     * @return array
     */
    public function getGetters(): array
    {
        return array_merge(
            ['tag', 'id', 'class', 'children'],
            parent::getGetters()
        );
    }

    /**
     * Component ID getter.
     *
     * @return string
     */
    public function getId(): string
    {
        if ($this->id === null) {
            $this->id = 'adminify_'.Str::random();
        }

        return $this->id;
    }

    /**
     * Component tag getter.
     *
     * @return string
     */
    public function getTag(): string
    {
        return $this->tag;
    }

    /**
     * Set component id.
     *
     * @param string $id
     * @return static
     */
    public function id(string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Set component tag.
     *
     * @param string $tag
     * @return static
     */
    public function tag(string $tag)
    {
        $this->tag = $tag;

        return $this;
    }

    /**
     * Set children.
     *
     * @param Component|Component[] $children
     * @return static
     */
    public function __invoke($children)
    {
        return $this->children(is_array($children) ? $children : func_get_args());
    }
}
