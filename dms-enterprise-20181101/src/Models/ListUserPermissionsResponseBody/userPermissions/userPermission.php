<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListUserPermissionsResponseBody\userPermissions;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListUserPermissionsResponseBody\userPermissions\userPermission\permDetails;
use AlibabaCloud\Tea\Model;

class userPermission extends Model
{
    /**
     * @var string
     */
    public $dbId;

    /**
     * @var string
     */
    public $tableName;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $schemaName;

    /**
     * @var bool
     */
    public $logic;

    /**
     * @var string
     */
    public $userNickName;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var permDetails
     */
    public $permDetails;

    /**
     * @var string
     */
    public $envType;

    /**
     * @var string
     */
    public $columnName;

    /**
     * @var string
     */
    public $dbType;

    /**
     * @var string
     */
    public $dsType;

    /**
     * @var string
     */
    public $tableId;

    /**
     * @var string
     */
    public $searchName;

    /**
     * @var string
     */
    public $alias;
    protected $_name = [
        'dbId'         => 'DbId',
        'tableName'    => 'TableName',
        'userId'       => 'UserId',
        'schemaName'   => 'SchemaName',
        'logic'        => 'Logic',
        'userNickName' => 'UserNickName',
        'instanceId'   => 'InstanceId',
        'permDetails'  => 'PermDetails',
        'envType'      => 'EnvType',
        'columnName'   => 'ColumnName',
        'dbType'       => 'DbType',
        'dsType'       => 'DsType',
        'tableId'      => 'TableId',
        'searchName'   => 'SearchName',
        'alias'        => 'Alias',
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
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->schemaName) {
            $res['SchemaName'] = $this->schemaName;
        }
        if (null !== $this->logic) {
            $res['Logic'] = $this->logic;
        }
        if (null !== $this->userNickName) {
            $res['UserNickName'] = $this->userNickName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->permDetails) {
            $res['PermDetails'] = null !== $this->permDetails ? $this->permDetails->toMap() : null;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->columnName) {
            $res['ColumnName'] = $this->columnName;
        }
        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }
        if (null !== $this->dsType) {
            $res['DsType'] = $this->dsType;
        }
        if (null !== $this->tableId) {
            $res['TableId'] = $this->tableId;
        }
        if (null !== $this->searchName) {
            $res['SearchName'] = $this->searchName;
        }
        if (null !== $this->alias) {
            $res['Alias'] = $this->alias;
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
        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['SchemaName'])) {
            $model->schemaName = $map['SchemaName'];
        }
        if (isset($map['Logic'])) {
            $model->logic = $map['Logic'];
        }
        if (isset($map['UserNickName'])) {
            $model->userNickName = $map['UserNickName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PermDetails'])) {
            $model->permDetails = permDetails::fromMap($map['PermDetails']);
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['ColumnName'])) {
            $model->columnName = $map['ColumnName'];
        }
        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }
        if (isset($map['DsType'])) {
            $model->dsType = $map['DsType'];
        }
        if (isset($map['TableId'])) {
            $model->tableId = $map['TableId'];
        }
        if (isset($map['SearchName'])) {
            $model->searchName = $map['SearchName'];
        }
        if (isset($map['Alias'])) {
            $model->alias = $map['Alias'];
        }

        return $model;
    }
}
