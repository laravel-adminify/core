<?php

namespace Adminify\Support\Facades;

use Illuminate\Support\Facades\Facade;

class Adminify extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'adminify';
    }
}
