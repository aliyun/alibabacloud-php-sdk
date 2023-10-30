<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20190601\Models\QueryCreateInstancePriceRequest;

use AlibabaCloud\SDK\Foasconsole\V20190601\Models\QueryCreateInstancePriceRequest\createInstanceRequest\resourceSpec;
use AlibabaCloud\SDK\Foasconsole\V20190601\Models\QueryCreateInstancePriceRequest\createInstanceRequest\storage;
use AlibabaCloud\Tea\Model;

class createInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $architectureType;

    /**
     * @example true
     *
     * @var bool
     */
    public $autoRenew;

    /**
     * @example PRE
     *
     * @var string
     */
    public $chargeType;

    /**
     * @example 1
     *
     * @var int
     */
    public $duration;

    /**
     * @var string
     */
    public $extra;

    /**
     * @example vvp1
     *
     * @var string
     */
    public $instanceName;

    /**
     * @example Month
     *
     * @var string
     */
    public $pricingCycle;

    /**
     * @example 5ef***
     *
     * @var string
     */
    public $promotionCode;

    /**
     * @example cn-beijing
     *
     * @var string
     */
    public $region;

    /**
     * @var resourceSpec
     */
    public $resourceSpec;

    /**
     * @var storage
     */
    public $storage;

    /**
     * @example true
     *
     * @var bool
     */
    public $usePromotionCode;

    /**
     * @var string[]
     */
    public $vSwitchIds;

    /**
     * @description VPC ID。
     *
     * @example vpc-2ze9*******nxfmfcdi
     *
     * @var string
     */
    public $vpcId;

    /**
     * @example cn-beijing-g
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'architectureType' => 'ArchitectureType',
        'autoRenew'        => 'AutoRenew',
        'chargeType'       => 'ChargeType',
        'duration'         => 'Duration',
        'extra'            => 'Extra',
        'instanceName'     => 'InstanceName',
        'pricingCycle'     => 'PricingCycle',
        'promotionCode'    => 'PromotionCode',
        'region'           => 'Region',
        'resourceSpec'     => 'ResourceSpec',
        'storage'          => 'Storage',
        'usePromotionCode' => 'UsePromotionCode',
        'vSwitchIds'       => 'VSwitchIds',
        'vpcId'            => 'VpcId',
        'zoneId'           => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->architectureType) {
            $res['ArchitectureType'] = $this->architectureType;
        }
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->extra) {
            $res['Extra'] = $this->extra;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->pricingCycle) {
            $res['PricingCycle'] = $this->pricingCycle;
        }
        if (null !== $this->promotionCode) {
            $res['PromotionCode'] = $this->promotionCode;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->resourceSpec) {
            $res['ResourceSpec'] = null !== $this->resourceSpec ? $this->resourceSpec->toMap() : null;
        }
        if (null !== $this->storage) {
            $res['Storage'] = null !== $this->storage ? $this->storage->toMap() : null;
        }
        if (null !== $this->usePromotionCode) {
            $res['UsePromotionCode'] = $this->usePromotionCode;
        }
        if (null !== $this->vSwitchIds) {
            $res['VSwitchIds'] = $this->vSwitchIds;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return createInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArchitectureType'])) {
            $model->architectureType = $map['ArchitectureType'];
        }
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Extra'])) {
            $model->extra = $map['Extra'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['PricingCycle'])) {
            $model->pricingCycle = $map['PricingCycle'];
        }
        if (isset($map['PromotionCode'])) {
            $model->promotionCode = $map['PromotionCode'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['ResourceSpec'])) {
            $model->resourceSpec = resourceSpec::fromMap($map['ResourceSpec']);
        }
        if (isset($map['Storage'])) {
            $model->storage = storage::fromMap($map['Storage']);
        }
        if (isset($map['UsePromotionCode'])) {
            $model->usePromotionCode = $map['UsePromotionCode'];
        }
        if (isset($map['VSwitchIds'])) {
            if (!empty($map['VSwitchIds'])) {
                $model->vSwitchIds = $map['VSwitchIds'];
            }
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
