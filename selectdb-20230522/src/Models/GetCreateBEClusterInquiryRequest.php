<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Selectdb\V20230522\Models;

use AlibabaCloud\Dara\Model;

class GetCreateBEClusterInquiryRequest extends Model
{
    /**
     * @var int
     */
    public $cacheSize;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $commodityCode;

    /**
     * @var int
     */
    public $computeSize;

    /**
     * @var string
     */
    public $dbInstanceId;

    /**
     * @var int
     */
    public $preCacheSize;

    /**
     * @var int
     */
    public $preComputeSize;

    /**
     * @var string
     */
    public $pricingCycle;

    /**
     * @var string
     */
    public $promotionOptionNo;

    /**
     * @var int
     */
    public $quantity;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'cacheSize' => 'CacheSize',
        'chargeType' => 'ChargeType',
        'commodityCode' => 'CommodityCode',
        'computeSize' => 'ComputeSize',
        'dbInstanceId' => 'DbInstanceId',
        'preCacheSize' => 'PreCacheSize',
        'preComputeSize' => 'PreComputeSize',
        'pricingCycle' => 'PricingCycle',
        'promotionOptionNo' => 'PromotionOptionNo',
        'quantity' => 'Quantity',
        'regionId' => 'RegionId',
        'resourceOwnerId' => 'ResourceOwnerId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cacheSize) {
            $res['CacheSize'] = $this->cacheSize;
        }

        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }

        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }

        if (null !== $this->computeSize) {
            $res['ComputeSize'] = $this->computeSize;
        }

        if (null !== $this->dbInstanceId) {
            $res['DbInstanceId'] = $this->dbInstanceId;
        }

        if (null !== $this->preCacheSize) {
            $res['PreCacheSize'] = $this->preCacheSize;
        }

        if (null !== $this->preComputeSize) {
            $res['PreComputeSize'] = $this->preComputeSize;
        }

        if (null !== $this->pricingCycle) {
            $res['PricingCycle'] = $this->pricingCycle;
        }

        if (null !== $this->promotionOptionNo) {
            $res['PromotionOptionNo'] = $this->promotionOptionNo;
        }

        if (null !== $this->quantity) {
            $res['Quantity'] = $this->quantity;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
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
        if (isset($map['CacheSize'])) {
            $model->cacheSize = $map['CacheSize'];
        }

        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }

        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }

        if (isset($map['ComputeSize'])) {
            $model->computeSize = $map['ComputeSize'];
        }

        if (isset($map['DbInstanceId'])) {
            $model->dbInstanceId = $map['DbInstanceId'];
        }

        if (isset($map['PreCacheSize'])) {
            $model->preCacheSize = $map['PreCacheSize'];
        }

        if (isset($map['PreComputeSize'])) {
            $model->preComputeSize = $map['PreComputeSize'];
        }

        if (isset($map['PricingCycle'])) {
            $model->pricingCycle = $map['PricingCycle'];
        }

        if (isset($map['PromotionOptionNo'])) {
            $model->promotionOptionNo = $map['PromotionOptionNo'];
        }

        if (isset($map['Quantity'])) {
            $model->quantity = $map['Quantity'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}
