<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetTaskResponseBody\data;

use AlibabaCloud\Dara\Model;

class taskStepList extends Model
{
    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $stepEndTime;

    /**
     * @var string
     */
    public $stepStartTime;

    /**
     * @var string
     */
    public $taskMessage;

    /**
     * @var string
     */
    public $taskStep;
    protected $_name = [
        'endTime' => 'EndTime',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'stepEndTime' => 'StepEndTime',
        'stepStartTime' => 'StepStartTime',
        'taskMessage' => 'TaskMessage',
        'taskStep' => 'TaskStep',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->stepEndTime) {
            $res['StepEndTime'] = $this->stepEndTime;
        }

        if (null !== $this->stepStartTime) {
            $res['StepStartTime'] = $this->stepStartTime;
        }

        if (null !== $this->taskMessage) {
            $res['TaskMessage'] = $this->taskMessage;
        }

        if (null !== $this->taskStep) {
            $res['TaskStep'] = $this->taskStep;
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
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StepEndTime'])) {
            $model->stepEndTime = $map['StepEndTime'];
        }

        if (isset($map['StepStartTime'])) {
            $model->stepStartTime = $map['StepStartTime'];
        }

        if (isset($map['TaskMessage'])) {
            $model->taskMessage = $map['TaskMessage'];
        }

        if (isset($map['TaskStep'])) {
            $model->taskStep = $map['TaskStep'];
        }

        return $model;
    }
}
