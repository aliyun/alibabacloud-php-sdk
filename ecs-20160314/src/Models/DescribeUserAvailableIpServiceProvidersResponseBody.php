<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeUserAvailableIpServiceProvidersResponseBody\ipServiceProviders;
use AlibabaCloud\Tea\Model;

class DescribeUserAvailableIpServiceProvidersResponseBody extends Model
{
    /**
     * @var ipServiceProviders
     */
    public $ipServiceProviders;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'ipServiceProviders' => 'IpServiceProviders',
        'requestId'          => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipServiceProviders) {
            $res['IpServiceProviders'] = null !== $this->ipServiceProviders ? $this->ipServiceProviders->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUserAvailableIpServiceProvidersResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IpServiceProviders'])) {
            $model->ipServiceProviders = ipServiceProviders::fromMap($map['IpServiceProviders']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
