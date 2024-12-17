<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingGroupsResponseBody;

use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingGroupsResponseBody\scalingGroups\albServerGroups;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingGroupsResponseBody\scalingGroups\capacityOptions;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingGroupsResponseBody\scalingGroups\DBInstances;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingGroupsResponseBody\scalingGroups\launchTemplateOverrides;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingGroupsResponseBody\scalingGroups\loadBalancerConfigs;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingGroupsResponseBody\scalingGroups\serverGroups;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingGroupsResponseBody\scalingGroups\tags;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingGroupsResponseBody\scalingGroups\VServerGroups;
use AlibabaCloud\Tea\Model;

class scalingGroups extends Model
{
    /**
     * @description The number of ECS instances that are in the In Service state in the scaling group.
     *
     * @example 1
     *
     * @var int
     */
    public $activeCapacity;

    /**
     * @description The ID of the active scaling configuration in the scaling group.
     *
     * @example asc-bp1et2qekq3ojr33****
     *
     * @var string
     */
    public $activeScalingConfigurationId;

    /**
     * @description The Application Load Balancer (ALB) server groups.
     *
     * @var albServerGroups[]
     */
    public $albServerGroups;

    /**
     * @description The instance allocation policy. Auto Scaling selects instance types based on the allocation policy to create the required number of preemptible instances. The policy is suitable for pay-as-you-go instances and preemptible instances. This parameter takes effect only if you set `MultiAZPolicy` to `COMPOSABLE`. Valid values:
     *
     *   priority: Auto Scaling adopts the predefined instance type sequence to create the required number of preemptible instances.
     *   lowestPrice: Auto Scaling selects instance types that have the most economical vCPU pricing to create the required number of instances.
     *
     * @example priority
     *
     * @var string
     */
    public $allocationStrategy;

    /**
     * @description Indicates whether instances in the scaling group are evenly distributed across the specified zones. This parameter takes effect only if you set `MultiAZPolicy` to `COMPOSABLE`. Valid values:
     *
     *   true
     *   false
     *
     * @example false
     *
     * @var bool
     */
    public $azBalance;

    /**
     * @description The capacity options.
     *
     * @var capacityOptions
     */
    public $capacityOptions;

    /**
     * @description Indicates whether Auto Scaling can create pay-as-you-go instances to supplement preemptible instances if preemptible instances cannot be created due to price-related factors or insufficient inventory when MultiAZPolicy is set to COST_OPTIMIZED. Valid values:
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
     * @description The time when the scaling group was created.
     *
     * @example 2014-08-14T10:58Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description >  This parameter is unavailable.
     *
     * @example hostname
     *
     * @var string
     */
    public $currentHostName;

    /**
     * @description The Alibaba Cloud Resource Name (ARN) of the function that is specified in the custom scale-in policy. This parameter takes effect only if you set the first value of RemovalPolicies to CustomPolicy.
     *
     * @example acs:fc:cn-zhangjiakou:16145688****:services/ess_custom_terminate_policy.LATEST/functions/ess_custom_terminate_policy_name
     *
     * @var string
     */
    public $customPolicyARN;

    /**
     * @description The IDs of the ApsaraDB RDS instances that are attached to the scaling group.
     *
     * @var string[]
     */
    public $DBInstanceIds;

    /**
     * @description The databases that are attached to the scaling group.
     *
     * @var DBInstances[]
     */
    public $DBInstances;

    /**
     * @description The cooldown period of the scaling group. During the cooldown period, Auto Scaling does not execute the scaling activities that are triggered by [CloudMonitor](https://help.aliyun.com/document_detail/35170.html) event-triggered tasks.
     *
     * @example 60
     *
     * @var int
     */
    public $defaultCooldown;

    /**
     * @description The expected number of ECS instances in the scaling group. Auto Scaling automatically maintains the expected number of ECS instances.
     *
     * @example 5
     *
     * @var int
     */
    public $desiredCapacity;

    /**
     * @description Indicates whether the Expected Number of Instances feature is enabled. Valid values:
     *
     *   true
     *   false
     *
     * @example false
     *
     * @var bool
     */
    public $enableDesiredCapacity;

    /**
     * @description Indicates whether the Deletion Protection feature is enabled for the scaling group. Valid values:
     *
     *   true: The Deletion Protection feature is enabled for the scaling group. The scaling group cannot be deleted.
     *   false: The Deletion Protection feature is disabled for the scaling group.
     *
     * @example true
     *
     * @var bool
     */
    public $groupDeletionProtection;

    /**
     * @description The type of instances that are managed by the scaling group.
     *
     * @example ECS
     *
     * @var string
     */
    public $groupType;

    /**
     * @description The health check mode of the scaling group. Valid values:
     *
     *   NONE: Auto Scaling does not perform health checks.
     *   ECS: Auto Scaling checks the health status of instances in the scaling group. If you want to enable instance health check, you can set the value to ECS, regardless of whether the scaling group is of ECS type or Elastic Container Instance type.
     *   LOAD_BALANCER: Auto Scaling checks the health status of instances in the scaling group based on the health check results of load balancers. The health check results of Classic Load Balancer (CLB) instances are not supported as the health check basis for instances in the scaling group.
     *
     * @example ECS
     *
     * @var string
     */
    public $healthCheckType;

    /**
     * @description The health check mode of the scaling group. Valid values:
     *
     *   NONE: Auto Scaling does not perform health checks.
     *   ECS: Auto Scaling checks the health status of instances in the scaling group. If you want to enable instance health check, you can set the value to ECS, regardless of whether the scaling group is of ECS type or Elastic Container Instance type.
     *   LOAD_BALANCER: Auto Scaling checks the health status of instances in the scaling group based on the health check results of load balancers. The health check results of CLB instances are not supported as the health check basis for instances in the scaling group.
     *
     * @var string[]
     */
    public $healthCheckTypes;

    /**
     * @description The number of instances that are initialized before they are added into the scaling group.
     *
     * @example 0
     *
     * @var int
     */
    public $initCapacity;

    /**
     * @description >  This parameter is not available for use.
     *
     * @example false
     *
     * @var bool
     */
    public $isElasticStrengthInAlarm;

    /**
     * @description The ID of the launch template that is used by the scaling group.
     *
     * @example lt-m5e3ofjr1zn1aw7****
     *
     * @var string
     */
    public $launchTemplateId;

    /**
     * @description The instance types that are extended in the launch template.
     *
     * @var launchTemplateOverrides[]
     */
    public $launchTemplateOverrides;

    /**
     * @description The version of the launch template that is used by the scaling group.
     *
     * @example Default
     *
     * @var string
     */
    public $launchTemplateVersion;

    /**
     * @description The status of the scaling group. Valid values:
     *
     *   Active: The scaling group is active. Active scaling groups can receive requests to execute scaling rules and trigger scaling activities.
     *   Inactive: The scaling group is in the Disabled state. Disabled scaling groups cannot receive requests to execute scaling rules.
     *   Deleting: The scaling group is being deleted. Scaling groups that are being deleted cannot receive requests to execute scaling rules, and the parameter settings of the scaling groups cannot be modified.
     *
     * @example Active
     *
     * @var string
     */
    public $lifecycleState;

    /**
     * @description The load balancer configurations.
     *
     * @var loadBalancerConfigs[]
     */
    public $loadBalancerConfigs;

    /**
     * @description The IDs of the load balancers that are attached to the scaling group.
     *
     * @var string[]
     */
    public $loadBalancerIds;

    /**
     * @description The maximum life span of each ECS instance in the scaling group. Unit: seconds.
     *
     * >  This parameter is not supported by scaling groups of the Elastic Container Instance type and scaling groups whose ScalingPolicy is set to Recycle.
     * @example null
     *
     * @var int
     */
    public $maxInstanceLifetime;

    /**
     * @description The maximum number of ECS instances that can be contained in the scaling group.
     *
     * @example 2
     *
     * @var int
     */
    public $maxSize;

    /**
     * @description The minimum number of ECS instances that must be contained in the scaling group.
     *
     * @example 1
     *
     * @var int
     */
    public $minSize;

    /**
     * @description The time when the scaling group was last modified.
     *
     * @example 2014-08-14T10:58Z
     *
     * @var string
     */
    public $modificationTime;

    /**
     * @description The ID of the CloudMonitor application group that is associated with the scaling group.
     *
     * @example 1497****
     *
     * @var string
     */
    public $monitorGroupId;

    /**
     * @description The scaling policy of the ECS instances in the multi-zone scaling group. Valid values:
     *
     *   PRIORITY: ECS instances are created based on the value of VSwitchIds. If Auto Scaling cannot create ECS instances in the zone where the vSwitch of the highest priority resides, Auto Scaling creates ECS instances in the zone where the vSwitch of the next highest priority resides.
     *
     *   COST_OPTIMIZED: ECS instances are created based on the unit prices of their vCPUs. Auto Scaling preferentially creates ECS instances whose vCPUs are provided at the lowest price. If preemptible instance types are specified in the scaling configuration, Auto Scaling preferentially creates preemptible instances. You can also specify CompensateWithOnDemand to allow Auto Scaling to create pay-as-you-go instances if preemptible instances cannot be created due to limited stock.
     *
     **
     *
     **Note** The COST_OPTIMIZED setting takes effect only if your scaling configuration contains multiple instance types or contains preemptible instance types.
     *
     *   BALANCE: ECS instances are evenly distributed across the zones that are specified for the scaling group. If ECS instances become unevenly distributed across the specified zones due to limited instance type availability, you can call the RebalanceInstance operation to balance the distribution of the ECS instances.
     *
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
     * @description The percentage of pay-as-you-go instances in excess when the minimum number of pay-as-you-go instances reaches the threshold. Valid values: 0 to 100.
     *
     * @example 20
     *
     * @var int
     */
    public $onDemandPercentageAboveBaseCapacity;

    /**
     * @description The number of ECS instances that are being added to the scaling group and configured.
     *
     * @example 0
     *
     * @var int
     */
    public $pendingCapacity;

    /**
     * @description The number of ECS instances that are in the Pending Add state in the scaling group.
     *
     * @example 1
     *
     * @var int
     */
    public $pendingWaitCapacity;

    /**
     * @description The number of ECS instances that are in the Protected state in the scaling group.
     *
     * @example 1
     *
     * @var int
     */
    public $protectedCapacity;

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
     *   OldestInstance: Auto Scaling removes ECS instances that are added at the earliest point in time to the scaling group.
     *   NewestInstance: Auto Scaling removes ECS instances that are most recently added to the scaling group.
     *   OldestScalingConfiguration: Auto Scaling removes ECS instances that are created from the earliest scaling configuration.
     *
     * @var string[]
     */
    public $removalPolicies;

    /**
     * @description The number of ECS instances that are being removed from the scaling group.
     *
     * @example 0
     *
     * @var int
     */
    public $removingCapacity;

    /**
     * @description The number of ECS instances that are in the Pending Remove state in the scaling group.
     *
     * @example 1
     *
     * @var int
     */
    public $removingWaitCapacity;

    /**
     * @description The ID of the resource group to which the scaling group belongs.
     *
     * @example rg-123****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The ID of the scaling group.
     *
     * @example asg-bp14wlu85wrpchm0****
     *
     * @var string
     */
    public $scalingGroupId;

    /**
     * @description The name of the scaling group.
     *
     * @example dyrSuvBOtO1dEdIlIbp****
     *
     * @var string
     */
    public $scalingGroupName;

    /**
     * @description The instance reclaim mode of the scaling group. Valid values:
     *
     *   recycle: economical mode.
     *   release: release mode.
     *   forcerelease: forced release mode.
     *
     * For more information, see [RemoveInstances](https://help.aliyun.com/document_detail/25955.html).
     * @example recycle
     *
     * @var string
     */
    public $scalingPolicy;

    /**
     * @description The server groups.
     *
     * >  You can use this parameter to obtain information about ALB server groups and Network Load Balancer (NLB) server groups attached to the scaling group.
     * @var serverGroups[]
     */
    public $serverGroups;

    /**
     * @description The allocation policy of preemptible instances. This parameter indicates the manner in which Auto Scaling selects instance types to create the required number of preemptible instances. This parameter takes effect only if you set `MultiAZPolicy` to `COMPOSABLE`. Valid values:
     *
     *   priority: Auto Scaling adopts the predefined instance type sequence to create the required number of preemptible instances.
     *   lowestPrice: Auto Scaling selects instance types that have the most economical vCPU pricing to create the required number of preemptible instances.
     *
     * Default value: priority.
     * @example lowestPrice
     *
     * @var string
     */
    public $spotAllocationStrategy;

    /**
     * @description The number of preemptible instances in the scaling group.
     *
     * @example 0
     *
     * @var int
     */
    public $spotCapacity;

    /**
     * @description The number of instance types in the scaling group. Auto Scaling evenly creates preemptible instances of multiple instance types that are provided at the lowest price across the zones of the scaling group. Valid values: 0 to 10.
     *
     * @example 5
     *
     * @var int
     */
    public $spotInstancePools;

    /**
     * @description Indicates whether preemptible instances can be supplemented. If this parameter is set to true, Auto Scaling proactively creates instances to replace the preemptible instances for reclamation when Auto Scaling receives a system notification.
     *
     * @example true
     *
     * @var bool
     */
    public $spotInstanceRemedy;

    /**
     * @description The number of ECS instances that are in the Standby state in the scaling group.
     *
     * @example 1
     *
     * @var int
     */
    public $standbyCapacity;

    /**
     * @description The period of time that is required by the Elastic Compute Service (ECS) instance to enter the Stopped state during the scale-in process. Unit: seconds.
     *
     * @example 60
     *
     * @var int
     */
    public $stopInstanceTimeout;

    /**
     * @description The number of instances that was stopped in Economical Mode in the scaling group.
     *
     * @example 1
     *
     * @var int
     */
    public $stoppedCapacity;

    /**
     * @description The processes that are suspended. If no process is suspended, null is returned. Valid values:
     *
     *   ScaleIn: scale-in processes.
     *   ScaleOut: scale-out processes.
     *   HealthCheck: health check processes.
     *   AlarmNotification: event-triggered task processes.
     *   ScheduledAction: scheduled task processes.
     *
     * @var string[]
     */
    public $suspendedProcesses;

    /**
     * @description Indicates whether Auto Scaling stops executing scaling activities in the scaling group. Valid values:
     *
     *   true: Auto Scaling stops executing scaling activities in the scaling group if the scaling activities failed for more than seven consecutive days in the scaling group. In this case, you must modify the scaling group or scaling configuration to resume the scaling activities.
     *   false: Auto Scaling does not stop executing scaling activities in the scaling group.
     *
     * @example true
     *
     * @var bool
     */
    public $systemSuspended;

    /**
     * @description The tags of the scaling group.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The total weighted capacity of all ECS instances in the scaling group if Weighted is specified. In other cases, this parameter specifies the total number of ECS instances in the scaling group.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCapacity;

    /**
     * @description The total number of ECS instances in the scaling group.
     *
     * @example 1
     *
     * @var int
     */
    public $totalInstanceCount;

    /**
     * @description The backend vServer groups.
     *
     * @var VServerGroups[]
     */
    public $VServerGroups;

    /**
     * @description The vSwitch ID of the scaling group.
     *
     * @example vsw-bp1whw2u46cn8zubm****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The IDs of the vSwitches that are associated with the scaling group. If you specify VSwitchIds, VSwitchId is ignored.
     *
     * @var string[]
     */
    public $vSwitchIds;

    /**
     * @description The ID of the virtual private cloud (VPC) in which the scaling group resides.
     *
     * @example vpc-bp1vwnn14rqpyiczj****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'activeCapacity'                      => 'ActiveCapacity',
        'activeScalingConfigurationId'        => 'ActiveScalingConfigurationId',
        'albServerGroups'                     => 'AlbServerGroups',
        'allocationStrategy'                  => 'AllocationStrategy',
        'azBalance'                           => 'AzBalance',
        'capacityOptions'                     => 'CapacityOptions',
        'compensateWithOnDemand'              => 'CompensateWithOnDemand',
        'creationTime'                        => 'CreationTime',
        'currentHostName'                     => 'CurrentHostName',
        'customPolicyARN'                     => 'CustomPolicyARN',
        'DBInstanceIds'                       => 'DBInstanceIds',
        'DBInstances'                         => 'DBInstances',
        'defaultCooldown'                     => 'DefaultCooldown',
        'desiredCapacity'                     => 'DesiredCapacity',
        'enableDesiredCapacity'               => 'EnableDesiredCapacity',
        'groupDeletionProtection'             => 'GroupDeletionProtection',
        'groupType'                           => 'GroupType',
        'healthCheckType'                     => 'HealthCheckType',
        'healthCheckTypes'                    => 'HealthCheckTypes',
        'initCapacity'                        => 'InitCapacity',
        'isElasticStrengthInAlarm'            => 'IsElasticStrengthInAlarm',
        'launchTemplateId'                    => 'LaunchTemplateId',
        'launchTemplateOverrides'             => 'LaunchTemplateOverrides',
        'launchTemplateVersion'               => 'LaunchTemplateVersion',
        'lifecycleState'                      => 'LifecycleState',
        'loadBalancerConfigs'                 => 'LoadBalancerConfigs',
        'loadBalancerIds'                     => 'LoadBalancerIds',
        'maxInstanceLifetime'                 => 'MaxInstanceLifetime',
        'maxSize'                             => 'MaxSize',
        'minSize'                             => 'MinSize',
        'modificationTime'                    => 'ModificationTime',
        'monitorGroupId'                      => 'MonitorGroupId',
        'multiAZPolicy'                       => 'MultiAZPolicy',
        'onDemandBaseCapacity'                => 'OnDemandBaseCapacity',
        'onDemandPercentageAboveBaseCapacity' => 'OnDemandPercentageAboveBaseCapacity',
        'pendingCapacity'                     => 'PendingCapacity',
        'pendingWaitCapacity'                 => 'PendingWaitCapacity',
        'protectedCapacity'                   => 'ProtectedCapacity',
        'regionId'                            => 'RegionId',
        'removalPolicies'                     => 'RemovalPolicies',
        'removingCapacity'                    => 'RemovingCapacity',
        'removingWaitCapacity'                => 'RemovingWaitCapacity',
        'resourceGroupId'                     => 'ResourceGroupId',
        'scalingGroupId'                      => 'ScalingGroupId',
        'scalingGroupName'                    => 'ScalingGroupName',
        'scalingPolicy'                       => 'ScalingPolicy',
        'serverGroups'                        => 'ServerGroups',
        'spotAllocationStrategy'              => 'SpotAllocationStrategy',
        'spotCapacity'                        => 'SpotCapacity',
        'spotInstancePools'                   => 'SpotInstancePools',
        'spotInstanceRemedy'                  => 'SpotInstanceRemedy',
        'standbyCapacity'                     => 'StandbyCapacity',
        'stopInstanceTimeout'                 => 'StopInstanceTimeout',
        'stoppedCapacity'                     => 'StoppedCapacity',
        'suspendedProcesses'                  => 'SuspendedProcesses',
        'systemSuspended'                     => 'SystemSuspended',
        'tags'                                => 'Tags',
        'totalCapacity'                       => 'TotalCapacity',
        'totalInstanceCount'                  => 'TotalInstanceCount',
        'VServerGroups'                       => 'VServerGroups',
        'vSwitchId'                           => 'VSwitchId',
        'vSwitchIds'                          => 'VSwitchIds',
        'vpcId'                               => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activeCapacity) {
            $res['ActiveCapacity'] = $this->activeCapacity;
        }
        if (null !== $this->activeScalingConfigurationId) {
            $res['ActiveScalingConfigurationId'] = $this->activeScalingConfigurationId;
        }
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
        if (null !== $this->capacityOptions) {
            $res['CapacityOptions'] = null !== $this->capacityOptions ? $this->capacityOptions->toMap() : null;
        }
        if (null !== $this->compensateWithOnDemand) {
            $res['CompensateWithOnDemand'] = $this->compensateWithOnDemand;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->currentHostName) {
            $res['CurrentHostName'] = $this->currentHostName;
        }
        if (null !== $this->customPolicyARN) {
            $res['CustomPolicyARN'] = $this->customPolicyARN;
        }
        if (null !== $this->DBInstanceIds) {
            $res['DBInstanceIds'] = $this->DBInstanceIds;
        }
        if (null !== $this->DBInstances) {
            $res['DBInstances'] = [];
            if (null !== $this->DBInstances && \is_array($this->DBInstances)) {
                $n = 0;
                foreach ($this->DBInstances as $item) {
                    $res['DBInstances'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->defaultCooldown) {
            $res['DefaultCooldown'] = $this->defaultCooldown;
        }
        if (null !== $this->desiredCapacity) {
            $res['DesiredCapacity'] = $this->desiredCapacity;
        }
        if (null !== $this->enableDesiredCapacity) {
            $res['EnableDesiredCapacity'] = $this->enableDesiredCapacity;
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
        if (null !== $this->initCapacity) {
            $res['InitCapacity'] = $this->initCapacity;
        }
        if (null !== $this->isElasticStrengthInAlarm) {
            $res['IsElasticStrengthInAlarm'] = $this->isElasticStrengthInAlarm;
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
        if (null !== $this->lifecycleState) {
            $res['LifecycleState'] = $this->lifecycleState;
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
        if (null !== $this->modificationTime) {
            $res['ModificationTime'] = $this->modificationTime;
        }
        if (null !== $this->monitorGroupId) {
            $res['MonitorGroupId'] = $this->monitorGroupId;
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
        if (null !== $this->pendingCapacity) {
            $res['PendingCapacity'] = $this->pendingCapacity;
        }
        if (null !== $this->pendingWaitCapacity) {
            $res['PendingWaitCapacity'] = $this->pendingWaitCapacity;
        }
        if (null !== $this->protectedCapacity) {
            $res['ProtectedCapacity'] = $this->protectedCapacity;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->removalPolicies) {
            $res['RemovalPolicies'] = $this->removalPolicies;
        }
        if (null !== $this->removingCapacity) {
            $res['RemovingCapacity'] = $this->removingCapacity;
        }
        if (null !== $this->removingWaitCapacity) {
            $res['RemovingWaitCapacity'] = $this->removingWaitCapacity;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
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
        if (null !== $this->spotCapacity) {
            $res['SpotCapacity'] = $this->spotCapacity;
        }
        if (null !== $this->spotInstancePools) {
            $res['SpotInstancePools'] = $this->spotInstancePools;
        }
        if (null !== $this->spotInstanceRemedy) {
            $res['SpotInstanceRemedy'] = $this->spotInstanceRemedy;
        }
        if (null !== $this->standbyCapacity) {
            $res['StandbyCapacity'] = $this->standbyCapacity;
        }
        if (null !== $this->stopInstanceTimeout) {
            $res['StopInstanceTimeout'] = $this->stopInstanceTimeout;
        }
        if (null !== $this->stoppedCapacity) {
            $res['StoppedCapacity'] = $this->stoppedCapacity;
        }
        if (null !== $this->suspendedProcesses) {
            $res['SuspendedProcesses'] = $this->suspendedProcesses;
        }
        if (null !== $this->systemSuspended) {
            $res['SystemSuspended'] = $this->systemSuspended;
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
        if (null !== $this->totalCapacity) {
            $res['TotalCapacity'] = $this->totalCapacity;
        }
        if (null !== $this->totalInstanceCount) {
            $res['TotalInstanceCount'] = $this->totalInstanceCount;
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
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scalingGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActiveCapacity'])) {
            $model->activeCapacity = $map['ActiveCapacity'];
        }
        if (isset($map['ActiveScalingConfigurationId'])) {
            $model->activeScalingConfigurationId = $map['ActiveScalingConfigurationId'];
        }
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
        if (isset($map['CapacityOptions'])) {
            $model->capacityOptions = capacityOptions::fromMap($map['CapacityOptions']);
        }
        if (isset($map['CompensateWithOnDemand'])) {
            $model->compensateWithOnDemand = $map['CompensateWithOnDemand'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['CurrentHostName'])) {
            $model->currentHostName = $map['CurrentHostName'];
        }
        if (isset($map['CustomPolicyARN'])) {
            $model->customPolicyARN = $map['CustomPolicyARN'];
        }
        if (isset($map['DBInstanceIds'])) {
            if (!empty($map['DBInstanceIds'])) {
                $model->DBInstanceIds = $map['DBInstanceIds'];
            }
        }
        if (isset($map['DBInstances'])) {
            if (!empty($map['DBInstances'])) {
                $model->DBInstances = [];
                $n                  = 0;
                foreach ($map['DBInstances'] as $item) {
                    $model->DBInstances[$n++] = null !== $item ? DBInstances::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DefaultCooldown'])) {
            $model->defaultCooldown = $map['DefaultCooldown'];
        }
        if (isset($map['DesiredCapacity'])) {
            $model->desiredCapacity = $map['DesiredCapacity'];
        }
        if (isset($map['EnableDesiredCapacity'])) {
            $model->enableDesiredCapacity = $map['EnableDesiredCapacity'];
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
        if (isset($map['InitCapacity'])) {
            $model->initCapacity = $map['InitCapacity'];
        }
        if (isset($map['IsElasticStrengthInAlarm'])) {
            $model->isElasticStrengthInAlarm = $map['IsElasticStrengthInAlarm'];
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
        if (isset($map['LifecycleState'])) {
            $model->lifecycleState = $map['LifecycleState'];
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
            if (!empty($map['LoadBalancerIds'])) {
                $model->loadBalancerIds = $map['LoadBalancerIds'];
            }
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
        if (isset($map['ModificationTime'])) {
            $model->modificationTime = $map['ModificationTime'];
        }
        if (isset($map['MonitorGroupId'])) {
            $model->monitorGroupId = $map['MonitorGroupId'];
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
        if (isset($map['PendingCapacity'])) {
            $model->pendingCapacity = $map['PendingCapacity'];
        }
        if (isset($map['PendingWaitCapacity'])) {
            $model->pendingWaitCapacity = $map['PendingWaitCapacity'];
        }
        if (isset($map['ProtectedCapacity'])) {
            $model->protectedCapacity = $map['ProtectedCapacity'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RemovalPolicies'])) {
            if (!empty($map['RemovalPolicies'])) {
                $model->removalPolicies = $map['RemovalPolicies'];
            }
        }
        if (isset($map['RemovingCapacity'])) {
            $model->removingCapacity = $map['RemovingCapacity'];
        }
        if (isset($map['RemovingWaitCapacity'])) {
            $model->removingWaitCapacity = $map['RemovingWaitCapacity'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
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
        if (isset($map['SpotCapacity'])) {
            $model->spotCapacity = $map['SpotCapacity'];
        }
        if (isset($map['SpotInstancePools'])) {
            $model->spotInstancePools = $map['SpotInstancePools'];
        }
        if (isset($map['SpotInstanceRemedy'])) {
            $model->spotInstanceRemedy = $map['SpotInstanceRemedy'];
        }
        if (isset($map['StandbyCapacity'])) {
            $model->standbyCapacity = $map['StandbyCapacity'];
        }
        if (isset($map['StopInstanceTimeout'])) {
            $model->stopInstanceTimeout = $map['StopInstanceTimeout'];
        }
        if (isset($map['StoppedCapacity'])) {
            $model->stoppedCapacity = $map['StoppedCapacity'];
        }
        if (isset($map['SuspendedProcesses'])) {
            if (!empty($map['SuspendedProcesses'])) {
                $model->suspendedProcesses = $map['SuspendedProcesses'];
            }
        }
        if (isset($map['SystemSuspended'])) {
            $model->systemSuspended = $map['SystemSuspended'];
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
        if (isset($map['TotalCapacity'])) {
            $model->totalCapacity = $map['TotalCapacity'];
        }
        if (isset($map['TotalInstanceCount'])) {
            $model->totalInstanceCount = $map['TotalInstanceCount'];
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
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
