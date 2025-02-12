<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20240730\Models\GetClusterResponseBody\clusterCustomConfiguration;
use AlibabaCloud\SDK\EHPC\V20240730\Models\GetClusterResponseBody\manager;
use AlibabaCloud\SDK\EHPC\V20240730\Models\GetClusterResponseBody\monitorSpec;
use AlibabaCloud\SDK\EHPC\V20240730\Models\GetClusterResponseBody\schedulerSpec;

class GetClusterResponseBody extends Model
{
    /**
     * @var string
     */
    public $clientVersion;
    /**
     * @var string
     */
    public $clusterCategory;
    /**
     * @var string
     */
    public $clusterCreateTime;
    /**
     * @var clusterCustomConfiguration
     */
    public $clusterCustomConfiguration;
    /**
     * @var string
     */
    public $clusterId;
    /**
     * @var string
     */
    public $clusterMode;
    /**
     * @var string
     */
    public $clusterModifyTime;
    /**
     * @var string
     */
    public $clusterName;
    /**
     * @var string
     */
    public $clusterStatus;
    /**
     * @var string
     */
    public $clusterVSwitchId;
    /**
     * @var string
     */
    public $clusterVpcId;
    /**
     * @var string
     */
    public $deleteProtection;
    /**
     * @var string
     */
    public $ehpcVersion;
    /**
     * @var bool
     */
    public $enableScaleIn;
    /**
     * @var bool
     */
    public $enableScaleOut;
    /**
     * @var int
     */
    public $growInterval;
    /**
     * @var int
     */
    public $idleInterval;
    /**
     * @var manager
     */
    public $manager;
    /**
     * @var string
     */
    public $maxCoreCount;
    /**
     * @var string
     */
    public $maxCount;
    /**
     * @var monitorSpec
     */
    public $monitorSpec;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string
     */
    public $resourceGroupId;
    /**
     * @var schedulerSpec
     */
    public $schedulerSpec;
    /**
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
        'monitorSpec'                => 'MonitorSpec',
        'requestId'                  => 'RequestId',
        'resourceGroupId'            => 'ResourceGroupId',
        'schedulerSpec'              => 'SchedulerSpec',
        'securityGroupId'            => 'SecurityGroupId',
    ];

    public function validate()
    {
        if (null !== $this->clusterCustomConfiguration) {
            $this->clusterCustomConfiguration->validate();
        }
        if (null !== $this->manager) {
            $this->manager->validate();
        }
        if (null !== $this->monitorSpec) {
            $this->monitorSpec->validate();
        }
        if (null !== $this->schedulerSpec) {
            $this->schedulerSpec->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['ClusterCustomConfiguration'] = null !== $this->clusterCustomConfiguration ? $this->clusterCustomConfiguration->toArray($noStream) : $this->clusterCustomConfiguration;
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
            $res['Manager'] = null !== $this->manager ? $this->manager->toArray($noStream) : $this->manager;
        }

        if (null !== $this->maxCoreCount) {
            $res['MaxCoreCount'] = $this->maxCoreCount;
        }

        if (null !== $this->maxCount) {
            $res['MaxCount'] = $this->maxCount;
        }

        if (null !== $this->monitorSpec) {
            $res['MonitorSpec'] = null !== $this->monitorSpec ? $this->monitorSpec->toArray($noStream) : $this->monitorSpec;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->schedulerSpec) {
            $res['SchedulerSpec'] = null !== $this->schedulerSpec ? $this->schedulerSpec->toArray($noStream) : $this->schedulerSpec;
        }

        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
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

        if (isset($map['MonitorSpec'])) {
            $model->monitorSpec = monitorSpec::fromMap($map['MonitorSpec']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['SchedulerSpec'])) {
            $model->schedulerSpec = schedulerSpec::fromMap($map['SchedulerSpec']);
        }

        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }

        return $model;
    }
}
