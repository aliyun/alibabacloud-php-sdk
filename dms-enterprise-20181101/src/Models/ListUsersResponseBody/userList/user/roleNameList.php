<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListUsersResponseBody\userList\user;

use AlibabaCloud\Tea\Model;

class roleNameList extends Model
{
    /**
     * @var string[]
     */
    public $roleNames;
    protected $_name = [
        'roleNames' => 'RoleNames',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return roleNameList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RoleNames'])) {
            if (!empty($map['RoleNames'])) {
                $model->roleNames = $map['RoleNames'];
            }
        }

        return $model;
    }
}
