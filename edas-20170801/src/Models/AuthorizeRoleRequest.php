<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class AuthorizeRoleRequest extends Model
{
    /**
     * @description The ID of the role to be assigned. If you want to assign multiple roles to the specified RAM user, separate the IDs of the roles with semicolons (;). If you leave this parameter empty, the roles assigned to the specified RAM user are revoked.
     *
     * @example 1;2
     *
     * @var string
     */
    public $roleIds;

    /**
     * @description The ID of the RAM user to which you want to assign the roles.
     *
     * @example test@133******
     *
     * @var string
     */
    public $targetUserId;
    protected $_name = [
        'roleIds'      => 'RoleIds',
        'targetUserId' => 'TargetUserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->roleIds) {
            $res['RoleIds'] = $this->roleIds;
        }
        if (null !== $this->targetUserId) {
            $res['TargetUserId'] = $this->targetUserId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AuthorizeRoleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RoleIds'])) {
            $model->roleIds = $map['RoleIds'];
        }
        if (isset($map['TargetUserId'])) {
            $model->targetUserId = $map['TargetUserId'];
        }

        return $model;
    }
}
