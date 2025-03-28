<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;

class UpdateTableModelInfoRequest extends Model
{
    /**
     * @var int
     */
    public $firstLevelThemeId;

    /**
     * @var int
     */
    public $levelId;

    /**
     * @var int
     */
    public $levelType;

    /**
     * @var int
     */
    public $secondLevelThemeId;

    /**
     * @var string
     */
    public $tableGuid;
    protected $_name = [
        'firstLevelThemeId' => 'FirstLevelThemeId',
        'levelId' => 'LevelId',
        'levelType' => 'LevelType',
        'secondLevelThemeId' => 'SecondLevelThemeId',
        'tableGuid' => 'TableGuid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
