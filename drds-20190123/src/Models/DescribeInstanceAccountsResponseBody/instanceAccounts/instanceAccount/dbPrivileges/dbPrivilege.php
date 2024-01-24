<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeInstanceAccountsResponseBody\instanceAccounts\instanceAccount\dbPrivileges;

use AlibabaCloud\Tea\Model;

class dbPrivilege extends Model
{
    /**
     * @description Indicates the name of a database.
     *
     * @example test_rds3
     *
     * @var string
     */
    public $dbName;

    /**
     * @description Indicates the permissions that an account is granted on the database. Valid values:
     *
     *   **R**: The account is granted the permissions that are required to read the data of the database.
     *   **W**: The account is granted the permissions that are required to write data to the database.
     *   **DDL**: The account is granted the permissions that are required to perform DDL operations on the database.
     *   **DML**: The account is granted the permissions that are required to perform DML operations on the database.
     *
     * @example R
     *
     * @var string
     */
    public $privilege;
    protected $_name = [
        'dbName'    => 'DbName',
        'privilege' => 'Privilege',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->privilege) {
            $res['Privilege'] = $this->privilege;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dbPrivilege
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['Privilege'])) {
            $model->privilege = $map['Privilege'];
        }

        return $model;
    }
}
