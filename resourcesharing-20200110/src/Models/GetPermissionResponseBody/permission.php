<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceSharing\V20200110\Models\GetPermissionResponseBody;

use AlibabaCloud\Dara\Model;

class permission extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var bool
     */
    public $defaultPermission;

    /**
     * @var bool
     */
    public $defaultVersion;

    /**
     * @var string
     */
    public $permission;

    /**
     * @var string
     */
    public $permissionName;

    /**
     * @var string
     */
    public $permissionVersion;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'createTime' => 'CreateTime',
        'defaultPermission' => 'DefaultPermission',
        'defaultVersion' => 'DefaultVersion',
        'permission' => 'Permission',
        'permissionName' => 'PermissionName',
        'permissionVersion' => 'PermissionVersion',
        'resourceType' => 'ResourceType',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->defaultPermission) {
            $res['DefaultPermission'] = $this->defaultPermission;
        }

        if (null !== $this->defaultVersion) {
            $res['DefaultVersion'] = $this->defaultVersion;
        }

        if (null !== $this->permission) {
            $res['Permission'] = $this->permission;
        }

        if (null !== $this->permissionName) {
            $res['PermissionName'] = $this->permissionName;
        }

        if (null !== $this->permissionVersion) {
            $res['PermissionVersion'] = $this->permissionVersion;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DefaultPermission'])) {
            $model->defaultPermission = $map['DefaultPermission'];
        }

        if (isset($map['DefaultVersion'])) {
            $model->defaultVersion = $map['DefaultVersion'];
        }

        if (isset($map['Permission'])) {
            $model->permission = $map['Permission'];
        }

        if (isset($map['PermissionName'])) {
            $model->permissionName = $map['PermissionName'];
        }

        if (isset($map['PermissionVersion'])) {
            $model->permissionVersion = $map['PermissionVersion'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
