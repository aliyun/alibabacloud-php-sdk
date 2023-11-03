<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeResourceUsageResponseBody extends Model
{
    /**
     * @description The storage that is occupied by archived backup files on the instance. Unit: bytes.
     *
     * @example 0
     *
     * @var int
     */
    public $archiveBackupSize;

    /**
     * @description The storage that is occupied by data backup files, excluding archived backup files, on the instance. Unit: bytes.
     *
     * @example 94324736
     *
     * @var int
     */
    public $backupDataSize;

    /**
     * @description The storage that is occupied by log backup files, excluding archived backup files, on the instance. Unit: bytes.
     *
     * @example 45145563
     *
     * @var int
     */
    public $backupLogSize;

    /**
     * @description The size of data backup files that are stored in Object Storage Service (OSS) buckets. Unit: bytes. The value 0 indicates no data backup files are stored in OSS buckets.
     *
     * @example 8821760
     *
     * @var int
     */
    public $backupOssDataSize;

    /**
     * @description The size of log backup files that are stored in OSS buckets. Unit: bytes. The value 0 indicates no log backup files are stored in OSS buckets.
     *
     * @example 44180999
     *
     * @var int
     */
    public $backupOssLogSize;

    /**
     * @description The storage that is used to store backup files. Unit: bytes. The value -1 indicates that no backup files are stored.
     *
     * @example 53002759
     *
     * @var int
     */
    public $backupSize;

    /**
     * @description The storage that is used to store cold backup files. Unit: bytes. The value -1 indicates that no cold backup files are stored.
     *
     * @example 2337275904
     *
     * @var int
     */
    public $coldBackupSize;

    /**
     * @description The instance ID.
     *
     * @example rm-uf6wjk5xxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The storage that is used to store data files. Unit: bytes. The value -1 indicates that no data files are stored.
     *
     * @example 1292094741
     *
     * @var int
     */
    public $dataSize;

    /**
     * @description The total storage that is occupied by data files and log files on the instance. Unit: bytes. The value -1 indicates that no data files or log files are stored on the instance.
     *
     * @example 2337275904
     *
     * @var int
     */
    public $diskUsed;

    /**
     * @description The database engine of the instance.
     *
     * @example MySQL
     *
     * @var string
     */
    public $engine;

    /**
     * @description The storage that is used to store log files. Unit: bytes. The value -1 indicates that no log files are stored.
     *
     * @example 1045181163
     *
     * @var int
     */
    public $logSize;

    /**
     * @description The backup storage for which you must pay. The system provides a free quota on backup storage. You must pay for the backup storage that exceeds the free quota. Unit: bytes.
     *
     * @example 0
     *
     * @var int
     */
    public $paidBackupSize;

    /**
     * @description The request ID.
     *
     * @example F937E173-559C-4498-8D90-38D32342B9E4
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The storage that is occupied to execute SQL statements on the instance. Unit: bytes. The value -1 indicates that no SQL statements are executed.
     *
     * @example 315052751
     *
     * @var int
     */
    public $SQLSize;
    protected $_name = [
        'archiveBackupSize' => 'ArchiveBackupSize',
        'backupDataSize'    => 'BackupDataSize',
        'backupLogSize'     => 'BackupLogSize',
        'backupOssDataSize' => 'BackupOssDataSize',
        'backupOssLogSize'  => 'BackupOssLogSize',
        'backupSize'        => 'BackupSize',
        'coldBackupSize'    => 'ColdBackupSize',
        'DBInstanceId'      => 'DBInstanceId',
        'dataSize'          => 'DataSize',
        'diskUsed'          => 'DiskUsed',
        'engine'            => 'Engine',
        'logSize'           => 'LogSize',
        'paidBackupSize'    => 'PaidBackupSize',
        'requestId'         => 'RequestId',
        'SQLSize'           => 'SQLSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->archiveBackupSize) {
            $res['ArchiveBackupSize'] = $this->archiveBackupSize;
        }
        if (null !== $this->backupDataSize) {
            $res['BackupDataSize'] = $this->backupDataSize;
        }
        if (null !== $this->backupLogSize) {
            $res['BackupLogSize'] = $this->backupLogSize;
        }
        if (null !== $this->backupOssDataSize) {
            $res['BackupOssDataSize'] = $this->backupOssDataSize;
        }
        if (null !== $this->backupOssLogSize) {
            $res['BackupOssLogSize'] = $this->backupOssLogSize;
        }
        if (null !== $this->backupSize) {
            $res['BackupSize'] = $this->backupSize;
        }
        if (null !== $this->coldBackupSize) {
            $res['ColdBackupSize'] = $this->coldBackupSize;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->dataSize) {
            $res['DataSize'] = $this->dataSize;
        }
        if (null !== $this->diskUsed) {
            $res['DiskUsed'] = $this->diskUsed;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->logSize) {
            $res['LogSize'] = $this->logSize;
        }
        if (null !== $this->paidBackupSize) {
            $res['PaidBackupSize'] = $this->paidBackupSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->SQLSize) {
            $res['SQLSize'] = $this->SQLSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeResourceUsageResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArchiveBackupSize'])) {
            $model->archiveBackupSize = $map['ArchiveBackupSize'];
        }
        if (isset($map['BackupDataSize'])) {
            $model->backupDataSize = $map['BackupDataSize'];
        }
        if (isset($map['BackupLogSize'])) {
            $model->backupLogSize = $map['BackupLogSize'];
        }
        if (isset($map['BackupOssDataSize'])) {
            $model->backupOssDataSize = $map['BackupOssDataSize'];
        }
        if (isset($map['BackupOssLogSize'])) {
            $model->backupOssLogSize = $map['BackupOssLogSize'];
        }
        if (isset($map['BackupSize'])) {
            $model->backupSize = $map['BackupSize'];
        }
        if (isset($map['ColdBackupSize'])) {
            $model->coldBackupSize = $map['ColdBackupSize'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DataSize'])) {
            $model->dataSize = $map['DataSize'];
        }
        if (isset($map['DiskUsed'])) {
            $model->diskUsed = $map['DiskUsed'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['LogSize'])) {
            $model->logSize = $map['LogSize'];
        }
        if (isset($map['PaidBackupSize'])) {
            $model->paidBackupSize = $map['PaidBackupSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SQLSize'])) {
            $model->SQLSize = $map['SQLSize'];
        }

        return $model;
    }
}
