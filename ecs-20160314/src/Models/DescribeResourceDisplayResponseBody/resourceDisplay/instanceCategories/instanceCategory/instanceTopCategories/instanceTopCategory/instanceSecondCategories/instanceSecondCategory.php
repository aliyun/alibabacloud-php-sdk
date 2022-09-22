<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeResourceDisplayResponseBody\resourceDisplay\instanceCategories\instanceCategory\instanceTopCategories\instanceTopCategory\instanceSecondCategories;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeResourceDisplayResponseBody\resourceDisplay\instanceCategories\instanceCategory\instanceTopCategories\instanceTopCategory\instanceSecondCategories\instanceSecondCategory\instanceTypeFamilies;
use AlibabaCloud\Tea\Model;

class instanceSecondCategory extends Model
{
    /**
     * @var instanceTypeFamilies
     */
    public $instanceTypeFamilies;

    /**
     * @var string
     */
    public $secondCategoryLevel;
    protected $_name = [
        'instanceTypeFamilies' => 'InstanceTypeFamilies',
        'secondCategoryLevel'  => 'SecondCategoryLevel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceTypeFamilies) {
            $res['InstanceTypeFamilies'] = null !== $this->instanceTypeFamilies ? $this->instanceTypeFamilies->toMap() : null;
        }
        if (null !== $this->secondCategoryLevel) {
            $res['SecondCategoryLevel'] = $this->secondCategoryLevel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceSecondCategory
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceTypeFamilies'])) {
            $model->instanceTypeFamilies = instanceTypeFamilies::fromMap($map['InstanceTypeFamilies']);
        }
        if (isset($map['SecondCategoryLevel'])) {
            $model->secondCategoryLevel = $map['SecondCategoryLevel'];
        }

        return $model;
    }
}
