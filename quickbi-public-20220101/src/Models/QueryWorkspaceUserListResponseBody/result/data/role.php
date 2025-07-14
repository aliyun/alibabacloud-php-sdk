<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryWorkspaceUserListResponseBody\result\data;

use AlibabaCloud\Tea\Model;

class role extends Model
{
    /**
     * @description Code corresponding to the preset role.
     *
     * @example role_workspace_admin
     *
     * @var string
     */
    public $roleCode;

    /**
     * @description Preset role ID. Possible values:
     *
     * - 25: Workspace Administrator
     * - 26: Workspace Developer
     * - 27: Workspace Analyst
     * - 30: Workspace Viewer
     *
     * @example 25
     *
     * @var int
     */
    public $roleId;

    /**
     * @description Name of the preset role.
     *
     * @example test
     *
     * @var string
     */
    public $roleName;
    protected $_name = [
        'roleCode' => 'RoleCode',
        'roleId' => 'RoleId',
        'roleName' => 'RoleName',
    ];

    public function validate() {}

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
     * @return role
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
