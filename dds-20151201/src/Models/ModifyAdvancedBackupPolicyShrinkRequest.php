<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Dara\Model;

class ModifyAdvancedBackupPolicyShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $advancedBackupDataPoliciesShrink;

    /**
     * @var string
     */
    public $advancedBackupLogPoliciesShrink;

    /**
     * @var int
     */
    public $backupRetentionPolicyOnClusterDeletion;

    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $preferredBackupTime;

    /**
     * @var string
     */
    public $snapshotBackupType;
    protected $_name = [
        'advancedBackupDataPoliciesShrink' => 'AdvancedBackupDataPolicies',
        'advancedBackupLogPoliciesShrink' => 'AdvancedBackupLogPolicies',
        'backupRetentionPolicyOnClusterDeletion' => 'BackupRetentionPolicyOnClusterDeletion',
        'DBInstanceId' => 'DBInstanceId',
        'preferredBackupTime' => 'PreferredBackupTime',
        'snapshotBackupType' => 'SnapshotBackupType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->advancedBackupDataPoliciesShrink) {
            $res['AdvancedBackupDataPolicies'] = $this->advancedBackupDataPoliciesShrink;
        }

        if (null !== $this->advancedBackupLogPoliciesShrink) {
            $res['AdvancedBackupLogPolicies'] = $this->advancedBackupLogPoliciesShrink;
        }

        if (null !== $this->backupRetentionPolicyOnClusterDeletion) {
            $res['BackupRetentionPolicyOnClusterDeletion'] = $this->backupRetentionPolicyOnClusterDeletion;
        }

        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        if (null !== $this->preferredBackupTime) {
            $res['PreferredBackupTime'] = $this->preferredBackupTime;
        }

        if (null !== $this->snapshotBackupType) {
            $res['SnapshotBackupType'] = $this->snapshotBackupType;
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
        if (isset($map['AdvancedBackupDataPolicies'])) {
            $model->advancedBackupDataPoliciesShrink = $map['AdvancedBackupDataPolicies'];
        }

        if (isset($map['AdvancedBackupLogPolicies'])) {
            $model->advancedBackupLogPoliciesShrink = $map['AdvancedBackupLogPolicies'];
        }

        if (isset($map['BackupRetentionPolicyOnClusterDeletion'])) {
            $model->backupRetentionPolicyOnClusterDeletion = $map['BackupRetentionPolicyOnClusterDeletion'];
        }

        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        if (isset($map['PreferredBackupTime'])) {
            $model->preferredBackupTime = $map['PreferredBackupTime'];
        }

        if (isset($map['SnapshotBackupType'])) {
            $model->snapshotBackupType = $map['SnapshotBackupType'];
        }

        return $model;
    }
}
