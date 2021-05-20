<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListTableThemeResponse\data;

use AlibabaCloud\Tea\Model;

class themeList extends Model
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

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var int
     */
    public $createTimeStamp;
    protected $_name = [
        'themeId'         => 'ThemeId',
        'name'            => 'Name',
        'level'           => 'Level',
        'parentId'        => 'ParentId',
        'projectId'       => 'ProjectId',
        'creator'         => 'Creator',
        'createTimeStamp' => 'CreateTimeStamp',
    ];

    public function validate()
    {
        Model::validateRequired('themeId', $this->themeId, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('level', $this->level, true);
        Model::validateRequired('parentId', $this->parentId, true);
        Model::validateRequired('projectId', $this->projectId, true);
        Model::validateRequired('creator', $this->creator, true);
        Model::validateRequired('createTimeStamp', $this->createTimeStamp, true);
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
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }
        if (null !== $this->createTimeStamp) {
            $res['CreateTimeStamp'] = $this->createTimeStamp;
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
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }
        if (isset($map['CreateTimeStamp'])) {
            $model->createTimeStamp = $map['CreateTimeStamp'];
        }

        return $model;
    }
}
