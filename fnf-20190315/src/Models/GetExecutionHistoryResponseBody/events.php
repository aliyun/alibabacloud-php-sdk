<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Fnf\V20190315\Models\GetExecutionHistoryResponseBody;

use AlibabaCloud\Tea\Model;

class events extends Model
{
    /**
     * @description The details about the execution step.
     *
     * @example {}
     *
     * @var string
     */
    public $eventDetail;

    /**
     * @description The ID of the execution step.
     *
     * @example 2
     *
     * @var int
     */
    public $eventId;

    /**
     * @description The ID of the scheduling step.
     *
     * @example 1
     *
     * @var int
     */
    public $scheduleEventId;

    /**
     * @description The name of the execution step.
     *
     * @example passStep
     *
     * @var string
     */
    public $stepName;

    /**
     * @description The time when the event was updated.
     *
     * @example 2019-01-01T01:01:01.001Z
     *
     * @var string
     */
    public $time;

    /**
     * @description The type of the execution step. Valid values:
     *
     *   **StepEntered**
     *   **StepStarted**
     *   **StepSucceeded**
     *   **StepFailed**
     *   **StepExited**
     *   **BranchEntered**
     *   **BranchExited**
     *   **IterationEntered**
     *   **IterationExited**
     *   **TaskScheduled**
     *   **TaskStarted**
     *   **TaskSubmitted**
     *   **TaskSubmitFailed**
     *   **TaskSucceeded**
     *   **TaskFailed**
     *   **TaskTimedOut**
     *   **ExecutionStarted**
     *   **ExecutionStopped**
     *   **ExecutionSucceeded**
     *   **ExecutionFailed**
     *   **ExecutionTimedOut**
     *
     * @example TaskSucceeded
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'eventDetail'     => 'EventDetail',
        'eventId'         => 'EventId',
        'scheduleEventId' => 'ScheduleEventId',
        'stepName'        => 'StepName',
        'time'            => 'Time',
        'type'            => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventDetail) {
            $res['EventDetail'] = $this->eventDetail;
        }
        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }
        if (null !== $this->scheduleEventId) {
            $res['ScheduleEventId'] = $this->scheduleEventId;
        }
        if (null !== $this->stepName) {
            $res['StepName'] = $this->stepName;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return events
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventDetail'])) {
            $model->eventDetail = $map['EventDetail'];
        }
        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }
        if (isset($map['ScheduleEventId'])) {
            $model->scheduleEventId = $map['ScheduleEventId'];
        }
        if (isset($map['StepName'])) {
            $model->stepName = $map['StepName'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
