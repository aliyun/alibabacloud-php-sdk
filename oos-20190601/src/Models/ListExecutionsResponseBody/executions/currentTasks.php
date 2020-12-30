<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models\ListExecutionsResponseBody\executions;

use AlibabaCloud\Tea\Model;

class currentTasks extends Model
{
    /**
     * @var string
     */
    public $taskExecutionId;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var string
     */
    public $taskAction;
    protected $_name = [
        'taskExecutionId' => 'TaskExecutionId',
        'taskName'        => 'TaskName',
        'taskAction'      => 'TaskAction',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskExecutionId) {
            $res['TaskExecutionId'] = $this->taskExecutionId;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->taskAction) {
            $res['TaskAction'] = $this->taskAction;
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
        if (isset($map['TaskExecutionId'])) {
            $model->taskExecutionId = $map['TaskExecutionId'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['TaskAction'])) {
            $model->taskAction = $map['TaskAction'];
        }

        return $model;
    }
}
