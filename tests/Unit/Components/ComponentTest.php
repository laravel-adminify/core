<?php

namespace Adminify\Tests\Unit\Components;

use Adminify\Components\Component;
use PHPUnit\Framework\TestCase;

class ComponentTest extends TestCase
{
    public function testChildren()
    {
        $component = Component::create()
                        ->id('parent')(
                            Component::create()
                                ->id('child1'),
                            Component::create()
                                ->id('child2')
                        );
        $this->assertEquals('parent', $component->id);
        $this->assertCount(2, $component->children);
        $this->assertEquals('child1', $component->children[0]->id);
        $this->assertEquals('child2', $component->children[1]->id);

        $componentAsArray = $component->toArray();
        $this->assertIsArray($componentAsArray);
        $this->assertArrayHasKey('children', $componentAsArray);
        $this->assertIsArray($componentAsArray['children']);
        $this->assertCount(2, $componentAsArray['children']);
        $this->assertIsArray($componentAsArray['children'][0]);
        $this->assertIsArray($componentAsArray['children'][1]);
        $this->assertEquals('parent', $componentAsArray['id']);
        $this->assertEquals('child1', $componentAsArray['children'][0]['id']);
        $this->assertEquals('child2', $componentAsArray['children'][1]['id']);
    }

    public function testDefaultId()
    {
        $component = Component::create();

        $this->assertStringStartsWith('adminify_', $component->id);
    }

    public function testTag()
    {
        $component = Component::create();

        $this->assertEquals('div', $component->tag);

        $component = Component::create()
            ->tag('label');

        $this->assertEquals('label', $component->tag);
    }
}
