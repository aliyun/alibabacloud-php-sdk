<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribePoliciesV2ResponseBody\policies;

use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribePoliciesV2ResponseBody\policies\rules\retentionRules;
use AlibabaCloud\Tea\Model;

class rules extends Model
{
    /**
     * @description This parameter is returned only if the value of the **RuleType** parameter is **BACKUP**. This parameter indicates the backup type. Valid value: **COMPLETE**, which indicates full backup.
     *
     * @example COMPLETE
     *
     * @var string
     */
    public $backupType;

    /**
     * @var int
     */
    public $keepLatestSnapshots;

    /**
     * @description This parameter is returned only if the value of the **RuleType** parameter is **REPLICATION**. This parameter indicates the ID of the destination region.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $replicationRegionId;

    /**
     * @description This parameter is returned only if the value of the **RuleType** parameter is **TRANSITION** or **REPLICATION**.
     *
     *   If the value of the **RuleType** parameter is **TRANSITION**, this parameter indicates the retention period of the backup data. Minimum value: 1. Unit: days.
     *   If the value of the **RuleType** parameter is **REPLICATION**, this parameter indicates the retention period of remote backups. Minimum value: 1. Unit: days.
     *
     * @example 7
     *
     * @var int
     */
    public $retention;

    /**
     * @description This parameter is returned only if the value of the **RuleType** parameter is **TRANSITION**. This parameter indicates the special retention rules.
     *
     * @var retentionRules[]
     */
    public $retentionRules;

    /**
     * @description The ID of the rule.
     *
     * @example rule-000************f1e
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
     * @description This parameter is returned only if the value of the **RuleType** parameter is **BACKUP**. This parameter indicates the backup schedule settings. Format: `I|{startTime}|{interval}`. The system runs the first backup job at a point in time that is specified in the {startTime} parameter and the subsequent backup jobs at an interval that is specified in the {interval} parameter. The system does not run a backup job before the specified point in time. Each backup job, except the first one, starts only after the previous backup job is completed. For example, `I|1631685600|P1D` indicates that the system runs the first backup job at 14:00:00 on September 15, 2021 and the subsequent backup jobs once a day.
     *
     *   startTime: the time at which the system starts to run a backup job. The time must follow the UNIX time format. Unit: seconds.
     *   interval: the interval at which the system runs a backup job. The interval follows the ISO 8601 standard. For example, PT1H indicates an interval of one hour. P1D indicates an interval of one day.
     *
     * @example I|1648647166|P1D
     *
     * @var string
     */
    public $schedule;
    protected $_name = [
        'backupType'          => 'BackupType',
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
        if (null !== $this->backupType) {
            $res['BackupType'] = $this->backupType;
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
        if (isset($map['BackupType'])) {
            $model->backupType = $map['BackupType'];
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
