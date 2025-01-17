<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenAttachedChildInstanceAttributeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenAttachedChildInstanceAttributeResponseBody\childInstanceAttributes\ipv6CidrBlocks;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenAttachedChildInstanceAttributeResponseBody\childInstanceAttributes\secondaryCidrBlocks;

class childInstanceAttributes extends Model
{
    /**
     * @var string
     */
    public $cidrBlock;
    /**
     * @var string
     */
    public $ipv6CidrBlock;
    /**
     * @var ipv6CidrBlocks
     */
    public $ipv6CidrBlocks;
    /**
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
        if (null !== $this->ipv6CidrBlocks) {
            $this->ipv6CidrBlocks->validate();
        }
        if (null !== $this->secondaryCidrBlocks) {
            $this->secondaryCidrBlocks->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cidrBlock) {
            $res['CidrBlock'] = $this->cidrBlock;
        }

        if (null !== $this->ipv6CidrBlock) {
            $res['Ipv6CidrBlock'] = $this->ipv6CidrBlock;
        }

        if (null !== $this->ipv6CidrBlocks) {
            $res['Ipv6CidrBlocks'] = null !== $this->ipv6CidrBlocks ? $this->ipv6CidrBlocks->toArray($noStream) : $this->ipv6CidrBlocks;
        }

        if (null !== $this->secondaryCidrBlocks) {
            $res['SecondaryCidrBlocks'] = null !== $this->secondaryCidrBlocks ? $this->secondaryCidrBlocks->toArray($noStream) : $this->secondaryCidrBlocks;
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
