<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryItemDetailInnerResponseBody\item;

use AlibabaCloud\Tea\Model;

class skus extends Model
{
    /**
     * @example {"key":"value"}
     *
     * @var string
     */
    public $extJson;

    /**
     * @example 62887962****
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
     * @example 2990
     *
     * @var int
     */
    public $pointPrice;

    /**
     * @example 1990
     *
     * @var int
     */
    public $points;

    /**
     * @example 0
     *
     * @var int
     */
    public $pointsAmount;

    /**
     * @example 2890
     *
     * @var int
     */
    public $priceCent;

    /**
     * @example 4100
     *
     * @var int
     */
    public $quantity;

    /**
     * @example 1990
     *
     * @var int
     */
    public $reservePrice;

    /**
     * @example ""
     *
     * @var string
     */
    public $skuDesc;

    /**
     * @description skuid
     *
     * @example 465309897****
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
    public $skuPvs;

    /**
     * @var string
     */
    public $skuTitle;

    /**
     * @example 2
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'extJson'      => 'ExtJson',
        'itemId'       => 'ItemId',
        'lmItemId'     => 'LmItemId',
        'pointPrice'   => 'PointPrice',
        'points'       => 'Points',
        'pointsAmount' => 'PointsAmount',
        'priceCent'    => 'PriceCent',
        'quantity'     => 'Quantity',
        'reservePrice' => 'ReservePrice',
        'skuDesc'      => 'SkuDesc',
        'skuId'        => 'SkuId',
        'skuPicUrl'    => 'SkuPicUrl',
        'skuPvs'       => 'SkuPvs',
        'skuTitle'     => 'SkuTitle',
        'status'       => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->skuDesc) {
            $res['SkuDesc'] = $this->skuDesc;
        }
        if (null !== $this->skuId) {
            $res['SkuId'] = $this->skuId;
        }
        if (null !== $this->skuPicUrl) {
            $res['SkuPicUrl'] = $this->skuPicUrl;
        }
        if (null !== $this->skuPvs) {
            $res['SkuPvs'] = $this->skuPvs;
        }
        if (null !== $this->skuTitle) {
            $res['SkuTitle'] = $this->skuTitle;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return skus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['SkuDesc'])) {
            $model->skuDesc = $map['SkuDesc'];
        }
        if (isset($map['SkuId'])) {
            $model->skuId = $map['SkuId'];
        }
        if (isset($map['SkuPicUrl'])) {
            $model->skuPicUrl = $map['SkuPicUrl'];
        }
        if (isset($map['SkuPvs'])) {
            $model->skuPvs = $map['SkuPvs'];
        }
        if (isset($map['SkuTitle'])) {
            $model->skuTitle = $map['SkuTitle'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
