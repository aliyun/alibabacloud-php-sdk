<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenAttachedChildInstanceAttributeResponseBody\childInstanceAttributes;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenAttachedChildInstanceAttributeResponseBody\childInstanceAttributes\ipv6CidrBlocks\ipv6CidrBlock;

class ipv6CidrBlocks extends Model
{
    /**
     * @var ipv6CidrBlock[]
     */
    public $ipv6CidrBlock;
    protected $_name = [
        'ipv6CidrBlock' => 'ipv6CidrBlock',
    ];

    public function validate()
    {
        if (\is_array($this->ipv6CidrBlock)) {
            Model::validateArray($this->ipv6CidrBlock);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ipv6CidrBlock) {
            if (\is_array($this->ipv6CidrBlock)) {
                $res['ipv6CidrBlock'] = [];
                $n1                   = 0;
                foreach ($this->ipv6CidrBlock as $item1) {
                    $res['ipv6CidrBlock'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['ipv6CidrBlock'])) {
            if (!empty($map['ipv6CidrBlock'])) {
                $model->ipv6CidrBlock = [];
                $n1                   = 0;
                foreach ($map['ipv6CidrBlock'] as $item1) {
                    $model->ipv6CidrBlock[$n1++] = ipv6CidrBlock::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
