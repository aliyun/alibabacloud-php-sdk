<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDDLJobStatusResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $nextTaskId;

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
    public $taskId;
    protected $_name = [
        'nextTaskId' => 'NextTaskId',
        'content'    => 'Content',
        'status'     => 'Status',
        'taskId'     => 'TaskId',
    ];

    public function validate()
    {
        Model::validateRequired('nextTaskId', $this->nextTaskId, true);
        Model::validateRequired('content', $this->content, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('taskId', $this->taskId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextTaskId) {
            $res['NextTaskId'] = $this->nextTaskId;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
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
        if (isset($map['NextTaskId'])) {
            $model->nextTaskId = $map['NextTaskId'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
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
