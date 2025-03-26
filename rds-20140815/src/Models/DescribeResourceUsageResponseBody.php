<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;

class DescribeResourceUsageResponseBody extends Model
{
    /**
     * @var int
     */
    public $archiveBackupSize;

    /**
     * @var int
     */
    public $backupDataSize;

    /**
     * @var string
     */
    public $backupEcsSnapshotSize;

    /**
     * @var int
     */
    public $backupLogSize;

    /**
     * @var int
     */
    public $backupOssDataSize;

    /**
     * @var int
     */
    public $backupOssLogSize;

    /**
     * @var int
     */
    public $backupSize;

    /**
     * @var int
     */
    public $coldBackupSize;

    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var int
     */
    public $dataSize;

    /**
     * @var int
     */
    public $diskUsed;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var int
     */
    public $logSize;

    /**
     * @var int
     */
    public $paidBackupSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $SQLSize;
    protected $_name = [
        'archiveBackupSize' => 'ArchiveBackupSize',
        'backupDataSize' => 'BackupDataSize',
        'backupEcsSnapshotSize' => 'BackupEcsSnapshotSize',
        'backupLogSize' => 'BackupLogSize',
        'backupOssDataSize' => 'BackupOssDataSize',
        'backupOssLogSize' => 'BackupOssLogSize',
        'backupSize' => 'BackupSize',
        'coldBackupSize' => 'ColdBackupSize',
        'DBInstanceId' => 'DBInstanceId',
        'dataSize' => 'DataSize',
        'diskUsed' => 'DiskUsed',
        'engine' => 'Engine',
        'logSize' => 'LogSize',
        'paidBackupSize' => 'PaidBackupSize',
        'requestId' => 'RequestId',
        'SQLSize' => 'SQLSize',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->archiveBackupSize) {
            $res['ArchiveBackupSize'] = $this->archiveBackupSize;
        }

        if (null !== $this->backupDataSize) {
            $res['BackupDataSize'] = $this->backupDataSize;
        }

        if (null !== $this->backupEcsSnapshotSize) {
            $res['BackupEcsSnapshotSize'] = $this->backupEcsSnapshotSize;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArchiveBackupSize'])) {
            $model->archiveBackupSize = $map['ArchiveBackupSize'];
        }

        if (isset($map['BackupDataSize'])) {
            $model->backupDataSize = $map['BackupDataSize'];
        }

        if (isset($map['BackupEcsSnapshotSize'])) {
            $model->backupEcsSnapshotSize = $map['BackupEcsSnapshotSize'];
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
