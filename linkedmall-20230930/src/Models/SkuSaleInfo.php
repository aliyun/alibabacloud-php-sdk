<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Dara\Model;

class SkuSaleInfo extends Model
{
    /**
     * @var string
     */
    public $canNotSellReason;

    /**
     * @var bool
     */
    public $canSell;

    /**
     * @var string
     */
    public $divisionCode;

    /**
     * @var string
     */
    public $fuzzyQuantity;

    /**
     * @var int
     */
    public $markPrice;

    /**
     * @var int
     */
    public $price;

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
    public $shopId;

    /**
     * @var string
     */
    public $skuId;

    /**
     * @var string
     */
    public $skuStatus;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'canNotSellReason' => 'canNotSellReason',
        'canSell' => 'canSell',
        'divisionCode' => 'divisionCode',
        'fuzzyQuantity' => 'fuzzyQuantity',
        'markPrice' => 'markPrice',
        'price' => 'price',
        'productId' => 'productId',
        'quantity' => 'quantity',
        'shopId' => 'shopId',
        'skuId' => 'skuId',
        'skuStatus' => 'skuStatus',
        'title' => 'title',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->canNotSellReason) {
            $res['canNotSellReason'] = $this->canNotSellReason;
        }

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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['canNotSellReason'])) {
            $model->canNotSellReason = $map['canNotSellReason'];
        }

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
