<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowClusterAllResponseBody\clusters;

use AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowClusterAllResponseBody\clusters\clusterInfo\failReason;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowClusterAllResponseBody\clusters\clusterInfo\orderTaskInfo;
use AlibabaCloud\Tea\Model;

class clusterInfo extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $runningTime;

    /**
     * @var string
     */
    public $orderList;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var int
     */
    public $period;

    /**
     * @var string
     */
    public $k8sClusterId;

    /**
     * @var int
     */
    public $expiredTime;

    /**
     * @var bool
     */
    public $hasUncompletedOrder;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $createResource;

    /**
     * @var orderTaskInfo
     */
    public $orderTaskInfo;

    /**
     * @var failReason
     */
    public $failReason;
    protected $_name = [
        'type'                => 'Type',
        'status'              => 'Status',
        'runningTime'         => 'RunningTime',
        'orderList'           => 'OrderList',
        'createTime'          => 'CreateTime',
        'chargeType'          => 'ChargeType',
        'period'              => 'Period',
        'k8sClusterId'        => 'K8sClusterId',
        'expiredTime'         => 'ExpiredTime',
        'hasUncompletedOrder' => 'HasUncompletedOrder',
        'name'                => 'Name',
        'id'                  => 'Id',
        'createResource'      => 'CreateResource',
        'orderTaskInfo'       => 'OrderTaskInfo',
        'failReason'          => 'FailReason',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->runningTime) {
            $res['RunningTime'] = $this->runningTime;
        }
        if (null !== $this->orderList) {
            $res['OrderList'] = $this->orderList;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->k8sClusterId) {
            $res['K8sClusterId'] = $this->k8sClusterId;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->hasUncompletedOrder) {
            $res['HasUncompletedOrder'] = $this->hasUncompletedOrder;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->createResource) {
            $res['CreateResource'] = $this->createResource;
        }
        if (null !== $this->orderTaskInfo) {
            $res['OrderTaskInfo'] = null !== $this->orderTaskInfo ? $this->orderTaskInfo->toMap() : null;
        }
        if (null !== $this->failReason) {
            $res['FailReason'] = null !== $this->failReason ? $this->failReason->toMap() : null;
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['RunningTime'])) {
            $model->runningTime = $map['RunningTime'];
        }
        if (isset($map['OrderList'])) {
            $model->orderList = $map['OrderList'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['K8sClusterId'])) {
            $model->k8sClusterId = $map['K8sClusterId'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['HasUncompletedOrder'])) {
            $model->hasUncompletedOrder = $map['HasUncompletedOrder'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['CreateResource'])) {
            $model->createResource = $map['CreateResource'];
        }
        if (isset($map['OrderTaskInfo'])) {
            $model->orderTaskInfo = orderTaskInfo::fromMap($map['OrderTaskInfo']);
        }
        if (isset($map['FailReason'])) {
            $model->failReason = failReason::fromMap($map['FailReason']);
        }

        return $model;
    }
}
