<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adcp\V20220101\Models;

use AlibabaCloud\Tea\Model;

class GrantUserPermissionRequest extends Model
{
    /**
     * @example c102fe5f1ee5d4c87a68121a77d8b****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The entity to which the permissions are granted. A value of `true` indicates that the permissions are granted to a RAM user. A value of `false` indicates that the permissions are granted to a RAM role.
     *
     * @example false
     *
     * @var bool
     */
    public $isRamRole;

    /**
     * @example default
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The predefined role that you want to assign. Valid values:
     *
     *   admin: the administrator role.
     *   dev: the developer role.
     *
     * Enumerated values:
     *
     *   arms-admin
     *
     * <!-- -->
     *
     *   dev
     *
     * <!-- -->
     *
     *   admin
     *
     * <!-- -->
     * @example admin
     *
     * @var string
     */
    public $roleName;

    /**
     * @example cluster
     *
     * @var string
     */
    public $roleType;

    /**
     * @description The ID of the RAM user or RAM role.
     *
     * @example 2176****
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'isRamRole' => 'IsRamRole',
        'namespace' => 'Namespace',
        'roleName'  => 'RoleName',
        'roleType'  => 'RoleType',
        'userId'    => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->isRamRole) {
            $res['IsRamRole'] = $this->isRamRole;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->roleName) {
            $res['RoleName'] = $this->roleName;
        }
        if (null !== $this->roleType) {
            $res['RoleType'] = $this->roleType;
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['IsRamRole'])) {
            $model->isRamRole = $map['IsRamRole'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['RoleName'])) {
            $model->roleName = $map['RoleName'];
        }
        if (isset($map['RoleType'])) {
            $model->roleType = $map['RoleType'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
