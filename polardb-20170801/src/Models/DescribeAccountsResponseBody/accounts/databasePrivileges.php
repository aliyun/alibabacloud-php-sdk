<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeAccountsResponseBody\accounts;

use AlibabaCloud\Tea\Model;

class databasePrivileges extends Model
{
    /**
     * @var string
     */
    public $accountPrivilege;

    /**
     * @var string
     */
    public $DBName;
    protected $_name = [
        'accountPrivilege' => 'AccountPrivilege',
        'DBName'           => 'DBName',
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
        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return databasePrivileges
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountPrivilege'])) {
            $model->accountPrivilege = $map['AccountPrivilege'];
        }
        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }

        return $model;
    }
}
