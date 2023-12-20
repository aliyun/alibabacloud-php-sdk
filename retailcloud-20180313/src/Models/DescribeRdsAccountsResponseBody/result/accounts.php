<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313\Models\DescribeRdsAccountsResponseBody\result;

use AlibabaCloud\SDK\Retailcloud\V20180313\Models\DescribeRdsAccountsResponseBody\result\accounts\databasePrivileges;
use AlibabaCloud\Tea\Model;

class accounts extends Model
{
    /**
     * @var string
     */
    public $accountDescription;

    /**
     * @example test
     *
     * @var string
     */
    public $accountName;

    /**
     * @example Available
     *
     * @var string
     */
    public $accountStatus;

    /**
     * @example Normal
     *
     * @var string
     */
    public $accountType;

    /**
     * @example rm-ul9wjk5xxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var databasePrivileges[]
     */
    public $databasePrivileges;

    /**
     * @example 0
     *
     * @var string
     */
    public $privExceeded;
    protected $_name = [
        'accountDescription' => 'AccountDescription',
        'accountName'        => 'AccountName',
        'accountStatus'      => 'AccountStatus',
        'accountType'        => 'AccountType',
        'DBInstanceId'       => 'DBInstanceId',
        'databasePrivileges' => 'DatabasePrivileges',
        'privExceeded'       => 'PrivExceeded',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountDescription) {
            $res['AccountDescription'] = $this->accountDescription;
        }
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->accountStatus) {
            $res['AccountStatus'] = $this->accountStatus;
        }
        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->databasePrivileges) {
            $res['DatabasePrivileges'] = [];
            if (null !== $this->databasePrivileges && \is_array($this->databasePrivileges)) {
                $n = 0;
                foreach ($this->databasePrivileges as $item) {
                    $res['DatabasePrivileges'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->privExceeded) {
            $res['PrivExceeded'] = $this->privExceeded;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return accounts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountDescription'])) {
            $model->accountDescription = $map['AccountDescription'];
        }
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['AccountStatus'])) {
            $model->accountStatus = $map['AccountStatus'];
        }
        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DatabasePrivileges'])) {
            if (!empty($map['DatabasePrivileges'])) {
                $model->databasePrivileges = [];
                $n                         = 0;
                foreach ($map['DatabasePrivileges'] as $item) {
                    $model->databasePrivileges[$n++] = null !== $item ? databasePrivileges::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PrivExceeded'])) {
            $model->privExceeded = $map['PrivExceeded'];
        }

        return $model;
    }
}
