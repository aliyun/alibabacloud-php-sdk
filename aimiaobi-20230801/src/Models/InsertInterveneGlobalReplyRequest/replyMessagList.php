<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\InsertInterveneGlobalReplyRequest;

use AlibabaCloud\Tea\Model;

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
        'message'   => 'Message',
        'replyType' => 'ReplyType',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return replyMessagList
     */
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
