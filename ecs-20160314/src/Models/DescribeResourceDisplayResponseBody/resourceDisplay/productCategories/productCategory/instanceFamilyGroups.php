<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeResourceDisplayResponseBody\resourceDisplay\productCategories\productCategory;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeResourceDisplayResponseBody\resourceDisplay\productCategories\productCategory\instanceFamilyGroups\instanceFamilyGroup;
use AlibabaCloud\Tea\Model;

class instanceFamilyGroups extends Model
{
    /**
     * @var instanceFamilyGroup[]
     */
    public $instanceFamilyGroup;
    protected $_name = [
        'instanceFamilyGroup' => 'InstanceFamilyGroup',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceFamilyGroup) {
            $res['InstanceFamilyGroup'] = [];
            if (null !== $this->instanceFamilyGroup && \is_array($this->instanceFamilyGroup)) {
                $n = 0;
                foreach ($this->instanceFamilyGroup as $item) {
                    $res['InstanceFamilyGroup'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceFamilyGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceFamilyGroup'])) {
            if (!empty($map['InstanceFamilyGroup'])) {
                $model->instanceFamilyGroup = [];
                $n                          = 0;
                foreach ($map['InstanceFamilyGroup'] as $item) {
                    $model->instanceFamilyGroup[$n++] = null !== $item ? instanceFamilyGroup::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
