<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Tea\Model;

class ProductDTO extends Model
{
    /**
     * @example 100
     *
     * @var int
     */
    public $price;

    /**
     * @description This parameter is required.
     *
     * @example 6600****6736
     *
     * @var string
     */
    public $productId;

    /**
     * @description This parameter is required.
     *
     * @example 56****2304
     *
     * @var string
     */
    public $purchaserId;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $quantity;

    /**
     * @description This parameter is required.
     *
     * @example 6600****6737
     *
     * @var string
     */
    public $skuId;
    protected $_name = [
        'price'       => 'price',
        'productId'   => 'productId',
        'purchaserId' => 'purchaserId',
        'quantity'    => 'quantity',
        'skuId'       => 'skuId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->price) {
            $res['price'] = $this->price;
        }
        if (null !== $this->productId) {
            $res['productId'] = $this->productId;
        }
        if (null !== $this->purchaserId) {
            $res['purchaserId'] = $this->purchaserId;
        }
        if (null !== $this->quantity) {
            $res['quantity'] = $this->quantity;
        }
        if (null !== $this->skuId) {
            $res['skuId'] = $this->skuId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ProductDTO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['price'])) {
            $model->price = $map['price'];
        }
        if (isset($map['productId'])) {
            $model->productId = $map['productId'];
        }
        if (isset($map['purchaserId'])) {
            $model->purchaserId = $map['purchaserId'];
        }
        if (isset($map['quantity'])) {
            $model->quantity = $map['quantity'];
        }
        if (isset($map['skuId'])) {
            $model->skuId = $map['skuId'];
        }

        return $model;
    }
}
