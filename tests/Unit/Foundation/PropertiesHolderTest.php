<?php

namespace Adminify\Tests\Unit\Components;

use Adminify\Foundation\PropertiesHolder;
use Adminify\Tests\Unit\Classes\SamplePropertiesHolder;
use PHPUnit\Framework\TestCase;

class PropertiesHolderTest extends TestCase
{
    public function testClosureProperty()
    {
        $foo = PropertiesHolder::create()
                ->setProperty('closure', function ($test) {
                    return $test * 5;
                });
        $fooSerialized = serialize($foo);

        $fooUnserialized = unserialize($fooSerialized);

        $this->assertIsCallable($fooUnserialized->property('closure'));
        $this->assertEquals(10, $fooUnserialized->property('closure')(2));
    }

    public function testGetter()
    {
        $foo = SamplePropertiesHolder::create()
                ->setProperty('property1', 'hello')
                ->setProperty('property2', 'world');

        $fooArray = ['property1' => 'hello', 'property2' => 'world', 'sample' => 'Hello World'];
        $this->assertEquals($fooArray, $foo->jsonSerialize());
    }

    public function testHidden()
    {
        /**
         * @var PropertiesHolder
         */
        $foo = PropertiesHolder::create()
                ->property1('hello')
                ->property2('world')
                ->propertyHidden('Should be hidden')
                ->addHidden('propertyHidden');

        $this->assertEquals($foo->getHidden(), ['propertyHidden']);

        $fooArray = ['property1' => 'hello', 'property2' => 'world'];
        $this->assertEquals($fooArray, $foo->toArray());
        $this->assertEquals($fooArray, $foo->jsonSerialize());
    }

    public function testSetProperty()
    {
        /**
         * @var PropertiesHolder
         */
        $foo = PropertiesHolder::create()
                ->property1('hello')
                ->property2('world');

        $this->assertEquals('hello', $foo->property1);
        $this->assertEquals('hello', $foo->property('property1'));
        $this->assertEquals('world', $foo->property('property2'));

        $this->assertEquals(null, $foo->property('property_that_doesnt_exists'));
        $this->assertEquals('default', $foo->property('property_that_doesnt_exists', 'default'));

        $fooArray = ['property1' => 'hello', 'property2' => 'world'];
        $this->assertEquals($fooArray, $foo->property());
        $this->assertEquals($fooArray, $foo->toArray());
        $this->assertEquals($fooArray, $foo->jsonSerialize());
    }
}
