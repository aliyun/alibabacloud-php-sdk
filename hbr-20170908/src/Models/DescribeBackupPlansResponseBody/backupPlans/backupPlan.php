<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeBackupPlansResponseBody\backupPlans;

use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeBackupPlansResponseBody\backupPlans\backupPlan\otsDetail;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeBackupPlansResponseBody\backupPlans\backupPlan\paths;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeBackupPlansResponseBody\backupPlans\backupPlan\resources;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeBackupPlansResponseBody\backupPlans\backupPlan\rules;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeBackupPlansResponseBody\backupPlans\backupPlan\trialInfo;
use AlibabaCloud\Tea\Model;

class backupPlan extends Model
{
    /**
     * @description The ID of the data source group for backup.
     *
     * @example System-Database
     *
     * @var string
     */
    public $backupSourceGroupId;

    /**
     * @description The backup type. Only **COMPLETE** may be returned, which indicates full backup.
     *
     * @example COMPLETE
     *
     * @var string
     */
    public $backupType;

    /**
     * @description This parameter is valid only if **SourceType** is set to **OSS**. This parameter indicates the name of the OSS bucket.
     *
     * @example hbr-backup-oss
     *
     * @var string
     */
    public $bucket;

    /**
     * @example {"dataSourceId": "ds-123456789", "path": "/changelist"}
     *
     * @var string
     */
    public $changeListPath;

    /**
     * @description The ID of a backup client.
     *
     * @example c-000ge4w*****1qb
     *
     * @var string
     */
    public $clientId;

    /**
     * @description The ID of the client group.
     *
     * @example cl-000ht6o9******h
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description This parameter is valid only if **SourceType** is set to **NAS**. This parameter indicates the time when the file system was created. The value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1554347313
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The time when the backup plan was created. The value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1554347313
     *
     * @var int
     */
    public $createdTime;

    /**
     * @description The name of the Resource Access Management (RAM) role that is created within the source Alibaba Cloud account and assigned to the current Alibaba Cloud account to authorize the current Alibaba Cloud account to back up data across Alibaba Cloud accounts.
     *
     * @example BackupRole
     *
     * @var string
     */
    public $crossAccountRoleName;

    /**
     * @description Indicates whether data is backed up within the same Alibaba Cloud account or across Alibaba Cloud accounts. Valid values:
     *
     *   SELF_ACCOUNT
     *   CROSS_ACCOUNT
     *
     * @example CROSS_ACCOUNT
     *
     * @var string
     */
    public $crossAccountType;

    /**
     * @description The ID of the source Alibaba Cloud account that authorizes the current Alibaba Cloud account to back up data across Alibaba Cloud accounts.
     *
     * @example 1841642xxxxx9795
     *
     * @var int
     */
    public $crossAccountUserId;

    /**
     * @description The ID of the data source.
     *
     * @example ds-000ht6o9*****w61
     *
     * @var string
     */
    public $dataSourceId;

    /**
     * @description The data source details at the destination. This parameter is required only for data synchronization.
     *
     * @example {\"prefix\":\"/\"}
     *
     * @var string
     */
    public $destDataSourceDetail;

    /**
     * @description The data source ID at the destination. This parameter is required only for data synchronization.
     *
     * @example ds-*********************
     *
     * @var string
     */
    public $destDataSourceId;

    /**
     * @description The data source type at the destination. This parameter is required only for data synchronization.
     *
     * @example OSS
     *
     * @var string
     */
    public $destSourceType;

    /**
     * @description The details about ECS instance backup.
     *
     * @example {\"doCopy\":true,\"doBackup\":false,\"instanceName\":\"instance example\",\"appConsistent\":false,\"destinationRegionId\":\"cn-shanghai\",\"enableFsFreeze\":true,\"osNameEn\":\"Windows Server  2019 Data Center Edition 64bit Chinese Edition\",\"osName\":\"Windows Server  2019 Data Center Edition 64bit Chinese Edition\",\"diskIdList\":[],\"backupVaultId\":\"\",\"snapshotGroup\":true,\"destinationRetention\":35,\"platform\":\"Windows Server 2012\",\"timeoutInSeconds\":60,\"backupRetention\":1,\"osType\":\"windows\",\"preScriptPath\":\"\",\"postScriptPath\":\"\",\"enableWriters\":true,\"ecsDeleted\":false}
     *
     * @var string
     */
    public $detail;

    /**
     * @description Indicates whether the backup plan is disabled. Valid values:
     *
     *   true: The backup plan is disabled.
     *   false: The backup plan is enabled.
     *
     * @example false
     *
     * @var bool
     */
    public $disabled;

    /**
     * @description This parameter is valid only if **SourceType** is set to **ECS_FILE**. This parameter indicates the paths to the files that are excluded from the backup job.
     *
     * @example ["/var", "/proc"]
     *
     * @var string
     */
    public $exclude;

    /**
     * @description This parameter is valid only if **SourceType** is set to **NAS**. This parameter indicates the ID of the NAS file system.
     *
     * @example 00594
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @description This parameter is valid only if **SourceType** is set to **ECS_FILE**. This parameter indicates the paths to the files that are backed up.
     *
     * @example ["/home/alice/*.pdf", "/home/bob/*.txt"]
     *
     * @var string
     */
    public $include;

    /**
     * @description The ID of the group to which the instance belongs.
     *
     * @example i-**
     *
     * @var string
     */
    public $instanceGroupId;

    /**
     * @description This parameter is valid only if **SourceType** is set to **ECS_FILE**. This parameter indicates the ID of the ECS instance.
     *
     * @example i-*********************
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
     * @description Indicates whether the feature of keeping at least one backup version is enabled. Valid values:
     *
     *   0: The feature is disabled.
     *   1: The feature is enabled.
     *
     * @example 0
     *
     * @var int
     */
    public $keepLatestSnapshots;

    /**
     * @var string
     */
    public $latestExecuteJobId;

    /**
     * @description This parameter is valid only if **SourceType** is set to **ECS_FILE**. This parameter indicates whether Windows Volume Shadow Copy Service (VSS) is used to define a source path.
     *
     * @example {"UseVSS":false}
     *
     * @var string
     */
    public $options;

    /**
     * @description The details about the Tablestore instance.
     *
     * @var otsDetail
     */
    public $otsDetail;

    /**
     * @description The source paths. This parameter is valid only if **SourceType** is set to **ECS_FILE**.
     *
     * @var paths
     */
    public $paths;

    /**
     * @description The ID of the backup plan.
     *
     * @example plan-*********************
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
     * @description This parameter is valid only if **SourceType** is set to **OSS**. This parameter indicates the prefix of objects that are backed up.
     *
     * @example oss-prefix
     *
     * @var string
     */
    public $prefix;

    /**
     * @description The backup resources. This parameter is valid only for disk backup.
     *
     * @var resources
     */
    public $resources;

    /**
     * @description The retention period of the backup data. Unit: day.
     *
     * @example 7
     *
     * @var int
     */
    public $retention;

    /**
     * @description The backup policies. This parameter is valid only for disk backup.
     *
     * @var rules
     */
    public $rules;

    /**
     * @description The backup policy. Format: `I|{startTime}|{interval}`. The system runs the first backup job at a point in time that is specified by `{startTime}` and the subsequent backup jobs at an interval that is specified by `{interval}`. The system does not run a backup job before the specified point in time. Each backup job, except the first one, starts only after the previous backup job is complete. For example, `I|1631685600|P1D` indicates that the system runs the first backup job at 14:00:00 on September 15, 2021 and the subsequent backup jobs once a day.
     *
     *   **startTime**: the time at which the system starts to run a backup job. The value is a UNIX timestamp. Unit: seconds.
     *   **interval**: the interval at which the system runs a backup job. The interval follows the ISO 8601 standard. For example, PT1H indicates an interval of 1 hour. P1D indicates an interval of one day.
     *
     * @example I|1602673264|P1D
     *
     * @var string
     */
    public $schedule;

    /**
     * @description The type of the data source. Valid values:
     *
     *   **ECS_FILE**: ECS files
     *   **OSS**: OSS buckets
     *   **NAS**: NAS file systems
     *   **OTS**: Tablestore instances
     *   **UDM_ECS**: ECS instances
     *
     * @example ECS_FILE
     *
     * @var string
     */
    public $sourceType;

    /**
     * @description This parameter is valid only if **SourceType** is set to **ECS_FILE**. This parameter indicates the throttling rules. Format: `{start}|{end}|{bandwidth}`. Multiple throttling rules are separated with vertical bars (`|`). A time range cannot overlap with another one.
     *
     *   start: the start hour.
     *   end: the end hour.
     *   bandwidth: the bandwidth. Unit: KB/s.
     *
     * @example 0:24:5120
     *
     * @var string
     */
    public $speedLimit;

    /**
     * @description The free trial information.
     *
     * @var trialInfo
     */
    public $trialInfo;

    /**
     * @description The time when the backup plan was updated. The value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1554347313
     *
     * @var int
     */
    public $updatedTime;

    /**
     * @description The ID of the backup vault.
     *
     * @example v-*********************
     *
     * @var string
     */
    public $vaultId;
    protected $_name = [
        'backupSourceGroupId'  => 'BackupSourceGroupId',
        'backupType'           => 'BackupType',
        'bucket'               => 'Bucket',
        'changeListPath'       => 'ChangeListPath',
        'clientId'             => 'ClientId',
        'clusterId'            => 'ClusterId',
        'createTime'           => 'CreateTime',
        'createdTime'          => 'CreatedTime',
        'crossAccountRoleName' => 'CrossAccountRoleName',
        'crossAccountType'     => 'CrossAccountType',
        'crossAccountUserId'   => 'CrossAccountUserId',
        'dataSourceId'         => 'DataSourceId',
        'destDataSourceDetail' => 'DestDataSourceDetail',
        'destDataSourceId'     => 'DestDataSourceId',
        'destSourceType'       => 'DestSourceType',
        'detail'               => 'Detail',
        'disabled'             => 'Disabled',
        'exclude'              => 'Exclude',
        'fileSystemId'         => 'FileSystemId',
        'include'              => 'Include',
        'instanceGroupId'      => 'InstanceGroupId',
        'instanceId'           => 'InstanceId',
        'instanceName'         => 'InstanceName',
        'keepLatestSnapshots'  => 'KeepLatestSnapshots',
        'latestExecuteJobId'   => 'LatestExecuteJobId',
        'options'              => 'Options',
        'otsDetail'            => 'OtsDetail',
        'paths'                => 'Paths',
        'planId'               => 'PlanId',
        'planName'             => 'PlanName',
        'prefix'               => 'Prefix',
        'resources'            => 'Resources',
        'retention'            => 'Retention',
        'rules'                => 'Rules',
        'schedule'             => 'Schedule',
        'sourceType'           => 'SourceType',
        'speedLimit'           => 'SpeedLimit',
        'trialInfo'            => 'TrialInfo',
        'updatedTime'          => 'UpdatedTime',
        'vaultId'              => 'VaultId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupSourceGroupId) {
            $res['BackupSourceGroupId'] = $this->backupSourceGroupId;
        }
        if (null !== $this->backupType) {
            $res['BackupType'] = $this->backupType;
        }
        if (null !== $this->bucket) {
            $res['Bucket'] = $this->bucket;
        }
        if (null !== $this->changeListPath) {
            $res['ChangeListPath'] = $this->changeListPath;
        }
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
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
        if (null !== $this->instanceGroupId) {
            $res['InstanceGroupId'] = $this->instanceGroupId;
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
        if (null !== $this->latestExecuteJobId) {
            $res['LatestExecuteJobId'] = $this->latestExecuteJobId;
        }
        if (null !== $this->options) {
            $res['Options'] = $this->options;
        }
        if (null !== $this->otsDetail) {
            $res['OtsDetail'] = null !== $this->otsDetail ? $this->otsDetail->toMap() : null;
        }
        if (null !== $this->paths) {
            $res['Paths'] = null !== $this->paths ? $this->paths->toMap() : null;
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
        if (null !== $this->resources) {
            $res['Resources'] = null !== $this->resources ? $this->resources->toMap() : null;
        }
        if (null !== $this->retention) {
            $res['Retention'] = $this->retention;
        }
        if (null !== $this->rules) {
            $res['Rules'] = null !== $this->rules ? $this->rules->toMap() : null;
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
        if (null !== $this->trialInfo) {
            $res['TrialInfo'] = null !== $this->trialInfo ? $this->trialInfo->toMap() : null;
        }
        if (null !== $this->updatedTime) {
            $res['UpdatedTime'] = $this->updatedTime;
        }
        if (null !== $this->vaultId) {
            $res['VaultId'] = $this->vaultId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return backupPlan
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupSourceGroupId'])) {
            $model->backupSourceGroupId = $map['BackupSourceGroupId'];
        }
        if (isset($map['BackupType'])) {
            $model->backupType = $map['BackupType'];
        }
        if (isset($map['Bucket'])) {
            $model->bucket = $map['Bucket'];
        }
        if (isset($map['ChangeListPath'])) {
            $model->changeListPath = $map['ChangeListPath'];
        }
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
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
        if (isset($map['InstanceGroupId'])) {
            $model->instanceGroupId = $map['InstanceGroupId'];
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
        if (isset($map['LatestExecuteJobId'])) {
            $model->latestExecuteJobId = $map['LatestExecuteJobId'];
        }
        if (isset($map['Options'])) {
            $model->options = $map['Options'];
        }
        if (isset($map['OtsDetail'])) {
            $model->otsDetail = otsDetail::fromMap($map['OtsDetail']);
        }
        if (isset($map['Paths'])) {
            $model->paths = paths::fromMap($map['Paths']);
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
        if (isset($map['Resources'])) {
            $model->resources = resources::fromMap($map['Resources']);
        }
        if (isset($map['Retention'])) {
            $model->retention = $map['Retention'];
        }
        if (isset($map['Rules'])) {
            $model->rules = rules::fromMap($map['Rules']);
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
        if (isset($map['TrialInfo'])) {
            $model->trialInfo = trialInfo::fromMap($map['TrialInfo']);
        }
        if (isset($map['UpdatedTime'])) {
            $model->updatedTime = $map['UpdatedTime'];
        }
        if (isset($map['VaultId'])) {
            $model->vaultId = $map['VaultId'];
        }

        return $model;
    }
}
