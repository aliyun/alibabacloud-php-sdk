<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Selectdb\V20230522\Models;

use AlibabaCloud\Tea\Model;

class GetCreateBEClusterInquiryRequest extends Model
{
    /**
     * @example 200
     *
     * @var int
     */
    public $cacheSize;

    /**
     * @description This parameter is required.
     *
     * @example POSTPAY
     *
     * @var string
     */
    public $chargeType;

    /**
     * @example selectdb_go_public_cn
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @example 4
     *
     * @var int
     */
    public $computeSize;

    /**
     * @description This parameter is required.
     *
     * @example selectdb-cn-xxx
     *
     * @var string
     */
    public $dbInstanceId;

    /**
     * @example 200
     *
     * @var int
     */
    public $preCacheSize;

    /**
     * @example 4
     *
     * @var int
     */
    public $preComputeSize;

    /**
     * @description This parameter is required.
     *
     * @example Hour
     *
     * @var string
     */
    public $pricingCycle;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $quantity;

    /**
     * @description This parameter is required.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'cacheSize'       => 'CacheSize',
        'chargeType'      => 'ChargeType',
        'commodityCode'   => 'CommodityCode',
        'computeSize'     => 'ComputeSize',
        'dbInstanceId'    => 'DbInstanceId',
        'preCacheSize'    => 'PreCacheSize',
        'preComputeSize'  => 'PreComputeSize',
        'pricingCycle'    => 'PricingCycle',
        'quantity'        => 'Quantity',
        'regionId'        => 'RegionId',
        'resourceOwnerId' => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return GetCreateBEClusterInquiryRequest
     */
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
