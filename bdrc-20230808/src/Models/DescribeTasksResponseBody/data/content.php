<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BDRC\V20230808\Models\DescribeTasksResponseBody\data;

use AlibabaCloud\Tea\Model;

class content extends Model
{
    /**
     * @example 1724983927
     *
     * @var int
     */
    public $completeTime;

    /**
     * @example device not online
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @example empty
     *
     * @var string
     */
    public $executionId;

    /**
     * @example 1724983927
     *
     * @var int
     */
    public $expireTime;

    /**
     * @example 100
     *
     * @var int
     */
    public $progress;

    /**
     * @example AE43C4CB-8074-5EBD-9806-8CA6D12800B1
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 1724983927
     *
     * @var int
     */
    public $startTime;

    /**
     * @example empty
     *
     * @var string
     */
    public $taskDescription;

    /**
     * @example {"resourceTypes":["ACS::ECS::Instance","ACS::OSS::Bucket","ACS::OTS::Instance","ACS::NAS::FileSystem"]}
     *
     * @var string
     */
    public $taskDetail;

    /**
     * @example t-0000e4w0u1v592zdf6s7
     *
     * @var string
     */
    public $taskId;

    /**
     * @example empty
     *
     * @var string
     */
    public $taskName;

    /**
     * @example HIGH
     *
     * @var string
     */
    public $taskPriority;

    /**
     * @example RUNNING
     *
     * @var string
     */
    public $taskStatus;

    /**
     * @example UPDATE_RESOURCES
     *
     * @var string
     */
    public $taskType;
    protected $_name = [
        'completeTime'    => 'CompleteTime',
        'errorMessage'    => 'ErrorMessage',
        'executionId'     => 'ExecutionId',
        'expireTime'      => 'ExpireTime',
        'progress'        => 'Progress',
        'requestId'       => 'RequestId',
        'startTime'       => 'StartTime',
        'taskDescription' => 'TaskDescription',
        'taskDetail'      => 'TaskDetail',
        'taskId'          => 'TaskId',
        'taskName'        => 'TaskName',
        'taskPriority'    => 'TaskPriority',
        'taskStatus'      => 'TaskStatus',
        'taskType'        => 'TaskType',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return content
     */
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
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
