<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\Tea\Model;

class ProjectBuildConfigTaskPoliciesValue extends Model
{
    /**
     * @var string
     */
    public $taskId;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var bool
     */
    public $destroyAfterExecution;
    protected $_name = [
        'taskId'                => 'taskId',
        'priority'              => 'priority',
        'destroyAfterExecution' => 'destroyAfterExecution',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }
        if (null !== $this->priority) {
            $res['priority'] = $this->priority;
        }
        if (null !== $this->destroyAfterExecution) {
            $res['destroyAfterExecution'] = $this->destroyAfterExecution;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ProjectBuildConfigTaskPoliciesValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }
        if (isset($map['priority'])) {
            $model->priority = $map['priority'];
        }
        if (isset($map['destroyAfterExecution'])) {
            $model->destroyAfterExecution = $map['destroyAfterExecution'];
        }

        return $model;
    }
}
