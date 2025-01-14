<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class GrantMemberProjectRolesShrinkRequest extends Model
{
    /**
     * @description The DataWorks workspace ID. You can log on to the [DataWorks console](https://workbench.data.aliyun.com/console) and go to the Workspace page to query the ID.
     *
     * This parameter is required.
     * @example 105149
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The codes of the roles in the workspace. You can call the [ListProjectRoles](https://help.aliyun.com/document_detail/2853930.html) operation to query the codes of all roles in the workspace.
     *
     * This parameter is required.
     * @var string
     */
    public $roleCodesShrink;

    /**
     * @description The DataWorks workspace ID. You can log on to the [DataWorks console](https://dataworks.console.aliyun.com/product/ms_menu), choose More > Management Center in the left-side navigation pane, select the desired workspace on the Management Center page, and then click Go to Management Center. In the left-side navigation pane of the SettingCenter page, click Tenant Members and Roles. On the Tenant Members and Roles page, view the IDs of the accounts used by the members in the workspace.
     *
     * This parameter is required.
     * @example 123422344899
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'projectId'       => 'ProjectId',
        'roleCodesShrink' => 'RoleCodes',
        'userId'          => 'UserId',
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
        if (null !== $this->roleCodesShrink) {
            $res['RoleCodes'] = $this->roleCodesShrink;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GrantMemberProjectRolesShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['RoleCodes'])) {
            $model->roleCodesShrink = $map['RoleCodes'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
