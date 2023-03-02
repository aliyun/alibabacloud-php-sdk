<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListProjectMembersResponseBody\data\projectMemberList;

use AlibabaCloud\Tea\Model;

class projectRoleList extends Model
{
    /**
     * @description The code of the role.
     *
     * DataWorks provides built-in roles and allows you to create custom roles based on your business requirements. For more information about roles, see [Overview of users, roles, and permissions](~~295463~~).
     * @example role_project_guest
     *
     * @var string
     */
    public $projectRoleCode;

    /**
     * @description The ID of the role.
     *
     * @example 1
     *
     * @var int
     */
    public $projectRoleId;

    /**
     * @description The name of the role.
     *
     * DataWorks provides built-in roles and allows you to create custom roles based on your business requirements. For more information about roles, see [Overview of users, roles, and permissions](~~295463~~).
     * @var string
     */
    public $projectRoleName;

    /**
     * @description The type of the role. Valid values:
     *
     *   0: SYSTEM, which indicates that the role is a built-in role.
     *   2: USER_CUSTOM, which indicates that the role is a custom role.
     *
     * @example 0
     *
     * @var string
     */
    public $projectRoleType;
    protected $_name = [
        'projectRoleCode' => 'ProjectRoleCode',
        'projectRoleId'   => 'ProjectRoleId',
        'projectRoleName' => 'ProjectRoleName',
        'projectRoleType' => 'ProjectRoleType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectRoleCode) {
            $res['ProjectRoleCode'] = $this->projectRoleCode;
        }
        if (null !== $this->projectRoleId) {
            $res['ProjectRoleId'] = $this->projectRoleId;
        }
        if (null !== $this->projectRoleName) {
            $res['ProjectRoleName'] = $this->projectRoleName;
        }
        if (null !== $this->projectRoleType) {
            $res['ProjectRoleType'] = $this->projectRoleType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return projectRoleList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectRoleCode'])) {
            $model->projectRoleCode = $map['ProjectRoleCode'];
        }
        if (isset($map['ProjectRoleId'])) {
            $model->projectRoleId = $map['ProjectRoleId'];
        }
        if (isset($map['ProjectRoleName'])) {
            $model->projectRoleName = $map['ProjectRoleName'];
        }
        if (isset($map['ProjectRoleType'])) {
            $model->projectRoleType = $map['ProjectRoleType'];
        }

        return $model;
    }
}
