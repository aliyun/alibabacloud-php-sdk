<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListStandardGroupsResponseBody;

use AlibabaCloud\Tea\Model;

class standardGroupList extends Model
{
    /**
     * @description The type of the database engine. For more information about the valid values of this parameter, see [DbType parameter](https://help.aliyun.com/document_detail/198106.html).
     *
     * @example mysql
     *
     * @var string
     */
    public $dbType;

    /**
     * @description The description of the security rule set.
     *
     * @example test_rule
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the security rule set.
     *
     * @example 41****
     *
     * @var int
     */
    public $groupId;

    /**
     * @description The control mode. Valid values:
     *
     *   **NONE_CONTROL**: Flexible Management
     *   **STABLE**: Stable Change
     *   **COMMON**: Security Collaboration
     *
     * @example COMMON
     *
     * @var string
     */
    public $groupMode;

    /**
     * @description The name of the security rule set.
     *
     * @example test_group
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The ID of the user who queries the security sets.
     *
     * @example 51****
     *
     * @var int
     */
    public $lastMenderId;
    protected $_name = [
        'dbType'       => 'DbType',
        'description'  => 'Description',
        'groupId'      => 'GroupId',
        'groupMode'    => 'GroupMode',
        'groupName'    => 'GroupName',
        'lastMenderId' => 'LastMenderId',
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
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupMode) {
            $res['GroupMode'] = $this->groupMode;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->lastMenderId) {
            $res['LastMenderId'] = $this->lastMenderId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return standardGroupList
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
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupMode'])) {
            $model->groupMode = $map['GroupMode'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['LastMenderId'])) {
            $model->lastMenderId = $map['LastMenderId'];
        }

        return $model;
    }
}
