<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class AllocateVpcIpv6CidrResponseBody extends Model
{
    /**
     * @example 2408:XXXX:0:a600::/56
     *
     * @var string
     */
    public $ipv6CidrBlock;

    /**
     * @example D20C13EA-2584-53BC-8393-69DE6D98EFF1
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'ipv6CidrBlock' => 'Ipv6CidrBlock',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipv6CidrBlock) {
            $res['Ipv6CidrBlock'] = $this->ipv6CidrBlock;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AllocateVpcIpv6CidrResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ipv6CidrBlock'])) {
            $model->ipv6CidrBlock = $map['Ipv6CidrBlock'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
