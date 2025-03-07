<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class SendMessageChatTextRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 39f8e0bc005e4f309379701645f4****
     *
     * @var string
     */
    public $AIAgentId;

    /**
     * @example online
     *
     * @var string
     */
    public $mode;

    /**
     * @example true
     *
     * @var bool
     */
    public $needArchiving;

    /**
     * @description This parameter is required.
     *
     * @example 60000042053
     *
     * @var string
     */
    public $receiverId;

    /**
     * @description This parameter is required.
     *
     * @example f27f9b9be28642a88e18****
     *
     * @var string
     */
    public $sessionId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $text;

    /**
     * @description This parameter is required.
     *
     * @example announcement
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'AIAgentId'     => 'AIAgentId',
        'mode'          => 'Mode',
        'needArchiving' => 'NeedArchiving',
        'receiverId'    => 'ReceiverId',
        'sessionId'     => 'SessionId',
        'text'          => 'Text',
        'type'          => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return SendMessageChatTextRequest
     */
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
