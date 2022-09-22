<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeResourceDisplayResponseBody\resourceDisplay;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeResourceDisplayResponseBody\resourceDisplay\productCategories\productCategory;
use AlibabaCloud\Tea\Model;

class productCategories extends Model
{
    /**
     * @var productCategory[]
     */
    public $productCategory;
    protected $_name = [
        'productCategory' => 'ProductCategory',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->productCategory) {
            $res['ProductCategory'] = [];
            if (null !== $this->productCategory && \is_array($this->productCategory)) {
                $n = 0;
                foreach ($this->productCategory as $item) {
                    $res['ProductCategory'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return productCategories
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProductCategory'])) {
            if (!empty($map['ProductCategory'])) {
                $model->productCategory = [];
                $n                      = 0;
                foreach ($map['ProductCategory'] as $item) {
                    $model->productCategory[$n++] = null !== $item ? productCategory::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
