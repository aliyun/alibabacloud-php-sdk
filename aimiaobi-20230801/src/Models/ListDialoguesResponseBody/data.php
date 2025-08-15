<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListDialoguesResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $bot;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $createUser;

    /**
     * @var int
     */
    public $dialogueType;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $user;
    protected $_name = [
        'bot' => 'Bot',
        'createTime' => 'CreateTime',
        'createUser' => 'CreateUser',
        'dialogueType' => 'DialogueType',
        'taskId' => 'TaskId',
        'user' => 'User',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bot) {
            $res['Bot'] = $this->bot;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->createUser) {
            $res['CreateUser'] = $this->createUser;
        }

        if (null !== $this->dialogueType) {
            $res['DialogueType'] = $this->dialogueType;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->user) {
            $res['User'] = $this->user;
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
        if (isset($map['Bot'])) {
            $model->bot = $map['Bot'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['CreateUser'])) {
            $model->createUser = $map['CreateUser'];
        }

        if (isset($map['DialogueType'])) {
            $model->dialogueType = $map['DialogueType'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['User'])) {
            $model->user = $map['User'];
        }

        return $model;
    }
}
