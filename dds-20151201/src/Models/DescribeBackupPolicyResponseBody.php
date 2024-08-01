<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Tea\Model;

class DescribeBackupPolicyResponseBody extends Model
{
    /**
     * @description The frequency at which high-frequency backup is created. Valid values:
     *
     *   **-1**: High-frequency backup is disabled.
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
     * @example -1
     *
     * @var int
     */
    public $backupInterval;

    /**
     * @description The retention period of the backup data. Unit: day.
     *
     * @example 30
     *
     * @var string
     */
    public $backupRetentionPeriod;

    /**
     * @var int
     */
    public $backupRetentionPolicyOnClusterDeletion;

    /**
     * @var string
     */
    public $crossBackupPeriod;

    /**
     * @var string
     */
    public $crossLogRetentionType;

    /**
     * @var int
     */
    public $crossLogRetentionValue;

    /**
     * @var string
     */
    public $crossRetentionType;

    /**
     * @var int
     */
    public $crossRetentionValue;

    /**
     * @var string
     */
    public $destRegion;

    /**
     * @description Indicates whether the log backup feature is enabled. Valid values:
     *
     *   **0** (default): The log backup feature is disabled.
     *   **1**: The log backup feature is enabled.
     *
     * @example 1
     *
     * @var int
     */
    public $enableBackupLog;

    /**
     * @var int
     */
    public $enableCrossLogBackup;

    /**
     * @description The retention period of high-frequency backups. Unit: day.
     *
     * @example 1
     *
     * @var string
     */
    public $highFrequencyBackupRetention;

    /**
     * @description The number of days for which log backups are retained. Valid values: 7 to 730.
     *
     * @example 7
     *
     * @var int
     */
    public $logBackupRetentionPeriod;

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
     * @example Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday
     *
     * @var string
     */
    public $preferredBackupPeriod;

    /**
     * @description The time range during which the backup was created. The time follows the ISO 8601 standard in the *HH:mm*Z-*HH:mm*Z format. The time is displayed in UTC.
     *
     * @example 09:00Z-10:00Z
     *
     * @var string
     */
    public $preferredBackupTime;

    /**
     * @var string
     */
    public $preferredNextBackupTime;

    /**
     * @description The request ID.
     *
     * @example 5A9464CA-F7DC-5434-90B1-DF7F197C****
     *
     * @var string
     */
    public $requestId;

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
     * @var string
     */
    public $srcRegion;
    protected $_name = [
        'backupInterval'                         => 'BackupInterval',
        'backupRetentionPeriod'                  => 'BackupRetentionPeriod',
        'backupRetentionPolicyOnClusterDeletion' => 'BackupRetentionPolicyOnClusterDeletion',
        'crossBackupPeriod'                      => 'CrossBackupPeriod',
        'crossLogRetentionType'                  => 'CrossLogRetentionType',
        'crossLogRetentionValue'                 => 'CrossLogRetentionValue',
        'crossRetentionType'                     => 'CrossRetentionType',
        'crossRetentionValue'                    => 'CrossRetentionValue',
        'destRegion'                             => 'DestRegion',
        'enableBackupLog'                        => 'EnableBackupLog',
        'enableCrossLogBackup'                   => 'EnableCrossLogBackup',
        'highFrequencyBackupRetention'           => 'HighFrequencyBackupRetention',
        'logBackupRetentionPeriod'               => 'LogBackupRetentionPeriod',
        'preferredBackupPeriod'                  => 'PreferredBackupPeriod',
        'preferredBackupTime'                    => 'PreferredBackupTime',
        'preferredNextBackupTime'                => 'PreferredNextBackupTime',
        'requestId'                              => 'RequestId',
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
        if (null !== $this->logBackupRetentionPeriod) {
            $res['LogBackupRetentionPeriod'] = $this->logBackupRetentionPeriod;
        }
        if (null !== $this->preferredBackupPeriod) {
            $res['PreferredBackupPeriod'] = $this->preferredBackupPeriod;
        }
        if (null !== $this->preferredBackupTime) {
            $res['PreferredBackupTime'] = $this->preferredBackupTime;
        }
        if (null !== $this->preferredNextBackupTime) {
            $res['PreferredNextBackupTime'] = $this->preferredNextBackupTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
     * @return DescribeBackupPolicyResponseBody
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
        if (isset($map['LogBackupRetentionPeriod'])) {
            $model->logBackupRetentionPeriod = $map['LogBackupRetentionPeriod'];
        }
        if (isset($map['PreferredBackupPeriod'])) {
            $model->preferredBackupPeriod = $map['PreferredBackupPeriod'];
        }
        if (isset($map['PreferredBackupTime'])) {
            $model->preferredBackupTime = $map['PreferredBackupTime'];
        }
        if (isset($map['PreferredNextBackupTime'])) {
            $model->preferredNextBackupTime = $map['PreferredNextBackupTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
