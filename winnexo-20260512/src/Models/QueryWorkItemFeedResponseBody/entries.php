<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\QueryWorkItemFeedResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\QueryWorkItemFeedResponseBody\entries\item;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\QueryWorkItemFeedResponseBody\entries\items;

class entries extends Model
{
    /**
     * @var string
     */
    public $entryType;

    /**
     * @var bool
     */
    public $hasMoreChildren;

    /**
     * @var item
     */
    public $item;

    /**
     * @var items[]
     */
    public $items;

    /**
     * @var string
     */
    public $latestWorkItemAt;

    /**
     * @var int
     */
    public $matchedWorkItemCount;

    /**
     * @var string
     */
    public $sourceTaskId;

    /**
     * @var string
     */
    public $taskName;
    protected $_name = [
        'entryType' => 'entryType',
        'hasMoreChildren' => 'hasMoreChildren',
        'item' => 'item',
        'items' => 'items',
        'latestWorkItemAt' => 'latestWorkItemAt',
        'matchedWorkItemCount' => 'matchedWorkItemCount',
        'sourceTaskId' => 'sourceTaskId',
        'taskName' => 'taskName',
    ];

    public function validate()
    {
        if (null !== $this->item) {
            $this->item->validate();
        }
        if (\is_array($this->items)) {
            Model::validateArray($this->items);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->entryType) {
            $res['entryType'] = $this->entryType;
        }

        if (null !== $this->hasMoreChildren) {
            $res['hasMoreChildren'] = $this->hasMoreChildren;
        }

        if (null !== $this->item) {
            $res['item'] = null !== $this->item ? $this->item->toArray($noStream) : $this->item;
        }

        if (null !== $this->items) {
            if (\is_array($this->items)) {
                $res['items'] = [];
                $n1 = 0;
                foreach ($this->items as $item1) {
                    $res['items'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->latestWorkItemAt) {
            $res['latestWorkItemAt'] = $this->latestWorkItemAt;
        }

        if (null !== $this->matchedWorkItemCount) {
            $res['matchedWorkItemCount'] = $this->matchedWorkItemCount;
        }

        if (null !== $this->sourceTaskId) {
            $res['sourceTaskId'] = $this->sourceTaskId;
        }

        if (null !== $this->taskName) {
            $res['taskName'] = $this->taskName;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['entryType'])) {
            $model->entryType = $map['entryType'];
        }

        if (isset($map['hasMoreChildren'])) {
            $model->hasMoreChildren = $map['hasMoreChildren'];
        }

        if (isset($map['item'])) {
            $model->item = item::fromMap($map['item']);
        }

        if (isset($map['items'])) {
            if (!empty($map['items'])) {
                $model->items = [];
                $n1 = 0;
                foreach ($map['items'] as $item1) {
                    $model->items[$n1] = items::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['latestWorkItemAt'])) {
            $model->latestWorkItemAt = $map['latestWorkItemAt'];
        }

        if (isset($map['matchedWorkItemCount'])) {
            $model->matchedWorkItemCount = $map['matchedWorkItemCount'];
        }

        if (isset($map['sourceTaskId'])) {
            $model->sourceTaskId = $map['sourceTaskId'];
        }

        if (isset($map['taskName'])) {
            $model->taskName = $map['taskName'];
        }

        return $model;
    }
}
