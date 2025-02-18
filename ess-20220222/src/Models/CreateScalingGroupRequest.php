<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ess\V20220222\Models\CreateScalingGroupRequest\albServerGroups;
use AlibabaCloud\SDK\Ess\V20220222\Models\CreateScalingGroupRequest\capacityOptions;
use AlibabaCloud\SDK\Ess\V20220222\Models\CreateScalingGroupRequest\DBInstances;
use AlibabaCloud\SDK\Ess\V20220222\Models\CreateScalingGroupRequest\launchTemplateOverrides;
use AlibabaCloud\SDK\Ess\V20220222\Models\CreateScalingGroupRequest\lifecycleHooks;
use AlibabaCloud\SDK\Ess\V20220222\Models\CreateScalingGroupRequest\loadBalancerConfigs;
use AlibabaCloud\SDK\Ess\V20220222\Models\CreateScalingGroupRequest\serverGroups;
use AlibabaCloud\SDK\Ess\V20220222\Models\CreateScalingGroupRequest\tags;
use AlibabaCloud\SDK\Ess\V20220222\Models\CreateScalingGroupRequest\VServerGroups;

class CreateScalingGroupRequest extends Model
{
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
     * @var string
     */
    public $clientToken;
    /**
     * @var bool
     */
    public $compensateWithOnDemand;
    /**
     * @var string
     */
    public $containerGroupId;
    /**
     * @var string
     */
    public $customPolicyARN;
    /**
     * @var string
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
     * @var string
     */
    public $instanceId;
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
     * @var lifecycleHooks[]
     */
    public $lifecycleHooks;
    /**
     * @var loadBalancerConfigs[]
     */
    public $loadBalancerConfigs;
    /**
     * @var string
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
     * @var string
     */
    public $regionId;
    /**
     * @var string[]
     */
    public $removalPolicies;
    /**
     * @var string
     */
    public $resourceGroupId;
    /**
     * @var string
     */
    public $resourceOwnerAccount;
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
     * @var bool
     */
    public $syncAlarmRuleToCms;
    /**
     * @var tags[]
     */
    public $tags;
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
    protected $_name = [
        'albServerGroups'                     => 'AlbServerGroups',
        'allocationStrategy'                  => 'AllocationStrategy',
        'azBalance'                           => 'AzBalance',
        'capacityOptions'                     => 'CapacityOptions',
        'clientToken'                         => 'ClientToken',
        'compensateWithOnDemand'              => 'CompensateWithOnDemand',
        'containerGroupId'                    => 'ContainerGroupId',
        'customPolicyARN'                     => 'CustomPolicyARN',
        'DBInstanceIds'                       => 'DBInstanceIds',
        'DBInstances'                         => 'DBInstances',
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
        'stopInstanceTimeout'                 => 'StopInstanceTimeout',
        'syncAlarmRuleToCms'                  => 'SyncAlarmRuleToCms',
        'tags'                                => 'Tags',
        'VServerGroups'                       => 'VServerGroups',
        'vSwitchId'                           => 'VSwitchId',
        'vSwitchIds'                          => 'VSwitchIds',
    ];

    public function validate()
    {
        if (\is_array($this->albServerGroups)) {
            Model::validateArray($this->albServerGroups);
        }
        if (null !== $this->capacityOptions) {
            $this->capacityOptions->validate();
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
        if (\is_array($this->lifecycleHooks)) {
            Model::validateArray($this->lifecycleHooks);
        }
        if (\is_array($this->loadBalancerConfigs)) {
            Model::validateArray($this->loadBalancerConfigs);
        }
        if (\is_array($this->removalPolicies)) {
            Model::validateArray($this->removalPolicies);
        }
        if (\is_array($this->serverGroups)) {
            Model::validateArray($this->serverGroups);
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
        if (null !== $this->albServerGroups) {
            if (\is_array($this->albServerGroups)) {
                $res['AlbServerGroups'] = [];
                $n1                     = 0;
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

        if (null !== $this->DBInstances) {
            if (\is_array($this->DBInstances)) {
                $res['DBInstances'] = [];
                $n1                 = 0;
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
                $n1                      = 0;
                foreach ($this->healthCheckTypes as $item1) {
                    $res['HealthCheckTypes'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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

        if (null !== $this->lifecycleHooks) {
            if (\is_array($this->lifecycleHooks)) {
                $res['LifecycleHooks'] = [];
                $n1                    = 0;
                foreach ($this->lifecycleHooks as $item1) {
                    $res['LifecycleHooks'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->loadBalancerConfigs) {
            if (\is_array($this->loadBalancerConfigs)) {
                $res['LoadBalancerConfigs'] = [];
                $n1                         = 0;
                foreach ($this->loadBalancerConfigs as $item1) {
                    $res['LoadBalancerConfigs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->removalPolicies)) {
                $res['RemovalPolicies'] = [];
                $n1                     = 0;
                foreach ($this->removalPolicies as $item1) {
                    $res['RemovalPolicies'][$n1++] = $item1;
                }
            }
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
            if (\is_array($this->serverGroups)) {
                $res['ServerGroups'] = [];
                $n1                  = 0;
                foreach ($this->serverGroups as $item1) {
                    $res['ServerGroups'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (null !== $this->stopInstanceTimeout) {
            $res['StopInstanceTimeout'] = $this->stopInstanceTimeout;
        }

        if (null !== $this->syncAlarmRuleToCms) {
            $res['SyncAlarmRuleToCms'] = $this->syncAlarmRuleToCms;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1          = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->VServerGroups) {
            if (\is_array($this->VServerGroups)) {
                $res['VServerGroups'] = [];
                $n1                   = 0;
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
        if (isset($map['AlbServerGroups'])) {
            if (!empty($map['AlbServerGroups'])) {
                $model->albServerGroups = [];
                $n1                     = 0;
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

        if (isset($map['DBInstances'])) {
            if (!empty($map['DBInstances'])) {
                $model->DBInstances = [];
                $n1                 = 0;
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
                $n1                      = 0;
                foreach ($map['HealthCheckTypes'] as $item1) {
                    $model->healthCheckTypes[$n1++] = $item1;
                }
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
                $n1                             = 0;
                foreach ($map['LaunchTemplateOverrides'] as $item1) {
                    $model->launchTemplateOverrides[$n1++] = launchTemplateOverrides::fromMap($item1);
                }
            }
        }

        if (isset($map['LaunchTemplateVersion'])) {
            $model->launchTemplateVersion = $map['LaunchTemplateVersion'];
        }

        if (isset($map['LifecycleHooks'])) {
            if (!empty($map['LifecycleHooks'])) {
                $model->lifecycleHooks = [];
                $n1                    = 0;
                foreach ($map['LifecycleHooks'] as $item1) {
                    $model->lifecycleHooks[$n1++] = lifecycleHooks::fromMap($item1);
                }
            }
        }

        if (isset($map['LoadBalancerConfigs'])) {
            if (!empty($map['LoadBalancerConfigs'])) {
                $model->loadBalancerConfigs = [];
                $n1                         = 0;
                foreach ($map['LoadBalancerConfigs'] as $item1) {
                    $model->loadBalancerConfigs[$n1++] = loadBalancerConfigs::fromMap($item1);
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
                $model->removalPolicies = [];
                $n1                     = 0;
                foreach ($map['RemovalPolicies'] as $item1) {
                    $model->removalPolicies[$n1++] = $item1;
                }
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
                $n1                  = 0;
                foreach ($map['ServerGroups'] as $item1) {
                    $model->serverGroups[$n1++] = serverGroups::fromMap($item1);
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

        if (isset($map['StopInstanceTimeout'])) {
            $model->stopInstanceTimeout = $map['StopInstanceTimeout'];
        }

        if (isset($map['SyncAlarmRuleToCms'])) {
            $model->syncAlarmRuleToCms = $map['SyncAlarmRuleToCms'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1          = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
                }
            }
        }

        if (isset($map['VServerGroups'])) {
            if (!empty($map['VServerGroups'])) {
                $model->VServerGroups = [];
                $n1                   = 0;
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
                $n1                = 0;
                foreach ($map['VSwitchIds'] as $item1) {
                    $model->vSwitchIds[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
