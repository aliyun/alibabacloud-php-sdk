<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VpcPeer\V20220101\Models\ListVpcPeerConnectionsResponseBody\vpcPeerConnects;

use AlibabaCloud\Tea\Model;

class acceptingVpc extends Model
{
    /**
     * @description The CIDR block of the accepter VPC.
     *
     * @var string[]
     */
    public $ipv4Cidrs;

    /**
     * @description The IPv6 CIDR block of the accepter VPC.
     *
     * @var string[]
     */
    public $ipv6Cidrs;

    /**
     * @description The ID of the accepter VPC.
     *
     * @example vpc-bp1vzjkp2q1xgnind****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'ipv4Cidrs' => 'Ipv4Cidrs',
        'ipv6Cidrs' => 'Ipv6Cidrs',
        'vpcId'     => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipv4Cidrs) {
            $res['Ipv4Cidrs'] = $this->ipv4Cidrs;
        }
        if (null !== $this->ipv6Cidrs) {
            $res['Ipv6Cidrs'] = $this->ipv6Cidrs;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return acceptingVpc
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ipv4Cidrs'])) {
            if (!empty($map['Ipv4Cidrs'])) {
                $model->ipv4Cidrs = $map['Ipv4Cidrs'];
            }
        }
        if (isset($map['Ipv6Cidrs'])) {
            if (!empty($map['Ipv6Cidrs'])) {
                $model->ipv6Cidrs = $map['Ipv6Cidrs'];
            }
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
