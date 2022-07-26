<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class ListJobsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $businessUserId;

    /**
     * @var string
     */
    public $caller;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var bool
     */
    public $fromAllWorkspaces;

    /**
     * @var string
     */
    public $jobType;

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
     * @var string
     */
    public $pipelineId;

    /**
     * @var string
     */
    public $resourceId;

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
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $tagsShrink;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'businessUserId'    => 'BusinessUserId',
        'caller'            => 'Caller',
        'displayName'       => 'DisplayName',
        'endTime'           => 'EndTime',
        'fromAllWorkspaces' => 'FromAllWorkspaces',
        'jobType'           => 'JobType',
        'order'             => 'Order',
        'pageNumber'        => 'PageNumber',
        'pageSize'          => 'PageSize',
        'pipelineId'        => 'PipelineId',
        'resourceId'        => 'ResourceId',
        'showOwn'           => 'ShowOwn',
        'sortBy'            => 'SortBy',
        'startTime'         => 'StartTime',
        'status'            => 'Status',
        'tagsShrink'        => 'Tags',
        'workspaceId'       => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessUserId) {
            $res['BusinessUserId'] = $this->businessUserId;
        }
        if (null !== $this->caller) {
            $res['Caller'] = $this->caller;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->fromAllWorkspaces) {
            $res['FromAllWorkspaces'] = $this->fromAllWorkspaces;
        }
        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
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
        if (null !== $this->pipelineId) {
            $res['PipelineId'] = $this->pipelineId;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->showOwn) {
            $res['ShowOwn'] = $this->showOwn;
        }
        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tagsShrink) {
            $res['Tags'] = $this->tagsShrink;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListJobsShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessUserId'])) {
            $model->businessUserId = $map['BusinessUserId'];
        }
        if (isset($map['Caller'])) {
            $model->caller = $map['Caller'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['FromAllWorkspaces'])) {
            $model->fromAllWorkspaces = $map['FromAllWorkspaces'];
        }
        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
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
        if (isset($map['PipelineId'])) {
            $model->pipelineId = $map['PipelineId'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ShowOwn'])) {
            $model->showOwn = $map['ShowOwn'];
        }
        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tags'])) {
            $model->tagsShrink = $map['Tags'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
