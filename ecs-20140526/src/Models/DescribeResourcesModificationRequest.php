<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class DescribeResourcesModificationRequest extends Model
{
    /**
     * @var string[]
     */
    public $conditions;

    /**
     * @description The number of vCPU cores of the instance type. For more information, see [Instance families](~~25378~~). This parameter is valid only when DestinationResource is set to InstanceType.
     *
     * @example 2
     *
     * @var int
     */
    public $cores;

    /**
     * @description The type of the resource. Valid values:
     *
     *   InstanceType
     *   SystemDisk
     *
     * @example InstanceType
     *
     * @var string
     */
    public $destinationResource;

    /**
     * @description The instance type. For more information, see [Instance families](~~25378~~) or call the [DescribeInstanceTypes](~~25620~~) operation to query the most recent instance type list. This parameter is required when the DestinationResource parameter is set to SystemDisk.
     *
     * @example ecs.g5.large
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The memory size of the instance type. Unit: GiB. For more information, see [Instance families](~~25378~~). This parameter is valid only when DestinationResource is set to InstanceType.
     *
     * @example 8.0
     *
     * @var float
     */
    public $memory;

    /**
     * @description Specifies whether to support cross-cluster instance type upgrades. Valid values:
     *
     *   true: supports cross-cluster instance type upgrades.
     *   false: does not support cross-cluster instance type upgrades.
     *
     * When the MigrateAcrossZone parameter is set to true and you upgrade the instance type of the Elastic Compute Service (ECS) instance based on returned information, take note of the following items:
     *
     *   Instances that reside in the classic network:
     *
     *   For [retired instance types](~~55263~~), when a non-I/O-optimized instance is upgraded to an I/O-optimized instance, the private IP address, disk device names, and software authorization codes of the instance change. For Linux instances, basic disks (cloud) are identified by the prefix xvd. Ultra disks (cloud_efficiency) and standard SSDs (cloud_ssd) are identified by the prefix vd.
     *   For [instance families available for purchase](~~25378~~), when the instance type of an instance is changed, the private IP address of the instance changes.
     *
     *   Instances that reside in virtual private clouds (VPCs): For [retired instance types](~~55263~~), when a non-I/O-optimized instance is upgraded to an I/O-optimized instance, the disk device names and software authorization codes of the instance change. For Linux instances, basic disks (cloud) are identified by the prefix xvd. Ultra disks (cloud_efficiency) and standard SSDs (cloud_ssd) are identified by the prefix vd.
     *
     * @example true
     *
     * @var bool
     */
    public $migrateAcrossZone;

    /**
     * @description The operation of changing resource configurations.
     *
     *   Valid values for subscription resources:
     *
     *   Upgrade
     *   Downgrade
     *   RenewDowngrade
     *   RenewModify
     *
     *   Valid values for pay-as-you-go resources: Upgrade
     *
     * Default value: Upgrade.
     * @example Upgrade
     *
     * @var string
     */
    public $operationType;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The ID of the region. You can call the [DescribeRegions](~~25609~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource. For example, when DestinationResource is set to InstanceType, this parameter can be interpreted as InstanceId.
     *
     * @example i-bp67acfmxazb4p****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The ID of the zone to query.
     *
     * @example cn-hangzhou-e
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'conditions'           => 'Conditions',
        'cores'                => 'Cores',
        'destinationResource'  => 'DestinationResource',
        'instanceType'         => 'InstanceType',
        'memory'               => 'Memory',
        'migrateAcrossZone'    => 'MigrateAcrossZone',
        'operationType'        => 'OperationType',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceId'           => 'ResourceId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'zoneId'               => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->conditions) {
            $res['Conditions'] = $this->conditions;
        }
        if (null !== $this->cores) {
            $res['Cores'] = $this->cores;
        }
        if (null !== $this->destinationResource) {
            $res['DestinationResource'] = $this->destinationResource;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->migrateAcrossZone) {
            $res['MigrateAcrossZone'] = $this->migrateAcrossZone;
        }
        if (null !== $this->operationType) {
            $res['OperationType'] = $this->operationType;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeResourcesModificationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Conditions'])) {
            if (!empty($map['Conditions'])) {
                $model->conditions = $map['Conditions'];
            }
        }
        if (isset($map['Cores'])) {
            $model->cores = $map['Cores'];
        }
        if (isset($map['DestinationResource'])) {
            $model->destinationResource = $map['DestinationResource'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['MigrateAcrossZone'])) {
            $model->migrateAcrossZone = $map['MigrateAcrossZone'];
        }
        if (isset($map['OperationType'])) {
            $model->operationType = $map['OperationType'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
