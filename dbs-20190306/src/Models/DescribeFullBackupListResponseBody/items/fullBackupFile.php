<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeFullBackupListResponseBody\items;

use AlibabaCloud\Tea\Model;

class fullBackupFile extends Model
{
    /**
     * @var int
     */
    public $finishTime;

    /**
     * @var string
     */
    public $backupStatus;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $sourceEndpointIpPort;

    /**
     * @var string
     */
    public $backupObjects;

    /**
     * @var string
     */
    public $errMessage;

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
    public $backupSetId;

    /**
     * @var int
     */
    public $backupSize;
    protected $_name = [
        'finishTime'           => 'FinishTime',
        'backupStatus'         => 'BackupStatus',
        'createTime'           => 'CreateTime',
        'sourceEndpointIpPort' => 'SourceEndpointIpPort',
        'backupObjects'        => 'BackupObjects',
        'errMessage'           => 'ErrMessage',
        'endTime'              => 'EndTime',
        'backupSetExpiredTime' => 'BackupSetExpiredTime',
        'startTime'            => 'StartTime',
        'storageMethod'        => 'StorageMethod',
        'backupSetId'          => 'BackupSetId',
        'backupSize'           => 'BackupSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }
        if (null !== $this->backupStatus) {
            $res['BackupStatus'] = $this->backupStatus;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->sourceEndpointIpPort) {
            $res['SourceEndpointIpPort'] = $this->sourceEndpointIpPort;
        }
        if (null !== $this->backupObjects) {
            $res['BackupObjects'] = $this->backupObjects;
        }
        if (null !== $this->errMessage) {
            $res['ErrMessage'] = $this->errMessage;
        }
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
        if (null !== $this->backupSetId) {
            $res['BackupSetId'] = $this->backupSetId;
        }
        if (null !== $this->backupSize) {
            $res['BackupSize'] = $this->backupSize;
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
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }
        if (isset($map['BackupStatus'])) {
            $model->backupStatus = $map['BackupStatus'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['SourceEndpointIpPort'])) {
            $model->sourceEndpointIpPort = $map['SourceEndpointIpPort'];
        }
        if (isset($map['BackupObjects'])) {
            $model->backupObjects = $map['BackupObjects'];
        }
        if (isset($map['ErrMessage'])) {
            $model->errMessage = $map['ErrMessage'];
        }
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
        if (isset($map['BackupSetId'])) {
            $model->backupSetId = $map['BackupSetId'];
        }
        if (isset($map['BackupSize'])) {
            $model->backupSize = $map['BackupSize'];
        }

        return $model;
    }
}
