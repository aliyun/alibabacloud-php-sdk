<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Dara\Model;

class Sku extends Model
{
    /**
     * @var string
     */
    public $barcode;
    /**
     * @var bool
     */
    public $canSell;
    /**
     * @var int
     */
    public $discountRetailPrice;
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
     * @var string
     */
    public $picUrl;
    /**
     * @var int
     */
    public $platformPrice;
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
     * @var int
     */
    public $rankValue;
    /**
     * @var string
     */
    public $shopId;
    /**
     * @var string
     */
    public $skuId;
    /**
     * @var SkuSpec[]
     */
    public $skuSpecs;
    /**
     * @var string
     */
    public $skuSpecsCode;
    /**
     * @var string
     */
    public $skuStatus;
    /**
     * @var int
     */
    public $suggestedRetailPrice;
    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'barcode'              => 'barcode',
        'canSell'              => 'canSell',
        'discountRetailPrice'  => 'discountRetailPrice',
        'divisionCode'         => 'divisionCode',
        'fuzzyQuantity'        => 'fuzzyQuantity',
        'markPrice'            => 'markPrice',
        'picUrl'               => 'picUrl',
        'platformPrice'        => 'platformPrice',
        'price'                => 'price',
        'productId'            => 'productId',
        'quantity'             => 'quantity',
        'rankValue'            => 'rankValue',
        'shopId'               => 'shopId',
        'skuId'                => 'skuId',
        'skuSpecs'             => 'skuSpecs',
        'skuSpecsCode'         => 'skuSpecsCode',
        'skuStatus'            => 'skuStatus',
        'suggestedRetailPrice' => 'suggestedRetailPrice',
        'title'                => 'title',
    ];

    public function validate()
    {
        if (\is_array($this->skuSpecs)) {
            Model::validateArray($this->skuSpecs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->barcode) {
            $res['barcode'] = $this->barcode;
        }

        if (null !== $this->canSell) {
            $res['canSell'] = $this->canSell;
        }

        if (null !== $this->discountRetailPrice) {
            $res['discountRetailPrice'] = $this->discountRetailPrice;
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
            if (\is_array($this->skuSpecs)) {
                $res['skuSpecs'] = [];
                $n1              = 0;
                foreach ($this->skuSpecs as $item1) {
                    $res['skuSpecs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->skuSpecsCode) {
            $res['skuSpecsCode'] = $this->skuSpecsCode;
        }

        if (null !== $this->skuStatus) {
            $res['skuStatus'] = $this->skuStatus;
        }

        if (null !== $this->suggestedRetailPrice) {
            $res['suggestedRetailPrice'] = $this->suggestedRetailPrice;
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
        if (isset($map['barcode'])) {
            $model->barcode = $map['barcode'];
        }

        if (isset($map['canSell'])) {
            $model->canSell = $map['canSell'];
        }

        if (isset($map['discountRetailPrice'])) {
            $model->discountRetailPrice = $map['discountRetailPrice'];
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
                $n1              = 0;
                foreach ($map['skuSpecs'] as $item1) {
                    $model->skuSpecs[$n1++] = SkuSpec::fromMap($item1);
                }
            }
        }

        if (isset($map['skuSpecsCode'])) {
            $model->skuSpecsCode = $map['skuSpecsCode'];
        }

        if (isset($map['skuStatus'])) {
            $model->skuStatus = $map['skuStatus'];
        }

        if (isset($map['suggestedRetailPrice'])) {
            $model->suggestedRetailPrice = $map['suggestedRetailPrice'];
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        return $model;
    }
}
