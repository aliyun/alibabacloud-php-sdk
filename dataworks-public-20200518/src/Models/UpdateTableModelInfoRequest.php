<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class UpdateTableModelInfoRequest extends Model
{
    /**
     * @description The ID of the first-level table folder.
     *
     * @example 101
     *
     * @var int
     */
    public $firstLevelThemeId;

    /**
     * @description The ID of the table level.
     *
     * @example 101
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
     * @description The ID of the second-level table folder.
     *
     * @example 101
     *
     * @var int
     */
    public $secondLevelThemeId;

    /**
     * @description The globally unique identifier (GUID) of the table. Specify the GUID in the format of odps.{projectName}.{tableName}.
     *
     * This parameter is required.
     * @example odps.test.table1
     *
     * @var string
     */
    public $tableGuid;
    protected $_name = [
        'firstLevelThemeId'  => 'FirstLevelThemeId',
        'levelId'            => 'LevelId',
        'levelType'          => 'LevelType',
        'secondLevelThemeId' => 'SecondLevelThemeId',
        'tableGuid'          => 'TableGuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->firstLevelThemeId) {
            $res['FirstLevelThemeId'] = $this->firstLevelThemeId;
        }
        if (null !== $this->levelId) {
            $res['LevelId'] = $this->levelId;
        }
        if (null !== $this->levelType) {
            $res['LevelType'] = $this->levelType;
        }
        if (null !== $this->secondLevelThemeId) {
            $res['SecondLevelThemeId'] = $this->secondLevelThemeId;
        }
        if (null !== $this->tableGuid) {
            $res['TableGuid'] = $this->tableGuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateTableModelInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FirstLevelThemeId'])) {
            $model->firstLevelThemeId = $map['FirstLevelThemeId'];
        }
        if (isset($map['LevelId'])) {
            $model->levelId = $map['LevelId'];
        }
        if (isset($map['LevelType'])) {
            $model->levelType = $map['LevelType'];
        }
        if (isset($map['SecondLevelThemeId'])) {
            $model->secondLevelThemeId = $map['SecondLevelThemeId'];
        }
        if (isset($map['TableGuid'])) {
            $model->tableGuid = $map['TableGuid'];
        }

        return $model;
    }
}
