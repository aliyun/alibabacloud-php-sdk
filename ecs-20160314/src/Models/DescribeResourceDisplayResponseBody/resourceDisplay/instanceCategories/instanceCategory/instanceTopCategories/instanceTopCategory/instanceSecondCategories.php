<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeResourceDisplayResponseBody\resourceDisplay\instanceCategories\instanceCategory\instanceTopCategories\instanceTopCategory;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeResourceDisplayResponseBody\resourceDisplay\instanceCategories\instanceCategory\instanceTopCategories\instanceTopCategory\instanceSecondCategories\instanceSecondCategory;
use AlibabaCloud\Tea\Model;

class instanceSecondCategories extends Model
{
    /**
     * @var instanceSecondCategory[]
     */
    public $instanceSecondCategory;
    protected $_name = [
        'instanceSecondCategory' => 'InstanceSecondCategory',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceSecondCategory) {
            $res['InstanceSecondCategory'] = [];
            if (null !== $this->instanceSecondCategory && \is_array($this->instanceSecondCategory)) {
                $n = 0;
                foreach ($this->instanceSecondCategory as $item) {
                    $res['InstanceSecondCategory'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceSecondCategories
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceSecondCategory'])) {
            if (!empty($map['InstanceSecondCategory'])) {
                $model->instanceSecondCategory = [];
                $n                             = 0;
                foreach ($map['InstanceSecondCategory'] as $item) {
                    $model->instanceSecondCategory[$n++] = null !== $item ? instanceSecondCategory::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
