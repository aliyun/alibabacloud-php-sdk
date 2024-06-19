<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Tea\Model;

class DescribeInstancesOverviewRequest extends Model
{
    /**
     * @description The architecture of the instance. Valid values:
     *
     *   **cluster**: cluster architecture
     *   **standard**: standard architecture
     *   **rwsplit**: read/write splitting architecture
     *
     * @example standard
     *
     * @var string
     */
    public $architectureType;

    /**
     * @description The billing method of the instance. Valid values:
     *
     *   **PrePaid**: subscription
     *   **PostPaid**: pay-as-you-go
     *
     * @example PostPaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The edition of the instance. Valid values:
     *
     *   **Community**: Community Edition
     *   **Enterprise**: Enhanced Edition (Tair)
     *
     * @example Enterprise
     *
     * @var string
     */
    public $editionType;

    /**
     * @description The database engine version of the instance.
     *
     * @example 4.0
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @description The instance type of the instance. For more information, see [Instance types](https://help.aliyun.com/document_detail/107984.html).
     *
     * @example redis.master.small.default
     *
     * @var string
     */
    public $instanceClass;

    /**
     * @description The IDs of instances.
     *
     * > By default, all instances that belong to this account are queried. If you specify multiple instance IDs, separate the instance IDs with commas (,).
     * @example r-bp1zxszhcgatnx****
     *
     * @var string
     */
    public $instanceIds;

    /**
     * @description The state of the instance. Valid values:
     *
     *   **Normal**: The instance is normal.
     *   **Creating**: The instance is being created.
     *   **Changing**: The configurations of the instance are being changed.
     *   **Inactive**: The instance is disabled.
     *   **Flushing**: The instance is being released.
     *   **Released**: The instance is released.
     *   **Transforming**: The billing method of the instance is being changed.
     *   **Unavailable**: The instance is unavailable.
     *   **Error**: The instance failed to be created.
     *   **Migrating**: The instance is being migrated.
     *   **BackupRecovering**: The instance is being restored from a backup.
     *   **MinorVersionUpgrading**: The minor version of the instance is being updated.
     *   **NetworkModifying**: The network type of the instance is being changed.
     *   **SSLModifying**: The SSL certificate of the instance is being changed.
     *   **MajorVersionUpgrading**: The major version of the instance is being upgraded. The instance remains accessible during the upgrade.
     *
     * > For more information about instance states, see [Instance states and impacts](https://help.aliyun.com/document_detail/200740.html).
     * @example Normal
     *
     * @var string
     */
    public $instanceStatus;

    /**
     * @description The category of the instance. Valid values:
     *
     *   **Tair**
     *   **Redis**
     *   **Memcache**
     *
     * @example Redis
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The network type of the instance. Valid values:
     *
     *   **CLASSIC**: classic network
     *   **VPC**: Virtual Private Cloud (VPC)
     *
     * @example CLASSIC
     *
     * @var string
     */
    public $networkType;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The private IP address of the instance.
     *
     * @example 172.16.49.***
     *
     * @var string
     */
    public $privateIp;

    /**
     * @description The ID of the region in which the instances you want to query reside. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/61012.html) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which the instances you want to query belong.
     *
     * > You can query resource group IDs by using the ApsaraDB for Redis console or by calling the [ListResourceGroups](https://help.aliyun.com/document_detail/158855.html) operation. For more information, see [View basic information of a resource group](https://help.aliyun.com/document_detail/151181.html).
     * @example rg-acfmyiu4ekp****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The keyword used for fuzzy search. The keyword can be based on an instance ID or an instance description.
     *
     * @example apitest
     *
     * @var string
     */
    public $searchKey;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @description The ID of the vSwitch.
     *
     * @example vsw-bp1e7clcw529l773d****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The ID of the VPC.
     *
     * @example vpc-bp1nme44gek34slfc****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The zone ID of the instance.
     *
     * @example cn-hangzhou-b
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'architectureType'     => 'ArchitectureType',
        'chargeType'           => 'ChargeType',
        'editionType'          => 'EditionType',
        'engineVersion'        => 'EngineVersion',
        'instanceClass'        => 'InstanceClass',
        'instanceIds'          => 'InstanceIds',
        'instanceStatus'       => 'InstanceStatus',
        'instanceType'         => 'InstanceType',
        'networkType'          => 'NetworkType',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'privateIp'            => 'PrivateIp',
        'regionId'             => 'RegionId',
        'resourceGroupId'      => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'searchKey'            => 'SearchKey',
        'securityToken'        => 'SecurityToken',
        'vSwitchId'            => 'VSwitchId',
        'vpcId'                => 'VpcId',
        'zoneId'               => 'ZoneId',
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
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->editionType) {
            $res['EditionType'] = $this->editionType;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->instanceClass) {
            $res['InstanceClass'] = $this->instanceClass;
        }
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }
        if (null !== $this->instanceStatus) {
            $res['InstanceStatus'] = $this->instanceStatus;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->privateIp) {
            $res['PrivateIp'] = $this->privateIp;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->searchKey) {
            $res['SearchKey'] = $this->searchKey;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
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
     * @return DescribeInstancesOverviewRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArchitectureType'])) {
            $model->architectureType = $map['ArchitectureType'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['EditionType'])) {
            $model->editionType = $map['EditionType'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['InstanceClass'])) {
            $model->instanceClass = $map['InstanceClass'];
        }
        if (isset($map['InstanceIds'])) {
            $model->instanceIds = $map['InstanceIds'];
        }
        if (isset($map['InstanceStatus'])) {
            $model->instanceStatus = $map['InstanceStatus'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PrivateIp'])) {
            $model->privateIp = $map['PrivateIp'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SearchKey'])) {
            $model->searchKey = $map['SearchKey'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
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
