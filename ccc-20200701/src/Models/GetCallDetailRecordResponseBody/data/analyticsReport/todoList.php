<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\GetCallDetailRecordResponseBody\data\analyticsReport;

use AlibabaCloud\Tea\Model;

class todoList extends Model
{
    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string[]
     */
    public $tasks;
    protected $_name = [
        'success' => 'Success',
        'taskId'  => 'TaskId',
        'tasks'   => 'Tasks',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->tasks) {
            $res['Tasks'] = $this->tasks;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return todoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['Tasks'])) {
            if (!empty($map['Tasks'])) {
                $model->tasks = $map['Tasks'];
            }
        }

        return $model;
    }
}
