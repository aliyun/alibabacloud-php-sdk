<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models;

use AlibabaCloud\SDK\EHPC\V20240730\Models\GetClusterResponseBody\clusterCustomConfiguration;
use AlibabaCloud\SDK\EHPC\V20240730\Models\GetClusterResponseBody\manager;
use AlibabaCloud\Tea\Model;

class GetClusterResponseBody extends Model
{
    /**
     * @example 2.0.31
     *
     * @var string
     */
    public $clientVersion;

    /**
     * @example Standard
     *
     * @var string
     */
    public $clusterCategory;

    /**
     * @example 2024-08-06T12:43:01.000Z
     *
     * @var string
     */
    public $clusterCreateTime;

    /**
     * @var clusterCustomConfiguration
     */
    public $clusterCustomConfiguration;

    /**
     * @example ehpc-hz-FYUr32****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example Integrated
     *
     * @var string
     */
    public $clusterMode;

    /**
     * @example 2024-08-06T12:43:01.000Z
     *
     * @var string
     */
    public $clusterModifyTime;

    /**
     * @example slurm22.05.8-cluster-20240614
     *
     * @var string
     */
    public $clusterName;

    /**
     * @example running
     *
     * @var string
     */
    public $clusterStatus;

    /**
     * @example vsw-bp1p2uugqsjppno******
     *
     * @var string
     */
    public $clusterVSwitchId;

    /**
     * @example vpc-uf6u3lk1pjy28eg*****
     *
     * @var string
     */
    public $clusterVpcId;

    /**
     * @example true
     *
     * @var string
     */
    public $deleteProtection;

    /**
     * @example 2.0.0
     *
     * @var string
     */
    public $ehpcVersion;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableScaleIn;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableScaleOut;

    /**
     * @example 2
     *
     * @var int
     */
    public $growInterval;

    /**
     * @example 4
     *
     * @var int
     */
    public $idleInterval;

    /**
     * @var manager
     */
    public $manager;

    /**
     * @example 10000
     *
     * @var string
     */
    public $maxCoreCount;

    /**
     * @example 100
     *
     * @var string
     */
    public $maxCount;

    /**
     * @example 04F0F334-1335-436C-A1D7-6C044FE73368
     *
     * @var string
     */
    public $requestId;

    /**
     * @example rg-acfmxazb4ph****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
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
