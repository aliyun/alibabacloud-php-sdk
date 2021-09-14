<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models;

use AlibabaCloud\Tea\Model;

class ModifyScheduleMethodRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

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
    public $dedicatedHostGroupId;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var string
     */
    public $instanceDistribution;

    /**
     * @var string
     */
    public $zoneDistribution;

    /**
     * @var string
     */
    public $cpuUtilityThreshold;

    /**
     * @var string
     */
    public $memoryUtilityThreshold;

    /**
     * @var string
     */
    public $localDiskUtilityThreshold;

    /**
     * @var string
     */
    public $zonesOrder;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'ownerId'                   => 'OwnerId',
        'resourceOwnerAccount'      => 'ResourceOwnerAccount',
        'resourceOwnerId'           => 'ResourceOwnerId',
        'dedicatedHostGroupId'      => 'DedicatedHostGroupId',
        'engine'                    => 'Engine',
        'instanceDistribution'      => 'InstanceDistribution',
        'zoneDistribution'          => 'ZoneDistribution',
        'cpuUtilityThreshold'       => 'CpuUtilityThreshold',
        'memoryUtilityThreshold'    => 'MemoryUtilityThreshold',
        'localDiskUtilityThreshold' => 'LocalDiskUtilityThreshold',
        'zonesOrder'                => 'ZonesOrder',
        'regionId'                  => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->dedicatedHostGroupId) {
            $res['DedicatedHostGroupId'] = $this->dedicatedHostGroupId;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->instanceDistribution) {
            $res['InstanceDistribution'] = $this->instanceDistribution;
        }
        if (null !== $this->zoneDistribution) {
            $res['ZoneDistribution'] = $this->zoneDistribution;
        }
        if (null !== $this->cpuUtilityThreshold) {
            $res['CpuUtilityThreshold'] = $this->cpuUtilityThreshold;
        }
        if (null !== $this->memoryUtilityThreshold) {
            $res['MemoryUtilityThreshold'] = $this->memoryUtilityThreshold;
        }
        if (null !== $this->localDiskUtilityThreshold) {
            $res['LocalDiskUtilityThreshold'] = $this->localDiskUtilityThreshold;
        }
        if (null !== $this->zonesOrder) {
            $res['ZonesOrder'] = $this->zonesOrder;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyScheduleMethodRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['DedicatedHostGroupId'])) {
            $model->dedicatedHostGroupId = $map['DedicatedHostGroupId'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['InstanceDistribution'])) {
            $model->instanceDistribution = $map['InstanceDistribution'];
        }
        if (isset($map['ZoneDistribution'])) {
            $model->zoneDistribution = $map['ZoneDistribution'];
        }
        if (isset($map['CpuUtilityThreshold'])) {
            $model->cpuUtilityThreshold = $map['CpuUtilityThreshold'];
        }
        if (isset($map['MemoryUtilityThreshold'])) {
            $model->memoryUtilityThreshold = $map['MemoryUtilityThreshold'];
        }
        if (isset($map['LocalDiskUtilityThreshold'])) {
            $model->localDiskUtilityThreshold = $map['LocalDiskUtilityThreshold'];
        }
        if (isset($map['ZonesOrder'])) {
            $model->zonesOrder = $map['ZonesOrder'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
