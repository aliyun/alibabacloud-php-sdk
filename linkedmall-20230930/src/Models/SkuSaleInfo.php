<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Tea\Model;

class SkuSaleInfo extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $canSell;

    /**
     * @example 110000
     *
     * @var string
     */
    public $divisionCode;

    /**
     * @example 有货
     *
     * @var string
     */
    public $fuzzyQuantity;

    /**
     * @example 999900
     *
     * @var int
     */
    public $markPrice;

    /**
     * @example 19800
     *
     * @var int
     */
    public $price;

    /**
     * @example 660460842235822080
     *
     * @var string
     */
    public $productId;

    /**
     * @example -1
     *
     * @var int
     */
    public $quantity;

    /**
     * @example 21000017
     *
     * @var string
     */
    public $shopId;

    /**
     * @example 660460842235822081
     *
     * @var string
     */
    public $skuId;

    /**
     * @example Online
     *
     * @var string
     */
    public $skuStatus;

    /**
     * @example 天蓝色
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'canSell'       => 'canSell',
        'divisionCode'  => 'divisionCode',
        'fuzzyQuantity' => 'fuzzyQuantity',
        'markPrice'     => 'markPrice',
        'price'         => 'price',
        'productId'     => 'productId',
        'quantity'      => 'quantity',
        'shopId'        => 'shopId',
        'skuId'         => 'skuId',
        'skuStatus'     => 'skuStatus',
        'title'         => 'title',
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
        if (null !== $this->divisionCode) {
            $res['divisionCode'] = $this->divisionCode;
        }
        if (null !== $this->fuzzyQuantity) {
            $res['fuzzyQuantity'] = $this->fuzzyQuantity;
        }
        if (null !== $this->markPrice) {
            $res['markPrice'] = $this->markPrice;
        }
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
        if (null !== $this->skuStatus) {
            $res['skuStatus'] = $this->skuStatus;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SkuSaleInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['canSell'])) {
            $model->canSell = $map['canSell'];
        }
        if (isset($map['divisionCode'])) {
            $model->divisionCode = $map['divisionCode'];
        }
        if (isset($map['fuzzyQuantity'])) {
            $model->fuzzyQuantity = $map['fuzzyQuantity'];
        }
        if (isset($map['markPrice'])) {
            $model->markPrice = $map['markPrice'];
        }
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
        if (isset($map['skuStatus'])) {
            $model->skuStatus = $map['skuStatus'];
        }
        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        return $model;
    }
}
