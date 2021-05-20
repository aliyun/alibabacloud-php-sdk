<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableThemeLevelResponse\entity;

use AlibabaCloud\Tea\Model;

class theme extends Model
{
    /**
     * @var int
     */
    public $themeId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $level;

    /**
     * @var int
     */
    public $parentId;
    protected $_name = [
        'themeId'  => 'ThemeId',
        'name'     => 'Name',
        'level'    => 'Level',
        'parentId' => 'ParentId',
    ];

    public function validate()
    {
        Model::validateRequired('themeId', $this->themeId, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('level', $this->level, true);
        Model::validateRequired('parentId', $this->parentId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->themeId) {
            $res['ThemeId'] = $this->themeId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
     * @return theme
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ThemeId'])) {
            $model->themeId = $map['ThemeId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
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
