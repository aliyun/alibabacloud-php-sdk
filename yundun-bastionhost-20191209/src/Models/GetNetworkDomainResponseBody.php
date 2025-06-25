<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetNetworkDomainResponseBody\networkDomain;

class GetNetworkDomainResponseBody extends Model
{
    /**
     * @var networkDomain
     */
    public $networkDomain;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'networkDomain' => 'NetworkDomain',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->networkDomain) {
            $this->networkDomain->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->networkDomain) {
            $res['NetworkDomain'] = null !== $this->networkDomain ? $this->networkDomain->toArray($noStream) : $this->networkDomain;
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
        if (isset($map['NetworkDomain'])) {
            $model->networkDomain = networkDomain::fromMap($map['NetworkDomain']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
