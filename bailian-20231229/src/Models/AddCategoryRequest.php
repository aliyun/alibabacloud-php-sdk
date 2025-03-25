<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models;

use AlibabaCloud\Tea\Model;

class AddCategoryRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $categoryName;

    /**
     * @description This parameter is required.
     *
     * @example UNSTRUCTURED
     *
     * @var string
     */
    public $categoryType;

    /**
     * @example cate_cdd11b1b79a74e8bbd675c356a91ee3XXXXXXXX
     *
     * @var string
     */
    public $parentCategoryId;
    protected $_name = [
        'categoryName' => 'CategoryName',
        'categoryType' => 'CategoryType',
        'parentCategoryId' => 'ParentCategoryId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->categoryName) {
            $res['CategoryName'] = $this->categoryName;
        }
        if (null !== $this->categoryType) {
            $res['CategoryType'] = $this->categoryType;
        }
        if (null !== $this->parentCategoryId) {
            $res['ParentCategoryId'] = $this->parentCategoryId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddCategoryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CategoryName'])) {
            $model->categoryName = $map['CategoryName'];
        }
        if (isset($map['CategoryType'])) {
            $model->categoryType = $map['CategoryType'];
        }
        if (isset($map['ParentCategoryId'])) {
            $model->parentCategoryId = $map['ParentCategoryId'];
        }

        return $model;
    }
}
