<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeBackupsResponseBody\items;

use AlibabaCloud\Tea\Model;

class backup extends Model
{
    /**
     * @var string
     */
    public $storageClass;

    /**
     * @var string
     */
    public $encryption;

    /**
     * @var string
     */
    public $backupStatus;

    /**
     * @var string
     */
    public $storeStatus;

    /**
     * @var int
     */
    public $consistentTime;

    /**
     * @var string
     */
    public $backupType;

    /**
     * @var string
     */
    public $copyOnlyBackup;

    /**
     * @var string
     */
    public $backupEndTime;

    /**
     * @var string
     */
    public $metaStatus;

    /**
     * @var string
     */
    public $backupInitiator;

    /**
     * @var string
     */
    public $backupIntranetDownloadURL;

    /**
     * @var string
     */
    public $backupMethod;

    /**
     * @var string
     */
    public $backupStartTime;

    /**
     * @var string
     */
    public $backupDownloadURL;

    /**
     * @var int
     */
    public $isAvail;

    /**
     * @var string
     */
    public $backupId;

    /**
     * @var string
     */
    public $hostInstanceID;

    /**
     * @var int
     */
    public $backupSize;

    /**
     * @var string
     */
    public $backupMode;

    /**
     * @var string
     */
    public $DBInstanceId;
    protected $_name = [
        'storageClass'              => 'StorageClass',
        'encryption'                => 'Encryption',
        'backupStatus'              => 'BackupStatus',
        'storeStatus'               => 'StoreStatus',
        'consistentTime'            => 'ConsistentTime',
        'backupType'                => 'BackupType',
        'copyOnlyBackup'            => 'CopyOnlyBackup',
        'backupEndTime'             => 'BackupEndTime',
        'metaStatus'                => 'MetaStatus',
        'backupInitiator'           => 'BackupInitiator',
        'backupIntranetDownloadURL' => 'BackupIntranetDownloadURL',
        'backupMethod'              => 'BackupMethod',
        'backupStartTime'           => 'BackupStartTime',
        'backupDownloadURL'         => 'BackupDownloadURL',
        'isAvail'                   => 'IsAvail',
        'backupId'                  => 'BackupId',
        'hostInstanceID'            => 'HostInstanceID',
        'backupSize'                => 'BackupSize',
        'backupMode'                => 'BackupMode',
        'DBInstanceId'              => 'DBInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->storageClass) {
            $res['StorageClass'] = $this->storageClass;
        }
        if (null !== $this->encryption) {
            $res['Encryption'] = $this->encryption;
        }
        if (null !== $this->backupStatus) {
            $res['BackupStatus'] = $this->backupStatus;
        }
        if (null !== $this->storeStatus) {
            $res['StoreStatus'] = $this->storeStatus;
        }
        if (null !== $this->consistentTime) {
            $res['ConsistentTime'] = $this->consistentTime;
        }
        if (null !== $this->backupType) {
            $res['BackupType'] = $this->backupType;
        }
        if (null !== $this->copyOnlyBackup) {
            $res['CopyOnlyBackup'] = $this->copyOnlyBackup;
        }
        if (null !== $this->backupEndTime) {
            $res['BackupEndTime'] = $this->backupEndTime;
        }
        if (null !== $this->metaStatus) {
            $res['MetaStatus'] = $this->metaStatus;
        }
        if (null !== $this->backupInitiator) {
            $res['BackupInitiator'] = $this->backupInitiator;
        }
        if (null !== $this->backupIntranetDownloadURL) {
            $res['BackupIntranetDownloadURL'] = $this->backupIntranetDownloadURL;
        }
        if (null !== $this->backupMethod) {
            $res['BackupMethod'] = $this->backupMethod;
        }
        if (null !== $this->backupStartTime) {
            $res['BackupStartTime'] = $this->backupStartTime;
        }
        if (null !== $this->backupDownloadURL) {
            $res['BackupDownloadURL'] = $this->backupDownloadURL;
        }
        if (null !== $this->isAvail) {
            $res['IsAvail'] = $this->isAvail;
        }
        if (null !== $this->backupId) {
            $res['BackupId'] = $this->backupId;
        }
        if (null !== $this->hostInstanceID) {
            $res['HostInstanceID'] = $this->hostInstanceID;
        }
        if (null !== $this->backupSize) {
            $res['BackupSize'] = $this->backupSize;
        }
        if (null !== $this->backupMode) {
            $res['BackupMode'] = $this->backupMode;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
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
        if (isset($map['StorageClass'])) {
            $model->storageClass = $map['StorageClass'];
        }
        if (isset($map['Encryption'])) {
            $model->encryption = $map['Encryption'];
        }
        if (isset($map['BackupStatus'])) {
            $model->backupStatus = $map['BackupStatus'];
        }
        if (isset($map['StoreStatus'])) {
            $model->storeStatus = $map['StoreStatus'];
        }
        if (isset($map['ConsistentTime'])) {
            $model->consistentTime = $map['ConsistentTime'];
        }
        if (isset($map['BackupType'])) {
            $model->backupType = $map['BackupType'];
        }
        if (isset($map['CopyOnlyBackup'])) {
            $model->copyOnlyBackup = $map['CopyOnlyBackup'];
        }
        if (isset($map['BackupEndTime'])) {
            $model->backupEndTime = $map['BackupEndTime'];
        }
        if (isset($map['MetaStatus'])) {
            $model->metaStatus = $map['MetaStatus'];
        }
        if (isset($map['BackupInitiator'])) {
            $model->backupInitiator = $map['BackupInitiator'];
        }
        if (isset($map['BackupIntranetDownloadURL'])) {
            $model->backupIntranetDownloadURL = $map['BackupIntranetDownloadURL'];
        }
        if (isset($map['BackupMethod'])) {
            $model->backupMethod = $map['BackupMethod'];
        }
        if (isset($map['BackupStartTime'])) {
            $model->backupStartTime = $map['BackupStartTime'];
        }
        if (isset($map['BackupDownloadURL'])) {
            $model->backupDownloadURL = $map['BackupDownloadURL'];
        }
        if (isset($map['IsAvail'])) {
            $model->isAvail = $map['IsAvail'];
        }
        if (isset($map['BackupId'])) {
            $model->backupId = $map['BackupId'];
        }
        if (isset($map['HostInstanceID'])) {
            $model->hostInstanceID = $map['HostInstanceID'];
        }
        if (isset($map['BackupSize'])) {
            $model->backupSize = $map['BackupSize'];
        }
        if (isset($map['BackupMode'])) {
            $model->backupMode = $map['BackupMode'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        return $model;
    }
}
