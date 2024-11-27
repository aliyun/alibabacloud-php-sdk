<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mssp\V20161228\Models\CreateServiceWorkOrderResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 2024-03-07 16:45:01
     *
     * @var int
     */
    public $completeTime;

    /**
     * @example 2024-10-04T02:19:55Z
     *
     * @var int
     */
    public $createTime;

    /**
     * @example 426556
     *
     * @var string
     */
    public $creator;

    /**
     * @example 1477832102462645
     *
     * @var string
     */
    public $customerId;

    /**
     * @example 24-03-11 00:00:00
     *
     * @var int
     */
    public $endTime;

    /**
     * @example 1978941
     *
     * @var int
     */
    public $id;

    /**
     * @example 426556
     *
     * @var string
     */
    public $ownerId;

    /**
     * @example 2021-01-21 15:25:25
     *
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
     * @example UNPROCESSED
     *
     * @var string
     */
    public $workOrderStatus;

    /**
     * @example MONTH_REPORT
     *
     * @var string
     */
    public $workOrderType;
    protected $_name = [
        'completeTime'    => 'CompleteTime',
        'createTime'      => 'CreateTime',
        'creator'         => 'Creator',
        'customerId'      => 'CustomerId',
        'endTime'         => 'EndTime',
        'id'              => 'Id',
        'ownerId'         => 'OwnerId',
        'startTime'       => 'StartTime',
        'workOrderDetail' => 'WorkOrderDetail',
        'workOrderName'   => 'WorkOrderName',
        'workOrderSource' => 'WorkOrderSource',
        'workOrderStatus' => 'WorkOrderStatus',
        'workOrderType'   => 'WorkOrderType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->completeTime) {
            $res['CompleteTime'] = $this->completeTime;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }
        if (null !== $this->customerId) {
            $res['CustomerId'] = $this->customerId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
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

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CompleteTime'])) {
            $model->completeTime = $map['CompleteTime'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }
        if (isset($map['CustomerId'])) {
            $model->customerId = $map['CustomerId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
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
