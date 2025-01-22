<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDownstreamTaskInstancesResponseBody\pagingInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDownstreamTaskInstancesResponseBody\pagingInfo\downstreamTaskInstances\taskInstance;

class downstreamTaskInstances extends Model
{
    /**
     * @var string
     */
    public $dependencyType;
    /**
     * @var taskInstance
     */
    public $taskInstance;
    protected $_name = [
        'dependencyType' => 'DependencyType',
        'taskInstance'   => 'TaskInstance',
    ];

    public function validate()
    {
        if (null !== $this->taskInstance) {
            $this->taskInstance->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dependencyType) {
            $res['DependencyType'] = $this->dependencyType;
        }

        if (null !== $this->taskInstance) {
            $res['TaskInstance'] = null !== $this->taskInstance ? $this->taskInstance->toArray($noStream) : $this->taskInstance;
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

        if (isset($map['TaskInstance'])) {
            $model->taskInstance = taskInstance::fromMap($map['TaskInstance']);
        }

        return $model;
    }
}
