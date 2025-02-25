<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wss\V20211221\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wss\V20211221\Models\CreateMultiOrderRequest\orderItems;

class CreateMultiOrderRequest extends Model
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
     * @var string[]
     */
    public $properties;
    /**
     * @var int
     */
    public $resellerOwnerUid;
    protected $_name = [
        'orderItems'       => 'OrderItems',
        'orderType'        => 'OrderType',
        'properties'       => 'Properties',
        'resellerOwnerUid' => 'ResellerOwnerUid',
    ];

    public function validate()
    {
        if (\is_array($this->orderItems)) {
            Model::validateArray($this->orderItems);
        }
        if (\is_array($this->properties)) {
            Model::validateArray($this->properties);
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

        if (null !== $this->properties) {
            if (\is_array($this->properties)) {
                $res['Properties'] = [];
                foreach ($this->properties as $key1 => $value1) {
                    $res['Properties'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->resellerOwnerUid) {
            $res['ResellerOwnerUid'] = $this->resellerOwnerUid;
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
            if (!empty($map['Properties'])) {
                $model->properties = [];
                foreach ($map['Properties'] as $key1 => $value1) {
                    $model->properties[$key1] = $value1;
                }
            }
        }

        if (isset($map['ResellerOwnerUid'])) {
            $model->resellerOwnerUid = $map['ResellerOwnerUid'];
        }

        return $model;
    }
}
