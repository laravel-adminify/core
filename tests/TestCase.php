<?php

namespace Adminify\Tests;

use Adminify\AdminifyServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

class TestCase extends OrchestraTestCase
{
    protected function getPackageProviders($app)
    {
        return [AdminifyServiceProvider::class];
    }
}
