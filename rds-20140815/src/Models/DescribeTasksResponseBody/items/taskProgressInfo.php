<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeTasksResponseBody\items;

use AlibabaCloud\Tea\Model;

class taskProgressInfo extends Model
{
    /**
     * @var string
     */
    public $DBName;

    /**
     * @var string
     */
    public $beginTime;

    /**
     * @var string
     */
    public $progressInfo;

    /**
     * @var string
     */
    public $finishTime;

    /**
     * @var string
     */
    public $taskAction;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $progress;

    /**
     * @var string
     */
    public $expectedFinishTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $taskErrorCode;

    /**
     * @var string
     */
    public $taskErrorMessage;

    /**
     * @var string
     */
    public $stepsInfo;

    /**
     * @var int
     */
    public $remain;

    /**
     * @var string
     */
    public $stepProgressInfo;

    /**
     * @var string
     */
    public $currentStepName;
    protected $_name = [
        'DBName'             => 'DBName',
        'beginTime'          => 'BeginTime',
        'progressInfo'       => 'ProgressInfo',
        'finishTime'         => 'FinishTime',
        'taskAction'         => 'TaskAction',
        'taskId'             => 'TaskId',
        'progress'           => 'Progress',
        'expectedFinishTime' => 'ExpectedFinishTime',
        'status'             => 'Status',
        'taskErrorCode'      => 'TaskErrorCode',
        'taskErrorMessage'   => 'TaskErrorMessage',
        'stepsInfo'          => 'StepsInfo',
        'remain'             => 'Remain',
        'stepProgressInfo'   => 'StepProgressInfo',
        'currentStepName'    => 'CurrentStepName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
        }
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }
        if (null !== $this->progressInfo) {
            $res['ProgressInfo'] = $this->progressInfo;
        }
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }
        if (null !== $this->taskAction) {
            $res['TaskAction'] = $this->taskAction;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->expectedFinishTime) {
            $res['ExpectedFinishTime'] = $this->expectedFinishTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskErrorCode) {
            $res['TaskErrorCode'] = $this->taskErrorCode;
        }
        if (null !== $this->taskErrorMessage) {
            $res['TaskErrorMessage'] = $this->taskErrorMessage;
        }
        if (null !== $this->stepsInfo) {
            $res['StepsInfo'] = $this->stepsInfo;
        }
        if (null !== $this->remain) {
            $res['Remain'] = $this->remain;
        }
        if (null !== $this->stepProgressInfo) {
            $res['StepProgressInfo'] = $this->stepProgressInfo;
        }
        if (null !== $this->currentStepName) {
            $res['CurrentStepName'] = $this->currentStepName;
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
        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }
        if (isset($map['ProgressInfo'])) {
            $model->progressInfo = $map['ProgressInfo'];
        }
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }
        if (isset($map['TaskAction'])) {
            $model->taskAction = $map['TaskAction'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['ExpectedFinishTime'])) {
            $model->expectedFinishTime = $map['ExpectedFinishTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskErrorCode'])) {
            $model->taskErrorCode = $map['TaskErrorCode'];
        }
        if (isset($map['TaskErrorMessage'])) {
            $model->taskErrorMessage = $map['TaskErrorMessage'];
        }
        if (isset($map['StepsInfo'])) {
            $model->stepsInfo = $map['StepsInfo'];
        }
        if (isset($map['Remain'])) {
            $model->remain = $map['Remain'];
        }
        if (isset($map['StepProgressInfo'])) {
            $model->stepProgressInfo = $map['StepProgressInfo'];
        }
        if (isset($map['CurrentStepName'])) {
            $model->currentStepName = $map['CurrentStepName'];
        }

        return $model;
    }
}
