<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetTaskInstanceResponseBody\taskInstance;
use AlibabaCloud\Tea\Model;

class GetTaskInstanceResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 22C97E95-F023-56B5-8852-B1A77A17XXXX
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The details of the task instance.
     *
     * @var taskInstance
     */
    public $taskInstance;
    protected $_name = [
        'requestId' => 'RequestId',
        'taskInstance' => 'TaskInstance',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->taskInstance) {
            $res['TaskInstance'] = null !== $this->taskInstance ? $this->taskInstance->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTaskInstanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TaskInstance'])) {
            $model->taskInstance = taskInstance::fromMap($map['TaskInstance']);
        }

        return $model;
    }
}
