<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class UserRole extends Model
{
    /**
     * @var int
     */
    public $grantTime;

    /**
     * @var Role
     */
    public $role;

    /**
     * @var Principal
     */
    public $user;
    protected $_name = [
        'grantTime' => 'GrantTime',
        'role'      => 'Role',
        'user'      => 'User',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->grantTime) {
            $res['GrantTime'] = $this->grantTime;
        }
        if (null !== $this->role) {
            $res['Role'] = null !== $this->role ? $this->role->toMap() : null;
        }
        if (null !== $this->user) {
            $res['User'] = null !== $this->user ? $this->user->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UserRole
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GrantTime'])) {
            $model->grantTime = $map['GrantTime'];
        }
        if (isset($map['Role'])) {
            $model->role = Role::fromMap($map['Role']);
        }
        if (isset($map['User'])) {
            $model->user = Principal::fromMap($map['User']);
        }

        return $model;
    }
}
