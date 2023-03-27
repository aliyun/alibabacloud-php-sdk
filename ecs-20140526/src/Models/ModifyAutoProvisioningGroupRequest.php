<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyAutoProvisioningGroupRequest\launchTemplateConfig;
use AlibabaCloud\Tea\Model;

class ModifyAutoProvisioningGroupRequest extends Model
{
    /**
     * @description The ID of the auto provisioning group.
     *
     * @example apg-bp67acfmxazb4ph****
     *
     * @var string
     */
    public $autoProvisioningGroupId;

    /**
     * @description The name of the auto provisioning group. The name must be 2 to 128 characters in length. It must start with a letter and cannot start with `http://` or `https://`. It can contain letters, digits, colons (`:`), underscores (`_`), and hyphens (`-`).
     *
     * @example apg-test
     *
     * @var string
     */
    public $autoProvisioningGroupName;

    /**
     * @description The type of supplemental instances. When the sum of the PayAsYouGoTargetCapacity and SpotTargetCapacity values is smaller than the TotalTargetCapacity value, the auto provisioning group creates instances of the specified billing method to meet the target capacity. Valid values:
     *
     *   PayAsYouGo: pay-as-you-go instances.
     *   Spot: preemptible instances.
     *
     * @example Spot
     *
     * @var string
     */
    public $defaultTargetCapacityType;

    /**
     * @description Specifies whether to release the removed instances when the real-time capacity of the auto provisioning group exceeds the target capacity and a scale-in event is triggered. Valid values:
     *
     *   termination: releases the removed instances.
     *   no-termination: only removes the instances from the auto provisioning group but does not release them.
     *
     * @example no-termination
     *
     * @var string
     */
    public $excessCapacityTerminationPolicy;

    /**
     * @description The extended configurations.
     *
     * @var launchTemplateConfig[]
     */
    public $launchTemplateConfig;

    /**
     * @description The maximum price of preemptible instances in the auto provisioning group.
     *
     * > When both the MaxSpotPrice and LaunchTemplateConfig.N.MaxPrice parameters are specified, the smaller one of the two parameter values is used. The LaunchTemplateConfig.N.MaxPrice parameter is set when the auto provisioning group is created, and cannot be modified.
     * @example 0.5
     *
     * @var float
     */
    public $maxSpotPrice;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The target capacity of pay-as-you-go instances in the auto provisioning group. The value must be smaller than the TotalTargetCapacity value.
     *
     * @example 30
     *
     * @var string
     */
    public $payAsYouGoTargetCapacity;

    /**
     * @description The region ID of the auto provisioning group. You can call the [DescribeRegions](~~25609~~) operation to query the most recent list of regions.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The target capacity of preemptible instances in the auto provisioning group. The value must be smaller than the TotalTargetCapacity value.
     *
     * @example 30
     *
     * @var string
     */
    public $spotTargetCapacity;

    /**
     * @description Specifies whether to release instances in the auto provisioning group when the auto provisioning group expires. Valid values:
     *
     *   true: releases instances in the auto provisioning group.
     *   false: only removes instances from the auto provisioning group but does not release them.
     *
     * @example false
     *
     * @var bool
     */
    public $terminateInstancesWithExpiration;

    /**
     * @description The total target capacity of the auto provisioning group. The value must be a positive integer.
     *
     * The total target capacity of the auto provisioning group must be greater than or equal to the sum of the target capacity of pay-as-you-go instances specified by the PayAsYouGoTargetCapacity parameter and the target capacity of preemptible instances specified by the SpotTargetCapacity parameter.
     * @example 70
     *
     * @var string
     */
    public $totalTargetCapacity;
    protected $_name = [
        'autoProvisioningGroupId'          => 'AutoProvisioningGroupId',
        'autoProvisioningGroupName'        => 'AutoProvisioningGroupName',
        'defaultTargetCapacityType'        => 'DefaultTargetCapacityType',
        'excessCapacityTerminationPolicy'  => 'ExcessCapacityTerminationPolicy',
        'launchTemplateConfig'             => 'LaunchTemplateConfig',
        'maxSpotPrice'                     => 'MaxSpotPrice',
        'ownerAccount'                     => 'OwnerAccount',
        'ownerId'                          => 'OwnerId',
        'payAsYouGoTargetCapacity'         => 'PayAsYouGoTargetCapacity',
        'regionId'                         => 'RegionId',
        'resourceOwnerAccount'             => 'ResourceOwnerAccount',
        'resourceOwnerId'                  => 'ResourceOwnerId',
        'spotTargetCapacity'               => 'SpotTargetCapacity',
        'terminateInstancesWithExpiration' => 'TerminateInstancesWithExpiration',
        'totalTargetCapacity'              => 'TotalTargetCapacity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoProvisioningGroupId) {
            $res['AutoProvisioningGroupId'] = $this->autoProvisioningGroupId;
        }
        if (null !== $this->autoProvisioningGroupName) {
            $res['AutoProvisioningGroupName'] = $this->autoProvisioningGroupName;
        }
        if (null !== $this->defaultTargetCapacityType) {
            $res['DefaultTargetCapacityType'] = $this->defaultTargetCapacityType;
        }
        if (null !== $this->excessCapacityTerminationPolicy) {
            $res['ExcessCapacityTerminationPolicy'] = $this->excessCapacityTerminationPolicy;
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
        if (null !== $this->maxSpotPrice) {
            $res['MaxSpotPrice'] = $this->maxSpotPrice;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->payAsYouGoTargetCapacity) {
            $res['PayAsYouGoTargetCapacity'] = $this->payAsYouGoTargetCapacity;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->spotTargetCapacity) {
            $res['SpotTargetCapacity'] = $this->spotTargetCapacity;
        }
        if (null !== $this->terminateInstancesWithExpiration) {
            $res['TerminateInstancesWithExpiration'] = $this->terminateInstancesWithExpiration;
        }
        if (null !== $this->totalTargetCapacity) {
            $res['TotalTargetCapacity'] = $this->totalTargetCapacity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyAutoProvisioningGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoProvisioningGroupId'])) {
            $model->autoProvisioningGroupId = $map['AutoProvisioningGroupId'];
        }
        if (isset($map['AutoProvisioningGroupName'])) {
            $model->autoProvisioningGroupName = $map['AutoProvisioningGroupName'];
        }
        if (isset($map['DefaultTargetCapacityType'])) {
            $model->defaultTargetCapacityType = $map['DefaultTargetCapacityType'];
        }
        if (isset($map['ExcessCapacityTerminationPolicy'])) {
            $model->excessCapacityTerminationPolicy = $map['ExcessCapacityTerminationPolicy'];
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
        if (isset($map['MaxSpotPrice'])) {
            $model->maxSpotPrice = $map['MaxSpotPrice'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PayAsYouGoTargetCapacity'])) {
            $model->payAsYouGoTargetCapacity = $map['PayAsYouGoTargetCapacity'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SpotTargetCapacity'])) {
            $model->spotTargetCapacity = $map['SpotTargetCapacity'];
        }
        if (isset($map['TerminateInstancesWithExpiration'])) {
            $model->terminateInstancesWithExpiration = $map['TerminateInstancesWithExpiration'];
        }
        if (isset($map['TotalTargetCapacity'])) {
            $model->totalTargetCapacity = $map['TotalTargetCapacity'];
        }

        return $model;
    }
}
