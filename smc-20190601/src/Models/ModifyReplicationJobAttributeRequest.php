<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smc\V20190601\Models;

use AlibabaCloud\SDK\Smc\V20190601\Models\ModifyReplicationJobAttributeRequest\dataDisk;
use AlibabaCloud\SDK\Smc\V20190601\Models\ModifyReplicationJobAttributeRequest\systemDiskPart;
use AlibabaCloud\Tea\Model;

class ModifyReplicationJobAttributeRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $targetType;

    /**
     * @var string
     */
    public $scheduledStartTime;

    /**
     * @var string
     */
    public $imageName;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $systemDiskSize;

    /**
     * @var int
     */
    public $frequency;

    /**
     * @var int
     */
    public $maxNumberOfImageToKeep;

    /**
     * @var string
     */
    public $instanceType;

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
    public $instanceRamRole;

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
    public $validTime;

    /**
     * @var systemDiskPart[]
     */
    public $systemDiskPart;

    /**
     * @var dataDisk[]
     */
    public $dataDisk;
    protected $_name = [
        'ownerId'                => 'OwnerId',
        'resourceOwnerAccount'   => 'ResourceOwnerAccount',
        'jobId'                  => 'JobId',
        'name'                   => 'Name',
        'description'            => 'Description',
        'targetType'             => 'TargetType',
        'scheduledStartTime'     => 'ScheduledStartTime',
        'imageName'              => 'ImageName',
        'instanceId'             => 'InstanceId',
        'systemDiskSize'         => 'SystemDiskSize',
        'frequency'              => 'Frequency',
        'maxNumberOfImageToKeep' => 'MaxNumberOfImageToKeep',
        'instanceType'           => 'InstanceType',
        'launchTemplateId'       => 'LaunchTemplateId',
        'launchTemplateVersion'  => 'LaunchTemplateVersion',
        'instanceRamRole'        => 'InstanceRamRole',
        'containerNamespace'     => 'ContainerNamespace',
        'containerRepository'    => 'ContainerRepository',
        'containerTag'           => 'ContainerTag',
        'validTime'              => 'ValidTime',
        'systemDiskPart'         => 'SystemDiskPart',
        'dataDisk'               => 'DataDisk',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }
        if (null !== $this->scheduledStartTime) {
            $res['ScheduledStartTime'] = $this->scheduledStartTime;
        }
        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->systemDiskSize) {
            $res['SystemDiskSize'] = $this->systemDiskSize;
        }
        if (null !== $this->frequency) {
            $res['Frequency'] = $this->frequency;
        }
        if (null !== $this->maxNumberOfImageToKeep) {
            $res['MaxNumberOfImageToKeep'] = $this->maxNumberOfImageToKeep;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->launchTemplateId) {
            $res['LaunchTemplateId'] = $this->launchTemplateId;
        }
        if (null !== $this->launchTemplateVersion) {
            $res['LaunchTemplateVersion'] = $this->launchTemplateVersion;
        }
        if (null !== $this->instanceRamRole) {
            $res['InstanceRamRole'] = $this->instanceRamRole;
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
        if (null !== $this->validTime) {
            $res['ValidTime'] = $this->validTime;
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
        if (null !== $this->dataDisk) {
            $res['DataDisk'] = [];
            if (null !== $this->dataDisk && \is_array($this->dataDisk)) {
                $n = 0;
                foreach ($this->dataDisk as $item) {
                    $res['DataDisk'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }
        if (isset($map['ScheduledStartTime'])) {
            $model->scheduledStartTime = $map['ScheduledStartTime'];
        }
        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['SystemDiskSize'])) {
            $model->systemDiskSize = $map['SystemDiskSize'];
        }
        if (isset($map['Frequency'])) {
            $model->frequency = $map['Frequency'];
        }
        if (isset($map['MaxNumberOfImageToKeep'])) {
            $model->maxNumberOfImageToKeep = $map['MaxNumberOfImageToKeep'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['LaunchTemplateId'])) {
            $model->launchTemplateId = $map['LaunchTemplateId'];
        }
        if (isset($map['LaunchTemplateVersion'])) {
            $model->launchTemplateVersion = $map['LaunchTemplateVersion'];
        }
        if (isset($map['InstanceRamRole'])) {
            $model->instanceRamRole = $map['InstanceRamRole'];
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
        if (isset($map['ValidTime'])) {
            $model->validTime = $map['ValidTime'];
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
        if (isset($map['DataDisk'])) {
            if (!empty($map['DataDisk'])) {
                $model->dataDisk = [];
                $n               = 0;
                foreach ($map['DataDisk'] as $item) {
                    $model->dataDisk[$n++] = null !== $item ? dataDisk::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
