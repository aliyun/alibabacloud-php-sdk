<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetApplicationResponseBody;

use AlibabaCloud\Tea\Model;

class application extends Model
{
    /**
     * @description The ID of the application.
     *
     * @example cfac****-847e-4325-ad56-b5c2bc54****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The current status of the Kubernetes application, which is used to determine whether the application is in a stable state. If the application is in an unstable state, related configuration operations are prohibited. Valid values:
     *
     *   ready: The application is in the ready state and can be changed.
     *   progressive: The application is being changed.
     *   pending: The application change is blocked.
     *   failed: The application fails to be changed.
     *
     * In these states, ready is a stable state and other states are unstable.
     * @example ready
     *
     * @var string
     */
    public $appPhase;

    /**
     * @description The deployment type of the application. Valid values:
     *
     *   War: The application is deployed by using a WAR package.
     *   FatJar: The application is deployed by using a JAR package.
     *   Empty: The application is not deployed.
     *
     * @example FatJar
     *
     * @var string
     */
    public $applicationType;

    /**
     * @description The build package number of Enterprise Distributed Application Service (EDAS) Container.
     *
     * @example 59
     *
     * @var int
     */
    public $buildPackageId;

    /**
     * @description The ID of the ECS cluster in which the application is deployed.
     *
     * @example 5ffc5895-****-b03a-c223c6c3****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The type of the cluster. Valid values:
     *
     *   0: regular Docker cluster
     *   1: Swarm cluster
     *   2: ECS cluster
     *   3: Kubernetes cluster
     *   4: cluster in which Pandora automatically registers applications
     *
     * @example 2
     *
     * @var string
     */
    public $clusterType;

    /**
     * @description The number of CPU cores.
     *
     * @example 1
     *
     * @var int
     */
    public $cpu;

    /**
     * @description The time when the application was created. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1610550324226
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The description of the application.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description Indicates whether the application is a Docker application. Valid values:
     *
     *   false: The application is not a Docker application.
     *   true: The application is a Docker application.
     *
     * @example false
     *
     * @var bool
     */
    public $dockerize;

    /**
     * @description The email address of the account.
     *
     * @example xxxx@gmail.com
     *
     * @var string
     */
    public $email;

    /**
     * @description Indicates whether the port health check is enabled. Valid values:
     *
     *   true: The port health check is enabled.
     *   false: The port health check is disabled.
     *
     * If the port health check is enabled, EDAS checks whether a port exists during application startup. If the port exists, the application is considered to have started.
     * @example false
     *
     * @var bool
     */
    public $enablePortCheck;

    /**
     * @description Indicates whether the URL health check is enabled. Valid values:
     *
     *   true: The URL health check is enabled.
     *   false: The URL health check is disabled.
     *
     * If the URL health check is enabled, EDAS attempts to detect the specified URL during application startup. If EDAS detects the specified URL, the application is considered to have started.
     * @example false
     *
     * @var bool
     */
    public $enableUrlCheck;

    /**
     * @description The ID of the Internet-facing SLB instance that is bound to the application.
     *
     * @example lb-bp1vceck3s3b9xs6x****
     *
     * @var string
     */
    public $extSlbId;

    /**
     * @description The IP address of the Internet-facing Server Load Balancer (SLB) instance that is bound to the application.
     *
     * @example 47.114.xxx.xx
     *
     * @var string
     */
    public $extSlbIp;

    /**
     * @description The name of the Internet-facing SLB instance that is bound to the application.
     *
     * @example aa8eee383db084f42aebc4d9f52c****
     *
     * @var string
     */
    public $extSlbName;

    /**
     * @var string
     */
    public $haveManageAccess;

    /**
     * @description The health check URL of the application.
     *
     * @example http://127.0.0.1:8080/xyz.html
     *
     * @var string
     */
    public $healthCheckUrl;

    /**
     * @description The number of instances deployed with the application.
     *
     * @example 1
     *
     * @var int
     */
    public $instanceCount;

    /**
     * @description The memory size of the application instance. Unit: MB.
     *
     * @example 0
     *
     * @var int
     */
    public $memory;

    /**
     * @description The name of the application.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description The namespace to which the application belongs.
     *
     * @example doc-test
     *
     * @var string
     */
    public $nameSpace;

    /**
     * @description The ID of the user who created the application.
     *
     * @example ouou@117274586608****
     *
     * @var string
     */
    public $owner;

    /**
     * @description The service port of the application.
     *
     * @example 8080
     *
     * @var int
     */
    public $port;

    /**
     * @description The ID of the region in which the application is deployed.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The number of running instances for the application.
     *
     * @example 1
     *
     * @var int
     */
    public $runningInstanceCount;

    /**
     * @description The ID of the internal-facing SLB instance that is bound to the application.
     *
     * @example lb-bp****ck3s3b9xs6x****
     *
     * @var string
     */
    public $slbId;

    /**
     * @description The information about the internal-facing SLB instance that is bound to the application.
     *
     * @example test
     *
     * @var string
     */
    public $slbInfo;

    /**
     * @description The IP address of the internal-facing SLB instance that is bound to the application.
     *
     * @example 192.168.0.100
     *
     * @var string
     */
    public $slbIp;

    /**
     * @description The name of the internal-facing SLB instance that is bound to the application.
     *
     * @example test
     *
     * @var string
     */
    public $slbName;

    /**
     * @description The port of the internal-facing SLB instance that is bound to the application.
     *
     * @example 80
     *
     * @var int
     */
    public $slbPort;

    /**
     * @description The ID of the Alibaba Cloud account.
     *
     * @example test@dd******
     *
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $workloadType;
    protected $_name = [
        'appId'                => 'AppId',
        'appPhase'             => 'AppPhase',
        'applicationType'      => 'ApplicationType',
        'buildPackageId'       => 'BuildPackageId',
        'clusterId'            => 'ClusterId',
        'clusterType'          => 'ClusterType',
        'cpu'                  => 'Cpu',
        'createTime'           => 'CreateTime',
        'description'          => 'Description',
        'dockerize'            => 'Dockerize',
        'email'                => 'Email',
        'enablePortCheck'      => 'EnablePortCheck',
        'enableUrlCheck'       => 'EnableUrlCheck',
        'extSlbId'             => 'ExtSlbId',
        'extSlbIp'             => 'ExtSlbIp',
        'extSlbName'           => 'ExtSlbName',
        'haveManageAccess'     => 'HaveManageAccess',
        'healthCheckUrl'       => 'HealthCheckUrl',
        'instanceCount'        => 'InstanceCount',
        'memory'               => 'Memory',
        'name'                 => 'Name',
        'nameSpace'            => 'NameSpace',
        'owner'                => 'Owner',
        'port'                 => 'Port',
        'regionId'             => 'RegionId',
        'resourceGroupId'      => 'ResourceGroupId',
        'runningInstanceCount' => 'RunningInstanceCount',
        'slbId'                => 'SlbId',
        'slbInfo'              => 'SlbInfo',
        'slbIp'                => 'SlbIp',
        'slbName'              => 'SlbName',
        'slbPort'              => 'SlbPort',
        'userId'               => 'UserId',
        'workloadType'         => 'WorkloadType',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return application
     */
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
