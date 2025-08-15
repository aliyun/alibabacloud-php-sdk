<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetInterveneGlobalReplyResponseBody\data;

use AlibabaCloud\Dara\Model;

class replyMessagList extends Model
{
    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $replyType;
    protected $_name = [
        'message' => 'Message',
        'replyType' => 'ReplyType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->replyType) {
            $res['ReplyType'] = $this->replyType;
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
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['ReplyType'])) {
            $model->replyType = $map['ReplyType'];
        }

        return $model;
    }
}
