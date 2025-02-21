<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Dara\Model;

class Cluster extends Model
{
    /**
     * @var string
     */
    public $clusterId;
    /**
     * @var string
     */
    public $clusterName;
    /**
     * @var string
     */
    public $clusterState;
    /**
     * @var string
     */
    public $clusterType;
    /**
     * @var int
     */
    public $createTime;
    /**
     * @var bool
     */
    public $deletionProtection;
    /**
     * @var string
     */
    public $deployMode;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $emrDefaultRole;
    /**
     * @var int
     */
    public $endTime;
    /**
     * @var int
     */
    public $expireTime;
    /**
     * @var NodeAttributes
     */
    public $nodeAttributes;
    /**
     * @var string
     */
    public $paymentType;
    /**
     * @var int
     */
    public $readyTime;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $releaseVersion;
    /**
     * @var string
     */
    public $resourceGroupId;
    /**
     * @var string
     */
    public $securityMode;
    /**
     * @var ClusterStateChangeReason
     */
    public $stateChangeReason;
    /**
     * @var SubscriptionConfig
     */
    public $subscriptionConfig;
    /**
     * @var Tag[]
     */
    public $tags;
    protected $_name = [
        'clusterId'          => 'ClusterId',
        'clusterName'        => 'ClusterName',
        'clusterState'       => 'ClusterState',
        'clusterType'        => 'ClusterType',
        'createTime'         => 'CreateTime',
        'deletionProtection' => 'DeletionProtection',
        'deployMode'         => 'DeployMode',
        'description'        => 'Description',
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
        if (null !== $this->nodeAttributes) {
            $this->nodeAttributes->validate();
        }
        if (null !== $this->stateChangeReason) {
            $this->stateChangeReason->validate();
        }
        if (null !== $this->subscriptionConfig) {
            $this->subscriptionConfig->validate();
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->deletionProtection) {
            $res['DeletionProtection'] = $this->deletionProtection;
        }

        if (null !== $this->deployMode) {
            $res['DeployMode'] = $this->deployMode;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
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
            $res['NodeAttributes'] = null !== $this->nodeAttributes ? $this->nodeAttributes->toArray($noStream) : $this->nodeAttributes;
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
            $res['StateChangeReason'] = null !== $this->stateChangeReason ? $this->stateChangeReason->toArray($noStream) : $this->stateChangeReason;
        }

        if (null !== $this->subscriptionConfig) {
            $res['SubscriptionConfig'] = null !== $this->subscriptionConfig ? $this->subscriptionConfig->toArray($noStream) : $this->subscriptionConfig;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1          = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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

        if (isset($map['DeletionProtection'])) {
            $model->deletionProtection = $map['DeletionProtection'];
        }

        if (isset($map['DeployMode'])) {
            $model->deployMode = $map['DeployMode'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
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
                $n1          = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = Tag::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
