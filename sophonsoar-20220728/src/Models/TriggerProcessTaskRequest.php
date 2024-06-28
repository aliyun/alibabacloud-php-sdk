<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Tea\Model;

class TriggerProcessTaskRequest extends Model
{
    /**
     * @description The type of the action. Valid values:
     *
     *   **remove**: cancels blocking or isolation.
     *   **retry**: submits the task again.
     *
     * This parameter is required.
     * @example remove
     *
     * @var string
     */
    public $actionType;

    /**
     * @description The ID of the handling task.
     *
     * This parameter is required.
     * @example 15355xxxxxx82894882
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'actionType' => 'ActionType',
        'taskId'     => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionType) {
            $res['ActionType'] = $this->actionType;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TriggerProcessTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionType'])) {
            $model->actionType = $map['ActionType'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
