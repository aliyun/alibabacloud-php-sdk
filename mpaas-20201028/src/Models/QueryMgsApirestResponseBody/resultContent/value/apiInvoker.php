<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryMgsApirestResponseBody\resultContent\value;

use AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryMgsApirestResponseBody\resultContent\value\apiInvoker\httpInvoker;
use AlibabaCloud\Tea\Model;

class apiInvoker extends Model
{
    /**
     * @var httpInvoker
     */
    public $httpInvoker;

    /**
     * @var string
     */
    public $rpcInvoker;
    protected $_name = [
        'httpInvoker' => 'HttpInvoker',
        'rpcInvoker'  => 'RpcInvoker',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->httpInvoker) {
            $res['HttpInvoker'] = null !== $this->httpInvoker ? $this->httpInvoker->toMap() : null;
        }
        if (null !== $this->rpcInvoker) {
            $res['RpcInvoker'] = $this->rpcInvoker;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apiInvoker
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HttpInvoker'])) {
            $model->httpInvoker = httpInvoker::fromMap($map['HttpInvoker']);
        }
        if (isset($map['RpcInvoker'])) {
            $model->rpcInvoker = $map['RpcInvoker'];
        }

        return $model;
    }
}
