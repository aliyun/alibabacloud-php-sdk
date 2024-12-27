<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\SDK\Imm\V20200930\Models\GetImageModerationResultResponseBody\moderationResult;
use AlibabaCloud\Tea\Model;

class GetImageModerationResultResponseBody extends Model
{
    /**
     * @description The error code of the task.
     *
     * @example ResourceNotFound
     *
     * @var string
     */
    public $code;

    /**
     * @description The end time of the task.
     *
     * @example 2023-04-03T09:44:32Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The event ID.
     *
     * @example 1B6-1XBMX3BixLMILvXVGtlkr******
     *
     * @var string
     */
    public $eventId;

    /**
     * @description The error message of the task.
     *
     * @example The specified resource TaskId is not found.
     *
     * @var string
     */
    public $message;

    /**
     * @description The result of the image compliance detection task.
     *
     * @var moderationResult
     */
    public $moderationResult;

    /**
     * @description The name of the project.
     *
     * @example test-project
     *
     * @var string
     */
    public $projectName;

    /**
     * @description The request ID.
     *
     * @example E6A120B1-BEB3-0F63-A7C2-0783B6******
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The start time of the task.
     *
     * @example 2023-04-03T09:44:31.029Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The task status. Valid values:
     *
     *   Running
     *   Succeeded
     *   Failed
     *
     * @example Succeeded
     *
     * @var string
     */
    public $status;

    /**
     * @description The task ID.
     *
     * @example ImageModeration-ff207203-3f93-4645-a041-7b8f0f******
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The type of the task.
     *
     * @example ImageModeration
     *
     * @var string
     */
    public $taskType;

    /**
     * @description The custom information.
     *
     * @example {
     * }
     * @var string
     */
    public $userData;
    protected $_name = [
        'code'             => 'Code',
        'endTime'          => 'EndTime',
        'eventId'          => 'EventId',
        'message'          => 'Message',
        'moderationResult' => 'ModerationResult',
        'projectName'      => 'ProjectName',
        'requestId'        => 'RequestId',
        'startTime'        => 'StartTime',
        'status'           => 'Status',
        'taskId'           => 'TaskId',
        'taskType'         => 'TaskType',
        'userData'         => 'UserData',
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
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->moderationResult) {
            $res['ModerationResult'] = null !== $this->moderationResult ? $this->moderationResult->toMap() : null;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetImageModerationResultResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['ModerationResult'])) {
            $model->moderationResult = moderationResult::fromMap($map['ModerationResult']);
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
