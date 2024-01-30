<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\SDK\Hbr\V20170908\Models\CreateBackupPlanRequest\rule;
use AlibabaCloud\Tea\Model;

class CreateBackupPlanRequest extends Model
{
    /**
     * @description The backup type. Valid value: **COMPLETE**, which indicates full backup.
     *
     * @example COMPLETE
     *
     * @var string
     */
    public $backupType;

    /**
     * @description This parameter is required only if the **SourceType** parameter is set to **OSS**. This parameter specifies the name of the OSS bucket.
     *
     * @example hbr-backup-oss
     *
     * @var string
     */
    public $bucket;

    /**
     * @description The configurations of the incremental file synchronization. This parameter is required for data synchronization only.
     *
     * @example {"dataSourceId": "ds-123456789", "path": "/changelist"}
     *
     * @var string
     */
    public $changeListPath;

    /**
     * @description This parameter is required only if the **SourceType** parameter is set to **NAS**. This parameter specifies the time to create the file system. The value must be a UNIX timestamp. Unit: seconds.
     *
     * @example 1607436917
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The name of the RAM role that is created within the source Alibaba Cloud account and assigned to the current Alibaba Cloud account to authorize the current Alibaba Cloud account to back up and restore data across Alibaba Cloud accounts.
     *
     * @example BackupRole
     *
     * @var string
     */
    public $crossAccountRoleName;

    /**
     * @description Specifies whether data is backed up and restored within the same Alibaba Cloud account or across Alibaba Cloud accounts. Valid values:
     *
     *   SELF_ACCOUNT: Data is backed up and restored within the same Alibaba Cloud account.
     *   CROSS_ACCOUNT: Data is backed up and restored across Alibaba Cloud accounts.
     *
     * @example CROSS_ACCOUNT
     *
     * @var string
     */
    public $crossAccountType;

    /**
     * @description The ID of the source Alibaba Cloud account that authorizes the current Alibaba Cloud account to back up and restore data across Alibaba Cloud accounts.
     *
     * @example 15897534xxxx4625
     *
     * @var int
     */
    public $crossAccountUserId;

    /**
     * @example {\"prefix\":\"/\"}
     *
     * @var mixed[]
     */
    public $destDataSourceDetail;

    /**
     * @example ds-*********************
     *
     * @var string
     */
    public $destDataSourceId;

    /**
     * @example OSS
     *
     * @var string
     */
    public $destSourceType;

    /**
     * @description The details about ECS instance backup. The value is a JSON string.
     *
     *   snapshotGroup: specifies whether to use a snapshot-consistent group. This parameter is valid only if all disks of the ECS instance are enhanced SSDs (ESSDs).
     *   appConsistent: specifies whether to enable application consistency. If you set this parameter to true, you must also specify the preScriptPath and postScriptPath parameters.
     *   preScriptPath: the path to the prescript file.
     *   postScriptPath: the path to the postscript file.
     *
     * @example {\"EnableFsFreeze\":true,\"appConsistent\":false,\"postScriptPath\":\"\",\"preScriptPath\":\"\",\"snapshotGroup\":true,\"timeoutInSeconds\":60}
     *
     * @var mixed[]
     */
    public $detail;

    /**
     * @var bool
     */
    public $disabled;

    /**
     * @description This parameter is required only if the **SourceType** parameter is set to **ECS_FILE**. This parameter specifies the paths to the files that are excluded from the backup job. The value can be up to 255 characters in length.
     *
     * @example ["/var", "/proc"]
     *
     * @var string
     */
    public $exclude;

    /**
     * @description This parameter is required only if the **SourceType** parameter is set to **NAS**. This parameter specifies the ID of the NAS file system.
     *
     * @example 005494
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @description This parameter is required only if the **SourceType** parameter is set to **ECS_FILE**. This parameter specifies the paths to the files that you want to back up. The value can be up to 255 characters in length.
     *
     * @example ["/home/alice/*.pdf", "/home/bob/*.txt"]
     *
     * @var string
     */
    public $include;

    /**
     * @description This parameter is required only if the **SourceType** parameter is set to **ECS_FILE**. This parameter specifies the ID of the ECS instance.
     *
     * @example i-m5e*****6q
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the Tablestore instance.
     *
     * @example instancename
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description Specifies whether to enable the "Keep at least one backup version" feature. Valid values:
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
     * @description This parameter is required only if the **SourceType** parameter is set to **ECS_FILE**. This parameter specifies whether to use Windows Volume Shadow Copy Service (VSS) to define a backup path.
     *
     *   This parameter is available only for Windows ECS instances.
     *   If data changes occur in the backup source, the source data must be the same as the data to be backed up before the system sets this parameter to `["UseVSS":true]`.
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
     * @var OtsDetail
     */
    public $otsDetail;

    /**
     * @description The backup paths.
     *
     * @var string[]
     */
    public $path;

    /**
     * @description The name of the backup schedule. The name must be 1 to 64 characters in length. The name of a backup schedule for each type of data source must be unique within a backup vault.
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
     * @description The retention period of backup data. Minimum value: 1. Unit: days.
     *
     * @example 7
     *
     * @var int
     */
    public $retention;

    /**
     * @description The rules of the backup schedule.
     *
     * @var rule[]
     */
    public $rule;

    /**
     * @description The backup policy. Format: `I|{startTime}|{interval}`. The system runs the first backup job at a point in time that is specified in the `{startTime}` parameter and the subsequent backup jobs at an interval that is specified in the `{interval}` parameter. The system does not run a backup job before the specified point in time. Each backup job, except the first one, starts only after the previous backup job is complete. For example, `I|1631685600|P1D` specifies that the system runs the first backup job at 14:00:00 on September 15, 2021 and the subsequent backup jobs once a day.
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
     *   **ECS_FILE**: backs up Elastic Compute Service (ECS) files.
     *   **OSS**: backs up Object Storage Service (OSS) buckets.
     *   **NAS**: backs up Apsara File Storage NAS file systems.
     *   **OTS**: backs up Tablestore instances.
     *   **UDM_ECS**: backs up ECS instances.
     *
     * @example ECS_FILE
     *
     * @var string
     */
    public $sourceType;

    /**
     * @description This parameter is required only if the **SourceType** parameter is set to **ECS_FILE**. This parameter specifies the throttling rules. Format: `{start}|{end}|{bandwidth}`. Separate multiple throttling rules with vertical bars (|). A specified time range cannot overlap with another time range.
     *
     *   **start**: the start hour.
     *   **end**: the end hour.
     *   **bandwidth**: the bandwidth. Unit: KB/s.
     *
     * @example 0:24:5120
     *
     * @var string
     */
    public $speedLimit;

    /**
     * @description The region in which the ECS instance that you want to back up resides.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $udmRegionId;

    /**
     * @description The ID of the backup vault.
     *
     * @example v-0006******q
     *
     * @var string
     */
    public $vaultId;
    protected $_name = [
        'backupType'           => 'BackupType',
        'bucket'               => 'Bucket',
        'changeListPath'       => 'ChangeListPath',
        'createTime'           => 'CreateTime',
        'crossAccountRoleName' => 'CrossAccountRoleName',
        'crossAccountType'     => 'CrossAccountType',
        'crossAccountUserId'   => 'CrossAccountUserId',
        'destDataSourceDetail' => 'DestDataSourceDetail',
        'destDataSourceId'     => 'DestDataSourceId',
        'destSourceType'       => 'DestSourceType',
        'detail'               => 'Detail',
        'disabled'             => 'Disabled',
        'exclude'              => 'Exclude',
        'fileSystemId'         => 'FileSystemId',
        'include'              => 'Include',
        'instanceId'           => 'InstanceId',
        'instanceName'         => 'InstanceName',
        'keepLatestSnapshots'  => 'KeepLatestSnapshots',
        'options'              => 'Options',
        'otsDetail'            => 'OtsDetail',
        'path'                 => 'Path',
        'planName'             => 'PlanName',
        'prefix'               => 'Prefix',
        'retention'            => 'Retention',
        'rule'                 => 'Rule',
        'schedule'             => 'Schedule',
        'sourceType'           => 'SourceType',
        'speedLimit'           => 'SpeedLimit',
        'udmRegionId'          => 'UdmRegionId',
        'vaultId'              => 'VaultId',
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
        if (null !== $this->bucket) {
            $res['Bucket'] = $this->bucket;
        }
        if (null !== $this->changeListPath) {
            $res['ChangeListPath'] = $this->changeListPath;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->crossAccountRoleName) {
            $res['CrossAccountRoleName'] = $this->crossAccountRoleName;
        }
        if (null !== $this->crossAccountType) {
            $res['CrossAccountType'] = $this->crossAccountType;
        }
        if (null !== $this->crossAccountUserId) {
            $res['CrossAccountUserId'] = $this->crossAccountUserId;
        }
        if (null !== $this->destDataSourceDetail) {
            $res['DestDataSourceDetail'] = $this->destDataSourceDetail;
        }
        if (null !== $this->destDataSourceId) {
            $res['DestDataSourceId'] = $this->destDataSourceId;
        }
        if (null !== $this->destSourceType) {
            $res['DestSourceType'] = $this->destSourceType;
        }
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }
        if (null !== $this->disabled) {
            $res['Disabled'] = $this->disabled;
        }
        if (null !== $this->exclude) {
            $res['Exclude'] = $this->exclude;
        }
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }
        if (null !== $this->include) {
            $res['Include'] = $this->include;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->keepLatestSnapshots) {
            $res['KeepLatestSnapshots'] = $this->keepLatestSnapshots;
        }
        if (null !== $this->options) {
            $res['Options'] = $this->options;
        }
        if (null !== $this->otsDetail) {
            $res['OtsDetail'] = null !== $this->otsDetail ? $this->otsDetail->toMap() : null;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
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
        if (null !== $this->udmRegionId) {
            $res['UdmRegionId'] = $this->udmRegionId;
        }
        if (null !== $this->vaultId) {
            $res['VaultId'] = $this->vaultId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateBackupPlanRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupType'])) {
            $model->backupType = $map['BackupType'];
        }
        if (isset($map['Bucket'])) {
            $model->bucket = $map['Bucket'];
        }
        if (isset($map['ChangeListPath'])) {
            $model->changeListPath = $map['ChangeListPath'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CrossAccountRoleName'])) {
            $model->crossAccountRoleName = $map['CrossAccountRoleName'];
        }
        if (isset($map['CrossAccountType'])) {
            $model->crossAccountType = $map['CrossAccountType'];
        }
        if (isset($map['CrossAccountUserId'])) {
            $model->crossAccountUserId = $map['CrossAccountUserId'];
        }
        if (isset($map['DestDataSourceDetail'])) {
            $model->destDataSourceDetail = $map['DestDataSourceDetail'];
        }
        if (isset($map['DestDataSourceId'])) {
            $model->destDataSourceId = $map['DestDataSourceId'];
        }
        if (isset($map['DestSourceType'])) {
            $model->destSourceType = $map['DestSourceType'];
        }
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }
        if (isset($map['Disabled'])) {
            $model->disabled = $map['Disabled'];
        }
        if (isset($map['Exclude'])) {
            $model->exclude = $map['Exclude'];
        }
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }
        if (isset($map['Include'])) {
            $model->include = $map['Include'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['KeepLatestSnapshots'])) {
            $model->keepLatestSnapshots = $map['KeepLatestSnapshots'];
        }
        if (isset($map['Options'])) {
            $model->options = $map['Options'];
        }
        if (isset($map['OtsDetail'])) {
            $model->otsDetail = OtsDetail::fromMap($map['OtsDetail']);
        }
        if (isset($map['Path'])) {
            if (!empty($map['Path'])) {
                $model->path = $map['Path'];
            }
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
        if (isset($map['UdmRegionId'])) {
            $model->udmRegionId = $map['UdmRegionId'];
        }
        if (isset($map['VaultId'])) {
            $model->vaultId = $map['VaultId'];
        }

        return $model;
    }
}
