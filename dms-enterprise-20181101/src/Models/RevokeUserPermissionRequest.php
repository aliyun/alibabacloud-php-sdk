<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class RevokeUserPermissionRequest extends Model
{
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
     * @example 1860****
     *
     * @var string
     */
    public $dbId;

    /**
     * @description The ID of the database. The database can be a physical database or a logical database.
     *
     *   To query the ID of a physical database, call the [ListDatabases](~~141873~~) or [SearchDatabase](~~141876~~) operation.
     *   To query the ID of a logical database, call the [ListLogicDatabases](~~141874~~) or [SearchDatabase](~~141876~~) operation.
     *
     * @example DATABASE
     *
     * @var string
     */
    public $dsType;

    /**
     * @description The error message returned.
     *
     * @example 174****
     *
     * @var int
     */
    public $instanceId;

    /**
     * @description The type of the permission. Valid values:
     *
     *   **QUERY**: the data query permission
     *   **EXPORT**: the data export permission
     *   **CORRECT**: the data change permission
     *
     * @example false
     *
     * @var bool
     */
    public $logic;

    /**
     * @description The ID of the request.
     *
     * @example CORRECT
     *
     * @var string
     */
    public $permTypes;

    /**
     * @description The ID of the tenant. You can call the [GetUserActiveTenant](~~198073~~) operation to query the tenant ID.
     *
     * @example 13****
     *
     * @var string
     */
    public $tableId;

    /**
     * @description The ID of the database instance. You must specify this parameter when you revoke a permission from the database instance. You can call the [ListInstances](~~141936~~) or [GetInstance](~~141567~~) operation to query the database instance ID.
     *
     * @example table_name
     *
     * @var string
     */
    public $tableName;

    /**
     * @description The error code returned.
     *
     * @example 3***
     *
     * @var int
     */
    public $tid;

    /**
     * @description Revokes a permission on a resource from a user.
     *
     * @example 774****
     *
     * @var string
     */
    public $userAccessId;

    /**
     * @description The operation that you want to perform. Set the value to **RevokeUserPermission**.
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
