<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListUnfinishedOnceTaskResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListUnfinishedOnceTaskResponseBody\onceTasks\taskImageInfo;
use AlibabaCloud\Tea\Model;

class onceTasks extends Model
{
    /**
     * @description The time when the task ends.
     *
     * @example 1670307567000
     *
     * @var int
     */
    public $endTime;

    /**
     * @description Indicates whether the task is complete. Valid values:
     *
     *   **0**: no
     *   **1**: yes
     *
     * @example 1
     *
     * @var int
     */
    public $finish;

    /**
     * @description The number of assets on which the task is complete.
     *
     * @example 67
     *
     * @var int
     */
    public $finishCount;

    /**
     * @description The progress percentage of the task.
     *
     * @example 75
     *
     * @var int
     */
    public $progress;

    /**
     * @description The execution duration of the task.
     *
     * @example 1670307567000
     *
     * @var int
     */
    public $realRunTime;

    /**
     * @description The execution result of the task.
     *
     * @example TASK_NOT_SUPPORT_REGION
     *
     * @var string
     */
    public $resultInfo;

    /**
     * @description The time when the task is started.
     *
     * @example 1640102400000
     *
     * @var int
     */
    public $startTime;

    /**
     * @description The status.
     *
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @description The status of the task. Valid values:
     *
     *   **INIT**: The task is not started.
     *   **START**: The task is started.
     *   **SUCCESS**: The task is complete.
     *   **TIMEOUT**: The task timed out.
     *
     * @example SUCCESS
     *
     * @var string
     */
    public $statusText;

    /**
     * @description The objective of the task.
     *
     * @example 238cf050a7270dd6940602e70f1e5a11eeaf4e02035f445b7f613ff5e064****
     *
     * @var string
     */
    public $target;

    /**
     * @description The type of the assets that are scanned. Valid values:
     *
     *   **IMAGE_REPO**: image repository
     *   **IMAGE**: image
     *
     * @example IMAGE
     *
     * @var string
     */
    public $targetType;

    /**
     * @description The ID of the task.
     *
     * @example 9fb50f2af8bb67c9fdb684194c83****
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The information about the image scan task.
     *
     * @var taskImageInfo
     */
    public $taskImageInfo;

    /**
     * @description The name of the task.
     *
     * @example IMAGE_SCAN
     *
     * @var string
     */
    public $taskName;

    /**
     * @description The type of the task.
     *
     * @example IMAGE_SCAN
     *
     * @var string
     */
    public $taskType;

    /**
     * @description The total number of entries returned.
     *
     * @example 30
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'endTime'       => 'EndTime',
        'finish'        => 'Finish',
        'finishCount'   => 'FinishCount',
        'progress'      => 'Progress',
        'realRunTime'   => 'RealRunTime',
        'resultInfo'    => 'ResultInfo',
        'startTime'     => 'StartTime',
        'status'        => 'Status',
        'statusText'    => 'StatusText',
        'target'        => 'Target',
        'targetType'    => 'TargetType',
        'taskId'        => 'TaskId',
        'taskImageInfo' => 'TaskImageInfo',
        'taskName'      => 'TaskName',
        'taskType'      => 'TaskType',
        'totalCount'    => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->finish) {
            $res['Finish'] = $this->finish;
        }
        if (null !== $this->finishCount) {
            $res['FinishCount'] = $this->finishCount;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->realRunTime) {
            $res['RealRunTime'] = $this->realRunTime;
        }
        if (null !== $this->resultInfo) {
            $res['ResultInfo'] = $this->resultInfo;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->statusText) {
            $res['StatusText'] = $this->statusText;
        }
        if (null !== $this->target) {
            $res['Target'] = $this->target;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskImageInfo) {
            $res['TaskImageInfo'] = null !== $this->taskImageInfo ? $this->taskImageInfo->toMap() : null;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return onceTasks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Finish'])) {
            $model->finish = $map['Finish'];
        }
        if (isset($map['FinishCount'])) {
            $model->finishCount = $map['FinishCount'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['RealRunTime'])) {
            $model->realRunTime = $map['RealRunTime'];
        }
        if (isset($map['ResultInfo'])) {
            $model->resultInfo = $map['ResultInfo'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StatusText'])) {
            $model->statusText = $map['StatusText'];
        }
        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskImageInfo'])) {
            $model->taskImageInfo = taskImageInfo::fromMap($map['TaskImageInfo']);
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
