<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeTasksResponseBody\items;

use AlibabaCloud\Tea\Model;

class taskProgressInfo extends Model
{
    /**
     * @description The start time of the task. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm*Z format. The time is displayed in UTC .
     *
     * @example 2020-11-20T01:00Z
     *
     * @var string
     */
    public $beginTime;

    /**
     * @description The name of the subtask.
     *
     * @example create_instance
     *
     * @var string
     */
    public $currentStepName;

    /**
     * @description The name of the database. If the task involves a database, the database name is returned.
     *
     * @example DBtest
     *
     * @var string
     */
    public $DBName;

    /**
     * @description The estimated end time of the task.
     *
     * > In most cases, this parameter is empty.
     * @example null
     *
     * @var string
     */
    public $expectedFinishTime;

    /**
     * @description The end time of the task. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm*Z format. The time is displayed in UTC.
     *
     * @example 2020-11-20T02:00Z
     *
     * @var string
     */
    public $finishTime;

    /**
     * @description The progress of the task in percentage.
     *
     * @example 100
     *
     * @var string
     */
    public $progress;

    /**
     * @description The description of the task progress.
     *
     * > If no progress description is provided for the task, this parameter is empty.
     * @example null
     *
     * @var string
     */
    public $progressInfo;

    /**
     * @description The estimated remaining time of the task. Unit: seconds.
     *
     * >  If the task is not running, this parameter is not returned or the returned value is **0**.
     * @example 60
     *
     * @var int
     */
    public $remain;

    /**
     * @description The status of the task.
     *
     * @example 2
     *
     * @var string
     */
    public $status;

    /**
     * @description The progress of the subtask. For example, a value of `1/4` indicates that the task consists of four subtasks and the first subtask is in progress.
     *
     * @example 1/4
     *
     * @var string
     */
    public $stepProgressInfo;

    /**
     * @description The details of the subtasks.
     *
     * @example null
     *
     * @var string
     */
    public $stepsInfo;

    /**
     * @description The operation that is used by the task, such as **CreateDBInstance**.
     *
     * @example CreateDBInstance
     *
     * @var string
     */
    public $taskAction;

    /**
     * @description The error code that is returned when an error occurs.
     *
     * > This parameter is returned only when an error occurs.
     * @example null
     *
     * @var string
     */
    public $taskErrorCode;

    /**
     * @description The error message that is returned when an error occurs.
     *
     * >  This parameter is returned only when an error occurs.
     * @example null
     *
     * @var string
     */
    public $taskErrorMessage;

    /**
     * @description The ID of the task.
     *
     * @example 3472xxxxx
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
        'status'             => 'Status',
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
     * @return taskProgressInfo
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
