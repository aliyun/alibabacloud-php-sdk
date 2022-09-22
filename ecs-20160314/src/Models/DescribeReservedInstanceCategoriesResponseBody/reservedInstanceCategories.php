<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeReservedInstanceCategoriesResponseBody;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeReservedInstanceCategoriesResponseBody\reservedInstanceCategories\reservedInstanceCategory;
use AlibabaCloud\Tea\Model;

class reservedInstanceCategories extends Model
{
    /**
     * @var reservedInstanceCategory[]
     */
    public $reservedInstanceCategory;
    protected $_name = [
        'reservedInstanceCategory' => 'ReservedInstanceCategory',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reservedInstanceCategory) {
            $res['ReservedInstanceCategory'] = [];
            if (null !== $this->reservedInstanceCategory && \is_array($this->reservedInstanceCategory)) {
                $n = 0;
                foreach ($this->reservedInstanceCategory as $item) {
                    $res['ReservedInstanceCategory'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return reservedInstanceCategories
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReservedInstanceCategory'])) {
            if (!empty($map['ReservedInstanceCategory'])) {
                $model->reservedInstanceCategory = [];
                $n                               = 0;
                foreach ($map['ReservedInstanceCategory'] as $item) {
                    $model->reservedInstanceCategory[$n++] = null !== $item ? reservedInstanceCategory::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
