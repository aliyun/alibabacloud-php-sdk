<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDataQualityEvaluationTaskInstanceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDataQualityEvaluationTaskInstanceResponseBody\dataQualityEvaluationTaskInstance\results;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDataQualityEvaluationTaskInstanceResponseBody\dataQualityEvaluationTaskInstance\task;

class dataQualityEvaluationTaskInstance extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var int
     */
    public $finishTime;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $parameters;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var results[]
     */
    public $results;

    /**
     * @var string
     */
    public $status;

    /**
     * @var task
     */
    public $task;

    /**
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

    public function validate()
    {
        if (\is_array($this->results)) {
            Model::validateArray($this->results);
        }
        if (null !== $this->task) {
            $this->task->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->results)) {
                $res['Results'] = [];
                $n1 = 0;
                foreach ($this->results as $item1) {
                    $res['Results'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->task) {
            $res['Task'] = null !== $this->task ? $this->task->toArray($noStream) : $this->task;
        }

        if (null !== $this->triggerContext) {
            $res['TriggerContext'] = $this->triggerContext;
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
                $n1 = 0;
                foreach ($map['Results'] as $item1) {
                    $model->results[$n1++] = results::fromMap($item1);
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
