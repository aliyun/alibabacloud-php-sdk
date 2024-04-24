<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupsResponseBody\autoProvisioningGroups;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupsResponseBody\autoProvisioningGroups\autoProvisioningGroup\launchTemplateConfigs;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupsResponseBody\autoProvisioningGroups\autoProvisioningGroup\payAsYouGoOptions;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupsResponseBody\autoProvisioningGroups\autoProvisioningGroup\spotOptions;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupsResponseBody\autoProvisioningGroups\autoProvisioningGroup\tags;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupsResponseBody\autoProvisioningGroups\autoProvisioningGroup\targetCapacitySpecification;
use AlibabaCloud\Tea\Model;

class autoProvisioningGroup extends Model
{
    /**
     * @description The ID of the auto provisioning group.
     *
     * @example apg-sn54avj8htgvtyh8****
     *
     * @var string
     */
    public $autoProvisioningGroupId;

    /**
     * @description The name of the auto provisioning group.
     *
     * @example EcsDocTest
     *
     * @var string
     */
    public $autoProvisioningGroupName;

    /**
     * @description The delivery type of the auto provisioning group. Valid values:
     *
     *   request: one-time delivery. When the auto provisioning group is started, it delivers instances only once. If the instances fail to be delivered, the auto provisioning group does not retry the delivery.
     *   maintain: continuous delivery. When the auto provisioning group is started, it attempts to deliver instances that meet the target capacity and monitors the real-time capacity. If the target capacity of the auto provisioning group is not reached, the auto provisioning group continues to create instances until the target capacity is reached.
     *
     * @example maintain
     *
     * @var string
     */
    public $autoProvisioningGroupType;

    /**
     * @description The time when the auto provisioning group was created.
     *
     * @example 2019-04-01T15:10:20Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description Indicates whether to release the scaled-in instances when the real-time capacity of the auto provisioning group exceeds the target capacity and the group is triggered to scale in. Valid values:
     *
     *   termination: releases the scaled-in instances.
     *   no-termination: only removes the scaled-in instances from the auto provisioning group but does not release the instances.
     *
     * @example termination
     *
     * @var string
     */
    public $excessCapacityTerminationPolicy;

    /**
     * @description Details about the extended configurations.
     *
     * @var launchTemplateConfigs
     */
    public $launchTemplateConfigs;

    /**
     * @description The ID of the launch template associated with the auto provisioning group.
     *
     * @example lt-bp1fgzds4bdogu03****
     *
     * @var string
     */
    public $launchTemplateId;

    /**
     * @description The version of the launch template associated with the auto provisioning group.
     *
     * @example 1
     *
     * @var string
     */
    public $launchTemplateVersion;

    /**
     * @description The maximum price of preemptible instances in the auto provisioning group.
     *
     * The LaunchTemplateConfig.N.Priority parameter is set when the auto provisioning group is created, and cannot be modified.
     * @example 2
     *
     * @var float
     */
    public $maxSpotPrice;

    /**
     * @description The policies related to pay-as-you-go instances.
     *
     * @var payAsYouGoOptions
     */
    public $payAsYouGoOptions;

    /**
     * @description The region ID of the auto provisioning group.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which the auto provisioning group belongs.
     *
     * @example rg-bp67acfmxazb4p****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The policy related to preemptible instances.
     *
     * @var spotOptions
     */
    public $spotOptions;

    /**
     * @description The overall status of instance scheduling in the auto provisioning group. Valid values:
     *
     *   fulfilled: Scheduling was complete and the instances were delivered.
     *   pending-fulfillment: The instances were being created.
     *   pending-termination: The instances were being removed.
     *   error: An exception occurred during scheduling and the instances were not delivered.
     *
     * @example fulfilled
     *
     * @var string
     */
    public $state;

    /**
     * @description The status of the auto provisioning group. Valid values:
     *
     *   submitted: The auto provisioning group was created but did not execute scheduling tasks.
     *   active: The auto provisioning group was executing scheduling tasks.
     *   deleted: The auto provisioning group was deleted.
     *   delete-running: The auto provisioning group was being deleted.
     *   modifying: The auto provisioning group was being modified.
     *
     * @example submitted
     *
     * @var string
     */
    public $status;

    /**
     * @description The tags that are added to the auto provisioning group.
     *
     * @var tags
     */
    public $tags;

    /**
     * @description The settings of the target capacity of the auto provisioning group.
     *
     * @var targetCapacitySpecification
     */
    public $targetCapacitySpecification;

    /**
     * @description Indicates whether to release instances in the auto provisioning group when the auto provisioning group is deleted. Valid values:
     *
     *   true: releases the instances.
     *   false: only removes the instances from the auto provisioning group but does not release the instances.
     *
     * @example false
     *
     * @var bool
     */
    public $terminateInstances;

    /**
     * @description Indicates whether to release instances in the auto provisioning group when the group expires. Valid values:
     *
     *   true: releases the instances.
     *   false: only removes the instances from the auto provisioning group but does not release the instances.
     *
     * @example true
     *
     * @var bool
     */
    public $terminateInstancesWithExpiration;

    /**
     * @description The time at which the auto provisioning group is started. The provisioning group is effective until the point in time specified by `ValidUntil`.
     *
     * @example 2019-04-01T15:10:20Z
     *
     * @var string
     */
    public $validFrom;

    /**
     * @description The time at which the auto provisioning group expires. The period of time between this point in time and the point in time specified by the `ValidFrom` parameter is the validity period of the auto provisioning group.
     *
     * @example 2019-06-01T15:10:20Z
     *
     * @var string
     */
    public $validUntil;
    protected $_name = [
        'autoProvisioningGroupId'          => 'AutoProvisioningGroupId',
        'autoProvisioningGroupName'        => 'AutoProvisioningGroupName',
        'autoProvisioningGroupType'        => 'AutoProvisioningGroupType',
        'creationTime'                     => 'CreationTime',
        'excessCapacityTerminationPolicy'  => 'ExcessCapacityTerminationPolicy',
        'launchTemplateConfigs'            => 'LaunchTemplateConfigs',
        'launchTemplateId'                 => 'LaunchTemplateId',
        'launchTemplateVersion'            => 'LaunchTemplateVersion',
        'maxSpotPrice'                     => 'MaxSpotPrice',
        'payAsYouGoOptions'                => 'PayAsYouGoOptions',
        'regionId'                         => 'RegionId',
        'resourceGroupId'                  => 'ResourceGroupId',
        'spotOptions'                      => 'SpotOptions',
        'state'                            => 'State',
        'status'                           => 'Status',
        'tags'                             => 'Tags',
        'targetCapacitySpecification'      => 'TargetCapacitySpecification',
        'terminateInstances'               => 'TerminateInstances',
        'terminateInstancesWithExpiration' => 'TerminateInstancesWithExpiration',
        'validFrom'                        => 'ValidFrom',
        'validUntil'                       => 'ValidUntil',
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
        if (null !== $this->autoProvisioningGroupType) {
            $res['AutoProvisioningGroupType'] = $this->autoProvisioningGroupType;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->excessCapacityTerminationPolicy) {
            $res['ExcessCapacityTerminationPolicy'] = $this->excessCapacityTerminationPolicy;
        }
        if (null !== $this->launchTemplateConfigs) {
            $res['LaunchTemplateConfigs'] = null !== $this->launchTemplateConfigs ? $this->launchTemplateConfigs->toMap() : null;
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
        if (null !== $this->payAsYouGoOptions) {
            $res['PayAsYouGoOptions'] = null !== $this->payAsYouGoOptions ? $this->payAsYouGoOptions->toMap() : null;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->spotOptions) {
            $res['SpotOptions'] = null !== $this->spotOptions ? $this->spotOptions->toMap() : null;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->targetCapacitySpecification) {
            $res['TargetCapacitySpecification'] = null !== $this->targetCapacitySpecification ? $this->targetCapacitySpecification->toMap() : null;
        }
        if (null !== $this->terminateInstances) {
            $res['TerminateInstances'] = $this->terminateInstances;
        }
        if (null !== $this->terminateInstancesWithExpiration) {
            $res['TerminateInstancesWithExpiration'] = $this->terminateInstancesWithExpiration;
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
     * @return autoProvisioningGroup
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
        if (isset($map['AutoProvisioningGroupType'])) {
            $model->autoProvisioningGroupType = $map['AutoProvisioningGroupType'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['ExcessCapacityTerminationPolicy'])) {
            $model->excessCapacityTerminationPolicy = $map['ExcessCapacityTerminationPolicy'];
        }
        if (isset($map['LaunchTemplateConfigs'])) {
            $model->launchTemplateConfigs = launchTemplateConfigs::fromMap($map['LaunchTemplateConfigs']);
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
        if (isset($map['PayAsYouGoOptions'])) {
            $model->payAsYouGoOptions = payAsYouGoOptions::fromMap($map['PayAsYouGoOptions']);
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SpotOptions'])) {
            $model->spotOptions = spotOptions::fromMap($map['SpotOptions']);
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['TargetCapacitySpecification'])) {
            $model->targetCapacitySpecification = targetCapacitySpecification::fromMap($map['TargetCapacitySpecification']);
        }
        if (isset($map['TerminateInstances'])) {
            $model->terminateInstances = $map['TerminateInstances'];
        }
        if (isset($map['TerminateInstancesWithExpiration'])) {
            $model->terminateInstancesWithExpiration = $map['TerminateInstancesWithExpiration'];
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
