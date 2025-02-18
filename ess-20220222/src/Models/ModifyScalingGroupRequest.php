<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ess\V20220222\Models\ModifyScalingGroupRequest\capacityOptions;
use AlibabaCloud\SDK\Ess\V20220222\Models\ModifyScalingGroupRequest\launchTemplateOverrides;

class ModifyScalingGroupRequest extends Model
{
    /**
     * @var string
     */
    public $activeScalingConfigurationId;
    /**
     * @var string
     */
    public $allocationStrategy;
    /**
     * @var bool
     */
    public $azBalance;
    /**
     * @var capacityOptions
     */
    public $capacityOptions;
    /**
     * @var bool
     */
    public $compensateWithOnDemand;
    /**
     * @var string
     */
    public $customPolicyARN;
    /**
     * @var int
     */
    public $defaultCooldown;
    /**
     * @var int
     */
    public $desiredCapacity;
    /**
     * @var bool
     */
    public $disableDesiredCapacity;
    /**
     * @var bool
     */
    public $groupDeletionProtection;
    /**
     * @var string
     */
    public $healthCheckType;
    /**
     * @var string[]
     */
    public $healthCheckTypes;
    /**
     * @var string
     */
    public $launchTemplateId;
    /**
     * @var launchTemplateOverrides[]
     */
    public $launchTemplateOverrides;
    /**
     * @var string
     */
    public $launchTemplateVersion;
    /**
     * @var int
     */
    public $maxInstanceLifetime;
    /**
     * @var int
     */
    public $maxSize;
    /**
     * @var int
     */
    public $minSize;
    /**
     * @var string
     */
    public $multiAZPolicy;
    /**
     * @var int
     */
    public $onDemandBaseCapacity;
    /**
     * @var int
     */
    public $onDemandPercentageAboveBaseCapacity;
    /**
     * @var string
     */
    public $ownerAccount;
    /**
     * @var int
     */
    public $ownerId;
    /**
     * @var string[]
     */
    public $removalPolicies;
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
     * @var string
     */
    public $scalingPolicy;
    /**
     * @var string
     */
    public $spotAllocationStrategy;
    /**
     * @var int
     */
    public $spotInstancePools;
    /**
     * @var bool
     */
    public $spotInstanceRemedy;
    /**
     * @var int
     */
    public $stopInstanceTimeout;
    /**
     * @var string[]
     */
    public $vSwitchIds;
    protected $_name = [
        'activeScalingConfigurationId'        => 'ActiveScalingConfigurationId',
        'allocationStrategy'                  => 'AllocationStrategy',
        'azBalance'                           => 'AzBalance',
        'capacityOptions'                     => 'CapacityOptions',
        'compensateWithOnDemand'              => 'CompensateWithOnDemand',
        'customPolicyARN'                     => 'CustomPolicyARN',
        'defaultCooldown'                     => 'DefaultCooldown',
        'desiredCapacity'                     => 'DesiredCapacity',
        'disableDesiredCapacity'              => 'DisableDesiredCapacity',
        'groupDeletionProtection'             => 'GroupDeletionProtection',
        'healthCheckType'                     => 'HealthCheckType',
        'healthCheckTypes'                    => 'HealthCheckTypes',
        'launchTemplateId'                    => 'LaunchTemplateId',
        'launchTemplateOverrides'             => 'LaunchTemplateOverrides',
        'launchTemplateVersion'               => 'LaunchTemplateVersion',
        'maxInstanceLifetime'                 => 'MaxInstanceLifetime',
        'maxSize'                             => 'MaxSize',
        'minSize'                             => 'MinSize',
        'multiAZPolicy'                       => 'MultiAZPolicy',
        'onDemandBaseCapacity'                => 'OnDemandBaseCapacity',
        'onDemandPercentageAboveBaseCapacity' => 'OnDemandPercentageAboveBaseCapacity',
        'ownerAccount'                        => 'OwnerAccount',
        'ownerId'                             => 'OwnerId',
        'removalPolicies'                     => 'RemovalPolicies',
        'resourceOwnerAccount'                => 'ResourceOwnerAccount',
        'resourceOwnerId'                     => 'ResourceOwnerId',
        'scalingGroupId'                      => 'ScalingGroupId',
        'scalingGroupName'                    => 'ScalingGroupName',
        'scalingPolicy'                       => 'ScalingPolicy',
        'spotAllocationStrategy'              => 'SpotAllocationStrategy',
        'spotInstancePools'                   => 'SpotInstancePools',
        'spotInstanceRemedy'                  => 'SpotInstanceRemedy',
        'stopInstanceTimeout'                 => 'StopInstanceTimeout',
        'vSwitchIds'                          => 'VSwitchIds',
    ];

    public function validate()
    {
        if (null !== $this->capacityOptions) {
            $this->capacityOptions->validate();
        }
        if (\is_array($this->healthCheckTypes)) {
            Model::validateArray($this->healthCheckTypes);
        }
        if (\is_array($this->launchTemplateOverrides)) {
            Model::validateArray($this->launchTemplateOverrides);
        }
        if (\is_array($this->removalPolicies)) {
            Model::validateArray($this->removalPolicies);
        }
        if (\is_array($this->vSwitchIds)) {
            Model::validateArray($this->vSwitchIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activeScalingConfigurationId) {
            $res['ActiveScalingConfigurationId'] = $this->activeScalingConfigurationId;
        }

        if (null !== $this->allocationStrategy) {
            $res['AllocationStrategy'] = $this->allocationStrategy;
        }

        if (null !== $this->azBalance) {
            $res['AzBalance'] = $this->azBalance;
        }

        if (null !== $this->capacityOptions) {
            $res['CapacityOptions'] = null !== $this->capacityOptions ? $this->capacityOptions->toArray($noStream) : $this->capacityOptions;
        }

        if (null !== $this->compensateWithOnDemand) {
            $res['CompensateWithOnDemand'] = $this->compensateWithOnDemand;
        }

        if (null !== $this->customPolicyARN) {
            $res['CustomPolicyARN'] = $this->customPolicyARN;
        }

        if (null !== $this->defaultCooldown) {
            $res['DefaultCooldown'] = $this->defaultCooldown;
        }

        if (null !== $this->desiredCapacity) {
            $res['DesiredCapacity'] = $this->desiredCapacity;
        }

        if (null !== $this->disableDesiredCapacity) {
            $res['DisableDesiredCapacity'] = $this->disableDesiredCapacity;
        }

        if (null !== $this->groupDeletionProtection) {
            $res['GroupDeletionProtection'] = $this->groupDeletionProtection;
        }

        if (null !== $this->healthCheckType) {
            $res['HealthCheckType'] = $this->healthCheckType;
        }

        if (null !== $this->healthCheckTypes) {
            if (\is_array($this->healthCheckTypes)) {
                $res['HealthCheckTypes'] = [];
                $n1                      = 0;
                foreach ($this->healthCheckTypes as $item1) {
                    $res['HealthCheckTypes'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->launchTemplateId) {
            $res['LaunchTemplateId'] = $this->launchTemplateId;
        }

        if (null !== $this->launchTemplateOverrides) {
            if (\is_array($this->launchTemplateOverrides)) {
                $res['LaunchTemplateOverrides'] = [];
                $n1                             = 0;
                foreach ($this->launchTemplateOverrides as $item1) {
                    $res['LaunchTemplateOverrides'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->launchTemplateVersion) {
            $res['LaunchTemplateVersion'] = $this->launchTemplateVersion;
        }

        if (null !== $this->maxInstanceLifetime) {
            $res['MaxInstanceLifetime'] = $this->maxInstanceLifetime;
        }

        if (null !== $this->maxSize) {
            $res['MaxSize'] = $this->maxSize;
        }

        if (null !== $this->minSize) {
            $res['MinSize'] = $this->minSize;
        }

        if (null !== $this->multiAZPolicy) {
            $res['MultiAZPolicy'] = $this->multiAZPolicy;
        }

        if (null !== $this->onDemandBaseCapacity) {
            $res['OnDemandBaseCapacity'] = $this->onDemandBaseCapacity;
        }

        if (null !== $this->onDemandPercentageAboveBaseCapacity) {
            $res['OnDemandPercentageAboveBaseCapacity'] = $this->onDemandPercentageAboveBaseCapacity;
        }

        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->removalPolicies) {
            if (\is_array($this->removalPolicies)) {
                $res['RemovalPolicies'] = [];
                $n1                     = 0;
                foreach ($this->removalPolicies as $item1) {
                    $res['RemovalPolicies'][$n1++] = $item1;
                }
            }
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

        if (null !== $this->scalingPolicy) {
            $res['ScalingPolicy'] = $this->scalingPolicy;
        }

        if (null !== $this->spotAllocationStrategy) {
            $res['SpotAllocationStrategy'] = $this->spotAllocationStrategy;
        }

        if (null !== $this->spotInstancePools) {
            $res['SpotInstancePools'] = $this->spotInstancePools;
        }

        if (null !== $this->spotInstanceRemedy) {
            $res['SpotInstanceRemedy'] = $this->spotInstanceRemedy;
        }

        if (null !== $this->stopInstanceTimeout) {
            $res['StopInstanceTimeout'] = $this->stopInstanceTimeout;
        }

        if (null !== $this->vSwitchIds) {
            if (\is_array($this->vSwitchIds)) {
                $res['VSwitchIds'] = [];
                $n1                = 0;
                foreach ($this->vSwitchIds as $item1) {
                    $res['VSwitchIds'][$n1++] = $item1;
                }
            }
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
        if (isset($map['ActiveScalingConfigurationId'])) {
            $model->activeScalingConfigurationId = $map['ActiveScalingConfigurationId'];
        }

        if (isset($map['AllocationStrategy'])) {
            $model->allocationStrategy = $map['AllocationStrategy'];
        }

        if (isset($map['AzBalance'])) {
            $model->azBalance = $map['AzBalance'];
        }

        if (isset($map['CapacityOptions'])) {
            $model->capacityOptions = capacityOptions::fromMap($map['CapacityOptions']);
        }

        if (isset($map['CompensateWithOnDemand'])) {
            $model->compensateWithOnDemand = $map['CompensateWithOnDemand'];
        }

        if (isset($map['CustomPolicyARN'])) {
            $model->customPolicyARN = $map['CustomPolicyARN'];
        }

        if (isset($map['DefaultCooldown'])) {
            $model->defaultCooldown = $map['DefaultCooldown'];
        }

        if (isset($map['DesiredCapacity'])) {
            $model->desiredCapacity = $map['DesiredCapacity'];
        }

        if (isset($map['DisableDesiredCapacity'])) {
            $model->disableDesiredCapacity = $map['DisableDesiredCapacity'];
        }

        if (isset($map['GroupDeletionProtection'])) {
            $model->groupDeletionProtection = $map['GroupDeletionProtection'];
        }

        if (isset($map['HealthCheckType'])) {
            $model->healthCheckType = $map['HealthCheckType'];
        }

        if (isset($map['HealthCheckTypes'])) {
            if (!empty($map['HealthCheckTypes'])) {
                $model->healthCheckTypes = [];
                $n1                      = 0;
                foreach ($map['HealthCheckTypes'] as $item1) {
                    $model->healthCheckTypes[$n1++] = $item1;
                }
            }
        }

        if (isset($map['LaunchTemplateId'])) {
            $model->launchTemplateId = $map['LaunchTemplateId'];
        }

        if (isset($map['LaunchTemplateOverrides'])) {
            if (!empty($map['LaunchTemplateOverrides'])) {
                $model->launchTemplateOverrides = [];
                $n1                             = 0;
                foreach ($map['LaunchTemplateOverrides'] as $item1) {
                    $model->launchTemplateOverrides[$n1++] = launchTemplateOverrides::fromMap($item1);
                }
            }
        }

        if (isset($map['LaunchTemplateVersion'])) {
            $model->launchTemplateVersion = $map['LaunchTemplateVersion'];
        }

        if (isset($map['MaxInstanceLifetime'])) {
            $model->maxInstanceLifetime = $map['MaxInstanceLifetime'];
        }

        if (isset($map['MaxSize'])) {
            $model->maxSize = $map['MaxSize'];
        }

        if (isset($map['MinSize'])) {
            $model->minSize = $map['MinSize'];
        }

        if (isset($map['MultiAZPolicy'])) {
            $model->multiAZPolicy = $map['MultiAZPolicy'];
        }

        if (isset($map['OnDemandBaseCapacity'])) {
            $model->onDemandBaseCapacity = $map['OnDemandBaseCapacity'];
        }

        if (isset($map['OnDemandPercentageAboveBaseCapacity'])) {
            $model->onDemandPercentageAboveBaseCapacity = $map['OnDemandPercentageAboveBaseCapacity'];
        }

        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['RemovalPolicies'])) {
            if (!empty($map['RemovalPolicies'])) {
                $model->removalPolicies = [];
                $n1                     = 0;
                foreach ($map['RemovalPolicies'] as $item1) {
                    $model->removalPolicies[$n1++] = $item1;
                }
            }
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

        if (isset($map['ScalingPolicy'])) {
            $model->scalingPolicy = $map['ScalingPolicy'];
        }

        if (isset($map['SpotAllocationStrategy'])) {
            $model->spotAllocationStrategy = $map['SpotAllocationStrategy'];
        }

        if (isset($map['SpotInstancePools'])) {
            $model->spotInstancePools = $map['SpotInstancePools'];
        }

        if (isset($map['SpotInstanceRemedy'])) {
            $model->spotInstanceRemedy = $map['SpotInstanceRemedy'];
        }

        if (isset($map['StopInstanceTimeout'])) {
            $model->stopInstanceTimeout = $map['StopInstanceTimeout'];
        }

        if (isset($map['VSwitchIds'])) {
            if (!empty($map['VSwitchIds'])) {
                $model->vSwitchIds = [];
                $n1                = 0;
                foreach ($map['VSwitchIds'] as $item1) {
                    $model->vSwitchIds[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
