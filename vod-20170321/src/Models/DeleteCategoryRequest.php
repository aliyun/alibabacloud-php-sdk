<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class DeleteCategoryRequest extends Model
{
    /**
     * @description The ID of the category. You can specify only one ID. You can use one of the following methods to obtain the ID:
     *
     *   Log on to the [ApsaraVideo VOD console](https://vod.console.aliyun.com). Choose **Configuration Management** > **Media Management** > **Categories**. On the Audio and Video / Image Category or Short Video Material Category tab, view the category ID.
     *   Obtain the category ID from the response to the [AddCategory](~~AddCategory~~) operation.
     *
     * This parameter is required.
     * @example 3300****
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
