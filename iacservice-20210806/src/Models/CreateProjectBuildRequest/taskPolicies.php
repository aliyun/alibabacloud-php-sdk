<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\CreateProjectBuildRequest;

use AlibabaCloud\Tea\Model;

class taskPolicies extends Model
{
    /**
     * @var bool
     */
    public $destroyAfterExecution;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'destroyAfterExecution' => 'destroyAfterExecution',
        'priority'              => 'priority',
        'taskId'                => 'taskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->destroyAfterExecution) {
            $res['destroyAfterExecution'] = $this->destroyAfterExecution;
        }
        if (null !== $this->priority) {
            $res['priority'] = $this->priority;
        }
        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taskPolicies
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['destroyAfterExecution'])) {
            $model->destroyAfterExecution = $map['destroyAfterExecution'];
        }
        if (isset($map['priority'])) {
            $model->priority = $map['priority'];
        }
        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        return $model;
    }
}
