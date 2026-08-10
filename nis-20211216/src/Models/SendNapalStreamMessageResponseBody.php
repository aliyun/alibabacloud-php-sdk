<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Nis\V20211216\Models\SendNapalStreamMessageResponseBody\message;
use AlibabaCloud\SDK\Nis\V20211216\Models\SendNapalStreamMessageResponseBody\task;
use AlibabaCloud\SDK\Nis\V20211216\Models\SendNapalStreamMessageResponseBody\taskArtifactUpdate;
use AlibabaCloud\SDK\Nis\V20211216\Models\SendNapalStreamMessageResponseBody\taskStatusUpdate;

class SendNapalStreamMessageResponseBody extends Model
{
    /**
     * @var message
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var task
     */
    public $task;

    /**
     * @var taskArtifactUpdate
     */
    public $taskArtifactUpdate;

    /**
     * @var taskStatusUpdate
     */
    public $taskStatusUpdate;
    protected $_name = [
        'message' => 'Message',
        'requestId' => 'RequestId',
        'task' => 'Task',
        'taskArtifactUpdate' => 'TaskArtifactUpdate',
        'taskStatusUpdate' => 'TaskStatusUpdate',
    ];

    public function validate()
    {
        if (null !== $this->message) {
            $this->message->validate();
        }
        if (null !== $this->task) {
            $this->task->validate();
        }
        if (null !== $this->taskArtifactUpdate) {
            $this->taskArtifactUpdate->validate();
        }
        if (null !== $this->taskStatusUpdate) {
            $this->taskStatusUpdate->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = null !== $this->message ? $this->message->toArray($noStream) : $this->message;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->task) {
            $res['Task'] = null !== $this->task ? $this->task->toArray($noStream) : $this->task;
        }

        if (null !== $this->taskArtifactUpdate) {
            $res['TaskArtifactUpdate'] = null !== $this->taskArtifactUpdate ? $this->taskArtifactUpdate->toArray($noStream) : $this->taskArtifactUpdate;
        }

        if (null !== $this->taskStatusUpdate) {
            $res['TaskStatusUpdate'] = null !== $this->taskStatusUpdate ? $this->taskStatusUpdate->toArray($noStream) : $this->taskStatusUpdate;
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
        if (isset($map['Message'])) {
            $model->message = message::fromMap($map['Message']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Task'])) {
            $model->task = task::fromMap($map['Task']);
        }

        if (isset($map['TaskArtifactUpdate'])) {
            $model->taskArtifactUpdate = taskArtifactUpdate::fromMap($map['TaskArtifactUpdate']);
        }

        if (isset($map['TaskStatusUpdate'])) {
            $model->taskStatusUpdate = taskStatusUpdate::fromMap($map['TaskStatusUpdate']);
        }

        return $model;
    }
}
