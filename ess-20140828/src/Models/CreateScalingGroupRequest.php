<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20140828\Models;

use AlibabaCloud\SDK\Ess\V20140828\Models\CreateScalingGroupRequest\albServerGroup;
use AlibabaCloud\SDK\Ess\V20140828\Models\CreateScalingGroupRequest\launchTemplateOverride;
use AlibabaCloud\SDK\Ess\V20140828\Models\CreateScalingGroupRequest\lifecycleHook;
use AlibabaCloud\SDK\Ess\V20140828\Models\CreateScalingGroupRequest\tag;
use AlibabaCloud\SDK\Ess\V20140828\Models\CreateScalingGroupRequest\VServerGroup;
use AlibabaCloud\Tea\Model;

class CreateScalingGroupRequest extends Model
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
     * @var string
     */
    public $scalingGroupName;

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
    public $instanceId;

    /**
     * @var string
     */
    public $regionId;

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
    public $loadBalancerIds;

    /**
     * @var string
     */
    public $DBInstanceIds;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $multiAZPolicy;

    /**
     * @var string
     */
    public $healthCheckType;

    /**
     * @var string
     */
    public $scalingPolicy;

    /**
     * @var string
     */
    public $clientToken;

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
     * @var string[]
     */
    public $vSwitchIds;

    /**
     * @var lifecycleHook[]
     */
    public $lifecycleHook;

    /**
     * @var VServerGroup[]
     */
    public $VServerGroup;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @var launchTemplateOverride[]
     */
    public $launchTemplateOverride;

    /**
     * @var albServerGroup[]
     */
    public $albServerGroup;
    protected $_name = [
        'removalPolicy'                       => 'RemovalPolicy',
        'ownerId'                             => 'OwnerId',
        'resourceOwnerAccount'                => 'ResourceOwnerAccount',
        'scalingGroupName'                    => 'ScalingGroupName',
        'launchTemplateId'                    => 'LaunchTemplateId',
        'launchTemplateVersion'               => 'LaunchTemplateVersion',
        'instanceId'                          => 'InstanceId',
        'regionId'                            => 'RegionId',
        'minSize'                             => 'MinSize',
        'maxSize'                             => 'MaxSize',
        'defaultCooldown'                     => 'DefaultCooldown',
        'loadBalancerIds'                     => 'LoadBalancerIds',
        'DBInstanceIds'                       => 'DBInstanceIds',
        'ownerAccount'                        => 'OwnerAccount',
        'vSwitchId'                           => 'VSwitchId',
        'multiAZPolicy'                       => 'MultiAZPolicy',
        'healthCheckType'                     => 'HealthCheckType',
        'scalingPolicy'                       => 'ScalingPolicy',
        'clientToken'                         => 'ClientToken',
        'onDemandBaseCapacity'                => 'OnDemandBaseCapacity',
        'onDemandPercentageAboveBaseCapacity' => 'OnDemandPercentageAboveBaseCapacity',
        'spotInstanceRemedy'                  => 'SpotInstanceRemedy',
        'compensateWithOnDemand'              => 'CompensateWithOnDemand',
        'spotInstancePools'                   => 'SpotInstancePools',
        'desiredCapacity'                     => 'DesiredCapacity',
        'groupDeletionProtection'             => 'GroupDeletionProtection',
        'vSwitchIds'                          => 'VSwitchIds',
        'lifecycleHook'                       => 'LifecycleHook',
        'VServerGroup'                        => 'VServerGroup',
        'tag'                                 => 'Tag',
        'launchTemplateOverride'              => 'LaunchTemplateOverride',
        'albServerGroup'                      => 'AlbServerGroup',
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
        if (null !== $this->scalingGroupName) {
            $res['ScalingGroupName'] = $this->scalingGroupName;
        }
        if (null !== $this->launchTemplateId) {
            $res['LaunchTemplateId'] = $this->launchTemplateId;
        }
        if (null !== $this->launchTemplateVersion) {
            $res['LaunchTemplateVersion'] = $this->launchTemplateVersion;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (null !== $this->loadBalancerIds) {
            $res['LoadBalancerIds'] = $this->loadBalancerIds;
        }
        if (null !== $this->DBInstanceIds) {
            $res['DBInstanceIds'] = $this->DBInstanceIds;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->multiAZPolicy) {
            $res['MultiAZPolicy'] = $this->multiAZPolicy;
        }
        if (null !== $this->healthCheckType) {
            $res['HealthCheckType'] = $this->healthCheckType;
        }
        if (null !== $this->scalingPolicy) {
            $res['ScalingPolicy'] = $this->scalingPolicy;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
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
        if (null !== $this->vSwitchIds) {
            $res['VSwitchIds'] = $this->vSwitchIds;
        }
        if (null !== $this->lifecycleHook) {
            $res['LifecycleHook'] = [];
            if (null !== $this->lifecycleHook && \is_array($this->lifecycleHook)) {
                $n = 0;
                foreach ($this->lifecycleHook as $item) {
                    $res['LifecycleHook'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->VServerGroup) {
            $res['VServerGroup'] = [];
            if (null !== $this->VServerGroup && \is_array($this->VServerGroup)) {
                $n = 0;
                foreach ($this->VServerGroup as $item) {
                    $res['VServerGroup'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->albServerGroup) {
            $res['AlbServerGroup'] = [];
            if (null !== $this->albServerGroup && \is_array($this->albServerGroup)) {
                $n = 0;
                foreach ($this->albServerGroup as $item) {
                    $res['AlbServerGroup'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['ScalingGroupName'])) {
            $model->scalingGroupName = $map['ScalingGroupName'];
        }
        if (isset($map['LaunchTemplateId'])) {
            $model->launchTemplateId = $map['LaunchTemplateId'];
        }
        if (isset($map['LaunchTemplateVersion'])) {
            $model->launchTemplateVersion = $map['LaunchTemplateVersion'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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
        if (isset($map['LoadBalancerIds'])) {
            $model->loadBalancerIds = $map['LoadBalancerIds'];
        }
        if (isset($map['DBInstanceIds'])) {
            $model->DBInstanceIds = $map['DBInstanceIds'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['MultiAZPolicy'])) {
            $model->multiAZPolicy = $map['MultiAZPolicy'];
        }
        if (isset($map['HealthCheckType'])) {
            $model->healthCheckType = $map['HealthCheckType'];
        }
        if (isset($map['ScalingPolicy'])) {
            $model->scalingPolicy = $map['ScalingPolicy'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
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
        if (isset($map['VSwitchIds'])) {
            if (!empty($map['VSwitchIds'])) {
                $model->vSwitchIds = $map['VSwitchIds'];
            }
        }
        if (isset($map['LifecycleHook'])) {
            if (!empty($map['LifecycleHook'])) {
                $model->lifecycleHook = [];
                $n                    = 0;
                foreach ($map['LifecycleHook'] as $item) {
                    $model->lifecycleHook[$n++] = null !== $item ? lifecycleHook::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VServerGroup'])) {
            if (!empty($map['VServerGroup'])) {
                $model->VServerGroup = [];
                $n                   = 0;
                foreach ($map['VServerGroup'] as $item) {
                    $model->VServerGroup[$n++] = null !== $item ? VServerGroup::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
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
        if (isset($map['AlbServerGroup'])) {
            if (!empty($map['AlbServerGroup'])) {
                $model->albServerGroup = [];
                $n                     = 0;
                foreach ($map['AlbServerGroup'] as $item) {
                    $model->albServerGroup[$n++] = null !== $item ? albServerGroup::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
