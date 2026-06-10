<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models\TongyiChatDebugInfoResponseBody\answerInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\TongyiChatDebugInfoResponseBody\answerInfo\messageBody\directMessageBody;

class messageBody extends Model
{
    /**
     * @var mixed
     */
    public $commands;

    /**
     * @var directMessageBody
     */
    public $directMessageBody;
    protected $_name = [
        'commands' => 'Commands',
        'directMessageBody' => 'DirectMessageBody',
    ];

    public function validate()
    {
        if (null !== $this->directMessageBody) {
            $this->directMessageBody->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->commands) {
            $res['Commands'] = $this->commands;
        }

        if (null !== $this->directMessageBody) {
            $res['DirectMessageBody'] = null !== $this->directMessageBody ? $this->directMessageBody->toArray($noStream) : $this->directMessageBody;
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
        if (isset($map['Commands'])) {
            $model->commands = $map['Commands'];
        }

        if (isset($map['DirectMessageBody'])) {
            $model->directMessageBody = directMessageBody::fromMap($map['DirectMessageBody']);
        }

        return $model;
    }
}
