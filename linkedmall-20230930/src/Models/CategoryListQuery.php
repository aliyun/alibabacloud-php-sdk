<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Tea\Model;

class CategoryListQuery extends Model
{
    /**
     * @var int[]
     */
    public $categoryIds;

    /**
     * @example 5200001
     *
     * @var int
     */
    public $parentCategoryId;
    protected $_name = [
        'categoryIds'      => 'categoryIds',
        'parentCategoryId' => 'parentCategoryId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->categoryIds) {
            $res['categoryIds'] = $this->categoryIds;
        }
        if (null !== $this->parentCategoryId) {
            $res['parentCategoryId'] = $this->parentCategoryId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CategoryListQuery
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['categoryIds'])) {
            if (!empty($map['categoryIds'])) {
                $model->categoryIds = $map['categoryIds'];
            }
        }
        if (isset($map['parentCategoryId'])) {
            $model->parentCategoryId = $map['parentCategoryId'];
        }

        return $model;
    }
}
