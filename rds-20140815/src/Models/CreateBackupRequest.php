<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class CreateBackupRequest extends Model
{
    /**
     * @description The backup type of the instance. Valid values:
     *
     *   **Logical**: logical backup
     *   **Physical**: physical backup
     *   **Snapshot**: snapshot backup
     *
     * Default value: **Physical**.
     *
     * > *   You can perform a logical backup only when databases are created on the instance.
     * > *   When you perform a snapshot backup on an ApsaraDB RDS for MariaDB instance, you must set this parameter to **Physical**.
     * > *   For more information about the supported backup types, see [Use the data backup feature](~~98818~~).
     * > *   When you perform a snapshot backup on an ApsaraDB RDS for SQL Server instance that uses cloud disks, you must set this parameter to **Snapshot**.
     * @example Physical
     *
     * @var string
     */
    public $backupMethod;

    /**
     * @description The backup policy. Valid values:
     *
     *   **db**: a database-level backup.
     *   **instance**: an instance-level backup.
     *
     * > You can specify this parameter when you perform a logical backup on an ApsaraDB RDS for MySQL instance. You can also specify this parameter when you perform a full physical backup on an ApsaraDB RDS for SQL Server instance.
     * @example db
     *
     * @var string
     */
    public $backupStrategy;

    /**
     * @description The backup method. Valid values:
     *
     *   **Auto**: full or incremental backup that is automatically selected
     *   **FullBackup**: full backup
     *
     * Default value: **Auto**.
     *
     * > *   You must set this parameter only when the instance runs SQL Server.
     * > *   This parameter is valid only when you set the **BackupMethod** parameter to **Physical**.
     * @example Auto
     *
     * @var string
     */
    public $backupType;

    /**
     * @description The instance ID. You can call the [DescribeDBInstances](~~610396~~) operation to query the ID of the instance.
     *
     * @example rm-uf6wjk5****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The names of the databases whose data you want to back up. Separate the names of the databases with commas (,).
     *
     * > You can specify this parameter when you perform a logical backup on individual databases of an ApsaraDB RDS for MySQL instance. You can also specify this parameter when you perform a full physical backup on individual databases of an ApsaraDB RDS for SQL Server instance.
     * @example rds_mysql
     *
     * @var string
     */
    public $DBName;

    /**
     * @description The resource group ID. You can call the [DescribeDBInstanceAttribute](~~610394~~) operation to obtain the ID of the resource group.
     *
     * @example rg-acfmy*****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'backupMethod'    => 'BackupMethod',
        'backupStrategy'  => 'BackupStrategy',
        'backupType'      => 'BackupType',
        'DBInstanceId'    => 'DBInstanceId',
        'DBName'          => 'DBName',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceOwnerId' => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupMethod) {
            $res['BackupMethod'] = $this->backupMethod;
        }
        if (null !== $this->backupStrategy) {
            $res['BackupStrategy'] = $this->backupStrategy;
        }
        if (null !== $this->backupType) {
            $res['BackupType'] = $this->backupType;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateBackupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupMethod'])) {
            $model->backupMethod = $map['BackupMethod'];
        }
        if (isset($map['BackupStrategy'])) {
            $model->backupStrategy = $map['BackupStrategy'];
        }
        if (isset($map['BackupType'])) {
            $model->backupType = $map['BackupType'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}
