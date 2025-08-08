<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMgsApiResponseBody\resultContent\value;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMgsApiResponseBody\resultContent\value\apiInvoker\httpInvoker;

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
        'rpcInvoker' => 'RpcInvoker',
    ];

    public function validate()
    {
        if (null !== $this->httpInvoker) {
            $this->httpInvoker->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->httpInvoker) {
            $res['HttpInvoker'] = null !== $this->httpInvoker ? $this->httpInvoker->toArray($noStream) : $this->httpInvoker;
        }

        if (null !== $this->rpcInvoker) {
            $res['RpcInvoker'] = $this->rpcInvoker;
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
        if (isset($map['HttpInvoker'])) {
            $model->httpInvoker = httpInvoker::fromMap($map['HttpInvoker']);
        }

        if (isset($map['RpcInvoker'])) {
            $model->rpcInvoker = $map['RpcInvoker'];
        }

        return $model;
    }
}
