<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeInstanceAccountsResponseBody\instanceAccounts;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeInstanceAccountsResponseBody\instanceAccounts\instanceAccount\dbPrivileges;

class instanceAccount extends Model
{
    /**
     * @var string
     */
    public $accountName;

    /**
     * @var int
     */
    public $accountType;

    /**
     * @var dbPrivileges
     */
    public $dbPrivileges;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $host;
    protected $_name = [
        'accountName' => 'AccountName',
        'accountType' => 'AccountType',
        'dbPrivileges' => 'DbPrivileges',
        'description' => 'Description',
        'host' => 'Host',
    ];

    public function validate()
    {
        if (null !== $this->dbPrivileges) {
            $this->dbPrivileges->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }

        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
        }

        if (null !== $this->dbPrivileges) {
            $res['DbPrivileges'] = null !== $this->dbPrivileges ? $this->dbPrivileges->toArray($noStream) : $this->dbPrivileges;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
