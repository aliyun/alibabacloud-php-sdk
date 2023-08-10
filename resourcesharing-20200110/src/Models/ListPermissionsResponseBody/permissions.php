<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceSharing\V20200110\Models\ListPermissionsResponseBody;

use AlibabaCloud\Tea\Model;

class permissions extends Model
{
    /**
     * @description The creation time.
     *
     * @example 2020-12-07T07:39:01.818Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description Indicates whether the permission is the default permission. Valid values:
     *
     *   false: The permission is not the default permission.
     *   true: The permission is the default permission.
     *
     * @example true
     *
     * @var bool
     */
    public $defaultPermission;

    /**
     * @description Indicates whether the version is the default version. Valid values:
     *
     *   false: The version is not the default version.
     *   true: The version is the default version.
     *
     * @example true
     *
     * @var bool
     */
    public $defaultVersion;

    /**
     * @description The name of the permission.
     *
     * @example AliyunRSDefaultPermissionVSwitch
     *
     * @var string
     */
    public $permissionName;

    /**
     * @description The version of the permission.
     *
     * @example v1
     *
     * @var string
     */
    public $permissionVersion;

    /**
     * @description The type of the shared resources.
     *
     * For more information about the types of resources that can be shared, see [Services that work with Resource Sharing](~~450526~~).
     * @example VSwitch
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The update time.
     *
     * @example 2020-12-07T07:39:01.818Z
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'createTime'        => 'CreateTime',
        'defaultPermission' => 'DefaultPermission',
        'defaultVersion'    => 'DefaultVersion',
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
     * @return permissions
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
