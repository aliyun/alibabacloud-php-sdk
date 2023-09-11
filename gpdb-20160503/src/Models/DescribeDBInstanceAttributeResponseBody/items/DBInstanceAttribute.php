<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceAttributeResponseBody\items;

use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceAttributeResponseBody\items\DBInstanceAttribute\tags;
use AlibabaCloud\Tea\Model;

class DBInstanceAttribute extends Model
{
    /**
     * @description The service availability of the instance. Unit: %.
     *
     * > This parameter is returned only for instances in reserved storage mode.
     * @example 100.0%
     *
     * @var string
     */
    public $availabilityValue;

    /**
     * @description The access mode of the instance. Valid values:
     *
     *   **Performance**: standard mode.
     *   **Safety**: safe mode.
     *   **LVS**: Linux Virtual Server (LVS) mode.
     *
     * @example LVS
     *
     * @var string
     */
    public $connectionMode;

    /**
     * @description The endpoint that is used to connect to the instance.
     *
     * @example gp-bp13ue79qk8y1****-master.gpdb.rds.aliyuncs.com
     *
     * @var string
     */
    public $connectionString;

    /**
     * @description The number of the minor version.
     *
     * @example mm.v6.3.10.1-202207141918
     *
     * @var string
     */
    public $coreVersion;

    /**
     * @description The number of CPU cores per compute node.
     *
     * @example 2
     *
     * @var int
     */
    public $cpuCores;

    /**
     * @description The number of CPU cores per node.
     *
     * > This parameter is returned only for instances in reserved storage mode.
     * @example 0
     *
     * @var int
     */
    public $cpuCoresPerNode;

    /**
     * @description The time when the instance was created.
     *
     * @example 2022-08-11T09:16:26Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The edition of the instance. Valid values:
     *
     *   **Basic**: Basic Edition.
     *   **HighAvailability**: High-availability Edition.
     *
     * @example HighAvailability
     *
     * @var string
     */
    public $DBInstanceCategory;

    /**
     * @description The instance type of the instance.
     *
     * > This parameter is returned only for instances in reserved storage mode.
     * @example gpdb.group.segsdx1
     *
     * @var string
     */
    public $DBInstanceClass;

    /**
     * @description The instance family of the instance. Valid values:
     *
     *   **s**: shared.
     *   **x**: general-purpose.
     *   **d**: dedicated.
     *   **h**: dedicated host.
     *
     * @example x
     *
     * @var string
     */
    public $DBInstanceClassType;

    /**
     * @description The number of CPU cores.
     *
     * @example 2
     *
     * @var int
     */
    public $DBInstanceCpuCores;

    /**
     * @description The description of the instance.
     *
     * @example gp-bp13ue79qk8y1****
     *
     * @var string
     */
    public $DBInstanceDescription;

    /**
     * @description The maximum disk throughput of the compute group. Unit: Mbit/s.
     *
     * > This parameter is returned only for instances in reserved storage mode.
     * @example 0
     *
     * @var int
     */
    public $DBInstanceDiskMBPS;

    /**
     * @description The number of compute groups.
     *
     * > This parameter is returned only for instances in reserved storage mode.
     * @example 0
     *
     * @var string
     */
    public $DBInstanceGroupCount;

    /**
     * @description The instance ID.
     *
     * @example gp-bp13ue79qk8y1****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The memory capacity per compute node.
     *
     * > The unit of this parameter is MB for instances in reserved storage mode and GB for instances in Serverless or elastic storage mode.
     * @example 16
     *
     * @var int
     */
    public $DBInstanceMemory;

    /**
     * @description The resource type of the instance. Valid values:
     *
     *   **Serverless**: Serverless mode.
     *   **StorageElastic**: elastic storage mode.
     *   **Classic**: reserved storage mode.
     *
     * @example StorageElastic
     *
     * @var string
     */
    public $DBInstanceMode;

    /**
     * @description The type of the network interface card (NIC) that is used by the instance. Valid values:
     *
     *   **0**: Internet.
     *   **1**: internal network.
     *   **2**: VPC.
     *
     * @example 2
     *
     * @var string
     */
    public $DBInstanceNetType;

    /**
     * @description The state of the instance. For more information, see the "Additional description of DBInstanceStatus" section of this topic.
     *
     * @example Running
     *
     * @var string
     */
    public $DBInstanceStatus;

    /**
     * @description The maximum storage capacity per node. Unit: GB.
     *
     * @example 50
     *
     * @var int
     */
    public $DBInstanceStorage;

    /**
     * @description The encryption key.
     *
     * > This parameter is returned only for instances that have disk encryption enabled.
     * @example 0d2470df-da7b-4786-b981-************
     *
     * @var string
     */
    public $encryptionKey;

    /**
     * @description The encryption type. Valid values:
     *
     *   **CloudDisk**: disk encryption.
     *
     * > This parameter is returned only for instances that have disk encryption enabled.
     * @example CloudDisk
     *
     * @var string
     */
    public $encryptionType;

    /**
     * @description The database engine of the instance.
     *
     * @example gpdb
     *
     * @var string
     */
    public $engine;

    /**
     * @description The version of the database engine.
     *
     * @example 6.0
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @description The expiration time of the instance. The time is displayed in UTC.
     *
     * > The expiration time of a pay-as-you-go instance is `2999-09-08T16:00:00Z`.
     * @example 2999-09-08T16:00:00Z
     *
     * @var string
     */
    public $expireTime;

    /**
     * @description The disk type of the compute group. Valid values:
     *
     *   **0**: SSD.
     *   **1**: HDD.
     *
     * > This parameter is returned only for instances in reserved storage mode.
     * @example 0
     *
     * @var string
     */
    public $hostType;

    /**
     * @description The wait period for the instance that has no traffic to become idle. Unit: seconds.
     *
     * > This parameter is returned only for instances in Serverless automatic scheduling mode.
     * @example 600
     *
     * @var int
     */
    public $idleTime;

    /**
     * @description The network type of the instance. Valid values:
     *
     *   **Classic**: classic network.
     *   **VPC**: VPC.
     *
     * @example VPC
     *
     * @var string
     */
    public $instanceNetworkType;

    /**
     * @description The lock mode of the instance. Valid values:
     *
     *   **Unlock**: The instance is not locked.
     *   **ManualLock**: The instance is manually locked.
     *   **LockByExpiration**: The instance is automatically locked due to instance expiration.
     *   **LockByRestoration**: The instance is automatically locked due to instance restoration.
     *   **LockByDiskQuota**: The instance is automatically locked due to exhausted storage.
     *
     * @example Unlock
     *
     * @var string
     */
    public $lockMode;

    /**
     * @description An invalid parameter. It is no longer returned when you call this operation.
     *
     * @example null
     *
     * @var string
     */
    public $lockReason;

    /**
     * @description The end time of the maintenance window of the instance.
     *
     * @example 22:00Z
     *
     * @var string
     */
    public $maintainEndTime;

    /**
     * @description The start time of the maintenance window of the instance.
     *
     * @example 18:00Z
     *
     * @var string
     */
    public $maintainStartTime;

    /**
     * @var int
     */
    public $masterCU;

    /**
     * @description The number of coordinator nodes.
     *
     * @example 1
     *
     * @var int
     */
    public $masterNodeNum;

    /**
     * @description The maximum number of concurrent connections to the instance.
     *
     * > This parameter is returned only for instances in reserved storage mode.
     * @example 500
     *
     * @var int
     */
    public $maxConnections;

    /**
     * @description The memory capacity per node. The unit of this parameter can be one of the valid values of **MemoryUnit**.
     *
     * > This parameter is returned only for instances in reserved storage mode.
     * @example 0
     *
     * @var int
     */
    public $memoryPerNode;

    /**
     * @description The memory capacity per compute node.
     *
     * > The unit of this parameter is MB for instances in reserved storage mode and GB for instances in Serverless or elastic storage mode.
     * @example 16
     *
     * @var int
     */
    public $memorySize;

    /**
     * @description The unit of the memory capacity.
     *
     * > This parameter is returned only for instances in reserved storage mode.
     * @example GB
     *
     * @var string
     */
    public $memoryUnit;

    /**
     * @description The minor version of the instance.
     *
     * @example 6.3.10.1-202207141918
     *
     * @var string
     */
    public $minorVersion;

    /**
     * @description The billing method of the instance. Valid values:
     *
     *   **Postpaid**: pay-as-you-go.
     *   **Prepaid**: subscription.
     *
     * @example Postpaid
     *
     * @var string
     */
    public $payType;

    /**
     * @description The port number that is used to connect to the instance.
     *
     * @example 5432
     *
     * @var string
     */
    public $port;

    /**
     * @description An invalid parameter. It is no longer returned when you call this operation.
     *
     * @example null
     *
     * @var string
     */
    public $readDelayTime;

    /**
     * @description The region ID of the instance.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which the instance belongs.
     *
     * @example rg-bp67acfmxazb4p****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The running duration of the instance.
     *
     * @example 4 days 22:58:55
     *
     * @var string
     */
    public $runningTime;

    /**
     * @description The IP address whitelist of the instance.
     *
     * @example 127.0.0.1
     *
     * @var string
     */
    public $securityIPList;

    /**
     * @description The performance level of ESSDs. Only **PL1** is supported.
     *
     * @example PL1
     *
     * @var string
     */
    public $segDiskPerformanceLevel;

    /**
     * @description The number of compute nodes.
     *
     * > This parameter is returned only for instances in Serverless or elastic storage mode.
     * @example 4
     *
     * @var int
     */
    public $segNodeNum;

    /**
     * @description The number of compute groups.
     *
     * > This parameter is returned only for instances in reserved storage mode.
     * @example 0
     *
     * @var int
     */
    public $segmentCounts;

    /**
     * @description The type of the Serverless mode. Valid values:
     *
     *   **Manual**: manual scheduling.
     *   **Auto**: automatic scheduling.
     *
     * > This parameter is returned only for instances in Serverless mode.
     * @example Auto
     *
     * @var string
     */
    public $serverlessMode;

    /**
     * @description The threshold of computing resources. Unit: AnalyticDB compute units (ACUs).
     *
     * > This parameter is returned only for instances in Serverless automatic scheduling mode.
     * @example 32
     *
     * @var int
     */
    public $serverlessResource;

    /**
     * @description The time when the instance started to run.
     *
     * @example 2022-08-11T09:26:43Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The storage capacity per node. The unit of this parameter can be one of the valid values of **StorageUnit**.
     *
     * > This parameter is returned only for instances in reserved storage mode.
     * @example 0
     *
     * @var int
     */
    public $storagePerNode;

    /**
     * @description The storage capacity of the instance. Unit: GB.
     *
     * @example 50
     *
     * @var int
     */
    public $storageSize;

    /**
     * @description The storage type of the instance. Valid values:
     *
     *   **cloud_essd**: enhanced SSD (ESSD).
     *   **cloud_efficiency**: ultra disk.
     *
     * > This parameter is returned only for instances in elastic storage mode.
     * @example cloud_essd
     *
     * @var string
     */
    public $storageType;

    /**
     * @description The unit of the storage capacity. Valid values:
     *
     *   **GB SSD**
     *   **TB SSD**
     *   **GB HDD**
     *
     * > This parameter is returned only for instances in Serverless or reserved storage mode.
     * @example GB SSD
     *
     * @var string
     */
    public $storageUnit;

    /**
     * @description Indicates whether the instance supports backup and restoration. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $supportRestore;

    /**
     * @description The tags of the instance. Each tag is a key-value pair.
     *
     * @var tags
     */
    public $tags;

    /**
     * @description The vSwitch ID of the instance.
     *
     * @example vsw-bp1cpq8mr64paltkb****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description Indicates whether vector engine optimization is enabled. Valid values:
     *
     *   **enabled**
     *   **disabled**
     *
     * @example enabled
     *
     * @var string
     */
    public $vectorConfigurationStatus;

    /**
     * @description The virtual private cloud (VPC) ID of the instance.
     *
     * @example vpc-bp19ame5m1r3oejns****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The zone ID of the instance.
     *
     * @example cn-hangzhou-j
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'availabilityValue'         => 'AvailabilityValue',
        'connectionMode'            => 'ConnectionMode',
        'connectionString'          => 'ConnectionString',
        'coreVersion'               => 'CoreVersion',
        'cpuCores'                  => 'CpuCores',
        'cpuCoresPerNode'           => 'CpuCoresPerNode',
        'creationTime'              => 'CreationTime',
        'DBInstanceCategory'        => 'DBInstanceCategory',
        'DBInstanceClass'           => 'DBInstanceClass',
        'DBInstanceClassType'       => 'DBInstanceClassType',
        'DBInstanceCpuCores'        => 'DBInstanceCpuCores',
        'DBInstanceDescription'     => 'DBInstanceDescription',
        'DBInstanceDiskMBPS'        => 'DBInstanceDiskMBPS',
        'DBInstanceGroupCount'      => 'DBInstanceGroupCount',
        'DBInstanceId'              => 'DBInstanceId',
        'DBInstanceMemory'          => 'DBInstanceMemory',
        'DBInstanceMode'            => 'DBInstanceMode',
        'DBInstanceNetType'         => 'DBInstanceNetType',
        'DBInstanceStatus'          => 'DBInstanceStatus',
        'DBInstanceStorage'         => 'DBInstanceStorage',
        'encryptionKey'             => 'EncryptionKey',
        'encryptionType'            => 'EncryptionType',
        'engine'                    => 'Engine',
        'engineVersion'             => 'EngineVersion',
        'expireTime'                => 'ExpireTime',
        'hostType'                  => 'HostType',
        'idleTime'                  => 'IdleTime',
        'instanceNetworkType'       => 'InstanceNetworkType',
        'lockMode'                  => 'LockMode',
        'lockReason'                => 'LockReason',
        'maintainEndTime'           => 'MaintainEndTime',
        'maintainStartTime'         => 'MaintainStartTime',
        'masterCU'                  => 'MasterCU',
        'masterNodeNum'             => 'MasterNodeNum',
        'maxConnections'            => 'MaxConnections',
        'memoryPerNode'             => 'MemoryPerNode',
        'memorySize'                => 'MemorySize',
        'memoryUnit'                => 'MemoryUnit',
        'minorVersion'              => 'MinorVersion',
        'payType'                   => 'PayType',
        'port'                      => 'Port',
        'readDelayTime'             => 'ReadDelayTime',
        'regionId'                  => 'RegionId',
        'resourceGroupId'           => 'ResourceGroupId',
        'runningTime'               => 'RunningTime',
        'securityIPList'            => 'SecurityIPList',
        'segDiskPerformanceLevel'   => 'SegDiskPerformanceLevel',
        'segNodeNum'                => 'SegNodeNum',
        'segmentCounts'             => 'SegmentCounts',
        'serverlessMode'            => 'ServerlessMode',
        'serverlessResource'        => 'ServerlessResource',
        'startTime'                 => 'StartTime',
        'storagePerNode'            => 'StoragePerNode',
        'storageSize'               => 'StorageSize',
        'storageType'               => 'StorageType',
        'storageUnit'               => 'StorageUnit',
        'supportRestore'            => 'SupportRestore',
        'tags'                      => 'Tags',
        'vSwitchId'                 => 'VSwitchId',
        'vectorConfigurationStatus' => 'VectorConfigurationStatus',
        'vpcId'                     => 'VpcId',
        'zoneId'                    => 'ZoneId',
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
        if (null !== $this->masterCU) {
            $res['MasterCU'] = $this->masterCU;
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
        if (null !== $this->segDiskPerformanceLevel) {
            $res['SegDiskPerformanceLevel'] = $this->segDiskPerformanceLevel;
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
        if (null !== $this->vectorConfigurationStatus) {
            $res['VectorConfigurationStatus'] = $this->vectorConfigurationStatus;
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
        if (isset($map['MasterCU'])) {
            $model->masterCU = $map['MasterCU'];
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
        if (isset($map['SegDiskPerformanceLevel'])) {
            $model->segDiskPerformanceLevel = $map['SegDiskPerformanceLevel'];
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
        if (isset($map['VectorConfigurationStatus'])) {
            $model->vectorConfigurationStatus = $map['VectorConfigurationStatus'];
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
