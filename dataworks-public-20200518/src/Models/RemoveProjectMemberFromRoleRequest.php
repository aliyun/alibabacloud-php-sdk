<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class RemoveProjectMemberFromRoleRequest extends Model
{
    /**
     * @description The ID of the DataWorks workspace.
     *
     * @example 27
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The role in the DataWorks workspace. You can call the ListProjectRoles operation to query codes of the roles in the workspace.
     *
     * Valid values:
     *
     *   role_project_owner: workspace owner
     *   role_project_admin: workspace administrator
     *   role_project_dev: developer
     *   role_project_pe: O\&M engineer
     *   role_project_deploy: deployment expert
     *   role_project_guest: visitor
     *   role_project_security: security administrator
     *   role_project_tester: experiencer
     *   role_project_erd: model designer
     *
     * @example role_project_guest
     *
     * @var string
     */
    public $roleCode;

    /**
     * @description The ID of the user.
     *
     * @example 1234
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'projectId' => 'ProjectId',
        'roleCode'  => 'RoleCode',
        'userId'    => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->roleCode) {
            $res['RoleCode'] = $this->roleCode;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemoveProjectMemberFromRoleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['RoleCode'])) {
            $model->roleCode = $map['RoleCode'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
