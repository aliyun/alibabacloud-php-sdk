<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstancesResponseBody\items;

use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstancesResponseBody\items\DBInstance\tags;
use AlibabaCloud\Tea\Model;

class DBInstance extends Model
{
    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $DBInstanceNetType;

    /**
     * @var string
     */
    public $instanceDeployType;

    /**
     * @var string
     */
    public $storageType;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @var string
     */
    public $lockReason;

    /**
     * @var string
     */
    public $DBInstanceStatus;

    /**
     * @var string
     */
    public $connectionMode;

    /**
     * @var string
     */
    public $lockMode;

    /**
     * @var string
     */
    public $engineVersion;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $instanceNetworkType;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var string
     */
    public $DBInstanceDescription;

    /**
     * @var string
     */
    public $segNodeNum;

    /**
     * @var string
     */
    public $storageSize;

    /**
     * @var int
     */
    public $masterNodeNum;
    protected $_name = [
        'vpcId'                 => 'VpcId',
        'expireTime'            => 'ExpireTime',
        'DBInstanceNetType'     => 'DBInstanceNetType',
        'instanceDeployType'    => 'InstanceDeployType',
        'storageType'           => 'StorageType',
        'createTime'            => 'CreateTime',
        'payType'               => 'PayType',
        'tags'                  => 'Tags',
        'lockReason'            => 'LockReason',
        'DBInstanceStatus'      => 'DBInstanceStatus',
        'connectionMode'        => 'ConnectionMode',
        'lockMode'              => 'LockMode',
        'engineVersion'         => 'EngineVersion',
        'regionId'              => 'RegionId',
        'vSwitchId'             => 'VSwitchId',
        'instanceNetworkType'   => 'InstanceNetworkType',
        'zoneId'                => 'ZoneId',
        'DBInstanceId'          => 'DBInstanceId',
        'engine'                => 'Engine',
        'DBInstanceDescription' => 'DBInstanceDescription',
        'segNodeNum'            => 'SegNodeNum',
        'storageSize'           => 'StorageSize',
        'masterNodeNum'         => 'MasterNodeNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->DBInstanceNetType) {
            $res['DBInstanceNetType'] = $this->DBInstanceNetType;
        }
        if (null !== $this->instanceDeployType) {
            $res['InstanceDeployType'] = $this->instanceDeployType;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->lockReason) {
            $res['LockReason'] = $this->lockReason;
        }
        if (null !== $this->DBInstanceStatus) {
            $res['DBInstanceStatus'] = $this->DBInstanceStatus;
        }
        if (null !== $this->connectionMode) {
            $res['ConnectionMode'] = $this->connectionMode;
        }
        if (null !== $this->lockMode) {
            $res['LockMode'] = $this->lockMode;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->instanceNetworkType) {
            $res['InstanceNetworkType'] = $this->instanceNetworkType;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->DBInstanceDescription) {
            $res['DBInstanceDescription'] = $this->DBInstanceDescription;
        }
        if (null !== $this->segNodeNum) {
            $res['SegNodeNum'] = $this->segNodeNum;
        }
        if (null !== $this->storageSize) {
            $res['StorageSize'] = $this->storageSize;
        }
        if (null !== $this->masterNodeNum) {
            $res['MasterNodeNum'] = $this->masterNodeNum;
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
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['DBInstanceNetType'])) {
            $model->DBInstanceNetType = $map['DBInstanceNetType'];
        }
        if (isset($map['InstanceDeployType'])) {
            $model->instanceDeployType = $map['InstanceDeployType'];
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['LockReason'])) {
            $model->lockReason = $map['LockReason'];
        }
        if (isset($map['DBInstanceStatus'])) {
            $model->DBInstanceStatus = $map['DBInstanceStatus'];
        }
        if (isset($map['ConnectionMode'])) {
            $model->connectionMode = $map['ConnectionMode'];
        }
        if (isset($map['LockMode'])) {
            $model->lockMode = $map['LockMode'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['InstanceNetworkType'])) {
            $model->instanceNetworkType = $map['InstanceNetworkType'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['DBInstanceDescription'])) {
            $model->DBInstanceDescription = $map['DBInstanceDescription'];
        }
        if (isset($map['SegNodeNum'])) {
            $model->segNodeNum = $map['SegNodeNum'];
        }
        if (isset($map['StorageSize'])) {
            $model->storageSize = $map['StorageSize'];
        }
        if (isset($map['MasterNodeNum'])) {
            $model->masterNodeNum = $map['MasterNodeNum'];
        }

        return $model;
    }
}
