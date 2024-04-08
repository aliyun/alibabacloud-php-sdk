<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Tea\Model;

class Sku extends Model
{
    /**
     * @example 6922454329176
     *
     * @var string
     */
    public $barcode;

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
     * @example https:////img.alicdn.com/imgextra///img.alicdn.com/imgextra/i2/2216003305543/O1CN010DEQCX1qokFYGRfPE_!!2216003305543.png
     *
     * @var string
     */
    public $picUrl;

    /**
     * @example 999900
     *
     * @var int
     */
    public $platformPrice;

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
     * @example 3
     *
     * @var int
     */
    public $rankValue;

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
     * @var SkuSpec[]
     */
    public $skuSpecs;

    /**
     * @example 颜色分类:天蓝色
     *
     * @var string
     */
    public $skuSpecsCode;

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
        'barcode'       => 'barcode',
        'canSell'       => 'canSell',
        'divisionCode'  => 'divisionCode',
        'fuzzyQuantity' => 'fuzzyQuantity',
        'markPrice'     => 'markPrice',
        'picUrl'        => 'picUrl',
        'platformPrice' => 'platformPrice',
        'price'         => 'price',
        'productId'     => 'productId',
        'quantity'      => 'quantity',
        'rankValue'     => 'rankValue',
        'shopId'        => 'shopId',
        'skuId'         => 'skuId',
        'skuSpecs'      => 'skuSpecs',
        'skuSpecsCode'  => 'skuSpecsCode',
        'skuStatus'     => 'skuStatus',
        'title'         => 'title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->barcode) {
            $res['barcode'] = $this->barcode;
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
        if (null !== $this->picUrl) {
            $res['picUrl'] = $this->picUrl;
        }
        if (null !== $this->platformPrice) {
            $res['platformPrice'] = $this->platformPrice;
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
        if (null !== $this->rankValue) {
            $res['rankValue'] = $this->rankValue;
        }
        if (null !== $this->shopId) {
            $res['shopId'] = $this->shopId;
        }
        if (null !== $this->skuId) {
            $res['skuId'] = $this->skuId;
        }
        if (null !== $this->skuSpecs) {
            $res['skuSpecs'] = [];
            if (null !== $this->skuSpecs && \is_array($this->skuSpecs)) {
                $n = 0;
                foreach ($this->skuSpecs as $item) {
                    $res['skuSpecs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->skuSpecsCode) {
            $res['skuSpecsCode'] = $this->skuSpecsCode;
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
     * @return Sku
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['barcode'])) {
            $model->barcode = $map['barcode'];
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
        if (isset($map['picUrl'])) {
            $model->picUrl = $map['picUrl'];
        }
        if (isset($map['platformPrice'])) {
            $model->platformPrice = $map['platformPrice'];
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
        if (isset($map['rankValue'])) {
            $model->rankValue = $map['rankValue'];
        }
        if (isset($map['shopId'])) {
            $model->shopId = $map['shopId'];
        }
        if (isset($map['skuId'])) {
            $model->skuId = $map['skuId'];
        }
        if (isset($map['skuSpecs'])) {
            if (!empty($map['skuSpecs'])) {
                $model->skuSpecs = [];
                $n               = 0;
                foreach ($map['skuSpecs'] as $item) {
                    $model->skuSpecs[$n++] = null !== $item ? SkuSpec::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['skuSpecsCode'])) {
            $model->skuSpecsCode = $map['skuSpecsCode'];
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
