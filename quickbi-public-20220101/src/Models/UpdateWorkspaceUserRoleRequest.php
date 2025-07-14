<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class UpdateWorkspaceUserRoleRequest extends Model
{
    /**
     * @description Preset workspace role ID, existing roles will be overwritten. Value range:
     * - 25: Workspace Administrator
     * - 26: Workspace Developer
     * - 27: Workspace Analyst
     * - 30: Workspace Viewer
     *
     * @example 25
     *
     * @deprecated
     *
     * @var int
     */
    public $roleId;

    /**
     * @description Multiple workspace role IDs, separated by commas. If this value is provided, it takes precedence.
     * >Notice: roleId and roleIds cannot both be empty
     *
     * @example 25,26
     *
     * @var string
     */
    public $roleIds;

    /**
     * @description Quick BI user ID.
     *
     * This parameter is required.
     *
     * @example f5698bedeb384b1986afccd9e434****
     *
     * @var string
     */
    public $userId;

    /**
     * @description Workspace ID.
     *
     * This parameter is required.
     *
     * @example 95296e95-ca89-4c7d-8af9-dedf0ad0****
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'roleId' => 'RoleId',
        'roleIds' => 'RoleIds',
        'userId' => 'UserId',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->roleId) {
            $res['RoleId'] = $this->roleId;
        }
        if (null !== $this->roleIds) {
            $res['RoleIds'] = $this->roleIds;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateWorkspaceUserRoleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RoleId'])) {
            $model->roleId = $map['RoleId'];
        }
        if (isset($map['RoleIds'])) {
            $model->roleIds = $map['RoleIds'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
