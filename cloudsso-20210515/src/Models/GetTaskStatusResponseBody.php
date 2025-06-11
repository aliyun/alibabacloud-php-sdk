<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetTaskStatusResponseBody\taskStatus;

class GetTaskStatusResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var taskStatus
     */
    public $taskStatus;
    protected $_name = [
        'requestId' => 'RequestId',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TaskStatus'])) {
            $model->taskStatus = taskStatus::fromMap($map['TaskStatus']);
        }

        return $model;
    }
}
