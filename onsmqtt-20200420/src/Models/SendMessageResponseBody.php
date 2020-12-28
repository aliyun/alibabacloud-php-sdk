<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models;

use AlibabaCloud\Tea\Model;

class SendMessageResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $msgId;
    protected $_name = [
        'requestId' => 'RequestId',
        'msgId'     => 'MsgId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->msgId) {
            $res['MsgId'] = $this->msgId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SendMessageResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['MsgId'])) {
            $model->msgId = $map['MsgId'];
        }

        return $model;
    }
}
