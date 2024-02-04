<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeDatabasesResponseBody\databases;

use AlibabaCloud\Tea\Model;

class users extends Model
{
    /**
     * @description If you have granted custom privileges on the database, this parameter indicates the custom privileges, separated by commas (,). Otherwise, no data is returned for this parameter.
     *
     * @example select,delete,update
     *
     * @var string
     */
    public $privileges;

    /**
     * @description The role of the account.
     * - DML: a role that has the DML privileges such as SELECT, INSERT, UPDATE, DELETE, and SHOW VIEW.
     * @example ReadOnly
     *
     * @var string
     */
    public $role;

    /**
     * @description The name of the account.
     *
     * @example user_pay_ro
     *
     * @var string
     */
    public $userName;

    /**
     * @description The type of the account. Valid values:  - Admin: the super administrator account. - Normal: a general account.
     *
     * @example Normal
     *
     * @var string
     */
    public $userType;
    protected $_name = [
        'privileges' => 'Privileges',
        'role'       => 'Role',
        'userName'   => 'UserName',
        'userType'   => 'UserType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->privileges) {
            $res['Privileges'] = $this->privileges;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->userType) {
            $res['UserType'] = $this->userType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return users
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Privileges'])) {
            $model->privileges = $map['Privileges'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['UserType'])) {
            $model->userType = $map['UserType'];
        }

        return $model;
    }
}
