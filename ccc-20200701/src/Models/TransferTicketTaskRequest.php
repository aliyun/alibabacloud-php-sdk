<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class TransferTicketTaskRequest extends Model
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
     * @example f780ade8-3ca9-458b-b067-63077946a570
     *
     * @var string
     */
    public $taskId;

    /**
     * @example 5491d3b4-14ee-4341-b5f1-db2c78beddeb
     *
     * @var string
     */
    public $ticketId;
    protected $_name = [
        'assignee'   => 'Assignee',
        'comment'    => 'Comment',
        'instanceId' => 'InstanceId',
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
     * @return TransferTicketTaskRequest
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
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TicketId'])) {
            $model->ticketId = $map['TicketId'];
        }

        return $model;
    }
}
