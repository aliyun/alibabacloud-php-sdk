<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Dara\Model;

class DescribeBackupPolicyResponseBody extends Model
{
    /**
     * @var int
     */
    public $backupInterval;

    /**
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
     * @var int
     */
    public $enableBackupLog;

    /**
     * @var int
     */
    public $enableCrossLogBackup;

    /**
     * @var string
     */
    public $highFrequencyBackupRetention;

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
     * @var bool
     */
    public $preserveOneEachHour;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $snapshotBackupType;

    /**
     * @var string
     */
    public $srcRegion;
    protected $_name = [
        'backupInterval' => 'BackupInterval',
        'backupRetentionPeriod' => 'BackupRetentionPeriod',
        'backupRetentionPolicyOnClusterDeletion' => 'BackupRetentionPolicyOnClusterDeletion',
        'crossBackupPeriod' => 'CrossBackupPeriod',
        'crossLogRetentionType' => 'CrossLogRetentionType',
        'crossLogRetentionValue' => 'CrossLogRetentionValue',
        'crossRetentionType' => 'CrossRetentionType',
        'crossRetentionValue' => 'CrossRetentionValue',
        'destRegion' => 'DestRegion',
        'enableBackupLog' => 'EnableBackupLog',
        'enableCrossLogBackup' => 'EnableCrossLogBackup',
        'highFrequencyBackupRetention' => 'HighFrequencyBackupRetention',
        'logBackupRetentionPeriod' => 'LogBackupRetentionPeriod',
        'preferredBackupPeriod' => 'PreferredBackupPeriod',
        'preferredBackupTime' => 'PreferredBackupTime',
        'preferredNextBackupTime' => 'PreferredNextBackupTime',
        'preserveOneEachHour' => 'PreserveOneEachHour',
        'requestId' => 'RequestId',
        'snapshotBackupType' => 'SnapshotBackupType',
        'srcRegion' => 'SrcRegion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->preserveOneEachHour) {
            $res['PreserveOneEachHour'] = $this->preserveOneEachHour;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['PreserveOneEachHour'])) {
            $model->preserveOneEachHour = $map['PreserveOneEachHour'];
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
