<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeInstancesResponseBody\instances;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeInstancesResponseBody\instances\KVStoreInstance\tags;
use AlibabaCloud\Tea\Model;

class KVStoreInstance extends Model
{
    /**
     * @var string
     */
    public $replacateId;

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
    public $searchKey;

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
    public $userName;

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
     * @var bool
     */
    public $hasRenewChangeOrder;

    /**
     * @var bool
     */
    public $isRds;

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
    public $nodeType;

    /**
     * @var string
     */
    public $packageType;

    /**
     * @var string
     */
    public $engineVersion;

    /**
     * @var string
     */
    public $destroyTime;

    /**
     * @var string
     */
    public $connectionMode;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var int
     */
    public $shardCount;

    /**
     * @var tags
     */
    public $tags;
    protected $_name = [
        'replacateId'         => 'ReplacateId',
        'instanceId'          => 'InstanceId',
        'instanceName'        => 'InstanceName',
        'searchKey'           => 'SearchKey',
        'connectionDomain'    => 'ConnectionDomain',
        'port'                => 'Port',
        'userName'            => 'UserName',
        'instanceStatus'      => 'InstanceStatus',
        'regionId'            => 'RegionId',
        'capacity'            => 'Capacity',
        'instanceClass'       => 'InstanceClass',
        'QPS'                 => 'QPS',
        'bandwidth'           => 'Bandwidth',
        'connections'         => 'Connections',
        'zoneId'              => 'ZoneId',
        'config'              => 'Config',
        'chargeType'          => 'ChargeType',
        'networkType'         => 'NetworkType',
        'vpcId'               => 'VpcId',
        'vSwitchId'           => 'VSwitchId',
        'privateIp'           => 'PrivateIp',
        'createTime'          => 'CreateTime',
        'endTime'             => 'EndTime',
        'hasRenewChangeOrder' => 'HasRenewChangeOrder',
        'isRds'               => 'IsRds',
        'instanceType'        => 'InstanceType',
        'architectureType'    => 'ArchitectureType',
        'nodeType'            => 'NodeType',
        'packageType'         => 'PackageType',
        'engineVersion'       => 'EngineVersion',
        'destroyTime'         => 'DestroyTime',
        'connectionMode'      => 'ConnectionMode',
        'resourceGroupId'     => 'ResourceGroupId',
        'shardCount'          => 'ShardCount',
        'tags'                => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->replacateId) {
            $res['ReplacateId'] = $this->replacateId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->searchKey) {
            $res['SearchKey'] = $this->searchKey;
        }
        if (null !== $this->connectionDomain) {
            $res['ConnectionDomain'] = $this->connectionDomain;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
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
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->architectureType) {
            $res['ArchitectureType'] = $this->architectureType;
        }
        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }
        if (null !== $this->packageType) {
            $res['PackageType'] = $this->packageType;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->destroyTime) {
            $res['DestroyTime'] = $this->destroyTime;
        }
        if (null !== $this->connectionMode) {
            $res['ConnectionMode'] = $this->connectionMode;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->shardCount) {
            $res['ShardCount'] = $this->shardCount;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
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
        if (isset($map['ReplacateId'])) {
            $model->replacateId = $map['ReplacateId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['SearchKey'])) {
            $model->searchKey = $map['SearchKey'];
        }
        if (isset($map['ConnectionDomain'])) {
            $model->connectionDomain = $map['ConnectionDomain'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
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
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['ArchitectureType'])) {
            $model->architectureType = $map['ArchitectureType'];
        }
        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }
        if (isset($map['PackageType'])) {
            $model->packageType = $map['PackageType'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['DestroyTime'])) {
            $model->destroyTime = $map['DestroyTime'];
        }
        if (isset($map['ConnectionMode'])) {
            $model->connectionMode = $map['ConnectionMode'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ShardCount'])) {
            $model->shardCount = $map['ShardCount'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }

        return $model;
    }
}
