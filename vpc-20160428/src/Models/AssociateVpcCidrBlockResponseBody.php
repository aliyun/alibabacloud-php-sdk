<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class AssociateVpcCidrBlockResponseBody extends Model
{
    /**
     * @description The IPv4 CIDR block to be added.
     *
     * @example 192.168.0.0/16
     *
     * @var string
     */
    public $cidrBlock;

    /**
     * @description The version of the IP address. Valid values:
     *
     *   **IPV4**: the IPv4 address.
     *   **IPV6**: the IPv6 address.
     *
     * @example IPV4
     *
     * @var string
     */
    public $ipVersion;

    /**
     * @description The request ID.
     *
     * @example C1221A1F-2ACD-4592-8F27-474E02883159
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'cidrBlock' => 'CidrBlock',
        'ipVersion' => 'IpVersion',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->cidrBlock) {
            $res['CidrBlock'] = $this->cidrBlock;
        }
        if (null !== $this->ipVersion) {
            $res['IpVersion'] = $this->ipVersion;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AssociateVpcCidrBlockResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CidrBlock'])) {
            $model->cidrBlock = $map['CidrBlock'];
        }
        if (isset($map['IpVersion'])) {
            $model->ipVersion = $map['IpVersion'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
