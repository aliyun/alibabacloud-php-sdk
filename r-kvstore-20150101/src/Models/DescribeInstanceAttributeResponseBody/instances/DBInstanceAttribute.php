<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeInstanceAttributeResponseBody\instances;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeInstanceAttributeResponseBody\instances\DBInstanceAttribute\tags;
use AlibabaCloud\Tea\Model;

class DBInstanceAttribute extends Model
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
     * @description The retention period of audit logs. Unit: days. A value of 0 indicates that the audit log feature is disabled. For more information about how to enable the audit log feature, see [Enable the new audit log feature](~~102015~~).
     *
     * @example 15
     *
     * @var string
     */
    public $auditLogRetention;

    /**
     * @description The availability metric of the current month.
     *
     * @example 100%
     *
     * @var string
     */
    public $availabilityValue;

    /**
     * @description The earliest point in time to which you can restore data. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * >
     *
     *   This parameter is returned only when the data flashback feature is enabled for the instance. For more information, see [Use data flashback to restore data by point in time](~~148479~~).
     *
     *   When you call the [RestoreInstance](~~61083~~) operation to implement data flashback, you can obtain the earliest point in time for data flashback from the return value of this parameter and set the **RestoreTime** parameter to this point in time.
     *
     * @example 2021-07-06T05:49:55Z
     *
     * @var string
     */
    public $backupLogStartTime;

    /**
     * @description The bandwidth of the instance. Unit: Mbit/s.
     *
     * @example 10
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description The storage capacity of the instance. Unit: MB.
     *
     * @example 1024
     *
     * @var int
     */
    public $capacity;

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
     * @description This parameter is returned only when the instance is in a cloud box.
     *
     * @example cloudbox
     *
     * @var string
     */
    public $cloudType;

    /**
     * @description The parameter settings of the instance in the JSON format. For more information, see [Modify the parameters of an ApsaraDB for Redis instance](~~43885~~).
     *
     * @example {\"EvictionPolicy\":\"volatile-lru\",\"hash-max-ziplist-entries\":512,\"zset-max-ziplist-entries\":128,\"zset-max-ziplist-value\":64,\"set-max-intset-entries\":512,\"hash-max-ziplist-value\":64}
     *
     * @var string
     */
    public $config;

    /**
     * @description The internal endpoint of the instance.
     *
     * @example r-bp1d72gwl41z7f****.redis.rds.aliyuncs.com
     *
     * @var string
     */
    public $connectionDomain;

    /**
     * @description The maximum number of connections supported by the instance.
     *
     * @example 10000
     *
     * @var int
     */
    public $connections;

    /**
     * @description The time when the instance was created. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2019-03-06T10:42:03Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The time when the subscription instance expires. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2019-04-06T10:42:03Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The database engine of the instance. The return value is **Redis**.
     *
     * @example Redis
     *
     * @var string
     */
    public $engine;

    /**
     * @description The database engine version of the instance. Valid values: **2.8**, **4.0**, **5.0**, and **6.0**.
     *
     * @example 4.0
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @description The ID of the distributed instance to which the instance belongs.
     *
     * > This parameter is returned only when the instance is a child instance of a distributed instance.
     * @example gr-bp14rkqrhac****
     *
     * @var string
     */
    public $globalInstanceId;

    /**
     * @description Indicates whether your Alibaba Cloud account has pending orders for renewal and configuration change. Valid values:
     *
     *   **true**: Your Alibaba Cloud account has pending orders.
     *   **false**: Your Alibaba Cloud account does not have pending orders.
     *
     * @example false
     *
     * @var string
     */
    public $hasRenewChangeOrder;

    /**
     * @description The instance type of the instance. For more information, see [Instance types](~~107984~~).
     *
     * @example redis.master.small.default
     *
     * @var string
     */
    public $instanceClass;

    /**
     * @description The ID of the instance.
     *
     * @example r-bp1d72gwl41z7f****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the instance.
     *
     * @example apitest
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description Indicates whether the release protection feature is enabled for the instance. Valid values:
     *
     *   **true**: Release protection is enabled.
     *   **false**: Release protection is disabled.
     *
     * @example false
     *
     * @var bool
     */
    public $instanceReleaseProtection;

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
     *   **Unavailable**: The instance is suspended.
     *   **Error**: The instance failed to be created.
     *   **Migrating**: The instance is being migrated.
     *   **BackupRecovering**: The instance is being restored from a backup.
     *   **MinorVersionUpgrading**: The minor version of the instance is being updated.
     *   **NetworkModifying**: The network type of the instance is being changed.
     *   **SSLModifying**: The SSL certificate of the instance is being changed.
     *   **MajorVersionUpgrading**: The major version of the instance is being upgraded. The instance remains accessible during the upgrade.
     *
     * > For more information about instance states, see [Instance states and impacts](~~200740~~).
     * @example Normal
     *
     * @var string
     */
    public $instanceStatus;

    /**
     * @description The database engine of the instance. Valid values:
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
     * @description Whether the instance order has been completed is used to determine whether the modify instance specifications order has reached its final state. The return value is:
     *
     * **true**: The modify instance specifications operation has been completed or has not been made.
     *
     * **false**: Changing specifications, the order is not yet completed.
     *
     * @example true
     *
     * @var bool
     */
    public $isOrderCompleted;

    /**
     * @description Indicates whether the instance is managed by ApsaraDB RDS. Valid values:
     *
     *   **true**: The instance is managed by ApsaraDB RDS.
     *   **false**: The instance is not managed by ApsaraDB RDS.
     *
     * @example true
     *
     * @var bool
     */
    public $isRds;

    /**
     * @description Does the instance support enabling transparent data encryption (TDE) function? Return value:
     *
     * **true**: Supported, only supported for local disk, memory type Tair instance version.
     * **false**: Not Supported.
     *
     * @example true
     *
     * @var bool
     */
    public $isSupportTDE;

    /**
     * @description The end time of the maintenance window. The time is in the *HH:mmZ* format. The time is displayed in UTC.
     *
     * @example 22:00Z
     *
     * @var string
     */
    public $maintainEndTime;

    /**
     * @description The start time of the maintenance window. The time is in the *HH:mmZ* format. The time is displayed in UTC.
     *
     * @example 18:00Z
     *
     * @var string
     */
    public $maintainStartTime;

    /**
     * @description The network type of the instance. Valid values:
     *
     *   **CLASSIC**: classic network
     *   **VPC**: VPC
     *
     * @example CLASSIC
     *
     * @var string
     */
    public $networkType;

    /**
     * @description The node type. Valid values:
     *
     *   **double**: The instance contains a master node and a replica node.
     *   **single**: The instance contains only a master node. This node type is phrased out.
     *
     * @example double
     *
     * @var string
     */
    public $nodeType;

    /**
     * @description The plan type of the instance. Valid values:
     *
     *   **standard**: standard plan.
     *   **customized**: custom plan. This plan type is phased out.
     *
     * @example standard
     *
     * @var string
     */
    public $packageType;

    /**
     * @description The port number of the instance.
     *
     * @example 6379
     *
     * @var int
     */
    public $port;

    /**
     * @description The private IP address of the instance.
     *
     * > This parameter is not returned when the instance is deployed in the classic network.
     * @example 172.16.49.***
     *
     * @var string
     */
    public $privateIp;

    /**
     * @description The expected maximum queries per second (QPS).
     *
     * @example 100000
     *
     * @var int
     */
    public $QPS;

    /**
     * @description The number of read-only nodes. This parameter is available only for read/write splitting instances that use cloud disks.
     *
     * @example 5
     *
     * @var int
     */
    public $readOnlyCount;

    /**
     * @description If the instance is a cluster instance that uses cloud disks, this parameter indicates the instance type of each shard. In this case, the InstanceClass parameter indicates a virtual instance type.
     *
     * > To query the costs of this instance type, specify the returned instance type for this parameter for the [DescribePrice](~~95612~~) operation and call the operation.
     * @example tair.rdb.with.proxy.1g
     *
     * @var string
     */
    public $realInstanceClass;

    /**
     * @description The region ID of the instance.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the node.
     *
     * @example bls-awxxxxxxxxxxxxx
     *
     * @var string
     */
    public $replicaId;

    /**
     * @description The architecture of the instance. Valid values:
     *
     *   **master-slave**: standard master-replica architecture.
     *   **cluster**: cluster architecture, which includes read/write splitting instances and cluster instances.
     *
     * @example master-slave
     *
     * @var string
     */
    public $replicationMode;

    /**
     * @description The ID of the resource group to which the instance belongs.
     *
     * @example rg-acfmyiu4ekp****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The ID of the secondary zone.
     *
     * > This parameter is returned only when the instance has a secondary zone ID.
     * @example cn-hongkong-h
     *
     * @var string
     */
    public $secondaryZoneId;

    /**
     * @description The IP addresses contained in a whitelist of the instance.
     *
     * @example 127.0.0.1
     *
     * @var string
     */
    public $securityIPList;

    /**
     * @description The number of shards. This parameter is available only for instances that are purchased on the China site (aliyun.com).
     *
     * This parameter is returned only when the instance is a [cluster instance](~~52228~~) that uses cloud disks.
     * @example 2
     *
     * @var int
     */
    public $shardCount;

    /**
     * @var string
     */
    public $storage;

    /**
     * @var string
     */
    public $storageType;

    /**
     * @description Details of the tags.
     *
     * @var tags
     */
    public $tags;

    /**
     * @description The ID of the vSwitch.
     *
     * @example vsw-bp1e7clcw529l773d****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The VPC authentication mode. Valid values:
     *
     *   **Open**: enables password authentication.
     *   **Close**: disables password authentication and enables password-free access. For more information, see [Enable password-free access](~~85168~~).
     *
     * @example Open
     *
     * @var string
     */
    public $vpcAuthMode;

    /**
     * @description The ID of the VPC.
     *
     * @example r-bp1d72gwl41z7f****
     *
     * @var string
     */
    public $vpcCloudInstanceId;

    /**
     * @description The ID of the virtual private cloud (VPC).
     *
     * @example vpc-bp1nme44gek34slfc****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The zone ID of the instance.
     *
     * @example cn-hongkong-b
     *
     * @var string
     */
    public $zoneId;

    /**
     * @description The deployment type of the instance. Valid values:
     *
     *   **singlezone**: The instance is deployed in a single zone.
     *   **doublezone**: The instance is deployed in two zones of the same region.
     *
     * @example singlezone
     *
     * @var string
     */
    public $zoneType;
    protected $_name = [
        'architectureType'          => 'ArchitectureType',
        'auditLogRetention'         => 'AuditLogRetention',
        'availabilityValue'         => 'AvailabilityValue',
        'backupLogStartTime'        => 'BackupLogStartTime',
        'bandwidth'                 => 'Bandwidth',
        'capacity'                  => 'Capacity',
        'chargeType'                => 'ChargeType',
        'cloudType'                 => 'CloudType',
        'config'                    => 'Config',
        'connectionDomain'          => 'ConnectionDomain',
        'connections'               => 'Connections',
        'createTime'                => 'CreateTime',
        'endTime'                   => 'EndTime',
        'engine'                    => 'Engine',
        'engineVersion'             => 'EngineVersion',
        'globalInstanceId'          => 'GlobalInstanceId',
        'hasRenewChangeOrder'       => 'HasRenewChangeOrder',
        'instanceClass'             => 'InstanceClass',
        'instanceId'                => 'InstanceId',
        'instanceName'              => 'InstanceName',
        'instanceReleaseProtection' => 'InstanceReleaseProtection',
        'instanceStatus'            => 'InstanceStatus',
        'instanceType'              => 'InstanceType',
        'isOrderCompleted'          => 'IsOrderCompleted',
        'isRds'                     => 'IsRds',
        'isSupportTDE'              => 'IsSupportTDE',
        'maintainEndTime'           => 'MaintainEndTime',
        'maintainStartTime'         => 'MaintainStartTime',
        'networkType'               => 'NetworkType',
        'nodeType'                  => 'NodeType',
        'packageType'               => 'PackageType',
        'port'                      => 'Port',
        'privateIp'                 => 'PrivateIp',
        'QPS'                       => 'QPS',
        'readOnlyCount'             => 'ReadOnlyCount',
        'realInstanceClass'         => 'RealInstanceClass',
        'regionId'                  => 'RegionId',
        'replicaId'                 => 'ReplicaId',
        'replicationMode'           => 'ReplicationMode',
        'resourceGroupId'           => 'ResourceGroupId',
        'secondaryZoneId'           => 'SecondaryZoneId',
        'securityIPList'            => 'SecurityIPList',
        'shardCount'                => 'ShardCount',
        'storage'                   => 'Storage',
        'storageType'               => 'StorageType',
        'tags'                      => 'Tags',
        'vSwitchId'                 => 'VSwitchId',
        'vpcAuthMode'               => 'VpcAuthMode',
        'vpcCloudInstanceId'        => 'VpcCloudInstanceId',
        'vpcId'                     => 'VpcId',
        'zoneId'                    => 'ZoneId',
        'zoneType'                  => 'ZoneType',
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
        if (null !== $this->auditLogRetention) {
            $res['AuditLogRetention'] = $this->auditLogRetention;
        }
        if (null !== $this->availabilityValue) {
            $res['AvailabilityValue'] = $this->availabilityValue;
        }
        if (null !== $this->backupLogStartTime) {
            $res['BackupLogStartTime'] = $this->backupLogStartTime;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->capacity) {
            $res['Capacity'] = $this->capacity;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->cloudType) {
            $res['CloudType'] = $this->cloudType;
        }
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->connectionDomain) {
            $res['ConnectionDomain'] = $this->connectionDomain;
        }
        if (null !== $this->connections) {
            $res['Connections'] = $this->connections;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->globalInstanceId) {
            $res['GlobalInstanceId'] = $this->globalInstanceId;
        }
        if (null !== $this->hasRenewChangeOrder) {
            $res['HasRenewChangeOrder'] = $this->hasRenewChangeOrder;
        }
        if (null !== $this->instanceClass) {
            $res['InstanceClass'] = $this->instanceClass;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->instanceReleaseProtection) {
            $res['InstanceReleaseProtection'] = $this->instanceReleaseProtection;
        }
        if (null !== $this->instanceStatus) {
            $res['InstanceStatus'] = $this->instanceStatus;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->isOrderCompleted) {
            $res['IsOrderCompleted'] = $this->isOrderCompleted;
        }
        if (null !== $this->isRds) {
            $res['IsRds'] = $this->isRds;
        }
        if (null !== $this->isSupportTDE) {
            $res['IsSupportTDE'] = $this->isSupportTDE;
        }
        if (null !== $this->maintainEndTime) {
            $res['MaintainEndTime'] = $this->maintainEndTime;
        }
        if (null !== $this->maintainStartTime) {
            $res['MaintainStartTime'] = $this->maintainStartTime;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }
        if (null !== $this->packageType) {
            $res['PackageType'] = $this->packageType;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->privateIp) {
            $res['PrivateIp'] = $this->privateIp;
        }
        if (null !== $this->QPS) {
            $res['QPS'] = $this->QPS;
        }
        if (null !== $this->readOnlyCount) {
            $res['ReadOnlyCount'] = $this->readOnlyCount;
        }
        if (null !== $this->realInstanceClass) {
            $res['RealInstanceClass'] = $this->realInstanceClass;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->replicaId) {
            $res['ReplicaId'] = $this->replicaId;
        }
        if (null !== $this->replicationMode) {
            $res['ReplicationMode'] = $this->replicationMode;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->secondaryZoneId) {
            $res['SecondaryZoneId'] = $this->secondaryZoneId;
        }
        if (null !== $this->securityIPList) {
            $res['SecurityIPList'] = $this->securityIPList;
        }
        if (null !== $this->shardCount) {
            $res['ShardCount'] = $this->shardCount;
        }
        if (null !== $this->storage) {
            $res['Storage'] = $this->storage;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcAuthMode) {
            $res['VpcAuthMode'] = $this->vpcAuthMode;
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
        if (null !== $this->zoneType) {
            $res['ZoneType'] = $this->zoneType;
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
        if (isset($map['ArchitectureType'])) {
            $model->architectureType = $map['ArchitectureType'];
        }
        if (isset($map['AuditLogRetention'])) {
            $model->auditLogRetention = $map['AuditLogRetention'];
        }
        if (isset($map['AvailabilityValue'])) {
            $model->availabilityValue = $map['AvailabilityValue'];
        }
        if (isset($map['BackupLogStartTime'])) {
            $model->backupLogStartTime = $map['BackupLogStartTime'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['Capacity'])) {
            $model->capacity = $map['Capacity'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['CloudType'])) {
            $model->cloudType = $map['CloudType'];
        }
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['ConnectionDomain'])) {
            $model->connectionDomain = $map['ConnectionDomain'];
        }
        if (isset($map['Connections'])) {
            $model->connections = $map['Connections'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['GlobalInstanceId'])) {
            $model->globalInstanceId = $map['GlobalInstanceId'];
        }
        if (isset($map['HasRenewChangeOrder'])) {
            $model->hasRenewChangeOrder = $map['HasRenewChangeOrder'];
        }
        if (isset($map['InstanceClass'])) {
            $model->instanceClass = $map['InstanceClass'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InstanceReleaseProtection'])) {
            $model->instanceReleaseProtection = $map['InstanceReleaseProtection'];
        }
        if (isset($map['InstanceStatus'])) {
            $model->instanceStatus = $map['InstanceStatus'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['IsOrderCompleted'])) {
            $model->isOrderCompleted = $map['IsOrderCompleted'];
        }
        if (isset($map['IsRds'])) {
            $model->isRds = $map['IsRds'];
        }
        if (isset($map['IsSupportTDE'])) {
            $model->isSupportTDE = $map['IsSupportTDE'];
        }
        if (isset($map['MaintainEndTime'])) {
            $model->maintainEndTime = $map['MaintainEndTime'];
        }
        if (isset($map['MaintainStartTime'])) {
            $model->maintainStartTime = $map['MaintainStartTime'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }
        if (isset($map['PackageType'])) {
            $model->packageType = $map['PackageType'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['PrivateIp'])) {
            $model->privateIp = $map['PrivateIp'];
        }
        if (isset($map['QPS'])) {
            $model->QPS = $map['QPS'];
        }
        if (isset($map['ReadOnlyCount'])) {
            $model->readOnlyCount = $map['ReadOnlyCount'];
        }
        if (isset($map['RealInstanceClass'])) {
            $model->realInstanceClass = $map['RealInstanceClass'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ReplicaId'])) {
            $model->replicaId = $map['ReplicaId'];
        }
        if (isset($map['ReplicationMode'])) {
            $model->replicationMode = $map['ReplicationMode'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SecondaryZoneId'])) {
            $model->secondaryZoneId = $map['SecondaryZoneId'];
        }
        if (isset($map['SecurityIPList'])) {
            $model->securityIPList = $map['SecurityIPList'];
        }
        if (isset($map['ShardCount'])) {
            $model->shardCount = $map['ShardCount'];
        }
        if (isset($map['Storage'])) {
            $model->storage = $map['Storage'];
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VpcAuthMode'])) {
            $model->vpcAuthMode = $map['VpcAuthMode'];
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
        if (isset($map['ZoneType'])) {
            $model->zoneType = $map['ZoneType'];
        }

        return $model;
    }
}
