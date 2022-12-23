<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetAttachedMediaInfoResponseBody\attachedMediaList;

use AlibabaCloud\Tea\Model;

class categories extends Model
{
    /**
     * @description The ID of the video category.
     *
     * @example 1000224338
     *
     * @var int
     */
    public $cateId;

    /**
     * @description The name of the category.
     * - The string must be encoded in the UTF-8 format.
     * @example category test
     *
     * @var string
     */
    public $cateName;

    /**
     * @description The level of the category. A value of 0 indicates a level 1 category.
     *
     * @example 0
     *
     * @var int
     */
    public $level;

    /**
     * @description The ID of the parent category. The parent category ID of a level 1 category is -1.
     *
     * @example 1000224336
     *
     * @var int
     */
    public $parentId;
    protected $_name = [
        'cateId'   => 'CateId',
        'cateName' => 'CateName',
        'level'    => 'Level',
        'parentId' => 'ParentId',
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
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return categories
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
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }

        return $model;
    }
}
