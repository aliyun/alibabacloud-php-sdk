<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenAttachedChildInstanceAttributeResponseBody\childInstanceAttributes;

use AlibabaCloud\Tea\Model;

class secondaryCidrBlocks extends Model
{
    /**
     * @var string[]
     */
    public $secondaryCidrBlock;
    protected $_name = [
        'secondaryCidrBlock' => 'secondaryCidrBlock',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->secondaryCidrBlock) {
            $res['secondaryCidrBlock'] = $this->secondaryCidrBlock;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return secondaryCidrBlocks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['secondaryCidrBlock'])) {
            if (!empty($map['secondaryCidrBlock'])) {
                $model->secondaryCidrBlock = $map['secondaryCidrBlock'];
            }
        }

        return $model;
    }
}
