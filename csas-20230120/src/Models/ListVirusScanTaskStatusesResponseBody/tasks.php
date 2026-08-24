<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\ListVirusScanTaskStatusesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListVirusScanTaskStatusesResponseBody\tasks\taskStatus;

class tasks extends Model
{
    /**
     * @var string
     */
    public $taskId;

    /**
     * @var taskStatus
     */
    public $taskStatus;
    protected $_name = [
        'taskId' => 'TaskId',
        'taskStatus' => 'TaskStatus',
    ];

    public function validate()
    {
        if (null !== $this->taskStatus) {
            $this->taskStatus->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = null !== $this->taskStatus ? $this->taskStatus->toArray($noStream) : $this->taskStatus;
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
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TaskStatus'])) {
            $model->taskStatus = taskStatus::fromMap($map['TaskStatus']);
        }

        return $model;
    }
}
