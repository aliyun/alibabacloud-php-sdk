<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class UpdateTableLevelRequest extends Model
{
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
    public $name;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $levelId;
    protected $_name = [
        'projectId'   => 'ProjectId',
        'levelType'   => 'LevelType',
        'name'        => 'Name',
        'description' => 'Description',
        'levelId'     => 'LevelId',
    ];

    public function validate()
    {
        Model::validateRequired('projectId', $this->projectId, true);
        Model::validateRequired('levelId', $this->levelId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->levelType) {
            $res['LevelType'] = $this->levelType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->levelId) {
            $res['LevelId'] = $this->levelId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateTableLevelRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['LevelType'])) {
            $model->levelType = $map['LevelType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['LevelId'])) {
            $model->levelId = $map['LevelId'];
        }

        return $model;
    }
}
