<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class GetDecodeBlindWatermarkResultResponseBody extends Model
{
    /**
     * @example ResourceNotFound
     *
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $content;

    /**
     * @example 2024-03-03T09:45:56.87Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example 2C2-1I0EG57VR37J4rQ8oKG6C9*****
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
     * @example test-project
     *
     * @var string
     */
    public $projectName;

    /**
     * @example 93126E40-0296-4129-95E3-AFAC709372E5
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 2024-03-03T09:44:31.029Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @example Succeeded
     *
     * @var string
     */
    public $status;

    /**
     * @example DecodeBlindWatermark-c09b0943-ed79-4983-8dbe-7a882574****
     *
     * @var string
     */
    public $taskId;

    /**
     * @example DecodeBlindWatermark
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
        'content'     => 'Content',
        'endTime'     => 'EndTime',
        'eventId'     => 'EventId',
        'message'     => 'Message',
        'projectName' => 'ProjectName',
        'requestId'   => 'RequestId',
        'startTime'   => 'StartTime',
        'status'      => 'Status',
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
        if (null !== $this->content) {
            $res['Content'] = $this->content;
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
     * @return GetDecodeBlindWatermarkResultResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
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
