<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentTeams\V20260605\Models\ListTeamTasksResponseBody;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $assignedTo;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskTitle;
    protected $_name = [
        'assignedTo' => 'AssignedTo',
        'createdAt' => 'CreatedAt',
        'status' => 'Status',
        'taskId' => 'TaskId',
        'taskTitle' => 'TaskTitle',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assignedTo) {
            $res['AssignedTo'] = $this->assignedTo;
        }

        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->taskTitle) {
            $res['TaskTitle'] = $this->taskTitle;
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
        if (isset($map['AssignedTo'])) {
            $model->assignedTo = $map['AssignedTo'];
        }

        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TaskTitle'])) {
            $model->taskTitle = $map['TaskTitle'];
        }

        return $model;
    }
}
