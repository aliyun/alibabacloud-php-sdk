<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class PrincipalPrivilegeSet extends Model
{
    /**
     * @var PrivilegeGrantInfo[][]
     */
    public $groupPrivileges;

    /**
     * @var PrivilegeGrantInfo[][]
     */
    public $rolePrivileges;

    /**
     * @var PrivilegeGrantInfo[][]
     */
    public $userPrivileges;
    protected $_name = [
        'groupPrivileges' => 'GroupPrivileges',
        'rolePrivileges'  => 'RolePrivileges',
        'userPrivileges'  => 'UserPrivileges',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupPrivileges) {
            $res['GroupPrivileges'] = $this->groupPrivileges;
        }
        if (null !== $this->rolePrivileges) {
            $res['RolePrivileges'] = $this->rolePrivileges;
        }
        if (null !== $this->userPrivileges) {
            $res['UserPrivileges'] = $this->userPrivileges;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PrincipalPrivilegeSet
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupPrivileges'])) {
            $model->groupPrivileges = $map['GroupPrivileges'];
        }
        if (isset($map['RolePrivileges'])) {
            $model->rolePrivileges = $map['RolePrivileges'];
        }
        if (isset($map['UserPrivileges'])) {
            $model->userPrivileges = $map['UserPrivileges'];
        }

        return $model;
    }
}
