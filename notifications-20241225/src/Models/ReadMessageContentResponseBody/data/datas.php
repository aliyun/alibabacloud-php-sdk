<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Notifications\V20241225\Models\ReadMessageContentResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Notifications\V20241225\Models\ReadMessageContentResponseBody\data\datas\item;
use AlibabaCloud\SDK\Notifications\V20241225\Models\ReadMessageContentResponseBody\data\datas\lastItem;
use AlibabaCloud\SDK\Notifications\V20241225\Models\ReadMessageContentResponseBody\data\datas\nextItem;

class datas extends Model
{
    /**
     * @var item[]
     */
    public $item;

    /**
     * @var lastItem[]
     */
    public $lastItem;

    /**
     * @var nextItem[]
     */
    public $nextItem;
    protected $_name = [
        'item' => 'Item',
        'lastItem' => 'LastItem',
        'nextItem' => 'NextItem',
    ];

    public function validate()
    {
        if (\is_array($this->item)) {
            Model::validateArray($this->item);
        }
        if (\is_array($this->lastItem)) {
            Model::validateArray($this->lastItem);
        }
        if (\is_array($this->nextItem)) {
            Model::validateArray($this->nextItem);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->item) {
            if (\is_array($this->item)) {
                $res['Item'] = [];
                $n1 = 0;
                foreach ($this->item as $item1) {
                    $res['Item'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->lastItem) {
            if (\is_array($this->lastItem)) {
                $res['LastItem'] = [];
                $n1 = 0;
                foreach ($this->lastItem as $item1) {
                    $res['LastItem'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nextItem) {
            if (\is_array($this->nextItem)) {
                $res['NextItem'] = [];
                $n1 = 0;
                foreach ($this->nextItem as $item1) {
                    $res['NextItem'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Item'])) {
            if (!empty($map['Item'])) {
                $model->item = [];
                $n1 = 0;
                foreach ($map['Item'] as $item1) {
                    $model->item[$n1] = item::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['LastItem'])) {
            if (!empty($map['LastItem'])) {
                $model->lastItem = [];
                $n1 = 0;
                foreach ($map['LastItem'] as $item1) {
                    $model->lastItem[$n1] = lastItem::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['NextItem'])) {
            if (!empty($map['NextItem'])) {
                $model->nextItem = [];
                $n1 = 0;
                foreach ($map['NextItem'] as $item1) {
                    $model->nextItem[$n1] = nextItem::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
