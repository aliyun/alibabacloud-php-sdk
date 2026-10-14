<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNetworkAttributeResponseBody\ipv6CidrBlocks;

use AlibabaCloud\Dara\Model;

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

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'ipv6CidrBlock' => 'Ipv6CidrBlock',
        'ipv6Isp' => 'Ipv6Isp',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ipv6CidrBlock) {
            $res['Ipv6CidrBlock'] = $this->ipv6CidrBlock;
        }

        if (null !== $this->ipv6Isp) {
            $res['Ipv6Isp'] = $this->ipv6Isp;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Ipv6CidrBlock'])) {
            $model->ipv6CidrBlock = $map['Ipv6CidrBlock'];
        }

        if (isset($map['Ipv6Isp'])) {
            $model->ipv6Isp = $map['Ipv6Isp'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
