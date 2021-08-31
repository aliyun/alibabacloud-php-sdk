<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20210616\Models;

use AlibabaCloud\Tea\Model;

class RemovePermissionsOfRoleRequest extends Model
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
     * @var mixed[]
     */
    public $permissionIds;

    /**
     * @var mixed[]
     */
    public $permissionCodes;
    protected $_name = [
        'tenantId'        => 'TenantId',
        'roleId'          => 'RoleId',
        'roleCode'        => 'RoleCode',
        'permissionIds'   => 'PermissionIds',
        'permissionCodes' => 'PermissionCodes',
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
        if (null !== $this->permissionIds) {
            $res['PermissionIds'] = $this->permissionIds;
        }
        if (null !== $this->permissionCodes) {
            $res['PermissionCodes'] = $this->permissionCodes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemovePermissionsOfRoleRequest
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
            $model->permissionIds = $map['PermissionIds'];
        }
        if (isset($map['PermissionCodes'])) {
            $model->permissionCodes = $map['PermissionCodes'];
        }

        return $model;
    }
}
