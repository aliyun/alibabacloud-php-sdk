<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smc\V20190601\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Smc\V20190601\Models\ModifyReplicationJobAttributeRequest\dataDisk;
use AlibabaCloud\SDK\Smc\V20190601\Models\ModifyReplicationJobAttributeRequest\systemDiskPart;

class ModifyReplicationJobAttributeRequest extends Model
{
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
     * @var dataDisk[]
     */
    public $dataDisk;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $frequency;

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
     * @var string
     */
    public $launchTemplateId;

    /**
     * @var string
     */
    public $launchTemplateVersion;

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
     * @var string
     */
    public $scheduledStartTime;

    /**
     * @var systemDiskPart[]
     */
    public $systemDiskPart;

    /**
     * @var int
     */
    public $systemDiskSize;

    /**
     * @var string
     */
    public $targetType;

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
    protected $_name = [
        'containerNamespace' => 'ContainerNamespace',
        'containerRepository' => 'ContainerRepository',
        'containerTag' => 'ContainerTag',
        'dataDisk' => 'DataDisk',
        'description' => 'Description',
        'frequency' => 'Frequency',
        'imageName' => 'ImageName',
        'instanceId' => 'InstanceId',
        'instanceRamRole' => 'InstanceRamRole',
        'instanceType' => 'InstanceType',
        'jobId' => 'JobId',
        'launchTemplateId' => 'LaunchTemplateId',
        'launchTemplateVersion' => 'LaunchTemplateVersion',
        'maxNumberOfImageToKeep' => 'MaxNumberOfImageToKeep',
        'name' => 'Name',
        'netMode' => 'NetMode',
        'ownerId' => 'OwnerId',
        'replicationParameters' => 'ReplicationParameters',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'scheduledStartTime' => 'ScheduledStartTime',
        'systemDiskPart' => 'SystemDiskPart',
        'systemDiskSize' => 'SystemDiskSize',
        'targetType' => 'TargetType',
        'vSwitchId' => 'VSwitchId',
        'validTime' => 'ValidTime',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        if (\is_array($this->dataDisk)) {
            Model::validateArray($this->dataDisk);
        }
        if (\is_array($this->systemDiskPart)) {
            Model::validateArray($this->systemDiskPart);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->dataDisk)) {
                $res['DataDisk'] = [];
                $n1 = 0;
                foreach ($this->dataDisk as $item1) {
                    $res['DataDisk'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            if (\is_array($this->systemDiskPart)) {
                $res['SystemDiskPart'] = [];
                $n1 = 0;
                foreach ($this->systemDiskPart as $item1) {
                    $res['SystemDiskPart'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['DataDisk'] as $item1) {
                    $model->dataDisk[$n1] = dataDisk::fromMap($item1);
                    ++$n1;
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
                $n1 = 0;
                foreach ($map['SystemDiskPart'] as $item1) {
                    $model->systemDiskPart[$n1] = systemDiskPart::fromMap($item1);
                    ++$n1;
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
