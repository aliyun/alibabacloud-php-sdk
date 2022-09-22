<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeResourceDisplayResponseBody\resourceDisplay;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeResourceDisplayResponseBody\resourceDisplay\instanceCategories\instanceCategory;
use AlibabaCloud\Tea\Model;

class instanceCategories extends Model
{
    /**
     * @var instanceCategory[]
     */
    public $instanceCategory;
    protected $_name = [
        'instanceCategory' => 'InstanceCategory',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceCategory) {
            $res['InstanceCategory'] = [];
            if (null !== $this->instanceCategory && \is_array($this->instanceCategory)) {
                $n = 0;
                foreach ($this->instanceCategory as $item) {
                    $res['InstanceCategory'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceCategories
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceCategory'])) {
            if (!empty($map['InstanceCategory'])) {
                $model->instanceCategory = [];
                $n                       = 0;
                foreach ($map['InstanceCategory'] as $item) {
                    $model->instanceCategory[$n++] = null !== $item ? instanceCategory::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
