<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BDRC\V20230808\Models\DescribeTasksResponseBody\data;

use AlibabaCloud\Dara\Model;

class content extends Model
{
    /**
     * @var int
     */
    public $completeTime;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $executionId;

    /**
     * @var int
     */
    public $expireTime;

    /**
     * @var int
     */
    public $progress;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $taskDescription;

    /**
     * @var string
     */
    public $taskDetail;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var string
     */
    public $taskPriority;

    /**
     * @var string
     */
    public $taskResult;

    /**
     * @var string
     */
    public $taskStatus;

    /**
     * @var string
     */
    public $taskType;
    protected $_name = [
        'completeTime' => 'CompleteTime',
        'errorMessage' => 'ErrorMessage',
        'executionId' => 'ExecutionId',
        'expireTime' => 'ExpireTime',
        'progress' => 'Progress',
        'requestId' => 'RequestId',
        'startTime' => 'StartTime',
        'taskDescription' => 'TaskDescription',
        'taskDetail' => 'TaskDetail',
        'taskId' => 'TaskId',
        'taskName' => 'TaskName',
        'taskPriority' => 'TaskPriority',
        'taskResult' => 'TaskResult',
        'taskStatus' => 'TaskStatus',
        'taskType' => 'TaskType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->completeTime) {
            $res['CompleteTime'] = $this->completeTime;
        }

        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        if (null !== $this->executionId) {
            $res['ExecutionId'] = $this->executionId;
        }

        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->taskDescription) {
            $res['TaskDescription'] = $this->taskDescription;
        }

        if (null !== $this->taskDetail) {
            $res['TaskDetail'] = $this->taskDetail;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        if (null !== $this->taskPriority) {
            $res['TaskPriority'] = $this->taskPriority;
        }

        if (null !== $this->taskResult) {
            $res['TaskResult'] = $this->taskResult;
        }

        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }

        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
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
        if (isset($map['CompleteTime'])) {
            $model->completeTime = $map['CompleteTime'];
        }

        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        if (isset($map['ExecutionId'])) {
            $model->executionId = $map['ExecutionId'];
        }

        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['TaskDescription'])) {
            $model->taskDescription = $map['TaskDescription'];
        }

        if (isset($map['TaskDetail'])) {
            $model->taskDetail = $map['TaskDetail'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        if (isset($map['TaskPriority'])) {
            $model->taskPriority = $map['TaskPriority'];
        }

        if (isset($map['TaskResult'])) {
            $model->taskResult = $map['TaskResult'];
        }

        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }

        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
