<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class GetVideoLabelClassificationResultResponseBody extends Model
{
    /**
     * @example ResourceNotFound
     *
     * @var string
     */
    public $code;

    /**
     * @example 2021-12-24T03:00:42.134971294Z
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
     * @var Label[]
     */
    public $labels;

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
     * @example 7F84C6D9-5AC0-49F9-914D-F02678E3****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 2021-12-24T03:00:38.892462383Z
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
     * @example VideoLabelClassification-2f157087-91df-4fda-8c3e-232407ec****
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
        'labels'      => 'Labels',
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
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }
        if (null !== $this->labels) {
            $res['Labels'] = [];
            if (null !== $this->labels && \is_array($this->labels)) {
                $n = 0;
                foreach ($this->labels as $item) {
                    $res['Labels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return GetVideoLabelClassificationResultResponseBody
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
        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = [];
                $n             = 0;
                foreach ($map['Labels'] as $item) {
                    $model->labels[$n++] = null !== $item ? Label::fromMap($item) : $item;
                }
            }
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
