<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smc\V20190601\Models\DescribeReplicationJobsResponseBody\replicationJobs;

use AlibabaCloud\SDK\Smc\V20190601\Models\DescribeReplicationJobsResponseBody\replicationJobs\replicationJob\dataDisks;
use AlibabaCloud\SDK\Smc\V20190601\Models\DescribeReplicationJobsResponseBody\replicationJobs\replicationJob\replicationJobRuns;
use AlibabaCloud\SDK\Smc\V20190601\Models\DescribeReplicationJobsResponseBody\replicationJobs\replicationJob\systemDiskParts;
use AlibabaCloud\Tea\Model;

class replicationJob extends Model
{
    /**
     * @var int
     */
    public $frequency;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $scheduledStartTime;

    /**
     * @var int
     */
    public $maxNumberOfImageToKeep;

    /**
     * @var string
     */
    public $containerNamespace;

    /**
     * @var dataDisks
     */
    public $dataDisks;

    /**
     * @var string
     */
    public $statusInfo;

    /**
     * @var string
     */
    public $instanceRamRole;

    /**
     * @var int
     */
    public $systemDiskSize;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $replicationParameters;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $validTime;

    /**
     * @var int
     */
    public $netMode;

    /**
     * @var string
     */
    public $containerTag;

    /**
     * @var string
     */
    public $licenseType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var float
     */
    public $progress;

    /**
     * @var bool
     */
    public $runOnce;

    /**
     * @var string
     */
    public $launchTemplateId;

    /**
     * @var string
     */
    public $containerRepository;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var systemDiskParts
     */
    public $systemDiskParts;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $sourceId;

    /**
     * @var string
     */
    public $launchTemplateVersion;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $transitionInstanceId;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $imageName;

    /**
     * @var string
     */
    public $businessStatus;

    /**
     * @var replicationJobRuns
     */
    public $replicationJobRuns;

    /**
     * @var string
     */
    public $targetType;
    protected $_name = [
        'frequency'              => 'Frequency',
        'vpcId'                  => 'VpcId',
        'creationTime'           => 'CreationTime',
        'status'                 => 'Status',
        'scheduledStartTime'     => 'ScheduledStartTime',
        'maxNumberOfImageToKeep' => 'MaxNumberOfImageToKeep',
        'containerNamespace'     => 'ContainerNamespace',
        'dataDisks'              => 'DataDisks',
        'statusInfo'             => 'StatusInfo',
        'instanceRamRole'        => 'InstanceRamRole',
        'systemDiskSize'         => 'SystemDiskSize',
        'description'            => 'Description',
        'replicationParameters'  => 'ReplicationParameters',
        'errorCode'              => 'ErrorCode',
        'validTime'              => 'ValidTime',
        'netMode'                => 'NetMode',
        'containerTag'           => 'ContainerTag',
        'licenseType'            => 'LicenseType',
        'name'                   => 'Name',
        'imageId'                => 'ImageId',
        'progress'               => 'Progress',
        'runOnce'                => 'RunOnce',
        'launchTemplateId'       => 'LaunchTemplateId',
        'containerRepository'    => 'ContainerRepository',
        'instanceId'             => 'InstanceId',
        'systemDiskParts'        => 'SystemDiskParts',
        'instanceType'           => 'InstanceType',
        'sourceId'               => 'SourceId',
        'launchTemplateVersion'  => 'LaunchTemplateVersion',
        'regionId'               => 'RegionId',
        'transitionInstanceId'   => 'TransitionInstanceId',
        'endTime'                => 'EndTime',
        'startTime'              => 'StartTime',
        'vSwitchId'              => 'VSwitchId',
        'jobId'                  => 'JobId',
        'imageName'              => 'ImageName',
        'businessStatus'         => 'BusinessStatus',
        'replicationJobRuns'     => 'ReplicationJobRuns',
        'targetType'             => 'TargetType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->frequency) {
            $res['Frequency'] = $this->frequency;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->scheduledStartTime) {
            $res['ScheduledStartTime'] = $this->scheduledStartTime;
        }
        if (null !== $this->maxNumberOfImageToKeep) {
            $res['MaxNumberOfImageToKeep'] = $this->maxNumberOfImageToKeep;
        }
        if (null !== $this->containerNamespace) {
            $res['ContainerNamespace'] = $this->containerNamespace;
        }
        if (null !== $this->dataDisks) {
            $res['DataDisks'] = null !== $this->dataDisks ? $this->dataDisks->toMap() : null;
        }
        if (null !== $this->statusInfo) {
            $res['StatusInfo'] = $this->statusInfo;
        }
        if (null !== $this->instanceRamRole) {
            $res['InstanceRamRole'] = $this->instanceRamRole;
        }
        if (null !== $this->systemDiskSize) {
            $res['SystemDiskSize'] = $this->systemDiskSize;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->replicationParameters) {
            $res['ReplicationParameters'] = $this->replicationParameters;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->validTime) {
            $res['ValidTime'] = $this->validTime;
        }
        if (null !== $this->netMode) {
            $res['NetMode'] = $this->netMode;
        }
        if (null !== $this->containerTag) {
            $res['ContainerTag'] = $this->containerTag;
        }
        if (null !== $this->licenseType) {
            $res['LicenseType'] = $this->licenseType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->runOnce) {
            $res['RunOnce'] = $this->runOnce;
        }
        if (null !== $this->launchTemplateId) {
            $res['LaunchTemplateId'] = $this->launchTemplateId;
        }
        if (null !== $this->containerRepository) {
            $res['ContainerRepository'] = $this->containerRepository;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->systemDiskParts) {
            $res['SystemDiskParts'] = null !== $this->systemDiskParts ? $this->systemDiskParts->toMap() : null;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->sourceId) {
            $res['SourceId'] = $this->sourceId;
        }
        if (null !== $this->launchTemplateVersion) {
            $res['LaunchTemplateVersion'] = $this->launchTemplateVersion;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->transitionInstanceId) {
            $res['TransitionInstanceId'] = $this->transitionInstanceId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }
        if (null !== $this->businessStatus) {
            $res['BusinessStatus'] = $this->businessStatus;
        }
        if (null !== $this->replicationJobRuns) {
            $res['ReplicationJobRuns'] = null !== $this->replicationJobRuns ? $this->replicationJobRuns->toMap() : null;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
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
        if (isset($map['Frequency'])) {
            $model->frequency = $map['Frequency'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ScheduledStartTime'])) {
            $model->scheduledStartTime = $map['ScheduledStartTime'];
        }
        if (isset($map['MaxNumberOfImageToKeep'])) {
            $model->maxNumberOfImageToKeep = $map['MaxNumberOfImageToKeep'];
        }
        if (isset($map['ContainerNamespace'])) {
            $model->containerNamespace = $map['ContainerNamespace'];
        }
        if (isset($map['DataDisks'])) {
            $model->dataDisks = dataDisks::fromMap($map['DataDisks']);
        }
        if (isset($map['StatusInfo'])) {
            $model->statusInfo = $map['StatusInfo'];
        }
        if (isset($map['InstanceRamRole'])) {
            $model->instanceRamRole = $map['InstanceRamRole'];
        }
        if (isset($map['SystemDiskSize'])) {
            $model->systemDiskSize = $map['SystemDiskSize'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ReplicationParameters'])) {
            $model->replicationParameters = $map['ReplicationParameters'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ValidTime'])) {
            $model->validTime = $map['ValidTime'];
        }
        if (isset($map['NetMode'])) {
            $model->netMode = $map['NetMode'];
        }
        if (isset($map['ContainerTag'])) {
            $model->containerTag = $map['ContainerTag'];
        }
        if (isset($map['LicenseType'])) {
            $model->licenseType = $map['LicenseType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['RunOnce'])) {
            $model->runOnce = $map['RunOnce'];
        }
        if (isset($map['LaunchTemplateId'])) {
            $model->launchTemplateId = $map['LaunchTemplateId'];
        }
        if (isset($map['ContainerRepository'])) {
            $model->containerRepository = $map['ContainerRepository'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['SystemDiskParts'])) {
            $model->systemDiskParts = systemDiskParts::fromMap($map['SystemDiskParts']);
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['SourceId'])) {
            $model->sourceId = $map['SourceId'];
        }
        if (isset($map['LaunchTemplateVersion'])) {
            $model->launchTemplateVersion = $map['LaunchTemplateVersion'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TransitionInstanceId'])) {
            $model->transitionInstanceId = $map['TransitionInstanceId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }
        if (isset($map['BusinessStatus'])) {
            $model->businessStatus = $map['BusinessStatus'];
        }
        if (isset($map['ReplicationJobRuns'])) {
            $model->replicationJobRuns = replicationJobRuns::fromMap($map['ReplicationJobRuns']);
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }

        return $model;
    }
}
