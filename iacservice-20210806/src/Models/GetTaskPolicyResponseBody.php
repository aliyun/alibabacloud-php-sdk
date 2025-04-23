<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetTaskPolicyResponseBody\taskPolicy;

class GetTaskPolicyResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var taskPolicy
     */
    public $taskPolicy;
    protected $_name = [
        'requestId' => 'requestId',
        'taskPolicy' => 'taskPolicy',
    ];

    public function validate()
    {
        if (null !== $this->taskPolicy) {
            $this->taskPolicy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->taskPolicy) {
            $res['taskPolicy'] = null !== $this->taskPolicy ? $this->taskPolicy->toArray($noStream) : $this->taskPolicy;
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

        if (isset($map['taskPolicy'])) {
            $model->taskPolicy = taskPolicy::fromMap($map['taskPolicy']);
        }

        return $model;
    }
}
