<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListRpcServicesResponseBody\rpcServices;
use AlibabaCloud\Tea\Model;

class ListRpcServicesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var rpcServices
     */
    public $rpcServices;
    protected $_name = [
        'requestId'   => 'RequestId',
        'rpcServices' => 'RpcServices',
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
        if (null !== $this->rpcServices) {
            $res['RpcServices'] = null !== $this->rpcServices ? $this->rpcServices->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRpcServicesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RpcServices'])) {
            $model->rpcServices = rpcServices::fromMap($map['RpcServices']);
        }

        return $model;
    }
}
