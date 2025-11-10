<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models;

use AlibabaCloud\Dara\Model;

class VerifySendMessageRequest extends Model
{
    /**
     * @var string
     */
    public $liteTopicName;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $messageKey;

    /**
     * @var string
     */
    public $messageTag;
    protected $_name = [
        'liteTopicName' => 'liteTopicName',
        'message' => 'message',
        'messageKey' => 'messageKey',
        'messageTag' => 'messageTag',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->liteTopicName) {
            $res['liteTopicName'] = $this->liteTopicName;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->messageKey) {
            $res['messageKey'] = $this->messageKey;
        }

        if (null !== $this->messageTag) {
            $res['messageTag'] = $this->messageTag;
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
        if (isset($map['liteTopicName'])) {
            $model->liteTopicName = $map['liteTopicName'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['messageKey'])) {
            $model->messageKey = $map['messageKey'];
        }

        if (isset($map['messageTag'])) {
            $model->messageTag = $map['messageTag'];
        }

        return $model;
    }
}
