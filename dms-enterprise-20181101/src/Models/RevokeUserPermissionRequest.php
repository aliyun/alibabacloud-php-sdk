<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class RevokeUserPermissionRequest extends Model
{
    /**
     * @description The ID of the database. The database can be a physical database or a logical database.
     *
     *   To query the ID of a physical database, call the [ListDatabases](~~141873~~) or [SearchDatabase](~~141876~~) operation.
     *   To query the ID of a logical database, call the [ListLogicDatabases](~~141874~~) or [SearchDatabase](~~141876~~) operation.
     *
     * @example 1860****
     *
     * @var string
     */
    public $dbId;

    /**
     * @description The object type on which the permission you want to revoke from the user. Valid values:
     *
     *   **INSTANCE**: database instances
     *   **DATABASE**: physical databases
     *   **LOGIC_DATABASE**: logical databases
     *   **TABLE**: physical tables
     *   **LOGIC_TABLE**: logical tables
     *
     * @example DATABASE
     *
     * @var string
     */
    public $dsType;

    /**
     * @description The ID of the database instance. You must specify this parameter when you revoke a permission from the database instance. You can call the [ListInstances](~~141936~~) or [GetInstance](~~141567~~) operation to query the database instance ID.
     *
     * @example 174****
     *
     * @var int
     */
    public $instanceId;

    /**
     * @description Specifies whether the database is a logical database. Valid values:
     *
     *   **true**: The database is a logical database.
     *   **false**: The database is a physical database.
     *
     * >
     *   If the database is a logical database, set this parameter to **true**.
     *   If the database is a physical database, set this parameter to **false**.
     *
     * @example false
     *
     * @var bool
     */
    public $logic;

    /**
     * @description The type of the permission. Valid values:
     *
     *   **QUERY**: the data query permission
     *   **EXPORT**: the data export permission
     *   **CORRECT**: the data change permission
     *
     * @example CORRECT
     *
     * @var string
     */
    public $permTypes;

    /**
     * @description The ID of the table. You must specify this parameter when you revoke a permission from the table. You can call the [ListTables](~~141878~~) operation to query the table ID.
     *
     * @example 13****
     *
     * @var string
     */
    public $tableId;

    /**
     * @description The name of the table. You can call the [ListTables](~~141878~~) operation to query the table name.
     *
     * @example table_name
     *
     * @var string
     */
    public $tableName;

    /**
     * @description The ID of the tenant. You can call the [GetUserActiveTenant](~~198073~~) operation to query the tenant ID.
     *
     * @example 3***
     *
     * @var int
     */
    public $tid;

    /**
     * @description The ID of the permission. You can call the [ListUserPermission](~~146957~~) operation to query the permission ID.
     *
     * @example 774****
     *
     * @var string
     */
    public $userAccessId;

    /**
     * @description The ID of the user. You can call the [ListUsers](~~141938~~) or [GetUser](~~147098~~) operation to query the user ID.
     *
     * @example 51****
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'dbId'         => 'DbId',
        'dsType'       => 'DsType',
        'instanceId'   => 'InstanceId',
        'logic'        => 'Logic',
        'permTypes'    => 'PermTypes',
        'tableId'      => 'TableId',
        'tableName'    => 'TableName',
        'tid'          => 'Tid',
        'userAccessId' => 'UserAccessId',
        'userId'       => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }
        if (null !== $this->dsType) {
            $res['DsType'] = $this->dsType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->logic) {
            $res['Logic'] = $this->logic;
        }
        if (null !== $this->permTypes) {
            $res['PermTypes'] = $this->permTypes;
        }
        if (null !== $this->tableId) {
            $res['TableId'] = $this->tableId;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }
        if (null !== $this->userAccessId) {
            $res['UserAccessId'] = $this->userAccessId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RevokeUserPermissionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }
        if (isset($map['DsType'])) {
            $model->dsType = $map['DsType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Logic'])) {
            $model->logic = $map['Logic'];
        }
        if (isset($map['PermTypes'])) {
            $model->permTypes = $map['PermTypes'];
        }
        if (isset($map['TableId'])) {
            $model->tableId = $map['TableId'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }
        if (isset($map['UserAccessId'])) {
            $model->userAccessId = $map['UserAccessId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
