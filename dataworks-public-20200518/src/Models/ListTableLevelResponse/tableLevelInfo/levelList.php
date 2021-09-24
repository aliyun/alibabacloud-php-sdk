<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListTableLevelResponse\tableLevelInfo;

use AlibabaCloud\Tea\Model;

class levelList extends Model
{
    /**
     * @var int
     */
    public $levelId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var int
     */
    public $levelType;

    /**
     * @var string
     */
    public $description;
    protected $_name = [
        'levelId'     => 'LevelId',
        'name'        => 'Name',
        'projectId'   => 'ProjectId',
        'levelType'   => 'LevelType',
        'description' => 'Description',
    ];

    public function validate()
    {
        Model::validateRequired('levelId', $this->levelId, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('projectId', $this->projectId, true);
        Model::validateRequired('levelType', $this->levelType, true);
        Model::validateRequired('description', $this->description, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->levelId) {
            $res['LevelId'] = $this->levelId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->levelType) {
            $res['LevelType'] = $this->levelType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return levelList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LevelId'])) {
            $model->levelId = $map['LevelId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['LevelType'])) {
            $model->levelType = $map['LevelType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        return $model;
    }
}
