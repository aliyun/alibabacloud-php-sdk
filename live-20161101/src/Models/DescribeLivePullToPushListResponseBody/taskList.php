<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLivePullToPushListResponseBody;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLivePullToPushListResponseBody\taskList\taskInfo;
use AlibabaCloud\Tea\Model;

class taskList extends Model
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
     * @description The reason why the task was exited. Valid values:
     *
     *   TriggerByUser: You proactively ended the task.
     *   OverEndTime: The specified end time was exceeded.
     *
     * >  This parameter is returned only if the task status is exited.
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
     * @example 1726354625
     *
     * @var int
     */
    public $taskExitTime;

    /**
     * @description The task ID.
     *
     * @example fb0d4ac7-c7e3-4978-9743-0bf2f6e8****
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
     * @example PullStreamFailed
     *
     * @var string
     */
    public $taskInvalidReason;

    /**
     * @description The task status. Valid values:
     *
     *   0: not started.
     *   1: running. Stream pulling and stream relay are normal.
     *   2: abnormal.
     *   3: stopped. It may be because exceptions occur during stream pulling or stream relay or you proactively call the StopLivePullToPush operation.
     *   \\-1: exited.
     *
     * @example 0
     *
     * @var int
     */
    public $taskStatus;
    protected $_name = [
        'currentFileIndex' => 'CurrentFileIndex',
        'currentOffset' => 'CurrentOffset',
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
     * @return taskList
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
