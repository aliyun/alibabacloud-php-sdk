<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeInstanceAccountsResponseBody\instanceAccounts;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeInstanceAccountsResponseBody\instanceAccounts\instanceAccount\dbPrivileges;
use AlibabaCloud\Tea\Model;

class instanceAccount extends Model
{
    /**
     * @description Indicates the username of an instance account.
     *
     * @example test_rds3
     *
     * @var string
     */
    public $accountName;

    /**
     * @description Indicates the type of an instance account. Valid values:
     *
     *   **0**: The instance account is a privileged account.
     *   **1**: The instance account is a standard account.
     *
     * @example 1
     *
     * @var int
     */
    public $accountType;

    /**
     * @description Indicates the information about the permissions of an account on a database.
     *
     * @var dbPrivileges
     */
    public $dbPrivileges;

    /**
     * @description Indicates the description of an account. By default, if 0 is the value of the AccountType parameter, **Created by DRDS** is returned as the value of the Description parameter. If 1 is the value of the AccountType parameter, an empty string is returned as the value of the Description parameter. You can modify the description of an account on the Accounts page in the PolarDB-X console.
     *
     * @example Created by DRDS
     *
     * @var string
     */
    public $description;

    /**
     * @description Indicates an IP address that is allowed to access the database. The value **%** indicates that each IP address is allowed to access the database. \</note>
     *
     * @example %
     *
     * @var string
     */
    public $host;
    protected $_name = [
        'accountName'  => 'AccountName',
        'accountType'  => 'AccountType',
        'dbPrivileges' => 'DbPrivileges',
        'description'  => 'Description',
        'host'         => 'Host',
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
        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
        }
        if (null !== $this->dbPrivileges) {
            $res['DbPrivileges'] = null !== $this->dbPrivileges ? $this->dbPrivileges->toMap() : null;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceAccount
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }
        if (isset($map['DbPrivileges'])) {
            $model->dbPrivileges = dbPrivileges::fromMap($map['DbPrivileges']);
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }

        return $model;
    }
}
