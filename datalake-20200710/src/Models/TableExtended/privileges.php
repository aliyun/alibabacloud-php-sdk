<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models\TableExtended;

use AlibabaCloud\SDK\DataLake\V20200710\Models\TableExtendedPrivilegesGroupPrivilegesValue;
use AlibabaCloud\SDK\DataLake\V20200710\Models\TableExtendedPrivilegesRolePrivilegesValue;
use AlibabaCloud\SDK\DataLake\V20200710\Models\TableExtendedPrivilegesUserPrivilegesValue;
use AlibabaCloud\Tea\Model;

class privileges extends Model
{
    /**
     * @var TableExtendedPrivilegesRolePrivilegesValue[][]
     */
    public $rolePrivileges;

    /**
     * @var TableExtendedPrivilegesUserPrivilegesValue[][]
     */
    public $userPrivileges;

    /**
     * @var TableExtendedPrivilegesGroupPrivilegesValue[][]
     */
    public $groupPrivileges;
    protected $_name = [
        'rolePrivileges'  => 'RolePrivileges',
        'userPrivileges'  => 'UserPrivileges',
        'groupPrivileges' => 'groupPrivileges',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->rolePrivileges) {
            $res['RolePrivileges'] = $this->rolePrivileges;
        }
        if (null !== $this->userPrivileges) {
            $res['UserPrivileges'] = $this->userPrivileges;
        }
        if (null !== $this->groupPrivileges) {
            $res['groupPrivileges'] = $this->groupPrivileges;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return privileges
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RolePrivileges'])) {
            $model->rolePrivileges = $map['RolePrivileges'];
        }
        if (isset($map['UserPrivileges'])) {
            $model->userPrivileges = $map['UserPrivileges'];
        }
        if (isset($map['groupPrivileges'])) {
            $model->groupPrivileges = $map['groupPrivileges'];
        }

        return $model;
    }
}
