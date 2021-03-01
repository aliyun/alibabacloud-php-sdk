<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class AuthorizeRoleRequest extends Model
{
    /**
     * @var string
     */
    public $targetUserId;

    /**
     * @var string
     */
    public $roleIds;
    protected $_name = [
        'targetUserId' => 'TargetUserId',
        'roleIds'      => 'RoleIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->targetUserId) {
            $res['TargetUserId'] = $this->targetUserId;
        }
        if (null !== $this->roleIds) {
            $res['RoleIds'] = $this->roleIds;
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
        if (isset($map['TargetUserId'])) {
            $model->targetUserId = $map['TargetUserId'];
        }
        if (isset($map['RoleIds'])) {
            $model->roleIds = $map['RoleIds'];
        }

        return $model;
    }
}
