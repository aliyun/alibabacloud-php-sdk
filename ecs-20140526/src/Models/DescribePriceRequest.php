<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePriceRequest\dataDisk;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePriceRequest\recurrenceRules;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePriceRequest\schedulerOptions;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePriceRequest\systemDisk;

class DescribePriceRequest extends Model
{
    /**
     * @var dataDisk[]
     */
    public $dataDisk;

    /**
     * @var schedulerOptions
     */
    public $schedulerOptions;

    /**
     * @var systemDisk
     */
    public $systemDisk;

    /**
     * @var int
     */
    public $amount;

    /**
     * @var string
     */
    public $assuranceTimes;

    /**
     * @var int
     */
    public $capacity;

    /**
     * @var string
     */
    public $dedicatedHostType;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var int
     */
    public $instanceAmount;

    /**
     * @var int
     */
    public $instanceCpuCoreCount;

    /**
     * @var string
     */
    public $instanceNetworkType;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string[]
     */
    public $instanceTypeList;

    /**
     * @var string
     */
    public $internetChargeType;

    /**
     * @var int
     */
    public $internetMaxBandwidthOut;

    /**
     * @var string
     */
    public $ioOptimized;

    /**
     * @var string
     */
    public $isp;

    /**
     * @var string
     */
    public $offeringType;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var int
     */
    public $period;

    /**
     * @var string
     */
    public $platform;

    /**
     * @var string
     */
    public $priceUnit;

    /**
     * @var recurrenceRules[]
     */
    public $recurrenceRules;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $scope;

    /**
     * @var int
     */
    public $spotDuration;

    /**
     * @var string
     */
    public $spotStrategy;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'dataDisk' => 'DataDisk',
        'schedulerOptions' => 'SchedulerOptions',
        'systemDisk' => 'SystemDisk',
        'amount' => 'Amount',
        'assuranceTimes' => 'AssuranceTimes',
        'capacity' => 'Capacity',
        'dedicatedHostType' => 'DedicatedHostType',
        'imageId' => 'ImageId',
        'instanceAmount' => 'InstanceAmount',
        'instanceCpuCoreCount' => 'InstanceCpuCoreCount',
        'instanceNetworkType' => 'InstanceNetworkType',
        'instanceType' => 'InstanceType',
        'instanceTypeList' => 'InstanceTypeList',
        'internetChargeType' => 'InternetChargeType',
        'internetMaxBandwidthOut' => 'InternetMaxBandwidthOut',
        'ioOptimized' => 'IoOptimized',
        'isp' => 'Isp',
        'offeringType' => 'OfferingType',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'period' => 'Period',
        'platform' => 'Platform',
        'priceUnit' => 'PriceUnit',
        'recurrenceRules' => 'RecurrenceRules',
        'regionId' => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'resourceType' => 'ResourceType',
        'scope' => 'Scope',
        'spotDuration' => 'SpotDuration',
        'spotStrategy' => 'SpotStrategy',
        'startTime' => 'StartTime',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (\is_array($this->dataDisk)) {
            Model::validateArray($this->dataDisk);
        }
        if (null !== $this->schedulerOptions) {
            $this->schedulerOptions->validate();
        }
        if (null !== $this->systemDisk) {
            $this->systemDisk->validate();
        }
        if (\is_array($this->instanceTypeList)) {
            Model::validateArray($this->instanceTypeList);
        }
        if (\is_array($this->recurrenceRules)) {
            Model::validateArray($this->recurrenceRules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataDisk) {
            if (\is_array($this->dataDisk)) {
                $res['DataDisk'] = [];
                $n1 = 0;
                foreach ($this->dataDisk as $item1) {
                    $res['DataDisk'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->schedulerOptions) {
            $res['SchedulerOptions'] = null !== $this->schedulerOptions ? $this->schedulerOptions->toArray($noStream) : $this->schedulerOptions;
        }

        if (null !== $this->systemDisk) {
            $res['SystemDisk'] = null !== $this->systemDisk ? $this->systemDisk->toArray($noStream) : $this->systemDisk;
        }

        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }

        if (null !== $this->assuranceTimes) {
            $res['AssuranceTimes'] = $this->assuranceTimes;
        }

        if (null !== $this->capacity) {
            $res['Capacity'] = $this->capacity;
        }

        if (null !== $this->dedicatedHostType) {
            $res['DedicatedHostType'] = $this->dedicatedHostType;
        }

        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->instanceAmount) {
            $res['InstanceAmount'] = $this->instanceAmount;
        }

        if (null !== $this->instanceCpuCoreCount) {
            $res['InstanceCpuCoreCount'] = $this->instanceCpuCoreCount;
        }

        if (null !== $this->instanceNetworkType) {
            $res['InstanceNetworkType'] = $this->instanceNetworkType;
        }

        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->instanceTypeList) {
            if (\is_array($this->instanceTypeList)) {
                $res['InstanceTypeList'] = [];
                $n1 = 0;
                foreach ($this->instanceTypeList as $item1) {
                    $res['InstanceTypeList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }

        if (null !== $this->internetMaxBandwidthOut) {
            $res['InternetMaxBandwidthOut'] = $this->internetMaxBandwidthOut;
        }

        if (null !== $this->ioOptimized) {
            $res['IoOptimized'] = $this->ioOptimized;
        }

        if (null !== $this->isp) {
            $res['Isp'] = $this->isp;
        }

        if (null !== $this->offeringType) {
            $res['OfferingType'] = $this->offeringType;
        }

        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }

        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }

        if (null !== $this->priceUnit) {
            $res['PriceUnit'] = $this->priceUnit;
        }

        if (null !== $this->recurrenceRules) {
            if (\is_array($this->recurrenceRules)) {
                $res['RecurrenceRules'] = [];
                $n1 = 0;
                foreach ($this->recurrenceRules as $item1) {
                    $res['RecurrenceRules'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }

        if (null !== $this->spotDuration) {
            $res['SpotDuration'] = $this->spotDuration;
        }

        if (null !== $this->spotStrategy) {
            $res['SpotStrategy'] = $this->spotStrategy;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['DataDisk'])) {
            if (!empty($map['DataDisk'])) {
                $model->dataDisk = [];
                $n1 = 0;
                foreach ($map['DataDisk'] as $item1) {
                    $model->dataDisk[$n1++] = dataDisk::fromMap($item1);
                }
            }
        }

        if (isset($map['SchedulerOptions'])) {
            $model->schedulerOptions = schedulerOptions::fromMap($map['SchedulerOptions']);
        }

        if (isset($map['SystemDisk'])) {
            $model->systemDisk = systemDisk::fromMap($map['SystemDisk']);
        }

        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }

        if (isset($map['AssuranceTimes'])) {
            $model->assuranceTimes = $map['AssuranceTimes'];
        }

        if (isset($map['Capacity'])) {
            $model->capacity = $map['Capacity'];
        }

        if (isset($map['DedicatedHostType'])) {
            $model->dedicatedHostType = $map['DedicatedHostType'];
        }

        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['InstanceAmount'])) {
            $model->instanceAmount = $map['InstanceAmount'];
        }

        if (isset($map['InstanceCpuCoreCount'])) {
            $model->instanceCpuCoreCount = $map['InstanceCpuCoreCount'];
        }

        if (isset($map['InstanceNetworkType'])) {
            $model->instanceNetworkType = $map['InstanceNetworkType'];
        }

        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['InstanceTypeList'])) {
            if (!empty($map['InstanceTypeList'])) {
                $model->instanceTypeList = [];
                $n1 = 0;
                foreach ($map['InstanceTypeList'] as $item1) {
                    $model->instanceTypeList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }

        if (isset($map['InternetMaxBandwidthOut'])) {
            $model->internetMaxBandwidthOut = $map['InternetMaxBandwidthOut'];
        }

        if (isset($map['IoOptimized'])) {
            $model->ioOptimized = $map['IoOptimized'];
        }

        if (isset($map['Isp'])) {
            $model->isp = $map['Isp'];
        }

        if (isset($map['OfferingType'])) {
            $model->offeringType = $map['OfferingType'];
        }

        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }

        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }

        if (isset($map['PriceUnit'])) {
            $model->priceUnit = $map['PriceUnit'];
        }

        if (isset($map['RecurrenceRules'])) {
            if (!empty($map['RecurrenceRules'])) {
                $model->recurrenceRules = [];
                $n1 = 0;
                foreach ($map['RecurrenceRules'] as $item1) {
                    $model->recurrenceRules[$n1++] = recurrenceRules::fromMap($item1);
                }
            }
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }

        if (isset($map['SpotDuration'])) {
            $model->spotDuration = $map['SpotDuration'];
        }

        if (isset($map['SpotStrategy'])) {
            $model->spotStrategy = $map['SpotStrategy'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
