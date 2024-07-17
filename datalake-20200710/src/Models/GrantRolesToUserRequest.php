<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class GrantRolesToUserRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $roleNames;

    /**
     * @description This parameter is required.
     *
     * @var Principal
     */
    public $user;
    protected $_name = [
        'roleNames' => 'RoleNames',
        'user'      => 'User',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->roleNames) {
            $res['RoleNames'] = $this->roleNames;
        }
        if (null !== $this->user) {
            $res['User'] = null !== $this->user ? $this->user->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GrantRolesToUserRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RoleNames'])) {
            if (!empty($map['RoleNames'])) {
                $model->roleNames = $map['RoleNames'];
            }
        }
        if (isset($map['User'])) {
            $model->user = Principal::fromMap($map['User']);
        }

        return $model;
    }
}
