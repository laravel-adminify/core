<?php

namespace Adminify\Tests\Unit\Components;

use Adminify\Components\Component;
use PHPUnit\Framework\TestCase;

class StyleTest extends TestCase
{
    public function testBoxSizing()
    {
        $this->assertEquals('box-border', Component::create()->box('border')->getClass());
        $this->assertEquals('box-border', Component::create()->boxBorder()->getClass());
        $this->assertEquals('box-content', Component::create()->boxContent()->getClass());
    }

    public function testClear()
    {
        $this->assertEquals('clear-left', Component::create()->clearLeft()->getClass());
        $this->assertEquals('clear-right', Component::create()->clearRight()->getClass());
        $this->assertEquals('clear-none', Component::create()->clearNone()->getClass());
        $this->assertEquals('clear-both', Component::create()->clearBoth()->getClass());
    }

    public function testContainer()
    {
        $this->assertEquals('container', Component::create()->container()->getClass());
    }

    public function testDisplay()
    {
        $this->assertEquals('block', Component::create()->displayBlock()->getClass());
        $this->assertEquals('inline-block', Component::create()->displayInlineBlock()->getClass());
        $this->assertEquals('inline', Component::create()->displayInline()->getClass());
        $this->assertEquals('flex', Component::create()->displayFlex()->getClass());
        $this->assertEquals('flex-root', Component::create()->displayFlexRoot()->getClass());
        $this->assertEquals('inline-flex', Component::create()->displayInlineFlex()->getClass());
        $this->assertEquals('table', Component::create()->displayTable()->getClass());
        $this->assertEquals('table-caption', Component::create()->displayTableCaption()->getClass());
        $this->assertEquals('table-cell', Component::create()->displayTableCell()->getClass());
        $this->assertEquals('table-column', Component::create()->displayTableColumn()->getClass());
        $this->assertEquals('table-column-group', Component::create()->displayTableColumnGroup()->getClass());
        $this->assertEquals('table-footer-group', Component::create()->displayTableFooterGroup()->getClass());
        $this->assertEquals('table-header-group', Component::create()->displayTableHeaderGroup()->getClass());
        $this->assertEquals('table-row-group', Component::create()->displayTableRowGroup()->getClass());
        $this->assertEquals('table-row', Component::create()->displayTableRow()->getClass());
        $this->assertEquals('flow-root', Component::create()->displayFlowRoot()->getClass());
        $this->assertEquals('grid', Component::create()->displayGrid()->getClass());
        $this->assertEquals('inline-grid', Component::create()->displayInlineGrid()->getClass());
        $this->assertEquals('contents', Component::create()->displayContents()->getClass());
        $this->assertEquals('hidden', Component::create()->displayNone()->getClass());
        $this->assertEquals('hidden', Component::create()->displayHidden()->getClass());
        $this->assertEquals('hidden', Component::create()->hidden()->getClass());
    }

    public function testFloat()
    {
        $this->assertEquals('float-left', Component::create()->floatLeft()->getClass());
        $this->assertEquals('float-none', Component::create()->floatNone()->getClass());
        $this->assertEquals('float-right', Component::create()->floatRight()->getClass());
        $this->assertEquals('clearfix', Component::create()->clearfix()->getClass());
    }

    public function testObjectFit()
    {
        $this->assertEquals('object-cover', Component::create()->objectFit('cover')->getClass());
        $this->assertEquals('object-contain', Component::create()->objectContain()->getClass());
        $this->assertEquals('object-cover', Component::create()->objectCover()->getClass());
        $this->assertEquals('object-fill', Component::create()->objectFill()->getClass());
        $this->assertEquals('object-none', Component::create()->objectNone()->getClass());
        $this->assertEquals('object-scale-down', Component::create()->objectScaleDown()->getClass());
    }

    public function testOverflow()
    {
        $this->assertEquals('overflow-auto', Component::create()->overflow('auto')->getClass());
        $this->assertEquals('overflow-x-auto', Component::create()->overflowXAuto()->getClass());
        $this->assertEquals('overflow-y-auto', Component::create()->overflowYAuto()->getClass());
        $this->assertEquals('overflow-auto', Component::create()->overflowAuto()->getClass());
        $this->assertEquals('overflow-hidden', Component::create()->overflowHidden()->getClass());
        $this->assertEquals('overflow-scroll', Component::create()->overflowScroll()->getClass());
        $this->assertEquals('overflow-visible', Component::create()->overflowVisible()->getClass());
        $this->assertEquals('overflow-x-auto', Component::create()->overflowXAuto()->getClass());
        $this->assertEquals('overflow-y-auto', Component::create()->overflowYAuto()->getClass());
        $this->assertEquals('overflow-x-hidden', Component::create()->overflowXHidden()->getClass());
        $this->assertEquals('overflow-y-hidden', Component::create()->overflowYHidden()->getClass());
        $this->assertEquals('overflow-x-visible', Component::create()->overflowXVisible()->getClass());
        $this->assertEquals('overflow-y-visible', Component::create()->overflowYVisible()->getClass());
        $this->assertEquals('overflow-x-scroll', Component::create()->overflowXScroll()->getClass());
        $this->assertEquals('overflow-y-scroll', Component::create()->overflowYScroll()->getClass());
    }

    public function testObjectPosition()
    {
        $this->assertEquals('object-bottom', Component::create()->objectPosition('bottom')->getClass());
        $this->assertEquals('object-bottom', Component::create()->objectBottom()->getClass());
        $this->assertEquals('object-center', Component::create()->objectCenter()->getClass());
        $this->assertEquals('object-left', Component::create()->objectLeft()->getClass());
        $this->assertEquals('object-left-bottom', Component::create()->objectLeftBottom()->getClass());
        $this->assertEquals('object-left-top', Component::create()->objectLeftTop()->getClass());
        $this->assertEquals('object-right', Component::create()->objectRight()->getClass());
        $this->assertEquals('object-right-bottom', Component::create()->objectRightBottom()->getClass());
        $this->assertEquals('object-right-top', Component::create()->objectRightTop()->getClass());
        $this->assertEquals('object-top', Component::create()->objectTop()->getClass());
    }
}
