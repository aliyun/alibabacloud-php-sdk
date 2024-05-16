<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class CreateTableLevelRequest extends Model
{
    /**
     * @description Level Description
     *
     * @example The HTTP status code returned.
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the region where the service is activated.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $levelType;

    /**
     * @description Level 1
     *
     * This parameter is required.
     * @example The description of the table level.
     *
     * @var string
     */
    public $name;

    /**
     * @description The type of the table level. Valid values: 1 and 2. A value of 1 indicates the logical level. A value of 2 indicates the physical level.
     *
     * @example 123
     *
     * @var int
     */
    public $projectId;
    protected $_name = [
        'description' => 'Description',
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
     * @return CreateTableLevelRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
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
