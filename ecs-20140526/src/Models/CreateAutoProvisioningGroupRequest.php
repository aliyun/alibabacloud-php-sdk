<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateAutoProvisioningGroupRequest\dataDiskConfig;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateAutoProvisioningGroupRequest\launchConfiguration;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateAutoProvisioningGroupRequest\launchTemplateConfig;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateAutoProvisioningGroupRequest\systemDiskConfig;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateAutoProvisioningGroupRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateAutoProvisioningGroupRequest extends Model
{
    /**
     * @var launchConfiguration
     */
    public $launchConfiguration;

    /**
     * @description The name of the auto provisioning group. The name must be 2 to 128 characters in length. The name must start with a letter and cannot start with `http://` or `https://`. The name can contain letters, digits, colons (:), underscores (\_), and hyphens (-).
     *
     * @example apg-test
     *
     * @var string
     */
    public $autoProvisioningGroupName;

    /**
     * @description The delivery type of the auto provisioning group. Valid values:
     *
     *   request: one-time asynchronous delivery. When the auto provisioning group is started, it attempts to asynchronously deliver an instance cluster that meets the target capacity only once. The group does not retry the operation regardless of whether all the instances are delivered.
     *   instant: one-time synchronous delivery. When the auto provisioning group is started, it attempts to synchronously deliver an instance cluster that meets the target capacity only once. The list of delivered instances and the causes of delivery failures are returned in the response.
     *   maintain: continuous delivery. When the auto provisioning group is started, it attempts to deliver an instance cluster that meets the target capacity, and monitors the real-time capacity. If the target capacity of the auto provisioning group is not reached, the auto provisioning group continues to create instances until the target capacity is reached.
     *
     * Default value: maintain.
     * @example maintain
     *
     * @var string
     */
    public $autoProvisioningGroupType;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length. For more information, see [How to ensure idempotence](~~25693~~).
     *
     * @example 0c593ea1-3bea-11e9-b96b-88e9fe637760
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The information of data disks on the instance.
     *
     * @var dataDiskConfig[]
     */
    public $dataDiskConfig;

    /**
     * @description The type of supplemental instances. When the sum of the `PayAsYouGoTargetCapacity` and `SpotTargetCapacity` values is smaller than the `TotalTargetCapacity` value, the auto provisioning group creates instances of the specified type to meet the total target capacity. Valid values:
     *
     *   PayAsYouGo: pay-as-you-go instances
     *   Spot: preemptible instances.
     *
     * Default value: Spot.
     * @example Spot
     *
     * @var string
     */
    public $defaultTargetCapacityType;

    /**
     * @description The description of the auto provisioning group.
     *
     * @example testDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description Specifies whether to release scaled-in instances when the real-time capacity of the auto provisioning group exceeds the target capacity and the group is triggered to scale in. Valid values:
     *
     *   termination: releases the scaled-in instances in the auto provisioning group.
     *   no-termination: removes the scaled-in instances from the auto provisioning group but does not release them.
     *
     * Default value: no-termination.
     * @example termination
     *
     * @var string
     */
    public $excessCapacityTerminationPolicy;

    /**
     * @description >This parameter is in invitational preview and is not publicly available.
     *
     * @example false
     *
     * @var bool
     */
    public $hibernationOptionsConfigured;

    /**
     * @description The extended configurations of the launch template.
     *
     * @var launchTemplateConfig[]
     */
    public $launchTemplateConfig;

    /**
     * @description The ID of the launch template associated with the auto provisioning group. You can call the [DescribeLaunchTemplates](~~73759~~) operation to query available launch templates. When both LaunchTemplateId and `LaunchConfiguration.*` parameters are specified, LaunchTemplateId takes precedence.
     *
     * @example lt-bp1fgzds4bdogu03****
     *
     * @var string
     */
    public $launchTemplateId;

    /**
     * @description The version of the launch template associated with the auto provisioning group. You can call the [DescribeLaunchTemplateVersions](~~73761~~) operation to query the versions of available launch templates.
     *
     * Default value: the default version of the launch template.
     * @example 1
     *
     * @var string
     */
    public $launchTemplateVersion;

    /**
     * @description The maximum price of preemptible instances in the auto provisioning group.
     *
     * >  When both `MaxSpotPrice` and `LaunchTemplateConfig.N.MaxPrice` are specified, the smaller one of the two parameter values is used.
     * @example 2
     *
     * @var float
     */
    public $maxSpotPrice;

    /**
     * @description The minimum target capacity of the auto provisioning group. The value must be a positive integer. When you specify this parameter, take note of the following items:
     *
     * - If the number of instances that can be created in the current region is greater than the value of this parameter, instances can be created based on the specified parameters.
     * @example 20
     *
     * @var string
     */
    public $minTargetCapacity;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The policy for creating pay-as-you-go instances. Valid values:
     *
     *   lowest-price: cost optimization policy. The auto provisioning group selects the lowest-priced instance type to create instances.
     *   prioritized: priority-based policy. The auto provisioning group creates instances based on the priority specified by `LaunchTemplateConfig.N.Priority`.
     *
     * Default value: lowest-price.
     * @example prioritized
     *
     * @var string
     */
    public $payAsYouGoAllocationStrategy;

    /**
     * @description The target capacity of pay-as-you-go instances in the auto provisioning group. The value must be less than or equal to the `TotalTargetCapacity` value.
     *
     * @example 30
     *
     * @var string
     */
    public $payAsYouGoTargetCapacity;

    /**
     * @description The ID of the region in which to create the auto provisioning group. You can call the [DescribeRegions](~~25609~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which to assign the auto provisioning group.
     *
     * @example rg-bp67acfmxazb4p****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The policy for creating preemptible instances. Valid values:
     *
     *   lowest-price: cost optimization policy. The auto provisioning group selects the lowest-priced instance type to create instances.
     *   diversified: balanced distribution policy. The auto provisioning group creates instances in zones that are specified in extended configurations and then evenly distributes the instances across the zones.
     *   capacity-optimized: capacity-optimized distribution policy. The auto provisioning group creates instances of the optimal instance types across the optimal zones based on resource availability.
     *
     * Default value: lowest-price.
     * @example diversified
     *
     * @var string
     */
    public $spotAllocationStrategy;

    /**
     * @description The operation to be performed on the preemptible instance when it is interrupted. Valid values:
     *
     *   stop: stops the preemptible instance.
     *   terminate: releases the preemptible instance.
     *
     * Default value: terminate.
     * @example terminate
     *
     * @var string
     */
    public $spotInstanceInterruptionBehavior;

    /**
     * @description The number of preemptible instances of the lowest-priced instance type to be created by the auto provisioning group. This parameter takes effect when `SpotAllocationStrategy` is set to `lowest-price`.
     *
     * The value must be smaller than the N value specified in `LaunchTemplateConfig.N`.
     * @example 2
     *
     * @var int
     */
    public $spotInstancePoolsToUseCount;

    /**
     * @description The target capacity of preemptible instances in the auto provisioning group. The value must be less than or equal to the `TotalTargetCapacity` value.
     *
     * @example 20
     *
     * @var string
     */
    public $spotTargetCapacity;

    /**
     * @description The information of system disks on the instance.
     *
     * @var systemDiskConfig[]
     */
    public $systemDiskConfig;

    /**
     * @description The tags to add to the auto provisioning group.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description Specifies whether to release instances in the auto provisioning group when the auto provisioning group is deleted. Valid values:
     *
     *   true: releases the instances.
     *   false: retains the instances.
     *
     * Default value: false.
     * @example true
     *
     * @var bool
     */
    public $terminateInstances;

    /**
     * @description Specifies whether to release instances in the auto provisioning group when the group expires. Valid values:
     *
     *   true: releases the instances.
     *   false: only removes the instances from the auto provisioning group but does not release them.
     *
     * Default value: false.
     * @example true
     *
     * @var bool
     */
    public $terminateInstancesWithExpiration;

    /**
     * @description The total target capacity of the auto provisioning group. The value must be a positive integer.
     *
     * The total target capacity of the auto provisioning group must be greater than or equal to the sum of the target capacity of pay-as-you-go instances specified by `PayAsYouGoTargetCapacity` and the target capacity of preemptible instances specified by `SpotTargetCapacity`.
     * @example 60
     *
     * @var string
     */
    public $totalTargetCapacity;

    /**
     * @description The time at which to start the auto provisioning group. The period of time between this point in time and the point in time specified by `ValidUntil` is the validity period of the auto provisioning group.
     *
     * By default, an auto provisioning group is started immediately after it is created.
     * @example 2019-04-01T15:10:20Z
     *
     * @var string
     */
    public $validFrom;

    /**
     * @description The time at which the auto provisioning group expires. The period of time between this point in time and the point in time specified by `ValidFrom` is the validity period of the auto provisioning group.
     *
     * Default value: 2099-12-31T23:59:59Z.
     * @example 2019-06-01T15:10:20Z
     *
     * @var string
     */
    public $validUntil;
    protected $_name = [
        'launchConfiguration'              => 'LaunchConfiguration',
        'autoProvisioningGroupName'        => 'AutoProvisioningGroupName',
        'autoProvisioningGroupType'        => 'AutoProvisioningGroupType',
        'clientToken'                      => 'ClientToken',
        'dataDiskConfig'                   => 'DataDiskConfig',
        'defaultTargetCapacityType'        => 'DefaultTargetCapacityType',
        'description'                      => 'Description',
        'excessCapacityTerminationPolicy'  => 'ExcessCapacityTerminationPolicy',
        'hibernationOptionsConfigured'     => 'HibernationOptionsConfigured',
        'launchTemplateConfig'             => 'LaunchTemplateConfig',
        'launchTemplateId'                 => 'LaunchTemplateId',
        'launchTemplateVersion'            => 'LaunchTemplateVersion',
        'maxSpotPrice'                     => 'MaxSpotPrice',
        'minTargetCapacity'                => 'MinTargetCapacity',
        'ownerAccount'                     => 'OwnerAccount',
        'ownerId'                          => 'OwnerId',
        'payAsYouGoAllocationStrategy'     => 'PayAsYouGoAllocationStrategy',
        'payAsYouGoTargetCapacity'         => 'PayAsYouGoTargetCapacity',
        'regionId'                         => 'RegionId',
        'resourceGroupId'                  => 'ResourceGroupId',
        'resourceOwnerAccount'             => 'ResourceOwnerAccount',
        'resourceOwnerId'                  => 'ResourceOwnerId',
        'spotAllocationStrategy'           => 'SpotAllocationStrategy',
        'spotInstanceInterruptionBehavior' => 'SpotInstanceInterruptionBehavior',
        'spotInstancePoolsToUseCount'      => 'SpotInstancePoolsToUseCount',
        'spotTargetCapacity'               => 'SpotTargetCapacity',
        'systemDiskConfig'                 => 'SystemDiskConfig',
        'tag'                              => 'Tag',
        'terminateInstances'               => 'TerminateInstances',
        'terminateInstancesWithExpiration' => 'TerminateInstancesWithExpiration',
        'totalTargetCapacity'              => 'TotalTargetCapacity',
        'validFrom'                        => 'ValidFrom',
        'validUntil'                       => 'ValidUntil',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->launchConfiguration) {
            $res['LaunchConfiguration'] = null !== $this->launchConfiguration ? $this->launchConfiguration->toMap() : null;
        }
        if (null !== $this->autoProvisioningGroupName) {
            $res['AutoProvisioningGroupName'] = $this->autoProvisioningGroupName;
        }
        if (null !== $this->autoProvisioningGroupType) {
            $res['AutoProvisioningGroupType'] = $this->autoProvisioningGroupType;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dataDiskConfig) {
            $res['DataDiskConfig'] = [];
            if (null !== $this->dataDiskConfig && \is_array($this->dataDiskConfig)) {
                $n = 0;
                foreach ($this->dataDiskConfig as $item) {
                    $res['DataDiskConfig'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->defaultTargetCapacityType) {
            $res['DefaultTargetCapacityType'] = $this->defaultTargetCapacityType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->excessCapacityTerminationPolicy) {
            $res['ExcessCapacityTerminationPolicy'] = $this->excessCapacityTerminationPolicy;
        }
        if (null !== $this->hibernationOptionsConfigured) {
            $res['HibernationOptionsConfigured'] = $this->hibernationOptionsConfigured;
        }
        if (null !== $this->launchTemplateConfig) {
            $res['LaunchTemplateConfig'] = [];
            if (null !== $this->launchTemplateConfig && \is_array($this->launchTemplateConfig)) {
                $n = 0;
                foreach ($this->launchTemplateConfig as $item) {
                    $res['LaunchTemplateConfig'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->launchTemplateId) {
            $res['LaunchTemplateId'] = $this->launchTemplateId;
        }
        if (null !== $this->launchTemplateVersion) {
            $res['LaunchTemplateVersion'] = $this->launchTemplateVersion;
        }
        if (null !== $this->maxSpotPrice) {
            $res['MaxSpotPrice'] = $this->maxSpotPrice;
        }
        if (null !== $this->minTargetCapacity) {
            $res['MinTargetCapacity'] = $this->minTargetCapacity;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->payAsYouGoAllocationStrategy) {
            $res['PayAsYouGoAllocationStrategy'] = $this->payAsYouGoAllocationStrategy;
        }
        if (null !== $this->payAsYouGoTargetCapacity) {
            $res['PayAsYouGoTargetCapacity'] = $this->payAsYouGoTargetCapacity;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->spotAllocationStrategy) {
            $res['SpotAllocationStrategy'] = $this->spotAllocationStrategy;
        }
        if (null !== $this->spotInstanceInterruptionBehavior) {
            $res['SpotInstanceInterruptionBehavior'] = $this->spotInstanceInterruptionBehavior;
        }
        if (null !== $this->spotInstancePoolsToUseCount) {
            $res['SpotInstancePoolsToUseCount'] = $this->spotInstancePoolsToUseCount;
        }
        if (null !== $this->spotTargetCapacity) {
            $res['SpotTargetCapacity'] = $this->spotTargetCapacity;
        }
        if (null !== $this->systemDiskConfig) {
            $res['SystemDiskConfig'] = [];
            if (null !== $this->systemDiskConfig && \is_array($this->systemDiskConfig)) {
                $n = 0;
                foreach ($this->systemDiskConfig as $item) {
                    $res['SystemDiskConfig'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (null !== $this->terminateInstances) {
            $res['TerminateInstances'] = $this->terminateInstances;
        }
        if (null !== $this->terminateInstancesWithExpiration) {
            $res['TerminateInstancesWithExpiration'] = $this->terminateInstancesWithExpiration;
        }
        if (null !== $this->totalTargetCapacity) {
            $res['TotalTargetCapacity'] = $this->totalTargetCapacity;
        }
        if (null !== $this->validFrom) {
            $res['ValidFrom'] = $this->validFrom;
        }
        if (null !== $this->validUntil) {
            $res['ValidUntil'] = $this->validUntil;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAutoProvisioningGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LaunchConfiguration'])) {
            $model->launchConfiguration = launchConfiguration::fromMap($map['LaunchConfiguration']);
        }
        if (isset($map['AutoProvisioningGroupName'])) {
            $model->autoProvisioningGroupName = $map['AutoProvisioningGroupName'];
        }
        if (isset($map['AutoProvisioningGroupType'])) {
            $model->autoProvisioningGroupType = $map['AutoProvisioningGroupType'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DataDiskConfig'])) {
            if (!empty($map['DataDiskConfig'])) {
                $model->dataDiskConfig = [];
                $n                     = 0;
                foreach ($map['DataDiskConfig'] as $item) {
                    $model->dataDiskConfig[$n++] = null !== $item ? dataDiskConfig::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DefaultTargetCapacityType'])) {
            $model->defaultTargetCapacityType = $map['DefaultTargetCapacityType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ExcessCapacityTerminationPolicy'])) {
            $model->excessCapacityTerminationPolicy = $map['ExcessCapacityTerminationPolicy'];
        }
        if (isset($map['HibernationOptionsConfigured'])) {
            $model->hibernationOptionsConfigured = $map['HibernationOptionsConfigured'];
        }
        if (isset($map['LaunchTemplateConfig'])) {
            if (!empty($map['LaunchTemplateConfig'])) {
                $model->launchTemplateConfig = [];
                $n                           = 0;
                foreach ($map['LaunchTemplateConfig'] as $item) {
                    $model->launchTemplateConfig[$n++] = null !== $item ? launchTemplateConfig::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['LaunchTemplateId'])) {
            $model->launchTemplateId = $map['LaunchTemplateId'];
        }
        if (isset($map['LaunchTemplateVersion'])) {
            $model->launchTemplateVersion = $map['LaunchTemplateVersion'];
        }
        if (isset($map['MaxSpotPrice'])) {
            $model->maxSpotPrice = $map['MaxSpotPrice'];
        }
        if (isset($map['MinTargetCapacity'])) {
            $model->minTargetCapacity = $map['MinTargetCapacity'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PayAsYouGoAllocationStrategy'])) {
            $model->payAsYouGoAllocationStrategy = $map['PayAsYouGoAllocationStrategy'];
        }
        if (isset($map['PayAsYouGoTargetCapacity'])) {
            $model->payAsYouGoTargetCapacity = $map['PayAsYouGoTargetCapacity'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SpotAllocationStrategy'])) {
            $model->spotAllocationStrategy = $map['SpotAllocationStrategy'];
        }
        if (isset($map['SpotInstanceInterruptionBehavior'])) {
            $model->spotInstanceInterruptionBehavior = $map['SpotInstanceInterruptionBehavior'];
        }
        if (isset($map['SpotInstancePoolsToUseCount'])) {
            $model->spotInstancePoolsToUseCount = $map['SpotInstancePoolsToUseCount'];
        }
        if (isset($map['SpotTargetCapacity'])) {
            $model->spotTargetCapacity = $map['SpotTargetCapacity'];
        }
        if (isset($map['SystemDiskConfig'])) {
            if (!empty($map['SystemDiskConfig'])) {
                $model->systemDiskConfig = [];
                $n                       = 0;
                foreach ($map['SystemDiskConfig'] as $item) {
                    $model->systemDiskConfig[$n++] = null !== $item ? systemDiskConfig::fromMap($item) : $item;
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
        if (isset($map['TerminateInstances'])) {
            $model->terminateInstances = $map['TerminateInstances'];
        }
        if (isset($map['TerminateInstancesWithExpiration'])) {
            $model->terminateInstancesWithExpiration = $map['TerminateInstancesWithExpiration'];
        }
        if (isset($map['TotalTargetCapacity'])) {
            $model->totalTargetCapacity = $map['TotalTargetCapacity'];
        }
        if (isset($map['ValidFrom'])) {
            $model->validFrom = $map['ValidFrom'];
        }
        if (isset($map['ValidUntil'])) {
            $model->validUntil = $map['ValidUntil'];
        }

        return $model;
    }
}
