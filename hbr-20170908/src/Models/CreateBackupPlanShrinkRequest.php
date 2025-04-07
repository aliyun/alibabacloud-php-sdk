<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\SDK\Hbr\V20170908\Models\CreateBackupPlanShrinkRequest\rule;
use AlibabaCloud\Tea\Model;

class CreateBackupPlanShrinkRequest extends Model
{
    /**
     * @description Backup type. Value: **COMPLETE**, indicating a full backup.
     *
     * This parameter is required.
     *
     * @example COMPLETE
     *
     * @var string
     */
    public $backupType;

    /**
     * @description This parameter is required when **SourceType** is set to **OSS**. It represents the OSS bucket name.
     *
     * @example hbr-backup-oss
     *
     * @var string
     */
    public $bucket;

    /**
     * @description Configuration for the incremental file synchronization list. (Required only for synchronization)
     *
     * @example {"dataSourceId": "ds-123456789", "path": "/changelist"}
     *
     * @var string
     */
    public $changeListPath;

    /**
     * @description The ID of the client group that executes the data synchronization plan. This parameter is required only for data synchronization.
     *
     * @example cl-***************
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description This parameter is required when **SourceType** is set to **NAS**. It represents the creation time of the file system, in UNIX timestamp, in seconds.
     *
     * @example 1607436917
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The role name created in the RAM of the original account for cross-account backup.
     *
     * @example BackupRole
     *
     * @var string
     */
    public $crossAccountRoleName;

    /**
     * @description Cross-account backup type. Supported values:
     * - SELF_ACCOUNT: Backup within the same account
     * - CROSS_ACCOUNT: Cross-account backup
     *
     * @example CROSS_ACCOUNT
     *
     * @var string
     */
    public $crossAccountType;

    /**
     * @description The original account ID used for cross-account backup.
     *
     * @example 15897534xxxx4625
     *
     * @var int
     */
    public $crossAccountUserId;

    /**
     * @description The ID of the data source. This parameter is required only for data synchronization.
     *
     * @example ds-****************
     *
     * @var string
     */
    public $dataSourceId;

    /**
     * @description Destination data source details. (Required only for synchronization)
     *
     * @example {\\"prefix\\":\\"/\\"}
     *
     * @var string
     */
    public $destDataSourceDetailShrink;

    /**
     * @description Destination data source ID. (Required only for synchronization)
     *
     * @example ds-*********************
     *
     * @var string
     */
    public $destDataSourceId;

    /**
     * @description Destination data source type. (Required only for synchronization)
     *
     * @example OSS
     *
     * @var string
     */
    public $destSourceType;

    /**
     * @description Details of the whole machine backup, in JSON string format.
     *
     * snapshotGroup: Whether to use a consistent snapshot group (only valid if all instance disks are ESSD).
     * appConsistent: Whether to use application consistency (requires the use of preScriptPath and postScriptPath parameters).
     * preScriptPath: Path to the freeze script.
     * postScriptPath: Path to the thaw script.
     *
     * @example {\\"EnableFsFreeze\\":true,\\"appConsistent\\":false,\\"postScriptPath\\":\\"\\",\\"preScriptPath\\":\\"\\",\\"snapshotGroup\\":true,\\"timeoutInSeconds\\":60}
     *
     * @var string
     */
    public $detailShrink;

    /**
     * @description Is the plan disabled by default
     *
     * @example true
     *
     * @var bool
     */
    public $disabled;

    /**
     * @description This parameter is required only when **SourceType** is set to **ECS_FILE**. It specifies the path that should not be backed up, meaning all files under this path will not be included in the backup. The maximum length is 255 characters.
     *
     * @example ["/var", "/proc"]
     *
     * @var string
     */
    public $exclude;

    /**
     * @description This parameter is required when **SourceType** is set to **NAS**. It represents the file system ID.
     *
     * @example 005494
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @description This parameter is required when **SourceType** is set to **ECS_FILE**. It represents the path to be backed up, and all files under this path will be backed up. Supports up to 255 characters.
     *
     * @example ["/home/alice/*.pdf", "/home/bob/*.txt"]
     *
     * @var string
     */
    public $include;

    /**
     * @description This parameter is required when **SourceType** is set to **ECS_FILE**. It represents the ECS instance ID.
     *
     * @example i-m5e*****6q
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description Table store instance name.
     *
     * @example instancename
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description Whether to enable retaining at least one backup version.
     * - 0 - Do not retain
     * - 1 - Retain
     *
     * @example 1
     *
     * @var int
     */
    public $keepLatestSnapshots;

    /**
     * @description This parameter is required when **SourceType** is set to **ECS_FILE**. It indicates whether to use the Windows system VSS to define the backup path.
     *
     * - This feature only supports Windows type ECS instances.
     * - If there are data changes in the backup source and you need to ensure consistency between the backup data and the source data, you can configure it as `["UseVSS":true]`.
     * - After choosing to use VSS, multiple file directories cannot be backed up simultaneously.
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
     * @description Backup paths.
     *
     * @var string[]
     */
    public $path;

    /**
     * @description Name of the backup plan. 1 to 64 characters. The name must be unique for each data source type within a single backup vault.
     *
     * This parameter is required.
     *
     * @example planname
     *
     * @var string
     */
    public $planName;

    /**
     * @description This parameter is required when **SourceType** is set to **OSS**. It represents the backup prefix. When specified, only objects matching the prefix are backed up.
     *
     * @example oss-prefix
     *
     * @var string
     */
    public $prefix;

    /**
     * @description Number of days to retain the backup, with a minimum value of 1, in days.
     *
     * @example 7
     *
     * @var int
     */
    public $retention;

    /**
     * @description Backup plan rules.
     *
     * @var rule[]
     */
    public $rule;

    /**
     * @description Backup policy. Optional format: `I|{startTime}|{interval}`. This indicates that a backup task will be executed every `{interval}` starting from `{startTime}`. It does not compensate for missed backup tasks due to past time. If the previous backup task has not been completed, the next backup task will not be triggered. For example, `I|1631685600|P1D` means a backup is performed every day starting from 2021-09-15 14:00:00.
     *
     * - **startTime**: Start time of the backup, in UNIX timestamp, in seconds.
     * - **interval**: ISO8601 time interval. For example, PT1H indicates an interval of one hour, and P1D indicates an interval of one day.
     *
     * This parameter is required.
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
     *   **NAS**: File Storage NAS (NAS) file systems
     *   **OTS**: Tablestore instances
     *   **UDM_ECS**: ECS instances
     *   **SYNC**: data synchronization
     *
     * This parameter is required.
     *
     * @example ECS_FILE
     *
     * @var string
     */
    public $sourceType;

    /**
     * @description This parameter is required when **SourceType** is set to **ECS_FILE**. It represents the backup traffic control. Format: `{start}:{end}:{bandwidth}`. Multiple traffic control configurations are separated by |, and the configured times should not overlap.
     *
     * - **start**: Start hour.
     * - **end**: End hour.
     * - **bandwidth**: Limit rate, in KB/s.
     *
     * @example 0:24:5120
     *
     * @var string
     */
    public $speedLimit;

    /**
     * @description Region where the whole machine backup instance is located.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $udmRegionId;

    /**
     * @description Backup vault ID.
     *
     * @example v-0006******q
     *
     * @var string
     */
    public $vaultId;
    protected $_name = [
        'backupType' => 'BackupType',
        'bucket' => 'Bucket',
        'changeListPath' => 'ChangeListPath',
        'clusterId' => 'ClusterId',
        'createTime' => 'CreateTime',
        'crossAccountRoleName' => 'CrossAccountRoleName',
        'crossAccountType' => 'CrossAccountType',
        'crossAccountUserId' => 'CrossAccountUserId',
        'dataSourceId' => 'DataSourceId',
        'destDataSourceDetailShrink' => 'DestDataSourceDetail',
        'destDataSourceId' => 'DestDataSourceId',
        'destSourceType' => 'DestSourceType',
        'detailShrink' => 'Detail',
        'disabled' => 'Disabled',
        'exclude' => 'Exclude',
        'fileSystemId' => 'FileSystemId',
        'include' => 'Include',
        'instanceId' => 'InstanceId',
        'instanceName' => 'InstanceName',
        'keepLatestSnapshots' => 'KeepLatestSnapshots',
        'options' => 'Options',
        'otsDetailShrink' => 'OtsDetail',
        'path' => 'Path',
        'planName' => 'PlanName',
        'prefix' => 'Prefix',
        'retention' => 'Retention',
        'rule' => 'Rule',
        'schedule' => 'Schedule',
        'sourceType' => 'SourceType',
        'speedLimit' => 'SpeedLimit',
        'udmRegionId' => 'UdmRegionId',
        'vaultId' => 'VaultId',
    ];

    public function validate() {}

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
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
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
        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }
        if (null !== $this->destDataSourceDetailShrink) {
            $res['DestDataSourceDetail'] = $this->destDataSourceDetailShrink;
        }
        if (null !== $this->destDataSourceId) {
            $res['DestDataSourceId'] = $this->destDataSourceId;
        }
        if (null !== $this->destSourceType) {
            $res['DestSourceType'] = $this->destSourceType;
        }
        if (null !== $this->detailShrink) {
            $res['Detail'] = $this->detailShrink;
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
        if (null !== $this->otsDetailShrink) {
            $res['OtsDetail'] = $this->otsDetailShrink;
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
     * @return CreateBackupPlanShrinkRequest
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
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
        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }
        if (isset($map['DestDataSourceDetail'])) {
            $model->destDataSourceDetailShrink = $map['DestDataSourceDetail'];
        }
        if (isset($map['DestDataSourceId'])) {
            $model->destDataSourceId = $map['DestDataSourceId'];
        }
        if (isset($map['DestSourceType'])) {
            $model->destSourceType = $map['DestSourceType'];
        }
        if (isset($map['Detail'])) {
            $model->detailShrink = $map['Detail'];
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
            $model->otsDetailShrink = $map['OtsDetail'];
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
                $n = 0;
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
