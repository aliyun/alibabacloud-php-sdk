<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models;

use AlibabaCloud\Tea\Model;

class AddResolverEndpointResponseBody extends Model
{
    /**
     * @description The outbound endpoint ID.
     *
     * @example hra0**
     *
     * @var string
     */
    public $endpointId;

    /**
     * @description The request ID.
     *
     * @example 32436208-E1AF-4DAB-B3B8-24F5F25B0950
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'endpointId' => 'EndpointId',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endpointId) {
            $res['EndpointId'] = $this->endpointId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddResolverEndpointResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndpointId'])) {
            $model->endpointId = $map['EndpointId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
