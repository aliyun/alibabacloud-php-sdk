<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Tea\Model;

class CreateTransitRouterMulticastDomainResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 94E19C6F-206F-5223-9A63-64B85851BC04
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the multicast domain.
     *
     * @example tr-mcast-domain-40cwj0rgzgdtam****
     *
     * @var string
     */
    public $transitRouterMulticastDomainId;
    protected $_name = [
        'requestId'                      => 'RequestId',
        'transitRouterMulticastDomainId' => 'TransitRouterMulticastDomainId',
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
        if (null !== $this->transitRouterMulticastDomainId) {
            $res['TransitRouterMulticastDomainId'] = $this->transitRouterMulticastDomainId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTransitRouterMulticastDomainResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TransitRouterMulticastDomainId'])) {
            $model->transitRouterMulticastDomainId = $map['TransitRouterMulticastDomainId'];
        }

        return $model;
    }
}
