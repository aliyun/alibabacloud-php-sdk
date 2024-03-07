<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20211028\Models;

use AlibabaCloud\SDK\Foasconsole\V20211028\Models\CreateInstanceRequest\haResourceSpec;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\CreateInstanceRequest\resourceSpec;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\CreateInstanceRequest\storage;
use AlibabaCloud\Tea\Model;

class CreateInstanceRequest extends Model
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
     * @var bool
     */
    public $ha;

    /**
     * @var haResourceSpec
     */
    public $haResourceSpec;

    /**
     * @var string[]
     */
    public $haVSwitchIds;

    /**
     * @var string
     */
    public $haZoneId;

    /**
     * @example rtc-e2e-test-pre
     *
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $monitorType;

    /**
     * @example Month
     *
     * @var string
     */
    public $pricingCycle;

    /**
     * @example 500043499350689
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
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var resourceSpec
     */
    public $resourceSpec;

    /**
     * @var storage
     */
    public $storage;

    /**
     * @var bool
     */
    public $usePromotionCode;

    /**
     * @var string[]
     */
    public $vSwitchIds;

    /**
     * @example vpc-2ze9xoh8qyt1rnxfmfcdi
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
        'ha'               => 'Ha',
        'haResourceSpec'   => 'HaResourceSpec',
        'haVSwitchIds'     => 'HaVSwitchIds',
        'haZoneId'         => 'HaZoneId',
        'instanceName'     => 'InstanceName',
        'monitorType'      => 'MonitorType',
        'pricingCycle'     => 'PricingCycle',
        'promotionCode'    => 'PromotionCode',
        'region'           => 'Region',
        'resourceGroupId'  => 'ResourceGroupId',
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
        if (null !== $this->ha) {
            $res['Ha'] = $this->ha;
        }
        if (null !== $this->haResourceSpec) {
            $res['HaResourceSpec'] = null !== $this->haResourceSpec ? $this->haResourceSpec->toMap() : null;
        }
        if (null !== $this->haVSwitchIds) {
            $res['HaVSwitchIds'] = $this->haVSwitchIds;
        }
        if (null !== $this->haZoneId) {
            $res['HaZoneId'] = $this->haZoneId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->monitorType) {
            $res['MonitorType'] = $this->monitorType;
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
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
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
     * @return CreateInstanceRequest
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
        if (isset($map['Ha'])) {
            $model->ha = $map['Ha'];
        }
        if (isset($map['HaResourceSpec'])) {
            $model->haResourceSpec = haResourceSpec::fromMap($map['HaResourceSpec']);
        }
        if (isset($map['HaVSwitchIds'])) {
            if (!empty($map['HaVSwitchIds'])) {
                $model->haVSwitchIds = $map['HaVSwitchIds'];
            }
        }
        if (isset($map['HaZoneId'])) {
            $model->haZoneId = $map['HaZoneId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['MonitorType'])) {
            $model->monitorType = $map['MonitorType'];
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
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
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
