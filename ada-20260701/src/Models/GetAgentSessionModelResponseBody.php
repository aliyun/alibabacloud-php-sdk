<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ada\V20260701\Models;

use AlibabaCloud\Dara\Model;

class GetAgentSessionModelResponseBody extends Model
{
    /**
     * @var mixed
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
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->jsonRpcResponse) {
            $res['JsonRpcResponse'] = $this->jsonRpcResponse;
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
            $model->jsonRpcResponse = $map['JsonRpcResponse'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
