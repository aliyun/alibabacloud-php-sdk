<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AlikafkaKopilot\V20260414\Models\KopilotListConversationChatMessagesResponseBody\data;

use AlibabaCloud\Dara\Model;

class messages extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $feedback;

    /**
     * @var string
     */
    public $role;

    /**
     * @var string
     */
    public $turnId;
    protected $_name = [
        'content' => 'Content',
        'createTime' => 'CreateTime',
        'feedback' => 'Feedback',
        'role' => 'Role',
        'turnId' => 'TurnId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->feedback) {
            $res['Feedback'] = $this->feedback;
        }

        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }

        if (null !== $this->turnId) {
            $res['TurnId'] = $this->turnId;
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
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Feedback'])) {
            $model->feedback = $map['Feedback'];
        }

        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }

        if (isset($map['TurnId'])) {
            $model->turnId = $map['TurnId'];
        }

        return $model;
    }
}
