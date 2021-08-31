<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20210616\Models;

use AlibabaCloud\Tea\Model;

class AssignPermissionsToRoleShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $permissionIdsShrink;

    /**
     * @var string
     */
    public $roleId;

    /**
     * @var string
     */
    public $permissionCodesShrink;

    /**
     * @var string
     */
    public $roleCode;
    protected $_name = [
        'tenantId'              => 'TenantId',
        'permissionIdsShrink'   => 'PermissionIds',
        'roleId'                => 'RoleId',
        'permissionCodesShrink' => 'PermissionCodes',
        'roleCode'              => 'RoleCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->permissionIdsShrink) {
            $res['PermissionIds'] = $this->permissionIdsShrink;
        }
        if (null !== $this->roleId) {
            $res['RoleId'] = $this->roleId;
        }
        if (null !== $this->permissionCodesShrink) {
            $res['PermissionCodes'] = $this->permissionCodesShrink;
        }
        if (null !== $this->roleCode) {
            $res['RoleCode'] = $this->roleCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AssignPermissionsToRoleShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['PermissionIds'])) {
            $model->permissionIdsShrink = $map['PermissionIds'];
        }
        if (isset($map['RoleId'])) {
            $model->roleId = $map['RoleId'];
        }
        if (isset($map['PermissionCodes'])) {
            $model->permissionCodesShrink = $map['PermissionCodes'];
        }
        if (isset($map['RoleCode'])) {
            $model->roleCode = $map['RoleCode'];
        }

        return $model;
    }
}
