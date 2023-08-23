<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListCommonCateSecondFloorResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 80018009
     *
     * @var int
     */
    public $cateId;

    /**
     * @var string
     */
    public $cateName;

    /**
     * @example 80018
     *
     * @var int
     */
    public $parentCateId;
    protected $_name = [
        'cateId'       => 'CateId',
        'cateName'     => 'CateName',
        'parentCateId' => 'ParentCateId',
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
        if (null !== $this->parentCateId) {
            $res['ParentCateId'] = $this->parentCateId;
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
        if (isset($map['CateId'])) {
            $model->cateId = $map['CateId'];
        }
        if (isset($map['CateName'])) {
            $model->cateName = $map['CateName'];
        }
        if (isset($map['ParentCateId'])) {
            $model->parentCateId = $map['ParentCateId'];
        }

        return $model;
    }
}
