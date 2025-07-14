<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class DescribeResourcesModificationRequest extends Model
{
    /**
     * @description The conditions.
     *
     * @var string[]
     */
    public $conditions;

    /**
     * @description The number of vCPUs of the instance type. For information about the valid values, see [Overview of instance families](https://help.aliyun.com/document_detail/25378.html).
     *
     * This parameter is valid only when the DestinationResource parameter is set to InstanceType.
     *
     * @example 2
     *
     * @var int
     */
    public $cores;

    /**
     * @description The resource type that you want to change. Valid values:
     *
     *   InstanceType
     *
     *   SystemDisk
     *
     * If you set this parameter to SystemDisk, you must specify the InstanceType parameter. In this case, this operation queries the system disk categories supported by the specified instance type.
     *
     * This parameter is required.
     *
     * @example InstanceType
     *
     * @var string
     */
    public $destinationResource;

    /**
     * @description The instance type to which you want to change the instance type of the instance. For more information, see [Overview of instance families](https://help.aliyun.com/document_detail/25378.html). You can also call the [DescribeInstanceTypes](https://help.aliyun.com/document_detail/25620.html) operation to query the most recent instance type list.
     *
     * If you set the DestinationResource parameter to SystemDisk, you must specify the InstanceType parameter. In this case, this operation queries the system disk categories supported by the specified instance type.
     *
     * @example ecs.g5.large
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The memory size of the instance type. Unit: GiB. For information about the valid values, see [Overview of instance families](https://help.aliyun.com/document_detail/25378.html).
     *
     * This parameter is valid only when the DestinationResource parameter is set to InstanceType.
     *
     * @example 8.0
     *
     * @var float
     */
    public $memory;

    /**
     * @description Specifies whether cross-cluster instance type upgrades are supported. Valid values:
     *
     *   true
     *   false
     *
     * Default value: false.
     *
     * When MigrateAcrossZone is set to true and you upgrade the instance type of an instance based on the returned information, take note of the following items:
     *
     *   Instance that resides in the classic network:
     *
     *   For [retired instance types](https://help.aliyun.com/document_detail/55263.html), when a non-I/O optimized instance is upgraded to an I/O optimized instance, the private IP address, disk device names, and software authorization codes of the instance change. For a Linux instance, basic disks (cloud) are identified as xvd\\* such as xvda and xvdb, and ultra disks (cloud_efficiency) and standard SSDs (cloud_ssd) are identified as vd\\* such as vda and vdb.
     *   For [instance families available for purchase](https://help.aliyun.com/document_detail/25378.html), when the instance type of an instance is changed, the private IP address of the instance changes.
     *
     *   Instance that resides in a virtual private cloud (VPC): For [retired instance types](https://help.aliyun.com/document_detail/55263.html), when a non-I/O optimized instance is upgraded to an I/O optimized instance, the disk device names and software authorization codes of the instance change. For a Linux instance, basic disks (cloud) are identified as xvd\\* such as xvda and xvdb, and ultra disks (cloud_efficiency) and standard SSDs (cloud_ssd) are identified as vd\\* such as vda and vdb.
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
     *   Upgrade: upgrades resources.
     *   Downgrade: downgrades resources.
     *   RenewDowngrade: renews and downgrades resources.
     *   RenewModify: renews an expired instance and changes its configurations.
     *
     *   Set the value to Upgrade for pay-as-you-go resources.
     *
     * Default value: Upgrade.
     *
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
     * @description The region ID of the instance for which you want to change the instance type or system disk category. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/25609.html) operation to query the most recent region list.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the instance for which you want to change the instance type or system disk category.
     *
     * This parameter is required.
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
     * @description The ID of the destination zone to which you want to migrate the instance.
     *
     * If you want to change the instance type across zones, you must specify this parameter.
     *
     * @example cn-hangzhou-e
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'conditions' => 'Conditions',
        'cores' => 'Cores',
        'destinationResource' => 'DestinationResource',
        'instanceType' => 'InstanceType',
        'memory' => 'Memory',
        'migrateAcrossZone' => 'MigrateAcrossZone',
        'operationType' => 'OperationType',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'resourceId' => 'ResourceId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'zoneId' => 'ZoneId',
    ];

    public function validate() {}

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
