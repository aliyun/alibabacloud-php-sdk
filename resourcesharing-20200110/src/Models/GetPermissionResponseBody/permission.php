<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceSharing\V20200110\Models\GetPermissionResponseBody;

use AlibabaCloud\Tea\Model;

class permission extends Model
{
    /**
     * @example 2020-12-07T07:39:01.818Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example true
     *
     * @var bool
     */
    public $defaultPermission;

    /**
     * @example true
     *
     * @var bool
     */
    public $defaultVersion;

    /**
     * @description The update time.
     *
     * @example {"Effect":"Allow","Action":["vpc:DescribeVSwitches","vpc:DescribeVSwitchAttributes"]}
     *
     * @var string
     */
    public $permission;

    /**
     * @description Indicates whether the version is the default version. Valid values:
     *
     *   false: The version is not the default version.
     *   true: The version is the default version.
     *
     * @example AliyunRSDefaultPermissionVSwitch
     *
     * @var string
     */
    public $permissionName;

    /**
     * @description The creation time.
     *
     * @example v1
     *
     * @var string
     */
    public $permissionVersion;

    /**
     * @description Indicates whether the permission is the default permission. Valid values:
     *
     *   false: The permission is not the default permission.
     *   true: The permission is the default permission.
     *
     * @example VSwitch
     *
     * @var string
     */
    public $resourceType;

    /**
     * @example 2020-12-07T07:39:01.818Z
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'createTime'        => 'CreateTime',
        'defaultPermission' => 'DefaultPermission',
        'defaultVersion'    => 'DefaultVersion',
        'permission'        => 'Permission',
        'permissionName'    => 'PermissionName',
        'permissionVersion' => 'PermissionVersion',
        'resourceType'      => 'ResourceType',
        'updateTime'        => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return permission
     */
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
