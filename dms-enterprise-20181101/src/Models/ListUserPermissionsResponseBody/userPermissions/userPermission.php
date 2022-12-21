<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListUserPermissionsResponseBody\userPermissions;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListUserPermissionsResponseBody\userPermissions\userPermission\permDetails;
use AlibabaCloud\Tea\Model;

class userPermission extends Model
{
    /**
     * @description The alias of the instance.
     *
     * @example instance_alias
     *
     * @var string
     */
    public $alias;

    /**
     * @description The name of the field.
     *
     * @example column_name
     *
     * @var string
     */
    public $columnName;

    /**
     * @description The ID of the database.
     *
     * @example 1860****
     *
     * @var string
     */
    public $dbId;

    /**
     * @description The type of the database. For more information about the valid values of this parameter, see [DbType parameter](https://www.alibabacloud.com/help/en/data-management-service/latest/dbtype-parameter).
     *
     * @example polardb
     *
     * @var string
     */
    public $dbType;

    /**
     * @description The permissions on a specific type of objects that are granted to the user. Valid values:
     *
     * - LOGIC_TABLE: permissions on logical tables
     * @example DATABASE
     *
     * @var string
     */
    public $dsType;

    /**
     * @description The type of the environment to which the database belongs. Valid values:
     *
     * - stag: STAG environment
     * @example dev
     *
     * @var string
     */
    public $envType;

    /**
     * @description The endpoint that is used to connect the database.
     *
     * @example rm-bp144d5ky4l4r****
     *
     * @var string
     */
    public $host;

    /**
     * @description The ID of the instance.
     *
     * @example 174****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description Indicates whether the database is a logical database. Valid values:
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
     * @description The details of permissions.
     *
     * @var permDetails
     */
    public $permDetails;

    /**
     * @description The port that is used to connect to the instance.
     *
     * @example 3306
     *
     * @var int
     */
    public $port;

    /**
     * @description The name of the database.
     *
     * @example test_db
     *
     * @var string
     */
    public $schemaName;

    /**
     * @description The name that is used to search for the database.
     *
     * @example test_db@xxx:3306
     *
     * @var string
     */
    public $searchName;

    /**
     * @description The ID of the table.
     *
     * @example 13434
     *
     * @var string
     */
    public $tableId;

    /**
     * @description The name of the table.
     *
     * @example test_table
     *
     * @var string
     */
    public $tableName;

    /**
     * @description The ID of the user.
     *
     * @example 51****
     *
     * @var string
     */
    public $userId;

    /**
     * @description The nickname of the user.
     *
     * @example nick_name
     *
     * @var string
     */
    public $userNickName;
    protected $_name = [
        'alias'        => 'Alias',
        'columnName'   => 'ColumnName',
        'dbId'         => 'DbId',
        'dbType'       => 'DbType',
        'dsType'       => 'DsType',
        'envType'      => 'EnvType',
        'host'         => 'Host',
        'instanceId'   => 'InstanceId',
        'logic'        => 'Logic',
        'permDetails'  => 'PermDetails',
        'port'         => 'Port',
        'schemaName'   => 'SchemaName',
        'searchName'   => 'SearchName',
        'tableId'      => 'TableId',
        'tableName'    => 'TableName',
        'userId'       => 'UserId',
        'userNickName' => 'UserNickName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alias) {
            $res['Alias'] = $this->alias;
        }
        if (null !== $this->columnName) {
            $res['ColumnName'] = $this->columnName;
        }
        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }
        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }
        if (null !== $this->dsType) {
            $res['DsType'] = $this->dsType;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->logic) {
            $res['Logic'] = $this->logic;
        }
        if (null !== $this->permDetails) {
            $res['PermDetails'] = null !== $this->permDetails ? $this->permDetails->toMap() : null;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->schemaName) {
            $res['SchemaName'] = $this->schemaName;
        }
        if (null !== $this->searchName) {
            $res['SearchName'] = $this->searchName;
        }
        if (null !== $this->tableId) {
            $res['TableId'] = $this->tableId;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userNickName) {
            $res['UserNickName'] = $this->userNickName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userPermission
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Alias'])) {
            $model->alias = $map['Alias'];
        }
        if (isset($map['ColumnName'])) {
            $model->columnName = $map['ColumnName'];
        }
        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }
        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }
        if (isset($map['DsType'])) {
            $model->dsType = $map['DsType'];
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Logic'])) {
            $model->logic = $map['Logic'];
        }
        if (isset($map['PermDetails'])) {
            $model->permDetails = permDetails::fromMap($map['PermDetails']);
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['SchemaName'])) {
            $model->schemaName = $map['SchemaName'];
        }
        if (isset($map['SearchName'])) {
            $model->searchName = $map['SearchName'];
        }
        if (isset($map['TableId'])) {
            $model->tableId = $map['TableId'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserNickName'])) {
            $model->userNickName = $map['UserNickName'];
        }

        return $model;
    }
}
