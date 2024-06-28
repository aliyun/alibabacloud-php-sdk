<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class AddTicketTaskRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example assignee@ccc-test
     *
     * @var string
     */
    public $assignee;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $comment;

    /**
     * @description This parameter is required.
     *
     * @example ccc-test
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example After
     *
     * @var string
     */
    public $position;

    /**
     * @description This parameter is required.
     *
     * @example 3b8c672f-48f6-45f5-bf41-9d4cb2b4a716
     *
     * @var string
     */
    public $taskId;

    /**
     * @description This parameter is required.
     *
     * @example 3d26b90a-c5d2-4b09-8219-********
     *
     * @var string
     */
    public $ticketId;
    protected $_name = [
        'assignee'   => 'Assignee',
        'comment'    => 'Comment',
        'instanceId' => 'InstanceId',
        'position'   => 'Position',
        'taskId'     => 'TaskId',
        'ticketId'   => 'TicketId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assignee) {
            $res['Assignee'] = $this->assignee;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->position) {
            $res['Position'] = $this->position;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->ticketId) {
            $res['TicketId'] = $this->ticketId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddTicketTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Assignee'])) {
            $model->assignee = $map['Assignee'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Position'])) {
            $model->position = $map['Position'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TicketId'])) {
            $model->ticketId = $map['TicketId'];
        }

        return $model;
    }
}
