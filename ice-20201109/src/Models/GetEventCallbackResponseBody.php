<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class GetEventCallbackResponseBody extends Model
{
    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $callbackQueueName;
    protected $_name = [
        'requestId'         => 'RequestId',
        'callbackQueueName' => 'CallbackQueueName',
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
        if (null !== $this->callbackQueueName) {
            $res['CallbackQueueName'] = $this->callbackQueueName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetEventCallbackResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['CallbackQueueName'])) {
            $model->callbackQueueName = $map['CallbackQueueName'];
        }

        return $model;
    }
}
