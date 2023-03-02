<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListTableThemeResponseBody\data;

use AlibabaCloud\Tea\Model;

class themeList extends Model
{
    /**
     * @description The time when the level was created.
     *
     * @example 123432343243
     *
     * @var int
     */
    public $createTimeStamp;

    /**
     * @description The creator of the level.
     *
     * @example 123455
     *
     * @var string
     */
    public $creator;

    /**
     * @description The level of the table folder. Valid values: 1 and 2. A value of 1 indicates a table folder of level 1. A value of 2 indicates a table folder of level 2.
     *
     * @example 1
     *
     * @var int
     */
    public $level;

    /**
     * @description The name of the level of the table folder.
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the parent node.
     *
     * @example 122
     *
     * @var int
     */
    public $parentId;

    /**
     * @description The ID of the DataWorks workspace.
     *
     * @example 123
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The ID of the table folder.
     *
     * @example 123
     *
     * @var int
     */
    public $themeId;
    protected $_name = [
        'createTimeStamp' => 'CreateTimeStamp',
        'creator'         => 'Creator',
        'level'           => 'Level',
        'name'            => 'Name',
        'parentId'        => 'ParentId',
        'projectId'       => 'ProjectId',
        'themeId'         => 'ThemeId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTimeStamp) {
            $res['CreateTimeStamp'] = $this->createTimeStamp;
        }
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->themeId) {
            $res['ThemeId'] = $this->themeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return themeList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTimeStamp'])) {
            $model->createTimeStamp = $map['CreateTimeStamp'];
        }
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ThemeId'])) {
            $model->themeId = $map['ThemeId'];
        }

        return $model;
    }
}
