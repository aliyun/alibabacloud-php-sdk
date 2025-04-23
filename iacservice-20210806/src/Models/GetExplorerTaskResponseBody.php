<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetExplorerTaskResponseBody\task;

class GetExplorerTaskResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var task
     */
    public $task;
    protected $_name = [
        'requestId' => 'requestId',
        'task' => 'task',
    ];

    public function validate()
    {
        if (null !== $this->task) {
            $this->task->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->task) {
            $res['task'] = null !== $this->task ? $this->task->toArray($noStream) : $this->task;
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
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['task'])) {
            $model->task = task::fromMap($map['task']);
        }

        return $model;
    }
}
