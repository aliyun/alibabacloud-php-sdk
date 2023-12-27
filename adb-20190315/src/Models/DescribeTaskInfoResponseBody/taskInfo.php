<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeTaskInfoResponseBody;

use AlibabaCloud\Tea\Model;

class taskInfo extends Model
{
    /**
     * @description The start time of the task. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format.
     *
     * @example 2020-01-07T07:39:56Z
     *
     * @var string
     */
    public $beginTime;

    /**
     * @description The end time of the task. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format.
     *
     * @example 2020-01-07T08:08:50Z
     *
     * @var string
     */
    public $finishTime;

    /**
     * @description The progress of the task. Unit: %.
     *
     * @example 100
     *
     * @var string
     */
    public $progress;

    /**
     * @description The status. Valid values:
     *
     *   Waiting
     *   Running
     *   Finished
     *   Failed
     *   Closed
     *   Cancel
     *   Retry
     *   Pause
     *   Stop
     *
     * @example Finished
     *
     * @var string
     */
    public $status;

    /**
     * @description The task ID.
     *
     * @example 225685759
     *
     * @var int
     */
    public $taskId;
    protected $_name = [
        'beginTime'  => 'BeginTime',
        'finishTime' => 'FinishTime',
        'progress'   => 'Progress',
        'status'     => 'Status',
        'taskId'     => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taskInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
