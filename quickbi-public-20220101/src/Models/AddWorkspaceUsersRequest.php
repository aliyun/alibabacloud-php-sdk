<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class AddWorkspaceUsersRequest extends Model
{
    /**
     * @description Preset space role ID. Value range:
     * - 25: Space Administrator
     * - 26: Space Developer
     * - 27: Space Analyst
     * - 30: Space Viewer
     *
     * This parameter is required.
     *
     * @example 25
     *
     * @var int
     */
    public $roleId;

    /**
     * @description User ID. This is the UserID for Quick BI, not the Alibaba Cloud UID.
     *
     * - Supports batch parameters, with user IDs separated by commas (,).
     *
     * This parameter is required.
     *
     * @example de4bc5f9429141cc8091cdd1c15b****
     *
     * @var string
     */
    public $userIds;

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
        'userIds' => 'UserIds',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate() {}

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
     * @return AddWorkspaceUsersRequest
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
