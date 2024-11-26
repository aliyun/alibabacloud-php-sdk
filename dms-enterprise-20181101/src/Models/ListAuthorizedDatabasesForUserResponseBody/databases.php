<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListAuthorizedDatabasesForUserResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListAuthorizedDatabasesForUserResponseBody\databases\permissionDetail;
use AlibabaCloud\Tea\Model;

class databases extends Model
{
    /**
     * @example 254****
     *
     * @var string
     */
    public $dbId;

    /**
     * @example MYSQL
     *
     * @var string
     */
    public $dbType;

    /**
     * @example product
     *
     * @var string
     */
    public $envType;

    /**
     * @example 235****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example false
     *
     * @var bool
     */
    public $logic;

    /**
     * @var permissionDetail
     */
    public $permissionDetail;

    /**
     * @example poc_testdb
     *
     * @var string
     */
    public $schemaName;

    /**
     * @example poc
     *
     * @var string
     */
    public $searchName;

    /**
     * @example 51****
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'dbId'             => 'DbId',
        'dbType'           => 'DbType',
        'envType'          => 'EnvType',
        'instanceId'       => 'InstanceId',
        'logic'            => 'Logic',
        'permissionDetail' => 'PermissionDetail',
        'schemaName'       => 'SchemaName',
        'searchName'       => 'SearchName',
        'userId'           => 'UserId',
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
        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->logic) {
            $res['Logic'] = $this->logic;
        }
        if (null !== $this->permissionDetail) {
            $res['PermissionDetail'] = null !== $this->permissionDetail ? $this->permissionDetail->toMap() : null;
        }
        if (null !== $this->schemaName) {
            $res['SchemaName'] = $this->schemaName;
        }
        if (null !== $this->searchName) {
            $res['SearchName'] = $this->searchName;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return databases
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }
        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Logic'])) {
            $model->logic = $map['Logic'];
        }
        if (isset($map['PermissionDetail'])) {
            $model->permissionDetail = permissionDetail::fromMap($map['PermissionDetail']);
        }
        if (isset($map['SchemaName'])) {
            $model->schemaName = $map['SchemaName'];
        }
        if (isset($map['SearchName'])) {
            $model->searchName = $map['SearchName'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
