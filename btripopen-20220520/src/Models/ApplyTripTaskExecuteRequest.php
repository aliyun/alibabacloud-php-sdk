<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class ApplyTripTaskExecuteRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example open
     *
     * @var string
     */
    public $actionFrom;

    /**
     * @var string
     */
    public $comment;

    /**
     * @description This parameter is required.
     *
     * @example agree
     *
     * @var string
     */
    public $taskAction;

    /**
     * @description This parameter is required.
     *
     * @example 12345
     *
     * @var int
     */
    public $taskId;

    /**
     * @description This parameter is required.
     *
     * @example thirdpart12138
     *
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'actionFrom' => 'action_from',
        'comment'    => 'comment',
        'taskAction' => 'task_action',
        'taskId'     => 'task_id',
        'userId'     => 'user_id',
        'userName'   => 'user_name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionFrom) {
            $res['action_from'] = $this->actionFrom;
        }
        if (null !== $this->comment) {
            $res['comment'] = $this->comment;
        }
        if (null !== $this->taskAction) {
            $res['task_action'] = $this->taskAction;
        }
        if (null !== $this->taskId) {
            $res['task_id'] = $this->taskId;
        }
        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
        }
        if (null !== $this->userName) {
            $res['user_name'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ApplyTripTaskExecuteRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['action_from'])) {
            $model->actionFrom = $map['action_from'];
        }
        if (isset($map['comment'])) {
            $model->comment = $map['comment'];
        }
        if (isset($map['task_action'])) {
            $model->taskAction = $map['task_action'];
        }
        if (isset($map['task_id'])) {
            $model->taskId = $map['task_id'];
        }
        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }
        if (isset($map['user_name'])) {
            $model->userName = $map['user_name'];
        }

        return $model;
    }
}
