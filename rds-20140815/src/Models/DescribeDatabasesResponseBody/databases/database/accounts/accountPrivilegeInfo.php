<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDatabasesResponseBody\databases\database\accounts;

use AlibabaCloud\Tea\Model;

class accountPrivilegeInfo extends Model
{
    /**
     * @description The username of the account.
     *
     * @example test
     *
     * @var string
     */
    public $account;

    /**
     * @description The permissions that the account has on the database. Valid values:
     *
     *   **ReadWrite**: read and write permissions
     *   **ReadOnly**: read-only permissions
     *   **DMLOnly**: DML-only permissions
     *   **DDLOnly**: DDL-only permissions
     *
     * @example DMLOnly
     *
     * @var string
     */
    public $accountPrivilege;

    /**
     * @description The details of the permissions that the account has on the database.
     *
     * @example SELECT
     *
     * @var string
     */
    public $accountPrivilegeDetail;
    protected $_name = [
        'account'                => 'Account',
        'accountPrivilege'       => 'AccountPrivilege',
        'accountPrivilegeDetail' => 'AccountPrivilegeDetail',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->account) {
            $res['Account'] = $this->account;
        }
        if (null !== $this->accountPrivilege) {
            $res['AccountPrivilege'] = $this->accountPrivilege;
        }
        if (null !== $this->accountPrivilegeDetail) {
            $res['AccountPrivilegeDetail'] = $this->accountPrivilegeDetail;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return accountPrivilegeInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Account'])) {
            $model->account = $map['Account'];
        }
        if (isset($map['AccountPrivilege'])) {
            $model->accountPrivilege = $map['AccountPrivilege'];
        }
        if (isset($map['AccountPrivilegeDetail'])) {
            $model->accountPrivilegeDetail = $map['AccountPrivilegeDetail'];
        }

        return $model;
    }
}
