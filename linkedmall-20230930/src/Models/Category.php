<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Dara\Model;

class Category extends Model
{
    /**
     * @var int
     */
    public $categoryId;
    /**
     * @var bool
     */
    public $isLeaf;
    /**
     * @var int
     */
    public $level;
    /**
     * @var string
     */
    public $name;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
