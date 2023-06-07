<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models\ListWorkflowInstanceResponseBody\data;

use AlibabaCloud\Tea\Model;

class wfInstanceInfos extends Model
{
    /**
     * @description The data timestamp of the workflow instance.
     *
     * @example 2023-01-03 18:00:00
     *
     * @var string
     */
    public $dataTime;

    /**
     * @description The time when the workflow instance stopped running.
     *
     * @example 2023-01-03 18:00:21
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The time when the workflow instance was scheduled to run.
     *
     * @example 2023-01-03 18:00:00
     *
     * @var string
     */
    public $scheduleTime;

    /**
     * @description The time when the workflow instance started to run.
     *
     * @example 2023-01-03 18:00:01
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The state of the workflow instance. Valid values:
     *
     *   1: pending
     *   2: preparing
     *   3: running
     *   4: successful
     *   5: failed
     *
     * @example 5
     *
     * @var int
     */
    public $status;

    /**
     * @description The workflow instance ID.
     *
     * @example 123456
     *
     * @var int
     */
    public $wfInstanceId;

    /**
     * @description The workflow ID.
     *
     * @example 123
     *
     * @var int
     */
    public $workflowId;
    protected $_name = [
        'dataTime'     => 'DataTime',
        'endTime'      => 'EndTime',
        'scheduleTime' => 'ScheduleTime',
        'startTime'    => 'StartTime',
        'status'       => 'Status',
        'wfInstanceId' => 'WfInstanceId',
        'workflowId'   => 'WorkflowId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataTime) {
            $res['DataTime'] = $this->dataTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->scheduleTime) {
            $res['ScheduleTime'] = $this->scheduleTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->wfInstanceId) {
            $res['WfInstanceId'] = $this->wfInstanceId;
        }
        if (null !== $this->workflowId) {
            $res['WorkflowId'] = $this->workflowId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return wfInstanceInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataTime'])) {
            $model->dataTime = $map['DataTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ScheduleTime'])) {
            $model->scheduleTime = $map['ScheduleTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['WfInstanceId'])) {
            $model->wfInstanceId = $map['WfInstanceId'];
        }
        if (isset($map['WorkflowId'])) {
            $model->workflowId = $map['WorkflowId'];
        }

        return $model;
    }
}
