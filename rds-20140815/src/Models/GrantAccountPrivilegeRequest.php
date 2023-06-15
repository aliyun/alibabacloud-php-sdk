<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class GrantAccountPrivilegeRequest extends Model
{
    /**
     * @description The username of the account.
     *
     * @example test1
     *
     * @var string
     */
    public $accountName;

    /**
     * @description The permissions that you want to grant to the account. The number of permissions must be the same as the number of databases that you specify for the DBName parameter. You can specify this parameter based on your business requirements. Valid values:
     *
     *   **ReadWrite**: read and write permissions
     *   **ReadOnly**: read-only permissions
     *   **DDLOnly**: DDL-only permissions
     *   **DMLOnly**: DML-only permissions
     *   **DBOwner**: database owner permissions
     *
     * >
     *
     *   If the instance runs MySQL or MariaDB, you can set this parameter to **ReadWrite**, **ReadOnly**, **DDLOnly**, or **DMLOnly**.
     *
     *   If the instance runs SQL Server, you can set this parameter to **ReadWrite**, **ReadOnly**, or **DBOwner**.
     *   If the instance runs PostgreSQL and uses cloud disks, you can set this parameter to **DBOwner**.
     *
     * @example ReadWrite
     *
     * @var string
     */
    public $accountPrivilege;

    /**
     * @description The ID of the instance.
     *
     * @example rm-uf6wjk5xxxxxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The name of the database on which you want to grant permissions. Separate multiple database names with commas (,).
     *
     * @example testDB1
     *
     * @var string
     */
    public $DBName;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'accountName'      => 'AccountName',
        'accountPrivilege' => 'AccountPrivilege',
        'DBInstanceId'     => 'DBInstanceId',
        'DBName'           => 'DBName',
        'resourceOwnerId'  => 'ResourceOwnerId',
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
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
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
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}
