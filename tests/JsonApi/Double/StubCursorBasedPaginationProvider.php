<?php
declare(strict_types=1);

namespace WoohooLabs\Yin\Tests\JsonApi\Double;

use WoohooLabs\Yin\JsonApi\Schema\Pagination\CursorBasedPaginationLinkProviderTrait;

class StubCursorBasedPaginationProvider
{
    use CursorBasedPaginationLinkProviderTrait;

    /**
     * @var mixed
     */
    private $firstItem;

    /**
     * @var mixed
     */
    private $lastItem;

    /**
     * @var mixed
     */
    private $currentItem;

    /**
     * @var mixed
     */
    private $previousItem;

    /**
     * @var mixed
     */
    private $nextItem;

    /**
     * @param mixed $firstItem
     * @param mixed $lastItem
     * @param mixed $currentItem
     * @param mixed $previousItem
     * @param mixed $nextItem
     */
    public function __construct($firstItem, $lastItem, $currentItem, $previousItem, $nextItem)
    {
        $this->firstItem = $firstItem;
        $this->lastItem = $lastItem;
        $this->currentItem = $currentItem;
        $this->previousItem = $previousItem;
        $this->nextItem = $nextItem;
    }

    public function getFirstItem()
    {
        return $this->firstItem;
    }

    /**
     * @inheritDoc
     */
    public function getLastItem()
    {
        return $this->lastItem;
    }

    /**
     * @inheritDoc
     */
    public function getCurrentItem()
    {
        return $this->currentItem;
    }

    /**
     * @inheritDoc
     */
    public function getPreviousItem()
    {
        return $this->previousItem;
    }

    /**
     * @inheritDoc
     */
    public function getNextItem()
    {
        return $this->nextItem;
    }
}
