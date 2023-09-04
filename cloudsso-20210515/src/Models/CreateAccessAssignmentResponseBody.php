<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\SDK\Cloudsso\V20210515\Models\CreateAccessAssignmentResponseBody\task;
use AlibabaCloud\Tea\Model;

class CreateAccessAssignmentResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 4726AA56-E138-5C99-85E4-F493536D042F
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information about the task.
     *
     * @var task
     */
    public $task;
    protected $_name = [
        'requestId' => 'RequestId',
        'task'      => 'Task',
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
        if (null !== $this->task) {
            $res['Task'] = null !== $this->task ? $this->task->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAccessAssignmentResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Task'])) {
            $model->task = task::fromMap($map['Task']);
        }

        return $model;
    }
}
