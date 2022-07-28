<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeFullBackupListResponseBody\items;

use AlibabaCloud\Tea\Model;

class fullBackupFile extends Model
{
    /**
     * @var string
     */
    public $backupObjects;

    /**
     * @var int
     */
    public $backupSetExpiredTime;

    /**
     * @var string
     */
    public $backupSetId;

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
    public $createTime;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $errMessage;

    /**
     * @var int
     */
    public $finishTime;

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
        'backupObjects'        => 'BackupObjects',
        'backupSetExpiredTime' => 'BackupSetExpiredTime',
        'backupSetId'          => 'BackupSetId',
        'backupSize'           => 'BackupSize',
        'backupStatus'         => 'BackupStatus',
        'createTime'           => 'CreateTime',
        'endTime'              => 'EndTime',
        'errMessage'           => 'ErrMessage',
        'finishTime'           => 'FinishTime',
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
        if (null !== $this->backupObjects) {
            $res['BackupObjects'] = $this->backupObjects;
        }
        if (null !== $this->backupSetExpiredTime) {
            $res['BackupSetExpiredTime'] = $this->backupSetExpiredTime;
        }
        if (null !== $this->backupSetId) {
            $res['BackupSetId'] = $this->backupSetId;
        }
        if (null !== $this->backupSize) {
            $res['BackupSize'] = $this->backupSize;
        }
        if (null !== $this->backupStatus) {
            $res['BackupStatus'] = $this->backupStatus;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->errMessage) {
            $res['ErrMessage'] = $this->errMessage;
        }
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
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
     * @return fullBackupFile
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupObjects'])) {
            $model->backupObjects = $map['BackupObjects'];
        }
        if (isset($map['BackupSetExpiredTime'])) {
            $model->backupSetExpiredTime = $map['BackupSetExpiredTime'];
        }
        if (isset($map['BackupSetId'])) {
            $model->backupSetId = $map['BackupSetId'];
        }
        if (isset($map['BackupSize'])) {
            $model->backupSize = $map['BackupSize'];
        }
        if (isset($map['BackupStatus'])) {
            $model->backupStatus = $map['BackupStatus'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ErrMessage'])) {
            $model->errMessage = $map['ErrMessage'];
        }
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
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
