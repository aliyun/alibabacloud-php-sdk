<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qssj\V20220112\Models\GetAllTrendCategoryResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 201241307
     *
     * @var int
     */
    public $categoryId;

    /**
     * @example 2
     *
     * @var int
     */
    public $categoryLevel;

    /**
     * @var string
     */
    public $categoryName;

    /**
     * @var mixed[]
     */
    public $childCategory;

    /**
     * @var string
     */
    public $superCategoryName;
    protected $_name = [
        'categoryId'        => 'CategoryId',
        'categoryLevel'     => 'CategoryLevel',
        'categoryName'      => 'CategoryName',
        'childCategory'     => 'ChildCategory',
        'superCategoryName' => 'SuperCategoryName',
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
        if (null !== $this->categoryLevel) {
            $res['CategoryLevel'] = $this->categoryLevel;
        }
        if (null !== $this->categoryName) {
            $res['CategoryName'] = $this->categoryName;
        }
        if (null !== $this->childCategory) {
            $res['ChildCategory'] = $this->childCategory;
        }
        if (null !== $this->superCategoryName) {
            $res['SuperCategoryName'] = $this->superCategoryName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['CategoryLevel'])) {
            $model->categoryLevel = $map['CategoryLevel'];
        }
        if (isset($map['CategoryName'])) {
            $model->categoryName = $map['CategoryName'];
        }
        if (isset($map['ChildCategory'])) {
            if (!empty($map['ChildCategory'])) {
                $model->childCategory = $map['ChildCategory'];
            }
        }
        if (isset($map['SuperCategoryName'])) {
            $model->superCategoryName = $map['SuperCategoryName'];
        }

        return $model;
    }
}
