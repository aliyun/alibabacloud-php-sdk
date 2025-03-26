<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingGroupsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingGroupsResponseBody\scalingGroups\albServerGroups;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingGroupsResponseBody\scalingGroups\capacityOptions;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingGroupsResponseBody\scalingGroups\DBInstances;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingGroupsResponseBody\scalingGroups\launchTemplateOverrides;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingGroupsResponseBody\scalingGroups\loadBalancerConfigs;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingGroupsResponseBody\scalingGroups\serverGroups;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingGroupsResponseBody\scalingGroups\tags;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingGroupsResponseBody\scalingGroups\VServerGroups;

class scalingGroups extends Model
{
    /**
     * @var int
     */
    public $activeCapacity;

    /**
     * @var string
     */
    public $activeScalingConfigurationId;

    /**
     * @var albServerGroups[]
     */
    public $albServerGroups;

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
    public $creationTime;

    /**
     * @var string
     */
    public $currentHostName;

    /**
     * @var string
     */
    public $customPolicyARN;

    /**
     * @var string[]
     */
    public $DBInstanceIds;

    /**
     * @var DBInstances[]
     */
    public $DBInstances;

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
    public $enableDesiredCapacity;

    /**
     * @var bool
     */
    public $groupDeletionProtection;

    /**
     * @var string
     */
    public $groupType;

    /**
     * @var string
     */
    public $healthCheckType;

    /**
     * @var string[]
     */
    public $healthCheckTypes;

    /**
     * @var int
     */
    public $initCapacity;

    /**
     * @var bool
     */
    public $isElasticStrengthInAlarm;

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
    public $modificationTime;

    /**
     * @var string
     */
    public $monitorGroupId;

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
     * @var int
     */
    public $pendingCapacity;

    /**
     * @var int
     */
    public $pendingWaitCapacity;

    /**
     * @var int
     */
    public $protectedCapacity;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string[]
     */
    public $removalPolicies;

    /**
     * @var int
     */
    public $removingCapacity;

    /**
     * @var int
     */
    public $removingWaitCapacity;

    /**
     * @var string
     */
    public $resourceGroupId;

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
     * @var serverGroups[]
     */
    public $serverGroups;

    /**
     * @var string
     */
    public $spotAllocationStrategy;

    /**
     * @var int
     */
    public $spotCapacity;

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
    public $standbyCapacity;

    /**
     * @var int
     */
    public $stopInstanceTimeout;

    /**
     * @var int
     */
    public $stoppedCapacity;

    /**
     * @var string[]
     */
    public $suspendedProcesses;

    /**
     * @var bool
     */
    public $systemSuspended;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var int
     */
    public $totalCapacity;

    /**
     * @var int
     */
    public $totalInstanceCount;

    /**
     * @var VServerGroups[]
     */
    public $VServerGroups;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string[]
     */
    public $vSwitchIds;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'activeCapacity' => 'ActiveCapacity',
        'activeScalingConfigurationId' => 'ActiveScalingConfigurationId',
        'albServerGroups' => 'AlbServerGroups',
        'allocationStrategy' => 'AllocationStrategy',
        'azBalance' => 'AzBalance',
        'capacityOptions' => 'CapacityOptions',
        'compensateWithOnDemand' => 'CompensateWithOnDemand',
        'creationTime' => 'CreationTime',
        'currentHostName' => 'CurrentHostName',
        'customPolicyARN' => 'CustomPolicyARN',
        'DBInstanceIds' => 'DBInstanceIds',
        'DBInstances' => 'DBInstances',
        'defaultCooldown' => 'DefaultCooldown',
        'desiredCapacity' => 'DesiredCapacity',
        'enableDesiredCapacity' => 'EnableDesiredCapacity',
        'groupDeletionProtection' => 'GroupDeletionProtection',
        'groupType' => 'GroupType',
        'healthCheckType' => 'HealthCheckType',
        'healthCheckTypes' => 'HealthCheckTypes',
        'initCapacity' => 'InitCapacity',
        'isElasticStrengthInAlarm' => 'IsElasticStrengthInAlarm',
        'launchTemplateId' => 'LaunchTemplateId',
        'launchTemplateOverrides' => 'LaunchTemplateOverrides',
        'launchTemplateVersion' => 'LaunchTemplateVersion',
        'lifecycleState' => 'LifecycleState',
        'loadBalancerConfigs' => 'LoadBalancerConfigs',
        'loadBalancerIds' => 'LoadBalancerIds',
        'maxInstanceLifetime' => 'MaxInstanceLifetime',
        'maxSize' => 'MaxSize',
        'minSize' => 'MinSize',
        'modificationTime' => 'ModificationTime',
        'monitorGroupId' => 'MonitorGroupId',
        'multiAZPolicy' => 'MultiAZPolicy',
        'onDemandBaseCapacity' => 'OnDemandBaseCapacity',
        'onDemandPercentageAboveBaseCapacity' => 'OnDemandPercentageAboveBaseCapacity',
        'pendingCapacity' => 'PendingCapacity',
        'pendingWaitCapacity' => 'PendingWaitCapacity',
        'protectedCapacity' => 'ProtectedCapacity',
        'regionId' => 'RegionId',
        'removalPolicies' => 'RemovalPolicies',
        'removingCapacity' => 'RemovingCapacity',
        'removingWaitCapacity' => 'RemovingWaitCapacity',
        'resourceGroupId' => 'ResourceGroupId',
        'scalingGroupId' => 'ScalingGroupId',
        'scalingGroupName' => 'ScalingGroupName',
        'scalingPolicy' => 'ScalingPolicy',
        'serverGroups' => 'ServerGroups',
        'spotAllocationStrategy' => 'SpotAllocationStrategy',
        'spotCapacity' => 'SpotCapacity',
        'spotInstancePools' => 'SpotInstancePools',
        'spotInstanceRemedy' => 'SpotInstanceRemedy',
        'standbyCapacity' => 'StandbyCapacity',
        'stopInstanceTimeout' => 'StopInstanceTimeout',
        'stoppedCapacity' => 'StoppedCapacity',
        'suspendedProcesses' => 'SuspendedProcesses',
        'systemSuspended' => 'SystemSuspended',
        'tags' => 'Tags',
        'totalCapacity' => 'TotalCapacity',
        'totalInstanceCount' => 'TotalInstanceCount',
        'VServerGroups' => 'VServerGroups',
        'vSwitchId' => 'VSwitchId',
        'vSwitchIds' => 'VSwitchIds',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        if (\is_array($this->albServerGroups)) {
            Model::validateArray($this->albServerGroups);
        }
        if (null !== $this->capacityOptions) {
            $this->capacityOptions->validate();
        }
        if (\is_array($this->DBInstanceIds)) {
            Model::validateArray($this->DBInstanceIds);
        }
        if (\is_array($this->DBInstances)) {
            Model::validateArray($this->DBInstances);
        }
        if (\is_array($this->healthCheckTypes)) {
            Model::validateArray($this->healthCheckTypes);
        }
        if (\is_array($this->launchTemplateOverrides)) {
            Model::validateArray($this->launchTemplateOverrides);
        }
        if (\is_array($this->loadBalancerConfigs)) {
            Model::validateArray($this->loadBalancerConfigs);
        }
        if (\is_array($this->loadBalancerIds)) {
            Model::validateArray($this->loadBalancerIds);
        }
        if (\is_array($this->removalPolicies)) {
            Model::validateArray($this->removalPolicies);
        }
        if (\is_array($this->serverGroups)) {
            Model::validateArray($this->serverGroups);
        }
        if (\is_array($this->suspendedProcesses)) {
            Model::validateArray($this->suspendedProcesses);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        if (\is_array($this->VServerGroups)) {
            Model::validateArray($this->VServerGroups);
        }
        if (\is_array($this->vSwitchIds)) {
            Model::validateArray($this->vSwitchIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activeCapacity) {
            $res['ActiveCapacity'] = $this->activeCapacity;
        }

        if (null !== $this->activeScalingConfigurationId) {
            $res['ActiveScalingConfigurationId'] = $this->activeScalingConfigurationId;
        }

        if (null !== $this->albServerGroups) {
            if (\is_array($this->albServerGroups)) {
                $res['AlbServerGroups'] = [];
                $n1 = 0;
                foreach ($this->albServerGroups as $item1) {
                    $res['AlbServerGroups'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            $res['CapacityOptions'] = null !== $this->capacityOptions ? $this->capacityOptions->toArray($noStream) : $this->capacityOptions;
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
            if (\is_array($this->DBInstanceIds)) {
                $res['DBInstanceIds'] = [];
                $n1 = 0;
                foreach ($this->DBInstanceIds as $item1) {
                    $res['DBInstanceIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->DBInstances) {
            if (\is_array($this->DBInstances)) {
                $res['DBInstances'] = [];
                $n1 = 0;
                foreach ($this->DBInstances as $item1) {
                    $res['DBInstances'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->healthCheckTypes)) {
                $res['HealthCheckTypes'] = [];
                $n1 = 0;
                foreach ($this->healthCheckTypes as $item1) {
                    $res['HealthCheckTypes'][$n1++] = $item1;
                }
            }
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
            if (\is_array($this->launchTemplateOverrides)) {
                $res['LaunchTemplateOverrides'] = [];
                $n1 = 0;
                foreach ($this->launchTemplateOverrides as $item1) {
                    $res['LaunchTemplateOverrides'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->loadBalancerConfigs)) {
                $res['LoadBalancerConfigs'] = [];
                $n1 = 0;
                foreach ($this->loadBalancerConfigs as $item1) {
                    $res['LoadBalancerConfigs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->loadBalancerIds) {
            if (\is_array($this->loadBalancerIds)) {
                $res['LoadBalancerIds'] = [];
                $n1 = 0;
                foreach ($this->loadBalancerIds as $item1) {
                    $res['LoadBalancerIds'][$n1++] = $item1;
                }
            }
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
            if (\is_array($this->removalPolicies)) {
                $res['RemovalPolicies'] = [];
                $n1 = 0;
                foreach ($this->removalPolicies as $item1) {
                    $res['RemovalPolicies'][$n1++] = $item1;
                }
            }
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
            if (\is_array($this->serverGroups)) {
                $res['ServerGroups'] = [];
                $n1 = 0;
                foreach ($this->serverGroups as $item1) {
                    $res['ServerGroups'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->suspendedProcesses)) {
                $res['SuspendedProcesses'] = [];
                $n1 = 0;
                foreach ($this->suspendedProcesses as $item1) {
                    $res['SuspendedProcesses'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->systemSuspended) {
            $res['SystemSuspended'] = $this->systemSuspended;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->VServerGroups)) {
                $res['VServerGroups'] = [];
                $n1 = 0;
                foreach ($this->VServerGroups as $item1) {
                    $res['VServerGroups'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        if (null !== $this->vSwitchIds) {
            if (\is_array($this->vSwitchIds)) {
                $res['VSwitchIds'] = [];
                $n1 = 0;
                foreach ($this->vSwitchIds as $item1) {
                    $res['VSwitchIds'][$n1++] = $item1;
                }
            }
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
        if (isset($map['ActiveCapacity'])) {
            $model->activeCapacity = $map['ActiveCapacity'];
        }

        if (isset($map['ActiveScalingConfigurationId'])) {
            $model->activeScalingConfigurationId = $map['ActiveScalingConfigurationId'];
        }

        if (isset($map['AlbServerGroups'])) {
            if (!empty($map['AlbServerGroups'])) {
                $model->albServerGroups = [];
                $n1 = 0;
                foreach ($map['AlbServerGroups'] as $item1) {
                    $model->albServerGroups[$n1++] = albServerGroups::fromMap($item1);
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
                $model->DBInstanceIds = [];
                $n1 = 0;
                foreach ($map['DBInstanceIds'] as $item1) {
                    $model->DBInstanceIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['DBInstances'])) {
            if (!empty($map['DBInstances'])) {
                $model->DBInstances = [];
                $n1 = 0;
                foreach ($map['DBInstances'] as $item1) {
                    $model->DBInstances[$n1++] = DBInstances::fromMap($item1);
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
                $model->healthCheckTypes = [];
                $n1 = 0;
                foreach ($map['HealthCheckTypes'] as $item1) {
                    $model->healthCheckTypes[$n1++] = $item1;
                }
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
                $n1 = 0;
                foreach ($map['LaunchTemplateOverrides'] as $item1) {
                    $model->launchTemplateOverrides[$n1++] = launchTemplateOverrides::fromMap($item1);
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
                $n1 = 0;
                foreach ($map['LoadBalancerConfigs'] as $item1) {
                    $model->loadBalancerConfigs[$n1++] = loadBalancerConfigs::fromMap($item1);
                }
            }
        }

        if (isset($map['LoadBalancerIds'])) {
            if (!empty($map['LoadBalancerIds'])) {
                $model->loadBalancerIds = [];
                $n1 = 0;
                foreach ($map['LoadBalancerIds'] as $item1) {
                    $model->loadBalancerIds[$n1++] = $item1;
                }
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
                $model->removalPolicies = [];
                $n1 = 0;
                foreach ($map['RemovalPolicies'] as $item1) {
                    $model->removalPolicies[$n1++] = $item1;
                }
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
                $n1 = 0;
                foreach ($map['ServerGroups'] as $item1) {
                    $model->serverGroups[$n1++] = serverGroups::fromMap($item1);
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
                $model->suspendedProcesses = [];
                $n1 = 0;
                foreach ($map['SuspendedProcesses'] as $item1) {
                    $model->suspendedProcesses[$n1++] = $item1;
                }
            }
        }

        if (isset($map['SystemSuspended'])) {
            $model->systemSuspended = $map['SystemSuspended'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
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
                $n1 = 0;
                foreach ($map['VServerGroups'] as $item1) {
                    $model->VServerGroups[$n1++] = VServerGroups::fromMap($item1);
                }
            }
        }

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        if (isset($map['VSwitchIds'])) {
            if (!empty($map['VSwitchIds'])) {
                $model->vSwitchIds = [];
                $n1 = 0;
                foreach ($map['VSwitchIds'] as $item1) {
                    $model->vSwitchIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
