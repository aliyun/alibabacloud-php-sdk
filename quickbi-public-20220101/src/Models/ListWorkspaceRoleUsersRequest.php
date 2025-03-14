<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class ListWorkspaceRoleUsersRequest extends Model
{
    /**
     * @description Keyword for the user\\"s nickname.
     *
     * @example 测试pop用户
     *
     * @var string
     */
    public $keyword;

    /**
     * @description Current page number for pagination:
     *
     * - Starting value: 1
     * - Default value: 1
     *
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @description Number of items per page for pagination:
     *
     * - Default value: 10
     * - Maximum value: 1000
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description Workspace role ID, including predefined roles and custom roles:
     *
     * - 25: Workspace Administrator (predefined role)
     * - 26: Developer (predefined role)
     * - 27: Analyst (predefined role)
     * - 30: Viewer (predefined role)
     * - Custom roles: The corresponding role ID for custom roles
     *
     * This parameter is required.
     *
     * @example 25
     *
     * @var int
     */
    public $roleId;

    /**
     * @description Workspace ID.
     *
     * @example 726bee5a-****-43e1-9a8e-b550f0120f35
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'keyword' => 'Keyword',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
        'roleId' => 'RoleId',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->roleId) {
            $res['RoleId'] = $this->roleId;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListWorkspaceRoleUsersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RoleId'])) {
            $model->roleId = $map['RoleId'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
