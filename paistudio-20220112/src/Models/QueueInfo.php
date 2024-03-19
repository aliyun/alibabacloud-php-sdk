<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Tea\Model;

class QueueInfo extends Model
{
    /**
     * @example roleMaximumResource
     *
     * @var string
     */
    public $code;

    /**
     * @example ConfigRule
     *
     * @var string
     */
    public $codeType;

    /**
     * @example "2023-06-22T00:00:00Z"
     *
     * @var string
     */
    public $gmtDequeuedTime;

    /**
     * @example “2023-06-22T00:00:00Z”
     *
     * @var string
     */
    public $gmtEnqueuedTime;

    /**
     * @example "2023-06-22T00:00:00Z"
     *
     * @var string
     */
    public $gmtPositionModifiedTime;

    /**
     * @example test-label-79f5498dd-9qrzs
     *
     * @var string
     */
    public $name;

    /**
     * @example 10
     *
     * @var int
     */
    public $position;

    /**
     * @example 2
     *
     * @var int
     */
    public $priority;

    /**
     * @example PaiStrategyIntelligent
     *
     * @var string
     */
    public $queueStrategy;

    /**
     * @example “quotamtl37ge7gkvdz”
     *
     * @var string
     */
    public $quotaId;

    /**
     * @example Current GPU Limit is 5, limited by Role PAI.AlgoDeveloper
     *
     * @var string
     */
    public $reason;

    /**
     * @var ResourceAmount
     */
    public $resource;

    /**
     * @example Enqueued
     *
     * @var string
     */
    public $status;

    /**
     * @example PreAllocation
     *
     * @var string
     */
    public $subStatus;

    /**
     * @var string
     */
    public $userId;

    /**
     * @example dlcxxxx
     *
     * @var string
     */
    public $workloadId;

    /**
     * @example dlc
     *
     * @var string
     */
    public $workloadType;

    /**
     * @example “432524”
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'code'                    => 'Code',
        'codeType'                => 'CodeType',
        'gmtDequeuedTime'         => 'GmtDequeuedTime',
        'gmtEnqueuedTime'         => 'GmtEnqueuedTime',
        'gmtPositionModifiedTime' => 'GmtPositionModifiedTime',
        'name'                    => 'Name',
        'position'                => 'Position',
        'priority'                => 'Priority',
        'queueStrategy'           => 'QueueStrategy',
        'quotaId'                 => 'QuotaId',
        'reason'                  => 'Reason',
        'resource'                => 'Resource',
        'status'                  => 'Status',
        'subStatus'               => 'SubStatus',
        'userId'                  => 'UserId',
        'workloadId'              => 'WorkloadId',
        'workloadType'            => 'WorkloadType',
        'workspaceId'             => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->codeType) {
            $res['CodeType'] = $this->codeType;
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
            $res['Resource'] = null !== $this->resource ? $this->resource->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->subStatus) {
            $res['SubStatus'] = $this->subStatus;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->workloadId) {
            $res['WorkloadId'] = $this->workloadId;
        }
        if (null !== $this->workloadType) {
            $res['WorkloadType'] = $this->workloadType;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueueInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['CodeType'])) {
            $model->codeType = $map['CodeType'];
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
        if (isset($map['SubStatus'])) {
            $model->subStatus = $map['SubStatus'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['WorkloadId'])) {
            $model->workloadId = $map['WorkloadId'];
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
