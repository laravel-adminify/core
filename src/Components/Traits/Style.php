<?php

namespace Adminify\Components\Traits;

use Adminify\Components\Traits\Tailwind\Layout;

trait Style
{
    use Layout;

    /**
     * Array of classes.
     *
     * @var array
     */
    protected $classes = [];

    /**
     * Add class to classes array.
     *
     * @param string $class
     * @return static
     */
    public function addClass(string $class)
    {
        $this->classes[] = $class;

        return $this;
    }
}
