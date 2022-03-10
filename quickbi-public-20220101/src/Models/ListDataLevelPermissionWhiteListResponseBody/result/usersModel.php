<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\ListDataLevelPermissionWhiteListResponseBody\result;

use AlibabaCloud\Tea\Model;

class usersModel extends Model
{
    /**
     * @var string[]
     */
    public $userGroups;

    /**
     * @var string[]
     */
    public $users;
    protected $_name = [
        'userGroups' => 'UserGroups',
        'users'      => 'Users',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userGroups) {
            $res['UserGroups'] = $this->userGroups;
        }
        if (null !== $this->users) {
            $res['Users'] = $this->users;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return usersModel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserGroups'])) {
            if (!empty($map['UserGroups'])) {
                $model->userGroups = $map['UserGroups'];
            }
        }
        if (isset($map['Users'])) {
            if (!empty($map['Users'])) {
                $model->users = $map['Users'];
            }
        }

        return $model;
    }
}
