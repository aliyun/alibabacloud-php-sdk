<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\SDK\Eiam\V20211201\Models\GetNetworkAccessEndpointResponseBody\networkAccessEndpoint;
use AlibabaCloud\Tea\Model;

class GetNetworkAccessEndpointResponseBody extends Model
{
    /**
     * @var networkAccessEndpoint
     */
    public $networkAccessEndpoint;

    /**
     * @example 0441BD79-92F3-53AA-8657-F8CE4A2B912A
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'networkAccessEndpoint' => 'NetworkAccessEndpoint',
        'requestId'             => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->networkAccessEndpoint) {
            $res['NetworkAccessEndpoint'] = null !== $this->networkAccessEndpoint ? $this->networkAccessEndpoint->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetNetworkAccessEndpointResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NetworkAccessEndpoint'])) {
            $model->networkAccessEndpoint = networkAccessEndpoint::fromMap($map['NetworkAccessEndpoint']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
