<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowClusterResponseBody\clusters;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowClusterResponseBody\clusters\clusterInfo\failReason;
use AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowClusterResponseBody\clusters\clusterInfo\orderTaskInfo;
use AlibabaCloud\Tea\Model;

class clusterInfo extends Model
{
    /**
     * @example PostPaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @example ECM_EMR
     *
     * @var string
     */
    public $createResource;

    /**
     * @example 1542953603000
     *
     * @var int
     */
    public $createTime;

    /**
     * @example 1542953605000
     *
     * @var int
     */
    public $expiredTime;

    /**
     * @var failReason
     */
    public $failReason;

    /**
     * @example false
     *
     * @var bool
     */
    public $hasUncompletedOrder;

    /**
     * @example C-2E6ABBD39BD0****
     *
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $k8sClusterId;

    /**
     * @example my_cluster
     *
     * @var string
     */
    public $name;

    /**
     * @example 1,2
     *
     * @var string
     */
    public $orderList;

    /**
     * @var orderTaskInfo
     */
    public $orderTaskInfo;

    /**
     * @example 1
     *
     * @var int
     */
    public $period;

    /**
     * @example 200
     *
     * @var int
     */
    public $runningTime;

    /**
     * @example IDLE
     *
     * @var string
     */
    public $status;

    /**
     * @example HADOOP
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'chargeType'          => 'ChargeType',
        'createResource'      => 'CreateResource',
        'createTime'          => 'CreateTime',
        'expiredTime'         => 'ExpiredTime',
        'failReason'          => 'FailReason',
        'hasUncompletedOrder' => 'HasUncompletedOrder',
        'id'                  => 'Id',
        'k8sClusterId'        => 'K8sClusterId',
        'name'                => 'Name',
        'orderList'           => 'OrderList',
        'orderTaskInfo'       => 'OrderTaskInfo',
        'period'              => 'Period',
        'runningTime'         => 'RunningTime',
        'status'              => 'Status',
        'type'                => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->createResource) {
            $res['CreateResource'] = $this->createResource;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->failReason) {
            $res['FailReason'] = null !== $this->failReason ? $this->failReason->toMap() : null;
        }
        if (null !== $this->hasUncompletedOrder) {
            $res['HasUncompletedOrder'] = $this->hasUncompletedOrder;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->k8sClusterId) {
            $res['K8sClusterId'] = $this->k8sClusterId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->orderList) {
            $res['OrderList'] = $this->orderList;
        }
        if (null !== $this->orderTaskInfo) {
            $res['OrderTaskInfo'] = null !== $this->orderTaskInfo ? $this->orderTaskInfo->toMap() : null;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->runningTime) {
            $res['RunningTime'] = $this->runningTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusterInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['CreateResource'])) {
            $model->createResource = $map['CreateResource'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['FailReason'])) {
            $model->failReason = failReason::fromMap($map['FailReason']);
        }
        if (isset($map['HasUncompletedOrder'])) {
            $model->hasUncompletedOrder = $map['HasUncompletedOrder'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['K8sClusterId'])) {
            $model->k8sClusterId = $map['K8sClusterId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OrderList'])) {
            $model->orderList = $map['OrderList'];
        }
        if (isset($map['OrderTaskInfo'])) {
            $model->orderTaskInfo = orderTaskInfo::fromMap($map['OrderTaskInfo']);
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['RunningTime'])) {
            $model->runningTime = $map['RunningTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
