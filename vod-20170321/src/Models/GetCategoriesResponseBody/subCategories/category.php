<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetCategoriesResponseBody\subCategories;

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
     * @description The name of the category.
     *   The value can be up to 64 bytes in length.
     *   The string must be encoded in the UTF-8 format.
     *
     * @example film
     *
     * @var string
     */
    public $cateName;

    /**
     * @description The level of the category. A value of **0** indicates a level 1 category.
     *
     * @example 1
     *
     * @var int
     */
    public $level;

    /**
     * @description The ID of the parent category. The parent category ID of a level 1 category is **-1**.
     *
     * @example 10020****
     *
     * @var int
     */
    public $parentId;

    /**
     * @description The total number of subcategories.
     *
     * @example 1
     *
     * @var int
     */
    public $subTotal;

    /**
     * @description The type of the category. Valid values:
     *
     *   **default** (default): default category
     *   **material**: material category
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
        'subTotal' => 'SubTotal',
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
        if (null !== $this->subTotal) {
            $res['SubTotal'] = $this->subTotal;
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
        if (isset($map['SubTotal'])) {
            $model->subTotal = $map['SubTotal'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
