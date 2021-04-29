<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeTasksResponseBody\items;

use AlibabaCloud\Tea\Model;

class taskProgressInfo extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $finishTime;

    /**
     * @var string
     */
    public $stepsInfo;

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
    public $beginTime;

    /**
     * @var string
     */
    public $taskErrorCode;

    /**
     * @var string
     */
    public $progressInfo;

    /**
     * @var string
     */
    public $currentStepName;

    /**
     * @var string
     */
    public $stepProgressInfo;

    /**
     * @var string
     */
    public $taskErrorMessage;

    /**
     * @var string
     */
    public $taskAction;

    /**
     * @var int
     */
    public $remain;

    /**
     * @var string
     */
    public $DBName;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'status'             => 'Status',
        'finishTime'         => 'FinishTime',
        'stepsInfo'          => 'StepsInfo',
        'progress'           => 'Progress',
        'expectedFinishTime' => 'ExpectedFinishTime',
        'beginTime'          => 'BeginTime',
        'taskErrorCode'      => 'TaskErrorCode',
        'progressInfo'       => 'ProgressInfo',
        'currentStepName'    => 'CurrentStepName',
        'stepProgressInfo'   => 'StepProgressInfo',
        'taskErrorMessage'   => 'TaskErrorMessage',
        'taskAction'         => 'TaskAction',
        'remain'             => 'Remain',
        'DBName'             => 'DBName',
        'taskId'             => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }
        if (null !== $this->stepsInfo) {
            $res['StepsInfo'] = $this->stepsInfo;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->expectedFinishTime) {
            $res['ExpectedFinishTime'] = $this->expectedFinishTime;
        }
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }
        if (null !== $this->taskErrorCode) {
            $res['TaskErrorCode'] = $this->taskErrorCode;
        }
        if (null !== $this->progressInfo) {
            $res['ProgressInfo'] = $this->progressInfo;
        }
        if (null !== $this->currentStepName) {
            $res['CurrentStepName'] = $this->currentStepName;
        }
        if (null !== $this->stepProgressInfo) {
            $res['StepProgressInfo'] = $this->stepProgressInfo;
        }
        if (null !== $this->taskErrorMessage) {
            $res['TaskErrorMessage'] = $this->taskErrorMessage;
        }
        if (null !== $this->taskAction) {
            $res['TaskAction'] = $this->taskAction;
        }
        if (null !== $this->remain) {
            $res['Remain'] = $this->remain;
        }
        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }
        if (isset($map['StepsInfo'])) {
            $model->stepsInfo = $map['StepsInfo'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['ExpectedFinishTime'])) {
            $model->expectedFinishTime = $map['ExpectedFinishTime'];
        }
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }
        if (isset($map['TaskErrorCode'])) {
            $model->taskErrorCode = $map['TaskErrorCode'];
        }
        if (isset($map['ProgressInfo'])) {
            $model->progressInfo = $map['ProgressInfo'];
        }
        if (isset($map['CurrentStepName'])) {
            $model->currentStepName = $map['CurrentStepName'];
        }
        if (isset($map['StepProgressInfo'])) {
            $model->stepProgressInfo = $map['StepProgressInfo'];
        }
        if (isset($map['TaskErrorMessage'])) {
            $model->taskErrorMessage = $map['TaskErrorMessage'];
        }
        if (isset($map['TaskAction'])) {
            $model->taskAction = $map['TaskAction'];
        }
        if (isset($map['Remain'])) {
            $model->remain = $map['Remain'];
        }
        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
