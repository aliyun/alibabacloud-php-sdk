<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20210101\Models;

use AlibabaCloud\Dara\Model;

class ModifyBackupPolicyShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $advanceDataPoliciesShrink;

    /**
     * @var string
     */
    public $advanceIncPoliciesShrink;

    /**
     * @var string
     */
    public $advanceLogPoliciesShrink;

    /**
     * @var string
     */
    public $backupMethod;

    /**
     * @var int
     */
    public $backupPriority;

    /**
     * @var string
     */
    public $backupRetentionPolicyOnClusterDeletion;

    /**
     * @var string
     */
    public $category;

    /**
     * @var bool
     */
    public $enableIncBackup;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $preferredBackupWindowBegin;

    /**
     * @var string
     */
    public $regionCode;
    protected $_name = [
        'advanceDataPoliciesShrink' => 'AdvanceDataPolicies',
        'advanceIncPoliciesShrink' => 'AdvanceIncPolicies',
        'advanceLogPoliciesShrink' => 'AdvanceLogPolicies',
        'backupMethod' => 'BackupMethod',
        'backupPriority' => 'BackupPriority',
        'backupRetentionPolicyOnClusterDeletion' => 'BackupRetentionPolicyOnClusterDeletion',
        'category' => 'Category',
        'enableIncBackup' => 'EnableIncBackup',
        'instanceName' => 'InstanceName',
        'preferredBackupWindowBegin' => 'PreferredBackupWindowBegin',
        'regionCode' => 'RegionCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->advanceDataPoliciesShrink) {
            $res['AdvanceDataPolicies'] = $this->advanceDataPoliciesShrink;
        }

        if (null !== $this->advanceIncPoliciesShrink) {
            $res['AdvanceIncPolicies'] = $this->advanceIncPoliciesShrink;
        }

        if (null !== $this->advanceLogPoliciesShrink) {
            $res['AdvanceLogPolicies'] = $this->advanceLogPoliciesShrink;
        }

        if (null !== $this->backupMethod) {
            $res['BackupMethod'] = $this->backupMethod;
        }

        if (null !== $this->backupPriority) {
            $res['BackupPriority'] = $this->backupPriority;
        }

        if (null !== $this->backupRetentionPolicyOnClusterDeletion) {
            $res['BackupRetentionPolicyOnClusterDeletion'] = $this->backupRetentionPolicyOnClusterDeletion;
        }

        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->enableIncBackup) {
            $res['EnableIncBackup'] = $this->enableIncBackup;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->preferredBackupWindowBegin) {
            $res['PreferredBackupWindowBegin'] = $this->preferredBackupWindowBegin;
        }

        if (null !== $this->regionCode) {
            $res['RegionCode'] = $this->regionCode;
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
        if (isset($map['AdvanceDataPolicies'])) {
            $model->advanceDataPoliciesShrink = $map['AdvanceDataPolicies'];
        }

        if (isset($map['AdvanceIncPolicies'])) {
            $model->advanceIncPoliciesShrink = $map['AdvanceIncPolicies'];
        }

        if (isset($map['AdvanceLogPolicies'])) {
            $model->advanceLogPoliciesShrink = $map['AdvanceLogPolicies'];
        }

        if (isset($map['BackupMethod'])) {
            $model->backupMethod = $map['BackupMethod'];
        }

        if (isset($map['BackupPriority'])) {
            $model->backupPriority = $map['BackupPriority'];
        }

        if (isset($map['BackupRetentionPolicyOnClusterDeletion'])) {
            $model->backupRetentionPolicyOnClusterDeletion = $map['BackupRetentionPolicyOnClusterDeletion'];
        }

        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['EnableIncBackup'])) {
            $model->enableIncBackup = $map['EnableIncBackup'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['PreferredBackupWindowBegin'])) {
            $model->preferredBackupWindowBegin = $map['PreferredBackupWindowBegin'];
        }

        if (isset($map['RegionCode'])) {
            $model->regionCode = $map['RegionCode'];
        }

        return $model;
    }
}
