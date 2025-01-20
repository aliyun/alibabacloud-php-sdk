<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListAuthorizedInstancesForUserResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListAuthorizedInstancesForUserResponseBody\instances\permissionDetail;

class instances extends Model
{
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
    public $host;
    /**
     * @var string
     */
    public $instanceAlias;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var permissionDetail
     */
    public $permissionDetail;
    /**
     * @var string
     */
    public $port;
    /**
     * @var string
     */
    public $userId;
    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'dbType'           => 'DbType',
        'envType'          => 'EnvType',
        'host'             => 'Host',
        'instanceAlias'    => 'InstanceAlias',
        'instanceId'       => 'InstanceId',
        'permissionDetail' => 'PermissionDetail',
        'port'             => 'Port',
        'userId'           => 'UserId',
        'userName'         => 'UserName',
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
        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }

        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }

        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }

        if (null !== $this->instanceAlias) {
            $res['InstanceAlias'] = $this->instanceAlias;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->permissionDetail) {
            $res['PermissionDetail'] = null !== $this->permissionDetail ? $this->permissionDetail->toArray($noStream) : $this->permissionDetail;
        }

        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
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
        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }

        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }

        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }

        if (isset($map['InstanceAlias'])) {
            $model->instanceAlias = $map['InstanceAlias'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['PermissionDetail'])) {
            $model->permissionDetail = permissionDetail::fromMap($map['PermissionDetail']);
        }

        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
