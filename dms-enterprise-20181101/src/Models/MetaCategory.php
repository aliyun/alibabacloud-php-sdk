<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class MetaCategory extends Model
{
    /**
     * @var int
     */
    public $categoryId;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $depth;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $parentCategoryId;
    protected $_name = [
        'categoryId' => 'CategoryId',
        'createTime' => 'CreateTime',
        'depth' => 'Depth',
        'name' => 'Name',
        'parentCategoryId' => 'ParentCategoryId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->depth) {
            $res['Depth'] = $this->depth;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->parentCategoryId) {
            $res['ParentCategoryId'] = $this->parentCategoryId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MetaCategory
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Depth'])) {
            $model->depth = $map['Depth'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ParentCategoryId'])) {
            $model->parentCategoryId = $map['ParentCategoryId'];
        }

        return $model;
    }
}
