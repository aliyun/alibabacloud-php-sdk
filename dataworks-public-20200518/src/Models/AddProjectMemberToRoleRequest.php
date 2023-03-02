<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class AddProjectMemberToRoleRequest extends Model
{
    /**
     * @description The client token. It is a field with the idempotence property. We recommend that you use a universally unique identifier (UUID). This parameter is used to uniquely identify the API operation call.
     *
     * @example 1AFAE64E-D1BE-432B-A9*****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The ID of the DataWorks workspace. You can call the [ListProjects](~~178393~~) operation to query the ID.
     *
     * @example 27
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The code of the role that you want to assign to a member of a DataWorks workspace. You can call the [ListProjectRoles](~~178228~~) operation to query the code of all roles in a DataWorks workspace.
     *
     * @example role_project_guest
     *
     * @var string
     */
    public $roleCode;

    /**
     * @description The ID of your Alibaba Cloud account. To view the ID, log on to [the DataWorks console](https://workbench.data.aliyun.com/console) and move the pointer over the profile picture in the upper-right corner.
     *
     * @example 1234
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'projectId'   => 'ProjectId',
        'roleCode'    => 'RoleCode',
        'userId'      => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
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
     * @return AddProjectMemberToRoleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
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
