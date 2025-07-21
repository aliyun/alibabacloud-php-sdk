<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models;

use AlibabaCloud\Tea\Model;

class CreateReceiverResponseBody extends Model
{
    /**
     * @description Receiver list ID
     *
     * @example 7312e09b8fffc5c7b2e2fbf5b6dc2073
     *
     * @var string
     */
    public $receiverId;

    /**
     * @description Request ID
     *
     * @example 10A1AD70-E48E-476D-98D9-39BD92193837
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'receiverId' => 'ReceiverId',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->receiverId) {
            $res['ReceiverId'] = $this->receiverId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateReceiverResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReceiverId'])) {
            $model->receiverId = $map['ReceiverId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
