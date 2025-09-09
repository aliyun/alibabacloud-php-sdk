<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeBackupPolicyResponseBody;

use AlibabaCloud\Dara\Model;

class backupPolicyDO extends Model
{
    /**
     * @var string
     */
    public $backupAppName;

    /**
     * @var string
     */
    public $backupDbName;

    /**
     * @var string
     */
    public $backupLevel;

    /**
     * @var string
     */
    public $backupLog;

    /**
     * @var string
     */
    public $backupMode;

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
    public $backupType;

    /**
     * @var int
     */
    public $dataBackupRetentionPeriod;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $highSpaceUsageProtection;

    /**
     * @var int
     */
    public $localLogRetentionHours;

    /**
     * @var int
     */
    public $localLogRetentionSpace;

    /**
     * @var int
     */
    public $logBackupRetentionPeriod;

    /**
     * @var string
     */
    public $nextBackupActuallyTime;

    /**
     * @var string
     */
    public $preferredBackupPeriod;

    /**
     * @var string
     */
    public $preferredBackupTime;
    protected $_name = [
        'backupAppName' => 'BackupAppName',
        'backupDbName' => 'BackupDbName',
        'backupLevel' => 'BackupLevel',
        'backupLog' => 'BackupLog',
        'backupMode' => 'BackupMode',
        'backupPolicyMode' => 'BackupPolicyMode',
        'backupRetentionPeriod' => 'BackupRetentionPeriod',
        'backupType' => 'BackupType',
        'dataBackupRetentionPeriod' => 'DataBackupRetentionPeriod',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'highSpaceUsageProtection' => 'HighSpaceUsageProtection',
        'localLogRetentionHours' => 'LocalLogRetentionHours',
        'localLogRetentionSpace' => 'LocalLogRetentionSpace',
        'logBackupRetentionPeriod' => 'LogBackupRetentionPeriod',
        'nextBackupActuallyTime' => 'NextBackupActuallyTime',
        'preferredBackupPeriod' => 'PreferredBackupPeriod',
        'preferredBackupTime' => 'PreferredBackupTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
