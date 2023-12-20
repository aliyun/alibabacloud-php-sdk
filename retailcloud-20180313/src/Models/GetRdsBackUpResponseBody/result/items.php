<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313\Models\GetRdsBackUpResponseBody\result;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @example spdb,sys,test20181221,test-20181228
     *
     * @var string
     */
    public $backupDBNames;

    /**
     * @example 2019-02-13T12:20:00Z
     *
     * @var string
     */
    public $backupEndTime;

    /**
     * @example test
     *
     * @var string
     */
    public $backupExtractionStatus;

    /**
     * @example 321020562
     *
     * @var string
     */
    public $backupId;

    /**
     * @example test
     *
     * @var string
     */
    public $backupLocation;

    /**
     * @example Physical
     *
     * @var string
     */
    public $backupMethod;

    /**
     * @example Automated
     *
     * @var string
     */
    public $backupMode;

    /**
     * @example test
     *
     * @var string
     */
    public $backupScale;

    /**
     * @example 2167808
     *
     * @var int
     */
    public $backupSize;

    /**
     * @example 2019-02-03T12:20:00Z
     *
     * @var string
     */
    public $backupStartTime;

    /**
     * @example Success
     *
     * @var string
     */
    public $backupStatus;

    /**
     * @example FullBackup
     *
     * @var string
     */
    public $backupType;

    /**
     * @example rm-ul9wjk5xxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @example 5882781
     *
     * @var string
     */
    public $hostInstanceID;

    /**
     * @example OK
     *
     * @var string
     */
    public $metaStatus;

    /**
     * @example Disabled
     *
     * @var string
     */
    public $storeStatus;

    /**
     * @example 00000
     *
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
