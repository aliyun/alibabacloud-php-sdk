<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class AllocateIpv6InternetBandwidthResponseBody extends Model
{
    /**
     * @description The ID of the Internet bandwidth that you purchased for the IPv6 gateway.
     *
     * @example ipv6bw-uf6hcyzu65v98v3du****
     *
     * @var string
     */
    public $internetBandwidthId;

    /**
     * @description The ID of the IPv6 address.
     *
     * @example ipv6-2zen5j4axcp5l5qyy****
     *
     * @var string
     */
    public $ipv6AddressId;

    /**
     * @description The request ID.
     *
     * @example 6972A26E-99B1-4367-9890-FBDEBB0F5E7D
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'internetBandwidthId' => 'InternetBandwidthId',
        'ipv6AddressId'       => 'Ipv6AddressId',
        'requestId'           => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->internetBandwidthId) {
            $res['InternetBandwidthId'] = $this->internetBandwidthId;
        }
        if (null !== $this->ipv6AddressId) {
            $res['Ipv6AddressId'] = $this->ipv6AddressId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AllocateIpv6InternetBandwidthResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InternetBandwidthId'])) {
            $model->internetBandwidthId = $map['InternetBandwidthId'];
        }
        if (isset($map['Ipv6AddressId'])) {
            $model->ipv6AddressId = $map['Ipv6AddressId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
