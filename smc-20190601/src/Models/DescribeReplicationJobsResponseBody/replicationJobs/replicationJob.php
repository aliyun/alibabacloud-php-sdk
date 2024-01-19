<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smc\V20190601\Models\DescribeReplicationJobsResponseBody\replicationJobs;

use AlibabaCloud\SDK\Smc\V20190601\Models\DescribeReplicationJobsResponseBody\replicationJobs\replicationJob\dataDisks;
use AlibabaCloud\SDK\Smc\V20190601\Models\DescribeReplicationJobsResponseBody\replicationJobs\replicationJob\replicationJobRuns;
use AlibabaCloud\SDK\Smc\V20190601\Models\DescribeReplicationJobsResponseBody\replicationJobs\replicationJob\systemDiskParts;
use AlibabaCloud\SDK\Smc\V20190601\Models\DescribeReplicationJobsResponseBody\replicationJobs\replicationJob\tags;
use AlibabaCloud\Tea\Model;

class replicationJob extends Model
{
    /**
     * @description The business status of the migration job. Valid values:
     *
     *   Preparing: The migration is being prepared.
     *   Syncing: Data is being synchronized.
     *   Processing: The migration is in progress.
     *   Cleaning: Intermediate resources are being released.
     *
     * @example Preparing
     *
     * @var string
     */
    public $businessStatus;

    /**
     * @description The namespace of the destination Docker container image.
     *
     * @example testNamespace
     *
     * @var string
     */
    public $containerNamespace;

    /**
     * @description The repository that stores the destination Docker container image.
     *
     * @example testRepository
     *
     * @var string
     */
    public $containerRepository;

    /**
     * @description The tag of the destination Docker container image.
     *
     * @example CentOS:v1
     *
     * @var string
     */
    public $containerTag;

    /**
     * @description The time when the migration job was created.
     *
     * @example 2014-07-24T13:00:52Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The data disks on the destination ECS instance.
     *
     * @var dataDisks
     */
    public $dataDisks;

    /**
     * @description The description of the migration job.
     *
     * @example This is my migration task.
     *
     * @var string
     */
    public $description;

    /**
     * @description The time when the migration job was complete. The time follows the [ISO 8601](~~25696~~) standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * >  The time displayed in the SMC console is in the format of UTC+8.
     * @example 2019-06-04T16:00:52Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The error code returned if an error occurred in the migration job.
     *
     * @example InternalError
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The interval at which the incremental migration job runs. Unit: hour. Valid values: 1 to 168.
     *
     * @example 15
     *
     * @var int
     */
    public $frequency;

    /**
     * @description The ID of the destination image.
     *
     * @example m-o6w3gy99qf89rkga****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The name of the destination image.
     *
     * @example testAliCloudImageName
     *
     * @var string
     */
    public $imageName;

    /**
     * @description The ID of the destination ECS instance.
     *
     * @example i-bp1ff25rzvnul6kr****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the Resource Access Management (RAM) role that is assigned to the instance.
     *
     * @example SMCAdmin
     *
     * @var string
     */
    public $instanceRamRole;

    /**
     * @description The instance type of the intermediate instance.
     *
     * @example ecs.sn1ne.large
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The ID of the migration job.
     *
     * @example j-bp19vlwm0tyigbmj****
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The type of the migration job. Valid values:
     *
     *   0: server migration.
     *   1: operating system migration.
     *   2: cross-zone migration.
     *   3: agentless migration for a VMware VM.
     *
     * @example 0
     *
     * @var int
     */
    public $jobType;

    /**
     * @description The ID of the launch template.
     *
     * @example lt-launchtemplateid
     *
     * @var string
     */
    public $launchTemplateId;

    /**
     * @description The versions of the launch template.
     *
     * @example 1
     *
     * @var string
     */
    public $launchTemplateVersion;

    /**
     * @description The type of license for the migration job. Valid values:
     *
     *   An empty value indicates no license.
     *   A value of BYOL indicates Bring Your Own License (BYOL).
     *
     * @example BYOL
     *
     * @var string
     */
    public $licenseType;

    /**
     * @description The maximum number of images retained for the incremental migration job. Valid values: 1 to 10.
     *
     * @example 8
     *
     * @var int
     */
    public $maxNumberOfImageToKeep;

    /**
     * @description The name of the migration job.
     *
     * @example testMigrationTaskName
     *
     * @var string
     */
    public $name;

    /**
     * @description The type of network used for the migration.
     *
     * @example 0
     *
     * @var int
     */
    public $netMode;

    /**
     * @description The progress of the migration job.
     *
     * @example 100
     *
     * @var float
     */
    public $progress;

    /**
     * @description The ID of the Alibaba Cloud region to which the source server is migrated.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The execution records of the migration job.
     *
     * @var replicationJobRuns
     */
    public $replicationJobRuns;

    /**
     * @description The string of key-value pairs configured for the replication driver.
     *
     * @example BandWidthLimit:0
     *
     * @var string
     */
    public $replicationParameters;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfmw3ty5y7****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description Indicates whether incremental migration is disabled for the source server. Valid values:
     *
     *   true: Incremental migration is disabled. A migration job runs only once after the job is created.
     *   false: Incremental migration is enabled. For an incremental migration job, SMC synchronizes incremental data to Alibaba Cloud at the interval specified by the `Frequency` parameter.
     *
     * @example true
     *
     * @var bool
     */
    public $runOnce;

    /**
     * @description The time when the migration job is scheduled to run. The time follows the [ISO 8601](~~25696~~) standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC. The time must meet the following requirements:
     *
     *   The value must be within 30 days after the current time.
     *   If you do not specify this parameter, you must manually start the migration job after the migration job is created. You can call the [StartReplicationJob](~~121823~~) operation to start the migration job.
     *
     * @example 2019-06-04T13:35:00Z
     *
     * @var string
     */
    public $scheduledStartTime;

    /**
     * @description The ID of the source server.
     *
     * @example s-bp1e2fsl57knvuug****
     *
     * @var string
     */
    public $sourceId;

    /**
     * @description The time when the migration job was started. The time follows the [ISO 8601](~~25696~~) standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * >  The time displayed in the SMC console is in the format of UTC+8.
     * @example 2019-06-04T14:40:52Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The status of the migration job. Valid values:
     *
     *   Ready: The migration job is not started.
     *   Running: The migration job is running.
     *   Stopped: The migration job is paused.
     *   InError: An error occurs in the migration job.
     *   Finished: The migration job is complete.
     *   Waiting: The migration job is waiting to run.
     *   Expired: The migration job has expired.
     *   Deleting: The migration job is being deleted.
     *
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @description The status information about the migration job.
     *
     * @example statusinfo
     *
     * @var string
     */
    public $statusInfo;

    /**
     * @description The system disk partitions.
     *
     * @var systemDiskParts
     */
    public $systemDiskParts;

    /**
     * @description The size of the system disk of the destination ECS instance.
     *
     * @example 40
     *
     * @var int
     */
    public $systemDiskSize;

    /**
     * @description The information about tags that are attached to the SMC resource.
     *
     * @var tags
     */
    public $tags;

    /**
     * @description The type of destination to which the source server is migrated. Valid values:
     *
     *   Image: After the migration job is complete, SMC generates an ECS image for the source server.
     *   ContainerImage: After the migration job is complete, SMC generates a Docker container image for the source server.
     *   TargetInstance: After the migration job is complete, SMC migrates the source server to the destination instance. If you set this parameter to TargetInstance, you must set the InstanceId parameter.
     *
     * @example Image
     *
     * @var string
     */
    public $targetType;

    /**
     * @description The ID of the intermediate instance.
     *
     * @example i-bp1ff25rzvnul6kr****
     *
     * @var string
     */
    public $transitionInstanceId;

    /**
     * @description The ID of the vSwitch in the specified VPC.
     *
     * @example vsw-bp1ddbrxdlrcbim46****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The time when the migration job expired. The time follows the [ISO 8601](~~25696~~) standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * >  The time displayed in the SMC console is in the format of UTC+8.
     * @example 2019-06-08T14:40:52Z
     *
     * @var string
     */
    public $validTime;

    /**
     * @description The ID of a virtual private cloud (VPC) for which you have configured an Express Connect circuit or a VPN gateway.
     *
     * @example vpc-bp1vwnn14rqpyiczj****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'businessStatus'         => 'BusinessStatus',
        'containerNamespace'     => 'ContainerNamespace',
        'containerRepository'    => 'ContainerRepository',
        'containerTag'           => 'ContainerTag',
        'creationTime'           => 'CreationTime',
        'dataDisks'              => 'DataDisks',
        'description'            => 'Description',
        'endTime'                => 'EndTime',
        'errorCode'              => 'ErrorCode',
        'frequency'              => 'Frequency',
        'imageId'                => 'ImageId',
        'imageName'              => 'ImageName',
        'instanceId'             => 'InstanceId',
        'instanceRamRole'        => 'InstanceRamRole',
        'instanceType'           => 'InstanceType',
        'jobId'                  => 'JobId',
        'jobType'                => 'JobType',
        'launchTemplateId'       => 'LaunchTemplateId',
        'launchTemplateVersion'  => 'LaunchTemplateVersion',
        'licenseType'            => 'LicenseType',
        'maxNumberOfImageToKeep' => 'MaxNumberOfImageToKeep',
        'name'                   => 'Name',
        'netMode'                => 'NetMode',
        'progress'               => 'Progress',
        'regionId'               => 'RegionId',
        'replicationJobRuns'     => 'ReplicationJobRuns',
        'replicationParameters'  => 'ReplicationParameters',
        'resourceGroupId'        => 'ResourceGroupId',
        'runOnce'                => 'RunOnce',
        'scheduledStartTime'     => 'ScheduledStartTime',
        'sourceId'               => 'SourceId',
        'startTime'              => 'StartTime',
        'status'                 => 'Status',
        'statusInfo'             => 'StatusInfo',
        'systemDiskParts'        => 'SystemDiskParts',
        'systemDiskSize'         => 'SystemDiskSize',
        'tags'                   => 'Tags',
        'targetType'             => 'TargetType',
        'transitionInstanceId'   => 'TransitionInstanceId',
        'vSwitchId'              => 'VSwitchId',
        'validTime'              => 'ValidTime',
        'vpcId'                  => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['DataDisks'] = null !== $this->dataDisks ? $this->dataDisks->toMap() : null;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
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
            $res['ReplicationJobRuns'] = null !== $this->replicationJobRuns ? $this->replicationJobRuns->toMap() : null;
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
            $res['SystemDiskParts'] = null !== $this->systemDiskParts ? $this->systemDiskParts->toMap() : null;
        }
        if (null !== $this->systemDiskSize) {
            $res['SystemDiskSize'] = $this->systemDiskSize;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return replicationJob
     */
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

        return $model;
    }
}
