<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImageSupportInstanceTypesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImageSupportInstanceTypesResponseBody\instanceTypes\instanceType;

class instanceTypes extends Model
{
    /**
     * @var instanceType[]
     */
    public $instanceType;
    protected $_name = [
        'instanceType' => 'InstanceType',
    ];

    public function validate()
    {
        if (\is_array($this->instanceType)) {
            Model::validateArray($this->instanceType);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceType) {
            if (\is_array($this->instanceType)) {
                $res['InstanceType'] = [];
                $n1 = 0;
                foreach ($this->instanceType as $item1) {
                    $res['InstanceType'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['InstanceType'])) {
            if (!empty($map['InstanceType'])) {
                $model->instanceType = [];
                $n1 = 0;
                foreach ($map['InstanceType'] as $item1) {
                    $model->instanceType[$n1++] = instanceType::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
