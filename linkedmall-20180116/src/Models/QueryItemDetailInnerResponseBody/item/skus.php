<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryItemDetailInnerResponseBody\item;

use AlibabaCloud\Tea\Model;

class skus extends Model
{
    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $priceCent;

    /**
     * @var string
     */
    public $skuPvs;

    /**
     * @var string
     */
    public $lmItemId;

    /**
     * @var int
     */
    public $pointPrice;

    /**
     * @var int
     */
    public $itemId;

    /**
     * @var string
     */
    public $skuTitle;

    /**
     * @var string
     */
    public $extJson;

    /**
     * @var int
     */
    public $skuId;

    /**
     * @var string
     */
    public $skuPicUrl;

    /**
     * @var int
     */
    public $points;

    /**
     * @var int
     */
    public $pointsAmount;

    /**
     * @var int
     */
    public $reservePrice;

    /**
     * @var string
     */
    public $skuDesc;

    /**
     * @var int
     */
    public $quantity;
    protected $_name = [
        'status'       => 'Status',
        'priceCent'    => 'PriceCent',
        'skuPvs'       => 'SkuPvs',
        'lmItemId'     => 'LmItemId',
        'pointPrice'   => 'PointPrice',
        'itemId'       => 'ItemId',
        'skuTitle'     => 'SkuTitle',
        'extJson'      => 'ExtJson',
        'skuId'        => 'SkuId',
        'skuPicUrl'    => 'SkuPicUrl',
        'points'       => 'Points',
        'pointsAmount' => 'PointsAmount',
        'reservePrice' => 'ReservePrice',
        'skuDesc'      => 'SkuDesc',
        'quantity'     => 'Quantity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->priceCent) {
            $res['PriceCent'] = $this->priceCent;
        }
        if (null !== $this->skuPvs) {
            $res['SkuPvs'] = $this->skuPvs;
        }
        if (null !== $this->lmItemId) {
            $res['LmItemId'] = $this->lmItemId;
        }
        if (null !== $this->pointPrice) {
            $res['PointPrice'] = $this->pointPrice;
        }
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }
        if (null !== $this->skuTitle) {
            $res['SkuTitle'] = $this->skuTitle;
        }
        if (null !== $this->extJson) {
            $res['ExtJson'] = $this->extJson;
        }
        if (null !== $this->skuId) {
            $res['SkuId'] = $this->skuId;
        }
        if (null !== $this->skuPicUrl) {
            $res['SkuPicUrl'] = $this->skuPicUrl;
        }
        if (null !== $this->points) {
            $res['Points'] = $this->points;
        }
        if (null !== $this->pointsAmount) {
            $res['PointsAmount'] = $this->pointsAmount;
        }
        if (null !== $this->reservePrice) {
            $res['ReservePrice'] = $this->reservePrice;
        }
        if (null !== $this->skuDesc) {
            $res['SkuDesc'] = $this->skuDesc;
        }
        if (null !== $this->quantity) {
            $res['Quantity'] = $this->quantity;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['PriceCent'])) {
            $model->priceCent = $map['PriceCent'];
        }
        if (isset($map['SkuPvs'])) {
            $model->skuPvs = $map['SkuPvs'];
        }
        if (isset($map['LmItemId'])) {
            $model->lmItemId = $map['LmItemId'];
        }
        if (isset($map['PointPrice'])) {
            $model->pointPrice = $map['PointPrice'];
        }
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['SkuTitle'])) {
            $model->skuTitle = $map['SkuTitle'];
        }
        if (isset($map['ExtJson'])) {
            $model->extJson = $map['ExtJson'];
        }
        if (isset($map['SkuId'])) {
            $model->skuId = $map['SkuId'];
        }
        if (isset($map['SkuPicUrl'])) {
            $model->skuPicUrl = $map['SkuPicUrl'];
        }
        if (isset($map['Points'])) {
            $model->points = $map['Points'];
        }
        if (isset($map['PointsAmount'])) {
            $model->pointsAmount = $map['PointsAmount'];
        }
        if (isset($map['ReservePrice'])) {
            $model->reservePrice = $map['ReservePrice'];
        }
        if (isset($map['SkuDesc'])) {
            $model->skuDesc = $map['SkuDesc'];
        }
        if (isset($map['Quantity'])) {
            $model->quantity = $map['Quantity'];
        }

        return $model;
    }
}
