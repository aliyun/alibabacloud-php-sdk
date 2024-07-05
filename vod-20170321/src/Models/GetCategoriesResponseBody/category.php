<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetCategoriesResponseBody;

use AlibabaCloud\Tea\Model;

class category extends Model
{
    /**
     * @description The ID of the category.
     *
     * @example 100
     *
     * @var int
     */
    public $cateId;

    /**
     * @description The name of the category.
     *
     * @example film
     *
     * @var string
     */
    public $cateName;

    /**
     * @description The level of the category. Valid values:
     *
     *   **0**: level 1 category
     *   **1**: level 2 category
     *   **2**: level 3 category
     *
     * @example 0
     *
     * @var int
     */
    public $level;

    /**
     * @description The ID of the parent category.
     *
     * @example 100012****
     *
     * @var int
     */
    public $parentId;

    /**
     * @description The type of the category. Valid values:
     *
     *   **default**: audio, video, and image files
     *   **material**: short video materials
     *
     * @example default
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'cateId'   => 'CateId',
        'cateName' => 'CateName',
        'level'    => 'Level',
        'parentId' => 'ParentId',
        'type'     => 'Type',
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
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return category
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
