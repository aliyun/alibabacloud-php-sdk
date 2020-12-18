<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceOnECSAttributeResponse\items;

use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceOnECSAttributeResponse\items\DBInstanceAttribute\tags;
use AlibabaCloud\Tea\Model;

class DBInstanceAttribute extends Model
{
    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $regionId;

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
    public $DBInstanceClass;

    /**
     * @var string
     */
    public $DBInstanceStatus;

    /**
     * @var string
     */
    public $DBInstanceDescription;

    /**
     * @var string
     */
    public $lockMode;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $zoneId;

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
    public $connectionMode;

    /**
     * @var string
     */
    public $storageType;

    /**
     * @var string
     */
    public $instanceDeployType;

    /**
     * @var int
     */
    public $segNodeNum;

    /**
     * @var int
     */
    public $memorySize;

    /**
     * @var int
     */
    public $cpuCores;

    /**
     * @var int
     */
    public $storageSize;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $connectionString;

    /**
     * @var string
     */
    public $port;

    /**
     * @var string
     */
    public $encryptionType;

    /**
     * @var string
     */
    public $encryptionKey;

    /**
     * @var tags
     */
    public $tags;
    protected $_name = [
        'DBInstanceId'          => 'DBInstanceId',
        'payType'               => 'PayType',
        'regionId'              => 'RegionId',
        'engine'                => 'Engine',
        'engineVersion'         => 'EngineVersion',
        'DBInstanceClass'       => 'DBInstanceClass',
        'DBInstanceStatus'      => 'DBInstanceStatus',
        'DBInstanceDescription' => 'DBInstanceDescription',
        'lockMode'              => 'LockMode',
        'creationTime'          => 'CreationTime',
        'expireTime'            => 'ExpireTime',
        'zoneId'                => 'ZoneId',
        'instanceNetworkType'   => 'InstanceNetworkType',
        'vpcId'                 => 'VpcId',
        'connectionMode'        => 'ConnectionMode',
        'storageType'           => 'StorageType',
        'instanceDeployType'    => 'InstanceDeployType',
        'segNodeNum'            => 'SegNodeNum',
        'memorySize'            => 'MemorySize',
        'cpuCores'              => 'CpuCores',
        'storageSize'           => 'StorageSize',
        'vSwitchId'             => 'VSwitchId',
        'connectionString'      => 'ConnectionString',
        'port'                  => 'Port',
        'encryptionType'        => 'EncryptionType',
        'encryptionKey'         => 'EncryptionKey',
        'tags'                  => 'Tags',
    ];

    public function validate()
    {
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
        Model::validateRequired('payType', $this->payType, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('engine', $this->engine, true);
        Model::validateRequired('engineVersion', $this->engineVersion, true);
        Model::validateRequired('DBInstanceClass', $this->DBInstanceClass, true);
        Model::validateRequired('DBInstanceStatus', $this->DBInstanceStatus, true);
        Model::validateRequired('DBInstanceDescription', $this->DBInstanceDescription, true);
        Model::validateRequired('lockMode', $this->lockMode, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('expireTime', $this->expireTime, true);
        Model::validateRequired('zoneId', $this->zoneId, true);
        Model::validateRequired('instanceNetworkType', $this->instanceNetworkType, true);
        Model::validateRequired('vpcId', $this->vpcId, true);
        Model::validateRequired('connectionMode', $this->connectionMode, true);
        Model::validateRequired('storageType', $this->storageType, true);
        Model::validateRequired('instanceDeployType', $this->instanceDeployType, true);
        Model::validateRequired('segNodeNum', $this->segNodeNum, true);
        Model::validateRequired('memorySize', $this->memorySize, true);
        Model::validateRequired('cpuCores', $this->cpuCores, true);
        Model::validateRequired('storageSize', $this->storageSize, true);
        Model::validateRequired('vSwitchId', $this->vSwitchId, true);
        Model::validateRequired('connectionString', $this->connectionString, true);
        Model::validateRequired('port', $this->port, true);
        Model::validateRequired('encryptionType', $this->encryptionType, true);
        Model::validateRequired('encryptionKey', $this->encryptionKey, true);
        Model::validateRequired('tags', $this->tags, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->DBInstanceClass) {
            $res['DBInstanceClass'] = $this->DBInstanceClass;
        }
        if (null !== $this->DBInstanceStatus) {
            $res['DBInstanceStatus'] = $this->DBInstanceStatus;
        }
        if (null !== $this->DBInstanceDescription) {
            $res['DBInstanceDescription'] = $this->DBInstanceDescription;
        }
        if (null !== $this->lockMode) {
            $res['LockMode'] = $this->lockMode;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->instanceNetworkType) {
            $res['InstanceNetworkType'] = $this->instanceNetworkType;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->connectionMode) {
            $res['ConnectionMode'] = $this->connectionMode;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }
        if (null !== $this->instanceDeployType) {
            $res['InstanceDeployType'] = $this->instanceDeployType;
        }
        if (null !== $this->segNodeNum) {
            $res['SegNodeNum'] = $this->segNodeNum;
        }
        if (null !== $this->memorySize) {
            $res['MemorySize'] = $this->memorySize;
        }
        if (null !== $this->cpuCores) {
            $res['CpuCores'] = $this->cpuCores;
        }
        if (null !== $this->storageSize) {
            $res['StorageSize'] = $this->storageSize;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->connectionString) {
            $res['ConnectionString'] = $this->connectionString;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->encryptionType) {
            $res['EncryptionType'] = $this->encryptionType;
        }
        if (null !== $this->encryptionKey) {
            $res['EncryptionKey'] = $this->encryptionKey;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBInstanceAttribute
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['DBInstanceClass'])) {
            $model->DBInstanceClass = $map['DBInstanceClass'];
        }
        if (isset($map['DBInstanceStatus'])) {
            $model->DBInstanceStatus = $map['DBInstanceStatus'];
        }
        if (isset($map['DBInstanceDescription'])) {
            $model->DBInstanceDescription = $map['DBInstanceDescription'];
        }
        if (isset($map['LockMode'])) {
            $model->lockMode = $map['LockMode'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['InstanceNetworkType'])) {
            $model->instanceNetworkType = $map['InstanceNetworkType'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['ConnectionMode'])) {
            $model->connectionMode = $map['ConnectionMode'];
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }
        if (isset($map['InstanceDeployType'])) {
            $model->instanceDeployType = $map['InstanceDeployType'];
        }
        if (isset($map['SegNodeNum'])) {
            $model->segNodeNum = $map['SegNodeNum'];
        }
        if (isset($map['MemorySize'])) {
            $model->memorySize = $map['MemorySize'];
        }
        if (isset($map['CpuCores'])) {
            $model->cpuCores = $map['CpuCores'];
        }
        if (isset($map['StorageSize'])) {
            $model->storageSize = $map['StorageSize'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['ConnectionString'])) {
            $model->connectionString = $map['ConnectionString'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['EncryptionType'])) {
            $model->encryptionType = $map['EncryptionType'];
        }
        if (isset($map['EncryptionKey'])) {
            $model->encryptionKey = $map['EncryptionKey'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }

        return $model;
    }
}
