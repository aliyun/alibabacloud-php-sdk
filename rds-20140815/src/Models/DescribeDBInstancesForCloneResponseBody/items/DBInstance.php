<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancesForCloneResponseBody\items;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancesForCloneResponseBody\items\DBInstance\readOnlyDBInstanceIds;

class DBInstance extends Model
{
    /**
     * @var string
     */
    public $category;
    /**
     * @var string
     */
    public $connectionMode;
    /**
     * @var string
     */
    public $createTime;
    /**
     * @var string
     */
    public $DBInstanceClass;
    /**
     * @var string
     */
    public $DBInstanceDescription;
    /**
     * @var string
     */
    public $DBInstanceId;
    /**
     * @var string
     */
    public $DBInstanceNetType;
    /**
     * @var string
     */
    public $DBInstanceStatus;
    /**
     * @var string
     */
    public $DBInstanceStorageType;
    /**
     * @var string
     */
    public $DBInstanceType;
    /**
     * @var string
     */
    public $destroyTime;
    /**
     * @var string
     */
    public $engine;
    /**
     * @var string
     */
    public $engineVersion;
    /**
     * @var string
     */
    public $expireTime;
    /**
     * @var string
     */
    public $guardDBInstanceId;
    /**
     * @var int
     */
    public $insId;
    /**
     * @var string
     */
    public $instanceNetworkType;
    /**
     * @var string
     */
    public $lockMode;
    /**
     * @var string
     */
    public $lockReason;
    /**
     * @var string
     */
    public $masterInstanceId;
    /**
     * @var bool
     */
    public $mutriORsignle;
    /**
     * @var string
     */
    public $payType;
    /**
     * @var readOnlyDBInstanceIds
     */
    public $readOnlyDBInstanceIds;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $replicateId;
    /**
     * @var string
     */
    public $resourceGroupId;
    /**
     * @var string
     */
    public $tempDBInstanceId;
    /**
     * @var string
     */
    public $vSwitchId;
    /**
     * @var string
     */
    public $vpcCloudInstanceId;
    /**
     * @var string
     */
    public $vpcId;
    /**
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
        if (null !== $this->readOnlyDBInstanceIds) {
            $this->readOnlyDBInstanceIds->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['ReadOnlyDBInstanceIds'] = null !== $this->readOnlyDBInstanceIds ? $this->readOnlyDBInstanceIds->toArray($noStream) : $this->readOnlyDBInstanceIds;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
