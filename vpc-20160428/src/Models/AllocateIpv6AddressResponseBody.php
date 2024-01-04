<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class AllocateIpv6AddressResponseBody extends Model
{
    /**
     * @example 2408:XXXX:153:3921:851c:c435:7b12:1c5f
     *
     * @var string
     */
    public $ipv6Address;

    /**
     * @example ipv6-2zen5j4axcp5l5qyy****
     *
     * @var string
     */
    public $ipv6AddressId;

    /**
     * @example 54B48E3D-DF70-471B-AA93-08E683A1B45
     *
     * @var string
     */
    public $requestId;

    /**
     * @example rg-acfmxazdjdhd****
     *
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'ipv6Address'     => 'Ipv6Address',
        'ipv6AddressId'   => 'Ipv6AddressId',
        'requestId'       => 'RequestId',
        'resourceGroupId' => 'ResourceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipv6Address) {
            $res['Ipv6Address'] = $this->ipv6Address;
        }
        if (null !== $this->ipv6AddressId) {
            $res['Ipv6AddressId'] = $this->ipv6AddressId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AllocateIpv6AddressResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ipv6Address'])) {
            $model->ipv6Address = $map['Ipv6Address'];
        }
        if (isset($map['Ipv6AddressId'])) {
            $model->ipv6AddressId = $map['Ipv6AddressId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
