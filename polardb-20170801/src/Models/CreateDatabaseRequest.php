<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class CreateDatabaseRequest extends Model
{
    /**
     * @description The name of the account that is authorized to access the database. You can call the [DescribeAccounts](https://help.aliyun.com/document_detail/98107.html) operation to query account information.
     * >- This parameter is required for PolarDB for PostgreSQL (Compatible with Oracle) clusters or PolarDB for PostgreSQL clusters. This parameter is optional for PolarDB for MySQL clusters.
     * @example testacc
     *
     * @var string
     */
    public $accountName;

    /**
     * @description The permissions that are granted to the account. Valid values:
     *
     *   **ReadWrite**: read and write permissions.
     *   **ReadOnly**: read-only permissions.
     *   **DMLOnly**: the permissions to execute only DML statements.
     *   **DDLOnly**: the permissions to execute only DDL statements.
     *   **ReadIndex**: the read-only and index permissions.
     *
     * If you leave this parameter empty, the default value **ReadWrite** is used.
     *
     * >- This parameter is valid only if you specify **AccountName**.
     * >- This parameter is optional for PolarDB for MySQL clusters.
     * @example ReadWrite
     *
     * @var string
     */
    public $accountPrivilege;

    /**
     * @description The character set that is used by the cluster. For more information, see [Character set tables](https://help.aliyun.com/document_detail/99716.html).
     *
     * This parameter is required.
     * @example utf8
     *
     * @var string
     */
    public $characterSetName;

    /**
     * @description The language that indicates the collation of the databases that are created.
     *
     * > *   The language must be compatible with the character set that is specified by **CharacterSetName**.
     * >*   This parameter is required for PolarDB for PostgreSQL (Compatible with Oracle) clusters or PolarDB for PostgreSQL clusters. This parameter is not supported by PolarDB for MySQL clusters.
     *
     * To view the valid values for this parameter, perform the following steps: Log on to the PolarDB console and click the ID of a cluster. In the left-side navigation pane, choose **Settings and Management** > **Databases**. Then, click **Create Database**.
     * @example C
     *
     * @var string
     */
    public $collate;

    /**
     * @description The language that indicates the character type of the database.
     *
     * >- The language must be compatible with the character set that is specified by **CharacterSetName**.
     * >- The value that you specify must be the same as the value of **Collate**.
     * >- This parameter is required for PolarDB for PostgreSQL (Compatible with Oracle) clusters or PolarDB for PostgreSQL clusters. This parameter is optional for PolarDB for MySQL clusters.
     *
     * To view the valid values for this parameter, perform the following steps: Log on to the PolarDB console and click the ID of a cluster. In the left-side navigation pane, choose **Settings and Management** > **Databases**. Then, click **Create Database**.
     * @example C
     *
     * @var string
     */
    public $ctype;

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
     * @description The description of the database. The description must meet the following requirements:
     *
     *   It cannot start with `http://` or `https://`.
     *   It must be 2 to 256 characters in length.
     *
     * > This parameter is required for a PolarDB for Oracle or PolarDB for PostgreSQL cluster. This parameter is optional for a PolarDB for MySQL cluster.
     * @example testdesc
     *
     * @var string
     */
    public $DBDescription;

    /**
     * @description The name of the database. The name must meet the following requirements:
     *
     *   The name can contain lowercase letters, digits, hyphens (-), and underscores (_).
     *   The name must start with a lowercase letter and end with a lowercase letter or a digit. The name must be 1 to 64 characters in length.
     *
     * This parameter is required.
     * @example testDB
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
        'characterSetName'     => 'CharacterSetName',
        'collate'              => 'Collate',
        'ctype'                => 'Ctype',
        'DBClusterId'          => 'DBClusterId',
        'DBDescription'        => 'DBDescription',
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
        if (null !== $this->characterSetName) {
            $res['CharacterSetName'] = $this->characterSetName;
        }
        if (null !== $this->collate) {
            $res['Collate'] = $this->collate;
        }
        if (null !== $this->ctype) {
            $res['Ctype'] = $this->ctype;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->DBDescription) {
            $res['DBDescription'] = $this->DBDescription;
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
     * @return CreateDatabaseRequest
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
        if (isset($map['CharacterSetName'])) {
            $model->characterSetName = $map['CharacterSetName'];
        }
        if (isset($map['Collate'])) {
            $model->collate = $map['Collate'];
        }
        if (isset($map['Ctype'])) {
            $model->ctype = $map['Ctype'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['DBDescription'])) {
            $model->DBDescription = $map['DBDescription'];
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
