<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\DataQualityEvaluationTaskInstance\task;
use AlibabaCloud\Tea\Model;

class DataQualityEvaluationTaskInstance extends Model
{
    /**
     * @example 1710239005403
     *
     * @var int
     */
    public $createTime;

    /**
     * @example 1710239005403
     *
     * @var int
     */
    public $finishTime;

    /**
     * @example 10001
     *
     * @var int
     */
    public $id;

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
    protected $_name = [
        'createTime' => 'CreateTime',
        'finishTime' => 'FinishTime',
        'id' => 'Id',
        'status' => 'Status',
        'task' => 'Task',
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->task) {
            $res['Task'] = null !== $this->task ? $this->task->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DataQualityEvaluationTaskInstance
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Task'])) {
            $model->task = task::fromMap($map['Task']);
        }

        return $model;
    }
}
