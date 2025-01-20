<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListAuthorizedDatabasesForUserResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListAuthorizedDatabasesForUserResponseBody\databases\permissionDetail;

class databases extends Model
{
    /**
     * @var string
     */
    public $dbId;
    /**
     * @var string
     */
    public $dbType;
    /**
     * @var string
     */
    public $envType;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var bool
     */
    public $logic;
    /**
     * @var permissionDetail
     */
    public $permissionDetail;
    /**
     * @var string
     */
    public $schemaName;
    /**
     * @var string
     */
    public $searchName;
    /**
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
        if (null !== $this->permissionDetail) {
            $this->permissionDetail->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['PermissionDetail'] = null !== $this->permissionDetail ? $this->permissionDetail->toArray($noStream) : $this->permissionDetail;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
