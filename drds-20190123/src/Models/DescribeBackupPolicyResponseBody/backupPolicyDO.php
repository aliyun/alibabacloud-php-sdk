<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeBackupPolicyResponseBody;

use AlibabaCloud\Tea\Model;

class backupPolicyDO extends Model
{
    /**
     * @description No value is returned.
     *
     * @example null
     *
     * @var string
     */
    public $backupAppName;

    /**
     * @description No value is returned.
     *
     * @example null
     *
     * @var string
     */
    public $backupDbName;

    /**
     * @description The backup level. Valid values:
     *
     *   **db**: database backup
     *   **instance**: instance backup
     *
     * @example instance
     *
     * @var string
     */
    public $backupLevel;

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
    public $backupLog;

    /**
     * @description The backup mode. Valid values:
     *
     *   **logic**: logical backup
     *   **phy**: fast backup
     *
     * @example phy
     *
     * @var string
     */
    public $backupMode;

    /**
     * @description The type of the backup policy. Valid values:
     *
     *   **DataBackupPolicy**: a data backup policy
     *   **LogBackupPolicy**: a log backup policy
     *
     * @example DataBackupPolicy
     *
     * @var string
     */
    public $backupPolicyMode;

    /**
     * @description The retention period of backup files. Unit: days.
     *
     * @example 0
     *
     * @var int
     */
    public $backupRetentionPeriod;

    /**
     * @description No value is returned.
     *
     * @example null
     *
     * @var string
     */
    public $backupType;

    /**
     * @description The retention period of data backup files. Unit: days.
     *
     * @example 0
     *
     * @var int
     */
    public $dataBackupRetentionPeriod;

    /**
     * @description No value is returned.
     *
     * @example 0
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @description No value is returned.
     *
     * @example 0
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @description No value is returned.
     *
     * @example 0
     *
     * @var int
     */
    public $highSpaceUsageProtection;

    /**
     * @description No value is returned.
     *
     * @example 0
     *
     * @var int
     */
    public $localLogRetentionHours;

    /**
     * @description No value is returned.
     *
     * @example 0
     *
     * @var int
     */
    public $localLogRetentionSpace;

    /**
     * @description The retention period of log backup files. Unit: days.
     *
     * @example 0
     *
     * @var int
     */
    public $logBackupRetentionPeriod;

    /**
     * @description No value is returned.
     *
     * @example null
     *
     * @var string
     */
    public $nextBackupActuallyTime;

    /**
     * @description The backup cycle. You can specify multiple backup cycles. Separate multiple backup cycles with commas (,). Valid values:
     *
     *   **0**: every Monday
     *   **1**: every Tuesday
     *   **2**: every Wednesday
     *   **3**: every Thursday
     *   **4**: every Friday
     *   **5**: every Saturday
     *   **6**: every Sunday
     *
     * @example 1,4
     *
     * @var string
     */
    public $preferredBackupPeriod;

    /**
     * @description The time range in which a backup is performed. The time is displayed in UTC.
     *
     * @example 22:00:00-23:00:00
     *
     * @var string
     */
    public $preferredBackupTime;
    protected $_name = [
        'backupAppName'             => 'BackupAppName',
        'backupDbName'              => 'BackupDbName',
        'backupLevel'               => 'BackupLevel',
        'backupLog'                 => 'BackupLog',
        'backupMode'                => 'BackupMode',
        'backupPolicyMode'          => 'BackupPolicyMode',
        'backupRetentionPeriod'     => 'BackupRetentionPeriod',
        'backupType'                => 'BackupType',
        'dataBackupRetentionPeriod' => 'DataBackupRetentionPeriod',
        'gmtCreate'                 => 'GmtCreate',
        'gmtModified'               => 'GmtModified',
        'highSpaceUsageProtection'  => 'HighSpaceUsageProtection',
        'localLogRetentionHours'    => 'LocalLogRetentionHours',
        'localLogRetentionSpace'    => 'LocalLogRetentionSpace',
        'logBackupRetentionPeriod'  => 'LogBackupRetentionPeriod',
        'nextBackupActuallyTime'    => 'NextBackupActuallyTime',
        'preferredBackupPeriod'     => 'PreferredBackupPeriod',
        'preferredBackupTime'       => 'PreferredBackupTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupAppName) {
            $res['BackupAppName'] = $this->backupAppName;
        }
        if (null !== $this->backupDbName) {
            $res['BackupDbName'] = $this->backupDbName;
        }
        if (null !== $this->backupLevel) {
            $res['BackupLevel'] = $this->backupLevel;
        }
        if (null !== $this->backupLog) {
            $res['BackupLog'] = $this->backupLog;
        }
        if (null !== $this->backupMode) {
            $res['BackupMode'] = $this->backupMode;
        }
        if (null !== $this->backupPolicyMode) {
            $res['BackupPolicyMode'] = $this->backupPolicyMode;
        }
        if (null !== $this->backupRetentionPeriod) {
            $res['BackupRetentionPeriod'] = $this->backupRetentionPeriod;
        }
        if (null !== $this->backupType) {
            $res['BackupType'] = $this->backupType;
        }
        if (null !== $this->dataBackupRetentionPeriod) {
            $res['DataBackupRetentionPeriod'] = $this->dataBackupRetentionPeriod;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
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
        if (null !== $this->logBackupRetentionPeriod) {
            $res['LogBackupRetentionPeriod'] = $this->logBackupRetentionPeriod;
        }
        if (null !== $this->nextBackupActuallyTime) {
            $res['NextBackupActuallyTime'] = $this->nextBackupActuallyTime;
        }
        if (null !== $this->preferredBackupPeriod) {
            $res['PreferredBackupPeriod'] = $this->preferredBackupPeriod;
        }
        if (null !== $this->preferredBackupTime) {
            $res['PreferredBackupTime'] = $this->preferredBackupTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return backupPolicyDO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupAppName'])) {
            $model->backupAppName = $map['BackupAppName'];
        }
        if (isset($map['BackupDbName'])) {
            $model->backupDbName = $map['BackupDbName'];
        }
        if (isset($map['BackupLevel'])) {
            $model->backupLevel = $map['BackupLevel'];
        }
        if (isset($map['BackupLog'])) {
            $model->backupLog = $map['BackupLog'];
        }
        if (isset($map['BackupMode'])) {
            $model->backupMode = $map['BackupMode'];
        }
        if (isset($map['BackupPolicyMode'])) {
            $model->backupPolicyMode = $map['BackupPolicyMode'];
        }
        if (isset($map['BackupRetentionPeriod'])) {
            $model->backupRetentionPeriod = $map['BackupRetentionPeriod'];
        }
        if (isset($map['BackupType'])) {
            $model->backupType = $map['BackupType'];
        }
        if (isset($map['DataBackupRetentionPeriod'])) {
            $model->dataBackupRetentionPeriod = $map['DataBackupRetentionPeriod'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
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
        if (isset($map['LogBackupRetentionPeriod'])) {
            $model->logBackupRetentionPeriod = $map['LogBackupRetentionPeriod'];
        }
        if (isset($map['NextBackupActuallyTime'])) {
            $model->nextBackupActuallyTime = $map['NextBackupActuallyTime'];
        }
        if (isset($map['PreferredBackupPeriod'])) {
            $model->preferredBackupPeriod = $map['PreferredBackupPeriod'];
        }
        if (isset($map['PreferredBackupTime'])) {
            $model->preferredBackupTime = $map['PreferredBackupTime'];
        }

        return $model;
    }
}
