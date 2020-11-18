<?php

namespace Adminify\Components\Traits\Tailwind;

trait Layout
{
    /**
     * Set element's box-sizing
     *
     * @param string $type ['border', 'content']
     * @return static
     */
    public function box(string $type = 'border')
    {
        return $this->addClass("box-$type");
    }

    /**
     * Set element's box-sizing to border-box
     *
     * @return static
     */
    public function boxBorder()
    {
        return $this->box('border');
    }

    /**
     * Set element's box-sizing to content-box
     *
     * @return static
     */
    public function boxContent()
    {
        return $this->box('content');
    }

    /**
     * To position the element below all preceding floated elements
     *
     * @return static
     */
    public function clearBoth()
    {
        return $this->addClass('clear-both');
    }

    /**
     * Clearfix
     *
     * @return static
     */
    public function clearFix()
    {
        return $this->addClass('clearfix');
    }

    /**
     * Position the element below any preceding left-floated elements
     *
     * @return static
     */
    public function clearLeft()
    {
        return $this->addClass('clear-left');
    }

    /**
     * To reset any clears that are applied to the element
     *
     * @return static
     */
    public function clearNone()
    {
        return $this->addClass('clear-none');
    }

    /**
     * Position the element below any preceding right-floated elements
     *
     * @return static
     */
    public function clearRight()
    {
        return $this->addClass('clear-right');
    }

    /**
     * Fixing element's width to the current breakpoint
     *
     * @return static
     */
    public function container()
    {
        return $this->addClass('container');
    }

    /**
     * Set element's display
     *
     * @param string $type ['block', 'inline-block', 'inline', 'flex', 'inline-flex', 'table', 'table-caption', 'table-cell', 'table-column', 'table-column-group', 'table-footer-group', 'table-header-group', 'table-row-group', 'table-row', 'flow-root', 'grid', 'inline-grid', 'contents']
     * @return static
     */
    public function display(string $type)
    {
        return $this->addClass($type);
    }

    /**
     * Set element's display to block
     *
     * @return static
     */
    public function displayBlock()
    {
        return $this->display('block');
    }

    /**
     * Set element's display to contents
     *
     * @return static
     */
    public function displayContents()
    {
        return $this->display('contents');
    }

    /**
     * Set element's display to flex
     *
     * @return static
     */
    public function displayFlex()
    {
        return $this->display('flex');
    }

    /**
     * Set element's display to flow-root
     *
     * @return static
     */
    public function displayFlexRoot()
    {
        return $this->display('flex-root');
    }

    /**
     * Set element's display to flow-root
     *
     * @return static
     */
    public function displayFlowRoot()
    {
        return $this->display('flow-root');
    }

    /**
     * Set element's display to grid
     *
     * @return static
     */
    public function displayGrid()
    {
        return $this->display('grid');
    }

    /**
     * Set element's display to none
     *
     * @return static
     */
    public function displayHidden()
    {
        return $this->display('hidden');
    }

    /**
     * Set element's display to inline
     *
     * @return static
     */
    public function displayInline()
    {
        return $this->display('inline');
    }

    /**
     * Set element's display to inline-block
     *
     * @return static
     */
    public function displayInlineBlock()
    {
        return $this->display('inline-block');
    }

    /**
     * Set element's display to inline-flex
     *
     * @return static
     */
    public function displayInlineFlex()
    {
        return $this->display('inline-flex');
    }

    /**
     * Set element's display to inline-grid
     *
     * @return static
     */
    public function displayInlineGrid()
    {
        return $this->display('inline-grid');
    }

    /**
     * Set element's display to none
     *
     * @return static
     */
    public function displayNone()
    {
        return $this->display('hidden');
    }

    /**
     * Set element's display to table
     *
     * @return static
     */
    public function displayTable()
    {
        return $this->display('table');
    }

    /**
     * Set element's display to table-caption
     *
     * @return static
     */
    public function displayTableCaption()
    {
        return $this->display('table-caption');
    }

    /**
     * Set element's display to table-cell
     *
     * @return static
     */
    public function displayTableCell()
    {
        return $this->display('table-cell');
    }

    /**
     * Set element's display to table-column
     *
     * @return static
     */
    public function displayTableColumn()
    {
        return $this->display('table-column');
    }

    /**
     * Set element's display to table-column-group
     *
     * @return static
     */
    public function displayTableColumnGroup()
    {
        return $this->display('table-column-group');
    }

    /**
     * Set element's display to table-footer-group
     *
     * @return static
     */
    public function displayTableFooterGroup()
    {
        return $this->display('table-footer-group');
    }

    /**
     * Set element's display to table-header-group
     *
     * @return static
     */
    public function displayTableHeaderGroup()
    {
        return $this->display('table-header-group');
    }

    /**
     * Set element's display to table-row
     *
     * @return static
     */
    public function displayTableRow()
    {
        return $this->display('table-row');
    }

    /**
     * Set element's display to table-row-group
     *
     * @return static
     */
    public function displayTableRowGroup()
    {
        return $this->display('table-row-group');
    }

    /**
     * Float the element to the left of its container
     *
     * @return static
     */
    public function floatLeft()
    {
        return $this->addClass('float-left');
    }

    /**
     * Remove float of the element
     *
     * @return static
     */
    public function floatNone()
    {
        return $this->addClass('float-none');
    }

    /**
     * Float the element to the right of its container
     *
     * @return static
     */
    public function floatRight()
    {
        return $this->addClass('float-right');
    }

    /**
     * Set element's display to none
     *
     * @return static
     */
    public function hidden()
    {
        return $this->display('hidden');
    }

    /**
     * Controlling how the element handles content that is too large for the container.
     *
     * @param string $type ['auto', 'hidden', 'visible', 'scroll']
     * @return static
     */
    public function overflow(string $type)
    {
        return $this->addClass("overflow-$type");
    }

    /**
     * Controlling how the element handles content that is too large for the container (horizontal)
     *
     * @param string $type ['auto', 'hidden', 'visible', 'scroll']
     * @return static
     */
    public function overflowX(string $type)
    {
        return $this->addClass("overflow-x-$type");
    }

    /**
     * Controlling how the element handles content that is too large for the container (vertical)
     *
     * @param string $type ['auto', 'hidden', 'visible', 'scroll']
     * @return static
     */
    public function overflowY(string $type)
    {
        return $this->addClass("overflow-y-$type");
    }

    /**
     * Add scrollbars to the element in the event that its content overflows the bounds of that element
     *
     * @return static
     */
    public function overflowAuto()
    {
        return $this->overflow('auto');
    }

    /**
     * To clip any content within the element that overflows the bounds of that element
     *
     * @return static
     */
    public function overflowHidden()
    {
        return $this->overflow('hidden');
    }

    /**
     * To prevent content within the element from being clipped
     *
     * @return static
     */
    public function overflowVisible()
    {
        return $this->overflow('visible');
    }

    /**
     * Add scrollbars to the element
     *
     * @return static
     */
    public function overflowScroll()
    {
        return $this->overflow('scroll');
    }

    /**
     * Allow horizontal scrolling if needed
     *
     * @return static
     */
    public function overflowXAuto()
    {
        return $this->overflowX('auto');
    }

    /**
     * Allow vertical scrolling if needed
     *
     * @return static
     */
    public function overflowYAuto()
    {
        return $this->overflowY('auto');
    }

    /**
     * To clip any content within the element that overflows the bounds of that element horizontal
     *
     * @return static
     */
    public function overflowXHidden()
    {
        return $this->overflowX('hidden');
    }

    /**
     * To clip any content within the element that overflows the bounds of that element vertical
     *
     * @return static
     */
    public function overflowYHidden()
    {
        return $this->overflowY('hidden');
    }

    /**
     * To prevent content within the element from being clipped horizontal
     *
     * @return static
     */
    public function overflowXVisible()
    {
        return $this->overflowX('visible');
    }

    /**
     * To prevent content within the element from being clipped vertical
     *
     * @return static
     */
    public function overflowYVisible()
    {
        return $this->overflowY('visible');
    }

    /**
     * Add horizontal scrollbar to the element
     *
     * @return static
     */
    public function overflowXScroll()
    {
        return $this->overflowX('scroll');
    }

    /**
     * Add vertical scrollbar to the element
     *
     * @return static
     */
    public function overflowYScroll()
    {
        return $this->overflowY('scroll');
    }

    /**
     * Controlling how a replaced element's content should be resized
     *
     * @param string $type ['contain', 'cover', 'fill', 'none', 'scale-down']
     * @return static
     */
    public function objectFit(string $type)
    {
        return $this->addClass("object-$type");
    }

    /**
     * Resize the element's content to stay contained within its container
     *
     * @return static
     */
    public function objectContain()
    {
        return $this->objectFit('contain');
    }

    /**
     * Resize the element's content to cover its container
     *
     * @return static
     */
    public function objectCover()
    {
        return $this->objectFit('cover');
    }

    /**
     * Stretch the element's content to fit its container
     *
     * @return static
     */
    public function objectFill()
    {
        return $this->objectFit('fill');
    }

    /**
     * Display the element's content at its original size ignoring the container size
     *
     * @return static
     */
    public function objectNone()
    {
        return $this->objectFit('none');
    }

    /**
     * Display the element's content at its original size but scale it down to fit its container if necessary
     *
     * @return static
     */
    public function objectScaleDown()
    {
        return $this->objectFit('scale-down');
    }

    /**
     * To specify how a replaced element's content should be positioned within its container
     *
     * @param string $type ['bottom', 'center', 'left', 'left-bottom', 'left-top', 'right', 'right-bottom', 'right-top', 'top']
     * @return static
     */
    public function objectPosition(string $type)
    {
        return $this->addClass("object-$type");
    }

    /**
     * Element's content should be positioned in bottom of container
     *
     * @return static
     */
    public function objectBottom()
    {
        return $this->objectPosition('bottom');
    }

    /**
     * Element's content should be positioned in center of container
     *
     * @return static
     */
    public function objectCenter()
    {
        return $this->objectPosition('center');
    }

    /**
     * Element's content should be positioned in left of container
     *
     * @return static
     */
    public function objectLeft()
    {
        return $this->objectPosition('left');
    }

    /**
     * Element's content should be positioned in left-bottom of container
     *
     * @return static
     */
    public function objectLeftBottom()
    {
        return $this->objectPosition('left-bottom');
    }

    /**
     * Element's content should be positioned in left-top of container
     *
     * @return static
     */
    public function objectLeftTop()
    {
        return $this->objectPosition('left-top');
    }

    /**
     * Element's content should be positioned in right of container
     *
     * @return static
     */
    public function objectRight()
    {
        return $this->objectPosition('right');
    }

    /**
     * Element's content should be positioned in right-bottom of container
     *
     * @return static
     */
    public function objectRightBottom()
    {
        return $this->objectPosition('right-bottom');
    }

    /**
     * Element's content should be positioned in right-top of container
     *
     * @return static
     */
    public function objectRightTop()
    {
        return $this->objectPosition('right-top');
    }

    /**
     * Element's content should be positioned in top of container
     *
     * @return static
     */
    public function objectTop()
    {
        return $this->objectPosition('top');
    }
}
