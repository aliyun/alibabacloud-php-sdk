<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20220531\Models\QueryItemGuideRetailPriceResponseBody\model;

use AlibabaCloud\Tea\Model;

class skuModels extends Model
{
    /**
     * @example 39cc1****5c7211005187c
     *
     * @var string
     */
    public $distributionMallId;

    /**
     * @example 7960
     *
     * @var int
     */
    public $guideRetailPrice;

    /**
     * @example 6487****621
     *
     * @var int
     */
    public $itemId;

    /**
     * @example 10***642-6831****869
     *
     * @var string
     */
    public $lmItemId;

    /**
     * @var int
     */
    public $lowGuideRetailPrice;

    /**
     * @example 7960
     *
     * @var int
     */
    public $priceCent;

    /**
     * @example 8000
     *
     * @var int
     */
    public $reservedPrice;

    /**
     * @example 488****548894
     *
     * @var int
     */
    public $skuId;

    /**
     * @var string
     */
    public $skuTitle;

    /**
     * @example 1
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'distributionMallId'  => 'DistributionMallId',
        'guideRetailPrice'    => 'GuideRetailPrice',
        'itemId'              => 'ItemId',
        'lmItemId'            => 'LmItemId',
        'lowGuideRetailPrice' => 'LowGuideRetailPrice',
        'priceCent'           => 'PriceCent',
        'reservedPrice'       => 'ReservedPrice',
        'skuId'               => 'SkuId',
        'skuTitle'            => 'SkuTitle',
        'status'              => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->distributionMallId) {
            $res['DistributionMallId'] = $this->distributionMallId;
        }
        if (null !== $this->guideRetailPrice) {
            $res['GuideRetailPrice'] = $this->guideRetailPrice;
        }
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }
        if (null !== $this->lmItemId) {
            $res['LmItemId'] = $this->lmItemId;
        }
        if (null !== $this->lowGuideRetailPrice) {
            $res['LowGuideRetailPrice'] = $this->lowGuideRetailPrice;
        }
        if (null !== $this->priceCent) {
            $res['PriceCent'] = $this->priceCent;
        }
        if (null !== $this->reservedPrice) {
            $res['ReservedPrice'] = $this->reservedPrice;
        }
        if (null !== $this->skuId) {
            $res['SkuId'] = $this->skuId;
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
     * @return skuModels
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DistributionMallId'])) {
            $model->distributionMallId = $map['DistributionMallId'];
        }
        if (isset($map['GuideRetailPrice'])) {
            $model->guideRetailPrice = $map['GuideRetailPrice'];
        }
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['LmItemId'])) {
            $model->lmItemId = $map['LmItemId'];
        }
        if (isset($map['LowGuideRetailPrice'])) {
            $model->lowGuideRetailPrice = $map['LowGuideRetailPrice'];
        }
        if (isset($map['PriceCent'])) {
            $model->priceCent = $map['PriceCent'];
        }
        if (isset($map['ReservedPrice'])) {
            $model->reservedPrice = $map['ReservedPrice'];
        }
        if (isset($map['SkuId'])) {
            $model->skuId = $map['SkuId'];
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
