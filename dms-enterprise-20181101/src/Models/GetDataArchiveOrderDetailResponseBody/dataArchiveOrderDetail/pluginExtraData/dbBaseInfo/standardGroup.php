<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataArchiveOrderDetailResponseBody\dataArchiveOrderDetail\pluginExtraData\dbBaseInfo;

use AlibabaCloud\Tea\Model;

class standardGroup extends Model
{
    /**
     * @description The type of the instance engine. For information about the valid values of this parameter, see [DbType parameter](~~198106~~).
     *
     * @example MySQL
     *
     * @var string
     */
    public $dbType;

    /**
     * @description The description of the security rule set.
     *
     * @example adb_mysql default
     *
     * @var string
     */
    public $description;

    /**
     * @description Indicates whether the instance is managed in Flexible Management or Stable Change mode. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $freeOrStable;

    /**
     * @description The time when the security rule was created.
     *
     * @example 2020-05-24 14:12:32
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The time when the security rule was last modified.
     *
     * @example 2020-05-25 14:12:32
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The type of the control mode of the instance. Valid values:
     *
     *   **COMMON**: The instance is managed in Security Collaboration mode.
     *   **NONE_CONTROL**: The instance is managed in Flexible Management mode.
     *   **STABLE**: The instance is managed in Stable Change mode.
     *
     * @example COMMON
     *
     * @var string
     */
    public $groupMode;

    /**
     * @description The name of the security rule that corresponds to the control mode.
     *
     * @example adb_mysql default
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The ID of the security rule.
     *
     * @example 24***
     *
     * @var int
     */
    public $id;

    /**
     * @description The user ID of the last modified security rule.
     *
     * @example 12****
     *
     * @var int
     */
    public $lastMenderId;
    protected $_name = [
        'dbType'       => 'DbType',
        'description'  => 'Description',
        'freeOrStable' => 'FreeOrStable',
        'gmtCreate'    => 'GmtCreate',
        'gmtModified'  => 'GmtModified',
        'groupMode'    => 'GroupMode',
        'groupName'    => 'GroupName',
        'id'           => 'Id',
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
        if (null !== $this->freeOrStable) {
            $res['FreeOrStable'] = $this->freeOrStable;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->groupMode) {
            $res['GroupMode'] = $this->groupMode;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->lastMenderId) {
            $res['LastMenderId'] = $this->lastMenderId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return standardGroup
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
        if (isset($map['FreeOrStable'])) {
            $model->freeOrStable = $map['FreeOrStable'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['GroupMode'])) {
            $model->groupMode = $map['GroupMode'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['LastMenderId'])) {
            $model->lastMenderId = $map['LastMenderId'];
        }

        return $model;
    }
}
