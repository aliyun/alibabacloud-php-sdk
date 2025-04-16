<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;

class QueueInfo extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $codeType;

    /**
     * @var string
     */
    public $gmtCreatedTime;

    /**
     * @var string
     */
    public $gmtDequeuedTime;

    /**
     * @var string
     */
    public $gmtEnqueuedTime;

    /**
     * @var string
     */
    public $gmtPositionModifiedTime;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $position;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $queueStrategy;

    /**
     * @var string
     */
    public $quotaId;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var ResourceAmount
     */
    public $resource;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var string
     */
    public $workloadId;

    /**
     * @var string
     */
    public $workloadName;

    /**
     * @var string
     */
    public $workloadStatus;

    /**
     * @var string
     */
    public $workloadType;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'code' => 'Code',
        'codeType' => 'CodeType',
        'gmtCreatedTime' => 'GmtCreatedTime',
        'gmtDequeuedTime' => 'GmtDequeuedTime',
        'gmtEnqueuedTime' => 'GmtEnqueuedTime',
        'gmtPositionModifiedTime' => 'GmtPositionModifiedTime',
        'name' => 'Name',
        'position' => 'Position',
        'priority' => 'Priority',
        'queueStrategy' => 'QueueStrategy',
        'quotaId' => 'QuotaId',
        'reason' => 'Reason',
        'resource' => 'Resource',
        'status' => 'Status',
        'userId' => 'UserId',
        'userName' => 'UserName',
        'workloadId' => 'WorkloadId',
        'workloadName' => 'WorkloadName',
        'workloadStatus' => 'WorkloadStatus',
        'workloadType' => 'WorkloadType',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        if (null !== $this->resource) {
            $this->resource->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->codeType) {
            $res['CodeType'] = $this->codeType;
        }

        if (null !== $this->gmtCreatedTime) {
            $res['GmtCreatedTime'] = $this->gmtCreatedTime;
        }

        if (null !== $this->gmtDequeuedTime) {
            $res['GmtDequeuedTime'] = $this->gmtDequeuedTime;
        }

        if (null !== $this->gmtEnqueuedTime) {
            $res['GmtEnqueuedTime'] = $this->gmtEnqueuedTime;
        }

        if (null !== $this->gmtPositionModifiedTime) {
            $res['GmtPositionModifiedTime'] = $this->gmtPositionModifiedTime;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->position) {
            $res['Position'] = $this->position;
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        if (null !== $this->queueStrategy) {
            $res['QueueStrategy'] = $this->queueStrategy;
        }

        if (null !== $this->quotaId) {
            $res['QuotaId'] = $this->quotaId;
        }

        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }

        if (null !== $this->resource) {
            $res['Resource'] = null !== $this->resource ? $this->resource->toArray($noStream) : $this->resource;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        if (null !== $this->workloadId) {
            $res['WorkloadId'] = $this->workloadId;
        }

        if (null !== $this->workloadName) {
            $res['WorkloadName'] = $this->workloadName;
        }

        if (null !== $this->workloadStatus) {
            $res['WorkloadStatus'] = $this->workloadStatus;
        }

        if (null !== $this->workloadType) {
            $res['WorkloadType'] = $this->workloadType;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['CodeType'])) {
            $model->codeType = $map['CodeType'];
        }

        if (isset($map['GmtCreatedTime'])) {
            $model->gmtCreatedTime = $map['GmtCreatedTime'];
        }

        if (isset($map['GmtDequeuedTime'])) {
            $model->gmtDequeuedTime = $map['GmtDequeuedTime'];
        }

        if (isset($map['GmtEnqueuedTime'])) {
            $model->gmtEnqueuedTime = $map['GmtEnqueuedTime'];
        }

        if (isset($map['GmtPositionModifiedTime'])) {
            $model->gmtPositionModifiedTime = $map['GmtPositionModifiedTime'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Position'])) {
            $model->position = $map['Position'];
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        if (isset($map['QueueStrategy'])) {
            $model->queueStrategy = $map['QueueStrategy'];
        }

        if (isset($map['QuotaId'])) {
            $model->quotaId = $map['QuotaId'];
        }

        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        if (isset($map['Resource'])) {
            $model->resource = ResourceAmount::fromMap($map['Resource']);
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        if (isset($map['WorkloadId'])) {
            $model->workloadId = $map['WorkloadId'];
        }

        if (isset($map['WorkloadName'])) {
            $model->workloadName = $map['WorkloadName'];
        }

        if (isset($map['WorkloadStatus'])) {
            $model->workloadStatus = $map['WorkloadStatus'];
        }

        if (isset($map['WorkloadType'])) {
            $model->workloadType = $map['WorkloadType'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
