<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313\Models\GetRdsBackUpResponseBody\result;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $backupDBNames;

    /**
     * @var string
     */
    public $backupEndTime;

    /**
     * @var string
     */
    public $backupExtractionStatus;

    /**
     * @var string
     */
    public $backupId;

    /**
     * @var string
     */
    public $backupLocation;

    /**
     * @var string
     */
    public $backupMethod;

    /**
     * @var string
     */
    public $backupMode;

    /**
     * @var string
     */
    public $backupScale;

    /**
     * @var int
     */
    public $backupSize;

    /**
     * @var string
     */
    public $backupStartTime;

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
    public $DBInstanceId;

    /**
     * @var string
     */
    public $hostInstanceID;

    /**
     * @var string
     */
    public $metaStatus;

    /**
     * @var string
     */
    public $storeStatus;

    /**
     * @var int
     */
    public $totalBackupSize;
    protected $_name = [
        'backupDBNames'          => 'BackupDBNames',
        'backupEndTime'          => 'BackupEndTime',
        'backupExtractionStatus' => 'BackupExtractionStatus',
        'backupId'               => 'BackupId',
        'backupLocation'         => 'BackupLocation',
        'backupMethod'           => 'BackupMethod',
        'backupMode'             => 'BackupMode',
        'backupScale'            => 'BackupScale',
        'backupSize'             => 'BackupSize',
        'backupStartTime'        => 'BackupStartTime',
        'backupStatus'           => 'BackupStatus',
        'backupType'             => 'BackupType',
        'DBInstanceId'           => 'DBInstanceId',
        'hostInstanceID'         => 'HostInstanceID',
        'metaStatus'             => 'MetaStatus',
        'storeStatus'            => 'StoreStatus',
        'totalBackupSize'        => 'TotalBackupSize',
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
        if (null !== $this->backupEndTime) {
            $res['BackupEndTime'] = $this->backupEndTime;
        }
        if (null !== $this->backupExtractionStatus) {
            $res['BackupExtractionStatus'] = $this->backupExtractionStatus;
        }
        if (null !== $this->backupId) {
            $res['BackupId'] = $this->backupId;
        }
        if (null !== $this->backupLocation) {
            $res['BackupLocation'] = $this->backupLocation;
        }
        if (null !== $this->backupMethod) {
            $res['BackupMethod'] = $this->backupMethod;
        }
        if (null !== $this->backupMode) {
            $res['BackupMode'] = $this->backupMode;
        }
        if (null !== $this->backupScale) {
            $res['BackupScale'] = $this->backupScale;
        }
        if (null !== $this->backupSize) {
            $res['BackupSize'] = $this->backupSize;
        }
        if (null !== $this->backupStartTime) {
            $res['BackupStartTime'] = $this->backupStartTime;
        }
        if (null !== $this->backupStatus) {
            $res['BackupStatus'] = $this->backupStatus;
        }
        if (null !== $this->backupType) {
            $res['BackupType'] = $this->backupType;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->hostInstanceID) {
            $res['HostInstanceID'] = $this->hostInstanceID;
        }
        if (null !== $this->metaStatus) {
            $res['MetaStatus'] = $this->metaStatus;
        }
        if (null !== $this->storeStatus) {
            $res['StoreStatus'] = $this->storeStatus;
        }
        if (null !== $this->totalBackupSize) {
            $res['TotalBackupSize'] = $this->totalBackupSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupDBNames'])) {
            $model->backupDBNames = $map['BackupDBNames'];
        }
        if (isset($map['BackupEndTime'])) {
            $model->backupEndTime = $map['BackupEndTime'];
        }
        if (isset($map['BackupExtractionStatus'])) {
            $model->backupExtractionStatus = $map['BackupExtractionStatus'];
        }
        if (isset($map['BackupId'])) {
            $model->backupId = $map['BackupId'];
        }
        if (isset($map['BackupLocation'])) {
            $model->backupLocation = $map['BackupLocation'];
        }
        if (isset($map['BackupMethod'])) {
            $model->backupMethod = $map['BackupMethod'];
        }
        if (isset($map['BackupMode'])) {
            $model->backupMode = $map['BackupMode'];
        }
        if (isset($map['BackupScale'])) {
            $model->backupScale = $map['BackupScale'];
        }
        if (isset($map['BackupSize'])) {
            $model->backupSize = $map['BackupSize'];
        }
        if (isset($map['BackupStartTime'])) {
            $model->backupStartTime = $map['BackupStartTime'];
        }
        if (isset($map['BackupStatus'])) {
            $model->backupStatus = $map['BackupStatus'];
        }
        if (isset($map['BackupType'])) {
            $model->backupType = $map['BackupType'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['HostInstanceID'])) {
            $model->hostInstanceID = $map['HostInstanceID'];
        }
        if (isset($map['MetaStatus'])) {
            $model->metaStatus = $map['MetaStatus'];
        }
        if (isset($map['StoreStatus'])) {
            $model->storeStatus = $map['StoreStatus'];
        }
        if (isset($map['TotalBackupSize'])) {
            $model->totalBackupSize = $map['TotalBackupSize'];
        }

        return $model;
    }
}
