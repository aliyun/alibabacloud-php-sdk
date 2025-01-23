<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeBackupPlansResponseBody\backupPlans;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeBackupPlansResponseBody\backupPlans\backupPlan\hitTags;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeBackupPlansResponseBody\backupPlans\backupPlan\otsDetail;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeBackupPlansResponseBody\backupPlans\backupPlan\paths;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeBackupPlansResponseBody\backupPlans\backupPlan\resources;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeBackupPlansResponseBody\backupPlans\backupPlan\rules;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeBackupPlansResponseBody\backupPlans\backupPlan\trialInfo;

class backupPlan extends Model
{
    /**
     * @var string
     */
    public $backupSourceGroupId;
    /**
     * @var string
     */
    public $backupType;
    /**
     * @var string
     */
    public $bucket;
    /**
     * @var string
     */
    public $changeListPath;
    /**
     * @var string
     */
    public $clientId;
    /**
     * @var string
     */
    public $clusterId;
    /**
     * @var int
     */
    public $createTime;
    /**
     * @var bool
     */
    public $createdByTag;
    /**
     * @var int
     */
    public $createdTime;
    /**
     * @var string
     */
    public $crossAccountRoleName;
    /**
     * @var string
     */
    public $crossAccountType;
    /**
     * @var int
     */
    public $crossAccountUserId;
    /**
     * @var string
     */
    public $dataSourceId;
    /**
     * @var string
     */
    public $destDataSourceDetail;
    /**
     * @var string
     */
    public $destDataSourceId;
    /**
     * @var string
     */
    public $destSourceType;
    /**
     * @var string
     */
    public $detail;
    /**
     * @var bool
     */
    public $disabled;
    /**
     * @var string
     */
    public $exclude;
    /**
     * @var string
     */
    public $fileSystemId;
    /**
     * @var hitTags
     */
    public $hitTags;
    /**
     * @var string
     */
    public $include;
    /**
     * @var string
     */
    public $instanceGroupId;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $instanceName;
    /**
     * @var int
     */
    public $keepLatestSnapshots;
    /**
     * @var string
     */
    public $latestExecuteJobId;
    /**
     * @var string
     */
    public $options;
    /**
     * @var otsDetail
     */
    public $otsDetail;
    /**
     * @var paths
     */
    public $paths;
    /**
     * @var string
     */
    public $planId;
    /**
     * @var string
     */
    public $planName;
    /**
     * @var string
     */
    public $prefix;
    /**
     * @var resources
     */
    public $resources;
    /**
     * @var int
     */
    public $retention;
    /**
     * @var rules
     */
    public $rules;
    /**
     * @var string
     */
    public $schedule;
    /**
     * @var string
     */
    public $sourceType;
    /**
     * @var string
     */
    public $speedLimit;
    /**
     * @var trialInfo
     */
    public $trialInfo;
    /**
     * @var int
     */
    public $updatedTime;
    /**
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
        'createdByTag'         => 'CreatedByTag',
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
        'hitTags'              => 'HitTags',
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
        if (null !== $this->hitTags) {
            $this->hitTags->validate();
        }
        if (null !== $this->otsDetail) {
            $this->otsDetail->validate();
        }
        if (null !== $this->paths) {
            $this->paths->validate();
        }
        if (null !== $this->resources) {
            $this->resources->validate();
        }
        if (null !== $this->rules) {
            $this->rules->validate();
        }
        if (null !== $this->trialInfo) {
            $this->trialInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->createdByTag) {
            $res['CreatedByTag'] = $this->createdByTag;
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

        if (null !== $this->hitTags) {
            $res['HitTags'] = null !== $this->hitTags ? $this->hitTags->toArray($noStream) : $this->hitTags;
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
            $res['OtsDetail'] = null !== $this->otsDetail ? $this->otsDetail->toArray($noStream) : $this->otsDetail;
        }

        if (null !== $this->paths) {
            $res['Paths'] = null !== $this->paths ? $this->paths->toArray($noStream) : $this->paths;
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
            $res['Resources'] = null !== $this->resources ? $this->resources->toArray($noStream) : $this->resources;
        }

        if (null !== $this->retention) {
            $res['Retention'] = $this->retention;
        }

        if (null !== $this->rules) {
            $res['Rules'] = null !== $this->rules ? $this->rules->toArray($noStream) : $this->rules;
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
            $res['TrialInfo'] = null !== $this->trialInfo ? $this->trialInfo->toArray($noStream) : $this->trialInfo;
        }

        if (null !== $this->updatedTime) {
            $res['UpdatedTime'] = $this->updatedTime;
        }

        if (null !== $this->vaultId) {
            $res['VaultId'] = $this->vaultId;
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

        if (isset($map['CreatedByTag'])) {
            $model->createdByTag = $map['CreatedByTag'];
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

        if (isset($map['HitTags'])) {
            $model->hitTags = hitTags::fromMap($map['HitTags']);
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
