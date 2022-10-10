<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeAccountsResponseBody;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeAccountsResponseBody\accounts\databasePrivileges;
use AlibabaCloud\Tea\Model;

class accounts extends Model
{
    /**
     * @var string
     */
    public $accountDescription;

    /**
     * @var string
     */
    public $accountLockState;

    /**
     * @var string
     */
    public $accountName;

    /**
     * @var string
     */
    public $accountPassword;

    /**
     * @var string
     */
    public $accountPasswordValidTime;

    /**
     * @var string
     */
    public $accountStatus;

    /**
     * @var string
     */
    public $accountType;

    /**
     * @var databasePrivileges[]
     */
    public $databasePrivileges;
    protected $_name = [
        'accountDescription'       => 'AccountDescription',
        'accountLockState'         => 'AccountLockState',
        'accountName'              => 'AccountName',
        'accountPassword'          => 'AccountPassword',
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
        if (null !== $this->accountPassword) {
            $res['AccountPassword'] = $this->accountPassword;
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
        if (isset($map['AccountPassword'])) {
            $model->accountPassword = $map['AccountPassword'];
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
