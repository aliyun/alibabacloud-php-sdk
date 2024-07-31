<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class AddProjectMemberToRoleRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. We recommend that you set this parameter to a UUID. This parameter is used to uniquely identify the API operation call.
     *
     * @example 1AFAE64E-D1BE-432B-A9*****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The DataWorks workspace ID. You can call the [ListProjects](https://help.aliyun.com/document_detail/2780068.html) operation to query the ID.
     *
     * This parameter is required.
     * @example 27
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The code of the role that you want to assign to a member of the DataWorks workspace. You can call the [ListProjectRoles](https://help.aliyun.com/document_detail/2780079.html) operation to query the codes of all roles in a DataWorks workspace.
     *
     * This parameter is required.
     * @example role_project_guest
     *
     * @var string
     */
    public $roleCode;

    /**
     * @description The Alibaba Cloud account ID. You can log on to the [DataWorks console](https://workbench.data.aliyun.com/console) and move the pointer over the profile picture in the upper-right corner to view the ID.
     *
     * This parameter is required.
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
