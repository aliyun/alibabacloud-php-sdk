<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20220531\Models\ListDistributionItemResponseBody\model;

use AlibabaCloud\Tea\Model;

class categoryChain extends Model
{
    /**
     * @var int
     */
    public $categoryId;

    /**
     * @var bool
     */
    public $leaf;

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
        'categoryId' => 'CategoryId',
        'leaf'       => 'Leaf',
        'level'      => 'Level',
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
        if (null !== $this->level) {
            $res['Level'] = $this->level;
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
     * @return categoryChain
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
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
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
