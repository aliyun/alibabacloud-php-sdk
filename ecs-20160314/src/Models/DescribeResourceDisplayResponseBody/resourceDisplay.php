<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeResourceDisplayResponseBody;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeResourceDisplayResponseBody\resourceDisplay\instanceCategories;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeResourceDisplayResponseBody\resourceDisplay\instanceChargeTypes;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeResourceDisplayResponseBody\resourceDisplay\productCategories;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeResourceDisplayResponseBody\resourceDisplay\zones;
use AlibabaCloud\Tea\Model;

class resourceDisplay extends Model
{
    /**
     * @var instanceCategories
     */
    public $instanceCategories;

    /**
     * @var instanceChargeTypes
     */
    public $instanceChargeTypes;

    /**
     * @var productCategories
     */
    public $productCategories;

    /**
     * @var zones
     */
    public $zones;
    protected $_name = [
        'instanceCategories'  => 'InstanceCategories',
        'instanceChargeTypes' => 'InstanceChargeTypes',
        'productCategories'   => 'ProductCategories',
        'zones'               => 'Zones',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceCategories) {
            $res['InstanceCategories'] = null !== $this->instanceCategories ? $this->instanceCategories->toMap() : null;
        }
        if (null !== $this->instanceChargeTypes) {
            $res['InstanceChargeTypes'] = null !== $this->instanceChargeTypes ? $this->instanceChargeTypes->toMap() : null;
        }
        if (null !== $this->productCategories) {
            $res['ProductCategories'] = null !== $this->productCategories ? $this->productCategories->toMap() : null;
        }
        if (null !== $this->zones) {
            $res['Zones'] = null !== $this->zones ? $this->zones->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceDisplay
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceCategories'])) {
            $model->instanceCategories = instanceCategories::fromMap($map['InstanceCategories']);
        }
        if (isset($map['InstanceChargeTypes'])) {
            $model->instanceChargeTypes = instanceChargeTypes::fromMap($map['InstanceChargeTypes']);
        }
        if (isset($map['ProductCategories'])) {
            $model->productCategories = productCategories::fromMap($map['ProductCategories']);
        }
        if (isset($map['Zones'])) {
            $model->zones = zones::fromMap($map['Zones']);
        }

        return $model;
    }
}
