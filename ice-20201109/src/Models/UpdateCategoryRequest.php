<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class UpdateCategoryRequest extends Model
{
    /**
     * @var int
     */
    public $cateId;

    /**
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
