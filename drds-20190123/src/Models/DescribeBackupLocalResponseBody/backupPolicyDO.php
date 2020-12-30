<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeBackupLocalResponseBody;

use AlibabaCloud\Tea\Model;

class backupPolicyDO extends Model
{
    /**
     * @var string
     */
    public $backupDbName;

    /**
     * @var int
     */
    public $logBackupRetentionPeriod;

    /**
     * @var int
     */
    public $dataBackupRetentionPeriod;

    /**
     * @var string
     */
    public $backupType;

    /**
     * @var string
     */
    public $backupLevel;

    /**
     * @var int
     */
    public $localLogRetentionHours;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $highSpaceUsageProtection;

    /**
     * @var string
     */
    public $backupPolicyMode;

    /**
     * @var int
     */
    public $backupRetentionPeriod;

    /**
     * @var string
     */
    public $preferredBackupPeriod;

    /**
     * @var int
     */
    public $localLogRetentionSpace;

    /**
     * @var string
     */
    public $backupAppName;

    /**
     * @var string
     */
    public $preferredBackupTime;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $backupMode;

    /**
     * @var string
     */
    public $backupLog;

    /**
     * @var string
     */
    public $nextBackupActuallyTime;
    protected $_name = [
        'backupDbName'              => 'BackupDbName',
        'logBackupRetentionPeriod'  => 'LogBackupRetentionPeriod',
        'dataBackupRetentionPeriod' => 'DataBackupRetentionPeriod',
        'backupType'                => 'BackupType',
        'backupLevel'               => 'BackupLevel',
        'localLogRetentionHours'    => 'LocalLogRetentionHours',
        'gmtModified'               => 'GmtModified',
        'highSpaceUsageProtection'  => 'HighSpaceUsageProtection',
        'backupPolicyMode'          => 'BackupPolicyMode',
        'backupRetentionPeriod'     => 'BackupRetentionPeriod',
        'preferredBackupPeriod'     => 'PreferredBackupPeriod',
        'localLogRetentionSpace'    => 'LocalLogRetentionSpace',
        'backupAppName'             => 'BackupAppName',
        'preferredBackupTime'       => 'PreferredBackupTime',
        'gmtCreate'                 => 'GmtCreate',
        'backupMode'                => 'BackupMode',
        'backupLog'                 => 'BackupLog',
        'nextBackupActuallyTime'    => 'NextBackupActuallyTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupDbName) {
            $res['BackupDbName'] = $this->backupDbName;
        }
        if (null !== $this->logBackupRetentionPeriod) {
            $res['LogBackupRetentionPeriod'] = $this->logBackupRetentionPeriod;
        }
        if (null !== $this->dataBackupRetentionPeriod) {
            $res['DataBackupRetentionPeriod'] = $this->dataBackupRetentionPeriod;
        }
        if (null !== $this->backupType) {
            $res['BackupType'] = $this->backupType;
        }
        if (null !== $this->backupLevel) {
            $res['BackupLevel'] = $this->backupLevel;
        }
        if (null !== $this->localLogRetentionHours) {
            $res['LocalLogRetentionHours'] = $this->localLogRetentionHours;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->highSpaceUsageProtection) {
            $res['HighSpaceUsageProtection'] = $this->highSpaceUsageProtection;
        }
        if (null !== $this->backupPolicyMode) {
            $res['BackupPolicyMode'] = $this->backupPolicyMode;
        }
        if (null !== $this->backupRetentionPeriod) {
            $res['BackupRetentionPeriod'] = $this->backupRetentionPeriod;
        }
        if (null !== $this->preferredBackupPeriod) {
            $res['PreferredBackupPeriod'] = $this->preferredBackupPeriod;
        }
        if (null !== $this->localLogRetentionSpace) {
            $res['LocalLogRetentionSpace'] = $this->localLogRetentionSpace;
        }
        if (null !== $this->backupAppName) {
            $res['BackupAppName'] = $this->backupAppName;
        }
        if (null !== $this->preferredBackupTime) {
            $res['PreferredBackupTime'] = $this->preferredBackupTime;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->backupMode) {
            $res['BackupMode'] = $this->backupMode;
        }
        if (null !== $this->backupLog) {
            $res['BackupLog'] = $this->backupLog;
        }
        if (null !== $this->nextBackupActuallyTime) {
            $res['NextBackupActuallyTime'] = $this->nextBackupActuallyTime;
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
        if (isset($map['BackupDbName'])) {
            $model->backupDbName = $map['BackupDbName'];
        }
        if (isset($map['LogBackupRetentionPeriod'])) {
            $model->logBackupRetentionPeriod = $map['LogBackupRetentionPeriod'];
        }
        if (isset($map['DataBackupRetentionPeriod'])) {
            $model->dataBackupRetentionPeriod = $map['DataBackupRetentionPeriod'];
        }
        if (isset($map['BackupType'])) {
            $model->backupType = $map['BackupType'];
        }
        if (isset($map['BackupLevel'])) {
            $model->backupLevel = $map['BackupLevel'];
        }
        if (isset($map['LocalLogRetentionHours'])) {
            $model->localLogRetentionHours = $map['LocalLogRetentionHours'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['HighSpaceUsageProtection'])) {
            $model->highSpaceUsageProtection = $map['HighSpaceUsageProtection'];
        }
        if (isset($map['BackupPolicyMode'])) {
            $model->backupPolicyMode = $map['BackupPolicyMode'];
        }
        if (isset($map['BackupRetentionPeriod'])) {
            $model->backupRetentionPeriod = $map['BackupRetentionPeriod'];
        }
        if (isset($map['PreferredBackupPeriod'])) {
            $model->preferredBackupPeriod = $map['PreferredBackupPeriod'];
        }
        if (isset($map['LocalLogRetentionSpace'])) {
            $model->localLogRetentionSpace = $map['LocalLogRetentionSpace'];
        }
        if (isset($map['BackupAppName'])) {
            $model->backupAppName = $map['BackupAppName'];
        }
        if (isset($map['PreferredBackupTime'])) {
            $model->preferredBackupTime = $map['PreferredBackupTime'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['BackupMode'])) {
            $model->backupMode = $map['BackupMode'];
        }
        if (isset($map['BackupLog'])) {
            $model->backupLog = $map['BackupLog'];
        }
        if (isset($map['NextBackupActuallyTime'])) {
            $model->nextBackupActuallyTime = $map['NextBackupActuallyTime'];
        }

        return $model;
    }
}
