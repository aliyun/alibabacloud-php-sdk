<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20210616\Models;

use AlibabaCloud\Tea\Model;

class AssignPermissionsToRoleRequest extends Model
{
    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var mixed[]
     */
    public $permissionIds;

    /**
     * @var string
     */
    public $roleId;

    /**
     * @var mixed[]
     */
    public $permissionCodes;

    /**
     * @var string
     */
    public $roleCode;
    protected $_name = [
        'tenantId'        => 'TenantId',
        'permissionIds'   => 'PermissionIds',
        'roleId'          => 'RoleId',
        'permissionCodes' => 'PermissionCodes',
        'roleCode'        => 'RoleCode',
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
        if (null !== $this->permissionIds) {
            $res['PermissionIds'] = $this->permissionIds;
        }
        if (null !== $this->roleId) {
            $res['RoleId'] = $this->roleId;
        }
        if (null !== $this->permissionCodes) {
            $res['PermissionCodes'] = $this->permissionCodes;
        }
        if (null !== $this->roleCode) {
            $res['RoleCode'] = $this->roleCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AssignPermissionsToRoleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['PermissionIds'])) {
            $model->permissionIds = $map['PermissionIds'];
        }
        if (isset($map['RoleId'])) {
            $model->roleId = $map['RoleId'];
        }
        if (isset($map['PermissionCodes'])) {
            $model->permissionCodes = $map['PermissionCodes'];
        }
        if (isset($map['RoleCode'])) {
            $model->roleCode = $map['RoleCode'];
        }

        return $model;
    }
}
