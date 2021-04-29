<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAccountsResponseBody\accounts;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAccountsResponseBody\accounts\DBInstanceAccount\databasePrivileges;
use AlibabaCloud\Tea\Model;

class DBInstanceAccount extends Model
{
    /**
     * @var string
     */
    public $accountStatus;

    /**
     * @var databasePrivileges
     */
    public $databasePrivileges;

    /**
     * @var string
     */
    public $accountDescription;

    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $privExceeded;

    /**
     * @var string
     */
    public $accountType;

    /**
     * @var string
     */
    public $accountName;
    protected $_name = [
        'accountStatus'      => 'AccountStatus',
        'databasePrivileges' => 'DatabasePrivileges',
        'accountDescription' => 'AccountDescription',
        'DBInstanceId'       => 'DBInstanceId',
        'privExceeded'       => 'PrivExceeded',
        'accountType'        => 'AccountType',
        'accountName'        => 'AccountName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountStatus) {
            $res['AccountStatus'] = $this->accountStatus;
        }
        if (null !== $this->databasePrivileges) {
            $res['DatabasePrivileges'] = null !== $this->databasePrivileges ? $this->databasePrivileges->toMap() : null;
        }
        if (null !== $this->accountDescription) {
            $res['AccountDescription'] = $this->accountDescription;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->privExceeded) {
            $res['PrivExceeded'] = $this->privExceeded;
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
     * @return DBInstanceAccount
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountStatus'])) {
            $model->accountStatus = $map['AccountStatus'];
        }
        if (isset($map['DatabasePrivileges'])) {
            $model->databasePrivileges = databasePrivileges::fromMap($map['DatabasePrivileges']);
        }
        if (isset($map['AccountDescription'])) {
            $model->accountDescription = $map['AccountDescription'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['PrivExceeded'])) {
            $model->privExceeded = $map['PrivExceeded'];
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
