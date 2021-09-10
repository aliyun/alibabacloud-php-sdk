<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListTableThemeResponseBody\data;

use AlibabaCloud\Tea\Model;

class themeList extends Model
{
    /**
     * @var int
     */
    public $createTimeStamp;

    /**
     * @var int
     */
    public $parentId;

    /**
     * @var int
     */
    public $themeId;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $level;

    /**
     * @var string
     */
    public $creator;
    protected $_name = [
        'createTimeStamp' => 'CreateTimeStamp',
        'parentId'        => 'ParentId',
        'themeId'         => 'ThemeId',
        'projectId'       => 'ProjectId',
        'name'            => 'Name',
        'level'           => 'Level',
        'creator'         => 'Creator',
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
        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }
        if (null !== $this->themeId) {
            $res['ThemeId'] = $this->themeId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
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
        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }
        if (isset($map['ThemeId'])) {
            $model->themeId = $map['ThemeId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }

        return $model;
    }
}
