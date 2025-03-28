<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListTableLevelResponseBody\tableLevelInfo;

use AlibabaCloud\Dara\Model;

class levelList extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $levelId;

    /**
     * @var int
     */
    public $levelType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $projectId;
    protected $_name = [
        'description' => 'Description',
        'levelId' => 'LevelId',
        'levelType' => 'LevelType',
        'name' => 'Name',
        'projectId' => 'ProjectId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->levelId) {
            $res['LevelId'] = $this->levelId;
        }

        if (null !== $this->levelType) {
            $res['LevelType'] = $this->levelType;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['LevelId'])) {
            $model->levelId = $map['LevelId'];
        }

        if (isset($map['LevelType'])) {
            $model->levelType = $map['LevelType'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
