<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDataQualityEvaluationTaskInstanceResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDataQualityEvaluationTaskInstanceResponseBody\dataQualityEvaluationTaskInstance\results;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDataQualityEvaluationTaskInstanceResponseBody\dataQualityEvaluationTaskInstance\task;
use AlibabaCloud\Tea\Model;

class dataQualityEvaluationTaskInstance extends Model
{
    /**
     * @description The creation time.
     *
     * @example 1716344665000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The end time of the instance.
     *
     * @example 1716344665000
     *
     * @var int
     */
    public $finishTime;

    /**
     * @description The ID of the data quality monitoring instance.
     *
     * @example 7234231689
     *
     * @var int
     */
    public $id;

    /**
     * @description Data quality verification execution parameters in JSON format. The available keys are as follows:
     * - triggerTime: the millisecond timestamp of the trigger time. The baseline time of the $[yyyymmdd] expression in the data range of data quality monitoring. Required.
     *
     * @example { "triggerTime": 1733284062000 }
     *
     * @var string
     */
    public $parameters;

    /**
     * @description The ID of the workspace.
     *
     * @example 98330
     *
     * @var int
     */
    public $projectId;

    /**
     * @var results[]
     */
    public $results;

    /**
     * @description The status of the data quality monitoring instance.
     * - Running: Verifying
     * - Error: A rule verification Error occurred.
     * - Passed: all rules are verified
     * - Warned: normal alarm threshold triggered by rules
     * - Critical: Threshold for serious alerts triggered by rules
     *
     * @example Passed
     *
     * @var string
     */
    public $status;

    /**
     * @description The monitor.
     *
     * @var task
     */
    public $task;

    /**
     * @description The context information when the instance is triggered, in JSON format. The possible keys are as follows:
     * - TriggerClient: the trigger source of the data quality monitoring instance, such as CWF2 (scheduling system), may be added later.
     * - TriggerClientId: associated with a specific business resource in the source system. For example, if TriggerClient is CWF2, the ID of the scheduling task is recorded here.
     *
     * @example { "triggerClient": "CWF2", "triggerClientId": 70001238945 }
     *
     * @var string
     */
    public $triggerContext;
    protected $_name = [
        'createTime' => 'CreateTime',
        'finishTime' => 'FinishTime',
        'id' => 'Id',
        'parameters' => 'Parameters',
        'projectId' => 'ProjectId',
        'results' => 'Results',
        'status' => 'Status',
        'task' => 'Task',
        'triggerContext' => 'TriggerContext',
    ];

    public function validate() {}

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
        if (null !== $this->results) {
            $res['Results'] = [];
            if (null !== $this->results && \is_array($this->results)) {
                $n = 0;
                foreach ($this->results as $item) {
                    $res['Results'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['Results'])) {
            if (!empty($map['Results'])) {
                $model->results = [];
                $n = 0;
                foreach ($map['Results'] as $item) {
                    $model->results[$n++] = null !== $item ? results::fromMap($item) : $item;
                }
            }
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
