<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Tea\Model;

class ListQuotaWorkloadsRequest extends Model
{
    /**
     * @example dsw65443322
     *
     * @var string
     */
    public $beforeWorkloadId;

    /**
     * @var TimeRangeFilter
     */
    public $gmtDequeuedTimeRange;

    /**
     * @var TimeRangeFilter
     */
    public $gmtEnqueuedTimeRange;

    /**
     * @var TimeRangeFilter
     */
    public $gmtPositionModifiedTimeRange;

    /**
     * @example lrn48278127617
     *
     * @var string
     */
    public $nodeName;

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
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example true
     *
     * @var bool
     */
    public $showOwn;

    /**
     * @example GmtCreatedTime
     *
     * @var string
     */
    public $sortBy;

    /**
     * @example Enqueued
     *
     * @var string
     */
    public $status;

    /**
     * @example quota12344666,quota64432233
     *
     * @var string
     */
    public $subQuotaIds;

    /**
     * @example 29043893812,23829093093
     *
     * @var string
     */
    public $userIds;

    /**
     * @var TimeRangeFilter
     */
    public $workloadCreatedTimeRange;

    /**
     * @example dlc12344556
     *
     * @var string
     */
    public $workloadIds;

    /**
     * @example Pending
     *
     * @var string
     */
    public $workloadStatuses;

    /**
     * @example dlc
     *
     * @var string
     */
    public $workloadType;

    /**
     * @example 186692
     *
     * @var string
     */
    public $workspaceIds;
    protected $_name = [
        'beforeWorkloadId'             => 'BeforeWorkloadId',
        'gmtDequeuedTimeRange'         => 'GmtDequeuedTimeRange',
        'gmtEnqueuedTimeRange'         => 'GmtEnqueuedTimeRange',
        'gmtPositionModifiedTimeRange' => 'GmtPositionModifiedTimeRange',
        'nodeName'                     => 'NodeName',
        'order'                        => 'Order',
        'pageNumber'                   => 'PageNumber',
        'pageSize'                     => 'PageSize',
        'showOwn'                      => 'ShowOwn',
        'sortBy'                       => 'SortBy',
        'status'                       => 'Status',
        'subQuotaIds'                  => 'SubQuotaIds',
        'userIds'                      => 'UserIds',
        'workloadCreatedTimeRange'     => 'WorkloadCreatedTimeRange',
        'workloadIds'                  => 'WorkloadIds',
        'workloadStatuses'             => 'WorkloadStatuses',
        'workloadType'                 => 'WorkloadType',
        'workspaceIds'                 => 'WorkspaceIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->beforeWorkloadId) {
            $res['BeforeWorkloadId'] = $this->beforeWorkloadId;
        }
        if (null !== $this->gmtDequeuedTimeRange) {
            $res['GmtDequeuedTimeRange'] = null !== $this->gmtDequeuedTimeRange ? $this->gmtDequeuedTimeRange->toMap() : null;
        }
        if (null !== $this->gmtEnqueuedTimeRange) {
            $res['GmtEnqueuedTimeRange'] = null !== $this->gmtEnqueuedTimeRange ? $this->gmtEnqueuedTimeRange->toMap() : null;
        }
        if (null !== $this->gmtPositionModifiedTimeRange) {
            $res['GmtPositionModifiedTimeRange'] = null !== $this->gmtPositionModifiedTimeRange ? $this->gmtPositionModifiedTimeRange->toMap() : null;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
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
        if (null !== $this->showOwn) {
            $res['ShowOwn'] = $this->showOwn;
        }
        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->subQuotaIds) {
            $res['SubQuotaIds'] = $this->subQuotaIds;
        }
        if (null !== $this->userIds) {
            $res['UserIds'] = $this->userIds;
        }
        if (null !== $this->workloadCreatedTimeRange) {
            $res['WorkloadCreatedTimeRange'] = null !== $this->workloadCreatedTimeRange ? $this->workloadCreatedTimeRange->toMap() : null;
        }
        if (null !== $this->workloadIds) {
            $res['WorkloadIds'] = $this->workloadIds;
        }
        if (null !== $this->workloadStatuses) {
            $res['WorkloadStatuses'] = $this->workloadStatuses;
        }
        if (null !== $this->workloadType) {
            $res['WorkloadType'] = $this->workloadType;
        }
        if (null !== $this->workspaceIds) {
            $res['WorkspaceIds'] = $this->workspaceIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListQuotaWorkloadsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BeforeWorkloadId'])) {
            $model->beforeWorkloadId = $map['BeforeWorkloadId'];
        }
        if (isset($map['GmtDequeuedTimeRange'])) {
            $model->gmtDequeuedTimeRange = TimeRangeFilter::fromMap($map['GmtDequeuedTimeRange']);
        }
        if (isset($map['GmtEnqueuedTimeRange'])) {
            $model->gmtEnqueuedTimeRange = TimeRangeFilter::fromMap($map['GmtEnqueuedTimeRange']);
        }
        if (isset($map['GmtPositionModifiedTimeRange'])) {
            $model->gmtPositionModifiedTimeRange = TimeRangeFilter::fromMap($map['GmtPositionModifiedTimeRange']);
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
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
        if (isset($map['ShowOwn'])) {
            $model->showOwn = $map['ShowOwn'];
        }
        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SubQuotaIds'])) {
            $model->subQuotaIds = $map['SubQuotaIds'];
        }
        if (isset($map['UserIds'])) {
            $model->userIds = $map['UserIds'];
        }
        if (isset($map['WorkloadCreatedTimeRange'])) {
            $model->workloadCreatedTimeRange = TimeRangeFilter::fromMap($map['WorkloadCreatedTimeRange']);
        }
        if (isset($map['WorkloadIds'])) {
            $model->workloadIds = $map['WorkloadIds'];
        }
        if (isset($map['WorkloadStatuses'])) {
            $model->workloadStatuses = $map['WorkloadStatuses'];
        }
        if (isset($map['WorkloadType'])) {
            $model->workloadType = $map['WorkloadType'];
        }
        if (isset($map['WorkspaceIds'])) {
            $model->workspaceIds = $map['WorkspaceIds'];
        }

        return $model;
    }
}
