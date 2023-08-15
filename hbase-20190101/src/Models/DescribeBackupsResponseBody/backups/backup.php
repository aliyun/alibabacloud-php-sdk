<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeBackupsResponseBody\backups;

use AlibabaCloud\Tea\Model;

class backup extends Model
{
    /**
     * @example 1
     *
     * @var string
     */
    public $backupDBNames;

    /**
     * @example 1
     *
     * @var string
     */
    public $backupDownloadURL;

    /**
     * @example 2020-12-23 17:25:24
     *
     * @var string
     */
    public $backupEndTime;

    /**
     * @example 2020-12-23T09:25:24Z
     *
     * @var string
     */
    public $backupEndTimeUTC;

    /**
     * @example 511876087
     *
     * @var int
     */
    public $backupId;

    /**
     * @example P
     *
     * @var string
     */
    public $backupMethod;

    /**
     * @example 0
     *
     * @var string
     */
    public $backupMode;

    /**
     * @example 0.00
     *
     * @var string
     */
    public $backupSize;

    /**
     * @example 2020-12-23 17:25:08
     *
     * @var string
     */
    public $backupStartTime;

    /**
     * @example 2020-12-23T09:25:08Z
     *
     * @var string
     */
    public $backupStartTimeUTC;

    /**
     * @example 0
     *
     * @var string
     */
    public $backupStatus;

    /**
     * @example F
     *
     * @var string
     */
    public $backupType;
    protected $_name = [
        'backupDBNames'      => 'BackupDBNames',
        'backupDownloadURL'  => 'BackupDownloadURL',
        'backupEndTime'      => 'BackupEndTime',
        'backupEndTimeUTC'   => 'BackupEndTimeUTC',
        'backupId'           => 'BackupId',
        'backupMethod'       => 'BackupMethod',
        'backupMode'         => 'BackupMode',
        'backupSize'         => 'BackupSize',
        'backupStartTime'    => 'BackupStartTime',
        'backupStartTimeUTC' => 'BackupStartTimeUTC',
        'backupStatus'       => 'BackupStatus',
        'backupType'         => 'BackupType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupDBNames) {
            $res['BackupDBNames'] = $this->backupDBNames;
        }
        if (null !== $this->backupDownloadURL) {
            $res['BackupDownloadURL'] = $this->backupDownloadURL;
        }
        if (null !== $this->backupEndTime) {
            $res['BackupEndTime'] = $this->backupEndTime;
        }
        if (null !== $this->backupEndTimeUTC) {
            $res['BackupEndTimeUTC'] = $this->backupEndTimeUTC;
        }
        if (null !== $this->backupId) {
            $res['BackupId'] = $this->backupId;
        }
        if (null !== $this->backupMethod) {
            $res['BackupMethod'] = $this->backupMethod;
        }
        if (null !== $this->backupMode) {
            $res['BackupMode'] = $this->backupMode;
        }
        if (null !== $this->backupSize) {
            $res['BackupSize'] = $this->backupSize;
        }
        if (null !== $this->backupStartTime) {
            $res['BackupStartTime'] = $this->backupStartTime;
        }
        if (null !== $this->backupStartTimeUTC) {
            $res['BackupStartTimeUTC'] = $this->backupStartTimeUTC;
        }
        if (null !== $this->backupStatus) {
            $res['BackupStatus'] = $this->backupStatus;
        }
        if (null !== $this->backupType) {
            $res['BackupType'] = $this->backupType;
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
        if (isset($map['BackupDBNames'])) {
            $model->backupDBNames = $map['BackupDBNames'];
        }
        if (isset($map['BackupDownloadURL'])) {
            $model->backupDownloadURL = $map['BackupDownloadURL'];
        }
        if (isset($map['BackupEndTime'])) {
            $model->backupEndTime = $map['BackupEndTime'];
        }
        if (isset($map['BackupEndTimeUTC'])) {
            $model->backupEndTimeUTC = $map['BackupEndTimeUTC'];
        }
        if (isset($map['BackupId'])) {
            $model->backupId = $map['BackupId'];
        }
        if (isset($map['BackupMethod'])) {
            $model->backupMethod = $map['BackupMethod'];
        }
        if (isset($map['BackupMode'])) {
            $model->backupMode = $map['BackupMode'];
        }
        if (isset($map['BackupSize'])) {
            $model->backupSize = $map['BackupSize'];
        }
        if (isset($map['BackupStartTime'])) {
            $model->backupStartTime = $map['BackupStartTime'];
        }
        if (isset($map['BackupStartTimeUTC'])) {
            $model->backupStartTimeUTC = $map['BackupStartTimeUTC'];
        }
        if (isset($map['BackupStatus'])) {
            $model->backupStatus = $map['BackupStatus'];
        }
        if (isset($map['BackupType'])) {
            $model->backupType = $map['BackupType'];
        }

        return $model;
    }
}
