<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models;

use AlibabaCloud\Dara\Model;

class CreateReceiverResponseBody extends Model
{
    /**
     * @var string
     */
    public $receiverId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'receiverId' => 'ReceiverId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
