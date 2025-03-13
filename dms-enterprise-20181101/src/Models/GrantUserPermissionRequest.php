<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class GrantUserPermissionRequest extends Model
{
    /**
     * @description The ID of the database. You can call the [ListDatabases](https://help.aliyun.com/document_detail/141873.html) operation to query the ID of a physical database and the [ListLogicDatabases](https://help.aliyun.com/document_detail/141874.html) operation to query the ID of a logical database.
     *
     * >  The value of the DatabaseId parameter is that of the DbId parameter.
     *
     * @example 1***
     *
     * @var string
     */
    public $dbId;

    /**
     * @description The permissions on a specific type of object that you want to grant to the user. Valid values:
     *
     *   INSTANCE: permissions on instances
     *   DATABASE: permissions on physical databases
     *   LOGIC_DATABASE: permissions on logical databases
     *   TABLE: permissions on physical tables
     *   LOGIC_TABLE: permissions on logical tables
     *
     * This parameter is required.
     *
     * @example DATABASE
     *
     * @var string
     */
    public $dsType;

    /**
     * @description The time when the permissions expire.
     *
     * This parameter is required.
     *
     * @example 2021-12-12 00:00:00
     *
     * @var string
     */
    public $expireDate;

    /**
     * @description The ID of the instance. You must specify this parameter if you grant permissions on an instance to the user. You can call the [ListInstances](https://help.aliyun.com/document_detail/141936.html) or [GetInstance](https://help.aliyun.com/document_detail/141567.html) operation to query the ID of the instance.
     *
     * @example 174****
     *
     * @var int
     */
    public $instanceId;

    /**
     * @description Specifies whether the database is a logical database. You must specify this parameter if you grant permissions on a database to the user. Valid values:
     *
     *   true: The database is a logical database.
     *   false: The database is a physical database.
     *
     * @example false
     *
     * @var bool
     */
    public $logic;

    /**
     * @description The permission type. Separate multiple permission types with commas (,). Valid values:
     *
     *   **QUERY**: the query permissions
     *   **EXPORT**: the export permissions
     *   **CORRECT**: the change permissions
     *   **LOGIN**: the logon permissions
     *   **PERF**: the query permissions on the performance details of the instance
     *
     * This parameter is required.
     *
     * @example QUERY
     *
     * @var string
     */
    public $permTypes;

    /**
     * @description The ID of the table. You must specify this parameter if you grant permissions on a table to the user. You can call the [ListTables](https://help.aliyun.com/document_detail/141878.html) operation to query the table ID.
     *
     * @example 132***
     *
     * @var string
     */
    public $tableId;

    /**
     * @description The name of the table. You must specify this parameter if you grant permissions on a table to the user.
     *
     * @example table_name
     *
     * @var string
     */
    public $tableName;

    /**
     * @description The ID of the tenant.
     *
     * >  To view the ID of the tenant, move the pointer over the profile picture in the upper-right corner of the Data Management (DMS) console. For more information, see the "View information about the current tenant" section of the [Manage DMS tenants](https://help.aliyun.com/document_detail/181330.html) topic.
     *
     * @example 3***
     *
     * @var int
     */
    public $tid;

    /**
     * @description The ID of the user. You can call the [GetUser](https://help.aliyun.com/document_detail/147098.html) or [ListUsers](https://help.aliyun.com/document_detail/141938.html) operation to query the ID of the user.
     *
     * >  The user ID is different from the ID of your Alibaba Cloud account.
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
        'expireDate' => 'ExpireDate',
        'instanceId' => 'InstanceId',
        'logic' => 'Logic',
        'permTypes' => 'PermTypes',
        'tableId' => 'TableId',
        'tableName' => 'TableName',
        'tid' => 'Tid',
        'userId' => 'UserId',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }
        if (null !== $this->dsType) {
            $res['DsType'] = $this->dsType;
        }
        if (null !== $this->expireDate) {
            $res['ExpireDate'] = $this->expireDate;
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
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GrantUserPermissionRequest
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
        if (isset($map['ExpireDate'])) {
            $model->expireDate = $map['ExpireDate'];
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
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
