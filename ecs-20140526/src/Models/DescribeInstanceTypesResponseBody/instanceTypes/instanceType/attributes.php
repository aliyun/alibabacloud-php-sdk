<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceTypesResponseBody\instanceTypes\instanceType;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceTypesResponseBody\instanceTypes\instanceType\attributes\attribute;

class attributes extends Model
{
    /**
     * @var attribute[]
     */
    public $attribute;
    protected $_name = [
        'attribute' => 'Attribute',
    ];

    public function validate()
    {
        if (\is_array($this->attribute)) {
            Model::validateArray($this->attribute);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attribute) {
            if (\is_array($this->attribute)) {
                $res['Attribute'] = [];
                $n1 = 0;
                foreach ($this->attribute as $item1) {
                    $res['Attribute'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Attribute'])) {
            if (!empty($map['Attribute'])) {
                $model->attribute = [];
                $n1 = 0;
                foreach ($map['Attribute'] as $item1) {
                    $model->attribute[$n1++] = attribute::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
