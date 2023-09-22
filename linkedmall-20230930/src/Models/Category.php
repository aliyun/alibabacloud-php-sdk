<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Tea\Model;

class Category extends Model
{
    /**
     * @example 201792301
     *
     * @var int
     */
    public $categoryId;

    /**
     * @example false
     *
     * @var bool
     */
    public $isLeaf;

    /**
     * @example 2
     *
     * @var int
     */
    public $level;

    /**
     * @example 方便面/拉面/挂面/轻食面速食
     *
     * @var string
     */
    public $name;

    /**
     * @example 50016422
     *
     * @var int
     */
    public $parentId;
    protected $_name = [
        'categoryId' => 'categoryId',
        'isLeaf'     => 'isLeaf',
        'level'      => 'level',
        'name'       => 'name',
        'parentId'   => 'parentId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->categoryId) {
            $res['categoryId'] = $this->categoryId;
        }
        if (null !== $this->isLeaf) {
            $res['isLeaf'] = $this->isLeaf;
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
     * @return Category
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['categoryId'])) {
            $model->categoryId = $map['categoryId'];
        }
        if (isset($map['isLeaf'])) {
            $model->isLeaf = $map['isLeaf'];
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
