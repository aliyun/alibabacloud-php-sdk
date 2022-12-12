<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceAttributeResponseBody\items;

use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceAttributeResponseBody\items\DBInstanceAttribute\tags;
use AlibabaCloud\Tea\Model;

class DBInstanceAttribute extends Model
{
    /**
     * @example 100.0%
     *
     * @var string
     */
    public $availabilityValue;

    /**
     * @example LVS
     *
     * @var string
     */
    public $connectionMode;

    /**
     * @example gp-bp13ue79qk8y1****-master.gpdb.rds.aliyuncs.com
     *
     * @var string
     */
    public $connectionString;

    /**
     * @example mm.v6.3.10.1-202207141918
     *
     * @var string
     */
    public $coreVersion;

    /**
     * @example 2
     *
     * @var int
     */
    public $cpuCores;

    /**
     * @example 0
     *
     * @var int
     */
    public $cpuCoresPerNode;

    /**
     * @example 2022-08-11T09:16:26Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @example HighAvailability
     *
     * @var string
     */
    public $DBInstanceCategory;

    /**
     * @example gpdb.group.segsdx1
     *
     * @var string
     */
    public $DBInstanceClass;

    /**
     * @example x
     *
     * @var string
     */
    public $DBInstanceClassType;

    /**
     * @example 2
     *
     * @var int
     */
    public $DBInstanceCpuCores;

    /**
     * @example gp-bp13ue79qk8y1****
     *
     * @var string
     */
    public $DBInstanceDescription;

    /**
     * @example 0
     *
     * @var int
     */
    public $DBInstanceDiskMBPS;

    /**
     * @example 0
     *
     * @var string
     */
    public $DBInstanceGroupCount;

    /**
     * @example gp-bp13ue79qk8y1****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @example 16
     *
     * @var int
     */
    public $DBInstanceMemory;

    /**
     * @example StorageElastic
     *
     * @var string
     */
    public $DBInstanceMode;

    /**
     * @example 2
     *
     * @var string
     */
    public $DBInstanceNetType;

    /**
     * @example Running
     *
     * @var string
     */
    public $DBInstanceStatus;

    /**
     * @example 50
     *
     * @var int
     */
    public $DBInstanceStorage;

    /**
     * @example 0d2470df-da7b-4786-b981-************
     *
     * @var string
     */
    public $encryptionKey;

    /**
     * @example CloudDisk
     *
     * @var string
     */
    public $encryptionType;

    /**
     * @example gpdb
     *
     * @var string
     */
    public $engine;

    /**
     * @example 6.0
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @example 2999-09-08T16:00:00Z
     *
     * @var string
     */
    public $expireTime;

    /**
     * @example 0
     *
     * @var string
     */
    public $hostType;

    /**
     * @var int
     */
    public $idleTime;

    /**
     * @example VPC
     *
     * @var string
     */
    public $instanceNetworkType;

    /**
     * @example Unlock
     *
     * @var string
     */
    public $lockMode;

    /**
     * @example null
     *
     * @var string
     */
    public $lockReason;

    /**
     * @example 22:00Z
     *
     * @var string
     */
    public $maintainEndTime;

    /**
     * @example 18:00Z
     *
     * @var string
     */
    public $maintainStartTime;

    /**
     * @example 1
     *
     * @var int
     */
    public $masterNodeNum;

    /**
     * @example 500
     *
     * @var int
     */
    public $maxConnections;

    /**
     * @example 0
     *
     * @var int
     */
    public $memoryPerNode;

    /**
     * @example 16
     *
     * @var int
     */
    public $memorySize;

    /**
     * @example GB
     *
     * @var string
     */
    public $memoryUnit;

    /**
     * @example 6.3.10.1-202207141918
     *
     * @var string
     */
    public $minorVersion;

    /**
     * @example Postpaid
     *
     * @var string
     */
    public $payType;

    /**
     * @example 5432
     *
     * @var string
     */
    public $port;

    /**
     * @example null
     *
     * @var string
     */
    public $readDelayTime;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example rg-bp67acfmxazb4p****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example 4 days 22:58:55
     *
     * @var string
     */
    public $runningTime;

    /**
     * @example 127.0.0.1
     *
     * @var string
     */
    public $securityIPList;

    /**
     * @example 4
     *
     * @var int
     */
    public $segNodeNum;

    /**
     * @example 0
     *
     * @var int
     */
    public $segmentCounts;

    /**
     * @var string
     */
    public $serverlessMode;

    /**
     * @var int
     */
    public $serverlessResource;

    /**
     * @example 2022-08-11T09:26:43Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @example 0
     *
     * @var int
     */
    public $storagePerNode;

    /**
     * @example 50
     *
     * @var int
     */
    public $storageSize;

    /**
     * @example cloud_essd
     *
     * @var string
     */
    public $storageType;

    /**
     * @example GB SSD
     *
     * @var string
     */
    public $storageUnit;

    /**
     * @example true
     *
     * @var bool
     */
    public $supportRestore;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @description vSwitch ID。
     *
     * @example vsw-bp1cpq8mr64paltkb****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description VPC ID。
     *
     * @example vpc-bp19ame5m1r3oejns****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @example cn-hangzhou-j
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'availabilityValue'     => 'AvailabilityValue',
        'connectionMode'        => 'ConnectionMode',
        'connectionString'      => 'ConnectionString',
        'coreVersion'           => 'CoreVersion',
        'cpuCores'              => 'CpuCores',
        'cpuCoresPerNode'       => 'CpuCoresPerNode',
        'creationTime'          => 'CreationTime',
        'DBInstanceCategory'    => 'DBInstanceCategory',
        'DBInstanceClass'       => 'DBInstanceClass',
        'DBInstanceClassType'   => 'DBInstanceClassType',
        'DBInstanceCpuCores'    => 'DBInstanceCpuCores',
        'DBInstanceDescription' => 'DBInstanceDescription',
        'DBInstanceDiskMBPS'    => 'DBInstanceDiskMBPS',
        'DBInstanceGroupCount'  => 'DBInstanceGroupCount',
        'DBInstanceId'          => 'DBInstanceId',
        'DBInstanceMemory'      => 'DBInstanceMemory',
        'DBInstanceMode'        => 'DBInstanceMode',
        'DBInstanceNetType'     => 'DBInstanceNetType',
        'DBInstanceStatus'      => 'DBInstanceStatus',
        'DBInstanceStorage'     => 'DBInstanceStorage',
        'encryptionKey'         => 'EncryptionKey',
        'encryptionType'        => 'EncryptionType',
        'engine'                => 'Engine',
        'engineVersion'         => 'EngineVersion',
        'expireTime'            => 'ExpireTime',
        'hostType'              => 'HostType',
        'idleTime'              => 'IdleTime',
        'instanceNetworkType'   => 'InstanceNetworkType',
        'lockMode'              => 'LockMode',
        'lockReason'            => 'LockReason',
        'maintainEndTime'       => 'MaintainEndTime',
        'maintainStartTime'     => 'MaintainStartTime',
        'masterNodeNum'         => 'MasterNodeNum',
        'maxConnections'        => 'MaxConnections',
        'memoryPerNode'         => 'MemoryPerNode',
        'memorySize'            => 'MemorySize',
        'memoryUnit'            => 'MemoryUnit',
        'minorVersion'          => 'MinorVersion',
        'payType'               => 'PayType',
        'port'                  => 'Port',
        'readDelayTime'         => 'ReadDelayTime',
        'regionId'              => 'RegionId',
        'resourceGroupId'       => 'ResourceGroupId',
        'runningTime'           => 'RunningTime',
        'securityIPList'        => 'SecurityIPList',
        'segNodeNum'            => 'SegNodeNum',
        'segmentCounts'         => 'SegmentCounts',
        'serverlessMode'        => 'ServerlessMode',
        'serverlessResource'    => 'ServerlessResource',
        'startTime'             => 'StartTime',
        'storagePerNode'        => 'StoragePerNode',
        'storageSize'           => 'StorageSize',
        'storageType'           => 'StorageType',
        'storageUnit'           => 'StorageUnit',
        'supportRestore'        => 'SupportRestore',
        'tags'                  => 'Tags',
        'vSwitchId'             => 'VSwitchId',
        'vpcId'                 => 'VpcId',
        'zoneId'                => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->availabilityValue) {
            $res['AvailabilityValue'] = $this->availabilityValue;
        }
        if (null !== $this->connectionMode) {
            $res['ConnectionMode'] = $this->connectionMode;
        }
        if (null !== $this->connectionString) {
            $res['ConnectionString'] = $this->connectionString;
        }
        if (null !== $this->coreVersion) {
            $res['CoreVersion'] = $this->coreVersion;
        }
        if (null !== $this->cpuCores) {
            $res['CpuCores'] = $this->cpuCores;
        }
        if (null !== $this->cpuCoresPerNode) {
            $res['CpuCoresPerNode'] = $this->cpuCoresPerNode;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->DBInstanceCategory) {
            $res['DBInstanceCategory'] = $this->DBInstanceCategory;
        }
        if (null !== $this->DBInstanceClass) {
            $res['DBInstanceClass'] = $this->DBInstanceClass;
        }
        if (null !== $this->DBInstanceClassType) {
            $res['DBInstanceClassType'] = $this->DBInstanceClassType;
        }
        if (null !== $this->DBInstanceCpuCores) {
            $res['DBInstanceCpuCores'] = $this->DBInstanceCpuCores;
        }
        if (null !== $this->DBInstanceDescription) {
            $res['DBInstanceDescription'] = $this->DBInstanceDescription;
        }
        if (null !== $this->DBInstanceDiskMBPS) {
            $res['DBInstanceDiskMBPS'] = $this->DBInstanceDiskMBPS;
        }
        if (null !== $this->DBInstanceGroupCount) {
            $res['DBInstanceGroupCount'] = $this->DBInstanceGroupCount;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->DBInstanceMemory) {
            $res['DBInstanceMemory'] = $this->DBInstanceMemory;
        }
        if (null !== $this->DBInstanceMode) {
            $res['DBInstanceMode'] = $this->DBInstanceMode;
        }
        if (null !== $this->DBInstanceNetType) {
            $res['DBInstanceNetType'] = $this->DBInstanceNetType;
        }
        if (null !== $this->DBInstanceStatus) {
            $res['DBInstanceStatus'] = $this->DBInstanceStatus;
        }
        if (null !== $this->DBInstanceStorage) {
            $res['DBInstanceStorage'] = $this->DBInstanceStorage;
        }
        if (null !== $this->encryptionKey) {
            $res['EncryptionKey'] = $this->encryptionKey;
        }
        if (null !== $this->encryptionType) {
            $res['EncryptionType'] = $this->encryptionType;
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
        if (null !== $this->hostType) {
            $res['HostType'] = $this->hostType;
        }
        if (null !== $this->idleTime) {
            $res['IdleTime'] = $this->idleTime;
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
        if (null !== $this->maintainEndTime) {
            $res['MaintainEndTime'] = $this->maintainEndTime;
        }
        if (null !== $this->maintainStartTime) {
            $res['MaintainStartTime'] = $this->maintainStartTime;
        }
        if (null !== $this->masterNodeNum) {
            $res['MasterNodeNum'] = $this->masterNodeNum;
        }
        if (null !== $this->maxConnections) {
            $res['MaxConnections'] = $this->maxConnections;
        }
        if (null !== $this->memoryPerNode) {
            $res['MemoryPerNode'] = $this->memoryPerNode;
        }
        if (null !== $this->memorySize) {
            $res['MemorySize'] = $this->memorySize;
        }
        if (null !== $this->memoryUnit) {
            $res['MemoryUnit'] = $this->memoryUnit;
        }
        if (null !== $this->minorVersion) {
            $res['MinorVersion'] = $this->minorVersion;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->readDelayTime) {
            $res['ReadDelayTime'] = $this->readDelayTime;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->runningTime) {
            $res['RunningTime'] = $this->runningTime;
        }
        if (null !== $this->securityIPList) {
            $res['SecurityIPList'] = $this->securityIPList;
        }
        if (null !== $this->segNodeNum) {
            $res['SegNodeNum'] = $this->segNodeNum;
        }
        if (null !== $this->segmentCounts) {
            $res['SegmentCounts'] = $this->segmentCounts;
        }
        if (null !== $this->serverlessMode) {
            $res['ServerlessMode'] = $this->serverlessMode;
        }
        if (null !== $this->serverlessResource) {
            $res['ServerlessResource'] = $this->serverlessResource;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->storagePerNode) {
            $res['StoragePerNode'] = $this->storagePerNode;
        }
        if (null !== $this->storageSize) {
            $res['StorageSize'] = $this->storageSize;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }
        if (null !== $this->storageUnit) {
            $res['StorageUnit'] = $this->storageUnit;
        }
        if (null !== $this->supportRestore) {
            $res['SupportRestore'] = $this->supportRestore;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
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
     * @return DBInstanceAttribute
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvailabilityValue'])) {
            $model->availabilityValue = $map['AvailabilityValue'];
        }
        if (isset($map['ConnectionMode'])) {
            $model->connectionMode = $map['ConnectionMode'];
        }
        if (isset($map['ConnectionString'])) {
            $model->connectionString = $map['ConnectionString'];
        }
        if (isset($map['CoreVersion'])) {
            $model->coreVersion = $map['CoreVersion'];
        }
        if (isset($map['CpuCores'])) {
            $model->cpuCores = $map['CpuCores'];
        }
        if (isset($map['CpuCoresPerNode'])) {
            $model->cpuCoresPerNode = $map['CpuCoresPerNode'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['DBInstanceCategory'])) {
            $model->DBInstanceCategory = $map['DBInstanceCategory'];
        }
        if (isset($map['DBInstanceClass'])) {
            $model->DBInstanceClass = $map['DBInstanceClass'];
        }
        if (isset($map['DBInstanceClassType'])) {
            $model->DBInstanceClassType = $map['DBInstanceClassType'];
        }
        if (isset($map['DBInstanceCpuCores'])) {
            $model->DBInstanceCpuCores = $map['DBInstanceCpuCores'];
        }
        if (isset($map['DBInstanceDescription'])) {
            $model->DBInstanceDescription = $map['DBInstanceDescription'];
        }
        if (isset($map['DBInstanceDiskMBPS'])) {
            $model->DBInstanceDiskMBPS = $map['DBInstanceDiskMBPS'];
        }
        if (isset($map['DBInstanceGroupCount'])) {
            $model->DBInstanceGroupCount = $map['DBInstanceGroupCount'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DBInstanceMemory'])) {
            $model->DBInstanceMemory = $map['DBInstanceMemory'];
        }
        if (isset($map['DBInstanceMode'])) {
            $model->DBInstanceMode = $map['DBInstanceMode'];
        }
        if (isset($map['DBInstanceNetType'])) {
            $model->DBInstanceNetType = $map['DBInstanceNetType'];
        }
        if (isset($map['DBInstanceStatus'])) {
            $model->DBInstanceStatus = $map['DBInstanceStatus'];
        }
        if (isset($map['DBInstanceStorage'])) {
            $model->DBInstanceStorage = $map['DBInstanceStorage'];
        }
        if (isset($map['EncryptionKey'])) {
            $model->encryptionKey = $map['EncryptionKey'];
        }
        if (isset($map['EncryptionType'])) {
            $model->encryptionType = $map['EncryptionType'];
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
        if (isset($map['HostType'])) {
            $model->hostType = $map['HostType'];
        }
        if (isset($map['IdleTime'])) {
            $model->idleTime = $map['IdleTime'];
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
        if (isset($map['MaintainEndTime'])) {
            $model->maintainEndTime = $map['MaintainEndTime'];
        }
        if (isset($map['MaintainStartTime'])) {
            $model->maintainStartTime = $map['MaintainStartTime'];
        }
        if (isset($map['MasterNodeNum'])) {
            $model->masterNodeNum = $map['MasterNodeNum'];
        }
        if (isset($map['MaxConnections'])) {
            $model->maxConnections = $map['MaxConnections'];
        }
        if (isset($map['MemoryPerNode'])) {
            $model->memoryPerNode = $map['MemoryPerNode'];
        }
        if (isset($map['MemorySize'])) {
            $model->memorySize = $map['MemorySize'];
        }
        if (isset($map['MemoryUnit'])) {
            $model->memoryUnit = $map['MemoryUnit'];
        }
        if (isset($map['MinorVersion'])) {
            $model->minorVersion = $map['MinorVersion'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['ReadDelayTime'])) {
            $model->readDelayTime = $map['ReadDelayTime'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['RunningTime'])) {
            $model->runningTime = $map['RunningTime'];
        }
        if (isset($map['SecurityIPList'])) {
            $model->securityIPList = $map['SecurityIPList'];
        }
        if (isset($map['SegNodeNum'])) {
            $model->segNodeNum = $map['SegNodeNum'];
        }
        if (isset($map['SegmentCounts'])) {
            $model->segmentCounts = $map['SegmentCounts'];
        }
        if (isset($map['ServerlessMode'])) {
            $model->serverlessMode = $map['ServerlessMode'];
        }
        if (isset($map['ServerlessResource'])) {
            $model->serverlessResource = $map['ServerlessResource'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['StoragePerNode'])) {
            $model->storagePerNode = $map['StoragePerNode'];
        }
        if (isset($map['StorageSize'])) {
            $model->storageSize = $map['StorageSize'];
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }
        if (isset($map['StorageUnit'])) {
            $model->storageUnit = $map['StorageUnit'];
        }
        if (isset($map['SupportRestore'])) {
            $model->supportRestore = $map['SupportRestore'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
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
