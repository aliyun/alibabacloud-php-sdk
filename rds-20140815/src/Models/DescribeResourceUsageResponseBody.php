<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeResourceUsageResponseBody extends Model
{
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
    public $backupSize;

    /**
     * @var int
     */
    public $archiveBackupSize;

    /**
     * @var int
     */
    public $coldBackupSize;

    /**
     * @var int
     */
    public $backupOssLogSize;

    /**
     * @var int
     */
    public $logSize;

    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var int
     */
    public $backupDataSize;

    /**
     * @var int
     */
    public $dataSize;

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
    public $SQLSize;

    /**
     * @var int
     */
    public $diskUsed;

    /**
     * @var string
     */
    public $engine;
    protected $_name = [
        'paidBackupSize'    => 'PaidBackupSize',
        'requestId'         => 'RequestId',
        'backupSize'        => 'BackupSize',
        'archiveBackupSize' => 'ArchiveBackupSize',
        'coldBackupSize'    => 'ColdBackupSize',
        'backupOssLogSize'  => 'BackupOssLogSize',
        'logSize'           => 'LogSize',
        'DBInstanceId'      => 'DBInstanceId',
        'backupDataSize'    => 'BackupDataSize',
        'dataSize'          => 'DataSize',
        'backupLogSize'     => 'BackupLogSize',
        'backupOssDataSize' => 'BackupOssDataSize',
        'SQLSize'           => 'SQLSize',
        'diskUsed'          => 'DiskUsed',
        'engine'            => 'Engine',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->paidBackupSize) {
            $res['PaidBackupSize'] = $this->paidBackupSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->backupSize) {
            $res['BackupSize'] = $this->backupSize;
        }
        if (null !== $this->archiveBackupSize) {
            $res['ArchiveBackupSize'] = $this->archiveBackupSize;
        }
        if (null !== $this->coldBackupSize) {
            $res['ColdBackupSize'] = $this->coldBackupSize;
        }
        if (null !== $this->backupOssLogSize) {
            $res['BackupOssLogSize'] = $this->backupOssLogSize;
        }
        if (null !== $this->logSize) {
            $res['LogSize'] = $this->logSize;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->backupDataSize) {
            $res['BackupDataSize'] = $this->backupDataSize;
        }
        if (null !== $this->dataSize) {
            $res['DataSize'] = $this->dataSize;
        }
        if (null !== $this->backupLogSize) {
            $res['BackupLogSize'] = $this->backupLogSize;
        }
        if (null !== $this->backupOssDataSize) {
            $res['BackupOssDataSize'] = $this->backupOssDataSize;
        }
        if (null !== $this->SQLSize) {
            $res['SQLSize'] = $this->SQLSize;
        }
        if (null !== $this->diskUsed) {
            $res['DiskUsed'] = $this->diskUsed;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
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
        if (isset($map['PaidBackupSize'])) {
            $model->paidBackupSize = $map['PaidBackupSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['BackupSize'])) {
            $model->backupSize = $map['BackupSize'];
        }
        if (isset($map['ArchiveBackupSize'])) {
            $model->archiveBackupSize = $map['ArchiveBackupSize'];
        }
        if (isset($map['ColdBackupSize'])) {
            $model->coldBackupSize = $map['ColdBackupSize'];
        }
        if (isset($map['BackupOssLogSize'])) {
            $model->backupOssLogSize = $map['BackupOssLogSize'];
        }
        if (isset($map['LogSize'])) {
            $model->logSize = $map['LogSize'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['BackupDataSize'])) {
            $model->backupDataSize = $map['BackupDataSize'];
        }
        if (isset($map['DataSize'])) {
            $model->dataSize = $map['DataSize'];
        }
        if (isset($map['BackupLogSize'])) {
            $model->backupLogSize = $map['BackupLogSize'];
        }
        if (isset($map['BackupOssDataSize'])) {
            $model->backupOssDataSize = $map['BackupOssDataSize'];
        }
        if (isset($map['SQLSize'])) {
            $model->SQLSize = $map['SQLSize'];
        }
        if (isset($map['DiskUsed'])) {
            $model->diskUsed = $map['DiskUsed'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }

        return $model;
    }
}
