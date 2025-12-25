<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20190601\Models\CreateInstanceRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Foasconsole\V20190601\Models\CreateInstanceRequest\createInstanceRequest\haResourceSpec;
use AlibabaCloud\SDK\Foasconsole\V20190601\Models\CreateInstanceRequest\createInstanceRequest\resourceSpec;
use AlibabaCloud\SDK\Foasconsole\V20190601\Models\CreateInstanceRequest\createInstanceRequest\storage;

class createInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $architectureType;

    /**
     * @var bool
     */
    public $autoRenew;

    /**
     * @var string
     */
    public $chargeType;

    /**
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
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $monitorType;

    /**
     * @var string
     */
    public $pricingCycle;

    /**
     * @var string
     */
    public $promotionCode;

    /**
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
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'architectureType' => 'ArchitectureType',
        'autoRenew' => 'AutoRenew',
        'chargeType' => 'ChargeType',
        'duration' => 'Duration',
        'extra' => 'Extra',
        'ha' => 'Ha',
        'haResourceSpec' => 'HaResourceSpec',
        'haVSwitchIds' => 'HaVSwitchIds',
        'haZoneId' => 'HaZoneId',
        'instanceName' => 'InstanceName',
        'monitorType' => 'MonitorType',
        'pricingCycle' => 'PricingCycle',
        'promotionCode' => 'PromotionCode',
        'region' => 'Region',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceSpec' => 'ResourceSpec',
        'storage' => 'Storage',
        'usePromotionCode' => 'UsePromotionCode',
        'vSwitchIds' => 'VSwitchIds',
        'vpcId' => 'VpcId',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (null !== $this->haResourceSpec) {
            $this->haResourceSpec->validate();
        }
        if (\is_array($this->haVSwitchIds)) {
            Model::validateArray($this->haVSwitchIds);
        }
        if (null !== $this->resourceSpec) {
            $this->resourceSpec->validate();
        }
        if (null !== $this->storage) {
            $this->storage->validate();
        }
        if (\is_array($this->vSwitchIds)) {
            Model::validateArray($this->vSwitchIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['HaResourceSpec'] = null !== $this->haResourceSpec ? $this->haResourceSpec->toArray($noStream) : $this->haResourceSpec;
        }

        if (null !== $this->haVSwitchIds) {
            if (\is_array($this->haVSwitchIds)) {
                $res['HaVSwitchIds'] = [];
                $n1 = 0;
                foreach ($this->haVSwitchIds as $item1) {
                    $res['HaVSwitchIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            $res['ResourceSpec'] = null !== $this->resourceSpec ? $this->resourceSpec->toArray($noStream) : $this->resourceSpec;
        }

        if (null !== $this->storage) {
            $res['Storage'] = null !== $this->storage ? $this->storage->toArray($noStream) : $this->storage;
        }

        if (null !== $this->usePromotionCode) {
            $res['UsePromotionCode'] = $this->usePromotionCode;
        }

        if (null !== $this->vSwitchIds) {
            if (\is_array($this->vSwitchIds)) {
                $res['VSwitchIds'] = [];
                $n1 = 0;
                foreach ($this->vSwitchIds as $item1) {
                    $res['VSwitchIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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
                $model->haVSwitchIds = [];
                $n1 = 0;
                foreach ($map['HaVSwitchIds'] as $item1) {
                    $model->haVSwitchIds[$n1] = $item1;
                    ++$n1;
                }
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
                $model->vSwitchIds = [];
                $n1 = 0;
                foreach ($map['VSwitchIds'] as $item1) {
                    $model->vSwitchIds[$n1] = $item1;
                    ++$n1;
                }
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
