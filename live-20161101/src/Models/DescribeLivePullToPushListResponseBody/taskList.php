<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLivePullToPushListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLivePullToPushListResponseBody\taskList\taskInfo;

class taskList extends Model
{
    /**
     * @var int
     */
    public $currentFileIndex;

    /**
     * @var int
     */
    public $currentOffset;

    /**
     * @var string
     */
    public $taskExitReason;

    /**
     * @var int
     */
    public $taskExitTime;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var taskInfo
     */
    public $taskInfo;

    /**
     * @var string
     */
    public $taskInvalidReason;

    /**
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

    public function validate()
    {
        if (null !== $this->taskInfo) {
            $this->taskInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['TaskInfo'] = null !== $this->taskInfo ? $this->taskInfo->toArray($noStream) : $this->taskInfo;
        }

        if (null !== $this->taskInvalidReason) {
            $res['TaskInvalidReason'] = $this->taskInvalidReason;
        }

        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
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
