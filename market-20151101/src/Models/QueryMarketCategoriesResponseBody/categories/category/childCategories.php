<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models\QueryMarketCategoriesResponseBody\categories\category;

use AlibabaCloud\SDK\Market\V20151101\Models\QueryMarketCategoriesResponseBody\categories\category\childCategories\childCategory;
use AlibabaCloud\Tea\Model;

class childCategories extends Model
{
    /**
     * @var childCategory[]
     */
    public $childCategory;
    protected $_name = [
        'childCategory' => 'ChildCategory',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->childCategory) {
            $res['ChildCategory'] = [];
            if (null !== $this->childCategory && \is_array($this->childCategory)) {
                $n = 0;
                foreach ($this->childCategory as $item) {
                    $res['ChildCategory'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return childCategories
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChildCategory'])) {
            if (!empty($map['ChildCategory'])) {
                $model->childCategory = [];
                $n                    = 0;
                foreach ($map['ChildCategory'] as $item) {
                    $model->childCategory[$n++] = null !== $item ? childCategory::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
