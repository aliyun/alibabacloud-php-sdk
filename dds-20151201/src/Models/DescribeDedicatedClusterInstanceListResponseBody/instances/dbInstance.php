<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDedicatedClusterInstanceListResponseBody\instances;

use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDedicatedClusterInstanceListResponseBody\instances\dbInstance\instanceNodeList;
use AlibabaCloud\Tea\Model;

class dbInstance extends Model
{
    /**
     * @description The type of the ApsaraDB for MongoDB instance. Valid value: **normal**.
     *
     **normal**: a replica set instance.
     *
     * @example normal
     *
     * @var string
     */
    public $characterType;

    /**
     * @description The ID of the dedicated cluster to which the instance belongs.
     *
     * @example dhg-2x7*************
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The name of the dedicated cluster to which the instance belongs.
     *
     * @example TestCluster
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description The time when the instance was created. The time is displayed in the *yyyy*-*MM*-*dd*T*HH*:*mm*:*ss*Z format.
     *
     * @example 2020-10-09T06:12:04Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The instance ID of the backend O\&M platform.
     *
     * @example 123456789
     *
     * @var string
     */
    public $customId;

    /**
     * @description The database engine. Valid value: **MongoDB**.
     *
     * @example MongoDB
     *
     * @var string
     */
    public $engine;

    /**
     * @description The version number of the database engine. Valid value: **4.2**.
     *
     * @example 4.2
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @description The instance type. For more information, see **Table 1. Standalone or replica set instance types** in [Instance types](~~57141~~).
     *
     * @example mdb.shard.2x.small.s
     *
     * @var string
     */
    public $instanceClass;

    /**
     * @description The ID of the ApsaraDB for MongoDB instance.
     *
     * @example dds-t4n*************
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the ApsaraDB for MongoDB instance.
     *
     * @example TestInstance
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description Details about the instance nodes.
     *
     * @var instanceNodeList
     */
    public $instanceNodeList;

    /**
     * @description The status of the instance. More details of status, please see [instance status list](~~190071~~).
     *
     * @example 1
     *
     * @var string
     */
    public $instanceStatus;

    /**
     * @description The end time of the maintenance window. The time is in the *HH:mmZ* format. The time is displayed in UTC.
     *
     * @example 22:00Z
     *
     * @var string
     */
    public $maintainEndTime;

    /**
     * @description The start time of the maintenance window. The time is in the *HH:mm*Z format. The time is displayed in UTC.
     *
     * @example 18:00Z
     *
     * @var string
     */
    public $maintainStartTime;

    /**
     * @description The region where the instance is deployed.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @description The ID of the region where the instance is deployed.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The type of the storage.
     *
     * @example CLOUD_ESSD
     *
     * @var string
     */
    public $storageType;

    /**
     * @description The ID of the VPC.
     *
     * @example vpc-bpxxxxxxxx
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The vSwitch ID of the VPC.
     *
     * @example vsw-bpxxxxxxxx
     *
     * @var string
     */
    public $vswitchId;

    /**
     * @description The zone ID of the instance.
     *
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'characterType'     => 'CharacterType',
        'clusterId'         => 'ClusterId',
        'clusterName'       => 'ClusterName',
        'createTime'        => 'CreateTime',
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
        'region'            => 'Region',
        'regionId'          => 'RegionId',
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
        if (null !== $this->characterType) {
            $res['CharacterType'] = $this->characterType;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
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
            $res['InstanceNodeList'] = null !== $this->instanceNodeList ? $this->instanceNodeList->toMap() : null;
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
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
     * @return dbInstance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CharacterType'])) {
            $model->characterType = $map['CharacterType'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
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
            $model->instanceNodeList = instanceNodeList::fromMap($map['InstanceNodeList']);
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
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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
