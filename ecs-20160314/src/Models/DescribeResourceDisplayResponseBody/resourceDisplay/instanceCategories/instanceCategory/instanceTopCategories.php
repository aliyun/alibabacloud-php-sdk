<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeResourceDisplayResponseBody\resourceDisplay\instanceCategories\instanceCategory;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeResourceDisplayResponseBody\resourceDisplay\instanceCategories\instanceCategory\instanceTopCategories\instanceTopCategory;
use AlibabaCloud\Tea\Model;

class instanceTopCategories extends Model
{
    /**
     * @var instanceTopCategory[]
     */
    public $instanceTopCategory;
    protected $_name = [
        'instanceTopCategory' => 'InstanceTopCategory',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceTopCategory) {
            $res['InstanceTopCategory'] = [];
            if (null !== $this->instanceTopCategory && \is_array($this->instanceTopCategory)) {
                $n = 0;
                foreach ($this->instanceTopCategory as $item) {
                    $res['InstanceTopCategory'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceTopCategories
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceTopCategory'])) {
            if (!empty($map['InstanceTopCategory'])) {
                $model->instanceTopCategory = [];
                $n                          = 0;
                foreach ($map['InstanceTopCategory'] as $item) {
                    $model->instanceTopCategory[$n++] = null !== $item ? instanceTopCategory::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
