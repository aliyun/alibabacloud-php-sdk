<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\CreateAgentConversationRequest\initialMessage;

class CreateAgentConversationRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var initialMessage
     */
    public $initialMessage;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'clientToken' => 'clientToken',
        'initialMessage' => 'initialMessage',
        'title' => 'title',
    ];

    public function validate()
    {
        if (null !== $this->initialMessage) {
            $this->initialMessage->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }

        if (null !== $this->initialMessage) {
            $res['initialMessage'] = null !== $this->initialMessage ? $this->initialMessage->toArray($noStream) : $this->initialMessage;
        }

        if (null !== $this->title) {
            $res['title'] = $this->title;
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
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }

        if (isset($map['initialMessage'])) {
            $model->initialMessage = initialMessage::fromMap($map['initialMessage']);
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        return $model;
    }
}
