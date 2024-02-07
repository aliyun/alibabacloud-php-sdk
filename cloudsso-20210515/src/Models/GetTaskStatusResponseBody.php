<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetTaskStatusResponseBody\taskStatus;
use AlibabaCloud\Tea\Model;

class GetTaskStatusResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 005F4623-AE53-504D-830F-44825F7DC211
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The status information about the task.
     *
     * @var taskStatus
     */
    public $taskStatus;
    protected $_name = [
        'requestId'  => 'RequestId',
        'taskStatus' => 'TaskStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = null !== $this->taskStatus ? $this->taskStatus->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTaskStatusResponseBody
     */
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
