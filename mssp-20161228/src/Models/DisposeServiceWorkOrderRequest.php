<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mssp\V20161228\Models;

use AlibabaCloud\Dara\Model;

class DisposeServiceWorkOrderRequest extends Model
{
    /**
     * @var string
     */
    public $attachmentName;
    /**
     * @var int
     */
    public $endTime;
    /**
     * @var string
     */
    public $forwardOwnerId;
    /**
     * @var int
     */
    public $id;
    /**
     * @var string
     */
    public $isAttachment;
    /**
     * @var string
     */
    public $isWorkOrderNotify;
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
     * @var int
     */
    public $startTime;
    /**
     * @var string
     */
    public $upgradeOwnerId;
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
    public $workOrderStatus;
    protected $_name = [
        'attachmentName'    => 'AttachmentName',
        'endTime'           => 'EndTime',
        'forwardOwnerId'    => 'ForwardOwnerId',
        'id'                => 'Id',
        'isAttachment'      => 'IsAttachment',
        'isWorkOrderNotify' => 'IsWorkOrderNotify',
        'notifyId'          => 'NotifyId',
        'operateRemark'     => 'OperateRemark',
        'operateType'       => 'OperateType',
        'operator'          => 'Operator',
        'startTime'         => 'StartTime',
        'upgradeOwnerId'    => 'UpgradeOwnerId',
        'workOrderDetail'   => 'WorkOrderDetail',
        'workOrderName'     => 'WorkOrderName',
        'workOrderStatus'   => 'WorkOrderStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attachmentName) {
            $res['AttachmentName'] = $this->attachmentName;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->forwardOwnerId) {
            $res['ForwardOwnerId'] = $this->forwardOwnerId;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->isAttachment) {
            $res['IsAttachment'] = $this->isAttachment;
        }

        if (null !== $this->isWorkOrderNotify) {
            $res['IsWorkOrderNotify'] = $this->isWorkOrderNotify;
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

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->upgradeOwnerId) {
            $res['UpgradeOwnerId'] = $this->upgradeOwnerId;
        }

        if (null !== $this->workOrderDetail) {
            $res['WorkOrderDetail'] = $this->workOrderDetail;
        }

        if (null !== $this->workOrderName) {
            $res['WorkOrderName'] = $this->workOrderName;
        }

        if (null !== $this->workOrderStatus) {
            $res['WorkOrderStatus'] = $this->workOrderStatus;
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
        if (isset($map['AttachmentName'])) {
            $model->attachmentName = $map['AttachmentName'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['ForwardOwnerId'])) {
            $model->forwardOwnerId = $map['ForwardOwnerId'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['IsAttachment'])) {
            $model->isAttachment = $map['IsAttachment'];
        }

        if (isset($map['IsWorkOrderNotify'])) {
            $model->isWorkOrderNotify = $map['IsWorkOrderNotify'];
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

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['UpgradeOwnerId'])) {
            $model->upgradeOwnerId = $map['UpgradeOwnerId'];
        }

        if (isset($map['WorkOrderDetail'])) {
            $model->workOrderDetail = $map['WorkOrderDetail'];
        }

        if (isset($map['WorkOrderName'])) {
            $model->workOrderName = $map['WorkOrderName'];
        }

        if (isset($map['WorkOrderStatus'])) {
            $model->workOrderStatus = $map['WorkOrderStatus'];
        }

        return $model;
    }
}
