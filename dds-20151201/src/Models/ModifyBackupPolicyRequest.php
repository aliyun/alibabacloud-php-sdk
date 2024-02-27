<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Tea\Model;

class ModifyBackupPolicyRequest extends Model
{
    /**
     * @description The frequency at which high-frequency backups are created. Valid values:
     *
     *   **-1**: disables high-frequency backup.
     *   **15**: every 15 minutes.
     *   **30**: every 30 minutes.
     *   **60**: every hour.
     *   **120**: every 2 hours.
     *   **180**: every 3 hours.
     *   **240**: every 4 hours.
     *   **360**: every 6 hours.
     *   **480**: every 8 hours.
     *   **720**: every 12 hours.
     *
     * > * If **SnapshotBackupType** is set to **Standard**, this parameter is set to **-1** and cannot be changed.
     * > * High-frequency backup takes effect only when **SnapshotBackupType** is set to **Flash** and the value of this parameter is greater than 0.
     * @example -1
     *
     * @var string
     */
    public $backupInterval;

    /**
     * @description The retention period of full backups.
     *
     * > * If your instance is created before September 10, 2021, backups are retained for seven days by default.
     * > * If your instance is created after September 10, 2021, backups are retained for 30 days by default.
     * @example 30
     *
     * @var int
     */
    public $backupRetentionPeriod;

    /**
     * @description The ID of the instance.
     *
     * @example dds-bp16cb162771****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description Specifies whether to enable log backup. Default value: 0. Valid values:
     *
     *   **0**: disables log backup.
     *   **1**: enables log backup.
     *
     * @example 0
     *
     * @var int
     */
    public $enableBackupLog;

    /**
     * @var int
     */
    public $highFrequencyBackupRetention;

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
     * @description The day of a week on which to back up data. Valid values:
     *
     *   **Monday**
     *   **Tuesday**
     *   **Wednesday**
     *   **Thursday**
     *   **Friday**
     *   **Saturday**
     *   **Sunday**
     *
     * >  Separate multiple values with commas (,).
     * @example Monday,Wednesday,Friday,Sunday
     *
     * @var string
     */
    public $preferredBackupPeriod;

    /**
     * @description The time range to back up data. Specify the time in the *HH:mm*Z-*HH:mm*Z format. The time must be in UTC.
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
     * @description The snapshot backup type. Default value: Standard. Valid values:
     *
     *   **Flash**: single-digit second backup
     *   **Standard**: standard backup
     *
     * @example Standard
     *
     * @var string
     */
    public $snapshotBackupType;
    protected $_name = [
        'backupInterval'               => 'BackupInterval',
        'backupRetentionPeriod'        => 'BackupRetentionPeriod',
        'DBInstanceId'                 => 'DBInstanceId',
        'enableBackupLog'              => 'EnableBackupLog',
        'highFrequencyBackupRetention' => 'HighFrequencyBackupRetention',
        'logBackupRetentionPeriod'     => 'LogBackupRetentionPeriod',
        'ownerAccount'                 => 'OwnerAccount',
        'ownerId'                      => 'OwnerId',
        'preferredBackupPeriod'        => 'PreferredBackupPeriod',
        'preferredBackupTime'          => 'PreferredBackupTime',
        'resourceOwnerAccount'         => 'ResourceOwnerAccount',
        'resourceOwnerId'              => 'ResourceOwnerId',
        'snapshotBackupType'           => 'SnapshotBackupType',
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
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->enableBackupLog) {
            $res['EnableBackupLog'] = $this->enableBackupLog;
        }
        if (null !== $this->highFrequencyBackupRetention) {
            $res['HighFrequencyBackupRetention'] = $this->highFrequencyBackupRetention;
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
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['EnableBackupLog'])) {
            $model->enableBackupLog = $map['EnableBackupLog'];
        }
        if (isset($map['HighFrequencyBackupRetention'])) {
            $model->highFrequencyBackupRetention = $map['HighFrequencyBackupRetention'];
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

        return $model;
    }
}
