<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CancelAgentSessionResponseBody\jsonRpcResponse;

class CancelAgentSessionResponseBody extends Model
{
    /**
     * @var jsonRpcResponse
     */
    public $jsonRpcResponse;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'jsonRpcResponse' => 'JsonRpcResponse',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->jsonRpcResponse) {
            $this->jsonRpcResponse->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->jsonRpcResponse) {
            $res['JsonRpcResponse'] = null !== $this->jsonRpcResponse ? $this->jsonRpcResponse->toArray($noStream) : $this->jsonRpcResponse;
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
        if (isset($map['JsonRpcResponse'])) {
            $model->jsonRpcResponse = jsonRpcResponse::fromMap($map['JsonRpcResponse']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
