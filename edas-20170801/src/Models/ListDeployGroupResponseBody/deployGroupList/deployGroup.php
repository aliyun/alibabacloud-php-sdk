<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListDeployGroupResponseBody\deployGroupList;

use AlibabaCloud\Tea\Model;

class deployGroup extends Model
{
    /**
     * @var string
     */
    public $VServerGroupId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $cpuRequest;

    /**
     * @var int
     */
    public $updateTime;

    /**
     * @var string
     */
    public $memoryRequest;

    /**
     * @var string
     */
    public $nameSpace;

    /**
     * @var string
     */
    public $appVersionId;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $deploymentName;

    /**
     * @var string
     */
    public $preStop;

    /**
     * @var string
     */
    public $packageUrl;

    /**
     * @var string
     */
    public $packageVersion;

    /**
     * @var string
     */
    public $baseComponentMetaName;

    /**
     * @var string
     */
    public $csClusterId;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $env;

    /**
     * @var int
     */
    public $lastUpdateTime;

    /**
     * @var int
     */
    public $groupType;

    /**
     * @var string
     */
    public $cpuLimit;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $postStart;

    /**
     * @var string
     */
    public $labels;

    /**
     * @var string
     */
    public $memoryLimit;

    /**
     * @var string
     */
    public $strategy;

    /**
     * @var string
     */
    public $selector;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var string
     */
    public $packageVersionId;

    /**
     * @var string
     */
    public $reversion;

    /**
     * @var string
     */
    public $VExtServerGroupId;

    /**
     * @var string
     */
    public $packagePublicUrl;
    protected $_name = [
        'VServerGroupId'        => 'VServerGroupId',
        'status'                => 'Status',
        'cpuRequest'            => 'CpuRequest',
        'updateTime'            => 'UpdateTime',
        'memoryRequest'         => 'MemoryRequest',
        'nameSpace'             => 'NameSpace',
        'appVersionId'          => 'AppVersionId',
        'createTime'            => 'CreateTime',
        'deploymentName'        => 'DeploymentName',
        'preStop'               => 'PreStop',
        'packageUrl'            => 'PackageUrl',
        'packageVersion'        => 'PackageVersion',
        'baseComponentMetaName' => 'BaseComponentMetaName',
        'csClusterId'           => 'CsClusterId',
        'appId'                 => 'AppId',
        'env'                   => 'Env',
        'lastUpdateTime'        => 'LastUpdateTime',
        'groupType'             => 'GroupType',
        'cpuLimit'              => 'CpuLimit',
        'clusterId'             => 'ClusterId',
        'postStart'             => 'PostStart',
        'labels'                => 'Labels',
        'memoryLimit'           => 'MemoryLimit',
        'strategy'              => 'Strategy',
        'selector'              => 'Selector',
        'groupId'               => 'GroupId',
        'groupName'             => 'GroupName',
        'clusterName'           => 'ClusterName',
        'packageVersionId'      => 'PackageVersionId',
        'reversion'             => 'Reversion',
        'VExtServerGroupId'     => 'VExtServerGroupId',
        'packagePublicUrl'      => 'PackagePublicUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->VServerGroupId) {
            $res['VServerGroupId'] = $this->VServerGroupId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->cpuRequest) {
            $res['CpuRequest'] = $this->cpuRequest;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->memoryRequest) {
            $res['MemoryRequest'] = $this->memoryRequest;
        }
        if (null !== $this->nameSpace) {
            $res['NameSpace'] = $this->nameSpace;
        }
        if (null !== $this->appVersionId) {
            $res['AppVersionId'] = $this->appVersionId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->deploymentName) {
            $res['DeploymentName'] = $this->deploymentName;
        }
        if (null !== $this->preStop) {
            $res['PreStop'] = $this->preStop;
        }
        if (null !== $this->packageUrl) {
            $res['PackageUrl'] = $this->packageUrl;
        }
        if (null !== $this->packageVersion) {
            $res['PackageVersion'] = $this->packageVersion;
        }
        if (null !== $this->baseComponentMetaName) {
            $res['BaseComponentMetaName'] = $this->baseComponentMetaName;
        }
        if (null !== $this->csClusterId) {
            $res['CsClusterId'] = $this->csClusterId;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->env) {
            $res['Env'] = $this->env;
        }
        if (null !== $this->lastUpdateTime) {
            $res['LastUpdateTime'] = $this->lastUpdateTime;
        }
        if (null !== $this->groupType) {
            $res['GroupType'] = $this->groupType;
        }
        if (null !== $this->cpuLimit) {
            $res['CpuLimit'] = $this->cpuLimit;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->postStart) {
            $res['PostStart'] = $this->postStart;
        }
        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
        }
        if (null !== $this->memoryLimit) {
            $res['MemoryLimit'] = $this->memoryLimit;
        }
        if (null !== $this->strategy) {
            $res['Strategy'] = $this->strategy;
        }
        if (null !== $this->selector) {
            $res['Selector'] = $this->selector;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->packageVersionId) {
            $res['PackageVersionId'] = $this->packageVersionId;
        }
        if (null !== $this->reversion) {
            $res['Reversion'] = $this->reversion;
        }
        if (null !== $this->VExtServerGroupId) {
            $res['VExtServerGroupId'] = $this->VExtServerGroupId;
        }
        if (null !== $this->packagePublicUrl) {
            $res['PackagePublicUrl'] = $this->packagePublicUrl;
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
        if (isset($map['VServerGroupId'])) {
            $model->VServerGroupId = $map['VServerGroupId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['CpuRequest'])) {
            $model->cpuRequest = $map['CpuRequest'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['MemoryRequest'])) {
            $model->memoryRequest = $map['MemoryRequest'];
        }
        if (isset($map['NameSpace'])) {
            $model->nameSpace = $map['NameSpace'];
        }
        if (isset($map['AppVersionId'])) {
            $model->appVersionId = $map['AppVersionId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DeploymentName'])) {
            $model->deploymentName = $map['DeploymentName'];
        }
        if (isset($map['PreStop'])) {
            $model->preStop = $map['PreStop'];
        }
        if (isset($map['PackageUrl'])) {
            $model->packageUrl = $map['PackageUrl'];
        }
        if (isset($map['PackageVersion'])) {
            $model->packageVersion = $map['PackageVersion'];
        }
        if (isset($map['BaseComponentMetaName'])) {
            $model->baseComponentMetaName = $map['BaseComponentMetaName'];
        }
        if (isset($map['CsClusterId'])) {
            $model->csClusterId = $map['CsClusterId'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Env'])) {
            $model->env = $map['Env'];
        }
        if (isset($map['LastUpdateTime'])) {
            $model->lastUpdateTime = $map['LastUpdateTime'];
        }
        if (isset($map['GroupType'])) {
            $model->groupType = $map['GroupType'];
        }
        if (isset($map['CpuLimit'])) {
            $model->cpuLimit = $map['CpuLimit'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['PostStart'])) {
            $model->postStart = $map['PostStart'];
        }
        if (isset($map['Labels'])) {
            $model->labels = $map['Labels'];
        }
        if (isset($map['MemoryLimit'])) {
            $model->memoryLimit = $map['MemoryLimit'];
        }
        if (isset($map['Strategy'])) {
            $model->strategy = $map['Strategy'];
        }
        if (isset($map['Selector'])) {
            $model->selector = $map['Selector'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['PackageVersionId'])) {
            $model->packageVersionId = $map['PackageVersionId'];
        }
        if (isset($map['Reversion'])) {
            $model->reversion = $map['Reversion'];
        }
        if (isset($map['VExtServerGroupId'])) {
            $model->VExtServerGroupId = $map['VExtServerGroupId'];
        }
        if (isset($map['PackagePublicUrl'])) {
            $model->packagePublicUrl = $map['PackagePublicUrl'];
        }

        return $model;
    }
}
