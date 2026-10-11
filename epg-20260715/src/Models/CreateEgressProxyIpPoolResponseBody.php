<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EPG\V20260715\Models;

use AlibabaCloud\Dara\Model;

class CreateEgressProxyIpPoolResponseBody extends Model
{
    /**
     * @var string
     */
    public $egressProxyIpPoolId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'egressProxyIpPoolId' => 'EgressProxyIpPoolId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->egressProxyIpPoolId) {
            $res['EgressProxyIpPoolId'] = $this->egressProxyIpPoolId;
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
        if (isset($map['EgressProxyIpPoolId'])) {
            $model->egressProxyIpPoolId = $map['EgressProxyIpPoolId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
