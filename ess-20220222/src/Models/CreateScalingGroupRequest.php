<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\SDK\Ess\V20220222\Models\CreateScalingGroupRequest\albServerGroups;
use AlibabaCloud\SDK\Ess\V20220222\Models\CreateScalingGroupRequest\launchTemplateOverrides;
use AlibabaCloud\SDK\Ess\V20220222\Models\CreateScalingGroupRequest\lifecycleHooks;
use AlibabaCloud\SDK\Ess\V20220222\Models\CreateScalingGroupRequest\loadBalancerConfigs;
use AlibabaCloud\SDK\Ess\V20220222\Models\CreateScalingGroupRequest\serverGroups;
use AlibabaCloud\SDK\Ess\V20220222\Models\CreateScalingGroupRequest\tags;
use AlibabaCloud\SDK\Ess\V20220222\Models\CreateScalingGroupRequest\VServerGroups;
use AlibabaCloud\Tea\Model;

class CreateScalingGroupRequest extends Model
{
    /**
     * @description Details of the Application Load Balancer (ALB) server groups that you want to associate with the scaling group.
     *
     * @var albServerGroups[]
     */
    public $albServerGroups;

    /**
     * @description The allocation policy of instances. Auto Scaling selects instance types based on the allocation policy to create the required number of instances. The policy can be applied to pay-as-you-go instances and preemptible instances. This parameter takes effect only when you set the `MultiAZPolicy` parameter to `COMPOSABLE`. Valid values:
     *
     *   priority: Auto Scaling selects instance types based on the specified order of the instance types to create the required number of instances.
     *   lowestPrice: Auto Scaling selects instance types that have the lowest unit price of vCPUs to create the required number of instances.
     *
     * Default value: priority.
     * @example priority
     *
     * @var string
     */
    public $allocationStrategy;

    /**
     * @description Specifies whether to evenly distribute instances in the scaling group across zones. This parameter is available only if you set the `MultiAZPolicy` parameter to `COMPOSABLE`. Valid values:
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
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length. For more information, see [Ensure idempotence](~~25965~~).
     *
     * @example 123e4567-e89b-12d3-a456-42665544****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies whether to automatically create pay-as-you-go instances to meet the requirement on the number of ECS instances when the expected capacity of preemptible instances cannot be provided due to reasons such as cost-related issues and insufficient resources. This parameter is available only if you set the MultiAZPolicy parameter to COST_OPTIMIZED. Valid values:
     *
     *   true
     *   false
     *
     * Default value: true.
     * @example true
     *
     * @var bool
     */
    public $compensateWithOnDemand;

    /**
     * @description The ID of the elastic container instance.
     *
     * @example eci-uf6fonnghi50u374****
     *
     * @var string
     */
    public $containerGroupId;

    /**
     * @description The Alibaba Cloud Resource Name (ARN) of the custom scale-in policy (Function). This parameter is available only if you specify CustomPolicy as the first step to remove instances.
     *
     * @example acs:fc:cn-zhangjiakou:16145688****:services/ess_custom_terminate_policy.LATEST/functions/ess_custom_terminate_policy_name
     *
     * @var string
     */
    public $customPolicyARN;

    /**
     * @description The IDs of the ApsaraDB RDS instances that you want to associate with the scaling group. The value can be a JSON array that contains multiple ApsaraDB RDS instance IDs. Separate multiple IDs with commas (,).
     *
     * You can associate only a limited number of ApsaraDB RDS instances with a scaling group. Go to [Quota Center](https://quotas.console.aliyun.com/products/ess/quotas) to check the maximum number of ApsaraDB RDS instances that you can associate with a scaling group.
     * @example ["rm-bp142f86de0t7****", "rm-bp18l1z42ar4o****", "rm-bp1lqr97h4aqk****"]
     *
     * @var string
     */
    public $DBInstanceIds;

    /**
     * @description The cooldown period of the scaling group after a scaling activity is complete. Valid values: 0 to 86400. Unit: seconds.
     *
     * Default value: 300.
     * @example 300
     *
     * @var int
     */
    public $defaultCooldown;

    /**
     * @description The expected number of ECS instances in the scaling group. Auto Scaling automatically maintains the expected number of ECS instances. The value of the DesiredCapacity parameter cannot be greater than the value of the MaxSize parameter and less than the value of the MinSize parameter.
     *
     * @example 5
     *
     * @var int
     */
    public $desiredCapacity;

    /**
     * @description Specifies whether to enable deletion protection for the scaling group. Valid values:
     *
     *   true: enables deletion protection for the scaling group. This way, the scaling group cannot be deleted.
     *   false: disables deletion protection for the scaling group.
     *
     * Default value: false.
     * @example true
     *
     * @var bool
     */
    public $groupDeletionProtection;

    /**
     * @description The type of the instances that are managed by the scaling group. Valid values:
     *
     *   ECS: ECS instances.
     *   ECI: elastic container instances.
     *
     * Default value: ECS.
     * @example ECS
     *
     * @var string
     */
    public $groupType;

    /**
     * @description The health check mode of the scaling group. Valid values:
     *
     *   NONE: Auto Scaling does not check the health status of instances in the scaling group.
     *   ECS: Auto Scaling checks the health status of ECS instances in the scaling group.
     *   LOAD_BALANCER: Auto Scaling checks the health status of instances in the scaling group based on the health check results of load balancers. The health check results of Classic Load Balancer (CLB) instances are not supported as the health check basis for instances in the scaling group.
     *
     * Default value: ECS.
     * @example ECS
     *
     * @var string
     */
    public $healthCheckType;

    /**
     * @description The health check modes of the scaling group. Valid values:
     *
     *   NONE: Auto Scaling does not check the health status of instances in the scaling group.
     *   ECS: Auto Scaling checks the health status of ECS instances in the scaling group.
     *   LOAD_BALANCER: Auto Scaling checks the health status of instances in the scaling group based on the health check results of load balancers. The health check results of CLB instances are not supported as the health check basis for instances in the scaling group.
     *
     * Default value: ECS.
     * @var string[]
     */
    public $healthCheckTypes;

    /**
     * @description The ID of the existing ECS instance that provides instance configurations for Auto Scaling to create a scaling configuration.
     *
     * @example i-28wt4****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the launch template that provides instance configurations for Auto Scaling to create instances.
     *
     * @example lt-m5e3ofjr1zn1aw7****
     *
     * @var string
     */
    public $launchTemplateId;

    /**
     * @description Details of the instance types that you specify by using the Extended Configurations feature of the launch template.
     *
     * @var launchTemplateOverrides[]
     */
    public $launchTemplateOverrides;

    /**
     * @description The version number of the launch template. Valid values:
     *
     *   A fixed template version number.
     *   Default: the default template version.
     *   Latest: the latest template version.
     *
     * @example Default
     *
     * @var string
     */
    public $launchTemplateVersion;

    /**
     * @description The lifecycle hooks.
     *
     * @var lifecycleHooks[]
     */
    public $lifecycleHooks;

    /**
     * @var loadBalancerConfigs[]
     */
    public $loadBalancerConfigs;

    /**
     * @description The IDs of the CLB instances that you want to associate with the scaling group. The value can be a JSON array that contains multiple CLB instance IDs. Separate multiple IDs with commas (,).
     *
     * You can associate only a limited number of CLB instances with a scaling group. Go to [Quota Center](https://quotas.console.aliyun.com/products/ess/quotas) to check the maximum number of CLB instances that you can associate with a scaling group.
     * @example ["lb-bp1u7etiogg38yvwz****", "lb-bp168cqrux9ai9l7f****", "lb-bp1jv3m9zvj22ufxp****"]
     *
     * @var string
     */
    public $loadBalancerIds;

    /**
     * @description The maximum life span of an instance in the scaling group. Unit: seconds.
     *
     * Default value: null.
     * @example null
     *
     * @var int
     */
    public $maxInstanceLifetime;

    /**
     * @description The maximum number of ECS instances that can be contained in the scaling group. If the number of ECS instances in the scaling group is greater than the value of the MaxSize parameter, Auto Scaling removes ECS instances from the scaling group to ensure that the number of ECS instances is equal to the value of the MaxSize parameter.
     *
     * The value range of the MaxSize parameter varies based on the instance quota. You can go to [Quota Center](https://quotas.console.aliyun.com/products/ess/quotas) to check the maximum number of instances that a scaling group can contain.
     *
     * For example, if the instance quota is 2,000, the value range of the **MaxSize** parameter is 0 to 2000.
     * @example 20
     *
     * @var int
     */
    public $maxSize;

    /**
     * @description The minimum number of ECS instances that must be contained in the scaling group. If the number of ECS instances in the scaling group is less than the value of the MinSize parameter, Auto Scaling adds ECS instances to the scaling group to ensure that the number of ECS instances in the scaling group is equal to the value of the MinSize parameter.
     *
     * > The value of the MinSize parameter must be less than or equal to the value of the MaxSize parameter.
     * @example 2
     *
     * @var int
     */
    public $minSize;

    /**
     * @description The scaling policy for the multi-zone scaling group that contains ECS instances. Valid values:
     *
     *   PRIORITY: scales ECS instances based on the priority of the vSwitch that is specified by the VSwitchIds parameter. Auto Scaling preferentially scales instances in the zone where the vSwitch that has the highest priority resides. If the scaling fails, Auto Scaling scales instances in the zone where the vSwitch that has the next highest priority resides.
     *
     *   COST_OPTIMIZED: scales ECS instances based on the unit price of vCPUs. Auto Scaling preferentially scales out ECS instances whose vCPUs are provided at the lowest price and scales in ECS instances whose vCPUs are provided at the highest price. If preemptible instance types are specified in the scaling configuration, Auto Scaling preferentially scales out preemptible instances. You can use the CompensateWithOnDemand parameter to specify whether to automatically create pay-as-you-go instances when preemptible instances cannot be created due to insufficient resources.
     *
     **Note** The COST_OPTIMIZED setting takes effect only when multiple instance types are specified or at least one preemptible instance type is specified.
     *
     *   BALANCE: evenly distributes ECS instances across zones that are specified for the scaling group. If ECS instances are unevenly distributed across zones due to insufficient resources, you can call the [RebalanceInstance](~~71516~~) operation to evenly redistribute the instances across the zones.
     *
     * Default value: PRIORITY.
     * @example PRIORITY
     *
     * @var string
     */
    public $multiAZPolicy;

    /**
     * @description The minimum number of pay-as-you-go instances that must be contained in the scaling group. Valid values: 0 to 1000. If the number of pay-as-you-go instances is less than the value of this parameter, Auto Scaling preferentially creates pay-as-you-go instances.
     *
     * @example 30
     *
     * @var int
     */
    public $onDemandBaseCapacity;

    /**
     * @description The percentage of pay-as-you-go instances in the excess instances when the minimum number of pay-as-you-go instances reaches the requirement. Valid values: 0 to 100.
     *
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
     * @description The region ID of the scaling group.
     *
     * @example cn-qingdao
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The instance removal policies. Valid values:
     *
     *   OldestInstance: removes ECS instances that are added at the earliest point in time to the scaling group.
     *   NewestInstance: removes ECS instances that are most recently added to the scaling group.
     *   OldestScalingConfiguration: removes ECS instances that are created based on the earliest scaling configuration.
     *   CustomPolicy: removes ECS instances based on the custom scale-in policy (Function).
     *
     * > The removal of ECS instances from a scaling group is also affected by the value of the MultiAZPolicy parameter. For more information, see the [Configure a combination policy for removing instances](~~254822~~) topic.
     * @var string[]
     */
    public $removalPolicies;

    /**
     * @description The ID of the resource group to which you want to add the scaling group.
     *
     * > If you specify this parameter, new scaling groups are added to the specified resource group. If you do not specify this parameter, new scaling groups are added to the default resource group.
     * @example rg-123******
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @description The name of the scaling group. The name of each scaling group must be unique in a region.
     *
     * If you do not specify this parameter, the value of the ScalingGroupId parameter is used.
     * @example scalinggroup****
     *
     * @var string
     */
    public $scalingGroupName;

    /**
     * @description The reclaim mode of the scaling group. Valid values:
     *
     *   recycle: economical mode.
     *   release: release mode.
     *
     * The ScalingPolicy parameter specifies the reclaim mode of the scaling group. The RemovePolicy parameter of the RemoveInstances operation specifies how to remove instances in a specific manner.
     * @example recycle
     *
     * @var string
     */
    public $scalingPolicy;

    /**
     * @description Details of the server groups.
     *
     * >  You cannot use the AlbServerGroups parameter and the ServerGroups parameter to specify the same server group.
     * @var serverGroups[]
     */
    public $serverGroups;

    /**
     * @description The allocation policy of preemptible instances. You can use this parameter to individually specify the allocation policy of preemptible instances. This parameter takes effect only if you set the `MultiAZPolicy` parameter to `COMPOSABLE`. Valid values:
     *
     *   priority: Auto Scaling selects instance types based on the specified order of the instance types to create the required number of preemptible instances.
     *   lowestPrice: Auto Scaling selects instance types that have the lowest unit price of vCPUs to create the required number of preemptible instances.
     *
     * Default value: priority.
     * @example lowestPrice
     *
     * @var string
     */
    public $spotAllocationStrategy;

    /**
     * @description The number of available instance types. Auto Scaling evenly creates preemptible instances of multiple instance types that are provided at the lowest cost in the scaling group. Valid values: 1 to 10.
     *
     * @example 5
     *
     * @var int
     */
    public $spotInstancePools;

    /**
     * @description Specifies whether to supplement preemptible instances. If you set this parameter to true, Auto Scaling creates an instance to replace a preemptible instance when Auto Scaling receives a system message which indicates that the preemptible instance is to be reclaimed.
     *
     * @example true
     *
     * @var bool
     */
    public $spotInstanceRemedy;

    /**
     * @description > This parameter is unavailable.
     *
     * @example false
     *
     * @var bool
     */
    public $syncAlarmRuleToCms;

    /**
     * @description Details of the tags that you want to add to the scaling group.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description Details of the backend vServer groups that you want to associate with the scaling group.
     *
     * @var VServerGroups[]
     */
    public $VServerGroups;

    /**
     * @description The ID of the vSwitch. If you specify the VSwitchId parameter, the network type of the scaling group is VPC.
     *
     * > If you do not specify the VSwitchId or VSwitchIds parameter, the network type of the scaling group is classic network.
     * @example vsw-bp14zolna43z266bq****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The IDs of vSwitches. If you specify the VSwitchIds parameter, the VSwitchId parameter is ignored. If you specify the VSwitchIds parameter, the network type of the scaling group is VPC.
     *
     * If you specify multiple vSwitches, take note of the following items:
     *
     *   The vSwitches must belong to the same VPC.
     *   The vSwitches can belong to different zones.
     *   The vSwitches are sorted in ascending order of priority. The first vSwitch that is specified by the VSwitchIds parameter has the highest priority. If Auto Scaling fails to create ECS instances in the zone where the vSwitch that has the highest priority resides, Auto Scaling creates ECS instances in the zone where the vSwitch that has the next highest priority resides.
     *
     * > If you do not specify the VSwitchId or VSwitchIds parameter, the network type of the scaling group is classic network.
     * @var string[]
     */
    public $vSwitchIds;
    protected $_name = [
        'albServerGroups'                     => 'AlbServerGroups',
        'allocationStrategy'                  => 'AllocationStrategy',
        'azBalance'                           => 'AzBalance',
        'clientToken'                         => 'ClientToken',
        'compensateWithOnDemand'              => 'CompensateWithOnDemand',
        'containerGroupId'                    => 'ContainerGroupId',
        'customPolicyARN'                     => 'CustomPolicyARN',
        'DBInstanceIds'                       => 'DBInstanceIds',
        'defaultCooldown'                     => 'DefaultCooldown',
        'desiredCapacity'                     => 'DesiredCapacity',
        'groupDeletionProtection'             => 'GroupDeletionProtection',
        'groupType'                           => 'GroupType',
        'healthCheckType'                     => 'HealthCheckType',
        'healthCheckTypes'                    => 'HealthCheckTypes',
        'instanceId'                          => 'InstanceId',
        'launchTemplateId'                    => 'LaunchTemplateId',
        'launchTemplateOverrides'             => 'LaunchTemplateOverrides',
        'launchTemplateVersion'               => 'LaunchTemplateVersion',
        'lifecycleHooks'                      => 'LifecycleHooks',
        'loadBalancerConfigs'                 => 'LoadBalancerConfigs',
        'loadBalancerIds'                     => 'LoadBalancerIds',
        'maxInstanceLifetime'                 => 'MaxInstanceLifetime',
        'maxSize'                             => 'MaxSize',
        'minSize'                             => 'MinSize',
        'multiAZPolicy'                       => 'MultiAZPolicy',
        'onDemandBaseCapacity'                => 'OnDemandBaseCapacity',
        'onDemandPercentageAboveBaseCapacity' => 'OnDemandPercentageAboveBaseCapacity',
        'ownerAccount'                        => 'OwnerAccount',
        'ownerId'                             => 'OwnerId',
        'regionId'                            => 'RegionId',
        'removalPolicies'                     => 'RemovalPolicies',
        'resourceGroupId'                     => 'ResourceGroupId',
        'resourceOwnerAccount'                => 'ResourceOwnerAccount',
        'scalingGroupName'                    => 'ScalingGroupName',
        'scalingPolicy'                       => 'ScalingPolicy',
        'serverGroups'                        => 'ServerGroups',
        'spotAllocationStrategy'              => 'SpotAllocationStrategy',
        'spotInstancePools'                   => 'SpotInstancePools',
        'spotInstanceRemedy'                  => 'SpotInstanceRemedy',
        'syncAlarmRuleToCms'                  => 'SyncAlarmRuleToCms',
        'tags'                                => 'Tags',
        'VServerGroups'                       => 'VServerGroups',
        'vSwitchId'                           => 'VSwitchId',
        'vSwitchIds'                          => 'VSwitchIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->albServerGroups) {
            $res['AlbServerGroups'] = [];
            if (null !== $this->albServerGroups && \is_array($this->albServerGroups)) {
                $n = 0;
                foreach ($this->albServerGroups as $item) {
                    $res['AlbServerGroups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->allocationStrategy) {
            $res['AllocationStrategy'] = $this->allocationStrategy;
        }
        if (null !== $this->azBalance) {
            $res['AzBalance'] = $this->azBalance;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->compensateWithOnDemand) {
            $res['CompensateWithOnDemand'] = $this->compensateWithOnDemand;
        }
        if (null !== $this->containerGroupId) {
            $res['ContainerGroupId'] = $this->containerGroupId;
        }
        if (null !== $this->customPolicyARN) {
            $res['CustomPolicyARN'] = $this->customPolicyARN;
        }
        if (null !== $this->DBInstanceIds) {
            $res['DBInstanceIds'] = $this->DBInstanceIds;
        }
        if (null !== $this->defaultCooldown) {
            $res['DefaultCooldown'] = $this->defaultCooldown;
        }
        if (null !== $this->desiredCapacity) {
            $res['DesiredCapacity'] = $this->desiredCapacity;
        }
        if (null !== $this->groupDeletionProtection) {
            $res['GroupDeletionProtection'] = $this->groupDeletionProtection;
        }
        if (null !== $this->groupType) {
            $res['GroupType'] = $this->groupType;
        }
        if (null !== $this->healthCheckType) {
            $res['HealthCheckType'] = $this->healthCheckType;
        }
        if (null !== $this->healthCheckTypes) {
            $res['HealthCheckTypes'] = $this->healthCheckTypes;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (null !== $this->lifecycleHooks) {
            $res['LifecycleHooks'] = [];
            if (null !== $this->lifecycleHooks && \is_array($this->lifecycleHooks)) {
                $n = 0;
                foreach ($this->lifecycleHooks as $item) {
                    $res['LifecycleHooks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->loadBalancerConfigs) {
            $res['LoadBalancerConfigs'] = [];
            if (null !== $this->loadBalancerConfigs && \is_array($this->loadBalancerConfigs)) {
                $n = 0;
                foreach ($this->loadBalancerConfigs as $item) {
                    $res['LoadBalancerConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->loadBalancerIds) {
            $res['LoadBalancerIds'] = $this->loadBalancerIds;
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->removalPolicies) {
            $res['RemovalPolicies'] = $this->removalPolicies;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->scalingGroupName) {
            $res['ScalingGroupName'] = $this->scalingGroupName;
        }
        if (null !== $this->scalingPolicy) {
            $res['ScalingPolicy'] = $this->scalingPolicy;
        }
        if (null !== $this->serverGroups) {
            $res['ServerGroups'] = [];
            if (null !== $this->serverGroups && \is_array($this->serverGroups)) {
                $n = 0;
                foreach ($this->serverGroups as $item) {
                    $res['ServerGroups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->syncAlarmRuleToCms) {
            $res['SyncAlarmRuleToCms'] = $this->syncAlarmRuleToCms;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->VServerGroups) {
            $res['VServerGroups'] = [];
            if (null !== $this->VServerGroups && \is_array($this->VServerGroups)) {
                $n = 0;
                foreach ($this->VServerGroups as $item) {
                    $res['VServerGroups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vSwitchIds) {
            $res['VSwitchIds'] = $this->vSwitchIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateScalingGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlbServerGroups'])) {
            if (!empty($map['AlbServerGroups'])) {
                $model->albServerGroups = [];
                $n                      = 0;
                foreach ($map['AlbServerGroups'] as $item) {
                    $model->albServerGroups[$n++] = null !== $item ? albServerGroups::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AllocationStrategy'])) {
            $model->allocationStrategy = $map['AllocationStrategy'];
        }
        if (isset($map['AzBalance'])) {
            $model->azBalance = $map['AzBalance'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['CompensateWithOnDemand'])) {
            $model->compensateWithOnDemand = $map['CompensateWithOnDemand'];
        }
        if (isset($map['ContainerGroupId'])) {
            $model->containerGroupId = $map['ContainerGroupId'];
        }
        if (isset($map['CustomPolicyARN'])) {
            $model->customPolicyARN = $map['CustomPolicyARN'];
        }
        if (isset($map['DBInstanceIds'])) {
            $model->DBInstanceIds = $map['DBInstanceIds'];
        }
        if (isset($map['DefaultCooldown'])) {
            $model->defaultCooldown = $map['DefaultCooldown'];
        }
        if (isset($map['DesiredCapacity'])) {
            $model->desiredCapacity = $map['DesiredCapacity'];
        }
        if (isset($map['GroupDeletionProtection'])) {
            $model->groupDeletionProtection = $map['GroupDeletionProtection'];
        }
        if (isset($map['GroupType'])) {
            $model->groupType = $map['GroupType'];
        }
        if (isset($map['HealthCheckType'])) {
            $model->healthCheckType = $map['HealthCheckType'];
        }
        if (isset($map['HealthCheckTypes'])) {
            if (!empty($map['HealthCheckTypes'])) {
                $model->healthCheckTypes = $map['HealthCheckTypes'];
            }
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
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
        if (isset($map['LifecycleHooks'])) {
            if (!empty($map['LifecycleHooks'])) {
                $model->lifecycleHooks = [];
                $n                     = 0;
                foreach ($map['LifecycleHooks'] as $item) {
                    $model->lifecycleHooks[$n++] = null !== $item ? lifecycleHooks::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['LoadBalancerConfigs'])) {
            if (!empty($map['LoadBalancerConfigs'])) {
                $model->loadBalancerConfigs = [];
                $n                          = 0;
                foreach ($map['LoadBalancerConfigs'] as $item) {
                    $model->loadBalancerConfigs[$n++] = null !== $item ? loadBalancerConfigs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['LoadBalancerIds'])) {
            $model->loadBalancerIds = $map['LoadBalancerIds'];
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RemovalPolicies'])) {
            if (!empty($map['RemovalPolicies'])) {
                $model->removalPolicies = $map['RemovalPolicies'];
            }
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ScalingGroupName'])) {
            $model->scalingGroupName = $map['ScalingGroupName'];
        }
        if (isset($map['ScalingPolicy'])) {
            $model->scalingPolicy = $map['ScalingPolicy'];
        }
        if (isset($map['ServerGroups'])) {
            if (!empty($map['ServerGroups'])) {
                $model->serverGroups = [];
                $n                   = 0;
                foreach ($map['ServerGroups'] as $item) {
                    $model->serverGroups[$n++] = null !== $item ? serverGroups::fromMap($item) : $item;
                }
            }
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
        if (isset($map['SyncAlarmRuleToCms'])) {
            $model->syncAlarmRuleToCms = $map['SyncAlarmRuleToCms'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VServerGroups'])) {
            if (!empty($map['VServerGroups'])) {
                $model->VServerGroups = [];
                $n                    = 0;
                foreach ($map['VServerGroups'] as $item) {
                    $model->VServerGroups[$n++] = null !== $item ? VServerGroups::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VSwitchIds'])) {
            if (!empty($map['VSwitchIds'])) {
                $model->vSwitchIds = $map['VSwitchIds'];
            }
        }

        return $model;
    }
}
