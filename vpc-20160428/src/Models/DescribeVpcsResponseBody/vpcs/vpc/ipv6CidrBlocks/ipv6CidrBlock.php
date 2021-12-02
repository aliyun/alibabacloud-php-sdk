<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcsResponseBody\vpcs\vpc\ipv6CidrBlocks;

use AlibabaCloud\Tea\Model;

class ipv6CidrBlock extends Model
{
    /**
     * @var string
     */
    public $ipv6CidrBlock;

    /**
     * @var string
     */
    public $ipv6Isp;
    protected $_name = [
        'ipv6CidrBlock' => 'Ipv6CidrBlock',
        'ipv6Isp'       => 'Ipv6Isp',
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
        if (null !== $this->ipv6Isp) {
            $res['Ipv6Isp'] = $this->ipv6Isp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipv6CidrBlock
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ipv6CidrBlock'])) {
            $model->ipv6CidrBlock = $map['Ipv6CidrBlock'];
        }
        if (isset($map['Ipv6Isp'])) {
            $model->ipv6Isp = $map['Ipv6Isp'];
        }

        return $model;
    }
}
