<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Tea\Model;

class RemoveInstancesRequest extends Model
{
    /**
     * @description 保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。只支持ASCII字符，且不能超过64个字符。更多信息，请参见[如何保证幂等性](~~25965~~)。
     *
     * @example 123e4567-e89b-12d3-a456-42665544****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies whether to adjust the expected number of ECS instances in the scaling group. Valid values:
     *
     *   true: After ECS instances are removed from the scaling group, the expected number of ECS instances in the scaling group decreases.
     *   false: After ECS instances are removed from the scaling group, the expected number of ECS instances in the scaling group remains unchanged.
     *
     * Default value: true.
     * @example true
     *
     * @var bool
     */
    public $decreaseDesiredCapacity;

    /**
     * @description The IDs of the ECS instances that you want to remove from the scaling group.
     *
     * @var string[]
     */
    public $instanceIds;

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
     * @description The action that you want Auto Scaling to perform after the ECS instance is removed from the scaling group. Valid values:
     *
     *   recycle: puts the ECS instance into economical mode.
     *
     **Note** This setting takes effect only if you set the ScalingPolicy parameter to recycle.
     *
     *   release: releases the ECS instance.
     *
     * The ScalingPolicy parameter that you specify when you call the CreateScalingGroup operation specifies the reclaim mode of the scaling group. The RemovePolicy parameter that you specify when you call the RemoveInstances operation specifies the action to be performed on ECS instances after the ECS instances are removed. Example:
     *
     *   If you set both the ScalingPolicy parameter and the RemovePolicy parameter to recycle, the ECS instances are put into economical mode after the ECS instances are removed from the scaling group.
     *   If you set the ScalingPolicy parameter to recycle and the RemovePolicy parameter to release, the ECS instances are released after the ECS instances are removed from the scaling group.
     *   If you set the ScalingPolicy parameter to release and the RemovePolicy parameter to recycle, the ECS instances are released after the ECS instances are removed from the scaling group.
     *   If you set both the ScalingPolicy parameter and the RemovePolicy parameter to release, the ECS instances are released after the ECS instances are removed from the scaling group.
     *
     * Default value: release.
     * @example release
     *
     * @var string
     */
    public $removePolicy;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The ID of the scaling group.
     *
     * @example asg-bp18p2yfxow2dloq****
     *
     * @var string
     */
    public $scalingGroupId;
    protected $_name = [
        'clientToken'             => 'ClientToken',
        'decreaseDesiredCapacity' => 'DecreaseDesiredCapacity',
        'instanceIds'             => 'InstanceIds',
        'ownerAccount'            => 'OwnerAccount',
        'ownerId'                 => 'OwnerId',
        'regionId'                => 'RegionId',
        'removePolicy'            => 'RemovePolicy',
        'resourceOwnerAccount'    => 'ResourceOwnerAccount',
        'resourceOwnerId'         => 'ResourceOwnerId',
        'scalingGroupId'          => 'ScalingGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->decreaseDesiredCapacity) {
            $res['DecreaseDesiredCapacity'] = $this->decreaseDesiredCapacity;
        }
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
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
        if (null !== $this->removePolicy) {
            $res['RemovePolicy'] = $this->removePolicy;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemoveInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DecreaseDesiredCapacity'])) {
            $model->decreaseDesiredCapacity = $map['DecreaseDesiredCapacity'];
        }
        if (isset($map['InstanceIds'])) {
            if (!empty($map['InstanceIds'])) {
                $model->instanceIds = $map['InstanceIds'];
            }
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
        if (isset($map['RemovePolicy'])) {
            $model->removePolicy = $map['RemovePolicy'];
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

        return $model;
    }
}
