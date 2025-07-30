<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class ListJobsShrinkRequest extends Model
{
    /**
     * @description The job visibility. Valid values:
     *
     *   PUBLIC: The job is visible to all members in the workspace.
     *   PRIVATE: The job is visible only to you and the administrator of the workspace.
     *
     * @example PRIVATE
     *
     * @var string
     */
    public $accessibility;

    /**
     * @description The ID of the user associated with the job.
     *
     * @example 16****
     *
     * @var string
     */
    public $businessUserId;

    /**
     * @description The caller.
     *
     * @example local
     *
     * @var string
     */
    public $caller;

    /**
     * @description The job name. Fuzzy query is supported. The name is case-insensitive. Wildcards are not supported. For example, if you enter test, test-job1, job-test, job-test2, or job-test can be matched, and job-t1 cannot be matched. The default value null indicates any job name.
     *
     * @example tf-mnist-test
     *
     * @var string
     */
    public $displayName;

    /**
     * @description The end time of the query. Use the job creation time to filter data. The default value is the current time.
     *
     * @example 2020-11-09T14:45:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description Specifies whether to query a list of jobs across workspaces. This parameter must be used together with `ShowOwn=true`. You can use this parameter to query a list of jobs recently submitted by the current user.
     *
     * @example false
     *
     * @var bool
     */
    public $fromAllWorkspaces;

    /**
     * @description The job ID. Fuzzy query is supported. The name is case-insensitive. Wildcards are not supported. The default value null indicates any job ID.
     *
     * @example dlc********
     *
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $jobIds;

    /**
     * @description The job type. The default value null indicates any type. Valid values:
     *
     *   TFJob
     *   PyTorchJob
     *   XGBoostJob
     *   OneFlowJob
     *   ElasticBatchJob
     *
     * @example TFJob
     *
     * @var string
     */
    public $jobType;

    /**
     * @description The sorting order. Valid values:
     *
     *   desc (default)
     *   asc
     *
     * @example desc
     *
     * @var string
     */
    public $order;

    /**
     * @description The Idle resource information. Valid values:
     *
     *   ForbiddenQuotaOverSold
     *   ForceQuotaOverSold
     *   AcceptQuotaOverSold-true (true indicates that the job uses idle resources.)
     *   AcceptQuotaOverSold-false (false indicates that the job uses guaranteed resources.)
     *
     * @example ForbiddenQuotaOverSold
     *
     * @var string
     */
    public $oversoldInfo;

    /**
     * @description The number of the page to return for the current query. Minimum value: 1. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of jobs per page.
     *
     * @example 50
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The type of the resource. Valid values:
     *
     *   PrePaid: Resource quota
     *   Spot: Preemptible resources
     *   PostPaid: Public resources
     *
     * @example PostPaid
     *
     * @var string
     */
    public $paymentType;

    /**
     * @description The specific pipeline ID used to filter jobs.
     *
     * @example flow-*******
     *
     * @var string
     */
    public $pipelineId;

    /**
     * @description The resource group ID. For information about how to obtain the ID of a dedicated resource group, see [Manage resource quota](https://help.aliyun.com/document_detail/2651299.html).
     *
     * @example r*****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The resource quota name used to filter jobs. Fuzzy search is supported. Wildcards are not supported. The default value null indicates that jobs are not filtered by resource quota name.
     *
     * @example quota***
     *
     * @var string
     */
    public $resourceQuotaName;

    /**
     * @description Specifies whether to query only the jobs submitted by the current user.
     *
     * @example true
     *
     * @var bool
     */
    public $showOwn;

    /**
     * @description The sorting field. Valid values:
     *
     *   DisplayName
     *   JobType
     *   Status
     *   GmtCreateTime
     *   GmtFinishTime
     *
     * @example GmtCreateTime
     *
     * @var string
     */
    public $sortBy;

    /**
     * @description The start time of the query. Use the job creation time to filter data. The default value is the current time minus seven days. In other words, if you do not configure the StartTime and EndTime parameters, the system queries the job list in the last seven days.
     *
     * @example 2020-11-08T16:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The job status. Valid values:
     *
     *   Creating
     *   Queuing
     *   Bidding (only available for spot jobs that use Lingjun resources)
     *   EnvPreparing
     *   SanityChecking
     *   Running
     *   Restarting
     *   Stopping
     *   SucceededReserving
     *   FailedReserving
     *   Succeeded
     *   Failed
     *   Stopped
     *
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @description The tags.
     *
     * @var string
     */
    public $tagsShrink;

    /**
     * @description The user ID used to filter jobs.
     *
     * @example 20**************
     *
     * @var string
     */
    public $userIdForFilter;

    /**
     * @description The username used to filter jobs. Fuzzy search is supported. Wildcards are not supported. The default value null indicates that jobs are not filtered by username.
     *
     * @example test***
     *
     * @var string
     */
    public $username;

    /**
     * @description The workspace ID.
     *
     * @example 1****
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'accessibility' => 'Accessibility',
        'businessUserId' => 'BusinessUserId',
        'caller' => 'Caller',
        'displayName' => 'DisplayName',
        'endTime' => 'EndTime',
        'fromAllWorkspaces' => 'FromAllWorkspaces',
        'jobId' => 'JobId',
        'jobIds' => 'JobIds',
        'jobType' => 'JobType',
        'order' => 'Order',
        'oversoldInfo' => 'OversoldInfo',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'paymentType' => 'PaymentType',
        'pipelineId' => 'PipelineId',
        'resourceId' => 'ResourceId',
        'resourceQuotaName' => 'ResourceQuotaName',
        'showOwn' => 'ShowOwn',
        'sortBy' => 'SortBy',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'tagsShrink' => 'Tags',
        'userIdForFilter' => 'UserIdForFilter',
        'username' => 'Username',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessibility) {
            $res['Accessibility'] = $this->accessibility;
        }
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
        if (null !== $this->jobIds) {
            $res['JobIds'] = $this->jobIds;
        }
        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }
        if (null !== $this->oversoldInfo) {
            $res['OversoldInfo'] = $this->oversoldInfo;
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
        if (null !== $this->tagsShrink) {
            $res['Tags'] = $this->tagsShrink;
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
     * @return ListJobsShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Accessibility'])) {
            $model->accessibility = $map['Accessibility'];
        }
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
        if (isset($map['JobIds'])) {
            $model->jobIds = $map['JobIds'];
        }
        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }
        if (isset($map['OversoldInfo'])) {
            $model->oversoldInfo = $map['OversoldInfo'];
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
            $model->tagsShrink = $map['Tags'];
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
