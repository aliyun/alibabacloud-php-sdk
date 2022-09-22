<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeResourceDisplayResponseBody\resourceDisplay\instanceCategories\instanceCategory\instanceTopCategories;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeResourceDisplayResponseBody\resourceDisplay\instanceCategories\instanceCategory\instanceTopCategories\instanceTopCategory\instanceSecondCategories;
use AlibabaCloud\Tea\Model;

class instanceTopCategory extends Model
{
    /**
     * @var instanceSecondCategories
     */
    public $instanceSecondCategories;

    /**
     * @var string
     */
    public $topCategoryLevel;
    protected $_name = [
        'instanceSecondCategories' => 'InstanceSecondCategories',
        'topCategoryLevel'         => 'TopCategoryLevel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceSecondCategories) {
            $res['InstanceSecondCategories'] = null !== $this->instanceSecondCategories ? $this->instanceSecondCategories->toMap() : null;
        }
        if (null !== $this->topCategoryLevel) {
            $res['TopCategoryLevel'] = $this->topCategoryLevel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceTopCategory
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceSecondCategories'])) {
            $model->instanceSecondCategories = instanceSecondCategories::fromMap($map['InstanceSecondCategories']);
        }
        if (isset($map['TopCategoryLevel'])) {
            $model->topCategoryLevel = $map['TopCategoryLevel'];
        }

        return $model;
    }
}
