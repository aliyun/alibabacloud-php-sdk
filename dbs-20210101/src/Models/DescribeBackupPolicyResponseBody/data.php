<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20210101\Models\DescribeBackupPolicyResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dbs\V20210101\Models\DescribeBackupPolicyResponseBody\data\advanceDataPolicies;
use AlibabaCloud\SDK\Dbs\V20210101\Models\DescribeBackupPolicyResponseBody\data\advanceIncPolicies;
use AlibabaCloud\SDK\Dbs\V20210101\Models\DescribeBackupPolicyResponseBody\data\advanceLogPolicies;

class data extends Model
{
    /**
     * @var advanceDataPolicies[]
     */
    public $advanceDataPolicies;

    /**
     * @var advanceIncPolicies[]
     */
    public $advanceIncPolicies;

    /**
     * @var advanceLogPolicies[]
     */
    public $advanceLogPolicies;

    /**
     * @var string
     */
    public $backupMethod;

    /**
     * @var int
     */
    public $backupPriority;

    /**
     * @var int
     */
    public $backupRetentionPeriod;

    /**
     * @var string
     */
    public $backupRetentionPolicyOnClusterDeletion;

    /**
     * @var string
     */
    public $category;

    /**
     * @var int
     */
    public $enableBackup;

    /**
     * @var int
     */
    public $enableIncBackup;

    /**
     * @var int
     */
    public $enableLogBackup;

    /**
     * @var int
     */
    public $highFrequencyBakInterval;

    /**
     * @var string
     */
    public $highSpaceUsageProtection;

    /**
     * @var int
     */
    public $incBackupInterval;

    /**
     * @var int
     */
    public $localLogRetentionSpace;

    /**
     * @var string
     */
    public $logBackupLocalRetentionNumber;

    /**
     * @var int
     */
    public $logBackupRetention;

    /**
     * @var string
     */
    public $preferredBackupDate;

    /**
     * @var string
     */
    public $preferredBackupWindow;

    /**
     * @var string
     */
    public $preferredBackupWindowBegin;
    protected $_name = [
        'advanceDataPolicies' => 'AdvanceDataPolicies',
        'advanceIncPolicies' => 'AdvanceIncPolicies',
        'advanceLogPolicies' => 'AdvanceLogPolicies',
        'backupMethod' => 'BackupMethod',
        'backupPriority' => 'BackupPriority',
        'backupRetentionPeriod' => 'BackupRetentionPeriod',
        'backupRetentionPolicyOnClusterDeletion' => 'BackupRetentionPolicyOnClusterDeletion',
        'category' => 'Category',
        'enableBackup' => 'EnableBackup',
        'enableIncBackup' => 'EnableIncBackup',
        'enableLogBackup' => 'EnableLogBackup',
        'highFrequencyBakInterval' => 'HighFrequencyBakInterval',
        'highSpaceUsageProtection' => 'HighSpaceUsageProtection',
        'incBackupInterval' => 'IncBackupInterval',
        'localLogRetentionSpace' => 'LocalLogRetentionSpace',
        'logBackupLocalRetentionNumber' => 'LogBackupLocalRetentionNumber',
        'logBackupRetention' => 'LogBackupRetention',
        'preferredBackupDate' => 'PreferredBackupDate',
        'preferredBackupWindow' => 'PreferredBackupWindow',
        'preferredBackupWindowBegin' => 'PreferredBackupWindowBegin',
    ];

    public function validate()
    {
        if (\is_array($this->advanceDataPolicies)) {
            Model::validateArray($this->advanceDataPolicies);
        }
        if (\is_array($this->advanceIncPolicies)) {
            Model::validateArray($this->advanceIncPolicies);
        }
        if (\is_array($this->advanceLogPolicies)) {
            Model::validateArray($this->advanceLogPolicies);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->advanceDataPolicies) {
            if (\is_array($this->advanceDataPolicies)) {
                $res['AdvanceDataPolicies'] = [];
                $n1 = 0;
                foreach ($this->advanceDataPolicies as $item1) {
                    $res['AdvanceDataPolicies'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->advanceIncPolicies) {
            if (\is_array($this->advanceIncPolicies)) {
                $res['AdvanceIncPolicies'] = [];
                $n1 = 0;
                foreach ($this->advanceIncPolicies as $item1) {
                    $res['AdvanceIncPolicies'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->advanceLogPolicies) {
            if (\is_array($this->advanceLogPolicies)) {
                $res['AdvanceLogPolicies'] = [];
                $n1 = 0;
                foreach ($this->advanceLogPolicies as $item1) {
                    $res['AdvanceLogPolicies'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdvanceDataPolicies'])) {
            if (!empty($map['AdvanceDataPolicies'])) {
                $model->advanceDataPolicies = [];
                $n1 = 0;
                foreach ($map['AdvanceDataPolicies'] as $item1) {
                    $model->advanceDataPolicies[$n1] = advanceDataPolicies::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['AdvanceIncPolicies'])) {
            if (!empty($map['AdvanceIncPolicies'])) {
                $model->advanceIncPolicies = [];
                $n1 = 0;
                foreach ($map['AdvanceIncPolicies'] as $item1) {
                    $model->advanceIncPolicies[$n1] = advanceIncPolicies::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['AdvanceLogPolicies'])) {
            if (!empty($map['AdvanceLogPolicies'])) {
                $model->advanceLogPolicies = [];
                $n1 = 0;
                foreach ($map['AdvanceLogPolicies'] as $item1) {
                    $model->advanceLogPolicies[$n1] = advanceLogPolicies::fromMap($item1);
                    ++$n1;
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
