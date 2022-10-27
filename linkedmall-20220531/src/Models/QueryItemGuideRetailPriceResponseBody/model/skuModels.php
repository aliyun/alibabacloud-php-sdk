<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20220531\Models\QueryItemGuideRetailPriceResponseBody\model;

use AlibabaCloud\Tea\Model;

class skuModels extends Model
{
    /**
     * @var string
     */
    public $distributionMallId;

    /**
     * @var int
     */
    public $guideRetailPrice;

    /**
     * @var int
     */
    public $itemId;

    /**
     * @var string
     */
    public $lmItemId;

    /**
     * @var int
     */
    public $priceCent;

    /**
     * @var int
     */
    public $reservedPrice;

    /**
     * @var int
     */
    public $skuId;

    /**
     * @var string
     */
    public $skuTitle;

    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'distributionMallId' => 'DistributionMallId',
        'guideRetailPrice'   => 'GuideRetailPrice',
        'itemId'             => 'ItemId',
        'lmItemId'           => 'LmItemId',
        'priceCent'          => 'PriceCent',
        'reservedPrice'      => 'ReservedPrice',
        'skuId'              => 'SkuId',
        'skuTitle'           => 'SkuTitle',
        'status'             => 'Status',
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
