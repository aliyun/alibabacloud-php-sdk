<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class RevokeUserPermissionRequest extends Model
{
    /**
     * @description The database ID. The database can be a physical database or a logical database.
     *
     *   To query the ID of a physical database, call the [ListDatabases](https://help.aliyun.com/document_detail/141873.html) or [SearchDatabase](https://help.aliyun.com/document_detail/141876.html) operation.
     *   To query the ID of a logical database, call the [ListLogicDatabases](https://help.aliyun.com/document_detail/141874.html) or [SearchDatabase](https://help.aliyun.com/document_detail/141876.html) operation.
     *
     * @example 1860****
     *
     * @var string
     */
    public $dbId;

    /**
     * @description The type of the object on which you want to revoke permissions from a user. Valid values:
     *
     *   **INSTANCE**: instances.
     *   **DATABASE**: physical databases.
     *   **LOGIC_DATABASE**: logical databases.
     *   **TABLE**: physical tables.
     *   **LOGIC_TABLE**: logical tables.
     *
     * This parameter is required.
     *
     * @example DATABASE
     *
     * @var string
     */
    public $dsType;

    /**
     * @description The database instance ID. You must specify this parameter if you revoke a permission from the database instance. You can call the [ListInstances](https://help.aliyun.com/document_detail/141936.html) or [GetInstance](https://help.aliyun.com/document_detail/141567.html) operation to query the ID of the database instance.
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
     *
     *   If the database is a logical database, set this parameter to **true**.
     *
     *   If the database is a physical database, set this parameter to **false**.
     *
     * @example false
     *
     * @var bool
     */
    public $logic;

    /**
     * @description The type of the permissions. Valid values:
     *
     *   **QUERY**: query permissions.
     *   **EXPORT**: export permissions.
     *   **CORRECT**: change permissions.
     *   **LOGIN**: logon permissions.
     *   **PERF**: query permissions on the performance details of an instance.
     *
     * This parameter is required.
     *
     * @example CORRECT
     *
     * @var string
     */
    public $permTypes;

    /**
     * @description The table ID. You must specify this parameter if you revoke a permission from the table. You can call the [ListTables](https://help.aliyun.com/document_detail/141878.html) operation to query the table ID.
     *
     * @example 13****
     *
     * @var string
     */
    public $tableId;

    /**
     * @description The name of the table. You can call the [ListTables](https://help.aliyun.com/document_detail/141878.html) operation to query the table name.
     *
     * @example table_name
     *
     * @var string
     */
    public $tableName;

    /**
     * @description The tenant ID. You can call the [GetUserActiveTenant](https://help.aliyun.com/document_detail/198073.html) operation to query the tenant ID.
     *
     * @example 3***
     *
     * @var int
     */
    public $tid;

    /**
     * @description The permission ID. You can call the [ListUserPermission](https://help.aliyun.com/document_detail/146957.html) operation to query the permission ID.
     *
     * This parameter is required.
     *
     * @example 774****
     *
     * @var string
     */
    public $userAccessId;

    /**
     * @description The user ID. You can call the [ListUsers](https://help.aliyun.com/document_detail/141938.html) or [GetUser](https://help.aliyun.com/document_detail/147098.html) operation to query the ID of the user.
     *
     * This parameter is required.
     *
     * @example 51****
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'dbId' => 'DbId',
        'dsType' => 'DsType',
        'instanceId' => 'InstanceId',
        'logic' => 'Logic',
        'permTypes' => 'PermTypes',
        'tableId' => 'TableId',
        'tableName' => 'TableName',
        'tid' => 'Tid',
        'userAccessId' => 'UserAccessId',
        'userId' => 'UserId',
    ];

    public function validate() {}

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
