<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class ListJobsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $accessibility;

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
    public $displayNameSearchMode;

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
    public $jobId;

    /**
     * @var string
     */
    public $jobIds;

    /**
     * @var string
     */
    public $jobType;

    /**
     * @var string
     */
    public $order;

    /**
     * @var string
     */
    public $oversoldInfo;

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
    public $paymentType;

    /**
     * @var string
     */
    public $pipelineId;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $resourceQuotaName;

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
    public $userIdForFilter;

    /**
     * @var string
     */
    public $username;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'accessibility' => 'Accessibility',
        'businessUserId' => 'BusinessUserId',
        'caller' => 'Caller',
        'displayName' => 'DisplayName',
        'displayNameSearchMode' => 'DisplayNameSearchMode',
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->displayNameSearchMode) {
            $res['DisplayNameSearchMode'] = $this->displayNameSearchMode;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['DisplayNameSearchMode'])) {
            $model->displayNameSearchMode = $map['DisplayNameSearchMode'];
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
