<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListSubscriptionAlbumCategoryResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 80011
     *
     * @var string
     */
    public $categoryId;

    /**
     * @example 儿童
     *
     * @var string
     */
    public $categoryName;
    protected $_name = [
        'categoryId'   => 'CategoryId',
        'categoryName' => 'CategoryName',
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
        if (null !== $this->categoryName) {
            $res['CategoryName'] = $this->categoryName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
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

        return $model;
    }
}
