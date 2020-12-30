<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeBackupsResponseBody\backups;

use AlibabaCloud\Tea\Model;

class backup extends Model
{
    /**
     * @var string
     */
    public $backupStatus;

    /**
     * @var string
     */
    public $backupType;

    /**
     * @var string
     */
    public $backupStartTime;

    /**
     * @var string
     */
    public $backupDownloadURL;

    /**
     * @var string
     */
    public $backupStartTimeUTC;

    /**
     * @var string
     */
    public $backupEndTime;

    /**
     * @var int
     */
    public $backupId;

    /**
     * @var string
     */
    public $backupDBNames;

    /**
     * @var string
     */
    public $backupEndTimeUTC;

    /**
     * @var string
     */
    public $backupSize;

    /**
     * @var string
     */
    public $backupMode;

    /**
     * @var string
     */
    public $backupMethod;
    protected $_name = [
        'backupStatus'       => 'BackupStatus',
        'backupType'         => 'BackupType',
        'backupStartTime'    => 'BackupStartTime',
        'backupDownloadURL'  => 'BackupDownloadURL',
        'backupStartTimeUTC' => 'BackupStartTimeUTC',
        'backupEndTime'      => 'BackupEndTime',
        'backupId'           => 'BackupId',
        'backupDBNames'      => 'BackupDBNames',
        'backupEndTimeUTC'   => 'BackupEndTimeUTC',
        'backupSize'         => 'BackupSize',
        'backupMode'         => 'BackupMode',
        'backupMethod'       => 'BackupMethod',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupStatus) {
            $res['BackupStatus'] = $this->backupStatus;
        }
        if (null !== $this->backupType) {
            $res['BackupType'] = $this->backupType;
        }
        if (null !== $this->backupStartTime) {
            $res['BackupStartTime'] = $this->backupStartTime;
        }
        if (null !== $this->backupDownloadURL) {
            $res['BackupDownloadURL'] = $this->backupDownloadURL;
        }
        if (null !== $this->backupStartTimeUTC) {
            $res['BackupStartTimeUTC'] = $this->backupStartTimeUTC;
        }
        if (null !== $this->backupEndTime) {
            $res['BackupEndTime'] = $this->backupEndTime;
        }
        if (null !== $this->backupId) {
            $res['BackupId'] = $this->backupId;
        }
        if (null !== $this->backupDBNames) {
            $res['BackupDBNames'] = $this->backupDBNames;
        }
        if (null !== $this->backupEndTimeUTC) {
            $res['BackupEndTimeUTC'] = $this->backupEndTimeUTC;
        }
        if (null !== $this->backupSize) {
            $res['BackupSize'] = $this->backupSize;
        }
        if (null !== $this->backupMode) {
            $res['BackupMode'] = $this->backupMode;
        }
        if (null !== $this->backupMethod) {
            $res['BackupMethod'] = $this->backupMethod;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return backup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupStatus'])) {
            $model->backupStatus = $map['BackupStatus'];
        }
        if (isset($map['BackupType'])) {
            $model->backupType = $map['BackupType'];
        }
        if (isset($map['BackupStartTime'])) {
            $model->backupStartTime = $map['BackupStartTime'];
        }
        if (isset($map['BackupDownloadURL'])) {
            $model->backupDownloadURL = $map['BackupDownloadURL'];
        }
        if (isset($map['BackupStartTimeUTC'])) {
            $model->backupStartTimeUTC = $map['BackupStartTimeUTC'];
        }
        if (isset($map['BackupEndTime'])) {
            $model->backupEndTime = $map['BackupEndTime'];
        }
        if (isset($map['BackupId'])) {
            $model->backupId = $map['BackupId'];
        }
        if (isset($map['BackupDBNames'])) {
            $model->backupDBNames = $map['BackupDBNames'];
        }
        if (isset($map['BackupEndTimeUTC'])) {
            $model->backupEndTimeUTC = $map['BackupEndTimeUTC'];
        }
        if (isset($map['BackupSize'])) {
            $model->backupSize = $map['BackupSize'];
        }
        if (isset($map['BackupMode'])) {
            $model->backupMode = $map['BackupMode'];
        }
        if (isset($map['BackupMethod'])) {
            $model->backupMethod = $map['BackupMethod'];
        }

        return $model;
    }
}
