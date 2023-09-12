<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Tea\Model;

class Category extends Model
{
    /**
     * @var int
     */
    public $categoryId;

    /**
     * @example false
     *
     * @var bool
     */
    public $leaf;

    /**
     * @example 0
     *
     * @var int
     */
    public $level;

    /**
     * @example 名称测试
     *
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
        'leaf'       => 'leaf',
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
        if (null !== $this->leaf) {
            $res['leaf'] = $this->leaf;
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
        if (isset($map['leaf'])) {
            $model->leaf = $map['leaf'];
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
