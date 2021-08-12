<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20140828\Models;

use AlibabaCloud\SDK\Ess\V20140828\Models\ModifyScalingGroupRequest\launchTemplateOverride;
use AlibabaCloud\Tea\Model;

class ModifyScalingGroupRequest extends Model
{
    /**
     * @var string[]
     */
    public $removalPolicy;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $scalingGroupId;

    /**
     * @var string
     */
    public $scalingGroupName;

    /**
     * @var int
     */
    public $minSize;

    /**
     * @var int
     */
    public $maxSize;

    /**
     * @var int
     */
    public $defaultCooldown;

    /**
     * @var string
     */
    public $activeScalingConfigurationId;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var string
     */
    public $healthCheckType;

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
    public $onDemandBaseCapacity;

    /**
     * @var int
     */
    public $onDemandPercentageAboveBaseCapacity;

    /**
     * @var bool
     */
    public $spotInstanceRemedy;

    /**
     * @var bool
     */
    public $compensateWithOnDemand;

    /**
     * @var int
     */
    public $spotInstancePools;

    /**
     * @var int
     */
    public $desiredCapacity;

    /**
     * @var bool
     */
    public $groupDeletionProtection;

    /**
     * @var string
     */
    public $multiAZPolicy;

    /**
     * @var string[]
     */
    public $vSwitchIds;

    /**
     * @var launchTemplateOverride[]
     */
    public $launchTemplateOverride;
    protected $_name = [
        'removalPolicy'                       => 'RemovalPolicy',
        'ownerId'                             => 'OwnerId',
        'resourceOwnerAccount'                => 'ResourceOwnerAccount',
        'resourceOwnerId'                     => 'ResourceOwnerId',
        'scalingGroupId'                      => 'ScalingGroupId',
        'scalingGroupName'                    => 'ScalingGroupName',
        'minSize'                             => 'MinSize',
        'maxSize'                             => 'MaxSize',
        'defaultCooldown'                     => 'DefaultCooldown',
        'activeScalingConfigurationId'        => 'ActiveScalingConfigurationId',
        'ownerAccount'                        => 'OwnerAccount',
        'healthCheckType'                     => 'HealthCheckType',
        'launchTemplateId'                    => 'LaunchTemplateId',
        'launchTemplateVersion'               => 'LaunchTemplateVersion',
        'onDemandBaseCapacity'                => 'OnDemandBaseCapacity',
        'onDemandPercentageAboveBaseCapacity' => 'OnDemandPercentageAboveBaseCapacity',
        'spotInstanceRemedy'                  => 'SpotInstanceRemedy',
        'compensateWithOnDemand'              => 'CompensateWithOnDemand',
        'spotInstancePools'                   => 'SpotInstancePools',
        'desiredCapacity'                     => 'DesiredCapacity',
        'groupDeletionProtection'             => 'GroupDeletionProtection',
        'multiAZPolicy'                       => 'MultiAZPolicy',
        'vSwitchIds'                          => 'VSwitchIds',
        'launchTemplateOverride'              => 'LaunchTemplateOverride',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->removalPolicy) {
            $res['RemovalPolicy'] = $this->removalPolicy;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->scalingGroupId) {
            $res['ScalingGroupId'] = $this->scalingGroupId;
        }
        if (null !== $this->scalingGroupName) {
            $res['ScalingGroupName'] = $this->scalingGroupName;
        }
        if (null !== $this->minSize) {
            $res['MinSize'] = $this->minSize;
        }
        if (null !== $this->maxSize) {
            $res['MaxSize'] = $this->maxSize;
        }
        if (null !== $this->defaultCooldown) {
            $res['DefaultCooldown'] = $this->defaultCooldown;
        }
        if (null !== $this->activeScalingConfigurationId) {
            $res['ActiveScalingConfigurationId'] = $this->activeScalingConfigurationId;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->healthCheckType) {
            $res['HealthCheckType'] = $this->healthCheckType;
        }
        if (null !== $this->launchTemplateId) {
            $res['LaunchTemplateId'] = $this->launchTemplateId;
        }
        if (null !== $this->launchTemplateVersion) {
            $res['LaunchTemplateVersion'] = $this->launchTemplateVersion;
        }
        if (null !== $this->onDemandBaseCapacity) {
            $res['OnDemandBaseCapacity'] = $this->onDemandBaseCapacity;
        }
        if (null !== $this->onDemandPercentageAboveBaseCapacity) {
            $res['OnDemandPercentageAboveBaseCapacity'] = $this->onDemandPercentageAboveBaseCapacity;
        }
        if (null !== $this->spotInstanceRemedy) {
            $res['SpotInstanceRemedy'] = $this->spotInstanceRemedy;
        }
        if (null !== $this->compensateWithOnDemand) {
            $res['CompensateWithOnDemand'] = $this->compensateWithOnDemand;
        }
        if (null !== $this->spotInstancePools) {
            $res['SpotInstancePools'] = $this->spotInstancePools;
        }
        if (null !== $this->desiredCapacity) {
            $res['DesiredCapacity'] = $this->desiredCapacity;
        }
        if (null !== $this->groupDeletionProtection) {
            $res['GroupDeletionProtection'] = $this->groupDeletionProtection;
        }
        if (null !== $this->multiAZPolicy) {
            $res['MultiAZPolicy'] = $this->multiAZPolicy;
        }
        if (null !== $this->vSwitchIds) {
            $res['VSwitchIds'] = $this->vSwitchIds;
        }
        if (null !== $this->launchTemplateOverride) {
            $res['LaunchTemplateOverride'] = [];
            if (null !== $this->launchTemplateOverride && \is_array($this->launchTemplateOverride)) {
                $n = 0;
                foreach ($this->launchTemplateOverride as $item) {
                    $res['LaunchTemplateOverride'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyScalingGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RemovalPolicy'])) {
            if (!empty($map['RemovalPolicy'])) {
                $model->removalPolicy = $map['RemovalPolicy'];
            }
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['ScalingGroupId'])) {
            $model->scalingGroupId = $map['ScalingGroupId'];
        }
        if (isset($map['ScalingGroupName'])) {
            $model->scalingGroupName = $map['ScalingGroupName'];
        }
        if (isset($map['MinSize'])) {
            $model->minSize = $map['MinSize'];
        }
        if (isset($map['MaxSize'])) {
            $model->maxSize = $map['MaxSize'];
        }
        if (isset($map['DefaultCooldown'])) {
            $model->defaultCooldown = $map['DefaultCooldown'];
        }
        if (isset($map['ActiveScalingConfigurationId'])) {
            $model->activeScalingConfigurationId = $map['ActiveScalingConfigurationId'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['HealthCheckType'])) {
            $model->healthCheckType = $map['HealthCheckType'];
        }
        if (isset($map['LaunchTemplateId'])) {
            $model->launchTemplateId = $map['LaunchTemplateId'];
        }
        if (isset($map['LaunchTemplateVersion'])) {
            $model->launchTemplateVersion = $map['LaunchTemplateVersion'];
        }
        if (isset($map['OnDemandBaseCapacity'])) {
            $model->onDemandBaseCapacity = $map['OnDemandBaseCapacity'];
        }
        if (isset($map['OnDemandPercentageAboveBaseCapacity'])) {
            $model->onDemandPercentageAboveBaseCapacity = $map['OnDemandPercentageAboveBaseCapacity'];
        }
        if (isset($map['SpotInstanceRemedy'])) {
            $model->spotInstanceRemedy = $map['SpotInstanceRemedy'];
        }
        if (isset($map['CompensateWithOnDemand'])) {
            $model->compensateWithOnDemand = $map['CompensateWithOnDemand'];
        }
        if (isset($map['SpotInstancePools'])) {
            $model->spotInstancePools = $map['SpotInstancePools'];
        }
        if (isset($map['DesiredCapacity'])) {
            $model->desiredCapacity = $map['DesiredCapacity'];
        }
        if (isset($map['GroupDeletionProtection'])) {
            $model->groupDeletionProtection = $map['GroupDeletionProtection'];
        }
        if (isset($map['MultiAZPolicy'])) {
            $model->multiAZPolicy = $map['MultiAZPolicy'];
        }
        if (isset($map['VSwitchIds'])) {
            if (!empty($map['VSwitchIds'])) {
                $model->vSwitchIds = $map['VSwitchIds'];
            }
        }
        if (isset($map['LaunchTemplateOverride'])) {
            if (!empty($map['LaunchTemplateOverride'])) {
                $model->launchTemplateOverride = [];
                $n                             = 0;
                foreach ($map['LaunchTemplateOverride'] as $item) {
                    $model->launchTemplateOverride[$n++] = null !== $item ? launchTemplateOverride::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
