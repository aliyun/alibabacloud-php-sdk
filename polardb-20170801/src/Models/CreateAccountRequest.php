<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class CreateAccountRequest extends Model
{
    /**
     * @description The description of the account. The description must meet the following requirements:
     *
     *   It cannot start with `http://` or `https://`.
     *   It must be 2 to 256 characters in length.
     *
     * @example testdes
     *
     * @var string
     */
    public $accountDescription;

    /**
     * @description The name of the account. The name must meet the following requirements:
     *
     *   It must start with a lowercase letter and end with a letter or a digit.
     *   It can contain lowercase letters, digits, and underscores (_).
     *   It must be 2 to 16 characters in length.
     *   It cannot be root, admin, or another username that is reserved by the system.
     *
     * This parameter is required.
     * @example testacc
     *
     * @var string
     */
    public $accountName;

    /**
     * @description The password of the account. The password must meet the following requirements:
     *
     *   It must contain at least three of the following character types: uppercase letters, lowercase letters, digits, and special characters.
     *   It must be 8 to 32 characters in length.
     *   Special characters include `! @ # $ % ^ & * ( ) _ + - =`
     *
     * This parameter is required.
     * @example Test1111
     *
     * @var string
     */
    public $accountPassword;

    /**
     * @description The permissions that are granted to the account. Valid values:
     *
     *   **ReadWrite**: read and write permissions
     *   **ReadOnly**: read-only permissions
     *   **DMLOnly**: the permissions to execute only DML statements
     *   **DDLOnly**: the permissions to execute only DDL statements
     *   **ReadIndex**: the read and index permissions
     *
     * >
     *
     *   The `AccountPrivilege` parameter is valid only after you specify the `DBName` parameter.
     *
     *   If multiple database names are specified by the `DBName` parameter, you must grant permissions on the databases. Separate multiple permissions with commas (,). For example, if you want to grant the account the read and write permissions on DB1 and the read-only permissions on DB2, set `DBName` to `DB1,DB2`, and set `AccountPrivilege` to `ReadWrite,ReadOnly`.
     *   This parameter is valid only for standard accounts of PolarDB for MySQL clusters.
     *
     * @example ReadWrite
     *
     * @var string
     */
    public $accountPrivilege;

    /**
     * @description The type of the account. Valid values:
     *
     *   **Normal**: standard account
     *   **Super**: privileged account
     *
     * >
     *
     *   If you leave this parameter empty, the default value **Super** is used.
     *
     *   You can create multiple privileged accounts for a PolarDB for Oracle or PolarDB for PostgreSQL cluster. A privileged account is granted more permissions than a standard account. For more information about how to create a database account, see [Create a database account](https://help.aliyun.com/document_detail/68508.html).
     *   You can create only one privileged account for a PolarDB for MySQL cluster. A privileged account is granted more permissions than a standard account. For more information about how to create a database account, see [Create a database account](https://help.aliyun.com/document_detail/68508.html).
     *
     * @example Normal
     *
     * @var string
     */
    public $accountType;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the value, but you must make sure that it is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length. The token is case-sensitive.
     *
     * @example 6000170000591aed949d0f54a343f1a4233c1e7d1c5c******
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The ID of cluster.
     *
     * This parameter is required.
     * @example pc-**************
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The name of the database that can be accessed by the account. To enter multiple database names, separate the names with commas (,).
     *
     * > This parameter is valid only for standard accounts of PolarDB for MySQL clusters.
     * @example testdb
     *
     * @var string
     */
    public $DBName;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $privForAllDB;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'accountDescription'   => 'AccountDescription',
        'accountName'          => 'AccountName',
        'accountPassword'      => 'AccountPassword',
        'accountPrivilege'     => 'AccountPrivilege',
        'accountType'          => 'AccountType',
        'clientToken'          => 'ClientToken',
        'DBClusterId'          => 'DBClusterId',
        'DBName'               => 'DBName',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'privForAllDB'         => 'PrivForAllDB',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
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
        if (null !== $this->accountPassword) {
            $res['AccountPassword'] = $this->accountPassword;
        }
        if (null !== $this->accountPrivilege) {
            $res['AccountPrivilege'] = $this->accountPrivilege;
        }
        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->privForAllDB) {
            $res['PrivForAllDB'] = $this->privForAllDB;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAccountRequest
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
        if (isset($map['AccountPassword'])) {
            $model->accountPassword = $map['AccountPassword'];
        }
        if (isset($map['AccountPrivilege'])) {
            $model->accountPrivilege = $map['AccountPrivilege'];
        }
        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PrivForAllDB'])) {
            $model->privForAllDB = $map['PrivForAllDB'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}
