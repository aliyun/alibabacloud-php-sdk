<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;

class AllocateIpv6InternetBandwidthResponseBody extends Model
{
    /**
     * @var string
     */
    public $internetBandwidthId;
    /**
     * @var string
     */
    public $ipv6AddressId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
