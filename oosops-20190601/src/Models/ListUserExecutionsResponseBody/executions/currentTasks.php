<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oosops\V20190601\Models\ListUserExecutionsResponseBody\executions;

use AlibabaCloud\Dara\Model;

class currentTasks extends Model
{
    /**
     * @var string
     */
    public $taskAction;
    /**
     * @var string
     */
    public $taskExecutionId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
