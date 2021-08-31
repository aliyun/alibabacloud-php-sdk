<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20210616\Models;

use AlibabaCloud\Tea\Model;

class RemovePermissionsOfRoleShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $roleId;

    /**
     * @var string
     */
    public $roleCode;

    /**
     * @var string
     */
    public $permissionIdsShrink;

    /**
     * @var string
     */
    public $permissionCodesShrink;
    protected $_name = [
        'tenantId'              => 'TenantId',
        'roleId'                => 'RoleId',
        'roleCode'              => 'RoleCode',
        'permissionIdsShrink'   => 'PermissionIds',
        'permissionCodesShrink' => 'PermissionCodes',
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
        if (null !== $this->roleId) {
            $res['RoleId'] = $this->roleId;
        }
        if (null !== $this->roleCode) {
            $res['RoleCode'] = $this->roleCode;
        }
        if (null !== $this->permissionIdsShrink) {
            $res['PermissionIds'] = $this->permissionIdsShrink;
        }
        if (null !== $this->permissionCodesShrink) {
            $res['PermissionCodes'] = $this->permissionCodesShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemovePermissionsOfRoleShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['RoleId'])) {
            $model->roleId = $map['RoleId'];
        }
        if (isset($map['RoleCode'])) {
            $model->roleCode = $map['RoleCode'];
        }
        if (isset($map['PermissionIds'])) {
            $model->permissionIdsShrink = $map['PermissionIds'];
        }
        if (isset($map['PermissionCodes'])) {
            $model->permissionCodesShrink = $map['PermissionCodes'];
        }

        return $model;
    }
}
