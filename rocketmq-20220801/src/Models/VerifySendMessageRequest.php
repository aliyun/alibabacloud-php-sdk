<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models;

use AlibabaCloud\Tea\Model;

class VerifySendMessageRequest extends Model
{
    /**
     * @description The message body.
     *
     * @example successful
     *
     * @var string
     */
    public $message;

    /**
     * @description The message key.
     *
     * @example xx
     *
     * @var string
     */
    public $messageKey;

    /**
     * @description The message tag.
     *
     * @example xx
     *
     * @var string
     */
    public $messageTag;
    protected $_name = [
        'message'    => 'message',
        'messageKey' => 'messageKey',
        'messageTag' => 'messageTag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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

    /**
     * @param array $map
     *
     * @return VerifySendMessageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
