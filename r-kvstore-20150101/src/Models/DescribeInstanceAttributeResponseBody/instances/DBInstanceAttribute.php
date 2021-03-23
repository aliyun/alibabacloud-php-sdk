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
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $connectionDomain;

    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $instanceStatus;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $capacity;

    /**
     * @var string
     */
    public $instanceClass;

    /**
     * @var int
     */
    public $QPS;

    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var int
     */
    public $connections;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $config;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $nodeType;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $privateIp;

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
    public $hasRenewChangeOrder;

    /**
     * @var bool
     */
    public $isRds;

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
     * @var string
     */
    public $securityIPList;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $architectureType;

    /**
     * @var string
     */
    public $packageType;

    /**
     * @var string
     */
    public $replicaId;

    /**
     * @var string
     */
    public $vpcAuthMode;

    /**
     * @var string
     */
    public $auditLogRetention;

    /**
     * @var string
     */
    public $replicationMode;

    /**
     * @var string
     */
    public $vpcCloudInstanceId;

    /**
     * @var bool
     */
    public $instanceReleaseProtection;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var int
     */
    public $shardCount;

    /**
     * @var string
     */
    public $globalInstanceId;

    /**
     * @var tags
     */
    public $tags;
    protected $_name = [
        'instanceId'                => 'InstanceId',
        'instanceName'              => 'InstanceName',
        'connectionDomain'          => 'ConnectionDomain',
        'port'                      => 'Port',
        'instanceStatus'            => 'InstanceStatus',
        'regionId'                  => 'RegionId',
        'capacity'                  => 'Capacity',
        'instanceClass'             => 'InstanceClass',
        'QPS'                       => 'QPS',
        'bandwidth'                 => 'Bandwidth',
        'connections'               => 'Connections',
        'zoneId'                    => 'ZoneId',
        'config'                    => 'Config',
        'chargeType'                => 'ChargeType',
        'nodeType'                  => 'NodeType',
        'networkType'               => 'NetworkType',
        'vpcId'                     => 'VpcId',
        'vSwitchId'                 => 'VSwitchId',
        'privateIp'                 => 'PrivateIp',
        'createTime'                => 'CreateTime',
        'endTime'                   => 'EndTime',
        'hasRenewChangeOrder'       => 'HasRenewChangeOrder',
        'isRds'                     => 'IsRds',
        'engine'                    => 'Engine',
        'engineVersion'             => 'EngineVersion',
        'maintainStartTime'         => 'MaintainStartTime',
        'maintainEndTime'           => 'MaintainEndTime',
        'availabilityValue'         => 'AvailabilityValue',
        'securityIPList'            => 'SecurityIPList',
        'instanceType'              => 'InstanceType',
        'architectureType'          => 'ArchitectureType',
        'packageType'               => 'PackageType',
        'replicaId'                 => 'ReplicaId',
        'vpcAuthMode'               => 'VpcAuthMode',
        'auditLogRetention'         => 'AuditLogRetention',
        'replicationMode'           => 'ReplicationMode',
        'vpcCloudInstanceId'        => 'VpcCloudInstanceId',
        'instanceReleaseProtection' => 'InstanceReleaseProtection',
        'resourceGroupId'           => 'ResourceGroupId',
        'shardCount'                => 'ShardCount',
        'globalInstanceId'          => 'GlobalInstanceId',
        'tags'                      => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->connectionDomain) {
            $res['ConnectionDomain'] = $this->connectionDomain;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->instanceStatus) {
            $res['InstanceStatus'] = $this->instanceStatus;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->capacity) {
            $res['Capacity'] = $this->capacity;
        }
        if (null !== $this->instanceClass) {
            $res['InstanceClass'] = $this->instanceClass;
        }
        if (null !== $this->QPS) {
            $res['QPS'] = $this->QPS;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->connections) {
            $res['Connections'] = $this->connections;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->privateIp) {
            $res['PrivateIp'] = $this->privateIp;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->hasRenewChangeOrder) {
            $res['HasRenewChangeOrder'] = $this->hasRenewChangeOrder;
        }
        if (null !== $this->isRds) {
            $res['IsRds'] = $this->isRds;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
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
        if (null !== $this->securityIPList) {
            $res['SecurityIPList'] = $this->securityIPList;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->architectureType) {
            $res['ArchitectureType'] = $this->architectureType;
        }
        if (null !== $this->packageType) {
            $res['PackageType'] = $this->packageType;
        }
        if (null !== $this->replicaId) {
            $res['ReplicaId'] = $this->replicaId;
        }
        if (null !== $this->vpcAuthMode) {
            $res['VpcAuthMode'] = $this->vpcAuthMode;
        }
        if (null !== $this->auditLogRetention) {
            $res['AuditLogRetention'] = $this->auditLogRetention;
        }
        if (null !== $this->replicationMode) {
            $res['ReplicationMode'] = $this->replicationMode;
        }
        if (null !== $this->vpcCloudInstanceId) {
            $res['VpcCloudInstanceId'] = $this->vpcCloudInstanceId;
        }
        if (null !== $this->instanceReleaseProtection) {
            $res['InstanceReleaseProtection'] = $this->instanceReleaseProtection;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->shardCount) {
            $res['ShardCount'] = $this->shardCount;
        }
        if (null !== $this->globalInstanceId) {
            $res['GlobalInstanceId'] = $this->globalInstanceId;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['ConnectionDomain'])) {
            $model->connectionDomain = $map['ConnectionDomain'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['InstanceStatus'])) {
            $model->instanceStatus = $map['InstanceStatus'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Capacity'])) {
            $model->capacity = $map['Capacity'];
        }
        if (isset($map['InstanceClass'])) {
            $model->instanceClass = $map['InstanceClass'];
        }
        if (isset($map['QPS'])) {
            $model->QPS = $map['QPS'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['Connections'])) {
            $model->connections = $map['Connections'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['PrivateIp'])) {
            $model->privateIp = $map['PrivateIp'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['HasRenewChangeOrder'])) {
            $model->hasRenewChangeOrder = $map['HasRenewChangeOrder'];
        }
        if (isset($map['IsRds'])) {
            $model->isRds = $map['IsRds'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
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
        if (isset($map['SecurityIPList'])) {
            $model->securityIPList = $map['SecurityIPList'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['ArchitectureType'])) {
            $model->architectureType = $map['ArchitectureType'];
        }
        if (isset($map['PackageType'])) {
            $model->packageType = $map['PackageType'];
        }
        if (isset($map['ReplicaId'])) {
            $model->replicaId = $map['ReplicaId'];
        }
        if (isset($map['VpcAuthMode'])) {
            $model->vpcAuthMode = $map['VpcAuthMode'];
        }
        if (isset($map['AuditLogRetention'])) {
            $model->auditLogRetention = $map['AuditLogRetention'];
        }
        if (isset($map['ReplicationMode'])) {
            $model->replicationMode = $map['ReplicationMode'];
        }
        if (isset($map['VpcCloudInstanceId'])) {
            $model->vpcCloudInstanceId = $map['VpcCloudInstanceId'];
        }
        if (isset($map['InstanceReleaseProtection'])) {
            $model->instanceReleaseProtection = $map['InstanceReleaseProtection'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ShardCount'])) {
            $model->shardCount = $map['ShardCount'];
        }
        if (isset($map['GlobalInstanceId'])) {
            $model->globalInstanceId = $map['GlobalInstanceId'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }

        return $model;
    }
}
