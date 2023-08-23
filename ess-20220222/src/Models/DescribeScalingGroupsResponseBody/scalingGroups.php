<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingGroupsResponseBody;

use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingGroupsResponseBody\scalingGroups\albServerGroups;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingGroupsResponseBody\scalingGroups\launchTemplateOverrides;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingGroupsResponseBody\scalingGroups\loadBalancerConfigs;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingGroupsResponseBody\scalingGroups\serverGroups;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingGroupsResponseBody\scalingGroups\VServerGroups;
use AlibabaCloud\Tea\Model;

class scalingGroups extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $activeCapacity;

    /**
     * @example asc-bp1et2qekq3ojr33****
     *
     * @var string
     */
    public $activeScalingConfigurationId;

    /**
     * @var albServerGroups[]
     */
    public $albServerGroups;

    /**
     * @example priority
     *
     * @var string
     */
    public $allocationStrategy;

    /**
     * @example false
     *
     * @var bool
     */
    public $azBalance;

    /**
     * @example true
     *
     * @var bool
     */
    public $compensateWithOnDemand;

    /**
     * @example 2014-08-14T10:58Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @example hostname
     *
     * @var string
     */
    public $currentHostName;

    /**
     * @example acs:fc:cn-zhangjiakou:16145688****:services/ess_custom_terminate_policy.LATEST/functions/ess_custom_terminate_policy_name
     *
     * @var string
     */
    public $customPolicyARN;

    /**
     * @var string[]
     */
    public $DBInstanceIds;

    /**
     * @example 60
     *
     * @var int
     */
    public $defaultCooldown;

    /**
     * @example 5
     *
     * @var int
     */
    public $desiredCapacity;

    /**
     * @var bool
     */
    public $enableDesiredCapacity;

    /**
     * @example true
     *
     * @var bool
     */
    public $groupDeletionProtection;

    /**
     * @example ECS
     *
     * @var string
     */
    public $groupType;

    /**
     * @example ECS
     *
     * @var string
     */
    public $healthCheckType;

    /**
     * @example 0
     *
     * @var int
     */
    public $initCapacity;

    /**
     * @example false
     *
     * @var bool
     */
    public $isElasticStrengthInAlarm;

    /**
     * @example lt-m5e3ofjr1zn1aw7****
     *
     * @var string
     */
    public $launchTemplateId;

    /**
     * @var launchTemplateOverrides[]
     */
    public $launchTemplateOverrides;

    /**
     * @example Default
     *
     * @var string
     */
    public $launchTemplateVersion;

    /**
     * @example Active
     *
     * @var string
     */
    public $lifecycleState;

    /**
     * @var loadBalancerConfigs[]
     */
    public $loadBalancerConfigs;

    /**
     * @var string[]
     */
    public $loadBalancerIds;

    /**
     * @example null
     *
     * @var int
     */
    public $maxInstanceLifetime;

    /**
     * @example 2
     *
     * @var int
     */
    public $maxSize;

    /**
     * @example 1
     *
     * @var int
     */
    public $minSize;

    /**
     * @example 2014-08-14T10:58Z
     *
     * @var string
     */
    public $modificationTime;

    /**
     * @example 1497****
     *
     * @var string
     */
    public $monitorGroupId;

    /**
     * @example PRIORITY
     *
     * @var string
     */
    public $multiAZPolicy;

    /**
     * @example 30
     *
     * @var int
     */
    public $onDemandBaseCapacity;

    /**
     * @example 20
     *
     * @var int
     */
    public $onDemandPercentageAboveBaseCapacity;

    /**
     * @example 0
     *
     * @var int
     */
    public $pendingCapacity;

    /**
     * @example 1
     *
     * @var int
     */
    public $pendingWaitCapacity;

    /**
     * @example 1
     *
     * @var int
     */
    public $protectedCapacity;

    /**
     * @example cn-qingdao
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string[]
     */
    public $removalPolicies;

    /**
     * @example 0
     *
     * @var int
     */
    public $removingCapacity;

    /**
     * @example 1
     *
     * @var int
     */
    public $removingWaitCapacity;

    /**
     * @example rg-123****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example asg-bp14wlu85wrpchm0****
     *
     * @var string
     */
    public $scalingGroupId;

    /**
     * @example dyrSuvBOtO1dEdIlIbp****
     *
     * @var string
     */
    public $scalingGroupName;

    /**
     * @example recycle
     *
     * @var string
     */
    public $scalingPolicy;

    /**
     * @var serverGroups[]
     */
    public $serverGroups;

    /**
     * @example lowestPrice
     *
     * @var string
     */
    public $spotAllocationStrategy;

    /**
     * @example 5
     *
     * @var int
     */
    public $spotInstancePools;

    /**
     * @example true
     *
     * @var bool
     */
    public $spotInstanceRemedy;

    /**
     * @example 1
     *
     * @var int
     */
    public $standbyCapacity;

    /**
     * @example 1
     *
     * @var int
     */
    public $stoppedCapacity;

    /**
     * @var string[]
     */
    public $suspendedProcesses;

    /**
     * @example true
     *
     * @var bool
     */
    public $systemSuspended;

    /**
     * @example 1
     *
     * @var int
     */
    public $totalCapacity;

    /**
     * @example 1
     *
     * @var int
     */
    public $totalInstanceCount;

    /**
     * @var VServerGroups[]
     */
    public $VServerGroups;

    /**
     * @example vsw-bp1whw2u46cn8zubm****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string[]
     */
    public $vSwitchIds;

    /**
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
        'compensateWithOnDemand'              => 'CompensateWithOnDemand',
        'creationTime'                        => 'CreationTime',
        'currentHostName'                     => 'CurrentHostName',
        'customPolicyARN'                     => 'CustomPolicyARN',
        'DBInstanceIds'                       => 'DBInstanceIds',
        'defaultCooldown'                     => 'DefaultCooldown',
        'desiredCapacity'                     => 'DesiredCapacity',
        'enableDesiredCapacity'               => 'EnableDesiredCapacity',
        'groupDeletionProtection'             => 'GroupDeletionProtection',
        'groupType'                           => 'GroupType',
        'healthCheckType'                     => 'HealthCheckType',
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
        'spotInstancePools'                   => 'SpotInstancePools',
        'spotInstanceRemedy'                  => 'SpotInstanceRemedy',
        'standbyCapacity'                     => 'StandbyCapacity',
        'stoppedCapacity'                     => 'StoppedCapacity',
        'suspendedProcesses'                  => 'SuspendedProcesses',
        'systemSuspended'                     => 'SystemSuspended',
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
        if (null !== $this->spotInstancePools) {
            $res['SpotInstancePools'] = $this->spotInstancePools;
        }
        if (null !== $this->spotInstanceRemedy) {
            $res['SpotInstanceRemedy'] = $this->spotInstanceRemedy;
        }
        if (null !== $this->standbyCapacity) {
            $res['StandbyCapacity'] = $this->standbyCapacity;
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
        if (isset($map['SpotInstancePools'])) {
            $model->spotInstancePools = $map['SpotInstancePools'];
        }
        if (isset($map['SpotInstanceRemedy'])) {
            $model->spotInstanceRemedy = $map['SpotInstanceRemedy'];
        }
        if (isset($map['StandbyCapacity'])) {
            $model->standbyCapacity = $map['StandbyCapacity'];
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
