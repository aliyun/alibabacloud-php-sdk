<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class ListTensorboardsRequest extends Model
{
    /**
     * @description The instance visibility.
     *
     *   PUBLIC: TensorBoard instances are visible to all members in the workspace.
     *   PRIVATE: TensorBoard instances are visible only to you and the administrator of the workspace.
     *
     * @example PRIVATE
     *
     * @var string
     */
    public $accessibility;

    /**
     * @description The TensorBoard instance name.
     *
     * @example TestTensorboard
     *
     * @var string
     */
    public $displayName;

    /**
     * @description The end time of the query. Use the UTC time when the TensorBoard instance is created to filter data. If you leave this parameter empty, the default value is the current time.
     *
     * @example 2020-11-09T14:45:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The job ID used to filter TensorBoard instances. For more information about how to obtain the ID of a job, see [ListJobs](https://help.aliyun.com/document_detail/459676.html).
     *
     * @example dlc-xxx
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The sorting order.
     *
     *   desc
     *   asc
     *
     * @example desc
     *
     * @var string
     */
    public $order;

    /**
     * @description The page number. Minimum value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of TensorBoard instances per page.
     *
     * @example 50
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The billing method of TensorBoard instances.
     *
     *   Free: the TensorBoard instance that uses free resources.
     *   Postpaid: the TensorBoard instance that uses pay-as-you-go resources.
     *
     * @example Postpaid
     *
     * @var string
     */
    public $paymentType;

    /**
     * @description The resource quota ID.
     *
     * >
     *
     *   Only whitelisted users can use resource quotas to create TensorBoard instances. If you want to use this feature, contact us.
     *
     *   This parameter takes effect only when TensorBoard instances use resource quotas.
     *
     * @example quota12***
     *
     * @var string
     */
    public $quotaId;

    /**
     * @description Specifies whether to return only the TensorBoard instances created by the current logon account.
     *
     * @example false
     *
     * @var bool
     */
    public $showOwn;

    /**
     * @description The returned field used to sort TensorBoard instances.
     *
     *   DisplayName: the name of the TensorBoard instance.
     *   GmtCreateTime: the time when the TensorBoard instance is created.
     *
     * @example GmtCreateTime
     *
     * @var string
     */
    public $sortBy;

    /**
     * @description The data source ID. For more information about how to obtain the ID of a job, see [ListJobs](https://help.aliyun.com/document_detail/459676.html).
     *
     * @example dlc-xxxxxx
     *
     * @var string
     */
    public $sourceId;

    /**
     * @description The data source associated with the TensorBoard instance. This parameter is no longer used. Only Deep Learning Containers (DLC) training jobs are supported.
     *
     * @example job
     *
     * @var string
     */
    public $sourceType;

    /**
     * @description The start time of the query. Use the UTC time when the TensorBoard instance is created to filter data. If you leave this parameter empty, the default value is seven days before the current time.
     *
     * @example 2020-11-08T16:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The TensorBoard instance status. Valid values:
     *
     *   Creating
     *   Running
     *   Stopped
     *   Succeeded
     *   Failed
     *
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @description The TensorBoard instance ID used to filter TensorBoard instances.
     *
     * @example tensorboard-xxx
     *
     * @var string
     */
    public $tensorboardId;

    /**
     * @description The user ID.
     *
     * @example 161****3000
     *
     * @var string
     */
    public $userId;

    /**
     * @description The username.
     *
     * @example she****mo
     *
     * @var string
     */
    public $username;

    /**
     * @description Specifies whether to return the information about the TensorBoard instance.
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $verbose;

    /**
     * @description The workspace ID. Obtain a list of TensorBoard instances based on the workspace ID.
     *
     * @example 380
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'accessibility' => 'Accessibility',
        'displayName' => 'DisplayName',
        'endTime' => 'EndTime',
        'jobId' => 'JobId',
        'order' => 'Order',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'paymentType' => 'PaymentType',
        'quotaId' => 'QuotaId',
        'showOwn' => 'ShowOwn',
        'sortBy' => 'SortBy',
        'sourceId' => 'SourceId',
        'sourceType' => 'SourceType',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'tensorboardId' => 'TensorboardId',
        'userId' => 'UserId',
        'username' => 'Username',
        'verbose' => 'Verbose',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessibility) {
            $res['Accessibility'] = $this->accessibility;
        }
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
        if (null !== $this->quotaId) {
            $res['QuotaId'] = $this->quotaId;
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
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->username) {
            $res['Username'] = $this->username;
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
        if (isset($map['Accessibility'])) {
            $model->accessibility = $map['Accessibility'];
        }
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
        if (isset($map['QuotaId'])) {
            $model->quotaId = $map['QuotaId'];
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
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['Username'])) {
            $model->username = $map['Username'];
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
