<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Dara\Model;

class Good extends Model
{
    /**
     * @var string
     */
    public $goodName;

    /**
     * @var string
     */
    public $productId;

    /**
     * @var int
     */
    public $quantity;

    /**
     * @var string
     */
    public $skuId;

    /**
     * @var string
     */
    public $skuTitle;
    protected $_name = [
        'goodName' => 'goodName',
        'productId' => 'productId',
        'quantity' => 'quantity',
        'skuId' => 'skuId',
        'skuTitle' => 'skuTitle',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->skuId) {
            $res['skuId'] = $this->skuId;
        }

        if (null !== $this->skuTitle) {
            $res['skuTitle'] = $this->skuTitle;
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
        if (isset($map['goodName'])) {
            $model->goodName = $map['goodName'];
        }

        if (isset($map['productId'])) {
            $model->productId = $map['productId'];
        }

        if (isset($map['quantity'])) {
            $model->quantity = $map['quantity'];
        }

        if (isset($map['skuId'])) {
            $model->skuId = $map['skuId'];
        }

        if (isset($map['skuTitle'])) {
            $model->skuTitle = $map['skuTitle'];
        }

        return $model;
    }
}
