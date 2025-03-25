<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models\ListCategoryResponseBody\data;

use AlibabaCloud\Tea\Model;

class categoryList extends Model
{
    /**
     * @example cate_cdd11b1b79a74e8bbd675c356a91ee3XXXXXXXX
     *
     * @var string
     */
    public $categoryId;

    /**
     * @var string
     */
    public $categoryName;

    /**
     * @example UNSTRUCTURED
     *
     * @var string
     */
    public $categoryType;

    /**
     * @example true
     *
     * @var bool
     */
    public $isDefault;

    /**
     * @example cate_addd11b1b79a74e8bbd675c356a91ee3XXXXXXXX
     *
     * @var string
     */
    public $parentCategoryId;
    protected $_name = [
        'categoryId' => 'CategoryId',
        'categoryName' => 'CategoryName',
        'categoryType' => 'CategoryType',
        'isDefault' => 'IsDefault',
        'parentCategoryId' => 'ParentCategoryId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }
        if (null !== $this->categoryName) {
            $res['CategoryName'] = $this->categoryName;
        }
        if (null !== $this->categoryType) {
            $res['CategoryType'] = $this->categoryType;
        }
        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }
        if (null !== $this->parentCategoryId) {
            $res['ParentCategoryId'] = $this->parentCategoryId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return categoryList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['CategoryName'])) {
            $model->categoryName = $map['CategoryName'];
        }
        if (isset($map['CategoryType'])) {
            $model->categoryType = $map['CategoryType'];
        }
        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }
        if (isset($map['ParentCategoryId'])) {
            $model->parentCategoryId = $map['ParentCategoryId'];
        }

        return $model;
    }
}
