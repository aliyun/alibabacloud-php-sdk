<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class UpdateCategoryRequest extends Model
{
    /**
     * @var string
     */
    public $cateName;

    /**
     * @var int
     */
    public $cateId;
    protected $_name = [
        'cateName' => 'CateName',
        'cateId'   => 'CateId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cateName) {
            $res['CateName'] = $this->cateName;
        }
        if (null !== $this->cateId) {
            $res['CateId'] = $this->cateId;
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
        if (isset($map['CateName'])) {
            $model->cateName = $map['CateName'];
        }
        if (isset($map['CateId'])) {
            $model->cateId = $map['CateId'];
        }

        return $model;
    }
}
