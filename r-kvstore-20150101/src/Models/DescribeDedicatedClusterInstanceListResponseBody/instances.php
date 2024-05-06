<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeDedicatedClusterInstanceListResponseBody;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeDedicatedClusterInstanceListResponseBody\instances\instanceNodeList;
use AlibabaCloud\Tea\Model;

class instances extends Model
{
    /**
     * @description The default bandwidth of the instance. Unit: Mbit/s.
     *
     * @example 24
     *
     * @var int
     */
    public $bandWidth;

    /**
     * @description The architecture of the instance. Valid values:
     *
     *   **logic**: cluster
     *   **normal**: standard
     *
     * @example logic
     *
     * @var string
     */
    public $characterType;

    /**
     * @description The ID of the dedicated cluster to which the instance belongs.
     *
     * @example dhg-rx71fc5ndh9o****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The name of the dedicated cluster to which the instance belongs.
     *
     * @example testname
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description The private endpoint of the instance.
     *
     * @example r-t4ncdi1dgi0ja8****.redis.hangzhou.rds.aliyuncs.com
     *
     * @var string
     */
    public $connectionDomain;

    /**
     * @description The time when the instance was created. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2021-05-06T07:09:40Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The current bandwidth of the instance, which is the sum of the default bandwidth and any extra bandwidth that is purchased. Unit: Mbit/s.
     *
     * @example 50
     *
     * @var int
     */
    public $currentBandWidth;

    /**
     * @description An internal parameter used for the maintenance and management of instances.
     *
     * @example 4652****
     *
     * @var string
     */
    public $customId;

    /**
     * @description The database engine. The return value is **redis**.
     *
     * @example redis
     *
     * @var string
     */
    public $engine;

    /**
     * @description The database engine version of the instance. The return value is **5.0**.
     *
     * @example 5.0
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @description The instance type.
     *
     * @example redis.cluster.sharding.common.ce
     *
     * @var string
     */
    public $instanceClass;

    /**
     * @description The ID of the instance.
     *
     * @example r-bp1e7vl6ygf1yq****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The instance name.
     *
     * @example testdb
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The nodes.
     *
     * @var instanceNodeList[]
     */
    public $instanceNodeList;

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
     * @description The end time of the maintenance window. The time is in the *HH:mm*Z format. The time is displayed in UTC.
     *
     * @example 17:00Z
     *
     * @var string
     */
    public $maintainEndTime;

    /**
     * @description The start time of the maintenance window. The time is in the *HH:mm*Z format. The time is displayed in UTC.
     *
     * @example 16:00Z
     *
     * @var string
     */
    public $maintainStartTime;

    /**
     * @description The number of proxy nodes.
     *
     * >
     *
     *   If the return value is **0**, the proxy mode is disabled for the instance. If the return value is an integer greater than **0**, such as **1**, the proxy mode is enabled for the instance.
     *
     *   This parameter is returned only when the instance is a cluster instance. For more information about cluster instances, see [Cluster master-replica instances](~~52228~~).
     *
     * @example 1
     *
     * @var int
     */
    public $proxyCount;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The number of shards.
     *
     * >  This parameter is returned only when the instance is a cluster instance. For more information about cluster instances, see [Cluster master-replica instances](~~52228~~).
     * @example 3
     *
     * @var int
     */
    public $shardCount;

    /**
     * @description The storage type of the instance. The return value is LOCAL_SSD, which indicates [enhanced SSDs (ESSDs)](~~122389~~).
     *
     * @example LOCAL_SSD
     *
     * @var string
     */
    public $storageType;

    /**
     * @description The VPC ID.
     *
     * @example vpc-t4n2clc70t3hqwsrr****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The vSwitch ID.
     *
     * @example vsw-t4nvrca24dczppq44****
     *
     * @var string
     */
    public $vswitchId;

    /**
     * @description The zone ID.
     *
     * @example cn-hangzhou-e
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'bandWidth'         => 'BandWidth',
        'characterType'     => 'CharacterType',
        'clusterId'         => 'ClusterId',
        'clusterName'       => 'ClusterName',
        'connectionDomain'  => 'ConnectionDomain',
        'createTime'        => 'CreateTime',
        'currentBandWidth'  => 'CurrentBandWidth',
        'customId'          => 'CustomId',
        'engine'            => 'Engine',
        'engineVersion'     => 'EngineVersion',
        'instanceClass'     => 'InstanceClass',
        'instanceId'        => 'InstanceId',
        'instanceName'      => 'InstanceName',
        'instanceNodeList'  => 'InstanceNodeList',
        'instanceStatus'    => 'InstanceStatus',
        'maintainEndTime'   => 'MaintainEndTime',
        'maintainStartTime' => 'MaintainStartTime',
        'proxyCount'        => 'ProxyCount',
        'regionId'          => 'RegionId',
        'shardCount'        => 'ShardCount',
        'storageType'       => 'StorageType',
        'vpcId'             => 'VpcId',
        'vswitchId'         => 'VswitchId',
        'zoneId'            => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandWidth) {
            $res['BandWidth'] = $this->bandWidth;
        }
        if (null !== $this->characterType) {
            $res['CharacterType'] = $this->characterType;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->connectionDomain) {
            $res['ConnectionDomain'] = $this->connectionDomain;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->currentBandWidth) {
            $res['CurrentBandWidth'] = $this->currentBandWidth;
        }
        if (null !== $this->customId) {
            $res['CustomId'] = $this->customId;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
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
        if (null !== $this->instanceNodeList) {
            $res['InstanceNodeList'] = [];
            if (null !== $this->instanceNodeList && \is_array($this->instanceNodeList)) {
                $n = 0;
                foreach ($this->instanceNodeList as $item) {
                    $res['InstanceNodeList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->instanceStatus) {
            $res['InstanceStatus'] = $this->instanceStatus;
        }
        if (null !== $this->maintainEndTime) {
            $res['MaintainEndTime'] = $this->maintainEndTime;
        }
        if (null !== $this->maintainStartTime) {
            $res['MaintainStartTime'] = $this->maintainStartTime;
        }
        if (null !== $this->proxyCount) {
            $res['ProxyCount'] = $this->proxyCount;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->shardCount) {
            $res['ShardCount'] = $this->shardCount;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vswitchId) {
            $res['VswitchId'] = $this->vswitchId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BandWidth'])) {
            $model->bandWidth = $map['BandWidth'];
        }
        if (isset($map['CharacterType'])) {
            $model->characterType = $map['CharacterType'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['ConnectionDomain'])) {
            $model->connectionDomain = $map['ConnectionDomain'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CurrentBandWidth'])) {
            $model->currentBandWidth = $map['CurrentBandWidth'];
        }
        if (isset($map['CustomId'])) {
            $model->customId = $map['CustomId'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
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
        if (isset($map['InstanceNodeList'])) {
            if (!empty($map['InstanceNodeList'])) {
                $model->instanceNodeList = [];
                $n                       = 0;
                foreach ($map['InstanceNodeList'] as $item) {
                    $model->instanceNodeList[$n++] = null !== $item ? instanceNodeList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['InstanceStatus'])) {
            $model->instanceStatus = $map['InstanceStatus'];
        }
        if (isset($map['MaintainEndTime'])) {
            $model->maintainEndTime = $map['MaintainEndTime'];
        }
        if (isset($map['MaintainStartTime'])) {
            $model->maintainStartTime = $map['MaintainStartTime'];
        }
        if (isset($map['ProxyCount'])) {
            $model->proxyCount = $map['ProxyCount'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ShardCount'])) {
            $model->shardCount = $map['ShardCount'];
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VswitchId'])) {
            $model->vswitchId = $map['VswitchId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
