<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryUserRoleInfoInWorkspaceResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example role_workspace_admin
     *
     * @var string
     */
    public $roleCode;

    /**
     * @example 25
     *
     * @var int
     */
    public $roleId;

    /**
     * @var string
     */
    public $roleName;
    protected $_name = [
        'roleCode' => 'RoleCode',
        'roleId'   => 'RoleId',
        'roleName' => 'RoleName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->roleCode) {
            $res['RoleCode'] = $this->roleCode;
        }
        if (null !== $this->roleId) {
            $res['RoleId'] = $this->roleId;
        }
        if (null !== $this->roleName) {
            $res['RoleName'] = $this->roleName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RoleCode'])) {
            $model->roleCode = $map['RoleCode'];
        }
        if (isset($map['RoleId'])) {
            $model->roleId = $map['RoleId'];
        }
        if (isset($map['RoleName'])) {
            $model->roleName = $map['RoleName'];
        }

        return $model;
    }
}
