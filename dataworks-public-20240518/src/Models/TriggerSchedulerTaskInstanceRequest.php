<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class TriggerSchedulerTaskInstanceRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 1234
     *
     * @var int
     */
    public $taskId;

    /**
     * @description This parameter is required.
     *
     * @example 1710239005403
     *
     * @var int
     */
    public $triggerTime;
    protected $_name = [
        'taskId'      => 'TaskId',
        'triggerTime' => 'TriggerTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TriggerTime'])) {
            $model->triggerTime = $map['TriggerTime'];
        }

        return $model;
    }
}
