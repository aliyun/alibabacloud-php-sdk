<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20210101\Models\DescribeBackupPolicyResponseBody;

use AlibabaCloud\SDK\Dbs\V20210101\Models\DescribeBackupPolicyResponseBody\data\advanceDataPolicies;
use AlibabaCloud\SDK\Dbs\V20210101\Models\DescribeBackupPolicyResponseBody\data\advanceLogPolicies;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var advanceDataPolicies[]
     */
    public $advanceDataPolicies;

    /**
     * @var advanceLogPolicies[]
     */
    public $advanceLogPolicies;

    /**
     * @example Physical
     *
     * @var string
     */
    public $backupMethod;

    /**
     * @example 0
     *
     * @var int
     */
    public $backupPriority;

    /**
     * @example 7
     *
     * @var int
     */
    public $backupRetentionPeriod;

    /**
     * @example LATEST
     *
     * @var string
     */
    public $backupRetentionPolicyOnClusterDeletion;

    /**
     * @example Standard
     *
     * @var string
     */
    public $category;

    /**
     * @example 1
     *
     * @var int
     */
    public $enableBackup;

    /**
     * @example 0
     *
     * @var int
     */
    public $enableIncBackup;

    /**
     * @example 1
     *
     * @var int
     */
    public $enableLogBackup;

    /**
     * @example 120
     *
     * @var int
     */
    public $highFrequencyBakInterval;

    /**
     * @example Enable
     *
     * @var string
     */
    public $highSpaceUsageProtection;

    /**
     * @example -1
     *
     * @var int
     */
    public $incBackupInterval;

    /**
     * @example 30
     *
     * @var int
     */
    public $localLogRetentionSpace;

    /**
     * @example 10
     *
     * @var string
     */
    public $logBackupLocalRetentionNumber;

    /**
     * @example 7
     *
     * @var int
     */
    public $logBackupRetention;

    /**
     * @example 1010101
     *
     * @var string
     */
    public $preferredBackupDate;

    /**
     * @example 23:00Z-24:00Z
     *
     * @var string
     */
    public $preferredBackupWindow;

    /**
     * @example 23:00Z
     *
     * @var string
     */
    public $preferredBackupWindowBegin;
    protected $_name = [
        'advanceDataPolicies'                    => 'AdvanceDataPolicies',
        'advanceLogPolicies'                     => 'AdvanceLogPolicies',
        'backupMethod'                           => 'BackupMethod',
        'backupPriority'                         => 'BackupPriority',
        'backupRetentionPeriod'                  => 'BackupRetentionPeriod',
        'backupRetentionPolicyOnClusterDeletion' => 'BackupRetentionPolicyOnClusterDeletion',
        'category'                               => 'Category',
        'enableBackup'                           => 'EnableBackup',
        'enableIncBackup'                        => 'EnableIncBackup',
        'enableLogBackup'                        => 'EnableLogBackup',
        'highFrequencyBakInterval'               => 'HighFrequencyBakInterval',
        'highSpaceUsageProtection'               => 'HighSpaceUsageProtection',
        'incBackupInterval'                      => 'IncBackupInterval',
        'localLogRetentionSpace'                 => 'LocalLogRetentionSpace',
        'logBackupLocalRetentionNumber'          => 'LogBackupLocalRetentionNumber',
        'logBackupRetention'                     => 'LogBackupRetention',
        'preferredBackupDate'                    => 'PreferredBackupDate',
        'preferredBackupWindow'                  => 'PreferredBackupWindow',
        'preferredBackupWindowBegin'             => 'PreferredBackupWindowBegin',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->advanceDataPolicies) {
            $res['AdvanceDataPolicies'] = [];
            if (null !== $this->advanceDataPolicies && \is_array($this->advanceDataPolicies)) {
                $n = 0;
                foreach ($this->advanceDataPolicies as $item) {
                    $res['AdvanceDataPolicies'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->advanceLogPolicies) {
            $res['AdvanceLogPolicies'] = [];
            if (null !== $this->advanceLogPolicies && \is_array($this->advanceLogPolicies)) {
                $n = 0;
                foreach ($this->advanceLogPolicies as $item) {
                    $res['AdvanceLogPolicies'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->backupMethod) {
            $res['BackupMethod'] = $this->backupMethod;
        }
        if (null !== $this->backupPriority) {
            $res['BackupPriority'] = $this->backupPriority;
        }
        if (null !== $this->backupRetentionPeriod) {
            $res['BackupRetentionPeriod'] = $this->backupRetentionPeriod;
        }
        if (null !== $this->backupRetentionPolicyOnClusterDeletion) {
            $res['BackupRetentionPolicyOnClusterDeletion'] = $this->backupRetentionPolicyOnClusterDeletion;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->enableBackup) {
            $res['EnableBackup'] = $this->enableBackup;
        }
        if (null !== $this->enableIncBackup) {
            $res['EnableIncBackup'] = $this->enableIncBackup;
        }
        if (null !== $this->enableLogBackup) {
            $res['EnableLogBackup'] = $this->enableLogBackup;
        }
        if (null !== $this->highFrequencyBakInterval) {
            $res['HighFrequencyBakInterval'] = $this->highFrequencyBakInterval;
        }
        if (null !== $this->highSpaceUsageProtection) {
            $res['HighSpaceUsageProtection'] = $this->highSpaceUsageProtection;
        }
        if (null !== $this->incBackupInterval) {
            $res['IncBackupInterval'] = $this->incBackupInterval;
        }
        if (null !== $this->localLogRetentionSpace) {
            $res['LocalLogRetentionSpace'] = $this->localLogRetentionSpace;
        }
        if (null !== $this->logBackupLocalRetentionNumber) {
            $res['LogBackupLocalRetentionNumber'] = $this->logBackupLocalRetentionNumber;
        }
        if (null !== $this->logBackupRetention) {
            $res['LogBackupRetention'] = $this->logBackupRetention;
        }
        if (null !== $this->preferredBackupDate) {
            $res['PreferredBackupDate'] = $this->preferredBackupDate;
        }
        if (null !== $this->preferredBackupWindow) {
            $res['PreferredBackupWindow'] = $this->preferredBackupWindow;
        }
        if (null !== $this->preferredBackupWindowBegin) {
            $res['PreferredBackupWindowBegin'] = $this->preferredBackupWindowBegin;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdvanceDataPolicies'])) {
            if (!empty($map['AdvanceDataPolicies'])) {
                $model->advanceDataPolicies = [];
                $n                          = 0;
                foreach ($map['AdvanceDataPolicies'] as $item) {
                    $model->advanceDataPolicies[$n++] = null !== $item ? advanceDataPolicies::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AdvanceLogPolicies'])) {
            if (!empty($map['AdvanceLogPolicies'])) {
                $model->advanceLogPolicies = [];
                $n                         = 0;
                foreach ($map['AdvanceLogPolicies'] as $item) {
                    $model->advanceLogPolicies[$n++] = null !== $item ? advanceLogPolicies::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['BackupMethod'])) {
            $model->backupMethod = $map['BackupMethod'];
        }
        if (isset($map['BackupPriority'])) {
            $model->backupPriority = $map['BackupPriority'];
        }
        if (isset($map['BackupRetentionPeriod'])) {
            $model->backupRetentionPeriod = $map['BackupRetentionPeriod'];
        }
        if (isset($map['BackupRetentionPolicyOnClusterDeletion'])) {
            $model->backupRetentionPolicyOnClusterDeletion = $map['BackupRetentionPolicyOnClusterDeletion'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['EnableBackup'])) {
            $model->enableBackup = $map['EnableBackup'];
        }
        if (isset($map['EnableIncBackup'])) {
            $model->enableIncBackup = $map['EnableIncBackup'];
        }
        if (isset($map['EnableLogBackup'])) {
            $model->enableLogBackup = $map['EnableLogBackup'];
        }
        if (isset($map['HighFrequencyBakInterval'])) {
            $model->highFrequencyBakInterval = $map['HighFrequencyBakInterval'];
        }
        if (isset($map['HighSpaceUsageProtection'])) {
            $model->highSpaceUsageProtection = $map['HighSpaceUsageProtection'];
        }
        if (isset($map['IncBackupInterval'])) {
            $model->incBackupInterval = $map['IncBackupInterval'];
        }
        if (isset($map['LocalLogRetentionSpace'])) {
            $model->localLogRetentionSpace = $map['LocalLogRetentionSpace'];
        }
        if (isset($map['LogBackupLocalRetentionNumber'])) {
            $model->logBackupLocalRetentionNumber = $map['LogBackupLocalRetentionNumber'];
        }
        if (isset($map['LogBackupRetention'])) {
            $model->logBackupRetention = $map['LogBackupRetention'];
        }
        if (isset($map['PreferredBackupDate'])) {
            $model->preferredBackupDate = $map['PreferredBackupDate'];
        }
        if (isset($map['PreferredBackupWindow'])) {
            $model->preferredBackupWindow = $map['PreferredBackupWindow'];
        }
        if (isset($map['PreferredBackupWindowBegin'])) {
            $model->preferredBackupWindowBegin = $map['PreferredBackupWindowBegin'];
        }

        return $model;
    }
}
