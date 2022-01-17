<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models\QueryMarketCategoriesResponseBody\categories;

use AlibabaCloud\SDK\Market\V20151101\Models\QueryMarketCategoriesResponseBody\categories\category\childCategories;
use AlibabaCloud\Tea\Model;

class category extends Model
{
    /**
     * @var string
     */
    public $categoryCode;

    /**
     * @var string
     */
    public $categoryName;

    /**
     * @var childCategories
     */
    public $childCategories;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'categoryCode'    => 'CategoryCode',
        'categoryName'    => 'CategoryName',
        'childCategories' => 'ChildCategories',
        'id'              => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->categoryCode) {
            $res['CategoryCode'] = $this->categoryCode;
        }
        if (null !== $this->categoryName) {
            $res['CategoryName'] = $this->categoryName;
        }
        if (null !== $this->childCategories) {
            $res['ChildCategories'] = null !== $this->childCategories ? $this->childCategories->toMap() : null;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return category
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CategoryCode'])) {
            $model->categoryCode = $map['CategoryCode'];
        }
        if (isset($map['CategoryName'])) {
            $model->categoryName = $map['CategoryName'];
        }
        if (isset($map['ChildCategories'])) {
            $model->childCategories = childCategories::fromMap($map['ChildCategories']);
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
