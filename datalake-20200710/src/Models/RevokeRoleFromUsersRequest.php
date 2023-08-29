<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class RevokeRoleFromUsersRequest extends Model
{
    /**
     * @example test_role_3
     *
     * @var string
     */
    public $roleName;

    /**
     * @var Principal[]
     */
    public $users;
    protected $_name = [
        'roleName' => 'RoleName',
        'users'    => 'Users',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->roleName) {
            $res['RoleName'] = $this->roleName;
        }
        if (null !== $this->users) {
            $res['Users'] = [];
            if (null !== $this->users && \is_array($this->users)) {
                $n = 0;
                foreach ($this->users as $item) {
                    $res['Users'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RevokeRoleFromUsersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RoleName'])) {
            $model->roleName = $map['RoleName'];
        }
        if (isset($map['Users'])) {
            if (!empty($map['Users'])) {
                $model->users = [];
                $n            = 0;
                foreach ($map['Users'] as $item) {
                    $model->users[$n++] = null !== $item ? Principal::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
