<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Selectdb\V20230522\Models;

use AlibabaCloud\Tea\Model;

class GetModifyBEClusterInquiryRequest extends Model
{
    /**
     * @description The size of the elastic cache.
     *
     * @example 200
     *
     * @var int
     */
    public $cacheSize;

    /**
     * @description The billing method.
     *
     * Valid values:
     *
     *   PREPAY: subscription
     *   POSTPAY: pay-as-you-go
     *
     * This parameter is required.
     *
     * @example POSTPAY
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The cluster ID.
     *
     * @example selectdb-xxx-be
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The commodity code.
     *
     * Valid values:
     *
     *   selectdb_pre_public_intl: subscription commodity on the international site (alibabacloud.com)
     *   selectdb_go_public_cn: pay-as-you-go commodity on the China site (aliyun.com)
     *   selectdb_go_public_intl: pay-as-you-go commodity on the international site (alibabacloud.com)
     *   selectdb_pre_public_cn: subscription commodity on the China site (aliyun.com)
     *
     * This parameter is required.
     *
     * @example selectdb_go_public_cn
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @description The number of elastic CPU cores.
     *
     * @example 4
     *
     * @var int
     */
    public $computeSize;

    /**
     * @description The instance ID.
     *
     * This parameter is required.
     *
     * @example selectdb-cn-xxx
     *
     * @var string
     */
    public $dbInstanceId;

    /**
     * @description Specifies whether to change the billing method of the cluster.
     *
     * @example true
     *
     * @var bool
     */
    public $modifyClusterChargeType;

    /**
     * @description The size of the reserved cache.
     *
     * @example 200
     *
     * @var int
     */
    public $preCacheSize;

    /**
     * @description The number of reserved CPU cores.
     *
     * @example 4
     *
     * @var int
     */
    public $preComputeSize;

    /**
     * @description The billing cycle.
     *
     * Valid values:
     *
     *   Month
     *   Year
     *   Minute
     *   Hour
     *   Day
     *
     * This parameter is required.
     *
     * @example Hour
     *
     * @var string
     */
    public $pricingCycle;

    /**
     * @description The number of clusters whose specifications are to be changed.
     *
     * This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $quantity;

    /**
     * @description The region ID.
     *
     * This parameter is required.
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
        'cacheSize' => 'CacheSize',
        'chargeType' => 'ChargeType',
        'clusterId' => 'ClusterId',
        'commodityCode' => 'CommodityCode',
        'computeSize' => 'ComputeSize',
        'dbInstanceId' => 'DbInstanceId',
        'modifyClusterChargeType' => 'ModifyClusterChargeType',
        'preCacheSize' => 'PreCacheSize',
        'preComputeSize' => 'PreComputeSize',
        'pricingCycle' => 'PricingCycle',
        'quantity' => 'Quantity',
        'regionId' => 'RegionId',
        'resourceOwnerId' => 'ResourceOwnerId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->cacheSize) {
            $res['CacheSize'] = $this->cacheSize;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
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
        if (null !== $this->modifyClusterChargeType) {
            $res['ModifyClusterChargeType'] = $this->modifyClusterChargeType;
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
     * @return GetModifyBEClusterInquiryRequest
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
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
        if (isset($map['ModifyClusterChargeType'])) {
            $model->modifyClusterChargeType = $map['ModifyClusterChargeType'];
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
