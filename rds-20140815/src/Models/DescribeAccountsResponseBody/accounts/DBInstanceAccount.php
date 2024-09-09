<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAccountsResponseBody\accounts;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAccountsResponseBody\accounts\DBInstanceAccount\databasePrivileges;
use AlibabaCloud\Tea\Model;

class DBInstanceAccount extends Model
{
    /**
     * @description The description of the account.
     *
     * @example Test account
     *
     * @var string
     */
    public $accountDescription;

    /**
     * @description The name of the database account.
     *
     * @example test1
     *
     * @var string
     */
    public $accountName;

    /**
     * @description The status of the account. Valid values:
     *
     *   **Unavailable**
     *   **Available**
     *
     * @example Available
     *
     * @var string
     */
    public $accountStatus;

    /**
     * @description The type of the account. Valid values:
     *
     *   **Normal**: standard account
     *   **Super**: privileged account
     *   **Sysadmin**: system admin account, which is supported only for instances running SQL Server
     *
     * @example Normal
     *
     * @var string
     */
    public $accountType;

    /**
     * @description Indicates whether the account has the row-level security (RLS) permissions. Valid values:
     *
     *   **t**: The account has the RLS permissions.
     *   **f**: The account does not have the RLS permissions.
     *
     * >  This parameter is returned only for instances that run PostgreSQL.
     * @example f
     *
     * @var string
     */
    public $bypassRLS;

    /**
     * @var bool
     */
    public $checkPolicy;

    /**
     * @description Indicates whether the account has the permissions to create databases. Valid values:
     *
     *   **t**: The account has the permissions to create databases.
     *   **f**: The account does not have the permissions to create databases.
     *
     * >  This parameter is returned only for instances that run PostgreSQL.
     * @example t
     *
     * @var string
     */
    public $createDB;

    /**
     * @description Indicates whether the account has the permissions to create roles. Valid values:
     *
     *   **t**: The account has the permissions to create roles.
     *   **f**: The account does not have the permissions to create roles.
     *
     * >  This parameter is returned only for instances that run PostgreSQL.
     * @example t
     *
     * @var string
     */
    public $createRole;

    /**
     * @description The ID of the instance to which the account belongs.
     *
     * @example rm-uf6wjk5*****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The details about the permissions that are granted to the account.
     *
     * @var databasePrivileges
     */
    public $databasePrivileges;

    /**
     * @var string
     */
    public $passwordExpireTime;

    /**
     * @description Indicates whether the number of databases that are managed by the account exceeds the upper limit. Valid values:
     *
     *   **1**: The number of databases that are managed by the account exceeds the upper limit.
     *   **0**: The number of databases that are managed by the account does not exceed the upper limit.
     *
     * @example 0
     *
     * @var string
     */
    public $privExceeded;

    /**
     * @description Indicates whether the account has the replication permissions. Valid values:
     *
     *   **t**: The account has the replication permissions.
     *   **f**: The account does not have the replication permissions.
     *
     * >  This parameter is returned only for instances that run PostgreSQL.
     * @example t
     *
     * @var string
     */
    public $replication;

    /**
     * @description The expiration time of the password. Valid values:
     *
     *   **infinity**: The password never expires.
     *   **Empty**: The expiration time is not specified.
     *   **Actual expiration time**: in the format of *yyyy-MM-dd*T*HH:mm:ss*Z in UTC. Example: 2022-10-01T00:00:00Z.
     *
     * >  This parameter is returned only for instances that run PostgreSQL.
     * @example 2022-10-01T00:00:00Z
     *
     * @var string
     */
    public $validUntil;
    protected $_name = [
        'accountDescription' => 'AccountDescription',
        'accountName'        => 'AccountName',
        'accountStatus'      => 'AccountStatus',
        'accountType'        => 'AccountType',
        'bypassRLS'          => 'BypassRLS',
        'checkPolicy'        => 'CheckPolicy',
        'createDB'           => 'CreateDB',
        'createRole'         => 'CreateRole',
        'DBInstanceId'       => 'DBInstanceId',
        'databasePrivileges' => 'DatabasePrivileges',
        'passwordExpireTime' => 'PasswordExpireTime',
        'privExceeded'       => 'PrivExceeded',
        'replication'        => 'Replication',
        'validUntil'         => 'ValidUntil',
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
            $res['DatabasePrivileges'] = null !== $this->databasePrivileges ? $this->databasePrivileges->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return DBInstanceAccount
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
