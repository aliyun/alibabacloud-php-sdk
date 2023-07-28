<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models\ListExecutionsResponseBody\executions;

use AlibabaCloud\Tea\Model;

class currentTasks extends Model
{
    /**
     * @description The execution template of the task.
     *
     * @example acs::Template
     *
     * @var string
     */
    public $taskAction;

    /**
     * @description The ID of the task execution.
     *
     * @example task-exec-44d32b45d2a49899#1
     *
     * @var string
     */
    public $taskExecutionId;

    /**
     * @description The name of the task.
     *
     * @example installSLSILogtail
     *
     * @var string
     */
    public $taskName;
    protected $_name = [
        'taskAction'      => 'TaskAction',
        'taskExecutionId' => 'TaskExecutionId',
        'taskName'        => 'TaskName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskAction) {
            $res['TaskAction'] = $this->taskAction;
        }
        if (null !== $this->taskExecutionId) {
            $res['TaskExecutionId'] = $this->taskExecutionId;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return currentTasks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TaskAction'])) {
            $model->taskAction = $map['TaskAction'];
        }
        if (isset($map['TaskExecutionId'])) {
            $model->taskExecutionId = $map['TaskExecutionId'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        return $model;
    }
}
