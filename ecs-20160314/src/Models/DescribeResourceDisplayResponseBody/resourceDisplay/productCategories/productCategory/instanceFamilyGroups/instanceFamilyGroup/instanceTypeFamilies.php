<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeResourceDisplayResponseBody\resourceDisplay\productCategories\productCategory\instanceFamilyGroups\instanceFamilyGroup;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeResourceDisplayResponseBody\resourceDisplay\productCategories\productCategory\instanceFamilyGroups\instanceFamilyGroup\instanceTypeFamilies\instanceTypeFamily;
use AlibabaCloud\Tea\Model;

class instanceTypeFamilies extends Model
{
    /**
     * @var instanceTypeFamily[]
     */
    public $instanceTypeFamily;
    protected $_name = [
        'instanceTypeFamily' => 'InstanceTypeFamily',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceTypeFamily) {
            $res['InstanceTypeFamily'] = [];
            if (null !== $this->instanceTypeFamily && \is_array($this->instanceTypeFamily)) {
                $n = 0;
                foreach ($this->instanceTypeFamily as $item) {
                    $res['InstanceTypeFamily'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceTypeFamilies
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceTypeFamily'])) {
            if (!empty($map['InstanceTypeFamily'])) {
                $model->instanceTypeFamily = [];
                $n                         = 0;
                foreach ($map['InstanceTypeFamily'] as $item) {
                    $model->instanceTypeFamily[$n++] = null !== $item ? instanceTypeFamily::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
