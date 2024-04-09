<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class ListJobsRequest extends Model
{
    /**
     * @example 16****
     *
     * @var string
     */
    public $businessUserId;

    /**
     * @example local
     *
     * @var string
     */
    public $caller;

    /**
     * @example tf-mnist-test
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
     * @example false
     *
     * @var bool
     */
    public $fromAllWorkspaces;

    /**
     * @example dlc********
     *
     * @var string
     */
    public $jobId;

    /**
     * @example TFJob
     *
     * @var string
     */
    public $jobType;

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
     * @example flow-*******
     *
     * @var string
     */
    public $pipelineId;

    /**
     * @example r*****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $resourceQuotaName;

    /**
     * @example true
     *
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
     * @var string[]
     */
    public $tags;

    /**
     * @var string
     */
    public $userIdForFilter;

    /**
     * @var string
     */
    public $username;

    /**
     * @example 1****
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'businessUserId'    => 'BusinessUserId',
        'caller'            => 'Caller',
        'displayName'       => 'DisplayName',
        'endTime'           => 'EndTime',
        'fromAllWorkspaces' => 'FromAllWorkspaces',
        'jobId'             => 'JobId',
        'jobType'           => 'JobType',
        'order'             => 'Order',
        'pageNumber'        => 'PageNumber',
        'pageSize'          => 'PageSize',
        'pipelineId'        => 'PipelineId',
        'resourceId'        => 'ResourceId',
        'resourceQuotaName' => 'ResourceQuotaName',
        'showOwn'           => 'ShowOwn',
        'sortBy'            => 'SortBy',
        'startTime'         => 'StartTime',
        'status'            => 'Status',
        'tags'              => 'Tags',
        'userIdForFilter'   => 'UserIdForFilter',
        'username'          => 'Username',
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
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
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
        if (null !== $this->resourceQuotaName) {
            $res['ResourceQuotaName'] = $this->resourceQuotaName;
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
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->userIdForFilter) {
            $res['UserIdForFilter'] = $this->userIdForFilter;
        }
        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListJobsRequest
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
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
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
        if (isset($map['ResourceQuotaName'])) {
            $model->resourceQuotaName = $map['ResourceQuotaName'];
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
            $model->tags = $map['Tags'];
        }
        if (isset($map['UserIdForFilter'])) {
            $model->userIdForFilter = $map['UserIdForFilter'];
        }
        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
