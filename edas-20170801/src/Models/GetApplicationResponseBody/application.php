<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetApplicationResponseBody;

use AlibabaCloud\Dara\Model;

class application extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $appPhase;

    /**
     * @var string
     */
    public $applicationType;

    /**
     * @var int
     */
    public $buildPackageId;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $clusterType;

    /**
     * @var int
     */
    public $cpu;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $dockerize;

    /**
     * @var string
     */
    public $email;

    /**
     * @var bool
     */
    public $enablePortCheck;

    /**
     * @var bool
     */
    public $enableUrlCheck;

    /**
     * @var string
     */
    public $extSlbId;

    /**
     * @var string
     */
    public $extSlbIp;

    /**
     * @var string
     */
    public $extSlbName;

    /**
     * @var string
     */
    public $haveManageAccess;

    /**
     * @var string
     */
    public $healthCheckUrl;

    /**
     * @var int
     */
    public $instanceCount;

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
    public $nameSpace;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var int
     */
    public $runningInstanceCount;

    /**
     * @var string
     */
    public $slbId;

    /**
     * @var string
     */
    public $slbInfo;

    /**
     * @var string
     */
    public $slbIp;

    /**
     * @var string
     */
    public $slbName;

    /**
     * @var int
     */
    public $slbPort;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $workloadType;
    protected $_name = [
        'appId' => 'AppId',
        'appPhase' => 'AppPhase',
        'applicationType' => 'ApplicationType',
        'buildPackageId' => 'BuildPackageId',
        'clusterId' => 'ClusterId',
        'clusterType' => 'ClusterType',
        'cpu' => 'Cpu',
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'dockerize' => 'Dockerize',
        'email' => 'Email',
        'enablePortCheck' => 'EnablePortCheck',
        'enableUrlCheck' => 'EnableUrlCheck',
        'extSlbId' => 'ExtSlbId',
        'extSlbIp' => 'ExtSlbIp',
        'extSlbName' => 'ExtSlbName',
        'haveManageAccess' => 'HaveManageAccess',
        'healthCheckUrl' => 'HealthCheckUrl',
        'instanceCount' => 'InstanceCount',
        'memory' => 'Memory',
        'name' => 'Name',
        'nameSpace' => 'NameSpace',
        'owner' => 'Owner',
        'port' => 'Port',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'runningInstanceCount' => 'RunningInstanceCount',
        'slbId' => 'SlbId',
        'slbInfo' => 'SlbInfo',
        'slbIp' => 'SlbIp',
        'slbName' => 'SlbName',
        'slbPort' => 'SlbPort',
        'userId' => 'UserId',
        'workloadType' => 'WorkloadType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->appPhase) {
            $res['AppPhase'] = $this->appPhase;
        }

        if (null !== $this->applicationType) {
            $res['ApplicationType'] = $this->applicationType;
        }

        if (null !== $this->buildPackageId) {
            $res['BuildPackageId'] = $this->buildPackageId;
        }

        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }

        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->dockerize) {
            $res['Dockerize'] = $this->dockerize;
        }

        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }

        if (null !== $this->enablePortCheck) {
            $res['EnablePortCheck'] = $this->enablePortCheck;
        }

        if (null !== $this->enableUrlCheck) {
            $res['EnableUrlCheck'] = $this->enableUrlCheck;
        }

        if (null !== $this->extSlbId) {
            $res['ExtSlbId'] = $this->extSlbId;
        }

        if (null !== $this->extSlbIp) {
            $res['ExtSlbIp'] = $this->extSlbIp;
        }

        if (null !== $this->extSlbName) {
            $res['ExtSlbName'] = $this->extSlbName;
        }

        if (null !== $this->haveManageAccess) {
            $res['HaveManageAccess'] = $this->haveManageAccess;
        }

        if (null !== $this->healthCheckUrl) {
            $res['HealthCheckUrl'] = $this->healthCheckUrl;
        }

        if (null !== $this->instanceCount) {
            $res['InstanceCount'] = $this->instanceCount;
        }

        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->nameSpace) {
            $res['NameSpace'] = $this->nameSpace;
        }

        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }

        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->runningInstanceCount) {
            $res['RunningInstanceCount'] = $this->runningInstanceCount;
        }

        if (null !== $this->slbId) {
            $res['SlbId'] = $this->slbId;
        }

        if (null !== $this->slbInfo) {
            $res['SlbInfo'] = $this->slbInfo;
        }

        if (null !== $this->slbIp) {
            $res['SlbIp'] = $this->slbIp;
        }

        if (null !== $this->slbName) {
            $res['SlbName'] = $this->slbName;
        }

        if (null !== $this->slbPort) {
            $res['SlbPort'] = $this->slbPort;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        if (null !== $this->workloadType) {
            $res['WorkloadType'] = $this->workloadType;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['AppPhase'])) {
            $model->appPhase = $map['AppPhase'];
        }

        if (isset($map['ApplicationType'])) {
            $model->applicationType = $map['ApplicationType'];
        }

        if (isset($map['BuildPackageId'])) {
            $model->buildPackageId = $map['BuildPackageId'];
        }

        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }

        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Dockerize'])) {
            $model->dockerize = $map['Dockerize'];
        }

        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }

        if (isset($map['EnablePortCheck'])) {
            $model->enablePortCheck = $map['EnablePortCheck'];
        }

        if (isset($map['EnableUrlCheck'])) {
            $model->enableUrlCheck = $map['EnableUrlCheck'];
        }

        if (isset($map['ExtSlbId'])) {
            $model->extSlbId = $map['ExtSlbId'];
        }

        if (isset($map['ExtSlbIp'])) {
            $model->extSlbIp = $map['ExtSlbIp'];
        }

        if (isset($map['ExtSlbName'])) {
            $model->extSlbName = $map['ExtSlbName'];
        }

        if (isset($map['HaveManageAccess'])) {
            $model->haveManageAccess = $map['HaveManageAccess'];
        }

        if (isset($map['HealthCheckUrl'])) {
            $model->healthCheckUrl = $map['HealthCheckUrl'];
        }

        if (isset($map['InstanceCount'])) {
            $model->instanceCount = $map['InstanceCount'];
        }

        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NameSpace'])) {
            $model->nameSpace = $map['NameSpace'];
        }

        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }

        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['RunningInstanceCount'])) {
            $model->runningInstanceCount = $map['RunningInstanceCount'];
        }

        if (isset($map['SlbId'])) {
            $model->slbId = $map['SlbId'];
        }

        if (isset($map['SlbInfo'])) {
            $model->slbInfo = $map['SlbInfo'];
        }

        if (isset($map['SlbIp'])) {
            $model->slbIp = $map['SlbIp'];
        }

        if (isset($map['SlbName'])) {
            $model->slbName = $map['SlbName'];
        }

        if (isset($map['SlbPort'])) {
            $model->slbPort = $map['SlbPort'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        if (isset($map['WorkloadType'])) {
            $model->workloadType = $map['WorkloadType'];
        }

        return $model;
    }
}
