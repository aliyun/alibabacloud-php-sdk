<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetApplicationResponseBody;

use AlibabaCloud\Tea\Model;

class application extends Model
{
    /**
     * @var string
     */
    public $extSlbIp;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var int
     */
    public $slbPort;

    /**
     * @var string
     */
    public $nameSpace;

    /**
     * @var string
     */
    public $extSlbName;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $userId;

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
     * @var bool
     */
    public $dockerize;

    /**
     * @var int
     */
    public $instanceCount;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $slbInfo;

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

    /**
     * @var string
     */
    public $healthCheckUrl;

    /**
     * @var string
     */
    public $slbId;

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
    public $buildPackageId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $email;

    /**
     * @var int
     */
    public $cpu;

    /**
     * @var string
     */
    public $clusterType;

    /**
     * @var string
     */
    public $slbName;
    protected $_name = [
        'extSlbIp'             => 'ExtSlbIp',
        'owner'                => 'Owner',
        'slbPort'              => 'SlbPort',
        'nameSpace'            => 'NameSpace',
        'extSlbName'           => 'ExtSlbName',
        'createTime'           => 'CreateTime',
        'userId'               => 'UserId',
        'port'                 => 'Port',
        'runningInstanceCount' => 'RunningInstanceCount',
        'slbIp'                => 'SlbIp',
        'dockerize'            => 'Dockerize',
        'instanceCount'        => 'InstanceCount',
        'description'          => 'Description',
        'appId'                => 'AppId',
        'slbInfo'              => 'SlbInfo',
        'memory'               => 'Memory',
        'name'                 => 'Name',
        'clusterId'            => 'ClusterId',
        'healthCheckUrl'       => 'HealthCheckUrl',
        'slbId'                => 'SlbId',
        'applicationType'      => 'ApplicationType',
        'extSlbId'             => 'ExtSlbId',
        'buildPackageId'       => 'BuildPackageId',
        'regionId'             => 'RegionId',
        'email'                => 'Email',
        'cpu'                  => 'Cpu',
        'clusterType'          => 'ClusterType',
        'slbName'              => 'SlbName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->extSlbIp) {
            $res['ExtSlbIp'] = $this->extSlbIp;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->slbPort) {
            $res['SlbPort'] = $this->slbPort;
        }
        if (null !== $this->nameSpace) {
            $res['NameSpace'] = $this->nameSpace;
        }
        if (null !== $this->extSlbName) {
            $res['ExtSlbName'] = $this->extSlbName;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (null !== $this->dockerize) {
            $res['Dockerize'] = $this->dockerize;
        }
        if (null !== $this->instanceCount) {
            $res['InstanceCount'] = $this->instanceCount;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->slbInfo) {
            $res['SlbInfo'] = $this->slbInfo;
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
        if (null !== $this->healthCheckUrl) {
            $res['HealthCheckUrl'] = $this->healthCheckUrl;
        }
        if (null !== $this->slbId) {
            $res['SlbId'] = $this->slbId;
        }
        if (null !== $this->applicationType) {
            $res['ApplicationType'] = $this->applicationType;
        }
        if (null !== $this->extSlbId) {
            $res['ExtSlbId'] = $this->extSlbId;
        }
        if (null !== $this->buildPackageId) {
            $res['BuildPackageId'] = $this->buildPackageId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }
        if (null !== $this->slbName) {
            $res['SlbName'] = $this->slbName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return application
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExtSlbIp'])) {
            $model->extSlbIp = $map['ExtSlbIp'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['SlbPort'])) {
            $model->slbPort = $map['SlbPort'];
        }
        if (isset($map['NameSpace'])) {
            $model->nameSpace = $map['NameSpace'];
        }
        if (isset($map['ExtSlbName'])) {
            $model->extSlbName = $map['ExtSlbName'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
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
        if (isset($map['Dockerize'])) {
            $model->dockerize = $map['Dockerize'];
        }
        if (isset($map['InstanceCount'])) {
            $model->instanceCount = $map['InstanceCount'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['SlbInfo'])) {
            $model->slbInfo = $map['SlbInfo'];
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
        if (isset($map['HealthCheckUrl'])) {
            $model->healthCheckUrl = $map['HealthCheckUrl'];
        }
        if (isset($map['SlbId'])) {
            $model->slbId = $map['SlbId'];
        }
        if (isset($map['ApplicationType'])) {
            $model->applicationType = $map['ApplicationType'];
        }
        if (isset($map['ExtSlbId'])) {
            $model->extSlbId = $map['ExtSlbId'];
        }
        if (isset($map['BuildPackageId'])) {
            $model->buildPackageId = $map['BuildPackageId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }
        if (isset($map['SlbName'])) {
            $model->slbName = $map['SlbName'];
        }

        return $model;
    }
}
