<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\SDK\Hbr\V20170908\Models\UpdateBackupPlanShrinkRequest\rule;
use AlibabaCloud\Tea\Model;

class UpdateBackupPlanShrinkRequest extends Model
{
    /**
     * @example {"dataSourceId": "ds-123456789", "path": "/changelist"}
     *
     * @var string
     */
    public $changeListPath;

    /**
     * @description The details about ECS instance backup. The value is a JSON string.
     *
     *   snapshotGroup: specifies whether to use a snapshot-consistent group. This parameter is valid only if all disks of the ECS instance are enhanced SSDs (ESSDs).
     *   appConsistent: specifies whether to enable application consistency. If you set this parameter to true, you must also specify the preScriptPath and postScriptPath parameters.
     *   preScriptPath: the path to the pre-freeze scripts.
     *   postScriptPath: the path to the post-thaw scripts.
     *
     * @example {\"EnableFsFreeze\":true,\"appConsistent\":false,\"postScriptPath\":\"\",\"preScriptPath\":\"\",\"snapshotGroup\":true,\"timeoutInSeconds\":60}
     *
     * @var string
     */
    public $detailShrink;

    /**
     * @description This parameter is required only if the **SourceType** parameter is set to **ECS_FILE**. This parameter specifies the paths to the files that are excluded from the backup job. The value must be 1 to 255 characters in length.
     *
     * @example ["/var", "/proc"]
     *
     * @var string
     */
    public $exclude;

    /**
     * @description This parameter is required only if the **SourceType** parameter is set to **ECS_FILE**. This parameter specifies the paths to the files that you want to back up. The value must be 1 to 255 characters in length.
     *
     * @example ["/home/alice/*.pdf", "/home/bob/*.txt"]
     *
     * @var string
     */
    public $include;

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
     * @description This parameter is required only if the **SourceType** parameter is set to **ECS_FILE**. This parameter specifies whether to use Windows Volume Shadow Copy Service (VSS) to define a source path.
     *
     *   This parameter is available only for Windows ECS instances.
     *   If data changes occur in the backup source, the source data must be the same as the data to be backed up before you can set this parameter to `["UseVSS":true]`.
     *   If you use VSS, you cannot back up data from multiple directories.
     *
     * @example {"UseVSS":false}
     *
     * @var string
     */
    public $options;

    /**
     * @description The details about the Tablestore instance.
     *
     * @var string
     */
    public $otsDetailShrink;

    /**
     * @description The source paths.
     *
     * @var string[]
     */
    public $path;

    /**
     * @description The ID of the backup plan.
     *
     * @example plan-20211***735
     *
     * @var string
     */
    public $planId;

    /**
     * @description The name of the backup plan.
     *
     * @example planname
     *
     * @var string
     */
    public $planName;

    /**
     * @description This parameter is required only if the **SourceType** parameter is set to **OSS**. This parameter specifies the prefix of objects that you want to back up. After a prefix is specified, only objects whose names start with the prefix are backed up.
     *
     * @example oss-prefix
     *
     * @var string
     */
    public $prefix;

    /**
     * @description The retention period of the backup data. Minimum value: 1. Unit: days.
     *
     * @example 7
     *
     * @var int
     */
    public $retention;

    /**
     * @description The rule of the backup plan.
     *
     * @var rule[]
     */
    public $rule;

    /**
     * @description The backup policy. Format: `I|{startTime}|{interval}`. The system runs the first backup job at a point in time that is specified in the `{startTime}` parameter and the subsequent backup jobs at an interval that is specified in the `{interval}` parameter. The system does not run a backup job before the specified point in time. Each backup job, except the first one, starts only after the previous backup job is completed. For example, `I|1631685600|P1D` specifies that the system runs the first backup job at 14:00:00 on September 15, 2021 and the subsequent backup jobs once a day.
     *
     *   **startTime**: the time at which the system starts to run a backup job. The time must follow the UNIX time format. Unit: seconds.
     *   **interval**: the interval at which the system runs a backup job. The interval must follow the ISO 8601 standard. For example, PT1H specifies an interval of one hour. P1D specifies an interval of one day.
     *
     * @example I|1602673264|P1D
     *
     * @var string
     */
    public $schedule;

    /**
     * @description The type of the data source. Valid values:
     *
     *   **ECS_FILE**: Elastic Compute Service (ECS) files
     *   **OSS**: Object Storage Service (OSS) buckets
     *   **NAS**: Apsara File Storage NAS file systems
     *   **OTS**: Tablestore instances
     *   **UDM_ECS**: ECS instances
     *
     * @example ECS_FILE
     *
     * @var string
     */
    public $sourceType;

    /**
     * @description This parameter is required only if the **SourceType** parameter is set to **ECS_FILE**. This parameter specifies the throttling rules. To ensure business continuity, you can limit the bandwidth that is used for file backup during peak hours. Format: `{start}|{end}|{bandwidth}`. Separate multiple throttling rules with vertical bars (|). A specified time range cannot overlap with another time range.
     *
     *   **start**: the start hour
     *   **end**: the end hour.
     *   **bandwidth**: the bandwidth. Unit: KB/s.
     *
     * @example 0:24:5120
     *
     * @var string
     */
    public $speedLimit;

    /**
     * @description Specifies whether to update the source path if the backup source is empty. Valid values:
     *
     *   true: The system replaces the original source path with the specified source path.
     *   false: The system does not update the original source path. The system backs up data based on the source path that you specified when you created the backup plan.
     *
     * @example false
     *
     * @var bool
     */
    public $updatePaths;

    /**
     * @description The ID of the backup vault.
     *
     * @example v-0006******q
     *
     * @var string
     */
    public $vaultId;
    protected $_name = [
        'changeListPath'      => 'ChangeListPath',
        'detailShrink'        => 'Detail',
        'exclude'             => 'Exclude',
        'include'             => 'Include',
        'keepLatestSnapshots' => 'KeepLatestSnapshots',
        'options'             => 'Options',
        'otsDetailShrink'     => 'OtsDetail',
        'path'                => 'Path',
        'planId'              => 'PlanId',
        'planName'            => 'PlanName',
        'prefix'              => 'Prefix',
        'retention'           => 'Retention',
        'rule'                => 'Rule',
        'schedule'            => 'Schedule',
        'sourceType'          => 'SourceType',
        'speedLimit'          => 'SpeedLimit',
        'updatePaths'         => 'UpdatePaths',
        'vaultId'             => 'VaultId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->changeListPath) {
            $res['ChangeListPath'] = $this->changeListPath;
        }
        if (null !== $this->detailShrink) {
            $res['Detail'] = $this->detailShrink;
        }
        if (null !== $this->exclude) {
            $res['Exclude'] = $this->exclude;
        }
        if (null !== $this->include) {
            $res['Include'] = $this->include;
        }
        if (null !== $this->keepLatestSnapshots) {
            $res['KeepLatestSnapshots'] = $this->keepLatestSnapshots;
        }
        if (null !== $this->options) {
            $res['Options'] = $this->options;
        }
        if (null !== $this->otsDetailShrink) {
            $res['OtsDetail'] = $this->otsDetailShrink;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->planId) {
            $res['PlanId'] = $this->planId;
        }
        if (null !== $this->planName) {
            $res['PlanName'] = $this->planName;
        }
        if (null !== $this->prefix) {
            $res['Prefix'] = $this->prefix;
        }
        if (null !== $this->retention) {
            $res['Retention'] = $this->retention;
        }
        if (null !== $this->rule) {
            $res['Rule'] = [];
            if (null !== $this->rule && \is_array($this->rule)) {
                $n = 0;
                foreach ($this->rule as $item) {
                    $res['Rule'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->schedule) {
            $res['Schedule'] = $this->schedule;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->speedLimit) {
            $res['SpeedLimit'] = $this->speedLimit;
        }
        if (null !== $this->updatePaths) {
            $res['UpdatePaths'] = $this->updatePaths;
        }
        if (null !== $this->vaultId) {
            $res['VaultId'] = $this->vaultId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateBackupPlanShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChangeListPath'])) {
            $model->changeListPath = $map['ChangeListPath'];
        }
        if (isset($map['Detail'])) {
            $model->detailShrink = $map['Detail'];
        }
        if (isset($map['Exclude'])) {
            $model->exclude = $map['Exclude'];
        }
        if (isset($map['Include'])) {
            $model->include = $map['Include'];
        }
        if (isset($map['KeepLatestSnapshots'])) {
            $model->keepLatestSnapshots = $map['KeepLatestSnapshots'];
        }
        if (isset($map['Options'])) {
            $model->options = $map['Options'];
        }
        if (isset($map['OtsDetail'])) {
            $model->otsDetailShrink = $map['OtsDetail'];
        }
        if (isset($map['Path'])) {
            if (!empty($map['Path'])) {
                $model->path = $map['Path'];
            }
        }
        if (isset($map['PlanId'])) {
            $model->planId = $map['PlanId'];
        }
        if (isset($map['PlanName'])) {
            $model->planName = $map['PlanName'];
        }
        if (isset($map['Prefix'])) {
            $model->prefix = $map['Prefix'];
        }
        if (isset($map['Retention'])) {
            $model->retention = $map['Retention'];
        }
        if (isset($map['Rule'])) {
            if (!empty($map['Rule'])) {
                $model->rule = [];
                $n           = 0;
                foreach ($map['Rule'] as $item) {
                    $model->rule[$n++] = null !== $item ? rule::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Schedule'])) {
            $model->schedule = $map['Schedule'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['SpeedLimit'])) {
            $model->speedLimit = $map['SpeedLimit'];
        }
        if (isset($map['UpdatePaths'])) {
            $model->updatePaths = $map['UpdatePaths'];
        }
        if (isset($map['VaultId'])) {
            $model->vaultId = $map['VaultId'];
        }

        return $model;
    }
}
