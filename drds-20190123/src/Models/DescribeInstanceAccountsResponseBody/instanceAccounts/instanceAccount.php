<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeInstanceAccountsResponseBody\instanceAccounts;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeInstanceAccountsResponseBody\instanceAccounts\instanceAccount\dbPrivileges;
use AlibabaCloud\Tea\Model;

class instanceAccount extends Model
{
    /**
     * @var dbPrivileges
     */
    public $dbPrivileges;

    /**
     * @var string
     */
    public $host;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $accountType;

    /**
     * @var string
     */
    public $accountName;
    protected $_name = [
        'dbPrivileges' => 'DbPrivileges',
        'host'         => 'Host',
        'description'  => 'Description',
        'accountType'  => 'AccountType',
        'accountName'  => 'AccountName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbPrivileges) {
            $res['DbPrivileges'] = null !== $this->dbPrivileges ? $this->dbPrivileges->toMap() : null;
        }
        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
        }
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
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
        if (isset($map['DbPrivileges'])) {
            $model->dbPrivileges = dbPrivileges::fromMap($map['DbPrivileges']);
        }
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }

        return $model;
    }
}
