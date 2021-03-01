<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListFlowControlsResponseBody\flowControlsMap\appList;

use AlibabaCloud\Tea\Model;

class app extends Model
{
    /**
     * @var string
     */
    public $slbId;

    /**
     * @var string
     */
    public $extSlbIp;

    /**
     * @var string
     */
    public $healthCheckUrl;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var int
     */
    public $slbPort;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $applicationType;

    /**
     * @var string
     */
    public $extSlbId;

    /**
     * @var int
     */
    public $port;

    /**
     * @var int
     */
    public $runningInstanceCount;

    /**
     * @var string
     */
    public $slbIp;

    /**
     * @var int
     */
    public $buildPackageId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var bool
     */
    public $dockerize;

    /**
     * @var int
     */
    public $cpu;

    /**
     * @var int
     */
    public $instanceCount;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $clusterType;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var int
     */
    public $memory;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $clusterId;
    protected $_name = [
        'slbId'                => 'SlbId',
        'extSlbIp'             => 'ExtSlbIp',
        'healthCheckUrl'       => 'HealthCheckUrl',
        'owner'                => 'Owner',
        'slbPort'              => 'SlbPort',
        'createTime'           => 'CreateTime',
        'userId'               => 'UserId',
        'applicationType'      => 'ApplicationType',
        'extSlbId'             => 'ExtSlbId',
        'port'                 => 'Port',
        'runningInstanceCount' => 'RunningInstanceCount',
        'slbIp'                => 'SlbIp',
        'buildPackageId'       => 'BuildPackageId',
        'regionId'             => 'RegionId',
        'dockerize'            => 'Dockerize',
        'cpu'                  => 'Cpu',
        'instanceCount'        => 'InstanceCount',
        'description'          => 'Description',
        'clusterType'          => 'ClusterType',
        'appId'                => 'AppId',
        'memory'               => 'Memory',
        'name'                 => 'Name',
        'clusterId'            => 'ClusterId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->slbId) {
            $res['SlbId'] = $this->slbId;
        }
        if (null !== $this->extSlbIp) {
            $res['ExtSlbIp'] = $this->extSlbIp;
        }
        if (null !== $this->healthCheckUrl) {
            $res['HealthCheckUrl'] = $this->healthCheckUrl;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->slbPort) {
            $res['SlbPort'] = $this->slbPort;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->applicationType) {
            $res['ApplicationType'] = $this->applicationType;
        }
        if (null !== $this->extSlbId) {
            $res['ExtSlbId'] = $this->extSlbId;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->runningInstanceCount) {
            $res['RunningInstanceCount'] = $this->runningInstanceCount;
        }
        if (null !== $this->slbIp) {
            $res['SlbIp'] = $this->slbIp;
        }
        if (null !== $this->buildPackageId) {
            $res['BuildPackageId'] = $this->buildPackageId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->dockerize) {
            $res['Dockerize'] = $this->dockerize;
        }
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->instanceCount) {
            $res['InstanceCount'] = $this->instanceCount;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return app
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SlbId'])) {
            $model->slbId = $map['SlbId'];
        }
        if (isset($map['ExtSlbIp'])) {
            $model->extSlbIp = $map['ExtSlbIp'];
        }
        if (isset($map['HealthCheckUrl'])) {
            $model->healthCheckUrl = $map['HealthCheckUrl'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['SlbPort'])) {
            $model->slbPort = $map['SlbPort'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['ApplicationType'])) {
            $model->applicationType = $map['ApplicationType'];
        }
        if (isset($map['ExtSlbId'])) {
            $model->extSlbId = $map['ExtSlbId'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['RunningInstanceCount'])) {
            $model->runningInstanceCount = $map['RunningInstanceCount'];
        }
        if (isset($map['SlbIp'])) {
            $model->slbIp = $map['SlbIp'];
        }
        if (isset($map['BuildPackageId'])) {
            $model->buildPackageId = $map['BuildPackageId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Dockerize'])) {
            $model->dockerize = $map['Dockerize'];
        }
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['InstanceCount'])) {
            $model->instanceCount = $map['InstanceCount'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        return $model;
    }
}
