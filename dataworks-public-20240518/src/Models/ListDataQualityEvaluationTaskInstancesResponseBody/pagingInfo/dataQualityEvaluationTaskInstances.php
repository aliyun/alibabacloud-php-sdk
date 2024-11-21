<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityEvaluationTaskInstancesResponseBody\pagingInfo;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityEvaluationTaskInstancesResponseBody\pagingInfo\dataQualityEvaluationTaskInstances\task;
use AlibabaCloud\Tea\Model;

class dataQualityEvaluationTaskInstances extends Model
{
    /**
     * @description The time at which the instance was generated.
     *
     * @example 1710239005403
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The time at which the instance finished running.
     *
     * @example 1710239005403
     *
     * @var int
     */
    public $finishTime;

    /**
     * @description The ID of the instance.
     *
     * @example 10001
     *
     * @var int
     */
    public $id;

    /**
     * @description The parameters configured for the instance.
     *
     * @example {
     * }
     * @var string
     */
    public $parameters;

    /**
     * @description The DataWorks workspace ID.
     *
     * @example 100
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The status of the instance. Valid values:
     *
     *   Running
     *   Error
     *   Passed
     *   Warned
     *   Critical
     *
     * @example Critical
     *
     * @var string
     */
    public $status;

    /**
     * @description The snapshot of the configurations for the task when the task starts.
     *
     * @var task
     */
    public $task;

    /**
     * @description The information about the trigger module of the instance.
     *
     * @example {
     * }
     * @var string
     */
    public $triggerContext;
    protected $_name = [
        'createTime'     => 'CreateTime',
        'finishTime'     => 'FinishTime',
        'id'             => 'Id',
        'parameters'     => 'Parameters',
        'projectId'      => 'ProjectId',
        'status'         => 'Status',
        'task'           => 'Task',
        'triggerContext' => 'TriggerContext',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->task) {
            $res['Task'] = null !== $this->task ? $this->task->toMap() : null;
        }
        if (null !== $this->triggerContext) {
            $res['TriggerContext'] = $this->triggerContext;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataQualityEvaluationTaskInstances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Parameters'])) {
            $model->parameters = $map['Parameters'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Task'])) {
            $model->task = task::fromMap($map['Task']);
        }
        if (isset($map['TriggerContext'])) {
            $model->triggerContext = $map['TriggerContext'];
        }

        return $model;
    }
}
