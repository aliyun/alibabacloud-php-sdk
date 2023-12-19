<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Tea\Model;

class CreateHanaRestoreRequest extends Model
{
    /**
     * @description The ID of the backup.
     *
     * @example 1645628400235
     *
     * @var int
     */
    public $backupId;

    /**
     * @description The backup prefix.
     *
     * @example COMPLETE_DATA_BACKUP_2022_05_02_15_39
     *
     * @var string
     */
    public $backupPrefix;

    /**
     * @description Specifies whether to validate the differential backup and log backup. Valid values: true and false. If you set the value to true, HBR checks whether the required differential backup and log backup are available before the restore job starts. If the differential backup or log backup is unavailable, HBR does not start the restore job.
     *
     * @example false
     *
     * @var bool
     */
    public $checkAccess;

    /**
     * @description Specifies whether to delete all log entries from the log area after the log entries are restored. Valid values: true and false. If you set the value to false, all log entries are deleted from the log area after the log entries are restored.
     *
     * @example false
     *
     * @var bool
     */
    public $clearLog;

    /**
     * @description The ID of the SAP HANA instance that you want to restore.
     *
     * @example cl-000fbrs5******ka9w
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The name of the database that you want to restore.
     *
     * @example TS2
     *
     * @var string
     */
    public $databaseName;

    /**
     * @description The log position to which you want to restore the database. This parameter is valid only if you set the Mode parameter to **RECOVERY_TO_LOG_POSITION**.
     *
     * @example 0
     *
     * @var int
     */
    public $logPosition;

    /**
     * @description The ID of the client where the primary node of the SAP HANA resides.
     *
     * @example c-000ii8tzv**********
     *
     * @var string
     */
    public $masterClientId;

    /**
     * @description The recovery mode. Valid values:
     *
     *   **RECOVERY_TO_MOST_RECENT**: restores the database to the recently available state to which the database has been backed up.
     *   **RECOVERY_TO_POINT_IN_TIME**: restores the database to a specified point in time.
     *   **RECOVERY_TO_SPECIFIC_BACKUP**: restores the database to a specified backup.
     *   **RECOVERY_TO_LOG_POSITION**: restores the database to a specified log position.
     *
     * @example RECOVERY_TO_POINT_IN_TIME
     *
     * @var string
     */
    public $mode;

    /**
     * @description The point in time to which you want to restore the database. This parameter is valid only if you set the Mode parameter to **RECOVERY_TO_POINT_IN_TIME**. HBR restores the database to a state closest to the specified point in time.
     *
     * @example 1635315505
     *
     * @var int
     */
    public $recoveryPointInTime;

    /**
     * @description The SID admin account that is created by SAP HANA.
     *
     * @example DB
     *
     * @var string
     */
    public $sidAdmin;

    /**
     * @description The name of the source system. This parameter specifies the name of the source database that you want to restore. You must set the parameter in the `<Source database name>@SID` format.
     *
     * @example HNP@HNP
     *
     * @var string
     */
    public $source;

    /**
     * @description The ID of the source SAP HANA instance.
     *
     * @example cl-000ii8tzv******xm0t
     *
     * @var string
     */
    public $sourceClusterId;

    /**
     * @description Specifies whether to restore the database to a different instance.
     *
     * @example false
     *
     * @var bool
     */
    public $systemCopy;

    /**
     * @description Specifies whether to use a catalog backup to restore the database. This parameter is valid only if you set the Mode parameter to **RECOVERY_TO_SPECIFIC_BACKUP**. If you do not use a catalog backup, you must specify the prefix of a backup file. Then, HBR finds the backup file based on the specified prefix and restores the backup file.
     *
     * @example false
     *
     * @var bool
     */
    public $useCatalog;

    /**
     * @description Specifies whether to use a differential backup or an incremental backup to restore the database. Valid values: true and false. If you want to use a differential backup or an incremental backup to restore the database, set the value to true. If you set the value to false, HBR uses a log backup to restore the database.
     *
     * @example true
     *
     * @var bool
     */
    public $useDelta;

    /**
     * @description The ID of the vault.
     *
     * @example v-000************yqr
     *
     * @var string
     */
    public $vaultId;

    /**
     * @description The ID of the volume that you want to restore. This parameter is valid only if you set the Mode parameter to **RECOVERY_TO_LOG_POSITION**.
     *
     * @example 0
     *
     * @var int
     */
    public $volumeId;
    protected $_name = [
        'backupId'            => 'BackupId',
        'backupPrefix'        => 'BackupPrefix',
        'checkAccess'         => 'CheckAccess',
        'clearLog'            => 'ClearLog',
        'clusterId'           => 'ClusterId',
        'databaseName'        => 'DatabaseName',
        'logPosition'         => 'LogPosition',
        'masterClientId'      => 'MasterClientId',
        'mode'                => 'Mode',
        'recoveryPointInTime' => 'RecoveryPointInTime',
        'sidAdmin'            => 'SidAdmin',
        'source'              => 'Source',
        'sourceClusterId'     => 'SourceClusterId',
        'systemCopy'          => 'SystemCopy',
        'useCatalog'          => 'UseCatalog',
        'useDelta'            => 'UseDelta',
        'vaultId'             => 'VaultId',
        'volumeId'            => 'VolumeId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupId) {
            $res['BackupId'] = $this->backupId;
        }
        if (null !== $this->backupPrefix) {
            $res['BackupPrefix'] = $this->backupPrefix;
        }
        if (null !== $this->checkAccess) {
            $res['CheckAccess'] = $this->checkAccess;
        }
        if (null !== $this->clearLog) {
            $res['ClearLog'] = $this->clearLog;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }
        if (null !== $this->logPosition) {
            $res['LogPosition'] = $this->logPosition;
        }
        if (null !== $this->masterClientId) {
            $res['MasterClientId'] = $this->masterClientId;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->recoveryPointInTime) {
            $res['RecoveryPointInTime'] = $this->recoveryPointInTime;
        }
        if (null !== $this->sidAdmin) {
            $res['SidAdmin'] = $this->sidAdmin;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->sourceClusterId) {
            $res['SourceClusterId'] = $this->sourceClusterId;
        }
        if (null !== $this->systemCopy) {
            $res['SystemCopy'] = $this->systemCopy;
        }
        if (null !== $this->useCatalog) {
            $res['UseCatalog'] = $this->useCatalog;
        }
        if (null !== $this->useDelta) {
            $res['UseDelta'] = $this->useDelta;
        }
        if (null !== $this->vaultId) {
            $res['VaultId'] = $this->vaultId;
        }
        if (null !== $this->volumeId) {
            $res['VolumeId'] = $this->volumeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateHanaRestoreRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupId'])) {
            $model->backupId = $map['BackupId'];
        }
        if (isset($map['BackupPrefix'])) {
            $model->backupPrefix = $map['BackupPrefix'];
        }
        if (isset($map['CheckAccess'])) {
            $model->checkAccess = $map['CheckAccess'];
        }
        if (isset($map['ClearLog'])) {
            $model->clearLog = $map['ClearLog'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }
        if (isset($map['LogPosition'])) {
            $model->logPosition = $map['LogPosition'];
        }
        if (isset($map['MasterClientId'])) {
            $model->masterClientId = $map['MasterClientId'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['RecoveryPointInTime'])) {
            $model->recoveryPointInTime = $map['RecoveryPointInTime'];
        }
        if (isset($map['SidAdmin'])) {
            $model->sidAdmin = $map['SidAdmin'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['SourceClusterId'])) {
            $model->sourceClusterId = $map['SourceClusterId'];
        }
        if (isset($map['SystemCopy'])) {
            $model->systemCopy = $map['SystemCopy'];
        }
        if (isset($map['UseCatalog'])) {
            $model->useCatalog = $map['UseCatalog'];
        }
        if (isset($map['UseDelta'])) {
            $model->useDelta = $map['UseDelta'];
        }
        if (isset($map['VaultId'])) {
            $model->vaultId = $map['VaultId'];
        }
        if (isset($map['VolumeId'])) {
            $model->volumeId = $map['VolumeId'];
        }

        return $model;
    }
}
