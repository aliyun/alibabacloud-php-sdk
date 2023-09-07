<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDetachedBackupsResponseBody\items;

use AlibabaCloud\Tea\Model;

class backup extends Model
{
    /**
     * @description The end time of the backup task. The time is displayed in UTC.
     *
     * @example 2020-05-12T03:25:55Z
     *
     * @var string
     */
    public $backupEndTime;

    /**
     * @description The ID of the backup set.
     *
     * @example 111111111
     *
     * @var string
     */
    public $backupId;

    /**
     * @description The backup method. Only snapshot backups are supported. The value is set to **Snapshot**.
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
     * @example Manual
     *
     * @var string
     */
    public $backupMode;

    /**
     * @description The size of the backup set. Unit: bytes.
     *
     * > After you delete the target snapshot backups, the storage space consumed by the backups is released. The released storage space is smaller than the size of the backup file, because the snapshots share certain data blocks.
     * @example 7251056
     *
     * @var string
     */
    public $backupSetSize;

    /**
     * @description The start time of the backup task. The time is displayed in UTC.
     *
     * @example 2020-05-12T03:25:44Z
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
     * @description The type of the backup. Only full backups are supported. The value is set to **FullBackup**.
     *
     * @example FullBackup
     *
     * @var string
     */
    public $backupType;

    /**
     * @description The level of the backup set. Valid values:
     *
     *   **Level-1**: level-1 backup set
     *   **Level-2**: level-2 backup set
     *
     * @example Level-2
     *
     * @var string
     */
    public $backupsLevel;

    /**
     * @description The snapshot checkpoint time. The value is a Unix timestamp.
     *
     * @example 1589253947
     *
     * @var string
     */
    public $consistentTime;

    /**
     * @description The ID of the cluster.
     *
     * @example pc-**************
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description Indicates whether the backup set is available. Valid values:
     *
     *   **0**: The data backup set is unavailable.
     *   **1**: The data backup set is available.
     *
     * @example 1
     *
     * @var string
     */
    public $isAvail;

    /**
     * @description Indicates whether the backup set can be deleted. Valid values:
     *
     *   **Enabled**: The backup set can be deleted.
     *   **Disabled**: The backup set cannot be deleted.
     *
     * @example Disabled
     *
     * @var string
     */
    public $storeStatus;
    protected $_name = [
        'backupEndTime'   => 'BackupEndTime',
        'backupId'        => 'BackupId',
        'backupMethod'    => 'BackupMethod',
        'backupMode'      => 'BackupMode',
        'backupSetSize'   => 'BackupSetSize',
        'backupStartTime' => 'BackupStartTime',
        'backupStatus'    => 'BackupStatus',
        'backupType'      => 'BackupType',
        'backupsLevel'    => 'BackupsLevel',
        'consistentTime'  => 'ConsistentTime',
        'DBClusterId'     => 'DBClusterId',
        'isAvail'         => 'IsAvail',
        'storeStatus'     => 'StoreStatus',
    ];

    public function validate()
    {
    }

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
        if (null !== $this->isAvail) {
            $res['IsAvail'] = $this->isAvail;
        }
        if (null !== $this->storeStatus) {
            $res['StoreStatus'] = $this->storeStatus;
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
        if (isset($map['IsAvail'])) {
            $model->isAvail = $map['IsAvail'];
        }
        if (isset($map['StoreStatus'])) {
            $model->storeStatus = $map['StoreStatus'];
        }

        return $model;
    }
}
