<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListUpstreamTasksResponseBody\pagingInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListUpstreamTasksResponseBody\pagingInfo\upstreamTasks\task;

class upstreamTasks extends Model
{
    /**
     * @var string
     */
    public $dependencyType;
    /**
     * @var task
     */
    public $task;
    protected $_name = [
        'dependencyType' => 'DependencyType',
        'task'           => 'Task',
    ];

    public function validate()
    {
        if (null !== $this->task) {
            $this->task->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dependencyType) {
            $res['DependencyType'] = $this->dependencyType;
        }

        if (null !== $this->task) {
            $res['Task'] = null !== $this->task ? $this->task->toArray($noStream) : $this->task;
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
        if (isset($map['DependencyType'])) {
            $model->dependencyType = $map['DependencyType'];
        }

        if (isset($map['Task'])) {
            $model->task = task::fromMap($map['Task']);
        }

        return $model;
    }
}
