<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\SDK\Ess\V20220222\Models\ModifyScalingGroupRequest\launchTemplateOverrides;
use AlibabaCloud\Tea\Model;

class ModifyScalingGroupRequest extends Model
{
    /**
     * @description The ID of the active scaling configuration in the scaling group.
     *
     * @example asc-bp17pelvl720x5ub****
     *
     * @var string
     */
    public $activeScalingConfigurationId;

    /**
     * @description The allocation policy. Auto Scaling selects instance types based on the allocation policy to create the required number of instances. The policy can be applied to pay-as-you-go instances and preemptible instances at the same time. This parameter takes effect only when you set the MultiAZPolicy parameter to COMPOSABLE. Valid values:
     *
     *   priority: Auto Scaling selects instance types based on the specified order to create the required number of instances.
     *   lowestPrice: Auto Scaling selects instance types that have the lowest unit price of vCPUs to create the required number of instances.
     *
     * Default value: priority.
     * @example priority
     *
     * @var string
     */
    public $allocationStrategy;

    /**
     * @description Specifies whether to evenly distribute instances in the scaling group across zones. This parameter takes effect only when you set the `MultiAZPolicy` parameter to `COMPOSABLE`. Valid values:
     *
     *   true
     *   false
     *
     * Default value: false.
     * @example false
     *
     * @var bool
     */
    public $azBalance;

    /**
     * @description Specifies whether to automatically create pay-as-you-go instances to meet the requirements on the number of ECS instances in the scaling group when the number of preemptible instances cannot be reached due to reasons such as costs and insufficient resources. This parameter takes effect only if you set the MultiAZPolicy parameter in the CreateScalingGroup operation to COST_OPTIMIZED. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $compensateWithOnDemand;

    /**
     * @description The ARN of the custom scaling policy (Function). This parameter takes effect only when you specify CustomPolicy as the first step of the instance removal policy.
     *
     * @example acs:fc:cn-zhangjiakou:16145688****:services/ess_custom_terminate_policy.LATEST/functions/ess_custom_terminate_policy_name
     *
     * @var string
     */
    public $customPolicyARN;

    /**
     * @description The default cooldown time of the scaling group. This parameter takes effect only for scaling groups that have simple scaling rules. Valid values: 0 to 86400. Unit: seconds. During the cooldown time, Auto Scaling executes only scaling activities that are triggered by event-triggered tasks associated with CloudMonitor.
     *
     * @example 600
     *
     * @var int
     */
    public $defaultCooldown;

    /**
     * @description The expected number of ECS instances in the scaling group. Auto Scaling automatically maintains the specified expected number of ECS instances. The expected number cannot be greater than the value of the MaxSize parameter and cannot be less than the value of the MinSize parameter.
     *
     * @example 5
     *
     * @var int
     */
    public $desiredCapacity;

    /**
     * @description 伸缩组是否关闭期望实例数功能。取值范围：
     *
     * > 只有伸缩组当前无伸缩活动时，才能将该参数设置为true（即关闭伸缩组的期望实例数功能），关闭伸缩组的期望实例数功能时伸缩组当前的DesiredCapacity属性也会被清空，但伸缩组中当前的实例数量不发生变化。
     * @example false
     *
     * @var bool
     */
    public $disableDesiredCapacity;

    /**
     * @description Specifies whether to enable deletion protection for the scaling group. Valid values:
     *
     *   true: enables deletion protection for the scaling group. This way, the scaling group cannot be deleted.
     *   false: disables deletion protection for the scaling group.
     *
     * @example true
     *
     * @var bool
     */
    public $groupDeletionProtection;

    /**
     * @description The health check mode of the scaling group. Valid values:
     *
     *   NONE: Auto Scaling does not perform health checks on instances in the scaling group.
     *   ECS: Auto Scaling performs health checks on ECS instances in the scaling group.
     *
     * @example ECS
     *
     * @var string
     */
    public $healthCheckType;

    /**
     * @var string[]
     */
    public $healthCheckTypes;

    /**
     * @description The ID of the launch template that is used by Auto Scaling to create instances.
     *
     * @example lt-m5e3ofjr1zn1aw7****
     *
     * @var string
     */
    public $launchTemplateId;

    /**
     * @description Details of the instance types that are specified in the extended configurations of the launch template.
     *
     * @var launchTemplateOverrides[]
     */
    public $launchTemplateOverrides;

    /**
     * @description The version number of the launch template. Valid values:
     *
     *   A fixed template version number.
     *   Default: The default template version is always used.
     *   Latest: The latest template version is always used.
     *
     * @example Default
     *
     * @var string
     */
    public $launchTemplateVersion;

    /**
     * @description The maximum life span of the instance in the scaling group. Unit: seconds.
     *
     * > You cannot specify this parameter for scaling groups that manage elastic container instances or scaling groups whose ScalingPolicy is set to recycle.
     * @example null
     *
     * @var int
     */
    public $maxInstanceLifetime;

    /**
     * @description The maximum number of ECS instances in the scaling group. When the number of ECS instances in the scaling group is greater than the value of the MaxSize parameter, Auto Scaling automatically removes ECS instances from the scaling group until the number of instances is equal to the value of the MaxSize parameter.
     *
     * The value range of the MaxSize parameter varies based on the instance quota. You can go to [Quota Center](https://quotas.console.aliyun.com/products/ess/quotas) to check the quota of **instances that can be included in a scaling group**.
     *
     * For example, if the quota of instances that can be included in a scaling group is 2000, the valid values of the MaxSize parameter range from 0 to 2000.
     * @example 99
     *
     * @var int
     */
    public $maxSize;

    /**
     * @description The minimum number of ECS instances in the scaling group. When the number of ECS instances in the scaling group is less than the value of the MinSize parameter, Auto Scaling automatically creates ECS instances and adds the instances to the scaling group until the number of instances is equal to the value of the MinSize parameter.
     *
     * > The value of the MinSize parameter must be less than or equal to the value of the MaxSize parameter.
     * @example 1
     *
     * @var int
     */
    public $minSize;

    /**
     * @description The scaling policy for the multi-zone scaling group that contains ECS instances. Valid values:
     *
     *   PRIORITY: ECS instances are scaled based on the vSwitch priority. The first vSwitch specified by using the VSwitchIds parameter has the highest priority. Auto Scaling preferentially scales instances in the zone where the vSwitch that has the highest priority resides. If the scaling fails, Auto Scaling scales instances in the zone where the vSwitch that has the next highest priority resides.
     *   COST_OPTIMIZED: During a scale-out activity, Auto Scaling preferentially creates ECS instances of the instance type that has the lowest unit price of vCPU. During a scale-in activity, Auto Scaling preferentially removes ECS instances of the instance types that have the highest unit price of vCPU. Auto Scaling preferentially creates preemptible instances when preemptible instance types are specified in the scaling configuration. You can use the `CompensateWithOnDemand` parameter to specify whether to automatically create pay-as-you-go instances when Auto Scaling fails to create preemptible instances.
     *
     * > The `COST_OPTIMIZED` setting takes effect only when multiple instance types are specified or at least one instance type is specified for preemptible instances.
     *
     *   BALANCE: ECS instances are evenly distributed across zones that are specified in the scaling group. If ECS instances are unevenly distributed among zones due to insufficient resources, you can call the RebalanceInstance operation to evenly distribute the instances among the zones.
     *   COMPOSABLE: You can flexibly combine the preceding policies based on your business requirements.
     *
     * @example PRIORITY
     *
     * @var string
     */
    public $multiAZPolicy;

    /**
     * @description The minimum number of pay-as-you-go instances that must be included in the scaling group. Valid values: 0 to 1000. If the number of pay-as-you-go instances is less than the value of this parameter, Auto Scaling preferentially creates pay-as-you-go instances.
     *
     * If you set the `MultiAZPolicy` parameter to `COMPOSABLE` Policy, the default value is 0.
     * @example 30
     *
     * @var int
     */
    public $onDemandBaseCapacity;

    /**
     * @description The expected percentage of pay-as-you-go instances in the excess instances when the minimum number of pay-as-you-go instances reaches the requirement. Valid values: 0 to 100.
     *
     * If you set the `MultiAZPolicy` parameter to `COMPOSABLE` Policy, the default value is 100.
     * @example 20
     *
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
     * @description The policy that is used to remove ECS instances from the scaling group. Valid values:
     *
     *   OldestInstance: removes ECS instances that are added at the earliest point in time to the scaling group.
     *   NewestInstance: removes ECS instances that are most recently added to the scaling group.
     *   OldestScalingConfiguration: removes ECS instances that are created based on the earliest scaling configuration.
     *
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
     * @description The ID of the scaling group that you want to modify.
     *
     * @example asg-bp1ffogfdauy0jw0****
     *
     * @var string
     */
    public $scalingGroupId;

    /**
     * @description The name of the scaling group. The name of each scaling group must be unique in a region. The name must be 2 to 64 characters in length and can contain letters, digits, underscores (\_), hyphens (-), and periods (.). The name must start with a letter or a digit.
     *
     * @example scalinggroup****
     *
     * @var string
     */
    public $scalingGroupName;

    /**
     * @var string
     */
    public $scalingPolicy;

    /**
     * @description The allocation policy of preemptible instances. You can use this parameter to individually specify the allocation policy of preemptible instances. This parameter takes effect only when you set the `MultiAZPolicy` parameter to `COMPOSABLE`. Valid values:
     *
     *   priority: Auto Scaling selects instance types based on the specified order to create the required number of preemptible instances.
     *   lowestPrice: Auto Scaling selects instance types that have the lowest unit price of vCPUs to create the required number of preemptible instances.
     *
     * Default value: priority.
     * @example lowestPrice
     *
     * @var string
     */
    public $spotAllocationStrategy;

    /**
     * @description The number of instance types that you specify. Auto Scaling creates preemptible instances of multiple instance types that are provided at the lowest price. Valid values: 0 to 10.
     *
     * If you set the `MultiAZPolicy` parameter to `COMPOSABLE` Policy, the default value is 2.
     * @example 5
     *
     * @var int
     */
    public $spotInstancePools;

    /**
     * @description Specifies whether to supplement preemptible instances. If this parameter is set to true, Auto Scaling creates an instance to replace a preemptible instance when Auto Scaling receives the system message that the preemptible instance is to be reclaimed.
     *
     * @example true
     *
     * @var bool
     */
    public $spotInstanceRemedy;

    /**
     * @description The IDs of vSwitches.
     *
     * The vSwitches can reside in different zones. The vSwitches are sorted in ascending order. The first vSwitch specified by using the VSwitchIds parameter has the highest priority. If Auto Scaling fails to create ECS instances in the zone where the vSwitch that has the highest priority resides, Auto Scaling creates ECS instances in the zone where the vSwitch that has the next highest priority resides.
     * @var string[]
     */
    public $vSwitchIds;
    protected $_name = [
        'activeScalingConfigurationId'        => 'ActiveScalingConfigurationId',
        'allocationStrategy'                  => 'AllocationStrategy',
        'azBalance'                           => 'AzBalance',
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
        'vSwitchIds'                          => 'VSwitchIds',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['HealthCheckTypes'] = $this->healthCheckTypes;
        }
        if (null !== $this->launchTemplateId) {
            $res['LaunchTemplateId'] = $this->launchTemplateId;
        }
        if (null !== $this->launchTemplateOverrides) {
            $res['LaunchTemplateOverrides'] = [];
            if (null !== $this->launchTemplateOverrides && \is_array($this->launchTemplateOverrides)) {
                $n = 0;
                foreach ($this->launchTemplateOverrides as $item) {
                    $res['LaunchTemplateOverrides'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['RemovalPolicies'] = $this->removalPolicies;
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
        if (null !== $this->vSwitchIds) {
            $res['VSwitchIds'] = $this->vSwitchIds;
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
        if (isset($map['ActiveScalingConfigurationId'])) {
            $model->activeScalingConfigurationId = $map['ActiveScalingConfigurationId'];
        }
        if (isset($map['AllocationStrategy'])) {
            $model->allocationStrategy = $map['AllocationStrategy'];
        }
        if (isset($map['AzBalance'])) {
            $model->azBalance = $map['AzBalance'];
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
                $model->healthCheckTypes = $map['HealthCheckTypes'];
            }
        }
        if (isset($map['LaunchTemplateId'])) {
            $model->launchTemplateId = $map['LaunchTemplateId'];
        }
        if (isset($map['LaunchTemplateOverrides'])) {
            if (!empty($map['LaunchTemplateOverrides'])) {
                $model->launchTemplateOverrides = [];
                $n                              = 0;
                foreach ($map['LaunchTemplateOverrides'] as $item) {
                    $model->launchTemplateOverrides[$n++] = null !== $item ? launchTemplateOverrides::fromMap($item) : $item;
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
                $model->removalPolicies = $map['RemovalPolicies'];
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
        if (isset($map['VSwitchIds'])) {
            if (!empty($map['VSwitchIds'])) {
                $model->vSwitchIds = $map['VSwitchIds'];
            }
        }

        return $model;
    }
}
