<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeResourceDisplayResponseBody\resourceDisplay\productCategories\productCategory\instanceFamilyGroups;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeResourceDisplayResponseBody\resourceDisplay\productCategories\productCategory\instanceFamilyGroups\instanceFamilyGroup\instanceTypeFamilies;
use AlibabaCloud\Tea\Model;

class instanceFamilyGroup extends Model
{
    /**
     * @var string
     */
    public $instanceFamilyGroupName;

    /**
     * @var instanceTypeFamilies
     */
    public $instanceTypeFamilies;
    protected $_name = [
        'instanceFamilyGroupName' => 'InstanceFamilyGroupName',
        'instanceTypeFamilies'    => 'InstanceTypeFamilies',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceFamilyGroupName) {
            $res['InstanceFamilyGroupName'] = $this->instanceFamilyGroupName;
        }
        if (null !== $this->instanceTypeFamilies) {
            $res['InstanceTypeFamilies'] = null !== $this->instanceTypeFamilies ? $this->instanceTypeFamilies->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceFamilyGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceFamilyGroupName'])) {
            $model->instanceFamilyGroupName = $map['InstanceFamilyGroupName'];
        }
        if (isset($map['InstanceTypeFamilies'])) {
            $model->instanceTypeFamilies = instanceTypeFamilies::fromMap($map['InstanceTypeFamilies']);
        }

        return $model;
    }
}
