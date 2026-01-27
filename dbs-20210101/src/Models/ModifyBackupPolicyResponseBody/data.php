<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20210101\Models\ModifyBackupPolicyResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dbs\V20210101\Models\ModifyBackupPolicyResponseBody\data\advanceDataPolicies;
use AlibabaCloud\SDK\Dbs\V20210101\Models\ModifyBackupPolicyResponseBody\data\advanceIncPolicies;
use AlibabaCloud\SDK\Dbs\V20210101\Models\ModifyBackupPolicyResponseBody\data\advanceLogPolicies;

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
        'backupRetentionPolicyOnClusterDeletion' => 'BackupRetentionPolicyOnClusterDeletion',
        'category' => 'Category',
        'enableIncBackup' => 'EnableIncBackup',
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

        if (null !== $this->backupRetentionPolicyOnClusterDeletion) {
            $res['BackupRetentionPolicyOnClusterDeletion'] = $this->backupRetentionPolicyOnClusterDeletion;
        }

        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->enableIncBackup) {
            $res['EnableIncBackup'] = $this->enableIncBackup;
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

        if (isset($map['BackupRetentionPolicyOnClusterDeletion'])) {
            $model->backupRetentionPolicyOnClusterDeletion = $map['BackupRetentionPolicyOnClusterDeletion'];
        }

        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['EnableIncBackup'])) {
            $model->enableIncBackup = $map['EnableIncBackup'];
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
