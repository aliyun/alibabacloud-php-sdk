<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateTableResponseBody;

use AlibabaCloud\Tea\Model;

class taskInfo extends Model
{
    /**
     * @description The details about the status of the current subtask.
     *
     *   If the current subtask is successful, success is returned.
     *   If the current subtask fails, the error details are displayed.
     *
     * @example success
     *
     * @var string
     */
    public $content;

    /**
     * @description The ID of the subtask that you want to run. If this parameter is left empty, all subtasks are complete.
     *
     * @example abc1
     *
     * @var string
     */
    public $nextTaskId;

    /**
     * @description The status of the current subtask. Valid values:
     *
     *   operating: The subtask is running.
     *   success: The subtask succeeds.
     *   failure: The subtask fails to run. For more information about the error details, see the Content parameter.
     *
     * @example success
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the current subtask.
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
     * @return taskInfo
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
