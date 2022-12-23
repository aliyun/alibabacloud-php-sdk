<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetMessageCallbackResponseBody\messageCallback;
use AlibabaCloud\Tea\Model;

class GetMessageCallbackResponseBody extends Model
{
    /**
     * @description The configuration of the event notification.
     *
     * @var messageCallback
     */
    public $messageCallback;

    /**
     * @description The ID of the request.
     *
     * @example 272A222A-F7F7-4A3E-****-F531574F1234
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'messageCallback' => 'MessageCallback',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->messageCallback) {
            $res['MessageCallback'] = null !== $this->messageCallback ? $this->messageCallback->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMessageCallbackResponseBody
     */
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
