<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class UpdateCategoryRequest extends Model
{
    /**
     * @example 10020****
     *
     * @var int
     */
    public $cateId;

    /**
     * @description Modifies a video category.
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
