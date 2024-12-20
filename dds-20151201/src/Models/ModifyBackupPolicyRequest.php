<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Tea\Model;

class ModifyBackupPolicyRequest extends Model
{
    /**
     * @description The frequency at which high-frequency backups are generated. Valid values:
     *
     *   **-1**: High-frequency backup is disabled.
     *   **30**: High-frequency backups are generated every 30 minutes.
     *   **60**: High-frequency backups are generated every 1 hour.
     *   **120**: High-frequency backups are generated every 2 hours.
     *   **180**: High-frequency backups are generated every 3 hours.
     *   **240**: High-frequency backups are generated every 4 hours.
     *   **360**: High-frequency backups are generated every 6 hours.
     *   **480**: High-frequency backups are generated every 8 hours.
     *   **720**: High-frequency backups are generated every 12 hours.
     *
     * >
     *
     *   If you set the **SnapshotBackupType** parameter to **Standard**, you must fix the value of this parameter to -1.
     *
     *   High-frequency backup takes effect only when you set the **SnapshotBackupType** parameter to **Flash** and this parameter to a value greater than 0.
     *
     * @example -1
     *
     * @var string
     */
    public $backupInterval;

    /**
     * @description The retention period of full backups.
     *
     * >
     *
     *   If your instance is created before September 10, 2021, backups are retained for seven days by default.
     *
     *   If your instance is created after September 10, 2021, backups are retained for 30 days by default.
     *
     * @example 30
     *
     * @var int
     */
    public $backupRetentionPeriod;

    /**
     * @description The backup retention policy configured for the instance. Valid values:
     *
     * For more information, see [Retain the backup files of an ApsaraDB for MongoDB instance for a long period of time](https://help.aliyun.com/document_detail/4920562.html).
     * @example 2
     *
     * @var int
     */
    public $backupRetentionPolicyOnClusterDeletion;

    /**
     * @description The retention period of Cross-regional backup.
     * Valid values:
     *
     *   **Monday**
     *   **Tuesday**
     *   **Wednesday**
     *   **Thursday**
     *   **Friday**
     *   **Saturday**
     *   **Sunday**
     *
     * >- When SnapshotBackupType  is set to standard, this value needs to be a subset of the PreferredBackupPeriod.
     * @example Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday
     *
     * @var string
     */
    public $crossBackupPeriod;

    /**
     * @description The operation strategy of Cross-regional backup.
     * - delete
     * @example update
     *
     * @var string
     */
    public $crossBackupType;

    /**
     * @description The retention type of Cross-regional  log backup.
     *
     * - never : retain the backup permanently.
     * @example delay
     *
     * @var string
     */
    public $crossLogRetentionType;

    /**
     * @description The retention time of Cross-regional log backup, 3 - 1825 days.
     *
     * @example 3
     *
     * @var int
     */
    public $crossLogRetentionValue;

    /**
     * @description The retention type of Cross-regional backup.
     *
     * - never : retain the backup permanently.
     * @example delay
     *
     * @var string
     */
    public $crossRetentionType;

    /**
     * @description The retention time of Cross-regional backup, 3 - 1825 days.
     * > - Used and must be used when CrossRetentionType is delay.
     * @example 7
     *
     * @var int
     */
    public $crossRetentionValue;

    /**
     * @description The instance ID.
     *
     * This parameter is required.
     * @example dds-bp16cb162771****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The region id of Cross-regional backup.
     * > - Required for Cross-regional backup.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $destRegion;

    /**
     * @description Specifies whether to enable the log backup feature. Valid values:
     *
     *   **0** (default): The log backup feature is disabled.
     *   **1**: The log backup feature is enabled.
     *
     * @example 0
     *
     * @var int
     */
    public $enableBackupLog;

    /**
     * @description Whether to turn on cross-regional log backup.
     * - 0: turn off. Used for replicate set.
     * @example 1
     *
     * @var int
     */
    public $enableCrossLogBackup;

    /**
     * @description The number of days for which high-frequency backups are retained. Before you use this parameter, make sure that you specify the BackupInterval parameter. By default, high-frequency backups are retained for one day.
     *
     * @example 1
     *
     * @var int
     */
    public $highFrequencyBackupRetention;

    /**
     * @description The instance architecture. Valid values:
     *
     *   replicate
     *   sharding
     *
     * > * This parameter is required  for Cross-regional backup.
     * > * This parameter is required for backup recovery of deleted instances.
     * @example replicate
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The number of days for which log backups are retained. Default value: 7.
     *
     * Valid values: 7 to 730.
     * @example 7
     *
     * @var int
     */
    public $logBackupRetentionPeriod;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The day of a week when the system regularly backs up data. Valid values:
     *
     *   **Monday**
     *   **Tuesday**
     *   **Wednesday**
     *   **Thursday**
     *   **Friday**
     *   **Saturday**
     *   **Sunday**
     *
     **
     *
     **Notice**: To ensure data security, make sure that the system backs up data at least twice a week.
     *
     * >  Separate multiple values with commas (,).
     * @example Monday,Wednesday,Friday,Sunday
     *
     * @var string
     */
    public $preferredBackupPeriod;

    /**
     * @description The start time of the backup. Specify the time in the ISO 8601 standard in the *HH:mm*Z-*HH:mm*Z format. The time must be in UTC.
     *
     * >  The time range is 1 hour.
     * @example 03:00Z-04:00Z
     *
     * @var string
     */
    public $preferredBackupTime;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The snapshot backup type. Valid values:
     *
     *   **Flash**: single-digit second backup
     *   **Standard** (default): standard backup
     *
     * @example Standard
     *
     * @var string
     */
    public $snapshotBackupType;

    /**
     * @description The region ID of the instance.
     *
     * > - Required for backup recovery of deleted instances.
     * @example cn-beijing
     *
     * @var string
     */
    public $srcRegion;
    protected $_name = [
        'backupInterval'                         => 'BackupInterval',
        'backupRetentionPeriod'                  => 'BackupRetentionPeriod',
        'backupRetentionPolicyOnClusterDeletion' => 'BackupRetentionPolicyOnClusterDeletion',
        'crossBackupPeriod'                      => 'CrossBackupPeriod',
        'crossBackupType'                        => 'CrossBackupType',
        'crossLogRetentionType'                  => 'CrossLogRetentionType',
        'crossLogRetentionValue'                 => 'CrossLogRetentionValue',
        'crossRetentionType'                     => 'CrossRetentionType',
        'crossRetentionValue'                    => 'CrossRetentionValue',
        'DBInstanceId'                           => 'DBInstanceId',
        'destRegion'                             => 'DestRegion',
        'enableBackupLog'                        => 'EnableBackupLog',
        'enableCrossLogBackup'                   => 'EnableCrossLogBackup',
        'highFrequencyBackupRetention'           => 'HighFrequencyBackupRetention',
        'instanceType'                           => 'InstanceType',
        'logBackupRetentionPeriod'               => 'LogBackupRetentionPeriod',
        'ownerAccount'                           => 'OwnerAccount',
        'ownerId'                                => 'OwnerId',
        'preferredBackupPeriod'                  => 'PreferredBackupPeriod',
        'preferredBackupTime'                    => 'PreferredBackupTime',
        'resourceOwnerAccount'                   => 'ResourceOwnerAccount',
        'resourceOwnerId'                        => 'ResourceOwnerId',
        'snapshotBackupType'                     => 'SnapshotBackupType',
        'srcRegion'                              => 'SrcRegion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupInterval) {
            $res['BackupInterval'] = $this->backupInterval;
        }
        if (null !== $this->backupRetentionPeriod) {
            $res['BackupRetentionPeriod'] = $this->backupRetentionPeriod;
        }
        if (null !== $this->backupRetentionPolicyOnClusterDeletion) {
            $res['BackupRetentionPolicyOnClusterDeletion'] = $this->backupRetentionPolicyOnClusterDeletion;
        }
        if (null !== $this->crossBackupPeriod) {
            $res['CrossBackupPeriod'] = $this->crossBackupPeriod;
        }
        if (null !== $this->crossBackupType) {
            $res['CrossBackupType'] = $this->crossBackupType;
        }
        if (null !== $this->crossLogRetentionType) {
            $res['CrossLogRetentionType'] = $this->crossLogRetentionType;
        }
        if (null !== $this->crossLogRetentionValue) {
            $res['CrossLogRetentionValue'] = $this->crossLogRetentionValue;
        }
        if (null !== $this->crossRetentionType) {
            $res['CrossRetentionType'] = $this->crossRetentionType;
        }
        if (null !== $this->crossRetentionValue) {
            $res['CrossRetentionValue'] = $this->crossRetentionValue;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->destRegion) {
            $res['DestRegion'] = $this->destRegion;
        }
        if (null !== $this->enableBackupLog) {
            $res['EnableBackupLog'] = $this->enableBackupLog;
        }
        if (null !== $this->enableCrossLogBackup) {
            $res['EnableCrossLogBackup'] = $this->enableCrossLogBackup;
        }
        if (null !== $this->highFrequencyBackupRetention) {
            $res['HighFrequencyBackupRetention'] = $this->highFrequencyBackupRetention;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->logBackupRetentionPeriod) {
            $res['LogBackupRetentionPeriod'] = $this->logBackupRetentionPeriod;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->preferredBackupPeriod) {
            $res['PreferredBackupPeriod'] = $this->preferredBackupPeriod;
        }
        if (null !== $this->preferredBackupTime) {
            $res['PreferredBackupTime'] = $this->preferredBackupTime;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->snapshotBackupType) {
            $res['SnapshotBackupType'] = $this->snapshotBackupType;
        }
        if (null !== $this->srcRegion) {
            $res['SrcRegion'] = $this->srcRegion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyBackupPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupInterval'])) {
            $model->backupInterval = $map['BackupInterval'];
        }
        if (isset($map['BackupRetentionPeriod'])) {
            $model->backupRetentionPeriod = $map['BackupRetentionPeriod'];
        }
        if (isset($map['BackupRetentionPolicyOnClusterDeletion'])) {
            $model->backupRetentionPolicyOnClusterDeletion = $map['BackupRetentionPolicyOnClusterDeletion'];
        }
        if (isset($map['CrossBackupPeriod'])) {
            $model->crossBackupPeriod = $map['CrossBackupPeriod'];
        }
        if (isset($map['CrossBackupType'])) {
            $model->crossBackupType = $map['CrossBackupType'];
        }
        if (isset($map['CrossLogRetentionType'])) {
            $model->crossLogRetentionType = $map['CrossLogRetentionType'];
        }
        if (isset($map['CrossLogRetentionValue'])) {
            $model->crossLogRetentionValue = $map['CrossLogRetentionValue'];
        }
        if (isset($map['CrossRetentionType'])) {
            $model->crossRetentionType = $map['CrossRetentionType'];
        }
        if (isset($map['CrossRetentionValue'])) {
            $model->crossRetentionValue = $map['CrossRetentionValue'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DestRegion'])) {
            $model->destRegion = $map['DestRegion'];
        }
        if (isset($map['EnableBackupLog'])) {
            $model->enableBackupLog = $map['EnableBackupLog'];
        }
        if (isset($map['EnableCrossLogBackup'])) {
            $model->enableCrossLogBackup = $map['EnableCrossLogBackup'];
        }
        if (isset($map['HighFrequencyBackupRetention'])) {
            $model->highFrequencyBackupRetention = $map['HighFrequencyBackupRetention'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['LogBackupRetentionPeriod'])) {
            $model->logBackupRetentionPeriod = $map['LogBackupRetentionPeriod'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PreferredBackupPeriod'])) {
            $model->preferredBackupPeriod = $map['PreferredBackupPeriod'];
        }
        if (isset($map['PreferredBackupTime'])) {
            $model->preferredBackupTime = $map['PreferredBackupTime'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SnapshotBackupType'])) {
            $model->snapshotBackupType = $map['SnapshotBackupType'];
        }
        if (isset($map['SrcRegion'])) {
            $model->srcRegion = $map['SrcRegion'];
        }

        return $model;
    }
}
