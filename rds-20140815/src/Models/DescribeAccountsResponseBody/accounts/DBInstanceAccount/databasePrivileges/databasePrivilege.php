<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAccountsResponseBody\accounts\DBInstanceAccount\databasePrivileges;

use AlibabaCloud\Tea\Model;

class databasePrivilege extends Model
{
    /**
     * @description The type of the permissions. Valid values:
     *
     *   **ReadWrite**: read and write permissions
     *   **ReadOnly**: read-only permissions
     *   **DDLOnly**: DDL-only permissions
     *   **DMLOnly**: DML-only permissions
     *   **Custom**: custom permissions (You can modify the permissions of the account by using SQL commands.)
     *
     * @example ReadWrite
     *
     * @var string
     */
    public $accountPrivilege;

    /**
     * @description The permissions that are granted to the account. For more information, see [Account permissions](~~146395~~).
     *
     * @example SELECT,INSERT
     *
     * @var string
     */
    public $accountPrivilegeDetail;

    /**
     * @description The name of the database.
     *
     * @example test1
     *
     * @var string
     */
    public $DBName;
    protected $_name = [
        'accountPrivilege'       => 'AccountPrivilege',
        'accountPrivilegeDetail' => 'AccountPrivilegeDetail',
        'DBName'                 => 'DBName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountPrivilege) {
            $res['AccountPrivilege'] = $this->accountPrivilege;
        }
        if (null !== $this->accountPrivilegeDetail) {
            $res['AccountPrivilegeDetail'] = $this->accountPrivilegeDetail;
        }
        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return databasePrivilege
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountPrivilege'])) {
            $model->accountPrivilege = $map['AccountPrivilege'];
        }
        if (isset($map['AccountPrivilegeDetail'])) {
            $model->accountPrivilegeDetail = $map['AccountPrivilegeDetail'];
        }
        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }

        return $model;
    }
}
