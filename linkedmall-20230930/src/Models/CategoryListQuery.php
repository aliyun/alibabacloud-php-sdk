<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Dara\Model;

class CategoryListQuery extends Model
{
    /**
     * @var int[]
     */
    public $categoryIds;
    /**
     * @var int
     */
    public $parentCategoryId;
    protected $_name = [
        'categoryIds'      => 'categoryIds',
        'parentCategoryId' => 'parentCategoryId',
    ];

    public function validate()
    {
        if (\is_array($this->categoryIds)) {
            Model::validateArray($this->categoryIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->categoryIds) {
            if (\is_array($this->categoryIds)) {
                $res['categoryIds'] = [];
                $n1                 = 0;
                foreach ($this->categoryIds as $item1) {
                    $res['categoryIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->parentCategoryId) {
            $res['parentCategoryId'] = $this->parentCategoryId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['categoryIds'])) {
            if (!empty($map['categoryIds'])) {
                $model->categoryIds = [];
                $n1                 = 0;
                foreach ($map['categoryIds'] as $item1) {
                    $model->categoryIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['parentCategoryId'])) {
            $model->parentCategoryId = $map['parentCategoryId'];
        }

        return $model;
    }
}
