<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smc\V20190601\Models\DescribeReplicationJobsResponseBody\replicationJobs;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Smc\V20190601\Models\DescribeReplicationJobsResponseBody\replicationJobs\replicationJob\dataDisks;
use AlibabaCloud\SDK\Smc\V20190601\Models\DescribeReplicationJobsResponseBody\replicationJobs\replicationJob\disks;
use AlibabaCloud\SDK\Smc\V20190601\Models\DescribeReplicationJobsResponseBody\replicationJobs\replicationJob\replicationJobRuns;
use AlibabaCloud\SDK\Smc\V20190601\Models\DescribeReplicationJobsResponseBody\replicationJobs\replicationJob\systemDiskParts;
use AlibabaCloud\SDK\Smc\V20190601\Models\DescribeReplicationJobsResponseBody\replicationJobs\replicationJob\tags;

class replicationJob extends Model
{
    /**
     * @var string
     */
    public $businessStatus;

    /**
     * @var string
     */
    public $containerNamespace;

    /**
     * @var string
     */
    public $containerRepository;

    /**
     * @var string
     */
    public $containerTag;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var dataDisks
     */
    public $dataDisks;

    /**
     * @var string
     */
    public $description;

    /**
     * @var disks
     */
    public $disks;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var int
     */
    public $frequency;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $imageName;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceRamRole;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var int
     */
    public $jobType;

    /**
     * @var string
     */
    public $launchTemplateId;

    /**
     * @var string
     */
    public $launchTemplateVersion;

    /**
     * @var string
     */
    public $licenseType;

    /**
     * @var int
     */
    public $maxNumberOfImageToKeep;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $netMode;

    /**
     * @var float
     */
    public $progress;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var replicationJobRuns
     */
    public $replicationJobRuns;

    /**
     * @var string
     */
    public $replicationParameters;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var bool
     */
    public $runOnce;

    /**
     * @var string
     */
    public $scheduledStartTime;

    /**
     * @var string
     */
    public $sourceId;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $statusInfo;

    /**
     * @var systemDiskParts
     */
    public $systemDiskParts;

    /**
     * @var int
     */
    public $systemDiskSize;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @var string
     */
    public $targetType;

    /**
     * @var string
     */
    public $transitionInstanceId;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $validTime;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $workgroupId;
    protected $_name = [
        'businessStatus' => 'BusinessStatus',
        'containerNamespace' => 'ContainerNamespace',
        'containerRepository' => 'ContainerRepository',
        'containerTag' => 'ContainerTag',
        'creationTime' => 'CreationTime',
        'dataDisks' => 'DataDisks',
        'description' => 'Description',
        'disks' => 'Disks',
        'endTime' => 'EndTime',
        'errorCode' => 'ErrorCode',
        'frequency' => 'Frequency',
        'imageId' => 'ImageId',
        'imageName' => 'ImageName',
        'instanceId' => 'InstanceId',
        'instanceRamRole' => 'InstanceRamRole',
        'instanceType' => 'InstanceType',
        'jobId' => 'JobId',
        'jobType' => 'JobType',
        'launchTemplateId' => 'LaunchTemplateId',
        'launchTemplateVersion' => 'LaunchTemplateVersion',
        'licenseType' => 'LicenseType',
        'maxNumberOfImageToKeep' => 'MaxNumberOfImageToKeep',
        'name' => 'Name',
        'netMode' => 'NetMode',
        'progress' => 'Progress',
        'regionId' => 'RegionId',
        'replicationJobRuns' => 'ReplicationJobRuns',
        'replicationParameters' => 'ReplicationParameters',
        'resourceGroupId' => 'ResourceGroupId',
        'runOnce' => 'RunOnce',
        'scheduledStartTime' => 'ScheduledStartTime',
        'sourceId' => 'SourceId',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'statusInfo' => 'StatusInfo',
        'systemDiskParts' => 'SystemDiskParts',
        'systemDiskSize' => 'SystemDiskSize',
        'tags' => 'Tags',
        'targetType' => 'TargetType',
        'transitionInstanceId' => 'TransitionInstanceId',
        'vSwitchId' => 'VSwitchId',
        'validTime' => 'ValidTime',
        'vpcId' => 'VpcId',
        'workgroupId' => 'WorkgroupId',
    ];

    public function validate()
    {
        if (null !== $this->dataDisks) {
            $this->dataDisks->validate();
        }
        if (null !== $this->disks) {
            $this->disks->validate();
        }
        if (null !== $this->replicationJobRuns) {
            $this->replicationJobRuns->validate();
        }
        if (null !== $this->systemDiskParts) {
            $this->systemDiskParts->validate();
        }
        if (null !== $this->tags) {
            $this->tags->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->businessStatus) {
            $res['BusinessStatus'] = $this->businessStatus;
        }

        if (null !== $this->containerNamespace) {
            $res['ContainerNamespace'] = $this->containerNamespace;
        }

        if (null !== $this->containerRepository) {
            $res['ContainerRepository'] = $this->containerRepository;
        }

        if (null !== $this->containerTag) {
            $res['ContainerTag'] = $this->containerTag;
        }

        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->dataDisks) {
            $res['DataDisks'] = null !== $this->dataDisks ? $this->dataDisks->toArray($noStream) : $this->dataDisks;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->disks) {
            $res['Disks'] = null !== $this->disks ? $this->disks->toArray($noStream) : $this->disks;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }

        if (null !== $this->frequency) {
            $res['Frequency'] = $this->frequency;
        }

        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceRamRole) {
            $res['InstanceRamRole'] = $this->instanceRamRole;
        }

        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
        }

        if (null !== $this->launchTemplateId) {
            $res['LaunchTemplateId'] = $this->launchTemplateId;
        }

        if (null !== $this->launchTemplateVersion) {
            $res['LaunchTemplateVersion'] = $this->launchTemplateVersion;
        }

        if (null !== $this->licenseType) {
            $res['LicenseType'] = $this->licenseType;
        }

        if (null !== $this->maxNumberOfImageToKeep) {
            $res['MaxNumberOfImageToKeep'] = $this->maxNumberOfImageToKeep;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->netMode) {
            $res['NetMode'] = $this->netMode;
        }

        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->replicationJobRuns) {
            $res['ReplicationJobRuns'] = null !== $this->replicationJobRuns ? $this->replicationJobRuns->toArray($noStream) : $this->replicationJobRuns;
        }

        if (null !== $this->replicationParameters) {
            $res['ReplicationParameters'] = $this->replicationParameters;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->runOnce) {
            $res['RunOnce'] = $this->runOnce;
        }

        if (null !== $this->scheduledStartTime) {
            $res['ScheduledStartTime'] = $this->scheduledStartTime;
        }

        if (null !== $this->sourceId) {
            $res['SourceId'] = $this->sourceId;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->statusInfo) {
            $res['StatusInfo'] = $this->statusInfo;
        }

        if (null !== $this->systemDiskParts) {
            $res['SystemDiskParts'] = null !== $this->systemDiskParts ? $this->systemDiskParts->toArray($noStream) : $this->systemDiskParts;
        }

        if (null !== $this->systemDiskSize) {
            $res['SystemDiskSize'] = $this->systemDiskSize;
        }

        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toArray($noStream) : $this->tags;
        }

        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }

        if (null !== $this->transitionInstanceId) {
            $res['TransitionInstanceId'] = $this->transitionInstanceId;
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        if (null !== $this->validTime) {
            $res['ValidTime'] = $this->validTime;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        if (null !== $this->workgroupId) {
            $res['WorkgroupId'] = $this->workgroupId;
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
        if (isset($map['BusinessStatus'])) {
            $model->businessStatus = $map['BusinessStatus'];
        }

        if (isset($map['ContainerNamespace'])) {
            $model->containerNamespace = $map['ContainerNamespace'];
        }

        if (isset($map['ContainerRepository'])) {
            $model->containerRepository = $map['ContainerRepository'];
        }

        if (isset($map['ContainerTag'])) {
            $model->containerTag = $map['ContainerTag'];
        }

        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['DataDisks'])) {
            $model->dataDisks = dataDisks::fromMap($map['DataDisks']);
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Disks'])) {
            $model->disks = disks::fromMap($map['Disks']);
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }

        if (isset($map['Frequency'])) {
            $model->frequency = $map['Frequency'];
        }

        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceRamRole'])) {
            $model->instanceRamRole = $map['InstanceRamRole'];
        }

        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
        }

        if (isset($map['LaunchTemplateId'])) {
            $model->launchTemplateId = $map['LaunchTemplateId'];
        }

        if (isset($map['LaunchTemplateVersion'])) {
            $model->launchTemplateVersion = $map['LaunchTemplateVersion'];
        }

        if (isset($map['LicenseType'])) {
            $model->licenseType = $map['LicenseType'];
        }

        if (isset($map['MaxNumberOfImageToKeep'])) {
            $model->maxNumberOfImageToKeep = $map['MaxNumberOfImageToKeep'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NetMode'])) {
            $model->netMode = $map['NetMode'];
        }

        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ReplicationJobRuns'])) {
            $model->replicationJobRuns = replicationJobRuns::fromMap($map['ReplicationJobRuns']);
        }

        if (isset($map['ReplicationParameters'])) {
            $model->replicationParameters = $map['ReplicationParameters'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['RunOnce'])) {
            $model->runOnce = $map['RunOnce'];
        }

        if (isset($map['ScheduledStartTime'])) {
            $model->scheduledStartTime = $map['ScheduledStartTime'];
        }

        if (isset($map['SourceId'])) {
            $model->sourceId = $map['SourceId'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StatusInfo'])) {
            $model->statusInfo = $map['StatusInfo'];
        }

        if (isset($map['SystemDiskParts'])) {
            $model->systemDiskParts = systemDiskParts::fromMap($map['SystemDiskParts']);
        }

        if (isset($map['SystemDiskSize'])) {
            $model->systemDiskSize = $map['SystemDiskSize'];
        }

        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }

        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }

        if (isset($map['TransitionInstanceId'])) {
            $model->transitionInstanceId = $map['TransitionInstanceId'];
        }

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        if (isset($map['ValidTime'])) {
            $model->validTime = $map['ValidTime'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        if (isset($map['WorkgroupId'])) {
            $model->workgroupId = $map['WorkgroupId'];
        }

        return $model;
    }
}
