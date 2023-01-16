<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class GetTaskResponseBody extends Model
{
    /**
     * @example ResourceNotFound
     *
     * @var string
     */
    public $code;

    /**
     * @example 2021-12-24T03:01:49.480109219Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example 2F6-1Bz99Xi93EnRpNEyLudILJm****
     *
     * @var string
     */
    public $eventId;

    /**
     * @example The specified resource project is not found.
     *
     * @var string
     */
    public $message;

    /**
     * @example immtest
     *
     * @var string
     */
    public $projectName;

    /**
     * @example 2C5C1E0F-D8B8-4DA0-8127-EC32C771****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 2021-12-24T03:01:41.662060377Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @example {"test": "val1"}
     *
     * @var mixed[]
     */
    public $tags;

    /**
     * @example c2b277b9-0d30-4882-ad6d-ad661382****
     *
     * @var string
     */
    public $taskId;

    /**
     * @example VideoLabelClassification
     *
     * @var string
     */
    public $taskType;

    /**
     * @example {"ID": "user1","Name": "test-user1","Avatar": "http://example.com?id=user1"}
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'code'        => 'Code',
        'endTime'     => 'EndTime',
        'eventId'     => 'EventId',
        'message'     => 'Message',
        'projectName' => 'ProjectName',
        'requestId'   => 'RequestId',
        'startTime'   => 'StartTime',
        'status'      => 'Status',
        'tags'        => 'Tags',
        'taskId'      => 'TaskId',
        'taskType'    => 'TaskType',
        'userData'    => 'UserData',
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
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
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
     * @return GetTaskResponseBody
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
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
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
