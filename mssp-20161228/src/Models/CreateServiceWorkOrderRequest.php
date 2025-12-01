<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mssp\V20161228\Models;

use AlibabaCloud\Dara\Model;

class CreateServiceWorkOrderRequest extends Model
{
    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $customerId;

    /**
     * @var string
     */
    public $durationDay;

    /**
     * @var string
     */
    public $isAttachment;

    /**
     * @var string
     */
    public $isMilestone;

    /**
     * @var string
     */
    public $isWorkOrderNotify;

    /**
     * @var string
     */
    public $notifyDay;

    /**
     * @var int
     */
    public $notifyId;

    /**
     * @var string
     */
    public $operateRemark;

    /**
     * @var string
     */
    public $operateType;

    /**
     * @var string
     */
    public $operator;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $workOrderDetail;

    /**
     * @var string
     */
    public $workOrderName;

    /**
     * @var string
     */
    public $workOrderSource;

    /**
     * @var string
     */
    public $workOrderStatus;

    /**
     * @var string
     */
    public $workOrderType;
    protected $_name = [
        'creator' => 'Creator',
        'customerId' => 'CustomerId',
        'durationDay' => 'DurationDay',
        'isAttachment' => 'IsAttachment',
        'isMilestone' => 'IsMilestone',
        'isWorkOrderNotify' => 'IsWorkOrderNotify',
        'notifyDay' => 'NotifyDay',
        'notifyId' => 'NotifyId',
        'operateRemark' => 'OperateRemark',
        'operateType' => 'OperateType',
        'operator' => 'Operator',
        'ownerId' => 'OwnerId',
        'priority' => 'Priority',
        'startTime' => 'StartTime',
        'workOrderDetail' => 'WorkOrderDetail',
        'workOrderName' => 'WorkOrderName',
        'workOrderSource' => 'WorkOrderSource',
        'workOrderStatus' => 'WorkOrderStatus',
        'workOrderType' => 'WorkOrderType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }

        if (null !== $this->customerId) {
            $res['CustomerId'] = $this->customerId;
        }

        if (null !== $this->durationDay) {
            $res['DurationDay'] = $this->durationDay;
        }

        if (null !== $this->isAttachment) {
            $res['IsAttachment'] = $this->isAttachment;
        }

        if (null !== $this->isMilestone) {
            $res['IsMilestone'] = $this->isMilestone;
        }

        if (null !== $this->isWorkOrderNotify) {
            $res['IsWorkOrderNotify'] = $this->isWorkOrderNotify;
        }

        if (null !== $this->notifyDay) {
            $res['NotifyDay'] = $this->notifyDay;
        }

        if (null !== $this->notifyId) {
            $res['NotifyId'] = $this->notifyId;
        }

        if (null !== $this->operateRemark) {
            $res['OperateRemark'] = $this->operateRemark;
        }

        if (null !== $this->operateType) {
            $res['OperateType'] = $this->operateType;
        }

        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->workOrderDetail) {
            $res['WorkOrderDetail'] = $this->workOrderDetail;
        }

        if (null !== $this->workOrderName) {
            $res['WorkOrderName'] = $this->workOrderName;
        }

        if (null !== $this->workOrderSource) {
            $res['WorkOrderSource'] = $this->workOrderSource;
        }

        if (null !== $this->workOrderStatus) {
            $res['WorkOrderStatus'] = $this->workOrderStatus;
        }

        if (null !== $this->workOrderType) {
            $res['WorkOrderType'] = $this->workOrderType;
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
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }

        if (isset($map['CustomerId'])) {
            $model->customerId = $map['CustomerId'];
        }

        if (isset($map['DurationDay'])) {
            $model->durationDay = $map['DurationDay'];
        }

        if (isset($map['IsAttachment'])) {
            $model->isAttachment = $map['IsAttachment'];
        }

        if (isset($map['IsMilestone'])) {
            $model->isMilestone = $map['IsMilestone'];
        }

        if (isset($map['IsWorkOrderNotify'])) {
            $model->isWorkOrderNotify = $map['IsWorkOrderNotify'];
        }

        if (isset($map['NotifyDay'])) {
            $model->notifyDay = $map['NotifyDay'];
        }

        if (isset($map['NotifyId'])) {
            $model->notifyId = $map['NotifyId'];
        }

        if (isset($map['OperateRemark'])) {
            $model->operateRemark = $map['OperateRemark'];
        }

        if (isset($map['OperateType'])) {
            $model->operateType = $map['OperateType'];
        }

        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['WorkOrderDetail'])) {
            $model->workOrderDetail = $map['WorkOrderDetail'];
        }

        if (isset($map['WorkOrderName'])) {
            $model->workOrderName = $map['WorkOrderName'];
        }

        if (isset($map['WorkOrderSource'])) {
            $model->workOrderSource = $map['WorkOrderSource'];
        }

        if (isset($map['WorkOrderStatus'])) {
            $model->workOrderStatus = $map['WorkOrderStatus'];
        }

        if (isset($map['WorkOrderType'])) {
            $model->workOrderType = $map['WorkOrderType'];
        }

        return $model;
    }
}
