<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smc\V20190601\Models;

use AlibabaCloud\SDK\Smc\V20190601\Models\ModifyReplicationJobAttributeRequest\dataDisk;
use AlibabaCloud\SDK\Smc\V20190601\Models\ModifyReplicationJobAttributeRequest\systemDiskPart;
use AlibabaCloud\Tea\Model;

class ModifyReplicationJobAttributeRequest extends Model
{
    /**
     * @description The namespace of the destination Docker container image. For more information about Docker container images, see [Terms](~~60744~~).
     *
     * @example testNamespace
     *
     * @var string
     */
    public $containerNamespace;

    /**
     * @description The repository that stores the destination Docker container image. For more information about Docker container images, see [Terms](~~60744~~).
     *
     * @example testRepository
     *
     * @var string
     */
    public $containerRepository;

    /**
     * @description The tag of the destination Docker container image. For more information about Docker container images, see [Terms](~~60744~~).
     *
     * @example CentOS:v1
     *
     * @var string
     */
    public $containerTag;

    /**
     * @description The information about the data disk.
     *
     * @var dataDisk[]
     */
    public $dataDisk;

    /**
     * @description The description of the migration job.
     *
     * The description must be 2 to 128 characters in length and can contain letters, digits, colons (:), underscores (\_), and hyphens (-). It must start with a letter and cannot start with `http://` or `https://`.
     * @example This_is_my_migration_task
     *
     * @var string
     */
    public $description;

    /**
     * @description The interval at which an incremental migration job runs. Unit: hour. Valid values: 1 to 168.
     *
     * This parameter is required if you set the `RunOnce` parameter to false.
     * @example 10
     *
     * @var int
     */
    public $frequency;

    /**
     * @description The name of the destination image. The name must meet the following requirements:
     *
     *   The name must be unique within an Alibaba Cloud region.
     *   The name must be 2 to 128 characters in length and can contain letters, digits, colons (:), underscores (\_), and hyphens (-). It must start with a letter and cannot start with `http://` or `https://`.
     *
     * >  If an image whose name is the same as that of the destination image already exists in the current region when the migration job is in progress, the system adds the migration job ID to the end of the image name by default. Example: ImageName-JobId.
     * @example testAliCloudImageName
     *
     * @var string
     */
    public $imageName;

    /**
     * @description The destination instance ID.
     *
     * @example i-bp1f1dvfto1sigz5****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the Resource Access Management (RAM) role that is attached to the intermediate instance.
     *
     * @example SMCAdmin
     *
     * @var string
     */
    public $instanceRamRole;

    /**
     * @description The type of the intermediate instance.
     *
     * You can call the [DescribeInstanceTypes](~~25620~~) operation to query the ECS instance types.
     *
     *   If you specify this parameter, SMC creates an intermediate instance of the specified instance type. If the specified instance type is unavailable, you cannot create the migration job.
     *   If you do not specify this parameter, SMC selects an available instance type in a specific order to create an intermediate instance. For more information,
     *
     * see the "How does SMC create an intermediate instance?" section of the "FAQ" topic.
     * @example ecs.c5.large
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The migration job ID.
     *
     * @example j-bp19vlwm0tyigbmj****
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The launch template ID.
     *
     * @example lt-bp16jovvln1cgaaq****
     *
     * @var string
     */
    public $launchTemplateId;

    /**
     * @description The version number of the launch template.
     *
     * @example Latest
     *
     * @var string
     */
    public $launchTemplateVersion;

    /**
     * @var string
     */
    public $licenseType;

    /**
     * @description The maximum number of images that are retained for an incremental migration job. Valid values: 1 to 10.
     *
     * This parameter is required if you set the `RunOnce` parameter to false.
     * @example 5
     *
     * @var int
     */
    public $maxNumberOfImageToKeep;

    /**
     * @description The name of the migration job. The name must meet the following requirements:
     *
     *   The name must be unique.
     *   The name must be 2 to 128 characters in length and can contain letters, digits, colons (:), underscores (\_), and hyphens (-). It must start with a letter and cannot start with `http://` or `https://`.
     *
     * @example testMigrationTaskName
     *
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $netMode;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $replicationParameters;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @description The time when the migration job is executed. SMC starts the migration job at the specified time.
     *
     * >  If ScheduledStartTime is left empty, SMC does not automatically start the migration job. In this case, you must call the [StartReplicationJob](~~121823~~) operation to start the migration job.
     * @example 2019-06-04T13:35:00Z
     *
     * @var string
     */
    public $scheduledStartTime;

    /**
     * @description The partition information of the system disk.
     *
     * @var systemDiskPart[]
     */
    public $systemDiskPart;

    /**
     * @description The system disk size of the destination ECS instance. Unit: GiB. Valid values: 20 to 500.
     *
     * >  The size of a destination data disk must be greater than the size of data in the source data disk. For example, if the source data disk has 500 GiB of storage space and 100 GiB of data, you must set this parameter to a value greater than 100.
     * @example 50
     *
     * @var int
     */
    public $systemDiskSize;

    /**
     * @description The type of destination to which the source server is migrated. You can modify the value only before the migration job starts. Valid values:
     *
     *   Image: After the migration job is complete, Server Migration Center (SMC) generates a destination Elastic Compute Service (ECS) image for the source server. You can use the image to create an ECS instance.
     *   ContainerImage: After the migration job is complete, SMC generates a container image for the source server. You can use the container image in Container Registry.
     *   TargetInstance: After the migration job is complete, SMC migrates the source server to the destination instance. If you set this parameter to TargetInstance, you must set the `InstanceId` parameter.
     *
     * >
     *
     *   The value of this parameter is not case-sensitive.
     *
     *   SMC does not allow you to migrate Windows servers or servers that run operating systems on the ARM architecture to Container Registry.
     *
     * @example Image
     *
     * @var string
     */
    public $targetType;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The time when the migration job expires. You can schedule the migration job to expire 7 to 90 days after the job is created.
     *
     *   This parameter can be modified only if the migration job is in the Ready, Running, Stopped, InError, or Waiting state.
     *   Specify the time in the ISO 8601 standard in the `YYYY-MM-DDThh:mm:ssZ` format. The time must be in UTC. For example, 2018-01-01T12:00:00Z indicates 20:00:00 on January 1, 2018 (UTC+8).
     *   If you do not specify this parameter, the migration job does not expire.
     *   After a migration job expires, the job state changes to Expired. SMC retains the migration job for seven days after the job expires. After the job is retained for seven days, SMC deletes the migration job.
     *
     * By default, a migration job is valid for 30 days after it is created.
     * @example 2019-06-04T13:35:00Z
     *
     * @var string
     */
    public $validTime;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'containerNamespace'     => 'ContainerNamespace',
        'containerRepository'    => 'ContainerRepository',
        'containerTag'           => 'ContainerTag',
        'dataDisk'               => 'DataDisk',
        'description'            => 'Description',
        'frequency'              => 'Frequency',
        'imageName'              => 'ImageName',
        'instanceId'             => 'InstanceId',
        'instanceRamRole'        => 'InstanceRamRole',
        'instanceType'           => 'InstanceType',
        'jobId'                  => 'JobId',
        'launchTemplateId'       => 'LaunchTemplateId',
        'launchTemplateVersion'  => 'LaunchTemplateVersion',
        'licenseType'            => 'LicenseType',
        'maxNumberOfImageToKeep' => 'MaxNumberOfImageToKeep',
        'name'                   => 'Name',
        'netMode'                => 'NetMode',
        'ownerId'                => 'OwnerId',
        'replicationParameters'  => 'ReplicationParameters',
        'resourceOwnerAccount'   => 'ResourceOwnerAccount',
        'scheduledStartTime'     => 'ScheduledStartTime',
        'systemDiskPart'         => 'SystemDiskPart',
        'systemDiskSize'         => 'SystemDiskSize',
        'targetType'             => 'TargetType',
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
        if (null !== $this->containerNamespace) {
            $res['ContainerNamespace'] = $this->containerNamespace;
        }
        if (null !== $this->containerRepository) {
            $res['ContainerRepository'] = $this->containerRepository;
        }
        if (null !== $this->containerTag) {
            $res['ContainerTag'] = $this->containerTag;
        }
        if (null !== $this->dataDisk) {
            $res['DataDisk'] = [];
            if (null !== $this->dataDisk && \is_array($this->dataDisk)) {
                $n = 0;
                foreach ($this->dataDisk as $item) {
                    $res['DataDisk'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->frequency) {
            $res['Frequency'] = $this->frequency;
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
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->replicationParameters) {
            $res['ReplicationParameters'] = $this->replicationParameters;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->scheduledStartTime) {
            $res['ScheduledStartTime'] = $this->scheduledStartTime;
        }
        if (null !== $this->systemDiskPart) {
            $res['SystemDiskPart'] = [];
            if (null !== $this->systemDiskPart && \is_array($this->systemDiskPart)) {
                $n = 0;
                foreach ($this->systemDiskPart as $item) {
                    $res['SystemDiskPart'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->systemDiskSize) {
            $res['SystemDiskSize'] = $this->systemDiskSize;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
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
     * @return ModifyReplicationJobAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContainerNamespace'])) {
            $model->containerNamespace = $map['ContainerNamespace'];
        }
        if (isset($map['ContainerRepository'])) {
            $model->containerRepository = $map['ContainerRepository'];
        }
        if (isset($map['ContainerTag'])) {
            $model->containerTag = $map['ContainerTag'];
        }
        if (isset($map['DataDisk'])) {
            if (!empty($map['DataDisk'])) {
                $model->dataDisk = [];
                $n               = 0;
                foreach ($map['DataDisk'] as $item) {
                    $model->dataDisk[$n++] = null !== $item ? dataDisk::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Frequency'])) {
            $model->frequency = $map['Frequency'];
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
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ReplicationParameters'])) {
            $model->replicationParameters = $map['ReplicationParameters'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ScheduledStartTime'])) {
            $model->scheduledStartTime = $map['ScheduledStartTime'];
        }
        if (isset($map['SystemDiskPart'])) {
            if (!empty($map['SystemDiskPart'])) {
                $model->systemDiskPart = [];
                $n                     = 0;
                foreach ($map['SystemDiskPart'] as $item) {
                    $model->systemDiskPart[$n++] = null !== $item ? systemDiskPart::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SystemDiskSize'])) {
            $model->systemDiskSize = $map['SystemDiskSize'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
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
