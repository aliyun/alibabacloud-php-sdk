<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMessageCallbackResponseBody\messageCallback;

class GetMessageCallbackResponseBody extends Model
{
    /**
     * @var messageCallback
     */
    public $messageCallback;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'messageCallback' => 'MessageCallback',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->messageCallback) {
            $this->messageCallback->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->messageCallback) {
            $res['MessageCallback'] = null !== $this->messageCallback ? $this->messageCallback->toArray($noStream) : $this->messageCallback;
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
        if (isset($map['MessageCallback'])) {
            $model->messageCallback = messageCallback::fromMap($map['MessageCallback']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
