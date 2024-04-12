<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetNetworkDomainResponseBody\networkDomain;
use AlibabaCloud\Tea\Model;

class GetNetworkDomainResponseBody extends Model
{
    /**
     * @var networkDomain
     */
    public $networkDomain;

    /**
     * @example 05F59944-2E24-595C-B21A-8C9955E60FAF
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'networkDomain' => 'NetworkDomain',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->networkDomain) {
            $res['NetworkDomain'] = null !== $this->networkDomain ? $this->networkDomain->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetNetworkDomainResponseBody
     */
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
