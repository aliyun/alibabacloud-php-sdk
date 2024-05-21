<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class UpdateWorkspaceUsersRoleRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 25
     *
     * @var int
     */
    public $roleId;

    /**
     * @description This parameter is required.
     *
     * @example 136516262323****,124498444445****
     *
     * @var string
     */
    public $userIds;

    /**
     * @description This parameter is required.
     *
     * @example 95296e95-ca89-4c7d-8af9-dedf0ad0****
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'roleId'      => 'RoleId',
        'userIds'     => 'UserIds',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->roleId) {
            $res['RoleId'] = $this->roleId;
        }
        if (null !== $this->userIds) {
            $res['UserIds'] = $this->userIds;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateWorkspaceUsersRoleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RoleId'])) {
            $model->roleId = $map['RoleId'];
        }
        if (isset($map['UserIds'])) {
            $model->userIds = $map['UserIds'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
