<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateTableResponse;

use AlibabaCloud\Tea\Model;

class taskInfo extends Model
{
    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $nextTaskId;
    protected $_name = [
        'taskId'     => 'TaskId',
        'content'    => 'Content',
        'status'     => 'Status',
        'nextTaskId' => 'NextTaskId',
    ];

    public function validate()
    {
        Model::validateRequired('taskId', $this->taskId, true);
        Model::validateRequired('content', $this->content, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('nextTaskId', $this->nextTaskId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->nextTaskId) {
            $res['NextTaskId'] = $this->nextTaskId;
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
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['NextTaskId'])) {
            $model->nextTaskId = $map['NextTaskId'];
        }

        return $model;
    }
}
