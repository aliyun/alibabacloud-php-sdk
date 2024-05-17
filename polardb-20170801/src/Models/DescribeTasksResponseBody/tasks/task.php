<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeTasksResponseBody\tasks;

use AlibabaCloud\Tea\Model;

class task extends Model
{
    /**
     * @description The time when the task was started. The time follows the ISO 8601 standard in the `YYYY-MM-DDThh:mm:ssZ` format. The time is displayed in UTC.
     *
     * @example 2020-12-02T02:39:15Z
     *
     * @var string
     */
    public $beginTime;

    /**
     * @description The name of the current step.
     *
     * @example create_instance
     *
     * @var string
     */
    public $currentStepName;

    /**
     * @description The database name.
     *
     * >  This parameter is returned for only the tasks that involve database operations.
     * @example test
     *
     * @var string
     */
    public $DBName;

    /**
     * @description The estimated end time of the task. In most cases, this parameter is empty.
     *
     * @example null
     *
     * @var string
     */
    public $expectedFinishTime;

    /**
     * @description The time when the task was completed. The time follows the ISO 8601 standard in the `YYYY-MM-DDThh:mm:ssZ` format. The time is displayed in UTC.
     *
     * @example 2020-12-02T02:40:15Z
     *
     * @var string
     */
    public $finishTime;

    /**
     * @description The progress of the task in percentage.
     *
     * @example 100
     *
     * @var int
     */
    public $progress;

    /**
     * @description The description of the task progress. If no progress description is provided for the task, this parameter is empty.
     *
     * @example null
     *
     * @var string
     */
    public $progressInfo;

    /**
     * @description The estimated remaining duration of the task. Unit: seconds.
     *
     * @example 1767
     *
     * @var int
     */
    public $remain;

    /**
     * @description The progress of the subtasks. For example, the value `1/4` indicates that the task consists of four subtasks and the first subtask is in progress.
     *
     * @example 1/4
     *
     * @var string
     */
    public $stepProgressInfo;

    /**
     * @description The details of the subtasks.
     *
     * @example [{\\"remain\\":0,\\"name\\":\\"init_task\\",\\"progress\\":100},{\\"remain\\":1764,\\"name\\":\\"create_instance\\",\\"progress\\":0},{\\"remain\\":1,\\"name\\":\\"init_cluster\\",\\"progress\\":0},{\\"remain\\":2,\\"name\\":\\"create_backup\\",\\"progress\\":0}]
     *
     * @var string
     */
    public $stepsInfo;

    /**
     * @description The API operation that is used by the task. Example: `CreateDBInstance`.
     *
     * @example CreateDBInstance
     *
     * @var string
     */
    public $taskAction;

    /**
     * @description The error code that is returned when an error occurs.
     *
     * >  This parameter is returned only when the task is in the **Stop** state.
     * @example null
     *
     * @var string
     */
    public $taskErrorCode;

    /**
     * @description The error message that is returned when an error occurs.
     *
     * >  This parameter is returned only when the task is in the **Stop** state.
     * @example null
     *
     * @var string
     */
    public $taskErrorMessage;

    /**
     * @description The ID of the task.
     *
     * @example 111111111
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'beginTime'          => 'BeginTime',
        'currentStepName'    => 'CurrentStepName',
        'DBName'             => 'DBName',
        'expectedFinishTime' => 'ExpectedFinishTime',
        'finishTime'         => 'FinishTime',
        'progress'           => 'Progress',
        'progressInfo'       => 'ProgressInfo',
        'remain'             => 'Remain',
        'stepProgressInfo'   => 'StepProgressInfo',
        'stepsInfo'          => 'StepsInfo',
        'taskAction'         => 'TaskAction',
        'taskErrorCode'      => 'TaskErrorCode',
        'taskErrorMessage'   => 'TaskErrorMessage',
        'taskId'             => 'TaskId',
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
        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
        }
        if (null !== $this->expectedFinishTime) {
            $res['ExpectedFinishTime'] = $this->expectedFinishTime;
        }
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->progressInfo) {
            $res['ProgressInfo'] = $this->progressInfo;
        }
        if (null !== $this->remain) {
            $res['Remain'] = $this->remain;
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
        if (null !== $this->taskErrorCode) {
            $res['TaskErrorCode'] = $this->taskErrorCode;
        }
        if (null !== $this->taskErrorMessage) {
            $res['TaskErrorMessage'] = $this->taskErrorMessage;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return task
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
        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }
        if (isset($map['ExpectedFinishTime'])) {
            $model->expectedFinishTime = $map['ExpectedFinishTime'];
        }
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['ProgressInfo'])) {
            $model->progressInfo = $map['ProgressInfo'];
        }
        if (isset($map['Remain'])) {
            $model->remain = $map['Remain'];
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
        if (isset($map['TaskErrorCode'])) {
            $model->taskErrorCode = $map['TaskErrorCode'];
        }
        if (isset($map['TaskErrorMessage'])) {
            $model->taskErrorMessage = $map['TaskErrorMessage'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
