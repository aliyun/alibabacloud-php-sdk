<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models\StartExecutionResponseBody\execution;

use AlibabaCloud\Tea\Model;

class currentTasks extends Model
{
    /**
     * @description The action of the task.
     *
     * @example ACS::TimerTrigger
     *
     * @var string
     */
    public $taskAction;

    /**
     * @description The execution ID of the task.
     *
     * @example exec-dsadasdawq
     *
     * @var string
     */
    public $taskExecutionId;

    /**
     * @description The name of the task.
     *
     * @example testTask
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
