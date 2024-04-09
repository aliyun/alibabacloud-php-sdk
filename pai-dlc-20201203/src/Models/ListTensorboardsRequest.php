<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class ListTensorboardsRequest extends Model
{
    /**
     * @example TestTensorboard
     *
     * @var string
     */
    public $displayName;

    /**
     * @example 2020-11-09T14:45:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example dlc-xxx
     *
     * @var string
     */
    public $jobId;

    /**
     * @example desc
     *
     * @var string
     */
    public $order;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 50
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $paymentType;

    /**
     * @var bool
     */
    public $showOwn;

    /**
     * @example GmtCreateTime
     *
     * @var string
     */
    public $sortBy;

    /**
     * @example dlc-xxxxxx
     *
     * @var string
     */
    public $sourceId;

    /**
     * @example job
     *
     * @var string
     */
    public $sourceType;

    /**
     * @example 2020-11-08T16:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @example tensorboard-xxx
     *
     * @var string
     */
    public $tensorboardId;

    /**
     * @example true
     *
     * @var bool
     */
    public $verbose;

    /**
     * @example 380
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'displayName'   => 'DisplayName',
        'endTime'       => 'EndTime',
        'jobId'         => 'JobId',
        'order'         => 'Order',
        'pageNumber'    => 'PageNumber',
        'pageSize'      => 'PageSize',
        'paymentType'   => 'PaymentType',
        'showOwn'       => 'ShowOwn',
        'sortBy'        => 'SortBy',
        'sourceId'      => 'SourceId',
        'sourceType'    => 'SourceType',
        'startTime'     => 'StartTime',
        'status'        => 'Status',
        'tensorboardId' => 'TensorboardId',
        'verbose'       => 'Verbose',
        'workspaceId'   => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->paymentType) {
            $res['PaymentType'] = $this->paymentType;
        }
        if (null !== $this->showOwn) {
            $res['ShowOwn'] = $this->showOwn;
        }
        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }
        if (null !== $this->sourceId) {
            $res['SourceId'] = $this->sourceId;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tensorboardId) {
            $res['TensorboardId'] = $this->tensorboardId;
        }
        if (null !== $this->verbose) {
            $res['Verbose'] = $this->verbose;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTensorboardsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PaymentType'])) {
            $model->paymentType = $map['PaymentType'];
        }
        if (isset($map['ShowOwn'])) {
            $model->showOwn = $map['ShowOwn'];
        }
        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }
        if (isset($map['SourceId'])) {
            $model->sourceId = $map['SourceId'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TensorboardId'])) {
            $model->tensorboardId = $map['TensorboardId'];
        }
        if (isset($map['Verbose'])) {
            $model->verbose = $map['Verbose'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
