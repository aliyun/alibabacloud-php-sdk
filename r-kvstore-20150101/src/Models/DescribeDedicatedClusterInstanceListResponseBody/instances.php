<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeDedicatedClusterInstanceListResponseBody;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeDedicatedClusterInstanceListResponseBody\instances\instanceNodeList;
use AlibabaCloud\Tea\Model;

class instances extends Model
{
    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var int
     */
    public $characterType;

    /**
     * @var string
     */
    public $vswitchId;

    /**
     * @var string
     */
    public $maintainStartTime;

    /**
     * @var string
     */
    public $instanceClass;

    /**
     * @var string
     */
    public $connectionDomain;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $maintainEndTime;

    /**
     * @var string
     */
    public $storageType;

    /**
     * @var instanceNodeList[]
     */
    public $instanceNodeList;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $bandWidth;

    /**
     * @var int
     */
    public $currentBandWidth;

    /**
     * @var string
     */
    public $engineVersion;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var string
     */
    public $instanceStatus;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var int
     */
    public $shardCount;

    /**
     * @var string
     */
    public $customId;

    /**
     * @var string
     */
    public $clusterId;
    protected $_name = [
        'vpcId'             => 'VpcId',
        'characterType'     => 'CharacterType',
        'vswitchId'         => 'VswitchId',
        'maintainStartTime' => 'MaintainStartTime',
        'instanceClass'     => 'InstanceClass',
        'connectionDomain'  => 'ConnectionDomain',
        'createTime'        => 'CreateTime',
        'maintainEndTime'   => 'MaintainEndTime',
        'storageType'       => 'StorageType',
        'instanceNodeList'  => 'InstanceNodeList',
        'instanceId'        => 'InstanceId',
        'bandWidth'         => 'BandWidth',
        'currentBandWidth'  => 'CurrentBandWidth',
        'engineVersion'     => 'EngineVersion',
        'regionId'          => 'RegionId',
        'instanceName'      => 'InstanceName',
        'zoneId'            => 'ZoneId',
        'clusterName'       => 'ClusterName',
        'instanceStatus'    => 'InstanceStatus',
        'engine'            => 'Engine',
        'shardCount'        => 'ShardCount',
        'customId'          => 'CustomId',
        'clusterId'         => 'ClusterId',
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
        if (null !== $this->characterType) {
            $res['CharacterType'] = $this->characterType;
        }
        if (null !== $this->vswitchId) {
            $res['VswitchId'] = $this->vswitchId;
        }
        if (null !== $this->maintainStartTime) {
            $res['MaintainStartTime'] = $this->maintainStartTime;
        }
        if (null !== $this->instanceClass) {
            $res['InstanceClass'] = $this->instanceClass;
        }
        if (null !== $this->connectionDomain) {
            $res['ConnectionDomain'] = $this->connectionDomain;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->maintainEndTime) {
            $res['MaintainEndTime'] = $this->maintainEndTime;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
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
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->bandWidth) {
            $res['BandWidth'] = $this->bandWidth;
        }
        if (null !== $this->currentBandWidth) {
            $res['CurrentBandWidth'] = $this->currentBandWidth;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->instanceStatus) {
            $res['InstanceStatus'] = $this->instanceStatus;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->shardCount) {
            $res['ShardCount'] = $this->shardCount;
        }
        if (null !== $this->customId) {
            $res['CustomId'] = $this->customId;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
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
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['CharacterType'])) {
            $model->characterType = $map['CharacterType'];
        }
        if (isset($map['VswitchId'])) {
            $model->vswitchId = $map['VswitchId'];
        }
        if (isset($map['MaintainStartTime'])) {
            $model->maintainStartTime = $map['MaintainStartTime'];
        }
        if (isset($map['InstanceClass'])) {
            $model->instanceClass = $map['InstanceClass'];
        }
        if (isset($map['ConnectionDomain'])) {
            $model->connectionDomain = $map['ConnectionDomain'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['MaintainEndTime'])) {
            $model->maintainEndTime = $map['MaintainEndTime'];
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['BandWidth'])) {
            $model->bandWidth = $map['BandWidth'];
        }
        if (isset($map['CurrentBandWidth'])) {
            $model->currentBandWidth = $map['CurrentBandWidth'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['InstanceStatus'])) {
            $model->instanceStatus = $map['InstanceStatus'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['ShardCount'])) {
            $model->shardCount = $map['ShardCount'];
        }
        if (isset($map['CustomId'])) {
            $model->customId = $map['CustomId'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        return $model;
    }
}
