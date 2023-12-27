<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAccountsResponseBody\accounts\account\databasePrivileges;

use AlibabaCloud\Tea\Model;

class databasePrivilege extends Model
{
    /**
     * @description The permission of the account. Default value: RoleReadWrite. Valid values:
     *
     *   **RoleReadOnly**: The account has the read-only permissions.
     *   **RoleReadWrite**: The account has the read and write permissions.
     *
     * @example RoleReadWrite
     *
     * @var string
     */
    public $accountPrivilege;
    protected $_name = [
        'accountPrivilege' => 'AccountPrivilege',
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

        return $model;
    }
}
