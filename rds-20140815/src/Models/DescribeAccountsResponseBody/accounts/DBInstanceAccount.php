<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAccountsResponseBody\accounts;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAccountsResponseBody\accounts\DBInstanceAccount\databasePrivileges;

class DBInstanceAccount extends Model
{
    /**
     * @var string
     */
    public $accountDescription;

    /**
     * @var string
     */
    public $accountName;

    /**
     * @var string
     */
    public $accountStatus;

    /**
     * @var string
     */
    public $accountType;

    /**
     * @var string
     */
    public $bypassRLS;

    /**
     * @var bool
     */
    public $checkPolicy;

    /**
     * @var string
     */
    public $createDB;

    /**
     * @var string
     */
    public $createRole;

    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var databasePrivileges
     */
    public $databasePrivileges;

    /**
     * @var string
     */
    public $passwordExpireTime;

    /**
     * @var string
     */
    public $privExceeded;

    /**
     * @var string
     */
    public $replication;

    /**
     * @var string
     */
    public $validUntil;
    protected $_name = [
        'accountDescription' => 'AccountDescription',
        'accountName' => 'AccountName',
        'accountStatus' => 'AccountStatus',
        'accountType' => 'AccountType',
        'bypassRLS' => 'BypassRLS',
        'checkPolicy' => 'CheckPolicy',
        'createDB' => 'CreateDB',
        'createRole' => 'CreateRole',
        'DBInstanceId' => 'DBInstanceId',
        'databasePrivileges' => 'DatabasePrivileges',
        'passwordExpireTime' => 'PasswordExpireTime',
        'privExceeded' => 'PrivExceeded',
        'replication' => 'Replication',
        'validUntil' => 'ValidUntil',
    ];

    public function validate()
    {
        if (null !== $this->databasePrivileges) {
            $this->databasePrivileges->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->bypassRLS) {
            $res['BypassRLS'] = $this->bypassRLS;
        }

        if (null !== $this->checkPolicy) {
            $res['CheckPolicy'] = $this->checkPolicy;
        }

        if (null !== $this->createDB) {
            $res['CreateDB'] = $this->createDB;
        }

        if (null !== $this->createRole) {
            $res['CreateRole'] = $this->createRole;
        }

        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        if (null !== $this->databasePrivileges) {
            $res['DatabasePrivileges'] = null !== $this->databasePrivileges ? $this->databasePrivileges->toArray($noStream) : $this->databasePrivileges;
        }

        if (null !== $this->passwordExpireTime) {
            $res['PasswordExpireTime'] = $this->passwordExpireTime;
        }

        if (null !== $this->privExceeded) {
            $res['PrivExceeded'] = $this->privExceeded;
        }

        if (null !== $this->replication) {
            $res['Replication'] = $this->replication;
        }

        if (null !== $this->validUntil) {
            $res['ValidUntil'] = $this->validUntil;
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

        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }

        if (isset($map['AccountStatus'])) {
            $model->accountStatus = $map['AccountStatus'];
        }

        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }

        if (isset($map['BypassRLS'])) {
            $model->bypassRLS = $map['BypassRLS'];
        }

        if (isset($map['CheckPolicy'])) {
            $model->checkPolicy = $map['CheckPolicy'];
        }

        if (isset($map['CreateDB'])) {
            $model->createDB = $map['CreateDB'];
        }

        if (isset($map['CreateRole'])) {
            $model->createRole = $map['CreateRole'];
        }

        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        if (isset($map['DatabasePrivileges'])) {
            $model->databasePrivileges = databasePrivileges::fromMap($map['DatabasePrivileges']);
        }

        if (isset($map['PasswordExpireTime'])) {
            $model->passwordExpireTime = $map['PasswordExpireTime'];
        }

        if (isset($map['PrivExceeded'])) {
            $model->privExceeded = $map['PrivExceeded'];
        }

        if (isset($map['Replication'])) {
            $model->replication = $map['Replication'];
        }

        if (isset($map['ValidUntil'])) {
            $model->validUntil = $map['ValidUntil'];
        }

        return $model;
    }
}
