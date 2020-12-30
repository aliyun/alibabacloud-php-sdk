<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeIncrementBackupListResponseBody\items;

use AlibabaCloud\Tea\Model;

class incrementBackupFile extends Model
{
    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $backupSetExpiredTime;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $storageMethod;

    /**
     * @var string
     */
    public $backupSetJobId;

    /**
     * @var string
     */
    public $backupSetId;

    /**
     * @var string
     */
    public $backupStatus;

    /**
     * @var string
     */
    public $sourceEndpointIpPort;

    /**
     * @var int
     */
    public $backupSize;
    protected $_name = [
        'endTime'              => 'EndTime',
        'backupSetExpiredTime' => 'BackupSetExpiredTime',
        'startTime'            => 'StartTime',
        'storageMethod'        => 'StorageMethod',
        'backupSetJobId'       => 'BackupSetJobId',
        'backupSetId'          => 'BackupSetId',
        'backupStatus'         => 'BackupStatus',
        'sourceEndpointIpPort' => 'SourceEndpointIpPort',
        'backupSize'           => 'BackupSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->backupSetExpiredTime) {
            $res['BackupSetExpiredTime'] = $this->backupSetExpiredTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->storageMethod) {
            $res['StorageMethod'] = $this->storageMethod;
        }
        if (null !== $this->backupSetJobId) {
            $res['BackupSetJobId'] = $this->backupSetJobId;
        }
        if (null !== $this->backupSetId) {
            $res['BackupSetId'] = $this->backupSetId;
        }
        if (null !== $this->backupStatus) {
            $res['BackupStatus'] = $this->backupStatus;
        }
        if (null !== $this->sourceEndpointIpPort) {
            $res['SourceEndpointIpPort'] = $this->sourceEndpointIpPort;
        }
        if (null !== $this->backupSize) {
            $res['BackupSize'] = $this->backupSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return incrementBackupFile
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['BackupSetExpiredTime'])) {
            $model->backupSetExpiredTime = $map['BackupSetExpiredTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['StorageMethod'])) {
            $model->storageMethod = $map['StorageMethod'];
        }
        if (isset($map['BackupSetJobId'])) {
            $model->backupSetJobId = $map['BackupSetJobId'];
        }
        if (isset($map['BackupSetId'])) {
            $model->backupSetId = $map['BackupSetId'];
        }
        if (isset($map['BackupStatus'])) {
            $model->backupStatus = $map['BackupStatus'];
        }
        if (isset($map['SourceEndpointIpPort'])) {
            $model->sourceEndpointIpPort = $map['SourceEndpointIpPort'];
        }
        if (isset($map['BackupSize'])) {
            $model->backupSize = $map['BackupSize'];
        }

        return $model;
    }
}
