<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models\QueryMarketCategoriesResponseBody\categories\category\childCategories;

use AlibabaCloud\Tea\Model;

class childCategory extends Model
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
     * @var int
     */
    public $id;
    protected $_name = [
        'categoryCode' => 'CategoryCode',
        'categoryName' => 'CategoryName',
        'id'           => 'Id',
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
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return childCategory
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
