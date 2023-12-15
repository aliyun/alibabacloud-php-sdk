<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Tea\Model;

class CreateTransitRouterCidrResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 0876E54E-3E36-5C31-89F0-9EE8A9266F9A
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the CIDR block.
     *
     * @example cidr-0zv0q9crqpntzz****
     *
     * @var string
     */
    public $transitRouterCidrId;
    protected $_name = [
        'requestId'           => 'RequestId',
        'transitRouterCidrId' => 'TransitRouterCidrId',
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
        if (null !== $this->transitRouterCidrId) {
            $res['TransitRouterCidrId'] = $this->transitRouterCidrId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTransitRouterCidrResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TransitRouterCidrId'])) {
            $model->transitRouterCidrId = $map['TransitRouterCidrId'];
        }

        return $model;
    }
}
