<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetCategoriesResponseBody;

use AlibabaCloud\Tea\Model;

class category extends Model
{
    /**
     * @description The ID of the video category.
     *
     * @example 100
     *
     * @var int
     */
    public $cateId;

    /**
     * @description The ID of the parent category. The parent category ID of a level 1 category is **-1**.
     *
     * @example The method for sorting the results. Valid values:
     *
     *   **CreationTime:Desc** (default): The results are sorted in reverse chronological order based on the creation time.
     *   **CreationTime:Asc**: The results are sorted in chronological order based on the creation time.
     *
     * @var string
     */
    public $cateName;

    /**
     * @description The name of the category.
     *
     *   The value can be up to 64 bytes in length.
     *   The string must be encoded in the UTF-8 format.
     *
     * @example 0
     *
     * @var int
     */
    public $level;

    /**
     * @description The level of the category. A value of **0** indicates a level 1 category.
     *
     * @example 100012****
     *
     * @var int
     */
    public $parentId;

    /**
     * @description The total number of subcategories.
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
