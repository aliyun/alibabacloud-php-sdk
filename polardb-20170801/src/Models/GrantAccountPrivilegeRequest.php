<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class GrantAccountPrivilegeRequest extends Model
{
    /**
     * @description The username of the account.
     *
     * This parameter is required.
     * @example testacc
     *
     * @var string
     */
    public $accountName;

    /**
     * @description The permissions that are granted to the account. Valid values:
     *
     *   **ReadWrite**: read and write permissions
     *   **ReadOnly**: read-only permissions
     *   **DMLOnly**: The account is granted the permissions to execute only DML statements on the database.
     *   **DDLOnly**: The account is granted the permissions to execute only DDL statements on the database.
     *   **ReadIndex**: The account has the read and index permissions on the database.
     *
     * > The number of **AccountPrivilege** values must be the consistent with the number of **DBName** values. Each account permission must correspond to a database name in sequence. For example, you can set **DBName** to `testdb_1,testdb_2` and set **AccountPrivilege** to `ReadWrite,ReadOnly`. In this case, the specified standard account is granted the **read and write** permissions on the **testdb_1** database and the **read** permission on the **testdb_2** database.
     *
     * This parameter is required.
     * @example ReadWrite,ReadOnly
     *
     * @var string
     */
    public $accountPrivilege;

    /**
     * @description The ID of the cluster.
     *
     * This parameter is required.
     * @example pc-****************
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The names of the databases that the account can access. You can grant the access permissions on one or more databases to the specified standard account. If you need to specify multiple database names, separate the database names with commas (,).
     *
     * This parameter is required.
     * @example testdb_1,testdb_2
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
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'accountName'          => 'AccountName',
        'accountPrivilege'     => 'AccountPrivilege',
        'DBClusterId'          => 'DBClusterId',
        'DBName'               => 'DBName',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->accountPrivilege) {
            $res['AccountPrivilege'] = $this->accountPrivilege;
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
     * @return GrantAccountPrivilegeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['AccountPrivilege'])) {
            $model->accountPrivilege = $map['AccountPrivilege'];
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
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}
