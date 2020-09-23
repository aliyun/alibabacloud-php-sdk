<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class UpdateTableModelInfoRequest extends Model
{
    /**
     * @var int
     */
    public $firstLevelThemeId;

    /**
     * @var int
     */
    public $secondLevelThemeId;

    /**
     * @var int
     */
    public $levelId;

    /**
     * @var string
     */
    public $tableGuid;

    /**
     * @var int
     */
    public $levelType;
    protected $_name = [
        'firstLevelThemeId'  => 'FirstLevelThemeId',
        'secondLevelThemeId' => 'SecondLevelThemeId',
        'levelId'            => 'LevelId',
        'tableGuid'          => 'TableGuid',
        'levelType'          => 'LevelType',
    ];

    public function validate()
    {
        Model::validateRequired('tableGuid', $this->tableGuid, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->firstLevelThemeId) {
            $res['FirstLevelThemeId'] = $this->firstLevelThemeId;
        }
        if (null !== $this->secondLevelThemeId) {
            $res['SecondLevelThemeId'] = $this->secondLevelThemeId;
        }
        if (null !== $this->levelId) {
            $res['LevelId'] = $this->levelId;
        }
        if (null !== $this->tableGuid) {
            $res['TableGuid'] = $this->tableGuid;
        }
        if (null !== $this->levelType) {
            $res['LevelType'] = $this->levelType;
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
        if (isset($map['SecondLevelThemeId'])) {
            $model->secondLevelThemeId = $map['SecondLevelThemeId'];
        }
        if (isset($map['LevelId'])) {
            $model->levelId = $map['LevelId'];
        }
        if (isset($map['TableGuid'])) {
            $model->tableGuid = $map['TableGuid'];
        }
        if (isset($map['LevelType'])) {
            $model->levelType = $map['LevelType'];
        }

        return $model;
    }
}
