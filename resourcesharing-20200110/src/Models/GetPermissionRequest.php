<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceSharing\V20200110\Models;

use AlibabaCloud\Tea\Model;

class GetPermissionRequest extends Model
{
    /**
     * @description The name of the permission.
     *
     * This parameter is required.
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
    protected $_name = [
        'permissionName'    => 'PermissionName',
        'permissionVersion' => 'PermissionVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->permissionName) {
            $res['PermissionName'] = $this->permissionName;
        }
        if (null !== $this->permissionVersion) {
            $res['PermissionVersion'] = $this->permissionVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPermissionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PermissionName'])) {
            $model->permissionName = $map['PermissionName'];
        }
        if (isset($map['PermissionVersion'])) {
            $model->permissionVersion = $map['PermissionVersion'];
        }

        return $model;
    }
}
