<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models\SearchProductsResponseBody\products;

use AlibabaCloud\Tea\Model;

class categoryChain extends Model
{
    /**
     * @example 201792301
     *
     * @var int
     */
    public $categoryId;

    /**
     * @example 1
     *
     * @var bool
     */
    public $level;

    /**
     * @var string
     */
    public $name;

    /**
     * @example 0
     *
     * @var int
     */
    public $parentId;
    protected $_name = [
        'categoryId' => 'categoryId',
        'level' => 'level',
        'name' => 'name',
        'parentId' => 'parentId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->categoryId) {
            $res['categoryId'] = $this->categoryId;
        }
        if (null !== $this->level) {
            $res['level'] = $this->level;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->parentId) {
            $res['parentId'] = $this->parentId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return categoryChain
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['categoryId'])) {
            $model->categoryId = $map['categoryId'];
        }
        if (isset($map['level'])) {
            $model->level = $map['level'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['parentId'])) {
            $model->parentId = $map['parentId'];
        }

        return $model;
    }
}
