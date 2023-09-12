<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Tea\Model;

class Good extends Model
{
    /**
     * @example 儿童学习桌
     *
     * @var string
     */
    public $goodName;

    /**
     * @example 6600****6736
     *
     * @var string
     */
    public $productId;

    /**
     * @example 1
     *
     * @var int
     */
    public $quantity;
    protected $_name = [
        'goodName'  => 'goodName',
        'productId' => 'productId',
        'quantity'  => 'quantity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->goodName) {
            $res['goodName'] = $this->goodName;
        }
        if (null !== $this->productId) {
            $res['productId'] = $this->productId;
        }
        if (null !== $this->quantity) {
            $res['quantity'] = $this->quantity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Good
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['goodName'])) {
            $model->goodName = $map['goodName'];
        }
        if (isset($map['productId'])) {
            $model->productId = $map['productId'];
        }
        if (isset($map['quantity'])) {
            $model->quantity = $map['quantity'];
        }

        return $model;
    }
}
