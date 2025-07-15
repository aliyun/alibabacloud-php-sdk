<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLivePullToPushResponseBody\taskInfo;
use AlibabaCloud\Tea\Model;

class DescribeLivePullToPushResponseBody extends Model
{
    /**
     * @description The current file index.
     *
     * @example 0
     *
     * @var int
     */
    public $currentFileIndex;

    /**
     * @description The current offset for video playback.
     *
     * @example 0
     *
     * @var int
     */
    public $currentOffset;

    /**
     * @description The error description.
     *
     * @example OK
     *
     * @var string
     */
    public $description;

    /**
     * @description The request ID.
     *
     * @example 3271ACD2-F143-1204-AFDB-9A87C131****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The code that is returned for the request.
     *
     * >
     *
     *   0 is returned if the request is normal.
     *
     *   For information about codes that are returned when exceptions occur, see the following Error codes table.
     *
     * @example 0
     *
     * @var int
     */
    public $retCode;

    /**
     * @description The reason why the task is stopped.
     *
     *   TriggerByUser: You proactively stopped the task.
     *   OverEndTime: The specified end time was exceeded.
     *
     * >  This parameter is returned only if the task is stopped.
     *
     * @example TriggerByUser
     *
     * @var string
     */
    public $taskExitReason;

    /**
     * @description The time when the task was exited. The value is a Unix timestamp in seconds.
     *
     * >  This parameter is returned only if the task status is exited.
     *
     * @example 1724740200
     *
     * @var int
     */
    public $taskExitTime;

    /**
     * @description The task ID.
     *
     * @example fd245384-4067-4f91-9d75-9666a6bc9****
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The information about the task.
     *
     * @var taskInfo
     */
    public $taskInfo;

    /**
     * @description The reason why the task was stopped.
     *
     *   PullStreamFailed: An exception occurred while pulling the source stream. A retry is in progress.
     *   PushStreamFailed: An exception occurred while ingesting the stream. A retry is in progress.
     *   UnknownError: An unknown exception occurred.
     *
     * >  This parameter is returned only if the task status is stopped.
     *
     * @example UnknownError
     *
     * @var string
     */
    public $taskInvalidReason;

    /**
     * @description The current status of the task.
     *
     *   0: not started.
     *   1: running. Stream pulling and stream relay are normal.
     *   2: abnormal.
     *   3: stopped. It may be because exceptions occur during stream pulling or stream relay or you proactively call the StopLivePullToPush operation.
     *   \\-1: exited.
     *
     * @example 1
     *
     * @var int
     */
    public $taskStatus;
    protected $_name = [
        'currentFileIndex' => 'CurrentFileIndex',
        'currentOffset' => 'CurrentOffset',
        'description' => 'Description',
        'requestId' => 'RequestId',
        'retCode' => 'RetCode',
        'taskExitReason' => 'TaskExitReason',
        'taskExitTime' => 'TaskExitTime',
        'taskId' => 'TaskId',
        'taskInfo' => 'TaskInfo',
        'taskInvalidReason' => 'TaskInvalidReason',
        'taskStatus' => 'TaskStatus',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentFileIndex) {
            $res['CurrentFileIndex'] = $this->currentFileIndex;
        }
        if (null !== $this->currentOffset) {
            $res['CurrentOffset'] = $this->currentOffset;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->retCode) {
            $res['RetCode'] = $this->retCode;
        }
        if (null !== $this->taskExitReason) {
            $res['TaskExitReason'] = $this->taskExitReason;
        }
        if (null !== $this->taskExitTime) {
            $res['TaskExitTime'] = $this->taskExitTime;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskInfo) {
            $res['TaskInfo'] = null !== $this->taskInfo ? $this->taskInfo->toMap() : null;
        }
        if (null !== $this->taskInvalidReason) {
            $res['TaskInvalidReason'] = $this->taskInvalidReason;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLivePullToPushResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentFileIndex'])) {
            $model->currentFileIndex = $map['CurrentFileIndex'];
        }
        if (isset($map['CurrentOffset'])) {
            $model->currentOffset = $map['CurrentOffset'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RetCode'])) {
            $model->retCode = $map['RetCode'];
        }
        if (isset($map['TaskExitReason'])) {
            $model->taskExitReason = $map['TaskExitReason'];
        }
        if (isset($map['TaskExitTime'])) {
            $model->taskExitTime = $map['TaskExitTime'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskInfo'])) {
            $model->taskInfo = taskInfo::fromMap($map['TaskInfo']);
        }
        if (isset($map['TaskInvalidReason'])) {
            $model->taskInvalidReason = $map['TaskInvalidReason'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }

        return $model;
    }
}
