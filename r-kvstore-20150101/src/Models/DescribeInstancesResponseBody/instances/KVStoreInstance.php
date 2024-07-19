<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeInstancesResponseBody\instances;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeInstancesResponseBody\instances\KVStoreInstance\tags;
use AlibabaCloud\Tea\Model;

class KVStoreInstance extends Model
{
    /**
     * @description The architecture of the instance. Default value: NULL. Valid values:
     *
     *   **cluster**: cluster architecture
     *   **standard**: standard architecture
     *   **rwsplit**: read/write splitting architecture
     *   **NULL**: all of the preceding architectures
     *
     * @example cluster
     *
     * @var string
     */
    public $architectureType;

    /**
     * @description The bandwidth of the instance. Unit: Mbit/s.
     *
     * @example 96
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description The storage capacity of the instance. Unit: MB.
     *
     * @example 4096
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
     * @var string
     */
    public $computingType;

    /**
     * @description The parameter configurations of the instance. For more information, see [Modify parameters of an instance](https://help.aliyun.com/document_detail/43885.html).
     *
     * @example {\\"maxmemory-policy\\":\\"volatile-lfu\\",\\"EvictionPolicy\\":\\"volatile-lru\\",\\"hash-max-ziplist-entries\\":512,\\"zset-max-ziplist-entries\\":128,\\"zset-max-ziplist-value\\":64,\\"set-max-intset-entries\\":512,\\"hash-max-ziplist-value\\":64,\\"#no_loose_disabled-commands\\":\\"flushall,flushdb\\",\\"lazyfree-lazy-eviction\\":\\"yes\\"}
     *
     * @var string
     */
    public $config;

    /**
     * @description The internal endpoint of the instance.
     *
     * @example r-bp1zxszhcgatnx****.redis.rds.aliyuncs.com
     *
     * @var string
     */
    public $connectionDomain;

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
     * @description The maximum number of connections supported by the instance.
     *
     * @example 20000
     *
     * @var int
     */
    public $connections;

    /**
     * @description The time when the instance was created.
     *
     * @example 2018-11-07T08:49:00Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The time when the instance was deleted.
     *
     * @example 2019-04-28T10:03:01Z
     *
     * @var string
     */
    public $destroyTime;

    /**
     * @description The edition of the instance. Valid values:
     *
     *   **Community**: ApsaraDB for Redis Community Edition
     *   **Enterprise**: ApsaraDB for Redis Enhanced Edition (Tair)
     *
     * @example Enterprise
     *
     * @var string
     */
    public $editionType;

    /**
     * @description The time when the subscription instance expires.
     *
     * @example 2019-06-13T16:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The engine version of the instance. Valid values: **2.8**, **4.0**, and **5.0**.
     *
     * @example 4.0
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @description The ID of the distributed instance.
     *
     * >  This parameter is returned only if the instance is a child instance of a distributed instance.
     * @example gr-bp14rkqrhac****
     *
     * @var string
     */
    public $globalInstanceId;

    /**
     * @description Indicates whether your Alibaba Cloud account has pending orders for renewal and configuration change. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $hasRenewChangeOrder;

    /**
     * @description The instance class.
     *
     * @example redis.logic.sharding.2g.2db.0rodb.4proxy.default
     *
     * @var string
     */
    public $instanceClass;

    /**
     * @description The ID of the instance.
     *
     * @example r-bp1zxszhcgatnx****
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
     * @description The state of the instance. Valid values:
     *
     *   **Normal**: The instance is normal.
     *   **Creating**: The instance is being created.
     *   **Changing**: The configurations of the instance are being changed.
     *   **Inactive**: The instance is disabled.
     *   **Flushing**: The instance is being released.
     *   **Released**: The instance is released.
     *   **Transforming**: The billing method of the instance is being changed.
     *   **Unavailable**: The instance is unavailable.
     *   **Error**: The instance failed to be created.
     *   **Migrating**: The instance is being migrated.
     *   **BackupRecovering**: The instance is being restored from a backup.
     *   **MinorVersionUpgrading**: The minor version of the instance is being updated.
     *   **NetworkModifying**: The network type of the instance is being changed.
     *   **SSLModifying**: The SSL configurations of the instance are being changed.
     *   **MajorVersionUpgrading**: The major version of the instance is being upgraded. The instance remains accessible during the upgrade.
     *
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
     * @description Indicates whether the instance is managed by ApsaraDB RDS. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $isRds;

    /**
     * @description The network type of the instance. Valid values:
     *
     *   **CLASSIC**
     *   **VPC**
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
     *   **single**: The instance contains only a master node. This node type is phased out.
     *
     * @example double
     *
     * @var string
     */
    public $nodeType;

    /**
     * @description The plan type. Valid values:
     *
     *   **standard**: standard plan
     *   **customized**: custom plan
     *
     * @example standard
     *
     * @var string
     */
    public $packageType;

    /**
     * @description The service port of the instance.
     *
     * @example 6379
     *
     * @var int
     */
    public $port;

    /**
     * @description The private IP address.
     *
     * >  This parameter is not returned when the instance is deployed in the classic network.
     * @example 172.16.49.***
     *
     * @var string
     */
    public $privateIp;

    /**
     * @description The number of queries per second (QPS).
     *
     * @example 100000
     *
     * @var int
     */
    public $QPS;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The logical ID of the distributed instance.
     *
     * @example grr-bp11381ebc16****
     *
     * @var string
     */
    public $replacateId;

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
     * >  If multiple zones are returned for **ZoneId**, such as cn-hangzhou-MAZ10(h,i), this parameter is ignored.
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $secondaryZoneId;

    /**
     * @description The shard class. For more information about shard classes, see [Overview](https://help.aliyun.com/document_detail/26350.html).
     *
     * >  The overall performance of a cluster instance is calculated by multiplying the class of a single shard (ShardClass) by the number of shards (ShardCount).
     * @example redis.shard.small.ce
     *
     * @var string
     */
    public $shardClass;

    /**
     * @description The number of data shards in the cluster instance.
     *
     * >  This parameter is returned only for cloud-native cluster instances or read/write splitting instances.
     * @example 3
     *
     * @var int
     */
    public $shardCount;

    /**
     * @description Details about the tags.
     *
     * @var tags
     */
    public $tags;

    /**
     * @description The username used to connect to the instance. By default, a username named after the instance ID is included.
     *
     * @example r-bp1zxszhcgatnx****
     *
     * @var string
     */
    public $userName;

    /**
     * @description The ID of the vSwitch.
     *
     * @example vsw-bp1e7clcw529l773d****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The ID of the virtual private cloud (VPC).
     *
     * @example vpc-bp1nme44gek34slfc****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The zone ID.
     *
     * @example cn-hangzhou-b
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'architectureType'    => 'ArchitectureType',
        'bandwidth'           => 'Bandwidth',
        'capacity'            => 'Capacity',
        'chargeType'          => 'ChargeType',
        'cloudType'           => 'CloudType',
        'computingType'       => 'ComputingType',
        'config'              => 'Config',
        'connectionDomain'    => 'ConnectionDomain',
        'connectionMode'      => 'ConnectionMode',
        'connections'         => 'Connections',
        'createTime'          => 'CreateTime',
        'destroyTime'         => 'DestroyTime',
        'editionType'         => 'EditionType',
        'endTime'             => 'EndTime',
        'engineVersion'       => 'EngineVersion',
        'globalInstanceId'    => 'GlobalInstanceId',
        'hasRenewChangeOrder' => 'HasRenewChangeOrder',
        'instanceClass'       => 'InstanceClass',
        'instanceId'          => 'InstanceId',
        'instanceName'        => 'InstanceName',
        'instanceStatus'      => 'InstanceStatus',
        'instanceType'        => 'InstanceType',
        'isRds'               => 'IsRds',
        'networkType'         => 'NetworkType',
        'nodeType'            => 'NodeType',
        'packageType'         => 'PackageType',
        'port'                => 'Port',
        'privateIp'           => 'PrivateIp',
        'QPS'                 => 'QPS',
        'regionId'            => 'RegionId',
        'replacateId'         => 'ReplacateId',
        'resourceGroupId'     => 'ResourceGroupId',
        'secondaryZoneId'     => 'SecondaryZoneId',
        'shardClass'          => 'ShardClass',
        'shardCount'          => 'ShardCount',
        'tags'                => 'Tags',
        'userName'            => 'UserName',
        'vSwitchId'           => 'VSwitchId',
        'vpcId'               => 'VpcId',
        'zoneId'              => 'ZoneId',
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
        if (null !== $this->computingType) {
            $res['ComputingType'] = $this->computingType;
        }
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->connectionDomain) {
            $res['ConnectionDomain'] = $this->connectionDomain;
        }
        if (null !== $this->connectionMode) {
            $res['ConnectionMode'] = $this->connectionMode;
        }
        if (null !== $this->connections) {
            $res['Connections'] = $this->connections;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->destroyTime) {
            $res['DestroyTime'] = $this->destroyTime;
        }
        if (null !== $this->editionType) {
            $res['EditionType'] = $this->editionType;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
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
        if (null !== $this->instanceStatus) {
            $res['InstanceStatus'] = $this->instanceStatus;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->isRds) {
            $res['IsRds'] = $this->isRds;
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->replacateId) {
            $res['ReplacateId'] = $this->replacateId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->secondaryZoneId) {
            $res['SecondaryZoneId'] = $this->secondaryZoneId;
        }
        if (null !== $this->shardClass) {
            $res['ShardClass'] = $this->shardClass;
        }
        if (null !== $this->shardCount) {
            $res['ShardCount'] = $this->shardCount;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
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
     * @return KVStoreInstance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArchitectureType'])) {
            $model->architectureType = $map['ArchitectureType'];
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
        if (isset($map['ComputingType'])) {
            $model->computingType = $map['ComputingType'];
        }
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['ConnectionDomain'])) {
            $model->connectionDomain = $map['ConnectionDomain'];
        }
        if (isset($map['ConnectionMode'])) {
            $model->connectionMode = $map['ConnectionMode'];
        }
        if (isset($map['Connections'])) {
            $model->connections = $map['Connections'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DestroyTime'])) {
            $model->destroyTime = $map['DestroyTime'];
        }
        if (isset($map['EditionType'])) {
            $model->editionType = $map['EditionType'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
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
        if (isset($map['InstanceStatus'])) {
            $model->instanceStatus = $map['InstanceStatus'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['IsRds'])) {
            $model->isRds = $map['IsRds'];
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ReplacateId'])) {
            $model->replacateId = $map['ReplacateId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SecondaryZoneId'])) {
            $model->secondaryZoneId = $map['SecondaryZoneId'];
        }
        if (isset($map['ShardClass'])) {
            $model->shardClass = $map['ShardClass'];
        }
        if (isset($map['ShardCount'])) {
            $model->shardCount = $map['ShardCount'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
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
