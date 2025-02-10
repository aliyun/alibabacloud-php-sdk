<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wss\V20211221\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wss\V20211221\Models\CreateMultiOrderShrinkRequest\orderItems;

class CreateMultiOrderShrinkRequest extends Model
{
    /**
     * @var orderItems[]
     */
    public $orderItems;
    /**
     * @var string
     */
    public $orderType;
    /**
     * @var string
     */
    public $propertiesShrink;
    protected $_name = [
        'orderItems'       => 'OrderItems',
        'orderType'        => 'OrderType',
        'propertiesShrink' => 'Properties',
    ];

    public function validate()
    {
        if (\is_array($this->orderItems)) {
            Model::validateArray($this->orderItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->orderItems) {
            if (\is_array($this->orderItems)) {
                $res['OrderItems'] = [];
                $n1                = 0;
                foreach ($this->orderItems as $item1) {
                    $res['OrderItems'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }

        if (null !== $this->propertiesShrink) {
            $res['Properties'] = $this->propertiesShrink;
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
        if (isset($map['OrderItems'])) {
            if (!empty($map['OrderItems'])) {
                $model->orderItems = [];
                $n1                = 0;
                foreach ($map['OrderItems'] as $item1) {
                    $model->orderItems[$n1++] = orderItems::fromMap($item1);
                }
            }
        }

        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }

        if (isset($map['Properties'])) {
            $model->propertiesShrink = $map['Properties'];
        }

        return $model;
    }
}
