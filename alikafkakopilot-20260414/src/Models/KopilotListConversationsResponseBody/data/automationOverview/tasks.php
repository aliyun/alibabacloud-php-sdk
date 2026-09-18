<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AlikafkaKopilot\V20260414\Models\KopilotListConversationsResponseBody\data\automationOverview;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AlikafkaKopilot\V20260414\Models\KopilotListConversationsResponseBody\data\automationOverview\tasks\items;

class tasks extends Model
{
    /**
     * @var bool
     */
    public $hasMore;

    /**
     * @var items[]
     */
    public $items;

    /**
     * @var string
     */
    public $nextCursor;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'hasMore' => 'HasMore',
        'items' => 'Items',
        'nextCursor' => 'NextCursor',
        'total' => 'Total',
    ];

    public function validate()
    {
        if (\is_array($this->items)) {
            Model::validateArray($this->items);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hasMore) {
            $res['HasMore'] = $this->hasMore;
        }

        if (null !== $this->items) {
            if (\is_array($this->items)) {
                $res['Items'] = [];
                $n1 = 0;
                foreach ($this->items as $item1) {
                    $res['Items'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nextCursor) {
            $res['NextCursor'] = $this->nextCursor;
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['HasMore'])) {
            $model->hasMore = $map['HasMore'];
        }

        if (isset($map['Items'])) {
            if (!empty($map['Items'])) {
                $model->items = [];
                $n1 = 0;
                foreach ($map['Items'] as $item1) {
                    $model->items[$n1] = items::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['NextCursor'])) {
            $model->nextCursor = $map['NextCursor'];
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
