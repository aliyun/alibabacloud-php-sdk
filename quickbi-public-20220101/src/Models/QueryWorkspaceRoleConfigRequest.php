<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class QueryWorkspaceRoleConfigRequest extends Model
{
    /**
     * @description Workspace role ID, including predefined roles and custom roles:
     *
     * - 25: Workspace Administrator (predefined role)
     * - 26: Developer (predefined role)
     * - 27: Analyst (predefined role)
     * - 30: Viewer (predefined role)
     * - Custom role: The corresponding role ID for the custom role
     *
     * This parameter is required.
     *
     * @example 25
     *
     * @var int
     */
    public $roleId;
    protected $_name = [
        'roleId' => 'RoleId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->roleId) {
            $res['RoleId'] = $this->roleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryWorkspaceRoleConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RoleId'])) {
            $model->roleId = $map['RoleId'];
        }

        return $model;
    }
}
