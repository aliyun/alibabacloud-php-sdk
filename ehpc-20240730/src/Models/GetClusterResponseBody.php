<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models;

use AlibabaCloud\SDK\EHPC\V20240730\Models\GetClusterResponseBody\clusterCustomConfiguration;
use AlibabaCloud\SDK\EHPC\V20240730\Models\GetClusterResponseBody\manager;
use AlibabaCloud\Tea\Model;

class GetClusterResponseBody extends Model
{
    /**
     * @description The E-HPC Util version.
     *
     * @example 2.0.31
     *
     * @var string
     */
    public $clientVersion;

    /**
     * @description The cluster type. Valid values:
     *
     *   Standard
     *   Serverless
     *
     * @example Standard
     *
     * @var string
     */
    public $clusterCategory;

    /**
     * @description The time when the cluster was created. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mmZ format. The time is displayed in UTC. For more information, see [ISO 8601](https://help.aliyun.com/document_detail/25696.html).
     *
     * @example 2024-08-06T12:43:01.000Z
     *
     * @var string
     */
    public $clusterCreateTime;

    /**
     * @description The post-processing script of the cluster.
     *
     * @var clusterCustomConfiguration
     */
    public $clusterCustomConfiguration;

    /**
     * @description The cluster ID.
     *
     * @example ehpc-hz-FYUr32****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The deployment type of the cluster. Valid values:
     *
     *   Integrated: The cluster is deployed on a public cloud.
     *   Hybrid: The cluster is deployed on a hybrid cloud.
     *   Custom: The cluster is a custom cluster.
     *
     * @example Integrated
     *
     * @var string
     */
    public $clusterMode;

    /**
     * @description The time when the cluster was last modified. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mmZ format. The time is displayed in UTC. For more information, see [ISO 8601](https://help.aliyun.com/document_detail/25696.html).
     *
     * @example 2024-08-06T12:43:01.000Z
     *
     * @var string
     */
    public $clusterModifyTime;

    /**
     * @description The cluster name.
     *
     * @example slurm22.05.8-cluster-20240614
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description The cluster state. Valid values:
     *
     *   uninit: The cluster is being installed.
     *   creating: The cluster is being created.
     *   initing: The cluster is being initialized.
     *   running: The cluster is running.
     *   exception: The cluster has run into an exception.
     *   raleasing: The cluster is being released.
     *   stopping: The cluster is being stopped.
     *   stopped: The cluster is stopped.
     *   pending: The cluster is waiting to be configured.
     *
     * @example running
     *
     * @var string
     */
    public $clusterStatus;

    /**
     * @description The ID of the vSwitch used by the cluster.
     *
     * @example vsw-bp1p2uugqsjppno******
     *
     * @var string
     */
    public $clusterVSwitchId;

    /**
     * @description The ID of the virtual private cloud (VPC) used by the cluster.
     *
     * @example vpc-uf6u3lk1pjy28eg*****
     *
     * @var string
     */
    public $clusterVpcId;

    /**
     * @description Indicates whether deletion protection is enabled for the cluster. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var string
     */
    public $deleteProtection;

    /**
     * @description The E-HPC version.
     *
     * @example 2.0.0
     *
     * @var string
     */
    public $ehpcVersion;

    /**
     * @description Indicates whether automatic scale-in is enabled for the cluster. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $enableScaleIn;

    /**
     * @description Indicates whether automatic scale-out is enabled for the cluster. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $enableScaleOut;

    /**
     * @description The interval at which the cluster is automatically scaled out.
     *
     * @example 2
     *
     * @var int
     */
    public $growInterval;

    /**
     * @description The idle duration of the compute nodes allowed by the cluster.
     *
     * @example 4
     *
     * @var int
     */
    public $idleInterval;

    /**
     * @description The configurations of the cluster management node.
     *
     * @var manager
     */
    public $manager;

    /**
     * @description The maximum total number of vCPUs that can be used by all compute nodes managed by the cluster.
     *
     * @example 10000
     *
     * @var string
     */
    public $maxCoreCount;

    /**
     * @description The maximum number of compute nodes that the cluster can manage.
     *
     * @example 100
     *
     * @var string
     */
    public $maxCount;

    /**
     * @description The request ID.
     *
     * @example 04F0F334-1335-436C-A1D7-6C044FE73368
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The resource group ID.
     *
     * @example rg-acfmxazb4ph****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The security group ID.
     *
     * @example sg-f8z9vb2zaezpkr69a21k
     *
     * @var string
     */
    public $securityGroupId;
    protected $_name = [
        'clientVersion'              => 'ClientVersion',
        'clusterCategory'            => 'ClusterCategory',
        'clusterCreateTime'          => 'ClusterCreateTime',
        'clusterCustomConfiguration' => 'ClusterCustomConfiguration',
        'clusterId'                  => 'ClusterId',
        'clusterMode'                => 'ClusterMode',
        'clusterModifyTime'          => 'ClusterModifyTime',
        'clusterName'                => 'ClusterName',
        'clusterStatus'              => 'ClusterStatus',
        'clusterVSwitchId'           => 'ClusterVSwitchId',
        'clusterVpcId'               => 'ClusterVpcId',
        'deleteProtection'           => 'DeleteProtection',
        'ehpcVersion'                => 'EhpcVersion',
        'enableScaleIn'              => 'EnableScaleIn',
        'enableScaleOut'             => 'EnableScaleOut',
        'growInterval'               => 'GrowInterval',
        'idleInterval'               => 'IdleInterval',
        'manager'                    => 'Manager',
        'maxCoreCount'               => 'MaxCoreCount',
        'maxCount'                   => 'MaxCount',
        'requestId'                  => 'RequestId',
        'resourceGroupId'            => 'ResourceGroupId',
        'securityGroupId'            => 'SecurityGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientVersion) {
            $res['ClientVersion'] = $this->clientVersion;
        }
        if (null !== $this->clusterCategory) {
            $res['ClusterCategory'] = $this->clusterCategory;
        }
        if (null !== $this->clusterCreateTime) {
            $res['ClusterCreateTime'] = $this->clusterCreateTime;
        }
        if (null !== $this->clusterCustomConfiguration) {
            $res['ClusterCustomConfiguration'] = null !== $this->clusterCustomConfiguration ? $this->clusterCustomConfiguration->toMap() : null;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->clusterMode) {
            $res['ClusterMode'] = $this->clusterMode;
        }
        if (null !== $this->clusterModifyTime) {
            $res['ClusterModifyTime'] = $this->clusterModifyTime;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->clusterStatus) {
            $res['ClusterStatus'] = $this->clusterStatus;
        }
        if (null !== $this->clusterVSwitchId) {
            $res['ClusterVSwitchId'] = $this->clusterVSwitchId;
        }
        if (null !== $this->clusterVpcId) {
            $res['ClusterVpcId'] = $this->clusterVpcId;
        }
        if (null !== $this->deleteProtection) {
            $res['DeleteProtection'] = $this->deleteProtection;
        }
        if (null !== $this->ehpcVersion) {
            $res['EhpcVersion'] = $this->ehpcVersion;
        }
        if (null !== $this->enableScaleIn) {
            $res['EnableScaleIn'] = $this->enableScaleIn;
        }
        if (null !== $this->enableScaleOut) {
            $res['EnableScaleOut'] = $this->enableScaleOut;
        }
        if (null !== $this->growInterval) {
            $res['GrowInterval'] = $this->growInterval;
        }
        if (null !== $this->idleInterval) {
            $res['IdleInterval'] = $this->idleInterval;
        }
        if (null !== $this->manager) {
            $res['Manager'] = null !== $this->manager ? $this->manager->toMap() : null;
        }
        if (null !== $this->maxCoreCount) {
            $res['MaxCoreCount'] = $this->maxCoreCount;
        }
        if (null !== $this->maxCount) {
            $res['MaxCount'] = $this->maxCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetClusterResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientVersion'])) {
            $model->clientVersion = $map['ClientVersion'];
        }
        if (isset($map['ClusterCategory'])) {
            $model->clusterCategory = $map['ClusterCategory'];
        }
        if (isset($map['ClusterCreateTime'])) {
            $model->clusterCreateTime = $map['ClusterCreateTime'];
        }
        if (isset($map['ClusterCustomConfiguration'])) {
            $model->clusterCustomConfiguration = clusterCustomConfiguration::fromMap($map['ClusterCustomConfiguration']);
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ClusterMode'])) {
            $model->clusterMode = $map['ClusterMode'];
        }
        if (isset($map['ClusterModifyTime'])) {
            $model->clusterModifyTime = $map['ClusterModifyTime'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['ClusterStatus'])) {
            $model->clusterStatus = $map['ClusterStatus'];
        }
        if (isset($map['ClusterVSwitchId'])) {
            $model->clusterVSwitchId = $map['ClusterVSwitchId'];
        }
        if (isset($map['ClusterVpcId'])) {
            $model->clusterVpcId = $map['ClusterVpcId'];
        }
        if (isset($map['DeleteProtection'])) {
            $model->deleteProtection = $map['DeleteProtection'];
        }
        if (isset($map['EhpcVersion'])) {
            $model->ehpcVersion = $map['EhpcVersion'];
        }
        if (isset($map['EnableScaleIn'])) {
            $model->enableScaleIn = $map['EnableScaleIn'];
        }
        if (isset($map['EnableScaleOut'])) {
            $model->enableScaleOut = $map['EnableScaleOut'];
        }
        if (isset($map['GrowInterval'])) {
            $model->growInterval = $map['GrowInterval'];
        }
        if (isset($map['IdleInterval'])) {
            $model->idleInterval = $map['IdleInterval'];
        }
        if (isset($map['Manager'])) {
            $model->manager = manager::fromMap($map['Manager']);
        }
        if (isset($map['MaxCoreCount'])) {
            $model->maxCoreCount = $map['MaxCoreCount'];
        }
        if (isset($map['MaxCount'])) {
            $model->maxCount = $map['MaxCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }

        return $model;
    }
}
