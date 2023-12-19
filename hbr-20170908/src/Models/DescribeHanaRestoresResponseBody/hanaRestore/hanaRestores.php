<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeHanaRestoresResponseBody\hanaRestore;

use AlibabaCloud\Tea\Model;

class hanaRestores extends Model
{
    /**
     * @description The ID of the backup.
     *
     * @example 1635315505
     *
     * @var int
     */
    public $backupID;

    /**
     * @description The backup prefix.
     *
     * @example INC_DATA_BACKUP
     *
     * @var string
     */
    public $backupPrefix;

    /**
     * @description Indicates whether the differential backup and log backup are validated. Valid values:
     *
     *   true: HBR checks whether the required differential backup and log backup are available before the restore job starts. If the differential backup or log backup is unavailable, HBR does not start the restore job.
     *   false: HBR does not check whether the required differential backup and log backup are available before the restore job starts.
     *
     * @example true
     *
     * @var bool
     */
    public $checkAccess;

    /**
     * @description Indicates whether all log entries are deleted from the log area after the log entries are restored. Valid values: true and false. If the return value is false, all log entries are deleted from the log area after the log entries are restored.
     *
     * @example true
     *
     * @var bool
     */
    public $clearLog;

    /**
     * @description The ID of the SAP HANA instance that is restored.
     *
     * @example cl-000923yu******p00j4
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The current recovery phase. This value is obtained from SAP HANA.
     *
     * @example 2
     *
     * @var int
     */
    public $currentPhase;

    /**
     * @description The current progress. This value is obtained from SAP HANA.
     *
     * @example 1
     *
     * @var int
     */
    public $currentProgress;

    /**
     * @description The name of the database.
     *
     * @example BWD
     *
     * @var string
     */
    public $databaseName;

    /**
     * @description The ID of the database recovery.
     *
     * @example 1644038961030
     *
     * @var int
     */
    public $databaseRestoreId;

    /**
     * @description The time when the restore job ends. This value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1634356382
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The log position to which the database is restored. This parameter is returned only if the value of the Mode parameter is **RECOVERY_TO_LOG_POSITION**.
     *
     * @example 0
     *
     * @var int
     */
    public $logPosition;

    /**
     * @description The maximum recovery phase. This value is obtained from SAP HANA.
     *
     * @example 4
     *
     * @var int
     */
    public $maxPhase;

    /**
     * @description The maximum progress. This value is obtained from SAP HANA.
     *
     * @example 1
     *
     * @var int
     */
    public $maxProgress;

    /**
     * @description The details of the recovery phase.
     *
     * @example SQL Error 448 - recovery could not be completed:
     *
     * @var string
     */
    public $message;

    /**
     * @description The recovery mode. Valid values:
     *
     *   **RECOVERY_TO_MOST_RECENT**: The database is restored to the recently available state to which the database has been backed up.
     *   **RECOVERY_TO_POINT_IN_TIME**: The database is restored to a specified point in time.
     *   **RECOVERY_TO_SPECIFIC_BACKUP**: The database is restored to a specified backup.
     *   **RECOVERY_TO_LOG_POSITION**: The database is restored to a specified log position.
     *
     * @example RECOVERY_TO_SPECIFIC_BACKUP
     *
     * @var string
     */
    public $mode;

    /**
     * @description The recovery phase.
     *
     * @example restart
     *
     * @var string
     */
    public $phase;

    /**
     * @description The point in time at which the database is restored.
     *
     * @example 1635315505
     *
     * @var int
     */
    public $reachedTime;

    /**
     * @description The point in time to which the database is restored. This parameter is returned only if the value of the Mode parameter is **RECOVERY_TO_POINT_IN_TIME**. HBR restores the database to a state closest to the specified point in time.
     *
     * @example 1649851200
     *
     * @var int
     */
    public $recoveryPointInTime;

    /**
     * @description The ID of the restore job.
     *
     * @example r-000c1en183ayn9sesgqh
     *
     * @var string
     */
    public $restoreId;

    /**
     * @description The name of the source system. This parameter indicates the name of the source database that is restored. Format: `<Source database name>@SID`.
     *
     * @example PRD@H4P
     *
     * @var string
     */
    public $source;

    /**
     * @description The ID of the source SAP HANA instance.
     *
     * @example cl-0000g3mvy******5cj
     *
     * @var string
     */
    public $sourceClusterId;

    /**
     * @description The time when the restore job starts. This value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1636970413
     *
     * @var int
     */
    public $startTime;

    /**
     * @description The recovery status. This value is obtained from SAP HANA.
     *
     * @example successful
     *
     * @var string
     */
    public $state;

    /**
     * @description The status of the restore job. Valid values:
     *
     *   **RUNNING**: The restore job is running.
     *   **COMPLETE**: The restore job is completed.
     *   **PARTIAL_COMPLETE**: The restore job is partially completed.
     *   **FAILED**: The restore job has failed.
     *   **CANCELED**: The restore job is canceled.
     *   **EXPIRED**: The restore job has timed out.
     *
     * @example COMPLETE
     *
     * @var string
     */
    public $status;

    /**
     * @description Indicates whether the database is restored to a different instance. Valid values:
     *
     *   true: The database is restored to a different instance.
     *   false: The database is restored within the same instance.
     *
     * @example true
     *
     * @var bool
     */
    public $systemCopy;

    /**
     * @description Indicates whether a catalog backup is used to restore the database. This parameter is returned only if the value of the Mode parameter is **RECOVERY_TO_SPECIFIC_BACKUP**. If the return value is false, HBR finds the backup file based on the specified prefix and then restores the backup file.
     *
     * @example false
     *
     * @var bool
     */
    public $useCatalog;

    /**
     * @description Indicates whether a differential backup or an incremental backup is used to restore the database. Valid values: true and false. If the return value is true, HBR uses a differential backup or an incremental backup to restore the database. If the return value is false, HBR uses a log backup to restore the database.
     *
     * @example true
     *
     * @var bool
     */
    public $useDelta;

    /**
     * @description The ID of the backup vault.
     *
     * @example v-000g9acf******gta
     *
     * @var string
     */
    public $vaultId;

    /**
     * @description The ID of the volume that is restored. This parameter is returned only if the value of the Mode parameter is **RECOVERY_TO_LOG_POSITION**.
     *
     * @example 0
     *
     * @var int
     */
    public $volumeId;
    protected $_name = [
        'backupID'            => 'BackupID',
        'backupPrefix'        => 'BackupPrefix',
        'checkAccess'         => 'CheckAccess',
        'clearLog'            => 'ClearLog',
        'clusterId'           => 'ClusterId',
        'currentPhase'        => 'CurrentPhase',
        'currentProgress'     => 'CurrentProgress',
        'databaseName'        => 'DatabaseName',
        'databaseRestoreId'   => 'DatabaseRestoreId',
        'endTime'             => 'EndTime',
        'logPosition'         => 'LogPosition',
        'maxPhase'            => 'MaxPhase',
        'maxProgress'         => 'MaxProgress',
        'message'             => 'Message',
        'mode'                => 'Mode',
        'phase'               => 'Phase',
        'reachedTime'         => 'ReachedTime',
        'recoveryPointInTime' => 'RecoveryPointInTime',
        'restoreId'           => 'RestoreId',
        'source'              => 'Source',
        'sourceClusterId'     => 'SourceClusterId',
        'startTime'           => 'StartTime',
        'state'               => 'State',
        'status'              => 'Status',
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
        if (null !== $this->backupID) {
            $res['BackupID'] = $this->backupID;
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
        if (null !== $this->currentPhase) {
            $res['CurrentPhase'] = $this->currentPhase;
        }
        if (null !== $this->currentProgress) {
            $res['CurrentProgress'] = $this->currentProgress;
        }
        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }
        if (null !== $this->databaseRestoreId) {
            $res['DatabaseRestoreId'] = $this->databaseRestoreId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->logPosition) {
            $res['LogPosition'] = $this->logPosition;
        }
        if (null !== $this->maxPhase) {
            $res['MaxPhase'] = $this->maxPhase;
        }
        if (null !== $this->maxProgress) {
            $res['MaxProgress'] = $this->maxProgress;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->phase) {
            $res['Phase'] = $this->phase;
        }
        if (null !== $this->reachedTime) {
            $res['ReachedTime'] = $this->reachedTime;
        }
        if (null !== $this->recoveryPointInTime) {
            $res['RecoveryPointInTime'] = $this->recoveryPointInTime;
        }
        if (null !== $this->restoreId) {
            $res['RestoreId'] = $this->restoreId;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->sourceClusterId) {
            $res['SourceClusterId'] = $this->sourceClusterId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
     * @return hanaRestores
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupID'])) {
            $model->backupID = $map['BackupID'];
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
        if (isset($map['CurrentPhase'])) {
            $model->currentPhase = $map['CurrentPhase'];
        }
        if (isset($map['CurrentProgress'])) {
            $model->currentProgress = $map['CurrentProgress'];
        }
        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }
        if (isset($map['DatabaseRestoreId'])) {
            $model->databaseRestoreId = $map['DatabaseRestoreId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['LogPosition'])) {
            $model->logPosition = $map['LogPosition'];
        }
        if (isset($map['MaxPhase'])) {
            $model->maxPhase = $map['MaxPhase'];
        }
        if (isset($map['MaxProgress'])) {
            $model->maxProgress = $map['MaxProgress'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['Phase'])) {
            $model->phase = $map['Phase'];
        }
        if (isset($map['ReachedTime'])) {
            $model->reachedTime = $map['ReachedTime'];
        }
        if (isset($map['RecoveryPointInTime'])) {
            $model->recoveryPointInTime = $map['RecoveryPointInTime'];
        }
        if (isset($map['RestoreId'])) {
            $model->restoreId = $map['RestoreId'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['SourceClusterId'])) {
            $model->sourceClusterId = $map['SourceClusterId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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
