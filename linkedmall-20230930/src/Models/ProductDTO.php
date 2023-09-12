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

    /**
     * @example 22****09
     *
     * @var string
     */
    public $shopId;

    /**
     * @example 6600****6737
     *
     * @var string
     */
    public $skuId;
    protected $_name = [
        'price'     => 'price',
        'productId' => 'productId',
        'quantity'  => 'quantity',
        'shopId'    => 'shopId',
        'skuId'     => 'skuId',
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
        if (null !== $this->quantity) {
            $res['quantity'] = $this->quantity;
        }
        if (null !== $this->shopId) {
            $res['shopId'] = $this->shopId;
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
        if (isset($map['quantity'])) {
            $model->quantity = $map['quantity'];
        }
        if (isset($map['shopId'])) {
            $model->shopId = $map['shopId'];
        }
        if (isset($map['skuId'])) {
            $model->skuId = $map['skuId'];
        }

        return $model;
    }
}
