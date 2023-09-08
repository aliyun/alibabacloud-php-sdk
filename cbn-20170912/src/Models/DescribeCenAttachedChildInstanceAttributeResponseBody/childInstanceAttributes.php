<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenAttachedChildInstanceAttributeResponseBody;

use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenAttachedChildInstanceAttributeResponseBody\childInstanceAttributes\ipv6CidrBlocks;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenAttachedChildInstanceAttributeResponseBody\childInstanceAttributes\secondaryCidrBlocks;
use AlibabaCloud\Tea\Model;

class childInstanceAttributes extends Model
{
    /**
     * @description The IPv4 CIDR block of the VPC.
     *
     * @example 192.168.0.0/16
     *
     * @var string
     */
    public $cidrBlock;

    /**
     * @description The IPv6 CIDR block of the VPC.
     *
     * @example 2408:XXXX:0:a600::/56
     *
     * @var string
     */
    public $ipv6CidrBlock;

    /**
     * @description The information about the IPv6 CIDR blocks of the VPC.
     *
     * @var ipv6CidrBlocks
     */
    public $ipv6CidrBlocks;

    /**
     * @description The secondary IPv4 CIDR block of the VPC.
     *
     * @var secondaryCidrBlocks
     */
    public $secondaryCidrBlocks;
    protected $_name = [
        'cidrBlock'           => 'CidrBlock',
        'ipv6CidrBlock'       => 'Ipv6CidrBlock',
        'ipv6CidrBlocks'      => 'Ipv6CidrBlocks',
        'secondaryCidrBlocks' => 'SecondaryCidrBlocks',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cidrBlock) {
            $res['CidrBlock'] = $this->cidrBlock;
        }
        if (null !== $this->ipv6CidrBlock) {
            $res['Ipv6CidrBlock'] = $this->ipv6CidrBlock;
        }
        if (null !== $this->ipv6CidrBlocks) {
            $res['Ipv6CidrBlocks'] = null !== $this->ipv6CidrBlocks ? $this->ipv6CidrBlocks->toMap() : null;
        }
        if (null !== $this->secondaryCidrBlocks) {
            $res['SecondaryCidrBlocks'] = null !== $this->secondaryCidrBlocks ? $this->secondaryCidrBlocks->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return childInstanceAttributes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CidrBlock'])) {
            $model->cidrBlock = $map['CidrBlock'];
        }
        if (isset($map['Ipv6CidrBlock'])) {
            $model->ipv6CidrBlock = $map['Ipv6CidrBlock'];
        }
        if (isset($map['Ipv6CidrBlocks'])) {
            $model->ipv6CidrBlocks = ipv6CidrBlocks::fromMap($map['Ipv6CidrBlocks']);
        }
        if (isset($map['SecondaryCidrBlocks'])) {
            $model->secondaryCidrBlocks = secondaryCidrBlocks::fromMap($map['SecondaryCidrBlocks']);
        }

        return $model;
    }
}
