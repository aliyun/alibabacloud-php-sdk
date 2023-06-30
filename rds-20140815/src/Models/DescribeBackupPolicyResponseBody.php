<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeBackupPolicyResponseBody extends Model
{
    /**
     * @description The number of archived backup files that are retained.
     *
     * @example 1
     *
     * @var string
     */
    public $archiveBackupKeepCount;

    /**
     * @description The cycle based on which archived backup files are retained.
     *
     * @example ByMonth
     *
     * @var string
     */
    public $archiveBackupKeepPolicy;

    /**
     * @description The number of days for which archived backup files are retained.
     *
     * @example 365
     *
     * @var string
     */
    public $archiveBackupRetentionPeriod;

    /**
     * @description The backup interval. Unit: minutes.
     *
     *   If the instance runs MySQL, the interval is the same as the value of the Snapshot Backup Start Time parameter rather than the Snapshot Backup Period parameter in the ApsaraDB RDS console. For more information, see [Back up an ApsaraDB RDS for MySQL instance](~~98818~~).
     *   If the instance runs SQL Server, the interval is the same as the log backup frequency.
     *
     * @example 30
     *
     * @var string
     */
    public $backupInterval;

    /**
     * @description Indicates whether the log backup feature is enabled. Valid values:
     *
     *   **Enable**
     *   **Disabled**
     *
     * @example Enable
     *
     * @var string
     */
    public $backupLog;

    /**
     * @description The backup method of the instance. Valid values:
     *
     *   **Physical**: physical backup
     *   **Snapshot**: snapshot backup
     *
     * > This parameter is returned only when the instance runs SQL Server and uses cloud disks.
     * @example Physical
     *
     * @var string
     */
    public $backupMethod;

    /**
     * @var int
     */
    public $backupPriority;

    /**
     * @description The number of days for which data backup files are retained.
     *
     * @example 7
     *
     * @var int
     */
    public $backupRetentionPeriod;

    /**
     * @description Indicates whether to enable the single-digit second backup feature. This feature allows ApsaraDB RDS to complete a backup within single-digit seconds. Valid values:
     *
     *   **Flash**: The single-digit second backup feature is enabled.
     *   **Standard**: The single-digit second backup feature is disabled.
     *
     * > This parameter takes effect only when you set the **BackupPolicyMode** parameter to **DataBackupPolicy**.
     * @example Standard
     *
     * @var string
     */
    public $category;

    /**
     * @description The method that is used to compress backup data. Valid values:
     *
     *   **0**: Backup data is not compressed.
     *   **1**: Backup data is compressed by using zlib.
     *   **2**: Backup data is compressed by using zlib that invokes more than one thread in parallel for each backup.
     *   **4**: Backup data is compressed by using QuickLZ and can be used to restore individual databases and tables.
     *   **8**: Backup data is compressed by using QuickLZ but cannot be used to restore individual databases or tables. This value is available only when the instance runs MySQL 8.0.
     *
     * @example 1
     *
     * @var string
     */
    public $compressType;

    /**
     * @description Indicates whether the log backup feature is enabled. Valid values:
     *
     *   **1**: The log backup feature is enabled.
     *   **0**: The log backup feature is disabled.
     *
     * @example 1
     *
     * @var string
     */
    public $enableBackupLog;

    /**
     * @description Indicates whether incremental backup is enabled. Valid values:
     *
     *   **True**: Incremental backup is enabled.
     *   **False**: Incremental backup is disabled.
     *
     * @example True
     *
     * @var bool
     */
    public $enableIncrementDataBackup;

    /**
     * @description Indicates whether the log backup deletion feature is enabled. If the disk usage exceeds 80% or the remaining disk space is less than 5 GB on the instance, this feature deletes binary log files. Valid values:
     *
     *   **Disable**
     *   **Enable**
     *
     * @example Enable
     *
     * @var string
     */
    public $highSpaceUsageProtection;

    /**
     * @description The number of hours for which log backup files are retained on the instance.
     *
     * @example 0
     *
     * @var int
     */
    public $localLogRetentionHours;

    /**
     * @description The maximum storage usage that is allowed for log files on the instance.
     *
     * @example 30
     *
     * @var string
     */
    public $localLogRetentionSpace;

    /**
     * @description The backup frequency of logs. Valid values:
     *
     *   **LogInterval**: Log backups are performed every 30 minutes.
     *   Default value: same as the value of the **PreferredBackupPeriod** parameter.
     *
     * > The **LogBackupFrequency** parameter is supported only when the instance runs **SQL Server**.
     * @example LogInterval
     *
     * @var string
     */
    public $logBackupFrequency;

    /**
     * @description The number of binary log files that you want to retain on the instance.
     *
     * @example 60
     *
     * @var int
     */
    public $logBackupLocalRetentionNumber;

    /**
     * @description The number of days for which log backup files are retained.
     *
     * @example 7
     *
     * @var int
     */
    public $logBackupRetentionPeriod;

    /**
     * @description The cycle based on which you want to perform a backup. Separate multiple values with commas (,). Valid values:
     *
     *   **Monday**
     *   **Tuesday**
     *   **Wednesday**
     *   **Thursday**
     *   **Friday**
     *   **Saturday**
     *   **Sunday**
     *
     * @example Monday,Wednesday,Friday,Sunday
     *
     * @var string
     */
    public $preferredBackupPeriod;

    /**
     * @description The time when a data backup is performed. The time follows the ISO 8601 standard in the *HH:mm*Z-*HH:mm*Z format. The time is displayed in UTC.
     *
     * @example 15:00Z-16:00Z
     *
     * @var string
     */
    public $preferredBackupTime;

    /**
     * @description The time when the next backup is performed. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm*Z format. The time is displayed in UTC.
     *
     * @example 2018-01-19T15:15Z
     *
     * @var string
     */
    public $preferredNextBackupTime;

    /**
     * @description The policy that is used to retain archived backup files if the instance is released. Valid values:
     *
     *   **None**: No archived backup files are retained.
     *   **Lastest**: Only the last archived backup file is retained.
     *   **All**: All archived backup files are retained.
     *
     * @example None
     *
     * @var string
     */
    public $releasedKeepPolicy;

    /**
     * @description The ID of the request.
     *
     * @example B87E2AB3-B7C9-4394-9160-7F639F732031
     *
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $supportModifyBackupPriority;

    /**
     * @description A reserved parameter.
     *
     * @example 0
     *
     * @var int
     */
    public $supportReleasedKeep;

    /**
     * @description Indicates whether the instance supports snapshot backups. Valid values:
     *
     *   **1**: The instance supports snapshot backups.
     *   **0**: The instance does not support snapshot backups.
     *
     * > This parameter is returned only when the instance runs SQL Server.
     * @example 1
     *
     * @var int
     */
    public $supportVolumeShadowCopy;
    protected $_name = [
        'archiveBackupKeepCount'        => 'ArchiveBackupKeepCount',
        'archiveBackupKeepPolicy'       => 'ArchiveBackupKeepPolicy',
        'archiveBackupRetentionPeriod'  => 'ArchiveBackupRetentionPeriod',
        'backupInterval'                => 'BackupInterval',
        'backupLog'                     => 'BackupLog',
        'backupMethod'                  => 'BackupMethod',
        'backupPriority'                => 'BackupPriority',
        'backupRetentionPeriod'         => 'BackupRetentionPeriod',
        'category'                      => 'Category',
        'compressType'                  => 'CompressType',
        'enableBackupLog'               => 'EnableBackupLog',
        'enableIncrementDataBackup'     => 'EnableIncrementDataBackup',
        'highSpaceUsageProtection'      => 'HighSpaceUsageProtection',
        'localLogRetentionHours'        => 'LocalLogRetentionHours',
        'localLogRetentionSpace'        => 'LocalLogRetentionSpace',
        'logBackupFrequency'            => 'LogBackupFrequency',
        'logBackupLocalRetentionNumber' => 'LogBackupLocalRetentionNumber',
        'logBackupRetentionPeriod'      => 'LogBackupRetentionPeriod',
        'preferredBackupPeriod'         => 'PreferredBackupPeriod',
        'preferredBackupTime'           => 'PreferredBackupTime',
        'preferredNextBackupTime'       => 'PreferredNextBackupTime',
        'releasedKeepPolicy'            => 'ReleasedKeepPolicy',
        'requestId'                     => 'RequestId',
        'supportModifyBackupPriority'   => 'SupportModifyBackupPriority',
        'supportReleasedKeep'           => 'SupportReleasedKeep',
        'supportVolumeShadowCopy'       => 'SupportVolumeShadowCopy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->archiveBackupKeepCount) {
            $res['ArchiveBackupKeepCount'] = $this->archiveBackupKeepCount;
        }
        if (null !== $this->archiveBackupKeepPolicy) {
            $res['ArchiveBackupKeepPolicy'] = $this->archiveBackupKeepPolicy;
        }
        if (null !== $this->archiveBackupRetentionPeriod) {
            $res['ArchiveBackupRetentionPeriod'] = $this->archiveBackupRetentionPeriod;
        }
        if (null !== $this->backupInterval) {
            $res['BackupInterval'] = $this->backupInterval;
        }
        if (null !== $this->backupLog) {
            $res['BackupLog'] = $this->backupLog;
        }
        if (null !== $this->backupMethod) {
            $res['BackupMethod'] = $this->backupMethod;
        }
        if (null !== $this->backupPriority) {
            $res['BackupPriority'] = $this->backupPriority;
        }
        if (null !== $this->backupRetentionPeriod) {
            $res['BackupRetentionPeriod'] = $this->backupRetentionPeriod;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->compressType) {
            $res['CompressType'] = $this->compressType;
        }
        if (null !== $this->enableBackupLog) {
            $res['EnableBackupLog'] = $this->enableBackupLog;
        }
        if (null !== $this->enableIncrementDataBackup) {
            $res['EnableIncrementDataBackup'] = $this->enableIncrementDataBackup;
        }
        if (null !== $this->highSpaceUsageProtection) {
            $res['HighSpaceUsageProtection'] = $this->highSpaceUsageProtection;
        }
        if (null !== $this->localLogRetentionHours) {
            $res['LocalLogRetentionHours'] = $this->localLogRetentionHours;
        }
        if (null !== $this->localLogRetentionSpace) {
            $res['LocalLogRetentionSpace'] = $this->localLogRetentionSpace;
        }
        if (null !== $this->logBackupFrequency) {
            $res['LogBackupFrequency'] = $this->logBackupFrequency;
        }
        if (null !== $this->logBackupLocalRetentionNumber) {
            $res['LogBackupLocalRetentionNumber'] = $this->logBackupLocalRetentionNumber;
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
        if (null !== $this->releasedKeepPolicy) {
            $res['ReleasedKeepPolicy'] = $this->releasedKeepPolicy;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->supportModifyBackupPriority) {
            $res['SupportModifyBackupPriority'] = $this->supportModifyBackupPriority;
        }
        if (null !== $this->supportReleasedKeep) {
            $res['SupportReleasedKeep'] = $this->supportReleasedKeep;
        }
        if (null !== $this->supportVolumeShadowCopy) {
            $res['SupportVolumeShadowCopy'] = $this->supportVolumeShadowCopy;
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
        if (isset($map['ArchiveBackupKeepCount'])) {
            $model->archiveBackupKeepCount = $map['ArchiveBackupKeepCount'];
        }
        if (isset($map['ArchiveBackupKeepPolicy'])) {
            $model->archiveBackupKeepPolicy = $map['ArchiveBackupKeepPolicy'];
        }
        if (isset($map['ArchiveBackupRetentionPeriod'])) {
            $model->archiveBackupRetentionPeriod = $map['ArchiveBackupRetentionPeriod'];
        }
        if (isset($map['BackupInterval'])) {
            $model->backupInterval = $map['BackupInterval'];
        }
        if (isset($map['BackupLog'])) {
            $model->backupLog = $map['BackupLog'];
        }
        if (isset($map['BackupMethod'])) {
            $model->backupMethod = $map['BackupMethod'];
        }
        if (isset($map['BackupPriority'])) {
            $model->backupPriority = $map['BackupPriority'];
        }
        if (isset($map['BackupRetentionPeriod'])) {
            $model->backupRetentionPeriod = $map['BackupRetentionPeriod'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['CompressType'])) {
            $model->compressType = $map['CompressType'];
        }
        if (isset($map['EnableBackupLog'])) {
            $model->enableBackupLog = $map['EnableBackupLog'];
        }
        if (isset($map['EnableIncrementDataBackup'])) {
            $model->enableIncrementDataBackup = $map['EnableIncrementDataBackup'];
        }
        if (isset($map['HighSpaceUsageProtection'])) {
            $model->highSpaceUsageProtection = $map['HighSpaceUsageProtection'];
        }
        if (isset($map['LocalLogRetentionHours'])) {
            $model->localLogRetentionHours = $map['LocalLogRetentionHours'];
        }
        if (isset($map['LocalLogRetentionSpace'])) {
            $model->localLogRetentionSpace = $map['LocalLogRetentionSpace'];
        }
        if (isset($map['LogBackupFrequency'])) {
            $model->logBackupFrequency = $map['LogBackupFrequency'];
        }
        if (isset($map['LogBackupLocalRetentionNumber'])) {
            $model->logBackupLocalRetentionNumber = $map['LogBackupLocalRetentionNumber'];
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
        if (isset($map['ReleasedKeepPolicy'])) {
            $model->releasedKeepPolicy = $map['ReleasedKeepPolicy'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SupportModifyBackupPriority'])) {
            $model->supportModifyBackupPriority = $map['SupportModifyBackupPriority'];
        }
        if (isset($map['SupportReleasedKeep'])) {
            $model->supportReleasedKeep = $map['SupportReleasedKeep'];
        }
        if (isset($map['SupportVolumeShadowCopy'])) {
            $model->supportVolumeShadowCopy = $map['SupportVolumeShadowCopy'];
        }

        return $model;
    }
}
