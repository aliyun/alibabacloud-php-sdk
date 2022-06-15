<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeInstanceAttributeResponseBody\instances;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeInstanceAttributeResponseBody\instances\DBInstanceAttribute\tags;
use AlibabaCloud\Tea\Model;

class DBInstanceAttribute extends Model
{
    /**
     * @var string
     */
    public $architectureType;

    /**
     * @var string
     */
    public $auditLogRetention;

    /**
     * @var string
     */
    public $availabilityValue;

    /**
     * @var string
     */
    public $backupLogStartTime;

    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var int
     */
    public $capacity;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $cloudType;

    /**
     * @var string
     */
    public $config;

    /**
     * @var string
     */
    public $connectionDomain;

    /**
     * @var int
     */
    public $connections;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $endTime;

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
    public $globalInstanceId;

    /**
     * @var string
     */
    public $hasRenewChangeOrder;

    /**
     * @var string
     */
    public $instanceClass;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var bool
     */
    public $instanceReleaseProtection;

    /**
     * @var string
     */
    public $instanceStatus;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var bool
     */
    public $isRds;

    /**
     * @var string
     */
    public $maintainEndTime;

    /**
     * @var string
     */
    public $maintainStartTime;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var string
     */
    public $nodeType;

    /**
     * @var string
     */
    public $packageType;

    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $privateIp;

    /**
     * @var int
     */
    public $QPS;

    /**
     * @var int
     */
    public $readOnlyCount;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $replicaId;

    /**
     * @var string
     */
    public $replicationMode;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $secondaryZoneId;

    /**
     * @var string
     */
    public $securityIPList;

    /**
     * @var int
     */
    public $shardCount;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $vpcAuthMode;

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

    /**
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
        'isRds'                     => 'IsRds',
        'maintainEndTime'           => 'MaintainEndTime',
        'maintainStartTime'         => 'MaintainStartTime',
        'networkType'               => 'NetworkType',
        'nodeType'                  => 'NodeType',
        'packageType'               => 'PackageType',
        'port'                      => 'Port',
        'privateIp'                 => 'PrivateIp',
        'QPS'                       => 'QPS',
        'readOnlyCount'             => 'ReadOnlyCount',
        'regionId'                  => 'RegionId',
        'replicaId'                 => 'ReplicaId',
        'replicationMode'           => 'ReplicationMode',
        'resourceGroupId'           => 'ResourceGroupId',
        'secondaryZoneId'           => 'SecondaryZoneId',
        'securityIPList'            => 'SecurityIPList',
        'shardCount'                => 'ShardCount',
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
        if (null !== $this->isRds) {
            $res['IsRds'] = $this->isRds;
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
        if (isset($map['IsRds'])) {
            $model->isRds = $map['IsRds'];
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
