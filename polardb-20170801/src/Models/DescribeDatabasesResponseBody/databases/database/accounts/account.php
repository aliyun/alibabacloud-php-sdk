<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDatabasesResponseBody\databases\database\accounts;

use AlibabaCloud\Tea\Model;

class account extends Model
{
    /**
     * @description The username of the account.
     *
     * > A PolarDB for MySQL cluster does not support privileged accounts.
     * @example test_acc
     *
     * @var string
     */
    public $accountName;

    /**
     * @description The permissions that are granted to the account. Valid values:
     *
     *   **ReadWrite**: read and write permissions
     *   **ReadOnly**: read-only permissions
     *   **DMLOnly**: The account is granted the permissions to execute only DML statements on the database.
     *   **DDLOnly**: The account is granted the permissions to execute only DDL statements on the database.
     *   **ReadIndex**: The account has the read and index permissions on the database.
     *
     * @example ReadOnly
     *
     * @var string
     */
    public $accountPrivilege;

    /**
     * @description The state of the account. Valid values:
     *
     *   **Creating**
     *   **Available**
     *   **Deleting**
     *
     * @example Available
     *
     * @var string
     */
    public $accountStatus;

    /**
     * @description The authorization state of the account. Valid values:
     *
     *   **Empowering**: The system is granting permissions to the account.
     *   **Empowered**: Permissions are granted to the account.
     *   **Removing**: The system is revoking permissions from the account.
     *
     * @example Empowered
     *
     * @var string
     */
    public $privilegeStatus;
    protected $_name = [
        'accountName'      => 'AccountName',
        'accountPrivilege' => 'AccountPrivilege',
        'accountStatus'    => 'AccountStatus',
        'privilegeStatus'  => 'PrivilegeStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->accountPrivilege) {
            $res['AccountPrivilege'] = $this->accountPrivilege;
        }
        if (null !== $this->accountStatus) {
            $res['AccountStatus'] = $this->accountStatus;
        }
        if (null !== $this->privilegeStatus) {
            $res['PrivilegeStatus'] = $this->privilegeStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return account
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['AccountPrivilege'])) {
            $model->accountPrivilege = $map['AccountPrivilege'];
        }
        if (isset($map['AccountStatus'])) {
            $model->accountStatus = $map['AccountStatus'];
        }
        if (isset($map['PrivilegeStatus'])) {
            $model->privilegeStatus = $map['PrivilegeStatus'];
        }

        return $model;
    }
}
