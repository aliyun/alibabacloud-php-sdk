<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class Cluster extends Model
{
    /**
     * @description 集群ID。
     *
     * @example c-b933c5aac8fe****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description 集群名称。
     *
     * @example emrtest
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description 集群状态。
     *
     * @example RUNNING
     *
     * @var string
     */
    public $clusterState;

    /**
     * @description 集群类型。
     *
     * @example DATALAKE
     *
     * @var string
     */
    public $clusterType;

    /**
     * @description 创建时间。
     *
     * @example 1592837465784
     *
     * @var int
     */
    public $createTime;

    /**
     * @description 部署模式。
     *
     * @example HA
     *
     * @var string
     */
    public $deployMode;

    /**
     * @description EMR默认角色。
     *
     * @example AliyunEMRDefaultRole
     *
     * @var string
     */
    public $emrDefaultRole;

    /**
     * @description 删除时间。
     *
     * @example 1592837465784
     *
     * @var int
     */
    public $endTime;

    /**
     * @description 过期时间。
     *
     * @example 1592837465784
     *
     * @var int
     */
    public $expireTime;

    /**
     * @description 节点属性。
     *
     * @var NodeAttributes
     */
    public $nodeAttributes;

    /**
     * @description 付费类型。
     *
     * @example PayAsYouGo
     *
     * @var string
     */
    public $paymentType;

    /**
     * @description 可用时间。
     *
     * @example 1592837465784
     *
     * @var int
     */
    public $readyTime;

    /**
     * @description 地域ID。
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description EMR发行版。
     *
     * @example EMR-5.3.0
     *
     * @var string
     */
    public $releaseVersion;

    /**
     * @description 资源组ID。
     *
     * @example rg-acfmzabjyop****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description Kerberos安全模式。
     *
     * @example NORMAL
     *
     * @var string
     */
    public $securityMode;

    /**
     * @var ClusterStateChangeReason
     */
    public $stateChangeReason;

    /**
     * @description 预付费配置。
     *
     * @var SubscriptionConfig
     */
    public $subscriptionConfig;

    /**
     * @description 集群标签。
     *
     * @var Tag[]
     */
    public $tags;
    protected $_name = [
        'clusterId'          => 'ClusterId',
        'clusterName'        => 'ClusterName',
        'clusterState'       => 'ClusterState',
        'clusterType'        => 'ClusterType',
        'createTime'         => 'CreateTime',
        'deployMode'         => 'DeployMode',
        'emrDefaultRole'     => 'EmrDefaultRole',
        'endTime'            => 'EndTime',
        'expireTime'         => 'ExpireTime',
        'nodeAttributes'     => 'NodeAttributes',
        'paymentType'        => 'PaymentType',
        'readyTime'          => 'ReadyTime',
        'regionId'           => 'RegionId',
        'releaseVersion'     => 'ReleaseVersion',
        'resourceGroupId'    => 'ResourceGroupId',
        'securityMode'       => 'SecurityMode',
        'stateChangeReason'  => 'StateChangeReason',
        'subscriptionConfig' => 'SubscriptionConfig',
        'tags'               => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->clusterState) {
            $res['ClusterState'] = $this->clusterState;
        }
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->deployMode) {
            $res['DeployMode'] = $this->deployMode;
        }
        if (null !== $this->emrDefaultRole) {
            $res['EmrDefaultRole'] = $this->emrDefaultRole;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->nodeAttributes) {
            $res['NodeAttributes'] = null !== $this->nodeAttributes ? $this->nodeAttributes->toMap() : null;
        }
        if (null !== $this->paymentType) {
            $res['PaymentType'] = $this->paymentType;
        }
        if (null !== $this->readyTime) {
            $res['ReadyTime'] = $this->readyTime;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->releaseVersion) {
            $res['ReleaseVersion'] = $this->releaseVersion;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->securityMode) {
            $res['SecurityMode'] = $this->securityMode;
        }
        if (null !== $this->stateChangeReason) {
            $res['StateChangeReason'] = null !== $this->stateChangeReason ? $this->stateChangeReason->toMap() : null;
        }
        if (null !== $this->subscriptionConfig) {
            $res['SubscriptionConfig'] = null !== $this->subscriptionConfig ? $this->subscriptionConfig->toMap() : null;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Cluster
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['ClusterState'])) {
            $model->clusterState = $map['ClusterState'];
        }
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DeployMode'])) {
            $model->deployMode = $map['DeployMode'];
        }
        if (isset($map['EmrDefaultRole'])) {
            $model->emrDefaultRole = $map['EmrDefaultRole'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['NodeAttributes'])) {
            $model->nodeAttributes = NodeAttributes::fromMap($map['NodeAttributes']);
        }
        if (isset($map['PaymentType'])) {
            $model->paymentType = $map['PaymentType'];
        }
        if (isset($map['ReadyTime'])) {
            $model->readyTime = $map['ReadyTime'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ReleaseVersion'])) {
            $model->releaseVersion = $map['ReleaseVersion'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SecurityMode'])) {
            $model->securityMode = $map['SecurityMode'];
        }
        if (isset($map['StateChangeReason'])) {
            $model->stateChangeReason = ClusterStateChangeReason::fromMap($map['StateChangeReason']);
        }
        if (isset($map['SubscriptionConfig'])) {
            $model->subscriptionConfig = SubscriptionConfig::fromMap($map['SubscriptionConfig']);
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? Tag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
