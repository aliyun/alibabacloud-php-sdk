<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeOnceTaskLeafRecordPageResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeOnceTaskLeafRecordPageResponseBody\onceTasks\taskImageInfo;
use AlibabaCloud\Tea\Model;

class onceTasks extends Model
{
    /**
     * @example 1670307567000
     *
     * @var int
     */
    public $endTime;

    /**
     * @example 1
     *
     * @var int
     */
    public $finish;

    /**
     * @example 67
     *
     * @var string
     */
    public $finishCount;

    /**
     * @example 75
     *
     * @var int
     */
    public $progress;

    /**
     * @example 1670307567000
     *
     * @var int
     */
    public $realRunTime;

    /**
     * @example TASK_NOT_SUPPORT_REGION
     *
     * @var string
     */
    public $resultInfo;

    /**
     * @example 1640102400000
     *
     * @var int
     */
    public $startTime;

    /**
     * @example 0
     *
     * @var string
     */
    public $status;

    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $statusText;

    /**
     * @example 238cf050a7270dd6940602e70f1e5a11eeaf4e02035f445b7f613ff5e064****
     *
     * @var string
     */
    public $target;

    /**
     * @example IMAGE
     *
     * @var string
     */
    public $targetType;

    /**
     * @example 9fb50f2af8bb67c9fdb684194c83****
     *
     * @var string
     */
    public $taskId;

    /**
     * @var taskImageInfo
     */
    public $taskImageInfo;

    /**
     * @example IMAGE_SCAN
     *
     * @var string
     */
    public $taskName;

    /**
     * @example IMAGE_SCAN
     *
     * @var string
     */
    public $taskType;

    /**
     * @example 30
     *
     * @var string
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
