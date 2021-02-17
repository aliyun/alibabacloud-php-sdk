<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDedicatedClusterInstanceListResponseBody\instances;

use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDedicatedClusterInstanceListResponseBody\instances\dbInstance\instanceNodeList;
use AlibabaCloud\Tea\Model;

class dbInstance extends Model
{
    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
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
     * @var instanceNodeList
     */
    public $instanceNodeList;

    /**
     * @var string
     */
    public $instanceId;

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
    public $region;

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
        'createTime'        => 'CreateTime',
        'maintainEndTime'   => 'MaintainEndTime',
        'storageType'       => 'StorageType',
        'instanceNodeList'  => 'InstanceNodeList',
        'instanceId'        => 'InstanceId',
        'engineVersion'     => 'EngineVersion',
        'regionId'          => 'RegionId',
        'instanceName'      => 'InstanceName',
        'region'            => 'Region',
        'zoneId'            => 'ZoneId',
        'clusterName'       => 'ClusterName',
        'instanceStatus'    => 'InstanceStatus',
        'engine'            => 'Engine',
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
            $res['InstanceNodeList'] = null !== $this->instanceNodeList ? $this->instanceNodeList->toMap() : null;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (null !== $this->region) {
            $res['Region'] = $this->region;
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
     * @return dbInstance
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
            $model->instanceNodeList = instanceNodeList::fromMap($map['InstanceNodeList']);
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
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
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
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
        if (isset($map['CustomId'])) {
            $model->customId = $map['CustomId'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        return $model;
    }
}
