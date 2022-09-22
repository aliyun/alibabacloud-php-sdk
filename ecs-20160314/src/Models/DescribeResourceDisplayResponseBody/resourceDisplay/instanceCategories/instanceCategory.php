<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeResourceDisplayResponseBody\resourceDisplay\instanceCategories;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeResourceDisplayResponseBody\resourceDisplay\instanceCategories\instanceCategory\instanceTopCategories;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeResourceDisplayResponseBody\resourceDisplay\instanceCategories\instanceCategory\zoneIds;
use AlibabaCloud\Tea\Model;

class instanceCategory extends Model
{
    /**
     * @var string
     */
    public $categoryType;

    /**
     * @var instanceTopCategories
     */
    public $instanceTopCategories;

    /**
     * @var zoneIds
     */
    public $zoneIds;
    protected $_name = [
        'categoryType'          => 'CategoryType',
        'instanceTopCategories' => 'InstanceTopCategories',
        'zoneIds'               => 'ZoneIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->categoryType) {
            $res['CategoryType'] = $this->categoryType;
        }
        if (null !== $this->instanceTopCategories) {
            $res['InstanceTopCategories'] = null !== $this->instanceTopCategories ? $this->instanceTopCategories->toMap() : null;
        }
        if (null !== $this->zoneIds) {
            $res['ZoneIds'] = null !== $this->zoneIds ? $this->zoneIds->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceCategory
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CategoryType'])) {
            $model->categoryType = $map['CategoryType'];
        }
        if (isset($map['InstanceTopCategories'])) {
            $model->instanceTopCategories = instanceTopCategories::fromMap($map['InstanceTopCategories']);
        }
        if (isset($map['ZoneIds'])) {
            $model->zoneIds = zoneIds::fromMap($map['ZoneIds']);
        }

        return $model;
    }
}
