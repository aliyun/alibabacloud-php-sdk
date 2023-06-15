<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancesForCloneResponseBody\items;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancesForCloneResponseBody\items\DBInstance\readOnlyDBInstanceIds;
use AlibabaCloud\Tea\Model;

class DBInstance extends Model
{
    /**
     * @description The RDS edition of the instance. Valid values:
     *
     *   **Basic**: RDS Basic Edition
     *   **HighAvailability**: RDS High-availability Edition
     *   **Finance**: RDS Enterprise Edition
     *
     * @example HighAvailability
     *
     * @var string
     */
    public $category;

    /**
     * @description The connection mode of the instance. Valid values:
     *
     *   **Standard**: standard mode
     *   **Safe**: database proxy mode
     *
     * @example Standard
     *
     * @var string
     */
    public $connectionMode;

    /**
     * @description The time when the instance was created. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2018-11-05T11:26:02Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The instance type of the instance. For more information, see [Instance types](~~26312~~).
     *
     * @example mysql.n1.micro.1
     *
     * @var string
     */
    public $DBInstanceClass;

    /**
     * @description The name of the instance. It must be 2 to 256 characters in length. The value can contain letters, digits, underscores (\_), and hyphens (-). The value must start with a letter.
     *
     * > The value cannot start with http:// or https://.
     * @example Test
     *
     * @var string
     */
    public $DBInstanceDescription;

    /**
     * @description The ID of the instance.
     *
     * @example rm-uf6wjk5xxxxxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The network connection type of the instance. Valid values:
     *
     *   **Internet**
     *   **Intranet**
     *
     * @example Intranet
     *
     * @var string
     */
    public $DBInstanceNetType;

    /**
     * @description The status of the instance. For more information, see [Instance state table](~~26315~~).
     *
     * @example Running
     *
     * @var string
     */
    public $DBInstanceStatus;

    /**
     * @description The storage type of the instance. Valid values:
     *
     *   **local_ssd/ephemeral_ssd**: local SSD
     *   **cloud_ssd**: standard SSD.
     *   **cloud_essd**: enhanced SSD (ESSD)
     *
     * @example local_ssd
     *
     * @var string
     */
    public $DBInstanceStorageType;

    /**
     * @description The role of the instance. Valid values:
     *
     *   **Primary**: primary instance
     *   **Readonly**: read-only instance
     *   **Guard**: disaster recovery instance
     *   **Temp**: temporary instance
     *
     * @example Primary
     *
     * @var string
     */
    public $DBInstanceType;

    /**
     * @description The time when the instance was destroyed. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2018-12-05T11:26:02Z
     *
     * @var string
     */
    public $destroyTime;

    /**
     * @description The database engine of the instance. Valid values:
     *
     *   MySQL
     *   SQLServer
     *   PostgreSQL
     *   PPAS
     *   MariaDB
     *
     * @example MySQL
     *
     * @var string
     */
    public $engine;

    /**
     * @description The version of the database engine.
     *
     * @example 5.7
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @description The time when the instance expired. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2018-11-28T11:26:02Z
     *
     * @var string
     */
    public $expireTime;

    /**
     * @description The ID of the disaster recovery instance. This parameter is returned only when the instance is a primary instance and has a disaster recovery instance.
     *
     * @example rm-uf64zsuxxxxxxxxxx
     *
     * @var string
     */
    public $guardDBInstanceId;

    /**
     * @description The ID of the instance role.
     *
     * @example 1
     *
     * @var int
     */
    public $insId;

    /**
     * @description The network type of the instance. Valid values:
     *
     *   **Classic**
     *   **VPC**
     *
     * @example Classic
     *
     * @var string
     */
    public $instanceNetworkType;

    /**
     * @description The lock method of the instance. Valid values:
     *
     *   **Unlock**: The instance is not locked.
     *   **ManualLock**: The instance is manually locked.
     *   **LockByExpiration**: The instance is automatically locked after it expires.
     *   **LockByRestoration**: The instance is automatically locked before a rollback.
     *   **LockByDiskQuota**: The instance is automatically locked because its storage capacity is exhausted and the instance is inaccessible.
     *
     * @example Unlock
     *
     * @var string
     */
    public $lockMode;

    /**
     * @description The reason why the instance was locked.
     *
     * @example instance_expired
     *
     * @var string
     */
    public $lockReason;

    /**
     * @description The ID of the primary instance. If the value of this parameter is null, the instance is a primary instance.
     *
     * @example rm-uf6wjk5xxxxxxxxxx
     *
     * @var string
     */
    public $masterInstanceId;

    /**
     * @description Indicates whether multi-region deployment is used. Valid values:
     *
     *   **true**: Multi-region deployment is used.
     *   **false**: Multi-region deployment is not used.
     *
     * @example false
     *
     * @var bool
     */
    public $mutriORsignle;

    /**
     * @description The billing method of the instance. Valid values:
     *
     *   **Postpaid**: pay-as-you-go
     *   **Prepaid**: subscription
     *
     * @example Postpaid
     *
     * @var string
     */
    public $payType;

    /**
     * @description An array consisting of the IDs of the read-only instances that are attached to the primary instance.
     *
     * @var readOnlyDBInstanceIds
     */
    public $readOnlyDBInstanceIds;

    /**
     * @description The region ID of the instance.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description None.
     *
     * @example N/A
     *
     * @var string
     */
    public $replicateId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfmyxxxxx
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The ID of the temporary instance.
     *
     * @example sub138xxxxx_rm-xxxxx
     *
     * @var string
     */
    public $tempDBInstanceId;

    /**
     * @description The ID of the vSwitch.
     *
     * @example vsw-uf6adz52c2pxxxxxxxxxx
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The ID of the instance in the VPC.
     *
     * @example rm-uf6wjk5xxxxxxxxxx
     *
     * @var string
     */
    public $vpcCloudInstanceId;

    /**
     * @description The ID of the virtual private cloud (VPC).
     *
     * @example vpc-bp1opxu1zkhxxxxxxxxxx
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The zone ID of the instance.
     *
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'category'              => 'Category',
        'connectionMode'        => 'ConnectionMode',
        'createTime'            => 'CreateTime',
        'DBInstanceClass'       => 'DBInstanceClass',
        'DBInstanceDescription' => 'DBInstanceDescription',
        'DBInstanceId'          => 'DBInstanceId',
        'DBInstanceNetType'     => 'DBInstanceNetType',
        'DBInstanceStatus'      => 'DBInstanceStatus',
        'DBInstanceStorageType' => 'DBInstanceStorageType',
        'DBInstanceType'        => 'DBInstanceType',
        'destroyTime'           => 'DestroyTime',
        'engine'                => 'Engine',
        'engineVersion'         => 'EngineVersion',
        'expireTime'            => 'ExpireTime',
        'guardDBInstanceId'     => 'GuardDBInstanceId',
        'insId'                 => 'InsId',
        'instanceNetworkType'   => 'InstanceNetworkType',
        'lockMode'              => 'LockMode',
        'lockReason'            => 'LockReason',
        'masterInstanceId'      => 'MasterInstanceId',
        'mutriORsignle'         => 'MutriORsignle',
        'payType'               => 'PayType',
        'readOnlyDBInstanceIds' => 'ReadOnlyDBInstanceIds',
        'regionId'              => 'RegionId',
        'replicateId'           => 'ReplicateId',
        'resourceGroupId'       => 'ResourceGroupId',
        'tempDBInstanceId'      => 'TempDBInstanceId',
        'vSwitchId'             => 'VSwitchId',
        'vpcCloudInstanceId'    => 'VpcCloudInstanceId',
        'vpcId'                 => 'VpcId',
        'zoneId'                => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->connectionMode) {
            $res['ConnectionMode'] = $this->connectionMode;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->DBInstanceClass) {
            $res['DBInstanceClass'] = $this->DBInstanceClass;
        }
        if (null !== $this->DBInstanceDescription) {
            $res['DBInstanceDescription'] = $this->DBInstanceDescription;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->DBInstanceNetType) {
            $res['DBInstanceNetType'] = $this->DBInstanceNetType;
        }
        if (null !== $this->DBInstanceStatus) {
            $res['DBInstanceStatus'] = $this->DBInstanceStatus;
        }
        if (null !== $this->DBInstanceStorageType) {
            $res['DBInstanceStorageType'] = $this->DBInstanceStorageType;
        }
        if (null !== $this->DBInstanceType) {
            $res['DBInstanceType'] = $this->DBInstanceType;
        }
        if (null !== $this->destroyTime) {
            $res['DestroyTime'] = $this->destroyTime;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->guardDBInstanceId) {
            $res['GuardDBInstanceId'] = $this->guardDBInstanceId;
        }
        if (null !== $this->insId) {
            $res['InsId'] = $this->insId;
        }
        if (null !== $this->instanceNetworkType) {
            $res['InstanceNetworkType'] = $this->instanceNetworkType;
        }
        if (null !== $this->lockMode) {
            $res['LockMode'] = $this->lockMode;
        }
        if (null !== $this->lockReason) {
            $res['LockReason'] = $this->lockReason;
        }
        if (null !== $this->masterInstanceId) {
            $res['MasterInstanceId'] = $this->masterInstanceId;
        }
        if (null !== $this->mutriORsignle) {
            $res['MutriORsignle'] = $this->mutriORsignle;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->readOnlyDBInstanceIds) {
            $res['ReadOnlyDBInstanceIds'] = null !== $this->readOnlyDBInstanceIds ? $this->readOnlyDBInstanceIds->toMap() : null;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->replicateId) {
            $res['ReplicateId'] = $this->replicateId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->tempDBInstanceId) {
            $res['TempDBInstanceId'] = $this->tempDBInstanceId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcCloudInstanceId) {
            $res['VpcCloudInstanceId'] = $this->vpcCloudInstanceId;
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
     * @return DBInstance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['ConnectionMode'])) {
            $model->connectionMode = $map['ConnectionMode'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DBInstanceClass'])) {
            $model->DBInstanceClass = $map['DBInstanceClass'];
        }
        if (isset($map['DBInstanceDescription'])) {
            $model->DBInstanceDescription = $map['DBInstanceDescription'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DBInstanceNetType'])) {
            $model->DBInstanceNetType = $map['DBInstanceNetType'];
        }
        if (isset($map['DBInstanceStatus'])) {
            $model->DBInstanceStatus = $map['DBInstanceStatus'];
        }
        if (isset($map['DBInstanceStorageType'])) {
            $model->DBInstanceStorageType = $map['DBInstanceStorageType'];
        }
        if (isset($map['DBInstanceType'])) {
            $model->DBInstanceType = $map['DBInstanceType'];
        }
        if (isset($map['DestroyTime'])) {
            $model->destroyTime = $map['DestroyTime'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['GuardDBInstanceId'])) {
            $model->guardDBInstanceId = $map['GuardDBInstanceId'];
        }
        if (isset($map['InsId'])) {
            $model->insId = $map['InsId'];
        }
        if (isset($map['InstanceNetworkType'])) {
            $model->instanceNetworkType = $map['InstanceNetworkType'];
        }
        if (isset($map['LockMode'])) {
            $model->lockMode = $map['LockMode'];
        }
        if (isset($map['LockReason'])) {
            $model->lockReason = $map['LockReason'];
        }
        if (isset($map['MasterInstanceId'])) {
            $model->masterInstanceId = $map['MasterInstanceId'];
        }
        if (isset($map['MutriORsignle'])) {
            $model->mutriORsignle = $map['MutriORsignle'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['ReadOnlyDBInstanceIds'])) {
            $model->readOnlyDBInstanceIds = readOnlyDBInstanceIds::fromMap($map['ReadOnlyDBInstanceIds']);
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ReplicateId'])) {
            $model->replicateId = $map['ReplicateId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['TempDBInstanceId'])) {
            $model->tempDBInstanceId = $map['TempDBInstanceId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VpcCloudInstanceId'])) {
            $model->vpcCloudInstanceId = $map['VpcCloudInstanceId'];
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
