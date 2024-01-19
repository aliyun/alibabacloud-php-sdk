<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smc\V20190601\Models;

use AlibabaCloud\SDK\Smc\V20190601\Models\CreateReplicationJobRequest\dataDisk;
use AlibabaCloud\SDK\Smc\V20190601\Models\CreateReplicationJobRequest\systemDiskPart;
use AlibabaCloud\SDK\Smc\V20190601\Models\CreateReplicationJobRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateReplicationJobRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length. For more information, see [How to ensure idempotence](~~25693~~).
     *
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

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
     * @description The data disks.
     *
     * @var dataDisk[]
     */
    public $dataDisk;

    /**
     * @description The description of the migration job.
     *
     * The description must be 2 to 128 characters in length, and can contain digits, colons (:), underscores (\_), and hyphens (-). The description must start with a letter, but cannot start with `http://` or `https://`.
     * @example This_is_a_migration_task
     *
     * @var string
     */
    public $description;

    /**
     * @description The interval at which SMC synchronizes incremental data to Alibaba Cloud. Unit: hour. Valid values: 1 to 168.
     *
     * By default, this parameter is empty.
     * @example 12
     *
     * @var int
     */
    public $frequency;

    /**
     * @description The name of the destination image. The name must meet the following requirements:
     *
     *   The name must be unique within an Alibaba Cloud region.
     *   The name must be 2 to 128 characters in length, and can contain digits, colons (:), underscores (\_), and hyphens (-). The name must start with a letter, but cannot start with `http://` or `https://`.
     *
     * >  If you specify an image name that already exists in the destination region, the migration job ID is appended to the image name as a suffix. Example: ImageName_j-2zexxxxxxxxxxxxx.
     * @example testAliCloudImageName
     *
     * @var string
     */
    public $imageName;

    /**
     * @description The ID of the destination ECS instance.
     *
     * @example i-bp1f1dvfto1sigz5****
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
     * @description The type of the intermediate instance.
     *
     * You can call the [DescribeInstanceTypes](~~25620~~) operation to query the ECS instance types.
     *
     *   If you specify this parameter, SMC creates an intermediate instance of the specified instance type. If the specified instance type is unavailable, the migration job fails to be created.
     *   If you do not specify this parameter, SMC selects an available instance type in a specific order to create an intermediate instance. For more information, see the "How does SMC create an intermediate instance?" section of the SMC FAQ topic.
     *
     * @example ecs.c6.large
     *
     * @var string
     */
    public $instanceType;

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
     * @example lt-bp16jovvln1cgaaq****
     *
     * @var string
     */
    public $launchTemplateId;

    /**
     * @description The version number of the launch template.
     *
     * @example 1
     *
     * @var string
     */
    public $launchTemplateVersion;

    /**
     * @description The license type. Valid values:
     *
     *   An empty value specifies no license.
     *   A value of BYOL specifies Bring Your Own License (BYOL).
     *
     * For more information, see [SMC FAQ](~~121707~~).
     * @example BYOL
     *
     * @var string
     */
    public $licenseType;

    /**
     * @description The maximum number of images retained for the incremental migration job. Valid values: 1 to 10.
     *
     * By default, this parameter is empty.
     * @example 10
     *
     * @var int
     */
    public $maxNumberOfImageToKeep;

    /**
     * @description The name of the migration job. The name must meet the following requirements:
     *
     *   The name must be unique.
     *   The name must be 2 to 128 characters in length, and can contain digits, colons (:), underscores (\_), and hyphens (-). The name must start with a letter, but cannot start with `http://` or `https://`.
     *
     * @example testMigrationTaskName
     *
     * @var string
     */
    public $name;

    /**
     * @description The network mode for data transmission. Valid values:
     *
     *   0: Data is transmitted over the Internet. Make sure that the source server can access the Internet.
     *   2: Data is transmitted over a VPC. If you specify this value, you must specify the VSwitchId parameter. You do not need to specify the VpcId parameter because the value of the VpcId parameter can be retrieved based on the value of the VSwitchId parameter.
     *
     * Default value: 0
     * @example 0
     *
     * @var int
     */
    public $netMode;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The ID of the Alibaba Cloud region to which you want to migrate the source server.
     *
     * For example, if you want to migrate the source server to the China (Hangzhou) region, set this parameter to `cn-hangzhou`. You can call the [DescribeRegions](~~25609~~) operation to query the latest regions.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The parameters of the replication driver. The parameters must be specified as key-value pairs in the JSON format. The keys are fixed for each type of replication driver. The JSON string can be up to 2,048 characters in length.
     *
     * A replication driver is a tool that is used to migrate a source server to an intermediate instance. The parameters vary based on the replication driver type. If you use a Server Migration Tool (SMT) driver, you can specify the following parameters:
     *
     *   bandwidth_limit: the maximum bandwidth for data transmission.
     *   compress_level: the compression ratio of data to be transmitted.
     *   checksum: specifies whether to enable checksum verification.
     *
     * For more information about replication drivers, see the response parameter `SourceServers.ReplicationDriver` of the [DescribeSourceServers](~~121818~~) operation.
     * @example {"bandwidth_limit":0,"compress_level":1,"checksum":true}
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
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @description Specifies whether to disable incremental migration for the source server. Valid values:
     *
     *   true: creates a migration job that runs only once. This is the default value. Incremental data of the source server is not synchronized.
     *   false: creates an incremental migration job. In this case, you must specify the `Frequency` parameter. SMC synchronizes incremental data of the source server to Alibaba Cloud at the specified frequency. You can use an incremental migration job to synchronize incremental data from the source server to Alibaba Cloud without the need to interrupt your business. A full data image is generated for the source server when the job is running.
     *
     * >  You can specify this parameter only when you create a migration job. The parameter value cannot be changed after the migration job is created.
     * @example true
     *
     * @var bool
     */
    public $runOnce;

    /**
     * @description The time when you want to run the migration job. The time must meet the following requirements:
     *
     *   The time must be specified in the ISO 8601 standard in the YYYY-MM-DDThh:mm:ssZ format. For example, 2018-01-01T12:00:00Z specifies 20:00:00 on January 1, 2018 (UTC+8).
     *   The value must be within 30 days after the current time.
     *
     * >  If you do not specify this parameter, you must manually start the migration job after the job is created. You can call the [StartReplicationJob](~~121823~~) operation to start the migration job.
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
     * @description The information about system disk partitions.
     *
     * @var systemDiskPart[]
     */
    public $systemDiskPart;

    /**
     * @description The system disk size of the destination ECS instance. Unit: GiB. Valid values: 20 to 2048.
     *
     * >  The value must be greater than the used space of the system disk on the source server. For example, if the total size of the source disk is 500 GiB and the used space is 100 GiB, the value of this parameter must be greater than 100 GiB.
     * @example 80
     *
     * @var int
     */
    public $systemDiskSize;

    /**
     * @description The tags.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The type of destination to which you want to migrate the source server. Valid values:
     *
     *   Image: After the migration job is complete, SMC generates an Elastic Compute Service (ECS) image for the source server.
     *   ContainerImage: After the migration job is complete, SMC generates a Docker container image for the source server.
     *   TargetInstance: After the migration job is completed, SMC migrates the source server to the destination instance. If you set this parameter to TargetInstance, you must set the `InstanceId` parameter.
     *
     * @example Image
     *
     * @var string
     */
    public $targetType;

    /**
     * @description The ID of the vSwitch in the specified VPC.
     *
     * You must set this parameter if you use a VPC to migrate data.
     * @example vsw-bp1ddbrxdlrcbim46****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The time when the migration job expires. You can schedule the migration job to expire 7 to 90 days after the job is created.
     *
     *   The time must be specified in the ISO 8601 standard in the YYYY-MM-DDThh:mm:ssZ format. For example, 2018-01-01T12:00:00Z specifies 20:00:00 on January 1, 2018 (UTC+8).
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
     * @description The ID of a VPC for which you have configured an Express Connect circuit or a VPN gateway.
     *
     * @example vpc-bp1vwnn14rqpyiczj****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'clientToken'            => 'ClientToken',
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
        'jobType'                => 'JobType',
        'launchTemplateId'       => 'LaunchTemplateId',
        'launchTemplateVersion'  => 'LaunchTemplateVersion',
        'licenseType'            => 'LicenseType',
        'maxNumberOfImageToKeep' => 'MaxNumberOfImageToKeep',
        'name'                   => 'Name',
        'netMode'                => 'NetMode',
        'ownerId'                => 'OwnerId',
        'regionId'               => 'RegionId',
        'replicationParameters'  => 'ReplicationParameters',
        'resourceGroupId'        => 'ResourceGroupId',
        'resourceOwnerAccount'   => 'ResourceOwnerAccount',
        'runOnce'                => 'RunOnce',
        'scheduledStartTime'     => 'ScheduledStartTime',
        'sourceId'               => 'SourceId',
        'systemDiskPart'         => 'SystemDiskPart',
        'systemDiskSize'         => 'SystemDiskSize',
        'tag'                    => 'Tag',
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
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
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
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->replicationParameters) {
            $res['ReplicationParameters'] = $this->replicationParameters;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
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
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return CreateReplicationJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
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
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ReplicationParameters'])) {
            $model->replicationParameters = $map['ReplicationParameters'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
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
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
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
