<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeAccountsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeAccountsResponseBody\accounts\databasePrivileges;

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
        'accountDescription' => 'AccountDescription',
        'accountLockState' => 'AccountLockState',
        'accountName' => 'AccountName',
        'accountPasswordValidTime' => 'AccountPasswordValidTime',
        'accountStatus' => 'AccountStatus',
        'accountType' => 'AccountType',
        'databasePrivileges' => 'DatabasePrivileges',
    ];

    public function validate()
    {
        if (\is_array($this->databasePrivileges)) {
            Model::validateArray($this->databasePrivileges);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->databasePrivileges)) {
                $res['DatabasePrivileges'] = [];
                $n1 = 0;
                foreach ($this->databasePrivileges as $item1) {
                    $res['DatabasePrivileges'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
                $n1 = 0;
                foreach ($map['DatabasePrivileges'] as $item1) {
                    $model->databasePrivileges[$n1++] = databasePrivileges::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
