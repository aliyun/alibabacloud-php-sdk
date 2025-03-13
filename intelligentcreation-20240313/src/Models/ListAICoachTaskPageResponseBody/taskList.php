<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\ListAICoachTaskPageResponseBody;

use AlibabaCloud\Tea\Model;

class taskList extends Model
{
    /**
     * @example yyyy-MM-dd HH:mm:ss
     *
     * @var string
     */
    public $finishTime;

    /**
     * @example FINISHED
     *
     * @var string
     */
    public $status;

    /**
     * @example 222
     *
     * @var string
     */
    public $studentId;

    /**
     * @example 11111111111
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'finishTime' => 'finishTime',
        'status'     => 'status',
        'studentId'  => 'studentId',
        'taskId'     => 'taskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->finishTime) {
            $res['finishTime'] = $this->finishTime;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->studentId) {
            $res['studentId'] = $this->studentId;
        }
        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taskList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['finishTime'])) {
            $model->finishTime = $map['finishTime'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['studentId'])) {
            $model->studentId = $map['studentId'];
        }
        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        return $model;
    }
}
