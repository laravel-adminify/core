<?php

namespace Adminify\Tests\Unit\Classes;

use Adminify\Foundation\PropertiesHolder;

class SamplePropertiesHolder extends PropertiesHolder
{
    protected $getters = ['sample'];

    /**
     * Sample getter.
     *
     * @return string
     */
    public function getSample()
    {
        return 'Hello World';
    }
}
