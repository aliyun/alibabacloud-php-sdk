<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class AsyncTask extends Model
{
    /**
     * @var string
     */
    public $asyncTaskId;

    /**
     * @var string
     */
    public $category;

    /**
     * @var int
     */
    public $consumedProcess;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $finishedAt;

    /**
     * @var string
     */
    public $startedAt;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $taskType;

    /**
     * @var int
     */
    public $totalProcess;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'asyncTaskId'     => 'async_task_id',
        'category'        => 'category',
        'consumedProcess' => 'consumed_process',
        'createdAt'       => 'created_at',
        'errorCode'       => 'error_code',
        'errorMessage'    => 'error_message',
        'finishedAt'      => 'finished_at',
        'startedAt'       => 'started_at',
        'state'           => 'state',
        'taskType'        => 'task_type',
        'totalProcess'    => 'total_process',
        'userId'          => 'user_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->asyncTaskId) {
            $res['async_task_id'] = $this->asyncTaskId;
        }
        if (null !== $this->category) {
            $res['category'] = $this->category;
        }
        if (null !== $this->consumedProcess) {
            $res['consumed_process'] = $this->consumedProcess;
        }
        if (null !== $this->createdAt) {
            $res['created_at'] = $this->createdAt;
        }
        if (null !== $this->errorCode) {
            $res['error_code'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['error_message'] = $this->errorMessage;
        }
        if (null !== $this->finishedAt) {
            $res['finished_at'] = $this->finishedAt;
        }
        if (null !== $this->startedAt) {
            $res['started_at'] = $this->startedAt;
        }
        if (null !== $this->state) {
            $res['state'] = $this->state;
        }
        if (null !== $this->taskType) {
            $res['task_type'] = $this->taskType;
        }
        if (null !== $this->totalProcess) {
            $res['total_process'] = $this->totalProcess;
        }
        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AsyncTask
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['async_task_id'])) {
            $model->asyncTaskId = $map['async_task_id'];
        }
        if (isset($map['category'])) {
            $model->category = $map['category'];
        }
        if (isset($map['consumed_process'])) {
            $model->consumedProcess = $map['consumed_process'];
        }
        if (isset($map['created_at'])) {
            $model->createdAt = $map['created_at'];
        }
        if (isset($map['error_code'])) {
            $model->errorCode = $map['error_code'];
        }
        if (isset($map['error_message'])) {
            $model->errorMessage = $map['error_message'];
        }
        if (isset($map['finished_at'])) {
            $model->finishedAt = $map['finished_at'];
        }
        if (isset($map['started_at'])) {
            $model->startedAt = $map['started_at'];
        }
        if (isset($map['state'])) {
            $model->state = $map['state'];
        }
        if (isset($map['task_type'])) {
            $model->taskType = $map['task_type'];
        }
        if (isset($map['total_process'])) {
            $model->totalProcess = $map['total_process'];
        }
        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }

        return $model;
    }
}
