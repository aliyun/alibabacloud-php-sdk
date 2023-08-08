<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenAttachedChildInstanceAttributeResponseBody\childInstanceAttributes;

use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenAttachedChildInstanceAttributeResponseBody\childInstanceAttributes\ipv6CidrBlocks\ipv6CidrBlock;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipv6CidrBlock) {
            $res['ipv6CidrBlock'] = [];
            if (null !== $this->ipv6CidrBlock && \is_array($this->ipv6CidrBlock)) {
                $n = 0;
                foreach ($this->ipv6CidrBlock as $item) {
                    $res['ipv6CidrBlock'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipv6CidrBlocks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ipv6CidrBlock'])) {
            if (!empty($map['ipv6CidrBlock'])) {
                $model->ipv6CidrBlock = [];
                $n                    = 0;
                foreach ($map['ipv6CidrBlock'] as $item) {
                    $model->ipv6CidrBlock[$n++] = null !== $item ? ipv6CidrBlock::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
