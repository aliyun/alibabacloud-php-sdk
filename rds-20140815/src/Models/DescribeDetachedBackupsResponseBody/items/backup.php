<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDetachedBackupsResponseBody\items;

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
    public $storeStatus;

    /**
     * @var int
     */
    public $consistentTime;

    /**
     * @var string
     */
    public $backupStartTime;

    /**
     * @var string
     */
    public $backupType;

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
    public $backupEndTime;

    /**
     * @var string
     */
    public $metaStatus;

    /**
     * @var string
     */
    public $backupId;

    /**
     * @var string
     */
    public $hostInstanceID;

    /**
     * @var string
     */
    public $backupIntranetDownloadURL;

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

    /**
     * @var string
     */
    public $backupMethod;
    protected $_name = [
        'backupStatus'              => 'BackupStatus',
        'storeStatus'               => 'StoreStatus',
        'consistentTime'            => 'ConsistentTime',
        'backupStartTime'           => 'BackupStartTime',
        'backupType'                => 'BackupType',
        'backupDownloadURL'         => 'BackupDownloadURL',
        'isAvail'                   => 'IsAvail',
        'backupEndTime'             => 'BackupEndTime',
        'metaStatus'                => 'MetaStatus',
        'backupId'                  => 'BackupId',
        'hostInstanceID'            => 'HostInstanceID',
        'backupIntranetDownloadURL' => 'BackupIntranetDownloadURL',
        'backupSize'                => 'BackupSize',
        'backupMode'                => 'BackupMode',
        'DBInstanceId'              => 'DBInstanceId',
        'backupMethod'              => 'BackupMethod',
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
        if (null !== $this->storeStatus) {
            $res['StoreStatus'] = $this->storeStatus;
        }
        if (null !== $this->consistentTime) {
            $res['ConsistentTime'] = $this->consistentTime;
        }
        if (null !== $this->backupStartTime) {
            $res['BackupStartTime'] = $this->backupStartTime;
        }
        if (null !== $this->backupType) {
            $res['BackupType'] = $this->backupType;
        }
        if (null !== $this->backupDownloadURL) {
            $res['BackupDownloadURL'] = $this->backupDownloadURL;
        }
        if (null !== $this->isAvail) {
            $res['IsAvail'] = $this->isAvail;
        }
        if (null !== $this->backupEndTime) {
            $res['BackupEndTime'] = $this->backupEndTime;
        }
        if (null !== $this->metaStatus) {
            $res['MetaStatus'] = $this->metaStatus;
        }
        if (null !== $this->backupId) {
            $res['BackupId'] = $this->backupId;
        }
        if (null !== $this->hostInstanceID) {
            $res['HostInstanceID'] = $this->hostInstanceID;
        }
        if (null !== $this->backupIntranetDownloadURL) {
            $res['BackupIntranetDownloadURL'] = $this->backupIntranetDownloadURL;
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
        if (isset($map['StoreStatus'])) {
            $model->storeStatus = $map['StoreStatus'];
        }
        if (isset($map['ConsistentTime'])) {
            $model->consistentTime = $map['ConsistentTime'];
        }
        if (isset($map['BackupStartTime'])) {
            $model->backupStartTime = $map['BackupStartTime'];
        }
        if (isset($map['BackupType'])) {
            $model->backupType = $map['BackupType'];
        }
        if (isset($map['BackupDownloadURL'])) {
            $model->backupDownloadURL = $map['BackupDownloadURL'];
        }
        if (isset($map['IsAvail'])) {
            $model->isAvail = $map['IsAvail'];
        }
        if (isset($map['BackupEndTime'])) {
            $model->backupEndTime = $map['BackupEndTime'];
        }
        if (isset($map['MetaStatus'])) {
            $model->metaStatus = $map['MetaStatus'];
        }
        if (isset($map['BackupId'])) {
            $model->backupId = $map['BackupId'];
        }
        if (isset($map['HostInstanceID'])) {
            $model->hostInstanceID = $map['HostInstanceID'];
        }
        if (isset($map['BackupIntranetDownloadURL'])) {
            $model->backupIntranetDownloadURL = $map['BackupIntranetDownloadURL'];
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
        if (isset($map['BackupMethod'])) {
            $model->backupMethod = $map['BackupMethod'];
        }

        return $model;
    }
}
