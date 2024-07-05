<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class AddCategoryRequest extends Model
{
    /**
     * @description The name of the category.
     *
     *   The value can be up to 64 bytes in length.
     *   The value must be encoded in UTF-8.
     *
     * This parameter is required.
     * @example test
     *
     * @var string
     */
    public $cateName;

    /**
     * @description The ID of the parent category.
     *
     * To obtain the category ID, perform the following steps: Log on to the [ApsaraVideo VOD console](https://vod.console.aliyun.com). Choose **Configuration Management** > **Media Management** > **Categories**. On the **Audio and Video / Image Category** or **Short Video Material Category** tab, view the category ID.
     *
     * > *   If you specify this parameter, the system creates a subcategory under the parent category. If you leave this parameter empty, the system creates a level 1 category.
     * >*   You cannot modify, add, or delete level 1 categories of short video materials. You can create only subcategories under level 1 categories for short video materials. This parameter is required when you set `Type` to `material`.
     * @example 100012****
     *
     * @var int
     */
    public $parentId;

    /**
     * @description The type of the category. Valid values:
     *
     *   **default** (default): audio, video, and image files
     *   **material**: short video materials
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
