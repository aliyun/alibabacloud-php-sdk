<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class CreateMigrateTaskRequest extends Model
{
    /**
     * @description The type of the migration task. Valid values:
     *
     *   **FULL**: The migration task migrates full backup files.
     *   **UPDF**: The migration task migrates incremental or log backup files.
     *
     * @example FULL
     *
     * @var string
     */
    public $backupMode;

    /**
     * @description The consistency check method for the database. Valid values:
     *
     *   **SyncExecuteDBCheck**: synchronous database check
     *   **AsyncExecuteDBCheck**: asynchronous database check
     *
     * Default value: **AsyncExecuteDBCheck** (compatible with SQL Server 2008 R2).
     *
     * >  This parameter is valid when **IsOnlineDB** is set to **True**.
     * @example AsyncExecuteDBCheck
     *
     * @var string
     */
    public $checkDBMode;

    /**
     * @description The instance ID. You can call the DescribeDBInstances operation to query the instance ID.
     *
     * @example rm-uf6wjk******
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The name of the destination database.
     *
     * @example testDB
     *
     * @var string
     */
    public $DBName;

    /**
     * @description Specifies whether to make the restored database data available for user access. Valid values:
     *
     *   **True**
     *   **False**
     *
     * > Set the value to **True** for instances that run SQL Server 2008 R2.
     * @example True
     *
     * @var string
     */
    public $isOnlineDB;

    /**
     * @description The ID of the migration task.
     *
     *   If you set **BackupMode** to **FULL**, the value of this parameter is empty. The full backup mode is compatible with instance that runs SQL Server 2008 R2.
     *   If you set **BackupMode** to **UPDF**, the value of this parameter is the ID of the required full migration task.
     *
     * > *   If you set **IsOnlineDB** to **True**, the value of **BackupMode** must be **FULL**.
     * > *   If you set **IsOnlineDB** to **False**, the value of **BackupMode** must be **UPDF**.
     * @example None
     *
     * @var string
     */
    public $migrateTaskId;

    /**
     * @description The shared URL of the backup file in the OSS bucket. The URL must be encoded.
     *
     * >  This parameter is required for instances that run SQL Server 2008 R2.
     * @example check_cdn_oss.sh www.xxxxxx.mobi
     *
     * @var string
     */
    public $OSSUrls;

    /**
     * @description The information about the backup file in the OSS bucket.
     *
     * The values consist of three parts that are separated by colons (:):
     *
     *   OSS endpoint: oss-ap-southeast-1.aliyuncs.com.
     *   Name of the OSS bucket: rdsmssqlsingapore.
     *   Key of the backup file in the OSS bucket: autotest\_2008R2\_TestMigration_FULL.bak.
     *
     * > *   This parameter is optional for instances that run SQL Server 2008 R2.
     * > *   This parameter is required for instances that run a major engine version later than SQL Server 2008 R2.
     * @example oss-ap-southeast-1.aliyuncs.com:rdsmssqlsingapore:autotest_2008R2_TestMigration_FULL.bak
     *
     * @var string
     */
    public $ossObjectPositions;

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
        'backupMode'           => 'BackupMode',
        'checkDBMode'          => 'CheckDBMode',
        'DBInstanceId'         => 'DBInstanceId',
        'DBName'               => 'DBName',
        'isOnlineDB'           => 'IsOnlineDB',
        'migrateTaskId'        => 'MigrateTaskId',
        'OSSUrls'              => 'OSSUrls',
        'ossObjectPositions'   => 'OssObjectPositions',
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
        if (null !== $this->backupMode) {
            $res['BackupMode'] = $this->backupMode;
        }
        if (null !== $this->checkDBMode) {
            $res['CheckDBMode'] = $this->checkDBMode;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
        }
        if (null !== $this->isOnlineDB) {
            $res['IsOnlineDB'] = $this->isOnlineDB;
        }
        if (null !== $this->migrateTaskId) {
            $res['MigrateTaskId'] = $this->migrateTaskId;
        }
        if (null !== $this->OSSUrls) {
            $res['OSSUrls'] = $this->OSSUrls;
        }
        if (null !== $this->ossObjectPositions) {
            $res['OssObjectPositions'] = $this->ossObjectPositions;
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
     * @return CreateMigrateTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupMode'])) {
            $model->backupMode = $map['BackupMode'];
        }
        if (isset($map['CheckDBMode'])) {
            $model->checkDBMode = $map['CheckDBMode'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }
        if (isset($map['IsOnlineDB'])) {
            $model->isOnlineDB = $map['IsOnlineDB'];
        }
        if (isset($map['MigrateTaskId'])) {
            $model->migrateTaskId = $map['MigrateTaskId'];
        }
        if (isset($map['OSSUrls'])) {
            $model->OSSUrls = $map['OSSUrls'];
        }
        if (isset($map['OssObjectPositions'])) {
            $model->ossObjectPositions = $map['OssObjectPositions'];
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
