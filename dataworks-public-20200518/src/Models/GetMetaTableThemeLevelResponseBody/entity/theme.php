<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableThemeLevelResponseBody\entity;

use AlibabaCloud\Tea\Model;

class theme extends Model
{
    /**
     * @description The level of the theme. Valid values:
     *
     *   1
     *   2
     *
     * @example 1
     *
     * @var int
     */
    public $level;

    /**
     * @description The name of the theme.
     *
     * @example theme1
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the parent theme.
     *
     * @example 0
     *
     * @var int
     */
    public $parentId;

    /**
     * @description The ID of the theme.
     *
     * @example 123
     *
     * @var int
     */
    public $themeId;
    protected $_name = [
        'level'    => 'Level',
        'name'     => 'Name',
        'parentId' => 'ParentId',
        'themeId'  => 'ThemeId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }
        if (null !== $this->themeId) {
            $res['ThemeId'] = $this->themeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return theme
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }
        if (isset($map['ThemeId'])) {
            $model->themeId = $map['ThemeId'];
        }

        return $model;
    }
}
