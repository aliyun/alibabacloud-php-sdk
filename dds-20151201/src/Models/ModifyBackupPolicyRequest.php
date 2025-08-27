<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Dara\Model;

class ModifyBackupPolicyRequest extends Model
{
    /**
     * @var string
     */
    public $backupInterval;

    /**
     * @var int
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
    public $crossBackupType;

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
    public $DBInstanceId;

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
     * @var int
     */
    public $highFrequencyBackupRetention;

    /**
     * @var string
     */
    public $instanceType;

    /**
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
     * @var string
     */
    public $preferredBackupPeriod;

    /**
     * @var string
     */
    public $preferredBackupTime;

    /**
     * @var bool
     */
    public $preserveOneEachHour;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

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
        'crossBackupType' => 'CrossBackupType',
        'crossLogRetentionType' => 'CrossLogRetentionType',
        'crossLogRetentionValue' => 'CrossLogRetentionValue',
        'crossRetentionType' => 'CrossRetentionType',
        'crossRetentionValue' => 'CrossRetentionValue',
        'DBInstanceId' => 'DBInstanceId',
        'destRegion' => 'DestRegion',
        'enableBackupLog' => 'EnableBackupLog',
        'enableCrossLogBackup' => 'EnableCrossLogBackup',
        'highFrequencyBackupRetention' => 'HighFrequencyBackupRetention',
        'instanceType' => 'InstanceType',
        'logBackupRetentionPeriod' => 'LogBackupRetentionPeriod',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'preferredBackupPeriod' => 'PreferredBackupPeriod',
        'preferredBackupTime' => 'PreferredBackupTime',
        'preserveOneEachHour' => 'PreserveOneEachHour',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
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

        if (null !== $this->preserveOneEachHour) {
            $res['PreserveOneEachHour'] = $this->preserveOneEachHour;
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

        if (isset($map['PreserveOneEachHour'])) {
            $model->preserveOneEachHour = $map['PreserveOneEachHour'];
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
