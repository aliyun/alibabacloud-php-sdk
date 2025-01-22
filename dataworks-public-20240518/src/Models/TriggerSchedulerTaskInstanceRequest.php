<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class TriggerSchedulerTaskInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $envType;
    /**
     * @var int
     */
    public $taskId;
    /**
     * @var int
     */
    public $triggerTime;
    protected $_name = [
        'envType'     => 'EnvType',
        'taskId'      => 'TaskId',
        'triggerTime' => 'TriggerTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->triggerTime) {
            $res['TriggerTime'] = $this->triggerTime;
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
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TriggerTime'])) {
            $model->triggerTime = $map['TriggerTime'];
        }

        return $model;
    }
}
