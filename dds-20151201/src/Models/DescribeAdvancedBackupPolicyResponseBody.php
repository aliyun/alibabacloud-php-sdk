<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeAdvancedBackupPolicyResponseBody\advancedBackupDataPolicies;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeAdvancedBackupPolicyResponseBody\advancedBackupLogPolicies;

class DescribeAdvancedBackupPolicyResponseBody extends Model
{
    /**
     * @var advancedBackupDataPolicies[]
     */
    public $advancedBackupDataPolicies;

    /**
     * @var advancedBackupLogPolicies[]
     */
    public $advancedBackupLogPolicies;

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
    public $preferredNextBackupTime;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $snapshotBackupType;
    protected $_name = [
        'advancedBackupDataPolicies' => 'AdvancedBackupDataPolicies',
        'advancedBackupLogPolicies' => 'AdvancedBackupLogPolicies',
        'backupRetentionPolicyOnClusterDeletion' => 'BackupRetentionPolicyOnClusterDeletion',
        'DBInstanceId' => 'DBInstanceId',
        'preferredBackupTime' => 'PreferredBackupTime',
        'preferredNextBackupTime' => 'PreferredNextBackupTime',
        'requestId' => 'RequestId',
        'snapshotBackupType' => 'SnapshotBackupType',
    ];

    public function validate()
    {
        if (\is_array($this->advancedBackupDataPolicies)) {
            Model::validateArray($this->advancedBackupDataPolicies);
        }
        if (\is_array($this->advancedBackupLogPolicies)) {
            Model::validateArray($this->advancedBackupLogPolicies);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->advancedBackupDataPolicies) {
            if (\is_array($this->advancedBackupDataPolicies)) {
                $res['AdvancedBackupDataPolicies'] = [];
                $n1 = 0;
                foreach ($this->advancedBackupDataPolicies as $item1) {
                    $res['AdvancedBackupDataPolicies'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->advancedBackupLogPolicies) {
            if (\is_array($this->advancedBackupLogPolicies)) {
                $res['AdvancedBackupLogPolicies'] = [];
                $n1 = 0;
                foreach ($this->advancedBackupLogPolicies as $item1) {
                    $res['AdvancedBackupLogPolicies'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->preferredNextBackupTime) {
            $res['PreferredNextBackupTime'] = $this->preferredNextBackupTime;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
            if (!empty($map['AdvancedBackupDataPolicies'])) {
                $model->advancedBackupDataPolicies = [];
                $n1 = 0;
                foreach ($map['AdvancedBackupDataPolicies'] as $item1) {
                    $model->advancedBackupDataPolicies[$n1] = advancedBackupDataPolicies::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['AdvancedBackupLogPolicies'])) {
            if (!empty($map['AdvancedBackupLogPolicies'])) {
                $model->advancedBackupLogPolicies = [];
                $n1 = 0;
                foreach ($map['AdvancedBackupLogPolicies'] as $item1) {
                    $model->advancedBackupLogPolicies[$n1] = advancedBackupLogPolicies::fromMap($item1);
                    ++$n1;
                }
            }
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

        if (isset($map['PreferredNextBackupTime'])) {
            $model->preferredNextBackupTime = $map['PreferredNextBackupTime'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SnapshotBackupType'])) {
            $model->snapshotBackupType = $map['SnapshotBackupType'];
        }

        return $model;
    }
}
