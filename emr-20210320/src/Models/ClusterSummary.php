<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class ClusterSummary extends Model
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
    public $releaseVersion;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var ClusterStateChangeReason
     */
    public $stateChangeReason;

    /**
     * @var Tag[]
     */
    public $tags;
    protected $_name = [
        'clusterId'         => 'ClusterId',
        'clusterName'       => 'ClusterName',
        'clusterState'      => 'ClusterState',
        'clusterType'       => 'ClusterType',
        'createTime'        => 'CreateTime',
        'emrDefaultRole'    => 'EmrDefaultRole',
        'endTime'           => 'EndTime',
        'expireTime'        => 'ExpireTime',
        'paymentType'       => 'PaymentType',
        'readyTime'         => 'ReadyTime',
        'releaseVersion'    => 'ReleaseVersion',
        'resourceGroupId'   => 'ResourceGroupId',
        'stateChangeReason' => 'StateChangeReason',
        'tags'              => 'Tags',
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
        if (null !== $this->emrDefaultRole) {
            $res['EmrDefaultRole'] = $this->emrDefaultRole;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->paymentType) {
            $res['PaymentType'] = $this->paymentType;
        }
        if (null !== $this->readyTime) {
            $res['ReadyTime'] = $this->readyTime;
        }
        if (null !== $this->releaseVersion) {
            $res['ReleaseVersion'] = $this->releaseVersion;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->stateChangeReason) {
            $res['StateChangeReason'] = null !== $this->stateChangeReason ? $this->stateChangeReason->toMap() : null;
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
     * @return ClusterSummary
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
        if (isset($map['EmrDefaultRole'])) {
            $model->emrDefaultRole = $map['EmrDefaultRole'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['PaymentType'])) {
            $model->paymentType = $map['PaymentType'];
        }
        if (isset($map['ReadyTime'])) {
            $model->readyTime = $map['ReadyTime'];
        }
        if (isset($map['ReleaseVersion'])) {
            $model->releaseVersion = $map['ReleaseVersion'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['StateChangeReason'])) {
            $model->stateChangeReason = ClusterStateChangeReason::fromMap($map['StateChangeReason']);
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
