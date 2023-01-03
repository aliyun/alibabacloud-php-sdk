<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20220531\Models\QueryMallCategoryListResponseBody;

use AlibabaCloud\Tea\Model;

class model_ extends Model
{
    /**
     * @example 5001****
     *
     * @var int
     */
    public $categoryId;

    /**
     * @example true
     *
     * @var bool
     */
    public $leaf;

    /**
     * @var string
     */
    public $name;

    /**
     * @example 1041577**
     *
     * @var int
     */
    public $parentId;
    protected $_name = [
        'categoryId' => 'CategoryId',
        'leaf'       => 'Leaf',
        'name'       => 'Name',
        'parentId'   => 'ParentId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }
        if (null !== $this->leaf) {
            $res['Leaf'] = $this->leaf;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return model_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['Leaf'])) {
            $model->leaf = $map['Leaf'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }

        return $model;
    }
}
