<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowClusterAllResponseBody\clusters;

use AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowClusterAllResponseBody\clusters\clusterInfo\failReason;
use AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowClusterAllResponseBody\clusters\clusterInfo\orderTaskInfo;
use AlibabaCloud\Tea\Model;

class clusterInfo extends Model
{
    /**
     * @description 付费类型。PostPaid: 按量付费，PrePaid：包年包月集群。
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description 资源。
     *
     * @var string
     */
    public $createResource;

    /**
     * @description 创建时间。
     *
     * @var int
     */
    public $createTime;

    /**
     * @description 过期时间。
     *
     * @var int
     */
    public $expiredTime;

    /**
     * @description 集群失败原因。
     *
     * @var failReason
     */
    public $failReason;

    /**
     * @description 是否有未完成订单。
     *
     * @var bool
     */
    public $hasUncompletedOrder;

    /**
     * @description 集群ID。
     *
     * @var string
     */
    public $id;

    /**
     * @description 保留字段。
     *
     * @var string
     */
    public $k8sClusterId;

    /**
     * @description 集群名字。
     *
     * @var string
     */
    public $name;

    /**
     * @description 订单列表
     *
     * @var string
     */
    public $orderList;

    /**
     * @description 订单任务信息。
     *
     * @var orderTaskInfo
     */
    public $orderTaskInfo;

    /**
     * @description 包年包月时间（包月数有：1、2、3、4、5、6、7、8、9、12、24、36）。ChargeType=PrePaid 时，必填。
     *
     * @var int
     */
    public $period;

    /**
     * @description 运行时间，单位：秒。
     *
     * @var int
     */
    public $runningTime;

    /**
     * @description 集群状态。
     *
     * @var string
     */
    public $status;

    /**
     * @description 集群类型。
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
