<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class UpdateTableLevelRequest extends Model
{
    /**
     * @description The description of the table level.
     *
     * @example level description
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the table level to be updated. You can call the ListTableLevel operation to obtain the ID.
     *
     * This parameter is required.
     * @example 123
     *
     * @var int
     */
    public $levelId;

    /**
     * @description The type of the table level. Valid values: 1 and 2. A value of 1 indicates the logical level. A value of 2 indicates the physical level.
     *
     * @example 1
     *
     * @var int
     */
    public $levelType;

    /**
     * @description The name of the table level.
     *
     * @example level name
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the DataWorks workspace.
     *
     * This parameter is required.
     * @example 123
     *
     * @var int
     */
    public $projectId;
    protected $_name = [
        'description' => 'Description',
        'levelId'     => 'LevelId',
        'levelType'   => 'LevelType',
        'name'        => 'Name',
        'projectId'   => 'ProjectId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return UpdateTableLevelRequest
     */
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
