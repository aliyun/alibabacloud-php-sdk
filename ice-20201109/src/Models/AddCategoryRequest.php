<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class AddCategoryRequest extends Model
{
    /**
     * @description The category name.
     *
     *   The value can be up to 64 bytes in length.
     *   The value must be encoded in UTF-8.
     *
     * This parameter is required.
     * @var string
     */
    public $cateName;

    /**
     * @description The ID of the parent category.
     *
     * @example 5
     *
     * @var int
     */
    public $parentId;

    /**
     * @description The type of the category. Valid values:
     *
     *   default: audio, video, and image files. This is the default value.
     *   material: short video materials.
     *
     * @example default
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'cateName' => 'CateName',
        'parentId' => 'ParentId',
        'type'     => 'Type',
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
     * @return AddCategoryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CateName'])) {
            $model->cateName = $map['CateName'];
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
