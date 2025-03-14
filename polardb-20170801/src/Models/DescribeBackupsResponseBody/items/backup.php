<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeBackupsResponseBody\items;

use AlibabaCloud\Tea\Model;

class backup extends Model
{
    /**
     * @description The end time of the backup task. The time is displayed in UTC.
     *
     * @example 2020-11-15T07:30:20Z
     *
     * @var string
     */
    public $backupEndTime;

    /**
     * @description The ID of the backup set.
     *
     * @example 61*******
     *
     * @var string
     */
    public $backupId;

    /**
     * @description The backup method. Only **Snapshot** may be returned.
     *
     * @example Snapshot
     *
     * @var string
     */
    public $backupMethod;

    /**
     * @description The backup mode. Valid values:
     *
     *   **Automated**
     *   **Manual**
     *
     * @example Automated
     *
     * @var string
     */
    public $backupMode;

    /**
     * @description The size of the backup set. Unit: bytes.
     *
     * > After you delete the target snapshot backups, the storage space that is consumed by the backups is released. The released storage space is smaller than the size of the backup file, because the snapshots share specific data blocks. For more information, see [FAQ about backup](https://help.aliyun.com/document_detail/164881.html).
     *
     * @example 4639948800
     *
     * @var string
     */
    public $backupSetSize;

    /**
     * @description The start time of the backup task. The time is displayed in UTC. Unit: seconds.
     *
     * @example 2020-11-15T07:30:05Z
     *
     * @var string
     */
    public $backupStartTime;

    /**
     * @description The status of the backup set. Valid values:
     *
     *   **Success**
     *   **Failed**
     *
     * @example Success
     *
     * @var string
     */
    public $backupStatus;

    /**
     * @description The type of the backup. Only **FullBackup** may be returned.
     *
     * @example FullBackup
     *
     * @var string
     */
    public $backupType;

    /**
     * @description The level of the backup set. Valid values:
     *
     *   **Level-1**
     *   **Level-2**
     *
     * @example Level-1
     *
     * @var string
     */
    public $backupsLevel;

    /**
     * @description The snapshot checkpoint time. The value follows the Unix time format. Unit: seconds.
     *
     * @example 1605425407
     *
     * @var string
     */
    public $consistentTime;

    /**
     * @description The ID of the cluster.
     *
     * @example pc-****************
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The expected expiration time of the backup set (This parameter is supported only for clusters for which sparse backup is enabled).
     *
     * @example 2022-10-24T08:13:23Z
     *
     * @var string
     */
    public $expectExpireTime;

    /**
     * @description The expected expiration type of the backup set (This parameter is supported only for instances that are enabled with sparse backup).
     *
     * Valid values:
     *
     *   NEVER
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * <!-- -->
     *
     *   EXPIRED
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * <!-- -->
     *
     *   DELAY
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * <!-- -->
     *
     * @example EXPIRED
     *
     * @var string
     */
    public $expectExpireType;

    /**
     * @description Indicates whether the backup set is available. Valid values:
     *
     *   **0**: The backup set is unavailable.
     *   **1**: The backup set is available.
     *
     * @example 0
     *
     * @var string
     */
    public $isAvail;
    protected $_name = [
        'backupEndTime' => 'BackupEndTime',
        'backupId' => 'BackupId',
        'backupMethod' => 'BackupMethod',
        'backupMode' => 'BackupMode',
        'backupSetSize' => 'BackupSetSize',
        'backupStartTime' => 'BackupStartTime',
        'backupStatus' => 'BackupStatus',
        'backupType' => 'BackupType',
        'backupsLevel' => 'BackupsLevel',
        'consistentTime' => 'ConsistentTime',
        'DBClusterId' => 'DBClusterId',
        'expectExpireTime' => 'ExpectExpireTime',
        'expectExpireType' => 'ExpectExpireType',
        'isAvail' => 'IsAvail',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupEndTime) {
            $res['BackupEndTime'] = $this->backupEndTime;
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
        if (null !== $this->backupSetSize) {
            $res['BackupSetSize'] = $this->backupSetSize;
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
        if (null !== $this->backupsLevel) {
            $res['BackupsLevel'] = $this->backupsLevel;
        }
        if (null !== $this->consistentTime) {
            $res['ConsistentTime'] = $this->consistentTime;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->expectExpireTime) {
            $res['ExpectExpireTime'] = $this->expectExpireTime;
        }
        if (null !== $this->expectExpireType) {
            $res['ExpectExpireType'] = $this->expectExpireType;
        }
        if (null !== $this->isAvail) {
            $res['IsAvail'] = $this->isAvail;
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
        if (isset($map['BackupEndTime'])) {
            $model->backupEndTime = $map['BackupEndTime'];
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
        if (isset($map['BackupSetSize'])) {
            $model->backupSetSize = $map['BackupSetSize'];
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
        if (isset($map['BackupsLevel'])) {
            $model->backupsLevel = $map['BackupsLevel'];
        }
        if (isset($map['ConsistentTime'])) {
            $model->consistentTime = $map['ConsistentTime'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['ExpectExpireTime'])) {
            $model->expectExpireTime = $map['ExpectExpireTime'];
        }
        if (isset($map['ExpectExpireType'])) {
            $model->expectExpireType = $map['ExpectExpireType'];
        }
        if (isset($map['IsAvail'])) {
            $model->isAvail = $map['IsAvail'];
        }

        return $model;
    }
}
