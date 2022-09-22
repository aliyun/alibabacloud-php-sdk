<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeResourceDisplayResponseBody\resourceDisplay\productCategories;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeResourceDisplayResponseBody\resourceDisplay\productCategories\productCategory\instanceFamilyGroups;
use AlibabaCloud\Tea\Model;

class productCategory extends Model
{
    /**
     * @var instanceFamilyGroups
     */
    public $instanceFamilyGroups;

    /**
     * @var string
     */
    public $productName;
    protected $_name = [
        'instanceFamilyGroups' => 'InstanceFamilyGroups',
        'productName'          => 'ProductName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceFamilyGroups) {
            $res['InstanceFamilyGroups'] = null !== $this->instanceFamilyGroups ? $this->instanceFamilyGroups->toMap() : null;
        }
        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return productCategory
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceFamilyGroups'])) {
            $model->instanceFamilyGroups = instanceFamilyGroups::fromMap($map['InstanceFamilyGroups']);
        }
        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }

        return $model;
    }
}
