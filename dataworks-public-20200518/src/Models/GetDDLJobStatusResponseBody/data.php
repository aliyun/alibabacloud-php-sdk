<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDDLJobStatusResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The content of the task.
     *
     * @example success
     *
     * @var string
     */
    public $content;

    /**
     * @description The ID of the ongoing task. If no value is returned for this parameter, all subtasks are complete.
     *
     * @example abc1
     *
     * @var string
     */
    public $nextTaskId;

    /**
     * @description The status of the task
     *
     * @example success
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the task.
     *
     * @example abc
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'content'    => 'Content',
        'nextTaskId' => 'NextTaskId',
        'status'     => 'Status',
        'taskId'     => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->nextTaskId) {
            $res['NextTaskId'] = $this->nextTaskId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['NextTaskId'])) {
            $model->nextTaskId = $map['NextTaskId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
