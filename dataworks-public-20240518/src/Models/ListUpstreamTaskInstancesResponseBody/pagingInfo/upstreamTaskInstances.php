<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListUpstreamTaskInstancesResponseBody\pagingInfo;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListUpstreamTaskInstancesResponseBody\pagingInfo\upstreamTaskInstances\taskInstance;
use AlibabaCloud\Tea\Model;

class upstreamTaskInstances extends Model
{
    /**
     * @description The dependency type.
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
        'taskInstance'   => 'TaskInstance',
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
        if (null !== $this->taskInstance) {
            $res['TaskInstance'] = null !== $this->taskInstance ? $this->taskInstance->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return upstreamTaskInstances
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
