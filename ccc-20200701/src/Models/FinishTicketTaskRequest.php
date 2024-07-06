<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class FinishTicketTaskRequest extends Model
{
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
     * @example b52a34dc-f514-4600-9c39-3cf657167c97
     *
     * @var string
     */
    public $taskId;

    /**
     * @example f2c6722b-cd13-442d-bf10-22a07c70d6d5
     *
     * @var string
     */
    public $ticketId;
    protected $_name = [
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
     * @return FinishTicketTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
