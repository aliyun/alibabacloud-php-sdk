<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class UpdateCategoryRequest extends Model
{
    /**
     * @description The ID of the category. You can specify only one ID. You can use one of the following methods to obtain the ID:
     *
     *   Log on to the [ApsaraVideo VOD console](https://vod.console.aliyun.com). Choose **Configuration Management** > **Media Management** > **Categories**. On the **Audio and Video / Image Category** or **Short Video Material Category** tab, view the category ID.
     *   Obtain the category ID from the response to the [AddCategory](~~AddCategory~~) operation.
     *
     * This parameter is required.
     * @example 10020****
     *
     * @var int
     */
    public $cateId;

    /**
     * @description The name of the category.
     *
     *   The value can be up to 64 bytes in length.
     *   The value must be encoded in UTF-8.
     *
     * This parameter is required.
     * @example beauty
     *
     * @var string
     */
    public $cateName;
    protected $_name = [
        'cateId'   => 'CateId',
        'cateName' => 'CateName',
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
        if (null !== $this->cateName) {
            $res['CateName'] = $this->cateName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateCategoryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CateId'])) {
            $model->cateId = $map['CateId'];
        }
        if (isset($map['CateName'])) {
            $model->cateName = $map['CateName'];
        }

        return $model;
    }
}
