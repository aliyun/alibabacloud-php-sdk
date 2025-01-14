<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDownstreamTasksResponseBody\pagingInfo;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDownstreamTasksResponseBody\pagingInfo\downstreamTasks\task;
use AlibabaCloud\Tea\Model;

class downstreamTasks extends Model
{
    /**
     * @description The dependency type.
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dependencyType) {
            $res['DependencyType'] = $this->dependencyType;
        }
        if (null !== $this->task) {
            $res['Task'] = null !== $this->task ? $this->task->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return downstreamTasks
     */
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
