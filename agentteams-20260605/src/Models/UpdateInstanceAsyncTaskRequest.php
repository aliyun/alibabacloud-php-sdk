<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentTeams\V20260605\Models;

use AlibabaCloud\Dara\Model;

class UpdateInstanceAsyncTaskRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var bool
     */
    public $isResume;

    /**
     * @var string
     */
    public $taskCode;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'isResume' => 'IsResume',
        'taskCode' => 'TaskCode',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->isResume) {
            $res['IsResume'] = $this->isResume;
        }

        if (null !== $this->taskCode) {
            $res['TaskCode'] = $this->taskCode;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['IsResume'])) {
            $model->isResume = $map['IsResume'];
        }

        if (isset($map['TaskCode'])) {
            $model->taskCode = $map['TaskCode'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
