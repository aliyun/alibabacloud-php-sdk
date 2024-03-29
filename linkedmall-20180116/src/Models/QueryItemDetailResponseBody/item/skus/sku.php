<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryItemDetailResponseBody\item\skus;

use AlibabaCloud\Tea\Model;

class sku extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $canSell;

    /**
     * @example {}
     *
     * @var mixed[]
     */
    public $customizedAttributeMap;

    /**
     * @example {}
     *
     * @var string
     */
    public $extJson;

    /**
     * @example 63894836****
     *
     * @var int
     */
    public $itemId;

    /**
     * @example 10000102-64426301****
     *
     * @var string
     */
    public $lmItemId;

    /**
     * @example 4990
     *
     * @var int
     */
    public $pointPrice;

    /**
     * @example 2499
     *
     * @var int
     */
    public $points;

    /**
     * @example 4490
     *
     * @var int
     */
    public $pointsAmount;

    /**
     * @example 4990
     *
     * @var int
     */
    public $priceCent;

    /**
     * @example 1
     *
     * @var int
     */
    public $quantity;

    /**
     * @example 4490
     *
     * @var int
     */
    public $reservePrice;

    /**
     * @example 456458315****
     *
     * @var int
     */
    public $skuId;

    /**
     * @example https://img.alicdn.com/imgextra/i3/22066070*****\/O1CN01jCtHkC1ZjO2Q8DWUk_!!0-item_pic.jpg
     *
     * @var string
     */
    public $skuPicUrl;

    /**
     * @var string
     */
    public $skuProperties;

    /**
     * @example {}
     *
     * @var string
     */
    public $skuPropertiesJson;

    /**
     * @var string
     */
    public $skuTitle;
    protected $_name = [
        'canSell'                => 'CanSell',
        'customizedAttributeMap' => 'CustomizedAttributeMap',
        'extJson'                => 'ExtJson',
        'itemId'                 => 'ItemId',
        'lmItemId'               => 'LmItemId',
        'pointPrice'             => 'PointPrice',
        'points'                 => 'Points',
        'pointsAmount'           => 'PointsAmount',
        'priceCent'              => 'PriceCent',
        'quantity'               => 'Quantity',
        'reservePrice'           => 'ReservePrice',
        'skuId'                  => 'SkuId',
        'skuPicUrl'              => 'SkuPicUrl',
        'skuProperties'          => 'SkuProperties',
        'skuPropertiesJson'      => 'SkuPropertiesJson',
        'skuTitle'               => 'SkuTitle',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->canSell) {
            $res['CanSell'] = $this->canSell;
        }
        if (null !== $this->customizedAttributeMap) {
            $res['CustomizedAttributeMap'] = $this->customizedAttributeMap;
        }
        if (null !== $this->extJson) {
            $res['ExtJson'] = $this->extJson;
        }
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }
        if (null !== $this->lmItemId) {
            $res['LmItemId'] = $this->lmItemId;
        }
        if (null !== $this->pointPrice) {
            $res['PointPrice'] = $this->pointPrice;
        }
        if (null !== $this->points) {
            $res['Points'] = $this->points;
        }
        if (null !== $this->pointsAmount) {
            $res['PointsAmount'] = $this->pointsAmount;
        }
        if (null !== $this->priceCent) {
            $res['PriceCent'] = $this->priceCent;
        }
        if (null !== $this->quantity) {
            $res['Quantity'] = $this->quantity;
        }
        if (null !== $this->reservePrice) {
            $res['ReservePrice'] = $this->reservePrice;
        }
        if (null !== $this->skuId) {
            $res['SkuId'] = $this->skuId;
        }
        if (null !== $this->skuPicUrl) {
            $res['SkuPicUrl'] = $this->skuPicUrl;
        }
        if (null !== $this->skuProperties) {
            $res['SkuProperties'] = $this->skuProperties;
        }
        if (null !== $this->skuPropertiesJson) {
            $res['SkuPropertiesJson'] = $this->skuPropertiesJson;
        }
        if (null !== $this->skuTitle) {
            $res['SkuTitle'] = $this->skuTitle;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sku
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CanSell'])) {
            $model->canSell = $map['CanSell'];
        }
        if (isset($map['CustomizedAttributeMap'])) {
            $model->customizedAttributeMap = $map['CustomizedAttributeMap'];
        }
        if (isset($map['ExtJson'])) {
            $model->extJson = $map['ExtJson'];
        }
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['LmItemId'])) {
            $model->lmItemId = $map['LmItemId'];
        }
        if (isset($map['PointPrice'])) {
            $model->pointPrice = $map['PointPrice'];
        }
        if (isset($map['Points'])) {
            $model->points = $map['Points'];
        }
        if (isset($map['PointsAmount'])) {
            $model->pointsAmount = $map['PointsAmount'];
        }
        if (isset($map['PriceCent'])) {
            $model->priceCent = $map['PriceCent'];
        }
        if (isset($map['Quantity'])) {
            $model->quantity = $map['Quantity'];
        }
        if (isset($map['ReservePrice'])) {
            $model->reservePrice = $map['ReservePrice'];
        }
        if (isset($map['SkuId'])) {
            $model->skuId = $map['SkuId'];
        }
        if (isset($map['SkuPicUrl'])) {
            $model->skuPicUrl = $map['SkuPicUrl'];
        }
        if (isset($map['SkuProperties'])) {
            $model->skuProperties = $map['SkuProperties'];
        }
        if (isset($map['SkuPropertiesJson'])) {
            $model->skuPropertiesJson = $map['SkuPropertiesJson'];
        }
        if (isset($map['SkuTitle'])) {
            $model->skuTitle = $map['SkuTitle'];
        }

        return $model;
    }
}
