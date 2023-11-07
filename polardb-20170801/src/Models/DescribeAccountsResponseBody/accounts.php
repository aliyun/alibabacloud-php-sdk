<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeAccountsResponseBody;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeAccountsResponseBody\accounts\databasePrivileges;
use AlibabaCloud\Tea\Model;

class accounts extends Model
{
    /**
     * @description The description of the account.
     *
     * @example test
     *
     * @var string
     */
    public $accountDescription;

    /**
     * @description The locking state of the account. Valid values:
     *
     *   **UnLock**
     *   **Lock**
     *
     * @example UnLock
     *
     * @var string
     */
    public $accountLockState;

    /**
     * @description The name of the account.
     *
     * @example test_acc
     *
     * @var string
     */
    public $accountName;

    /**
     * @description The validity period of the password.
     *
     * @example undefined
     *
     * @var string
     */
    public $accountPasswordValidTime;

    /**
     * @description The state of the account. Valid values:
     *
     *   **Creating**: The account is being created.
     *   **Available**: The account is available.
     *   **Deleting**: The account is being deleted
     *
     * @example Available
     *
     * @var string
     */
    public $accountStatus;

    /**
     * @description The type of the account. Valid values:
     *
     *   **Normal**: a standard account
     *   **Super**: a privileged account
     *
     * @example Normal
     *
     * @var string
     */
    public $accountType;

    /**
     * @description The list of database permissions that are granted to the account.
     *
     * @var databasePrivileges[]
     */
    public $databasePrivileges;
    protected $_name = [
        'accountDescription'       => 'AccountDescription',
        'accountLockState'         => 'AccountLockState',
        'accountName'              => 'AccountName',
        'accountPasswordValidTime' => 'AccountPasswordValidTime',
        'accountStatus'            => 'AccountStatus',
        'accountType'              => 'AccountType',
        'databasePrivileges'       => 'DatabasePrivileges',
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
        if (null !== $this->accountLockState) {
            $res['AccountLockState'] = $this->accountLockState;
        }
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->accountPasswordValidTime) {
            $res['AccountPasswordValidTime'] = $this->accountPasswordValidTime;
        }
        if (null !== $this->accountStatus) {
            $res['AccountStatus'] = $this->accountStatus;
        }
        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
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
        if (isset($map['AccountLockState'])) {
            $model->accountLockState = $map['AccountLockState'];
        }
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['AccountPasswordValidTime'])) {
            $model->accountPasswordValidTime = $map['AccountPasswordValidTime'];
        }
        if (isset($map['AccountStatus'])) {
            $model->accountStatus = $map['AccountStatus'];
        }
        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
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

        return $model;
    }
}
