<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListDeployGroupResponseBody\deployGroupList;

use AlibabaCloud\Tea\Model;

class deployGroup extends Model
{
    /**
     * @description The ID of the application.
     *
     * @example 3616cdca-4f92-4413-****-************
     *
     * @var string
     */
    public $appId;

    /**
     * @description The ID of the change process for application deployment in the instance group.
     *
     * @example changeorder_a**_*******_**
     *
     * @var string
     */
    public $appVersionId;

    /**
     * @description The name of the basic component.
     *
     * @example k8s-sc-consumer-****
     *
     * @var string
     */
    public $baseComponentMetaName;

    /**
     * @description The ID of the cluster.
     *
     * @example 0d247b93-8d62-4e34-****-************
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The name of the cluster.
     *
     * @example doc-test
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description The maximum number of CPU cores allowed for each application instance when the application is running.
     *
     * @example 400
     *
     * @var string
     */
    public $cpuLimit;

    /**
     * @description The number of CPU cores requested for each application instance when the application is running. Unit: cores. Value 0 indicates that no limit is set on CPU cores.
     *
     * @example 1
     *
     * @var string
     */
    public $cpuRequest;

    /**
     * @description The time when the application was created. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1573627695779
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The ID of the Container Service for Kubernetes (ACK) cluster.
     *
     * @example c66e65950db****cba92f17434df1****
     *
     * @var string
     */
    public $csClusterId;

    /**
     * @description The name of the deployment.
     *
     * @example test
     *
     * @var string
     */
    public $deploymentName;

    /**
     * @description The ID of the ACK cluster.
     *
     * @example 497806cb-****-6a7
     *
     * @var string
     */
    public $env;

    /**
     * @description The maximum size of space required by ephemeral storage. Unit: GB. Value 0 indicates that no limit is set on the space size.
     *
     * @example 8
     *
     * @var string
     */
    public $ephemeralStorageLimit;

    /**
     * @description The minimum size of space required by ephemeral storage. Unit: GB. Value 0 indicates that no limit is set on the space size.
     *
     * @example 4
     *
     * @var string
     */
    public $ephemeralStorageRequest;

    /**
     * @description The ID of the instance group.
     *
     * @example 577f4c50-16ee-43d8-****-************
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The name of the instance group.
     *
     * @example _DEFAULT_GROUP
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The type of the instance group. Valid values:
     *
     *   0: default group.
     *   1: Canary release is disabled for traffic management.
     *   2: Canary release is enabled for traffic management.
     *
     * @example 1
     *
     * @var int
     */
    public $groupType;

    /**
     * @description The tag.
     *
     * @example test
     *
     * @var string
     */
    public $labels;

    /**
     * @description The time when the application was last modified. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1587888503825
     *
     * @var int
     */
    public $lastUpdateTime;

    /**
     * @description The maximum size of memory allowed for each application instance when the application is running. Unit: MB. Value 0 indicates that no limit is set on the memory size.
     *
     * @example 0
     *
     * @var string
     */
    public $memoryLimit;

    /**
     * @description The size of memory requested for each application instance when the application is running. Unit: MB. Value 0 indicates that no limit is set on the memory size.
     *
     * @example 512
     *
     * @var string
     */
    public $memoryRequest;

    /**
     * @description The namespace.
     *
     * @example ping****est
     *
     * @var string
     */
    public $nameSpace;

    /**
     * @description The external download URL of the deployment package.
     *
     * @example http://****.oss-cn-shanghai.aliyuncs.com/****\/sc-****-consumer-E.jar
     *
     * @var string
     */
    public $packagePublicUrl;

    /**
     * @description The URL of the deployment package.
     *
     * @example http://****.oss-cn-shanghai.aliyuncs.com/****\/sc-****-consumer-E.jar
     *
     * @var string
     */
    public $packageUrl;

    /**
     * @description The version of the deployment package.
     *
     * @example E
     *
     * @var string
     */
    public $packageVersion;

    /**
     * @description The version of the deployment package that was used to deploy an application in the instance group.
     *
     * @example a7d48fe8-ad8f-****-89bd-74cc1ee6****
     *
     * @var string
     */
    public $packageVersionId;

    /**
     * @description The post-start script.
     *
     * @example {\"exec\":{\"command\":[\"ls\",\"/\"]}}"
     *
     * @var string
     */
    public $postStart;

    /**
     * @description The pre-stop script.
     *
     * @example {\"exec\":{\"command\":[\"ls\",\"/\"]}}"
     *
     * @var string
     */
    public $preStop;

    /**
     * @description The version of the application. The value progressively increases in the range of 0 to 7.
     *
     * @example 2
     *
     * @var string
     */
    public $reversion;

    /**
     * @description The ID of the application deployed in the ACK cluster in Enterprise Distributed Application Service (EDAS).
     *
     * @example 53dd85cc-25b4-4d0e-****-6bf5465****4
     *
     * @var string
     */
    public $selector;

    /**
     * @description The state of the application instance group. Valid values:
     *
     *   0: ready
     *   1: in progress
     *   2: successful
     *   3: failed
     *   6: terminated
     *   10: failed due to a system exception
     *
     * @example 2
     *
     * @var string
     */
    public $status;

    /**
     * @description The throttling policy. This parameter is reserved.
     *
     * @example RollingUpdate
     *
     * @var string
     */
    public $strategy;

    /**
     * @description The time when the application was last modified. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1573627695779
     *
     * @var int
     */
    public $updateTime;

    /**
     * @description The ID of the vServer group of the Internet-facing SLB instance associated with the instance group.
     *
     * @example rsp-cige6******
     *
     * @var string
     */
    public $VExtServerGroupId;

    /**
     * @description The ID of the vServer group of the internal-facing Server Load Balancer (SLB) instance associated with the instance group.
     *
     * @example rsp-cige6******
     *
     * @var string
     */
    public $VServerGroupId;
    protected $_name = [
        'appId'                   => 'AppId',
        'appVersionId'            => 'AppVersionId',
        'baseComponentMetaName'   => 'BaseComponentMetaName',
        'clusterId'               => 'ClusterId',
        'clusterName'             => 'ClusterName',
        'cpuLimit'                => 'CpuLimit',
        'cpuRequest'              => 'CpuRequest',
        'createTime'              => 'CreateTime',
        'csClusterId'             => 'CsClusterId',
        'deploymentName'          => 'DeploymentName',
        'env'                     => 'Env',
        'ephemeralStorageLimit'   => 'EphemeralStorageLimit',
        'ephemeralStorageRequest' => 'EphemeralStorageRequest',
        'groupId'                 => 'GroupId',
        'groupName'               => 'GroupName',
        'groupType'               => 'GroupType',
        'labels'                  => 'Labels',
        'lastUpdateTime'          => 'LastUpdateTime',
        'memoryLimit'             => 'MemoryLimit',
        'memoryRequest'           => 'MemoryRequest',
        'nameSpace'               => 'NameSpace',
        'packagePublicUrl'        => 'PackagePublicUrl',
        'packageUrl'              => 'PackageUrl',
        'packageVersion'          => 'PackageVersion',
        'packageVersionId'        => 'PackageVersionId',
        'postStart'               => 'PostStart',
        'preStop'                 => 'PreStop',
        'reversion'               => 'Reversion',
        'selector'                => 'Selector',
        'status'                  => 'Status',
        'strategy'                => 'Strategy',
        'updateTime'              => 'UpdateTime',
        'VExtServerGroupId'       => 'VExtServerGroupId',
        'VServerGroupId'          => 'VServerGroupId',
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
        if (null !== $this->appVersionId) {
            $res['AppVersionId'] = $this->appVersionId;
        }
        if (null !== $this->baseComponentMetaName) {
            $res['BaseComponentMetaName'] = $this->baseComponentMetaName;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->cpuLimit) {
            $res['CpuLimit'] = $this->cpuLimit;
        }
        if (null !== $this->cpuRequest) {
            $res['CpuRequest'] = $this->cpuRequest;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->csClusterId) {
            $res['CsClusterId'] = $this->csClusterId;
        }
        if (null !== $this->deploymentName) {
            $res['DeploymentName'] = $this->deploymentName;
        }
        if (null !== $this->env) {
            $res['Env'] = $this->env;
        }
        if (null !== $this->ephemeralStorageLimit) {
            $res['EphemeralStorageLimit'] = $this->ephemeralStorageLimit;
        }
        if (null !== $this->ephemeralStorageRequest) {
            $res['EphemeralStorageRequest'] = $this->ephemeralStorageRequest;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->groupType) {
            $res['GroupType'] = $this->groupType;
        }
        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
        }
        if (null !== $this->lastUpdateTime) {
            $res['LastUpdateTime'] = $this->lastUpdateTime;
        }
        if (null !== $this->memoryLimit) {
            $res['MemoryLimit'] = $this->memoryLimit;
        }
        if (null !== $this->memoryRequest) {
            $res['MemoryRequest'] = $this->memoryRequest;
        }
        if (null !== $this->nameSpace) {
            $res['NameSpace'] = $this->nameSpace;
        }
        if (null !== $this->packagePublicUrl) {
            $res['PackagePublicUrl'] = $this->packagePublicUrl;
        }
        if (null !== $this->packageUrl) {
            $res['PackageUrl'] = $this->packageUrl;
        }
        if (null !== $this->packageVersion) {
            $res['PackageVersion'] = $this->packageVersion;
        }
        if (null !== $this->packageVersionId) {
            $res['PackageVersionId'] = $this->packageVersionId;
        }
        if (null !== $this->postStart) {
            $res['PostStart'] = $this->postStart;
        }
        if (null !== $this->preStop) {
            $res['PreStop'] = $this->preStop;
        }
        if (null !== $this->reversion) {
            $res['Reversion'] = $this->reversion;
        }
        if (null !== $this->selector) {
            $res['Selector'] = $this->selector;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->strategy) {
            $res['Strategy'] = $this->strategy;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->VExtServerGroupId) {
            $res['VExtServerGroupId'] = $this->VExtServerGroupId;
        }
        if (null !== $this->VServerGroupId) {
            $res['VServerGroupId'] = $this->VServerGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deployGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppVersionId'])) {
            $model->appVersionId = $map['AppVersionId'];
        }
        if (isset($map['BaseComponentMetaName'])) {
            $model->baseComponentMetaName = $map['BaseComponentMetaName'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['CpuLimit'])) {
            $model->cpuLimit = $map['CpuLimit'];
        }
        if (isset($map['CpuRequest'])) {
            $model->cpuRequest = $map['CpuRequest'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CsClusterId'])) {
            $model->csClusterId = $map['CsClusterId'];
        }
        if (isset($map['DeploymentName'])) {
            $model->deploymentName = $map['DeploymentName'];
        }
        if (isset($map['Env'])) {
            $model->env = $map['Env'];
        }
        if (isset($map['EphemeralStorageLimit'])) {
            $model->ephemeralStorageLimit = $map['EphemeralStorageLimit'];
        }
        if (isset($map['EphemeralStorageRequest'])) {
            $model->ephemeralStorageRequest = $map['EphemeralStorageRequest'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['GroupType'])) {
            $model->groupType = $map['GroupType'];
        }
        if (isset($map['Labels'])) {
            $model->labels = $map['Labels'];
        }
        if (isset($map['LastUpdateTime'])) {
            $model->lastUpdateTime = $map['LastUpdateTime'];
        }
        if (isset($map['MemoryLimit'])) {
            $model->memoryLimit = $map['MemoryLimit'];
        }
        if (isset($map['MemoryRequest'])) {
            $model->memoryRequest = $map['MemoryRequest'];
        }
        if (isset($map['NameSpace'])) {
            $model->nameSpace = $map['NameSpace'];
        }
        if (isset($map['PackagePublicUrl'])) {
            $model->packagePublicUrl = $map['PackagePublicUrl'];
        }
        if (isset($map['PackageUrl'])) {
            $model->packageUrl = $map['PackageUrl'];
        }
        if (isset($map['PackageVersion'])) {
            $model->packageVersion = $map['PackageVersion'];
        }
        if (isset($map['PackageVersionId'])) {
            $model->packageVersionId = $map['PackageVersionId'];
        }
        if (isset($map['PostStart'])) {
            $model->postStart = $map['PostStart'];
        }
        if (isset($map['PreStop'])) {
            $model->preStop = $map['PreStop'];
        }
        if (isset($map['Reversion'])) {
            $model->reversion = $map['Reversion'];
        }
        if (isset($map['Selector'])) {
            $model->selector = $map['Selector'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Strategy'])) {
            $model->strategy = $map['Strategy'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['VExtServerGroupId'])) {
            $model->VExtServerGroupId = $map['VExtServerGroupId'];
        }
        if (isset($map['VServerGroupId'])) {
            $model->VServerGroupId = $map['VServerGroupId'];
        }

        return $model;
    }
}
