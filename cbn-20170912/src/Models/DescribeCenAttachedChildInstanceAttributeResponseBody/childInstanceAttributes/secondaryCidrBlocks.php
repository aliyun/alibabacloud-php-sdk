<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenAttachedChildInstanceAttributeResponseBody\childInstanceAttributes;

use AlibabaCloud\Dara\Model;

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
        if (\is_array($this->secondaryCidrBlock)) {
            Model::validateArray($this->secondaryCidrBlock);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->secondaryCidrBlock) {
            if (\is_array($this->secondaryCidrBlock)) {
                $res['secondaryCidrBlock'] = [];
                $n1                        = 0;
                foreach ($this->secondaryCidrBlock as $item1) {
                    $res['secondaryCidrBlock'][$n1++] = $item1;
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
        if (isset($map['secondaryCidrBlock'])) {
            if (!empty($map['secondaryCidrBlock'])) {
                $model->secondaryCidrBlock = [];
                $n1                        = 0;
                foreach ($map['secondaryCidrBlock'] as $item1) {
                    $model->secondaryCidrBlock[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
