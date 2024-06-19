<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeTasksResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description The beginning time of the task. The time follows the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2020-11-13T06:16:54Z
     *
     * @var string
     */
    public $beginTime;

    /**
     * @description The name of the subtask.
     *
     * @example init_redis
     *
     * @var string
     */
    public $currentStepName;

    /**
     * @description The end time of the task. The time follows the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2020-11-13T06:17:18Z
     *
     * @var string
     */
    public $finishTime;

    /**
     * @description The progress of the task. Unit: %.
     *
     * @example 100
     *
     * @var float
     */
    public $progress;

    /**
     * @description The estimated remaining duration of the task. Unit: seconds.
     *
     * >  If the task is not running, this parameter is not returned or the returned value is **0**.
     * @example 60
     *
     * @var int
     */
    public $remain;

    /**
     * @description The status of the task. Valid values:
     *
     *   **0**: The task is pending.
     *   **1**: The task is running.
     *   **2**: The task is complete.
     *   **4**: The task is closed.
     *   **7**: The task is paused.
     *   **8**: The task is interrupted.
     *
     * @example 2
     *
     * @var string
     */
    public $status;

    /**
     * @description The progress of the subtask.
     *
     * >  If the subtask does not exist, this parameter is not returned.
     * @example 3/3
     *
     * @var string
     */
    public $stepProgressInfo;

    /**
     * @description The information about the subtask in the JSON format. This includes the expected remaining duration (**remain**), the name of the subtask (**name**), and the task progress (**progress**).
     *
     * >  If the subtask does not exist, this parameter is not returned.
     * @example [{\\"remain\\":0,\\"name\\":\\"init_instance\\",\\"progress\\":100},{\\"remain\\":107,\\"name\\":\\"init_redis\\",\\"progress\\":12.3},{\\"remain\\":1881,\\"name\\":\\"init_config\\",\\"progress\\":0}]
     *
     * @var string
     */
    public $stepsInfo;

    /**
     * @description The identifier of the task.
     *
     * @example ModifyDBInstanceParameter
     *
     * @var string
     */
    public $taskAction;

    /**
     * @description The ID of the task.
     *
     * @example 32302****
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'beginTime'        => 'BeginTime',
        'currentStepName'  => 'CurrentStepName',
        'finishTime'       => 'FinishTime',
        'progress'         => 'Progress',
        'remain'           => 'Remain',
        'status'           => 'Status',
        'stepProgressInfo' => 'StepProgressInfo',
        'stepsInfo'        => 'StepsInfo',
        'taskAction'       => 'TaskAction',
        'taskId'           => 'TaskId',
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
        if (null !== $this->currentStepName) {
            $res['CurrentStepName'] = $this->currentStepName;
        }
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->remain) {
            $res['Remain'] = $this->remain;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->stepProgressInfo) {
            $res['StepProgressInfo'] = $this->stepProgressInfo;
        }
        if (null !== $this->stepsInfo) {
            $res['StepsInfo'] = $this->stepsInfo;
        }
        if (null !== $this->taskAction) {
            $res['TaskAction'] = $this->taskAction;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }
        if (isset($map['CurrentStepName'])) {
            $model->currentStepName = $map['CurrentStepName'];
        }
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['Remain'])) {
            $model->remain = $map['Remain'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StepProgressInfo'])) {
            $model->stepProgressInfo = $map['StepProgressInfo'];
        }
        if (isset($map['StepsInfo'])) {
            $model->stepsInfo = $map['StepsInfo'];
        }
        if (isset($map['TaskAction'])) {
            $model->taskAction = $map['TaskAction'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
