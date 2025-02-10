<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcsResponseBody\vpcs\vpc;

use AlibabaCloud\Dara\Model;

class secondaryCidrBlocks extends Model
{
    /**
     * @var string[]
     */
    public $secondaryCidrBlock;
    protected $_name = [
        'secondaryCidrBlock' => 'SecondaryCidrBlock',
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
                $res['SecondaryCidrBlock'] = [];
                $n1                        = 0;
                foreach ($this->secondaryCidrBlock as $item1) {
                    $res['SecondaryCidrBlock'][$n1++] = $item1;
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
        if (isset($map['SecondaryCidrBlock'])) {
            if (!empty($map['SecondaryCidrBlock'])) {
                $model->secondaryCidrBlock = [];
                $n1                        = 0;
                foreach ($map['SecondaryCidrBlock'] as $item1) {
                    $model->secondaryCidrBlock[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
