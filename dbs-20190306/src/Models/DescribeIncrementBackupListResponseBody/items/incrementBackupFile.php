<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeIncrementBackupListResponseBody\items;

use AlibabaCloud\Tea\Model;

class incrementBackupFile extends Model
{
    /**
     * @var int
     */
    public $backupSetExpiredTime;

    /**
     * @var string
     */
    public $backupSetId;

    /**
     * @var string
     */
    public $backupSetJobId;

    /**
     * @var int
     */
    public $backupSize;

    /**
     * @var string
     */
    public $backupStatus;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $sourceEndpointIpPort;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $storageMethod;
    protected $_name = [
        'backupSetExpiredTime' => 'BackupSetExpiredTime',
        'backupSetId'          => 'BackupSetId',
        'backupSetJobId'       => 'BackupSetJobId',
        'backupSize'           => 'BackupSize',
        'backupStatus'         => 'BackupStatus',
        'endTime'              => 'EndTime',
        'sourceEndpointIpPort' => 'SourceEndpointIpPort',
        'startTime'            => 'StartTime',
        'storageMethod'        => 'StorageMethod',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupSetExpiredTime) {
            $res['BackupSetExpiredTime'] = $this->backupSetExpiredTime;
        }
        if (null !== $this->backupSetId) {
            $res['BackupSetId'] = $this->backupSetId;
        }
        if (null !== $this->backupSetJobId) {
            $res['BackupSetJobId'] = $this->backupSetJobId;
        }
        if (null !== $this->backupSize) {
            $res['BackupSize'] = $this->backupSize;
        }
        if (null !== $this->backupStatus) {
            $res['BackupStatus'] = $this->backupStatus;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->sourceEndpointIpPort) {
            $res['SourceEndpointIpPort'] = $this->sourceEndpointIpPort;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->storageMethod) {
            $res['StorageMethod'] = $this->storageMethod;
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
        if (isset($map['BackupSetExpiredTime'])) {
            $model->backupSetExpiredTime = $map['BackupSetExpiredTime'];
        }
        if (isset($map['BackupSetId'])) {
            $model->backupSetId = $map['BackupSetId'];
        }
        if (isset($map['BackupSetJobId'])) {
            $model->backupSetJobId = $map['BackupSetJobId'];
        }
        if (isset($map['BackupSize'])) {
            $model->backupSize = $map['BackupSize'];
        }
        if (isset($map['BackupStatus'])) {
            $model->backupStatus = $map['BackupStatus'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['SourceEndpointIpPort'])) {
            $model->sourceEndpointIpPort = $map['SourceEndpointIpPort'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['StorageMethod'])) {
            $model->storageMethod = $map['StorageMethod'];
        }

        return $model;
    }
}
