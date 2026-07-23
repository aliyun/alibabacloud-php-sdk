<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;

class AgenticDmsInstanceSyncTask extends Model
{
    /**
     * @var string
     */
    public $actorId;

    /**
     * @var string
     */
    public $actorName;

    /**
     * @var string
     */
    public $actorType;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorSummary;

    /**
     * @var int
     */
    public $failedCount;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $skippedCount;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $successCount;

    /**
     * @var bool
     */
    public $syncUserDataPermission;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'actorId' => 'ActorId',
        'actorName' => 'ActorName',
        'actorType' => 'ActorType',
        'errorCode' => 'ErrorCode',
        'errorSummary' => 'ErrorSummary',
        'failedCount' => 'FailedCount',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'skippedCount' => 'SkippedCount',
        'status' => 'Status',
        'successCount' => 'SuccessCount',
        'syncUserDataPermission' => 'SyncUserDataPermission',
        'taskId' => 'TaskId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actorId) {
            $res['ActorId'] = $this->actorId;
        }

        if (null !== $this->actorName) {
            $res['ActorName'] = $this->actorName;
        }

        if (null !== $this->actorType) {
            $res['ActorType'] = $this->actorType;
        }

        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }

        if (null !== $this->errorSummary) {
            $res['ErrorSummary'] = $this->errorSummary;
        }

        if (null !== $this->failedCount) {
            $res['FailedCount'] = $this->failedCount;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->skippedCount) {
            $res['SkippedCount'] = $this->skippedCount;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->successCount) {
            $res['SuccessCount'] = $this->successCount;
        }

        if (null !== $this->syncUserDataPermission) {
            $res['SyncUserDataPermission'] = $this->syncUserDataPermission;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['ActorId'])) {
            $model->actorId = $map['ActorId'];
        }

        if (isset($map['ActorName'])) {
            $model->actorName = $map['ActorName'];
        }

        if (isset($map['ActorType'])) {
            $model->actorType = $map['ActorType'];
        }

        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }

        if (isset($map['ErrorSummary'])) {
            $model->errorSummary = $map['ErrorSummary'];
        }

        if (isset($map['FailedCount'])) {
            $model->failedCount = $map['FailedCount'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['SkippedCount'])) {
            $model->skippedCount = $map['SkippedCount'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SuccessCount'])) {
            $model->successCount = $map['SuccessCount'];
        }

        if (isset($map['SyncUserDataPermission'])) {
            $model->syncUserDataPermission = $map['SyncUserDataPermission'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
