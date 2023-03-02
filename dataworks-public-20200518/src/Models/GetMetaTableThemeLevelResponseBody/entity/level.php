<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableThemeLevelResponseBody\entity;

use AlibabaCloud\Tea\Model;

class level extends Model
{
    /**
     * @description The description of the table level.
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the table level.
     *
     * @example 1
     *
     * @var int
     */
    public $levelId;

    /**
     * @description The name of the table level.
     *
     * @example level1
     *
     * @var string
     */
    public $name;

    /**
     * @description The type of the table level. Valid values:
     *
     *   1: indicates the logical level.
     *   2: indicates the physical level.
     *
     * @example 1
     *
     * @var int
     */
    public $type;
    protected $_name = [
        'description' => 'Description',
        'levelId'     => 'LevelId',
        'name'        => 'Name',
        'type'        => 'Type',
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return level
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
