<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Tea\Model;

class AttachInstancesRequest extends Model
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
     * @description Specifies whether the scaling group manages the lifecycles of instances that are manually added to the scaling group. Valid values:
     *
     *   true: The scaling group manages the lifecycles of instances that are manually added in a similar manner in which the scaling group manages the lifecycles of automatically created instances. After Auto Scaling removes instances from the scaling group, Auto Scaling releases the instances. After you call the DetachInstances operation to remove instances from the scaling group, Auto Scaling does not release the instances.
     *   false: The scaling group does not manage the lifecycles of instances that are manually added. After Auto Scaling removes instances from the scaling group, Auto Scaling does not release the instances.
     *
     * Default value: false.
     * @example false
     *
     * @var bool
     */
    public $entrusted;

    /**
     * @description The IDs of the ECS instances or elastic container instances that you want to add.
     *
     * @var string[]
     */
    public $instanceIds;

    /**
     * @description Specifies whether to trigger a lifecycle hook for a scale-out activity. Valid values:
     *
     *   true
     *   false
     *
     * Default value: false.
     * @example false
     *
     * @var bool
     */
    public $lifecycleHook;

    /**
     * @description The weights of the ECS instances or elastic container instances as the backend servers of the associated Classic Load Balancer (CLB) instance.
     *
     * @var int[]
     */
    public $loadBalancerWeights;

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
        'clientToken'          => 'ClientToken',
        'entrusted'            => 'Entrusted',
        'instanceIds'          => 'InstanceIds',
        'lifecycleHook'        => 'LifecycleHook',
        'loadBalancerWeights'  => 'LoadBalancerWeights',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'scalingGroupId'       => 'ScalingGroupId',
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
        if (null !== $this->entrusted) {
            $res['Entrusted'] = $this->entrusted;
        }
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }
        if (null !== $this->lifecycleHook) {
            $res['LifecycleHook'] = $this->lifecycleHook;
        }
        if (null !== $this->loadBalancerWeights) {
            $res['LoadBalancerWeights'] = $this->loadBalancerWeights;
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
     * @return AttachInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Entrusted'])) {
            $model->entrusted = $map['Entrusted'];
        }
        if (isset($map['InstanceIds'])) {
            if (!empty($map['InstanceIds'])) {
                $model->instanceIds = $map['InstanceIds'];
            }
        }
        if (isset($map['LifecycleHook'])) {
            $model->lifecycleHook = $map['LifecycleHook'];
        }
        if (isset($map['LoadBalancerWeights'])) {
            if (!empty($map['LoadBalancerWeights'])) {
                $model->loadBalancerWeights = $map['LoadBalancerWeights'];
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
