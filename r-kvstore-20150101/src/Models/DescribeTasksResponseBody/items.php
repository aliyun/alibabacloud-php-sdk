<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeTasksResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskAction;

    /**
     * @var string
     */
    public $status;

    /**
     * @var float
     */
    public $progress;

    /**
     * @var string
     */
    public $beginTime;

    /**
     * @var string
     */
    public $finishTime;

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
        'taskId'           => 'TaskId',
        'taskAction'       => 'TaskAction',
        'status'           => 'Status',
        'progress'         => 'Progress',
        'beginTime'        => 'BeginTime',
        'finishTime'       => 'FinishTime',
        'stepsInfo'        => 'StepsInfo',
        'remain'           => 'Remain',
        'stepProgressInfo' => 'StepProgressInfo',
        'currentStepName'  => 'CurrentStepName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskAction) {
            $res['TaskAction'] = $this->taskAction;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
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
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskAction'])) {
            $model->taskAction = $map['TaskAction'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
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
