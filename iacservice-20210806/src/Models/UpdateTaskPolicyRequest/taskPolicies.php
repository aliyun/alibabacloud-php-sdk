<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateTaskPolicyRequest;

use AlibabaCloud\Dara\Model;

class taskPolicies extends Model
{
    /**
     * @var string
     */
    public $priority;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'priority' => 'priority',
        'taskId' => 'taskId',
        'type' => 'type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->priority) {
            $res['priority'] = $this->priority;
        }

        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['priority'])) {
            $model->priority = $map['priority'];
        }

        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
