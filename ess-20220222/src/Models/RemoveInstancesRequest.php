<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Tea\Model;

class RemoveInstancesRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length. For more information, see [How to ensure idempotence](https://help.aliyun.com/document_detail/25965.html).
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
     * @example false
     *
     * @var bool
     */
    public $ignoreInvalidInstance;

    /**
     * @description The IDs of the ECS instances that you want to remove from the scaling group.
     *
     * This parameter is required.
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
     * @description The action subsequent to the removal of the Elastic Compute Service (ECS) instances. Valid values:
     *
     *   recycle: The ECS instances enter the Economical Mode.
     *
     **
     *
     **Note** This setting is applicable only if you set `ScalingPolicy` to `recycle`.
     *
     *   release: The ECS instances are released.
     *
     * ScalingPolicy of the CreateScalingGroup operation specifies the reclaim mode of the scaling group while RemovePolicy of the RemoveInstances operation specifies the subsequent action when an ECS instance is removed from the scaling group. Examples:
     *
     *   If you set ScalingPolicy and RemovePolicy to recycle, the ECS instances enter the Economical Mode when they are removed.
     *   If you set ScalingPolicy to recycle and RemovePolicy to release, the ECS instances are released when they are removed.
     *   If you set ScalingPolicy to release and RemovePolicy to recycle, the ECS instances are released when they are removed.
     *   If you set ScalingPolicy and RemovePolicy to release, the ECS instances are released when they are removed.
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
     * This parameter is required.
     * @example asg-bp18p2yfxow2dloq****
     *
     * @var string
     */
    public $scalingGroupId;
    protected $_name = [
        'clientToken'             => 'ClientToken',
        'decreaseDesiredCapacity' => 'DecreaseDesiredCapacity',
        'ignoreInvalidInstance'   => 'IgnoreInvalidInstance',
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
        if (null !== $this->ignoreInvalidInstance) {
            $res['IgnoreInvalidInstance'] = $this->ignoreInvalidInstance;
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
        if (isset($map['IgnoreInvalidInstance'])) {
            $model->ignoreInvalidInstance = $map['IgnoreInvalidInstance'];
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
