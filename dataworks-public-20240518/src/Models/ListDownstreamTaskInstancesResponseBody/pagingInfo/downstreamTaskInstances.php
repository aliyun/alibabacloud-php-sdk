<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDownstreamTaskInstancesResponseBody\pagingInfo;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDownstreamTaskInstancesResponseBody\pagingInfo\downstreamTaskInstances\taskInstance;
use AlibabaCloud\Tea\Model;

class downstreamTaskInstances extends Model
{
    /**
     * @description The scheduling dependency type. Valid values:
     *
     *   Normal
     *   CrossCycle
     *
     * @example Normal
     *
     * @var string
     */
    public $dependencyType;

    /**
     * @description The information about a task instance.
     *
     * @var taskInstance
     */
    public $taskInstance;
    protected $_name = [
        'dependencyType' => 'DependencyType',
        'taskInstance' => 'TaskInstance',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dependencyType) {
            $res['DependencyType'] = $this->dependencyType;
        }
        if (null !== $this->taskInstance) {
            $res['TaskInstance'] = null !== $this->taskInstance ? $this->taskInstance->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return downstreamTaskInstances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DependencyType'])) {
            $model->dependencyType = $map['DependencyType'];
        }
        if (isset($map['TaskInstance'])) {
            $model->taskInstance = taskInstance::fromMap($map['TaskInstance']);
        }

        return $model;
    }
}
