<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstancesResponse\items;

use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstancesResponse\items\DBInstance\tags;
use AlibabaCloud\Tea\Model;

class DBInstance extends Model
{
    /**
     * @var string
     */
    public $engineVersion;

    /**
     * @var string
     */
    public $storageType;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $DBInstanceStatus;

    /**
     * @var string
     */
    public $DBInstanceNetType;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $lockMode;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $instanceNetworkType;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $connectionMode;

    /**
     * @var string
     */
    public $instanceDeployType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $lockReason;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $DBInstanceDescription;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var tags
     */
    public $tags;
    protected $_name = [
        'engineVersion'         => 'EngineVersion',
        'storageType'           => 'StorageType',
        'zoneId'                => 'ZoneId',
        'DBInstanceStatus'      => 'DBInstanceStatus',
        'DBInstanceNetType'     => 'DBInstanceNetType',
        'vSwitchId'             => 'VSwitchId',
        'createTime'            => 'CreateTime',
        'lockMode'              => 'LockMode',
        'payType'               => 'PayType',
        'instanceNetworkType'   => 'InstanceNetworkType',
        'vpcId'                 => 'VpcId',
        'DBInstanceId'          => 'DBInstanceId',
        'connectionMode'        => 'ConnectionMode',
        'instanceDeployType'    => 'InstanceDeployType',
        'regionId'              => 'RegionId',
        'lockReason'            => 'LockReason',
        'expireTime'            => 'ExpireTime',
        'DBInstanceDescription' => 'DBInstanceDescription',
        'engine'                => 'Engine',
        'tags'                  => 'Tags',
    ];

    public function validate()
    {
        Model::validateRequired('engineVersion', $this->engineVersion, true);
        Model::validateRequired('storageType', $this->storageType, true);
        Model::validateRequired('zoneId', $this->zoneId, true);
        Model::validateRequired('DBInstanceStatus', $this->DBInstanceStatus, true);
        Model::validateRequired('DBInstanceNetType', $this->DBInstanceNetType, true);
        Model::validateRequired('vSwitchId', $this->vSwitchId, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('lockMode', $this->lockMode, true);
        Model::validateRequired('payType', $this->payType, true);
        Model::validateRequired('instanceNetworkType', $this->instanceNetworkType, true);
        Model::validateRequired('vpcId', $this->vpcId, true);
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
        Model::validateRequired('connectionMode', $this->connectionMode, true);
        Model::validateRequired('instanceDeployType', $this->instanceDeployType, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('lockReason', $this->lockReason, true);
        Model::validateRequired('expireTime', $this->expireTime, true);
        Model::validateRequired('DBInstanceDescription', $this->DBInstanceDescription, true);
        Model::validateRequired('engine', $this->engine, true);
        Model::validateRequired('tags', $this->tags, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->DBInstanceStatus) {
            $res['DBInstanceStatus'] = $this->DBInstanceStatus;
        }
        if (null !== $this->DBInstanceNetType) {
            $res['DBInstanceNetType'] = $this->DBInstanceNetType;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->lockMode) {
            $res['LockMode'] = $this->lockMode;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->instanceNetworkType) {
            $res['InstanceNetworkType'] = $this->instanceNetworkType;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->connectionMode) {
            $res['ConnectionMode'] = $this->connectionMode;
        }
        if (null !== $this->instanceDeployType) {
            $res['InstanceDeployType'] = $this->instanceDeployType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->lockReason) {
            $res['LockReason'] = $this->lockReason;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->DBInstanceDescription) {
            $res['DBInstanceDescription'] = $this->DBInstanceDescription;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
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
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['DBInstanceStatus'])) {
            $model->DBInstanceStatus = $map['DBInstanceStatus'];
        }
        if (isset($map['DBInstanceNetType'])) {
            $model->DBInstanceNetType = $map['DBInstanceNetType'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['LockMode'])) {
            $model->lockMode = $map['LockMode'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['InstanceNetworkType'])) {
            $model->instanceNetworkType = $map['InstanceNetworkType'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['ConnectionMode'])) {
            $model->connectionMode = $map['ConnectionMode'];
        }
        if (isset($map['InstanceDeployType'])) {
            $model->instanceDeployType = $map['InstanceDeployType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['LockReason'])) {
            $model->lockReason = $map['LockReason'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['DBInstanceDescription'])) {
            $model->DBInstanceDescription = $map['DBInstanceDescription'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }

        return $model;
    }
}
