<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceAttributeResponse\items;

use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceAttributeResponse\items\DBInstanceAttribute\tags;
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
    public $DBInstanceClassType;

    /**
     * @var string
     */
    public $regionId;

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
     * @var int
     */
    public $DBInstanceCpuCores;

    /**
     * @var int
     */
    public $DBInstanceMemory;

    /**
     * @var int
     */
    public $DBInstanceStorage;

    /**
     * @var int
     */
    public $DBInstanceDiskMBPS;

    /**
     * @var string
     */
    public $hostType;

    /**
     * @var string
     */
    public $DBInstanceGroupCount;

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
    public $DBInstanceDescription;

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
    public $readDelayTime;

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
    public $maintainStartTime;

    /**
     * @var string
     */
    public $maintainEndTime;

    /**
     * @var string
     */
    public $availabilityValue;

    /**
     * @var int
     */
    public $maxConnections;

    /**
     * @var string
     */
    public $securityIPList;

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
     * @var int
     */
    public $cpuCoresPerNode;

    /**
     * @var int
     */
    public $segmentCounts;

    /**
     * @var int
     */
    public $storagePerNode;

    /**
     * @var int
     */
    public $memoryPerNode;

    /**
     * @var string
     */
    public $storageUnit;

    /**
     * @var string
     */
    public $memoryUnit;

    /**
     * @var tags
     */
    public $tags;
    protected $_name = [
        'DBInstanceId'          => 'DBInstanceId',
        'payType'               => 'PayType',
        'DBInstanceClassType'   => 'DBInstanceClassType',
        'regionId'              => 'RegionId',
        'connectionString'      => 'ConnectionString',
        'port'                  => 'Port',
        'engine'                => 'Engine',
        'engineVersion'         => 'EngineVersion',
        'DBInstanceClass'       => 'DBInstanceClass',
        'DBInstanceCpuCores'    => 'DBInstanceCpuCores',
        'DBInstanceMemory'      => 'DBInstanceMemory',
        'DBInstanceStorage'     => 'DBInstanceStorage',
        'DBInstanceDiskMBPS'    => 'DBInstanceDiskMBPS',
        'hostType'              => 'HostType',
        'DBInstanceGroupCount'  => 'DBInstanceGroupCount',
        'DBInstanceNetType'     => 'DBInstanceNetType',
        'DBInstanceStatus'      => 'DBInstanceStatus',
        'DBInstanceDescription' => 'DBInstanceDescription',
        'lockMode'              => 'LockMode',
        'lockReason'            => 'LockReason',
        'readDelayTime'         => 'ReadDelayTime',
        'creationTime'          => 'CreationTime',
        'expireTime'            => 'ExpireTime',
        'maintainStartTime'     => 'MaintainStartTime',
        'maintainEndTime'       => 'MaintainEndTime',
        'availabilityValue'     => 'AvailabilityValue',
        'maxConnections'        => 'MaxConnections',
        'securityIPList'        => 'SecurityIPList',
        'zoneId'                => 'ZoneId',
        'instanceNetworkType'   => 'InstanceNetworkType',
        'vpcId'                 => 'VpcId',
        'connectionMode'        => 'ConnectionMode',
        'storageType'           => 'StorageType',
        'cpuCoresPerNode'       => 'CpuCoresPerNode',
        'segmentCounts'         => 'SegmentCounts',
        'storagePerNode'        => 'StoragePerNode',
        'memoryPerNode'         => 'MemoryPerNode',
        'storageUnit'           => 'StorageUnit',
        'memoryUnit'            => 'MemoryUnit',
        'tags'                  => 'Tags',
    ];

    public function validate()
    {
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
        Model::validateRequired('payType', $this->payType, true);
        Model::validateRequired('DBInstanceClassType', $this->DBInstanceClassType, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('connectionString', $this->connectionString, true);
        Model::validateRequired('port', $this->port, true);
        Model::validateRequired('engine', $this->engine, true);
        Model::validateRequired('engineVersion', $this->engineVersion, true);
        Model::validateRequired('DBInstanceClass', $this->DBInstanceClass, true);
        Model::validateRequired('DBInstanceCpuCores', $this->DBInstanceCpuCores, true);
        Model::validateRequired('DBInstanceMemory', $this->DBInstanceMemory, true);
        Model::validateRequired('DBInstanceStorage', $this->DBInstanceStorage, true);
        Model::validateRequired('DBInstanceDiskMBPS', $this->DBInstanceDiskMBPS, true);
        Model::validateRequired('hostType', $this->hostType, true);
        Model::validateRequired('DBInstanceGroupCount', $this->DBInstanceGroupCount, true);
        Model::validateRequired('DBInstanceNetType', $this->DBInstanceNetType, true);
        Model::validateRequired('DBInstanceStatus', $this->DBInstanceStatus, true);
        Model::validateRequired('DBInstanceDescription', $this->DBInstanceDescription, true);
        Model::validateRequired('lockMode', $this->lockMode, true);
        Model::validateRequired('lockReason', $this->lockReason, true);
        Model::validateRequired('readDelayTime', $this->readDelayTime, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('expireTime', $this->expireTime, true);
        Model::validateRequired('maintainStartTime', $this->maintainStartTime, true);
        Model::validateRequired('maintainEndTime', $this->maintainEndTime, true);
        Model::validateRequired('availabilityValue', $this->availabilityValue, true);
        Model::validateRequired('maxConnections', $this->maxConnections, true);
        Model::validateRequired('securityIPList', $this->securityIPList, true);
        Model::validateRequired('zoneId', $this->zoneId, true);
        Model::validateRequired('instanceNetworkType', $this->instanceNetworkType, true);
        Model::validateRequired('vpcId', $this->vpcId, true);
        Model::validateRequired('connectionMode', $this->connectionMode, true);
        Model::validateRequired('storageType', $this->storageType, true);
        Model::validateRequired('cpuCoresPerNode', $this->cpuCoresPerNode, true);
        Model::validateRequired('segmentCounts', $this->segmentCounts, true);
        Model::validateRequired('storagePerNode', $this->storagePerNode, true);
        Model::validateRequired('memoryPerNode', $this->memoryPerNode, true);
        Model::validateRequired('storageUnit', $this->storageUnit, true);
        Model::validateRequired('memoryUnit', $this->memoryUnit, true);
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
        if (null !== $this->DBInstanceClassType) {
            $res['DBInstanceClassType'] = $this->DBInstanceClassType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->connectionString) {
            $res['ConnectionString'] = $this->connectionString;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
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
        if (null !== $this->DBInstanceCpuCores) {
            $res['DBInstanceCpuCores'] = $this->DBInstanceCpuCores;
        }
        if (null !== $this->DBInstanceMemory) {
            $res['DBInstanceMemory'] = $this->DBInstanceMemory;
        }
        if (null !== $this->DBInstanceStorage) {
            $res['DBInstanceStorage'] = $this->DBInstanceStorage;
        }
        if (null !== $this->DBInstanceDiskMBPS) {
            $res['DBInstanceDiskMBPS'] = $this->DBInstanceDiskMBPS;
        }
        if (null !== $this->hostType) {
            $res['HostType'] = $this->hostType;
        }
        if (null !== $this->DBInstanceGroupCount) {
            $res['DBInstanceGroupCount'] = $this->DBInstanceGroupCount;
        }
        if (null !== $this->DBInstanceNetType) {
            $res['DBInstanceNetType'] = $this->DBInstanceNetType;
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
        if (null !== $this->lockReason) {
            $res['LockReason'] = $this->lockReason;
        }
        if (null !== $this->readDelayTime) {
            $res['ReadDelayTime'] = $this->readDelayTime;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->maintainStartTime) {
            $res['MaintainStartTime'] = $this->maintainStartTime;
        }
        if (null !== $this->maintainEndTime) {
            $res['MaintainEndTime'] = $this->maintainEndTime;
        }
        if (null !== $this->availabilityValue) {
            $res['AvailabilityValue'] = $this->availabilityValue;
        }
        if (null !== $this->maxConnections) {
            $res['MaxConnections'] = $this->maxConnections;
        }
        if (null !== $this->securityIPList) {
            $res['SecurityIPList'] = $this->securityIPList;
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
        if (null !== $this->cpuCoresPerNode) {
            $res['CpuCoresPerNode'] = $this->cpuCoresPerNode;
        }
        if (null !== $this->segmentCounts) {
            $res['SegmentCounts'] = $this->segmentCounts;
        }
        if (null !== $this->storagePerNode) {
            $res['StoragePerNode'] = $this->storagePerNode;
        }
        if (null !== $this->memoryPerNode) {
            $res['MemoryPerNode'] = $this->memoryPerNode;
        }
        if (null !== $this->storageUnit) {
            $res['StorageUnit'] = $this->storageUnit;
        }
        if (null !== $this->memoryUnit) {
            $res['MemoryUnit'] = $this->memoryUnit;
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
        if (isset($map['DBInstanceClassType'])) {
            $model->DBInstanceClassType = $map['DBInstanceClassType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ConnectionString'])) {
            $model->connectionString = $map['ConnectionString'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
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
        if (isset($map['DBInstanceCpuCores'])) {
            $model->DBInstanceCpuCores = $map['DBInstanceCpuCores'];
        }
        if (isset($map['DBInstanceMemory'])) {
            $model->DBInstanceMemory = $map['DBInstanceMemory'];
        }
        if (isset($map['DBInstanceStorage'])) {
            $model->DBInstanceStorage = $map['DBInstanceStorage'];
        }
        if (isset($map['DBInstanceDiskMBPS'])) {
            $model->DBInstanceDiskMBPS = $map['DBInstanceDiskMBPS'];
        }
        if (isset($map['HostType'])) {
            $model->hostType = $map['HostType'];
        }
        if (isset($map['DBInstanceGroupCount'])) {
            $model->DBInstanceGroupCount = $map['DBInstanceGroupCount'];
        }
        if (isset($map['DBInstanceNetType'])) {
            $model->DBInstanceNetType = $map['DBInstanceNetType'];
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
        if (isset($map['LockReason'])) {
            $model->lockReason = $map['LockReason'];
        }
        if (isset($map['ReadDelayTime'])) {
            $model->readDelayTime = $map['ReadDelayTime'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['MaintainStartTime'])) {
            $model->maintainStartTime = $map['MaintainStartTime'];
        }
        if (isset($map['MaintainEndTime'])) {
            $model->maintainEndTime = $map['MaintainEndTime'];
        }
        if (isset($map['AvailabilityValue'])) {
            $model->availabilityValue = $map['AvailabilityValue'];
        }
        if (isset($map['MaxConnections'])) {
            $model->maxConnections = $map['MaxConnections'];
        }
        if (isset($map['SecurityIPList'])) {
            $model->securityIPList = $map['SecurityIPList'];
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
        if (isset($map['CpuCoresPerNode'])) {
            $model->cpuCoresPerNode = $map['CpuCoresPerNode'];
        }
        if (isset($map['SegmentCounts'])) {
            $model->segmentCounts = $map['SegmentCounts'];
        }
        if (isset($map['StoragePerNode'])) {
            $model->storagePerNode = $map['StoragePerNode'];
        }
        if (isset($map['MemoryPerNode'])) {
            $model->memoryPerNode = $map['MemoryPerNode'];
        }
        if (isset($map['StorageUnit'])) {
            $model->storageUnit = $map['StorageUnit'];
        }
        if (isset($map['MemoryUnit'])) {
            $model->memoryUnit = $map['MemoryUnit'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }

        return $model;
    }
}
