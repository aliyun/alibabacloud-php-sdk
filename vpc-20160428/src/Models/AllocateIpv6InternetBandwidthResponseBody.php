<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class AllocateIpv6InternetBandwidthResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $internetBandwidthId;

    /**
     * @var string
     */
    public $ipv6AddressId;
    protected $_name = [
        'requestId'           => 'RequestId',
        'internetBandwidthId' => 'InternetBandwidthId',
        'ipv6AddressId'       => 'Ipv6AddressId',
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
        if (null !== $this->internetBandwidthId) {
            $res['InternetBandwidthId'] = $this->internetBandwidthId;
        }
        if (null !== $this->ipv6AddressId) {
            $res['Ipv6AddressId'] = $this->ipv6AddressId;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['InternetBandwidthId'])) {
            $model->internetBandwidthId = $map['InternetBandwidthId'];
        }
        if (isset($map['Ipv6AddressId'])) {
            $model->ipv6AddressId = $map['Ipv6AddressId'];
        }

        return $model;
    }
}
