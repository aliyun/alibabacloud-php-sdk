<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\UpdatePolicyV2Request;

use AlibabaCloud\SDK\Hbr\V20170908\Models\UpdatePolicyV2Request\rules\retentionRules;
use AlibabaCloud\Tea\Model;

class rules extends Model
{
    /**
     * @description This parameter is required only if the **RuleType** parameter is set to **TRANSITION**. This parameter specifies the time when data is dumped from a backup vault to an archive vault. Unit: days.
     *
     * @example 90
     *
     * @var int
     */
    public $archiveDays;

    /**
     * @description This parameter is required only if the **RuleType** parameter is set to **BACKUP**. This parameter specifies the backup type. Valid value: **COMPLETE**, which indicates full backup.
     *
     * @example COMPLETE
     *
     * @var string
     */
    public $backupType;

    /**
     * @description This parameter is required only if the **RuleType** parameter is set to **TRANSITION**. This parameter specifies the time when data is dumped from a backup vault to a cold archive vault. Unit: days.
     *
     * @example 365
     *
     * @var int
     */
    public $coldArchiveDays;

    /**
     * @description Specifies whether to enable the feature of keeping at least one backup version. Valid values:
     *
     *   0: The feature is disabled.
     *   1: The feature is enabled.
     *
     * @example 1
     *
     * @var int
     */
    public $keepLatestSnapshots;

    /**
     * @description This parameter is required only if the **RuleType** parameter is set to **REPLICATION**. This parameter specifies the ID of the destination region.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $replicationRegionId;

    /**
     * @description This parameter is required only if the **RuleType** parameter is set to **TRANSITION** or **REPLICATION**.
     *
     *   If the **RuleType** parameter is set to **TRANSITION**, this parameter specifies the retention period of the backup data. Minimum value: 1. Unit: days.
     *   If the **RuleType** parameter is set to **REPLICATION**, this parameter specifies the retention period of remote backups. Minimum value: 1. Unit: days.
     *
     * @example 7
     *
     * @var int
     */
    public $retention;

    /**
     * @description This parameter is required only if the **RuleType** parameter is set to **TRANSITION**. This parameter specifies the special retention rules.
     *
     * @var retentionRules[]
     */
    public $retentionRules;

    /**
     * @description The rule ID.
     *
     * @example rule-000************rof
     *
     * @var string
     */
    public $ruleId;

    /**
     * @description The type of the rule. Each backup policy must have at least one rule of the **BACKUP** type and only one rule of the **TRANSITION** type.
     *
     *   **BACKUP**: backup rule
     *   **TRANSITION**: lifecycle rule
     *   **REPLICATION**: replication rule
     *
     * @example BACKUP
     *
     * @var string
     */
    public $ruleType;

    /**
     * @description This parameter is required only if the **RuleType** parameter is set to **BACKUP**. This parameter specifies the backup schedule settings. Format: `I|{startTime}|{interval}`. The system runs the first backup job at a point in time that is specified in the {startTime} parameter and the subsequent backup jobs at an interval that is specified in the {interval} parameter. The system does not run a backup job before the specified point in time. Each backup job, except the first one, starts only after the previous backup job is complete. For example, `I|1631685600|P1D` specifies that the system runs the first backup job at 14:00:00 on September 15, 2021 and the subsequent backup jobs once a day.
     *
     *   startTime: the time at which the system starts to run a backup job. The time must follow the UNIX time format. Unit: seconds.
     *   interval: the interval at which the system runs a backup job. The interval must follow the ISO 8601 standard. For example, PT1H specifies an interval of one hour. P1D specifies an interval of one day.
     *
     * @example I|1648647166|P1D
     *
     * @var string
     */
    public $schedule;
    protected $_name = [
        'archiveDays'         => 'ArchiveDays',
        'backupType'          => 'BackupType',
        'coldArchiveDays'     => 'ColdArchiveDays',
        'keepLatestSnapshots' => 'KeepLatestSnapshots',
        'replicationRegionId' => 'ReplicationRegionId',
        'retention'           => 'Retention',
        'retentionRules'      => 'RetentionRules',
        'ruleId'              => 'RuleId',
        'ruleType'            => 'RuleType',
        'schedule'            => 'Schedule',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->archiveDays) {
            $res['ArchiveDays'] = $this->archiveDays;
        }
        if (null !== $this->backupType) {
            $res['BackupType'] = $this->backupType;
        }
        if (null !== $this->coldArchiveDays) {
            $res['ColdArchiveDays'] = $this->coldArchiveDays;
        }
        if (null !== $this->keepLatestSnapshots) {
            $res['KeepLatestSnapshots'] = $this->keepLatestSnapshots;
        }
        if (null !== $this->replicationRegionId) {
            $res['ReplicationRegionId'] = $this->replicationRegionId;
        }
        if (null !== $this->retention) {
            $res['Retention'] = $this->retention;
        }
        if (null !== $this->retentionRules) {
            $res['RetentionRules'] = [];
            if (null !== $this->retentionRules && \is_array($this->retentionRules)) {
                $n = 0;
                foreach ($this->retentionRules as $item) {
                    $res['RetentionRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }
        if (null !== $this->schedule) {
            $res['Schedule'] = $this->schedule;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArchiveDays'])) {
            $model->archiveDays = $map['ArchiveDays'];
        }
        if (isset($map['BackupType'])) {
            $model->backupType = $map['BackupType'];
        }
        if (isset($map['ColdArchiveDays'])) {
            $model->coldArchiveDays = $map['ColdArchiveDays'];
        }
        if (isset($map['KeepLatestSnapshots'])) {
            $model->keepLatestSnapshots = $map['KeepLatestSnapshots'];
        }
        if (isset($map['ReplicationRegionId'])) {
            $model->replicationRegionId = $map['ReplicationRegionId'];
        }
        if (isset($map['Retention'])) {
            $model->retention = $map['Retention'];
        }
        if (isset($map['RetentionRules'])) {
            if (!empty($map['RetentionRules'])) {
                $model->retentionRules = [];
                $n                     = 0;
                foreach ($map['RetentionRules'] as $item) {
                    $model->retentionRules[$n++] = null !== $item ? retentionRules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }
        if (isset($map['Schedule'])) {
            $model->schedule = $map['Schedule'];
        }

        return $model;
    }
}
