<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class DeleteCategoryRequest extends Model
{
    /**
     * @description The category ID. You can use one of the following methods to obtain the ID:
     *
     *   Log on to the [Intelligent Media Services (IMS) console](https://ims.console.aliyun.com) and choose **Media Asset Management** > **Category Management** to view the category ID.
     *   View the value of CateId returned by the AddCategory operation that you called to create a category.
     *   View the value of CateId returned by the GetCategories operation that you called to query a category.
     *
     * This parameter is required.
     * @example 46
     *
     * @var int
     */
    public $cateId;
    protected $_name = [
        'cateId' => 'CateId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cateId) {
            $res['CateId'] = $this->cateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteCategoryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CateId'])) {
            $model->cateId = $map['CateId'];
        }

        return $model;
    }
}
