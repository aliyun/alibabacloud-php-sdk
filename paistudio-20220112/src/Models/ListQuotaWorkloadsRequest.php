<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;

class ListQuotaWorkloadsRequest extends Model
{
    /**
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
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @var string
     */
    public $order;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $position;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var bool
     */
    public $showOwn;

    /**
     * @var string
     */
    public $sortBy;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $subQuotaIds;

    /**
     * @var bool
     */
    public $useOversoldResource;

    /**
     * @var string
     */
    public $userIds;

    /**
     * @var bool
     */
    public $withHistoricalData;

    /**
     * @var TimeRangeFilter
     */
    public $workloadCreatedTimeRange;

    /**
     * @var string
     */
    public $workloadIds;

    /**
     * @var string
     */
    public $workloadNames;

    /**
     * @var string
     */
    public $workloadStatuses;

    /**
     * @var string
     */
    public $workloadType;

    /**
     * @var string
     */
    public $workspaceIds;
    protected $_name = [
        'beforeWorkloadId' => 'BeforeWorkloadId',
        'gmtDequeuedTimeRange' => 'GmtDequeuedTimeRange',
        'gmtEnqueuedTimeRange' => 'GmtEnqueuedTimeRange',
        'gmtPositionModifiedTimeRange' => 'GmtPositionModifiedTimeRange',
        'instanceId' => 'InstanceId',
        'nodeName' => 'NodeName',
        'order' => 'Order',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'position' => 'Position',
        'priority' => 'Priority',
        'showOwn' => 'ShowOwn',
        'sortBy' => 'SortBy',
        'status' => 'Status',
        'subQuotaIds' => 'SubQuotaIds',
        'useOversoldResource' => 'UseOversoldResource',
        'userIds' => 'UserIds',
        'withHistoricalData' => 'WithHistoricalData',
        'workloadCreatedTimeRange' => 'WorkloadCreatedTimeRange',
        'workloadIds' => 'WorkloadIds',
        'workloadNames' => 'WorkloadNames',
        'workloadStatuses' => 'WorkloadStatuses',
        'workloadType' => 'WorkloadType',
        'workspaceIds' => 'WorkspaceIds',
    ];

    public function validate()
    {
        if (null !== $this->gmtDequeuedTimeRange) {
            $this->gmtDequeuedTimeRange->validate();
        }
        if (null !== $this->gmtEnqueuedTimeRange) {
            $this->gmtEnqueuedTimeRange->validate();
        }
        if (null !== $this->gmtPositionModifiedTimeRange) {
            $this->gmtPositionModifiedTimeRange->validate();
        }
        if (null !== $this->workloadCreatedTimeRange) {
            $this->workloadCreatedTimeRange->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->beforeWorkloadId) {
            $res['BeforeWorkloadId'] = $this->beforeWorkloadId;
        }

        if (null !== $this->gmtDequeuedTimeRange) {
            $res['GmtDequeuedTimeRange'] = null !== $this->gmtDequeuedTimeRange ? $this->gmtDequeuedTimeRange->toArray($noStream) : $this->gmtDequeuedTimeRange;
        }

        if (null !== $this->gmtEnqueuedTimeRange) {
            $res['GmtEnqueuedTimeRange'] = null !== $this->gmtEnqueuedTimeRange ? $this->gmtEnqueuedTimeRange->toArray($noStream) : $this->gmtEnqueuedTimeRange;
        }

        if (null !== $this->gmtPositionModifiedTimeRange) {
            $res['GmtPositionModifiedTimeRange'] = null !== $this->gmtPositionModifiedTimeRange ? $this->gmtPositionModifiedTimeRange->toArray($noStream) : $this->gmtPositionModifiedTimeRange;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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

        if (null !== $this->position) {
            $res['Position'] = $this->position;
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
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

        if (null !== $this->useOversoldResource) {
            $res['UseOversoldResource'] = $this->useOversoldResource;
        }

        if (null !== $this->userIds) {
            $res['UserIds'] = $this->userIds;
        }

        if (null !== $this->withHistoricalData) {
            $res['WithHistoricalData'] = $this->withHistoricalData;
        }

        if (null !== $this->workloadCreatedTimeRange) {
            $res['WorkloadCreatedTimeRange'] = null !== $this->workloadCreatedTimeRange ? $this->workloadCreatedTimeRange->toArray($noStream) : $this->workloadCreatedTimeRange;
        }

        if (null !== $this->workloadIds) {
            $res['WorkloadIds'] = $this->workloadIds;
        }

        if (null !== $this->workloadNames) {
            $res['WorkloadNames'] = $this->workloadNames;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
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

        if (isset($map['Position'])) {
            $model->position = $map['Position'];
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
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

        if (isset($map['UseOversoldResource'])) {
            $model->useOversoldResource = $map['UseOversoldResource'];
        }

        if (isset($map['UserIds'])) {
            $model->userIds = $map['UserIds'];
        }

        if (isset($map['WithHistoricalData'])) {
            $model->withHistoricalData = $map['WithHistoricalData'];
        }

        if (isset($map['WorkloadCreatedTimeRange'])) {
            $model->workloadCreatedTimeRange = TimeRangeFilter::fromMap($map['WorkloadCreatedTimeRange']);
        }

        if (isset($map['WorkloadIds'])) {
            $model->workloadIds = $map['WorkloadIds'];
        }

        if (isset($map['WorkloadNames'])) {
            $model->workloadNames = $map['WorkloadNames'];
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
