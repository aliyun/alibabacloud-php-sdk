<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeBackupPolicyResponseBody extends Model
{
    /**
     * @var string
     */
    public $archiveBackupKeepCount;

    /**
     * @var string
     */
    public $archiveBackupKeepPolicy;

    /**
     * @var string
     */
    public $archiveBackupRetentionPeriod;

    /**
     * @var string
     */
    public $backupInterval;

    /**
     * @var string
     */
    public $backupLog;

    /**
     * @var string
     */
    public $backupMethod;

    /**
     * @var int
     */
    public $backupRetentionPeriod;

    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $compressType;

    /**
     * @var string
     */
    public $enableBackupLog;

    /**
     * @var bool
     */
    public $enableIncrementDataBackup;

    /**
     * @var string
     */
    public $highSpaceUsageProtection;

    /**
     * @var int
     */
    public $localLogRetentionHours;

    /**
     * @var string
     */
    public $localLogRetentionSpace;

    /**
     * @var string
     */
    public $logBackupFrequency;

    /**
     * @var int
     */
    public $logBackupLocalRetentionNumber;

    /**
     * @var int
     */
    public $logBackupRetentionPeriod;

    /**
     * @var string
     */
    public $preferredBackupPeriod;

    /**
     * @var string
     */
    public $preferredBackupTime;

    /**
     * @var string
     */
    public $preferredNextBackupTime;

    /**
     * @var string
     */
    public $releasedKeepPolicy;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $supportReleasedKeep;

    /**
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
        if (isset($map['SupportReleasedKeep'])) {
            $model->supportReleasedKeep = $map['SupportReleasedKeep'];
        }
        if (isset($map['SupportVolumeShadowCopy'])) {
            $model->supportVolumeShadowCopy = $map['SupportVolumeShadowCopy'];
        }

        return $model;
    }
}
