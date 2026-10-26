<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models;

use AlibabaCloud\Dara\Model;

class SteerAgentConversationRequest extends Model
{
    /**
     * @var string
     */
    public $commandId;

    /**
     * @var string
     */
    public $message;
    protected $_name = [
        'commandId' => 'commandId',
        'message' => 'message',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->commandId) {
            $res['commandId'] = $this->commandId;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
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
        if (isset($map['commandId'])) {
            $model->commandId = $map['commandId'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        return $model;
    }
}
