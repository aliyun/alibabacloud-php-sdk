<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class CreateTableThemeRequest extends Model
{
    /**
     * @description The level of the table theme. Valid values: 1 and 2. The value 1 indicates the first level. The value 2 indicates the second level.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $level;

    /**
     * @description The name of the table theme.
     *
     * This parameter is required.
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the level of the parent table theme.
     *
     * @example 122
     *
     * @var int
     */
    public $parentId;

    /**
     * @description The DataWorks workspace ID.
     *
     * @example 123
     *
     * @var int
     */
    public $projectId;
    protected $_name = [
        'level'     => 'Level',
        'name'      => 'Name',
        'parentId'  => 'ParentId',
        'projectId' => 'ProjectId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTableThemeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
