<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribePoliciesV2ResponseBody\policies;

use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribePoliciesV2ResponseBody\policies\rules\dataSourceFilters;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribePoliciesV2ResponseBody\policies\rules\retentionRules;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribePoliciesV2ResponseBody\policies\rules\tagFilters;
use AlibabaCloud\Tea\Model;

class rules extends Model
{
    /**
     * @description This parameter is returned only if the value of the **RuleType** parameter is **TRANSITION**. This parameter indicates the time when data is dumped from a backup vault to an archive vault. Unit: days.
     *
     * @example 30
     *
     * @var int
     */
    public $archiveDays;

    /**
     * @description This parameter is returned only if the value of the **RuleType** parameter is **BACKUP**. This parameter indicates the backup type. Valid value: **COMPLETE**, which indicates full backup.
     *
     * @example COMPLETE
     *
     * @var string
     */
    public $backupType;

    /**
     * @description This parameter is required only when **RuleType** is set to **TAG**. It defines the data source filtering rule.
     *
     * @var dataSourceFilters[]
     */
    public $dataSourceFilters;

    /**
     * @description This parameter is returned only if the **PolicyType** is **UDM_ECS_ONLY**. This parameter indicates whether the immutable backup feature is enabled.
     *
     * @example true
     *
     * @var bool
     */
    public $immutable;

    /**
     * @description Indicates whether the feature of keeping at least one backup version is enabled. Valid values:
     *
     *   **0**: The feature is disabled.
     *   **1**: The feature is enabled.
     *
     * @example 1
     *
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
     * @description The rule ID.
     *
     * @example rule-000************f1e
     *
     * @var string
     */
    public $ruleId;

    /**
     * @description The type of the rule. Each backup policy must have at least one rule of the **BACKUP** type and only one rule of the **TRANSITION** type. Valid values:
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
     *   startTime: the time at which the system starts to run a backup job. The time follows the UNIX time format. Unit: seconds.
     *   interval: the interval at which the system runs a backup job. The interval follows the ISO 8601 standard. For example, PT1H indicates an interval of 1 hour. P1D indicates an interval of one day.
     *
     * @example I|1648647166|P1D
     *
     * @var string
     */
    public $schedule;

    /**
     * @description This parameter is required only when **RuleType** is set to **TAG**. It defines the resource tag filtering rule.
     *
     * @var tagFilters[]
     */
    public $tagFilters;

    /**
     * @description This parameter is returned only if the value of the RuleType parameter is BACKUP. The ID of the backup vault.
     *
     * @example v-000**************kgm
     *
     * @var string
     */
    public $vaultId;
    protected $_name = [
        'archiveDays' => 'ArchiveDays',
        'backupType' => 'BackupType',
        'dataSourceFilters' => 'DataSourceFilters',
        'immutable' => 'Immutable',
        'keepLatestSnapshots' => 'KeepLatestSnapshots',
        'replicationRegionId' => 'ReplicationRegionId',
        'retention' => 'Retention',
        'retentionRules' => 'RetentionRules',
        'ruleId' => 'RuleId',
        'ruleType' => 'RuleType',
        'schedule' => 'Schedule',
        'tagFilters' => 'TagFilters',
        'vaultId' => 'VaultId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->archiveDays) {
            $res['ArchiveDays'] = $this->archiveDays;
        }
        if (null !== $this->backupType) {
            $res['BackupType'] = $this->backupType;
        }
        if (null !== $this->dataSourceFilters) {
            $res['DataSourceFilters'] = [];
            if (null !== $this->dataSourceFilters && \is_array($this->dataSourceFilters)) {
                $n = 0;
                foreach ($this->dataSourceFilters as $item) {
                    $res['DataSourceFilters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->immutable) {
            $res['Immutable'] = $this->immutable;
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
        if (null !== $this->tagFilters) {
            $res['TagFilters'] = [];
            if (null !== $this->tagFilters && \is_array($this->tagFilters)) {
                $n = 0;
                foreach ($this->tagFilters as $item) {
                    $res['TagFilters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->vaultId) {
            $res['VaultId'] = $this->vaultId;
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
        if (isset($map['DataSourceFilters'])) {
            if (!empty($map['DataSourceFilters'])) {
                $model->dataSourceFilters = [];
                $n = 0;
                foreach ($map['DataSourceFilters'] as $item) {
                    $model->dataSourceFilters[$n++] = null !== $item ? dataSourceFilters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Immutable'])) {
            $model->immutable = $map['Immutable'];
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
                $n = 0;
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
        if (isset($map['TagFilters'])) {
            if (!empty($map['TagFilters'])) {
                $model->tagFilters = [];
                $n = 0;
                foreach ($map['TagFilters'] as $item) {
                    $model->tagFilters[$n++] = null !== $item ? tagFilters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VaultId'])) {
            $model->vaultId = $map['VaultId'];
        }

        return $model;
    }
}
