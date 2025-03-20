<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class TriggerSchedulerTaskInstanceRequest extends Model
{
    /**
     * @description The environment of the workspace. Valid values:
     *
     *   Prod: production environment
     *   Dev: development environment
     *
     * @example Prod
     *
     * @var string
     */
    public $envType;

    /**
     * @description The task ID.
     *
     * This parameter is required.
     *
     * @example 1234
     *
     * @var int
     */
    public $taskId;

    /**
     * @description The time defined by the HTTP Trigger node.
     *
     * This parameter is required.
     *
     * @example 1710239005403
     *
     * @var int
     */
    public $triggerTime;
    protected $_name = [
        'envType' => 'EnvType',
        'taskId' => 'TaskId',
        'triggerTime' => 'TriggerTime',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return TriggerSchedulerTaskInstanceRequest
     */
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
