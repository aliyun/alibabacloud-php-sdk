<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDataQualityEvaluationTaskInstanceResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDataQualityEvaluationTaskInstanceResponseBody\dataQualityEvaluationTaskInstance\task;
use AlibabaCloud\Tea\Model;

class dataQualityEvaluationTaskInstance extends Model
{
    /**
     * @example 1716344665000
     *
     * @var int
     */
    public $createTime;

    /**
     * @example 1716344665000
     *
     * @var int
     */
    public $finishTime;

    /**
     * @example 7234231689
     *
     * @var int
     */
    public $id;

    /**
     * @example { "triggerTime": 1733284062000 }
     *
     * @var string
     */
    public $parameters;

    /**
     * @example 98330
     *
     * @var int
     */
    public $projectId;

    /**
     * @example Passed
     *
     * @var string
     */
    public $status;

    /**
     * @var task
     */
    public $task;

    /**
     * @example { "triggerClient": "CWF2", "triggerClientId": 70001238945 }
     *
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
     * @return dataQualityEvaluationTaskInstance
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
