<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\SDK\Cloudsso\V20210515\Models\DeleteAccessAssignmentResponseBody\task;
use AlibabaCloud\Tea\Model;

class DeleteAccessAssignmentResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 5C9D0CF4-5CE8-5CE6-932A-826EF4ADD007
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The task information.
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
     * @return DeleteAccessAssignmentResponseBody
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
