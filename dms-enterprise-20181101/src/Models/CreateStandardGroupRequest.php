<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class CreateStandardGroupRequest extends Model
{
    /**
     * @description The created security rule set.
     *
     * @example mysql
     *
     * @var string
     */
    public $dbType;

    /**
     * @description The type of the database engine. For more information about the valid values of this parameter, see [DbType parameter](~~198106~~).
     *
     * @var string
     */
    public $description;

    /**
     * @description The control mode. Valid values:
     *
     *   **NONE_CONTROL**: Flexible Management
     *   **STABLE**: Stable Change
     *   **COMMON**: Security Collaboration
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The error code returned if the request fails.
     *
     * @example 3000
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'dbType'      => 'DbType',
        'description' => 'Description',
        'groupName'   => 'GroupName',
        'tid'         => 'Tid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateStandardGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
