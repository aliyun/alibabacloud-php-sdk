<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class SendMessageChatTextRequest extends Model
{
    /**
     * @var string
     */
    public $AIAgentId;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var bool
     */
    public $needArchiving;

    /**
     * @var string
     */
    public $receiverId;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $text;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'AIAgentId' => 'AIAgentId',
        'mode' => 'Mode',
        'needArchiving' => 'NeedArchiving',
        'receiverId' => 'ReceiverId',
        'sessionId' => 'SessionId',
        'text' => 'Text',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->AIAgentId) {
            $res['AIAgentId'] = $this->AIAgentId;
        }

        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }

        if (null !== $this->needArchiving) {
            $res['NeedArchiving'] = $this->needArchiving;
        }

        if (null !== $this->receiverId) {
            $res['ReceiverId'] = $this->receiverId;
        }

        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['AIAgentId'])) {
            $model->AIAgentId = $map['AIAgentId'];
        }

        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        if (isset($map['NeedArchiving'])) {
            $model->needArchiving = $map['NeedArchiving'];
        }

        if (isset($map['ReceiverId'])) {
            $model->receiverId = $map['ReceiverId'];
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
