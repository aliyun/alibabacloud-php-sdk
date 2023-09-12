<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Tea\Model;

class OrderProductResult extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $canSell;

    /**
     * @var mixed[]
     */
    public $features;

    /**
     * @example 库存为0
     *
     * @var string
     */
    public $message;

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
     * @example //img.alicdn.com/imgextra/i4/2216003305543/O1CN01bip3Un1qokG0
     *
     * @var string
     */
    public $productPicUrl;

    /**
     * @example 儿童学习桌
     *
     * @var string
     */
    public $productTitle;

    /**
     * @example 1
     *
     * @var int
     */
    public $quantity;

    /**
     * @example 20****09
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

    /**
     * @example 浅绿色
     *
     * @var string
     */
    public $skuTitle;
    protected $_name = [
        'canSell'       => 'canSell',
        'features'      => 'features',
        'message'       => 'message',
        'price'         => 'price',
        'productId'     => 'productId',
        'productPicUrl' => 'productPicUrl',
        'productTitle'  => 'productTitle',
        'quantity'      => 'quantity',
        'shopId'        => 'shopId',
        'skuId'         => 'skuId',
        'skuTitle'      => 'skuTitle',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->canSell) {
            $res['canSell'] = $this->canSell;
        }
        if (null !== $this->features) {
            $res['features'] = $this->features;
        }
        if (null !== $this->message) {
            $res['message'] = $this->message;
        }
        if (null !== $this->price) {
            $res['price'] = $this->price;
        }
        if (null !== $this->productId) {
            $res['productId'] = $this->productId;
        }
        if (null !== $this->productPicUrl) {
            $res['productPicUrl'] = $this->productPicUrl;
        }
        if (null !== $this->productTitle) {
            $res['productTitle'] = $this->productTitle;
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
        if (null !== $this->skuTitle) {
            $res['skuTitle'] = $this->skuTitle;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OrderProductResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['canSell'])) {
            $model->canSell = $map['canSell'];
        }
        if (isset($map['features'])) {
            $model->features = $map['features'];
        }
        if (isset($map['message'])) {
            $model->message = $map['message'];
        }
        if (isset($map['price'])) {
            $model->price = $map['price'];
        }
        if (isset($map['productId'])) {
            $model->productId = $map['productId'];
        }
        if (isset($map['productPicUrl'])) {
            $model->productPicUrl = $map['productPicUrl'];
        }
        if (isset($map['productTitle'])) {
            $model->productTitle = $map['productTitle'];
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
        if (isset($map['skuTitle'])) {
            $model->skuTitle = $map['skuTitle'];
        }

        return $model;
    }
}
