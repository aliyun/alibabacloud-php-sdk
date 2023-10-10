<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\UpdateApplicationBaseInfoResponseBody;

use AlibabaCloud\Tea\Model;

class applcation extends Model
{
    /**
     * @description The ID of the application.
     *
     * @example c627c157-560d-43ff-****-************
     *
     * @var string
     */
    public $appId;

    /**
     * @description The deployment type of the application. Valid values:
     *
     *   War: The application is deployed by using a WAR package.
     *   FatJar: The application is deployed by using a JAR package.
     *   Image: The application is deployed by using an image.
     *   If this parameter is empty, the application is not deployed.
     *
     * @example FatJar
     *
     * @var string
     */
    public $applicationType;

    /**
     * @description The build package number of Enterprise Distributed Application Service (EDAS) Container.
     *
     * @example 58
     *
     * @var int
     */
    public $buildPackageId;

    /**
     * @description The ID of the cluster.
     *
     * @example d7730a49-629a-47bd-****-f45eb01f****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The type of the cluster. Valid values:
     *
     *   0: normal Docker cluster
     *   1: Swarm cluster
     *   2: ECS cluster
     *   3: self-managed Kubernetes cluster in EDAS
     *   4: cluster in which Pandora automatically registers applications
     *   5: Container Service for Kubernetes (ACK) clusters
     *
     * @example 2
     *
     * @var int
     */
    public $clusterType;

    /**
     * @description The number of CPU cores.
     *
     * @example 0
     *
     * @var int
     */
    public $cpu;

    /**
     * @description The time when the application was created. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1577259573911
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
     * @description Indicates whether the application is a Docker application.
     *
     * @example false
     *
     * @var bool
     */
    public $dockerize;

    /**
     * @description The ID of the Internet-facing SLB instance.
     *
     * @example ace93*******
     *
     * @var string
     */
    public $extSlbId;

    /**
     * @description The IP address of the Internet-facing Server Load Balancer (SLB) instance.
     *
     * @example 39.97.XX.XX
     *
     * @var string
     */
    public $extSlbIp;

    /**
     * @description The name of the Internet-facing SLB instance.
     *
     * @example test
     *
     * @var string
     */
    public $extSlbName;

    /**
     * @description The health check URL.
     *
     * @example http://127.0.XX.XX:8080/_etc.html
     *
     * @var string
     */
    public $healthCheckUrl;

    /**
     * @description The number of application instances.
     *
     * @example 1
     *
     * @var int
     */
    public $instanceCount;

    /**
     * @description The size of memory configured for an application instance. Unit: MB.
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
     * @description The owner of the application.
     *
     * @example test@aliyun_XXX.com
     *
     * @var string
     */
    public $owner;

    /**
     * @description The port used by the application.
     *
     * @example 8080
     *
     * @var int
     */
    public $port;

    /**
     * @description The ID of the region.
     *
     * @example cn-beijing:****
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The number of running application instances.
     *
     * @example 1
     *
     * @var int
     */
    public $runningInstanceCount;

    /**
     * @description The ID of the internal-facing SLB instance.
     *
     * @example a3d4*******
     *
     * @var string
     */
    public $slbId;

    /**
     * @description The IP address of the internal-facing SLB instance.
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $slbIp;

    /**
     * @description The name of the internal-facing SLB instance.
     *
     * @example test
     *
     * @var string
     */
    public $slbName;

    /**
     * @description The port used by the internal-facing SLB instance.
     *
     * @example 80
     *
     * @var int
     */
    public $slbPort;

    /**
     * @description The ID of the Alibaba Cloud account.
     *
     * @example edas_com***@****.***
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'appId'                => 'AppId',
        'applicationType'      => 'ApplicationType',
        'buildPackageId'       => 'BuildPackageId',
        'clusterId'            => 'ClusterId',
        'clusterType'          => 'ClusterType',
        'cpu'                  => 'Cpu',
        'createTime'           => 'CreateTime',
        'description'          => 'Description',
        'dockerize'            => 'Dockerize',
        'extSlbId'             => 'ExtSlbId',
        'extSlbIp'             => 'ExtSlbIp',
        'extSlbName'           => 'ExtSlbName',
        'healthCheckUrl'       => 'HealthCheckUrl',
        'instanceCount'        => 'InstanceCount',
        'memory'               => 'Memory',
        'name'                 => 'Name',
        'owner'                => 'Owner',
        'port'                 => 'Port',
        'regionId'             => 'RegionId',
        'runningInstanceCount' => 'RunningInstanceCount',
        'slbId'                => 'SlbId',
        'slbIp'                => 'SlbIp',
        'slbName'              => 'SlbName',
        'slbPort'              => 'SlbPort',
        'userId'               => 'UserId',
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
        if (null !== $this->extSlbId) {
            $res['ExtSlbId'] = $this->extSlbId;
        }
        if (null !== $this->extSlbIp) {
            $res['ExtSlbIp'] = $this->extSlbIp;
        }
        if (null !== $this->extSlbName) {
            $res['ExtSlbName'] = $this->extSlbName;
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
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->runningInstanceCount) {
            $res['RunningInstanceCount'] = $this->runningInstanceCount;
        }
        if (null !== $this->slbId) {
            $res['SlbId'] = $this->slbId;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return applcation
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
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
        if (isset($map['ExtSlbId'])) {
            $model->extSlbId = $map['ExtSlbId'];
        }
        if (isset($map['ExtSlbIp'])) {
            $model->extSlbIp = $map['ExtSlbIp'];
        }
        if (isset($map['ExtSlbName'])) {
            $model->extSlbName = $map['ExtSlbName'];
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
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RunningInstanceCount'])) {
            $model->runningInstanceCount = $map['RunningInstanceCount'];
        }
        if (isset($map['SlbId'])) {
            $model->slbId = $map['SlbId'];
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

        return $model;
    }
}
