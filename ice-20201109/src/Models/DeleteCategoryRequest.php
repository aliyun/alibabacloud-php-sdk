<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class DeleteCategoryRequest extends Model
{
    /**
     * @description This parameter is required.
     *
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
