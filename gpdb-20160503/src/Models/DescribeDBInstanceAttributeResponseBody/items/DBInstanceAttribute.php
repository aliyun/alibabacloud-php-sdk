<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceAttributeResponseBody\items;

use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceAttributeResponseBody\items\DBInstanceAttribute\tags;
use AlibabaCloud\Tea\Model;

class DBInstanceAttribute extends Model
{
    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var int
     */
    public $DBInstanceCpuCores;

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
    public $DBInstanceMemory;

    /**
     * @var string
     */
    public $hostType;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $storageType;

    /**
     * @var int
     */
    public $cpuCoresPerNode;

    /**
     * @var string
     */
    public $availabilityValue;

    /**
     * @var string
     */
    public $readDelayTime;

    /**
     * @var string
     */
    public $connectionMode;

    /**
     * @var string
     */
    public $port;

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
    public $storageUnit;

    /**
     * @var int
     */
    public $memoryPerNode;

    /**
     * @var string
     */
    public $connectionString;

    /**
     * @var string
     */
    public $instanceNetworkType;

    /**
     * @var string
     */
    public $securityIPList;

    /**
     * @var string
     */
    public $memoryUnit;

    /**
     * @var string
     */
    public $DBInstanceClassType;

    /**
     * @var string
     */
    public $DBInstanceDescription;

    /**
     * @var string
     */
    public $DBInstanceGroupCount;

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
    public $maintainStartTime;

    /**
     * @var string
     */
    public $maintainEndTime;

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
    public $regionId;

    /**
     * @var int
     */
    public $DBInstanceDiskMBPS;

    /**
     * @var int
     */
    public $DBInstanceStorage;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var int
     */
    public $maxConnections;

    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $DBInstanceClass;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var tags
     */
    public $tags;
    protected $_name = [
        'vpcId'                 => 'VpcId',
        'creationTime'          => 'CreationTime',
        'DBInstanceCpuCores'    => 'DBInstanceCpuCores',
        'segmentCounts'         => 'SegmentCounts',
        'storagePerNode'        => 'StoragePerNode',
        'DBInstanceMemory'      => 'DBInstanceMemory',
        'hostType'              => 'HostType',
        'payType'               => 'PayType',
        'storageType'           => 'StorageType',
        'cpuCoresPerNode'       => 'CpuCoresPerNode',
        'availabilityValue'     => 'AvailabilityValue',
        'readDelayTime'         => 'ReadDelayTime',
        'connectionMode'        => 'ConnectionMode',
        'port'                  => 'Port',
        'lockMode'              => 'LockMode',
        'engineVersion'         => 'EngineVersion',
        'storageUnit'           => 'StorageUnit',
        'memoryPerNode'         => 'MemoryPerNode',
        'connectionString'      => 'ConnectionString',
        'instanceNetworkType'   => 'InstanceNetworkType',
        'securityIPList'        => 'SecurityIPList',
        'memoryUnit'            => 'MemoryUnit',
        'DBInstanceClassType'   => 'DBInstanceClassType',
        'DBInstanceDescription' => 'DBInstanceDescription',
        'DBInstanceGroupCount'  => 'DBInstanceGroupCount',
        'expireTime'            => 'ExpireTime',
        'DBInstanceNetType'     => 'DBInstanceNetType',
        'maintainStartTime'     => 'MaintainStartTime',
        'maintainEndTime'       => 'MaintainEndTime',
        'lockReason'            => 'LockReason',
        'DBInstanceStatus'      => 'DBInstanceStatus',
        'regionId'              => 'RegionId',
        'DBInstanceDiskMBPS'    => 'DBInstanceDiskMBPS',
        'DBInstanceStorage'     => 'DBInstanceStorage',
        'zoneId'                => 'ZoneId',
        'maxConnections'        => 'MaxConnections',
        'DBInstanceId'          => 'DBInstanceId',
        'DBInstanceClass'       => 'DBInstanceClass',
        'engine'                => 'Engine',
        'tags'                  => 'Tags',
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
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->DBInstanceCpuCores) {
            $res['DBInstanceCpuCores'] = $this->DBInstanceCpuCores;
        }
        if (null !== $this->segmentCounts) {
            $res['SegmentCounts'] = $this->segmentCounts;
        }
        if (null !== $this->storagePerNode) {
            $res['StoragePerNode'] = $this->storagePerNode;
        }
        if (null !== $this->DBInstanceMemory) {
            $res['DBInstanceMemory'] = $this->DBInstanceMemory;
        }
        if (null !== $this->hostType) {
            $res['HostType'] = $this->hostType;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }
        if (null !== $this->cpuCoresPerNode) {
            $res['CpuCoresPerNode'] = $this->cpuCoresPerNode;
        }
        if (null !== $this->availabilityValue) {
            $res['AvailabilityValue'] = $this->availabilityValue;
        }
        if (null !== $this->readDelayTime) {
            $res['ReadDelayTime'] = $this->readDelayTime;
        }
        if (null !== $this->connectionMode) {
            $res['ConnectionMode'] = $this->connectionMode;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->lockMode) {
            $res['LockMode'] = $this->lockMode;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->storageUnit) {
            $res['StorageUnit'] = $this->storageUnit;
        }
        if (null !== $this->memoryPerNode) {
            $res['MemoryPerNode'] = $this->memoryPerNode;
        }
        if (null !== $this->connectionString) {
            $res['ConnectionString'] = $this->connectionString;
        }
        if (null !== $this->instanceNetworkType) {
            $res['InstanceNetworkType'] = $this->instanceNetworkType;
        }
        if (null !== $this->securityIPList) {
            $res['SecurityIPList'] = $this->securityIPList;
        }
        if (null !== $this->memoryUnit) {
            $res['MemoryUnit'] = $this->memoryUnit;
        }
        if (null !== $this->DBInstanceClassType) {
            $res['DBInstanceClassType'] = $this->DBInstanceClassType;
        }
        if (null !== $this->DBInstanceDescription) {
            $res['DBInstanceDescription'] = $this->DBInstanceDescription;
        }
        if (null !== $this->DBInstanceGroupCount) {
            $res['DBInstanceGroupCount'] = $this->DBInstanceGroupCount;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->DBInstanceNetType) {
            $res['DBInstanceNetType'] = $this->DBInstanceNetType;
        }
        if (null !== $this->maintainStartTime) {
            $res['MaintainStartTime'] = $this->maintainStartTime;
        }
        if (null !== $this->maintainEndTime) {
            $res['MaintainEndTime'] = $this->maintainEndTime;
        }
        if (null !== $this->lockReason) {
            $res['LockReason'] = $this->lockReason;
        }
        if (null !== $this->DBInstanceStatus) {
            $res['DBInstanceStatus'] = $this->DBInstanceStatus;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->DBInstanceDiskMBPS) {
            $res['DBInstanceDiskMBPS'] = $this->DBInstanceDiskMBPS;
        }
        if (null !== $this->DBInstanceStorage) {
            $res['DBInstanceStorage'] = $this->DBInstanceStorage;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->maxConnections) {
            $res['MaxConnections'] = $this->maxConnections;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->DBInstanceClass) {
            $res['DBInstanceClass'] = $this->DBInstanceClass;
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
     * @return DBInstanceAttribute
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['DBInstanceCpuCores'])) {
            $model->DBInstanceCpuCores = $map['DBInstanceCpuCores'];
        }
        if (isset($map['SegmentCounts'])) {
            $model->segmentCounts = $map['SegmentCounts'];
        }
        if (isset($map['StoragePerNode'])) {
            $model->storagePerNode = $map['StoragePerNode'];
        }
        if (isset($map['DBInstanceMemory'])) {
            $model->DBInstanceMemory = $map['DBInstanceMemory'];
        }
        if (isset($map['HostType'])) {
            $model->hostType = $map['HostType'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }
        if (isset($map['CpuCoresPerNode'])) {
            $model->cpuCoresPerNode = $map['CpuCoresPerNode'];
        }
        if (isset($map['AvailabilityValue'])) {
            $model->availabilityValue = $map['AvailabilityValue'];
        }
        if (isset($map['ReadDelayTime'])) {
            $model->readDelayTime = $map['ReadDelayTime'];
        }
        if (isset($map['ConnectionMode'])) {
            $model->connectionMode = $map['ConnectionMode'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['LockMode'])) {
            $model->lockMode = $map['LockMode'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['StorageUnit'])) {
            $model->storageUnit = $map['StorageUnit'];
        }
        if (isset($map['MemoryPerNode'])) {
            $model->memoryPerNode = $map['MemoryPerNode'];
        }
        if (isset($map['ConnectionString'])) {
            $model->connectionString = $map['ConnectionString'];
        }
        if (isset($map['InstanceNetworkType'])) {
            $model->instanceNetworkType = $map['InstanceNetworkType'];
        }
        if (isset($map['SecurityIPList'])) {
            $model->securityIPList = $map['SecurityIPList'];
        }
        if (isset($map['MemoryUnit'])) {
            $model->memoryUnit = $map['MemoryUnit'];
        }
        if (isset($map['DBInstanceClassType'])) {
            $model->DBInstanceClassType = $map['DBInstanceClassType'];
        }
        if (isset($map['DBInstanceDescription'])) {
            $model->DBInstanceDescription = $map['DBInstanceDescription'];
        }
        if (isset($map['DBInstanceGroupCount'])) {
            $model->DBInstanceGroupCount = $map['DBInstanceGroupCount'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['DBInstanceNetType'])) {
            $model->DBInstanceNetType = $map['DBInstanceNetType'];
        }
        if (isset($map['MaintainStartTime'])) {
            $model->maintainStartTime = $map['MaintainStartTime'];
        }
        if (isset($map['MaintainEndTime'])) {
            $model->maintainEndTime = $map['MaintainEndTime'];
        }
        if (isset($map['LockReason'])) {
            $model->lockReason = $map['LockReason'];
        }
        if (isset($map['DBInstanceStatus'])) {
            $model->DBInstanceStatus = $map['DBInstanceStatus'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['DBInstanceDiskMBPS'])) {
            $model->DBInstanceDiskMBPS = $map['DBInstanceDiskMBPS'];
        }
        if (isset($map['DBInstanceStorage'])) {
            $model->DBInstanceStorage = $map['DBInstanceStorage'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['MaxConnections'])) {
            $model->maxConnections = $map['MaxConnections'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DBInstanceClass'])) {
            $model->DBInstanceClass = $map['DBInstanceClass'];
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
