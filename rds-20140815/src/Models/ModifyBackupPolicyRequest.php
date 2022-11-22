<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifyBackupPolicyRequest extends Model
{
    /**
     * @var int
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
     * @var string
     */
    public $backupPolicyMode;

    /**
     * @var string
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
    public $DBInstanceId;

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
     * @var string
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
