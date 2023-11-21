<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifyBackupPolicyRequest extends Model
{
    /**
     * @description The number of archived backup files that are retained. Default value: **1**. Valid values:
     *
     *   Valid values when **ArchiveBackupKeepPolicy** is set to **ByMonth**: **1** to **31**.
     *   Valid values when **ArchiveBackupKeepPolicy** is set to **ByWeek**: **1** to **7**.
     *
     * >
     *
     *   You do not need to specify this parameter when **ArchiveBackupKeepPolicy** is set to **KeepAll**.
     *
     *   This parameter takes effect only when **BackupPolicyMode** is set to **DataBackupPolicy**.
     *
     * @example 1
     *
     * @var int
     */
    public $archiveBackupKeepCount;

    /**
     * @description The retention period of archived backup files. The number of archived backup files that can be retained within the specified retention period is specified by **ArchiveBackupKeepCount**. Default value: **0**. Valid values:
     *
     *   **ByMonth**
     *   **ByWeek**
     *   **KeepAll**
     *
     * > This parameter takes effect only when **BackupPolicyMode** is set to **DataBackupPolicy**.
     * @example ByMonth
     *
     * @var string
     */
    public $archiveBackupKeepPolicy;

    /**
     * @description The number of days for which the archived backup is retained. The default value **0** specifies that the backup archiving feature is disabled. Valid values: **30** to **1095**.
     *
     * > This parameter takes effect only when **BackupPolicyMode** is set to **DataBackupPolicy**.
     * @example 365
     *
     * @var string
     */
    public $archiveBackupRetentionPeriod;

    /**
     * @description The frequency at which you want to perform a snapshot backup on the instance. Valid values:
     *
     *   **-1**: No backup frequencies are specified.
     *   **30**: A snapshot backup is performed every 30 minutes.
     *   **60**: A snapshot backup is performed every 60 minutes.
     *   **120**: A snapshot backup is performed every 120 minutes.
     *   **240**: A snapshot backup is performed every 240 minutes.
     *   **480**: A snapshot backup is performed every 480 minutes.
     *
     * >
     *
     *   You can configure a backup policy by using this parameter and the **PreferredBackupPeriod** parameter. For example, if you set **PreferredBackupPeriod** to Saturday,Sunday and BackupInterval to \*\*-1\*\*, a snapshot backup is performed on every Saturday and Sunday.
     *
     *   If the instance runs PostgreSQL, BackupInterval is supported only when the instance is equipped with cloud disks.
     *
     *   If the instance runs SQL Server, BackupInterval is supported only when the snapshot backup feature is enabled for the instance. For more information, see [Enable snapshot backups for an ApsaraDB RDS for SQL Server instance](~~211143~~).
     *
     *   If **Category** is set to **Flash**, BackupInterval is invalid.
     *
     *   This parameter takes effect only when **BackupPolicyMode** is set to **DataBackupPolicy**.
     *
     * @example 30
     *
     * @var string
     */
    public $backupInterval;

    /**
     * @description Specifies whether to enable the log backup feature. Valid values:
     *
     *   **Enable**: enables the feature.
     *   **Disabled**: disables the feature.
     *
     * >
     *
     *   This parameter must be specified when **BackupPolicyMode** is set to **DataBackupPolicy**.
     *
     *   This parameter takes effect only when **BackupPolicyMode** is set to **DataBackupPolicy**.
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
     * Default value: **Physical**.
     *
     * >
     *
     *   This parameter takes effect only on instances that run SQL Server with cloud disks.
     *
     *   This parameter takes effect only when **BackupPolicyMode** is set to **DataBackupPolicy**.
     *
     * @example Physical
     *
     * @var string
     */
    public $backupMethod;

    /**
     * @description The type of the backup. Valid values:
     *
     *   **DataBackupPolicy**: data backup
     *   **LogBackupPolicy**: log backup
     *
     * @example DataBackupPolicy
     *
     * @var string
     */
    public $backupPolicyMode;

    /**
     * @description Specifies whether the backup settings of a secondary instance are configured. Valid values:
     *
     *   **1**: secondary instance preferred
     *   **2**: primary instance preferred
     *
     * >
     *
     *   This parameter is suitable only for instances that run SQL Server on RDS Cluster Edition.
     *
     *   This parameter takes effect only when **BackupMethod** is set to **Physical**. If **BackupMethod** is set to **Snapshot**, backups are forcefully performed on the primary instance that runs SQL Server on RDS Cluster Edition.
     *
     * @example 2
     *
     * @var int
     */
    public $backupPriority;

    /**
     * @description The number of days for which you want to retain data backup files. Valid values: **7 to 730**.
     *
     * >
     *
     *   This parameter must be specified when **BackupPolicyMode** is set to **DataBackupPolicy**.
     *
     *   This parameter takes effect only when **BackupPolicyMode** is set to **DataBackupPolicy**.
     *
     * @example 7
     *
     * @var string
     */
    public $backupRetentionPeriod;

    /**
     * @description Specifies whether to enable the single-digit second backup feature. Valid values:
     *
     *   **Flash**: enables the feature.
     *   **Standard**: disables the feature.
     *
     * > This parameter takes effect only when **BackupPolicyMode** is set to **DataBackupPolicy**.
     * @example Standard
     *
     * @var string
     */
    public $category;

    /**
     * @description The format that is used to compress backup data. Valid values:
     *
     *   **0**: Backups are not compressed.
     *   **1**: The zlib tool is used to compress backups into .tar.gz files.
     *   **2**: The zlib tool is used to compress backups in parallel.
     *   **4**: The QuickLZ tool is used to compress backups into .xb.gz files. This compression format is supported for instances that run MySQL 5.6 or MySQL 5.7. Backups in this compression format can be used to restore individual databases and tables. For more information, see [Restore individual databases and tables of an ApsaraDB RDS for MySQL instance](~~103175~~).
     *   **8**: The QuickLZ tool is used to compress backups into .xb.gz files. This compression format is supported only for instances that run MySQL 8.0. Backups in this compression format cannot be used to restore individual databases and tables.
     *
     * > This parameter takes effect only when **BackupPolicyMode** is set to **DataBackupPolicy**.
     * @example 4
     *
     * @var string
     */
    public $compressType;

    /**
     * @description The instance ID. You can call the DescribeDBInstances operation to query the instance ID.
     *
     * @example rm-uf6wjk5xxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description Specifies whether to enable the log backup feature. Valid values:
     *
     *   **True** or **1**: enables the feature.
     *   **False** or **0**: disables the feature.
     *
     * >
     *
     *   This parameter must be specified when **BackupPolicyMode** is set to **LogBackupPolicy**.
     *
     *   This parameter takes effect only when **BackupPolicyMode** is set to **LogBackupPolicy**.
     *
     * @example 1
     *
     * @var string
     */
    public $enableBackupLog;

    /**
     * @description Specifies whether to enable incremental backup. Valid values:
     *
     *   **false** (default): disables the feature.
     *   **true**: enables the feature.
     *
     * >
     *
     *   This parameter takes effect only on instances that run SQL Server with cloud disks.
     *
     *   This parameter takes effect only when **BackupPolicyMode** is set to **DataBackupPolicy**.
     *
     * @example false
     *
     * @var bool
     */
    public $enableIncrementDataBackup;

    /**
     * @description Specifies whether to forcefully delete log backup files from the instance when the storage usage of the instance exceeds 80% or the amount of remaining storage on the instance is less than 5 GB. Valid values: **Enable and Disable**. You can retain the default value.
     *
     * >
     *
     *   This parameter must be specified when **BackupPolicyMode** is set to **LogBackupPolicy**.
     *
     *   This parameter takes effect only when **BackupPolicyMode** is set to **LogBackupPolicy**.
     *
     * @example Enable
     *
     * @var string
     */
    public $highSpaceUsageProtection;

    /**
     * @description The number of hours for which you want to retain log backup files on the instance. Valid values: **0 to 168**. The value 0 specifies that log backup files are not retained on the instance. The value 168 is calculated based on the following formula: 7 × 24.
     *
     * >
     *
     *   This parameter must be specified when **BackupPolicyMode** is set to **LogBackupPolicy**.
     *
     *   This parameter takes effect only when **BackupPolicyMode** is set to **LogBackupPolicy**.
     *
     * @example 18
     *
     * @var string
     */
    public $localLogRetentionHours;

    /**
     * @description The maximum storage usage that is allowed for log backup files on the instance. If the storage usage for log backup files on the instance exceeds the value of this parameter, the system deletes earlier log backup files until the storage usage falls below the value of this parameter. Valid values:**0 to 50**. You can retain the default value.
     *
     * >
     *
     *   This parameter must be specified when **BackupPolicyMode** is set to **LogBackupPolicy**.
     *
     *   This parameter takes effect only when **BackupPolicyMode** is set to **LogBackupPolicy**.
     *
     * @example 30
     *
     * @var string
     */
    public $localLogRetentionSpace;

    /**
     * @description The frequency at which you want to back up the logs of the instance. Valid values:
     *
     *   **LogInterval**: A log backup is performed every 30 minutes.
     *   The default value is the same as the data backup frequency.
     *
     * >
     *
     *   The value **LogInterval** is supported only for instances that run SQL Server.
     *
     *   This parameter takes effect only when **BackupPolicyMode** is set to **DataBackupPolicy**.
     *
     * @example LogInterval
     *
     * @var string
     */
    public $logBackupFrequency;

    /**
     * @description The number of binary log files that you want to retain on the instance. Default value: **60**. Valid values: **6** to **100**.
     *
     * >
     *
     *   This parameter takes effect only when **BackupPolicyMode** is set to **LogBackupPolicy**.
     *
     *   If the instance runs MySQL, you can set this parameter to \*\*-1\*\*. The value -1 specifies that no limits are imposed on the number of binary log files retained on the instance.
     *
     * @example 60
     *
     * @var int
     */
    public $logBackupLocalRetentionNumber;

    /**
     * @description The number of days for which the log backup is retained. Valid values: **7 to 730**. The log backup retention period cannot be longer than the data backup retention period.
     *
     * >
     *
     *   If you enable the log backup feature, you can specify the log backup retention period. This parameter is supported for instances that run MySQL and PostgreSQL.
     *
     *   This parameter takes effect only when **BackupPolicyMode** is set to **DataBackupPolicy** or **LogBackupPolicy**.
     *
     * @example 7
     *
     * @var string
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
     * @description The backup cycle. Specify at least two days of the week and separate the days with commas (,). Valid values:
     *
     *   **Monday**
     *   **Tuesday**
     *   **Wednesday**
     *   **Thursday**
     *   **Friday**
     *   **Saturday**
     *   **Sunday**
     *
     * >
     *
     *   You can configure a backup policy by using this parameter and the **BackupInterval** parameter. For example, if you set this parameter to Saturday,Sunday and the **BackupInterval** parameter to 30, a backup is performed every 30 minutes on every Saturday and Sunday.
     *
     *   This parameter must be specified when **BackupPolicyMode** is set to **DataBackupPolicy**.
     *
     *   This parameter takes effect only when **BackupPolicyMode** is set to **DataBackupPolicy**.
     *
     * @example Monday
     *
     * @var string
     */
    public $preferredBackupPeriod;

    /**
     * @description The time at which you want to perform a backup. Specify the time in the ISO 8601 standard in the *HH:mm*Z-*HH:mm*Z format. The time must be in UTC.
     *
     * >
     *
     *   This parameter must be specified when **BackupPolicyMode** is set to **DataBackupPolicy**.
     *
     *   This parameter takes effect only when **BackupPolicyMode** is set to **DataBackupPolicy**.
     *
     * @example 00:00Z-01:00Z
     *
     * @var string
     */
    public $preferredBackupTime;

    /**
     * @description The policy that is used to retain archived backup files if the instance is released. Default value: None. Valid values:
     *
     *   **None**: No archived backup files are retained.
     *   **Lastest**: Only the last archived backup file is retained.
     *   **All**: All archived backup files are retained.
     *
     * > This parameter takes effect only when **BackupPolicyMode** is set to **DataBackupPolicy**.
     * @example None
     *
     * @var string
     */
    public $releasedKeepPolicy;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'archiveBackupKeepCount'        => 'ArchiveBackupKeepCount',
        'archiveBackupKeepPolicy'       => 'ArchiveBackupKeepPolicy',
        'archiveBackupRetentionPeriod'  => 'ArchiveBackupRetentionPeriod',
        'backupInterval'                => 'BackupInterval',
        'backupLog'                     => 'BackupLog',
        'backupMethod'                  => 'BackupMethod',
        'backupPolicyMode'              => 'BackupPolicyMode',
        'backupPriority'                => 'BackupPriority',
        'backupRetentionPeriod'         => 'BackupRetentionPeriod',
        'category'                      => 'Category',
        'compressType'                  => 'CompressType',
        'DBInstanceId'                  => 'DBInstanceId',
        'enableBackupLog'               => 'EnableBackupLog',
        'enableIncrementDataBackup'     => 'EnableIncrementDataBackup',
        'highSpaceUsageProtection'      => 'HighSpaceUsageProtection',
        'localLogRetentionHours'        => 'LocalLogRetentionHours',
        'localLogRetentionSpace'        => 'LocalLogRetentionSpace',
        'logBackupFrequency'            => 'LogBackupFrequency',
        'logBackupLocalRetentionNumber' => 'LogBackupLocalRetentionNumber',
        'logBackupRetentionPeriod'      => 'LogBackupRetentionPeriod',
        'ownerAccount'                  => 'OwnerAccount',
        'ownerId'                       => 'OwnerId',
        'preferredBackupPeriod'         => 'PreferredBackupPeriod',
        'preferredBackupTime'           => 'PreferredBackupTime',
        'releasedKeepPolicy'            => 'ReleasedKeepPolicy',
        'resourceOwnerAccount'          => 'ResourceOwnerAccount',
        'resourceOwnerId'               => 'ResourceOwnerId',
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
        if (null !== $this->backupPolicyMode) {
            $res['BackupPolicyMode'] = $this->backupPolicyMode;
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
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
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
        if (null !== $this->releasedKeepPolicy) {
            $res['ReleasedKeepPolicy'] = $this->releasedKeepPolicy;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
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
        if (isset($map['BackupPolicyMode'])) {
            $model->backupPolicyMode = $map['BackupPolicyMode'];
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
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
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
        if (isset($map['ReleasedKeepPolicy'])) {
            $model->releasedKeepPolicy = $map['ReleasedKeepPolicy'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}
