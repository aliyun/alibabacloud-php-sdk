<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Tea\Model;

class DetachInstancesRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length. For more information, see [Ensure idempotence](https://help.aliyun.com/document_detail/25965.html).
     * @example 123e4567-e89b-12d3-a456-42665544****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies whether to adjust the expected number of instances in the scaling group. Valid values:
     *
     *   true: After a specific number of instances are removed from the scaling group, the expected number of instances in the scaling group decreases.
     *   false: After a specific number of instances are removed from the scaling group, the expected number of instances in the scaling group remains unchanged.
     *
     * Default value: true.
     * @example true
     *
     * @var bool
     */
    public $decreaseDesiredCapacity;

    /**
     * @description Specifies whether to detach the ECS instances or elastic container instances that are marked for removal from the associated load balancers, and whether to remove the private IP addresses of these instances from the IP address whitelists of the associated ApsaraDB RDS instances.
     *
     * >  This parameter is not supported if you want to remove Alibaba Cloud-hosted third-party instances from a scaling group.
     * @example both
     *
     * @var string
     */
    public $detachOption;

    /**
     * @description 从伸缩组移出一批实例时，是否忽略其中无效的实例。取值范围：
     * 默认值：false。
     * @example false
     *
     * @var bool
     */
    public $ignoreInvalidInstance;

    /**
     * @description The IDs of the ECS instances, elastic container instances, or Aliababa Cloud-managed third-party instances that you want to remove from a scaling group.
     *
     * This parameter is required.
     * @var string[]
     */
    public $instanceIds;

    /**
     * @description Specifies whether to trigger a lifecycle hook for scale-in purposes when ECS instances or elastic container instances are removed from the scaling group. Valid values:
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
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The ID of the scaling group.
     *
     * This parameter is required.
     * @example asg-bp1igpak5ft1flyp****
     *
     * @var string
     */
    public $scalingGroupId;
    protected $_name = [
        'clientToken'             => 'ClientToken',
        'decreaseDesiredCapacity' => 'DecreaseDesiredCapacity',
        'detachOption'            => 'DetachOption',
        'ignoreInvalidInstance'   => 'IgnoreInvalidInstance',
        'instanceIds'             => 'InstanceIds',
        'lifecycleHook'           => 'LifecycleHook',
        'ownerAccount'            => 'OwnerAccount',
        'ownerId'                 => 'OwnerId',
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
        if (null !== $this->detachOption) {
            $res['DetachOption'] = $this->detachOption;
        }
        if (null !== $this->ignoreInvalidInstance) {
            $res['IgnoreInvalidInstance'] = $this->ignoreInvalidInstance;
        }
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }
        if (null !== $this->lifecycleHook) {
            $res['LifecycleHook'] = $this->lifecycleHook;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
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
     * @return DetachInstancesRequest
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
        if (isset($map['DetachOption'])) {
            $model->detachOption = $map['DetachOption'];
        }
        if (isset($map['IgnoreInvalidInstance'])) {
            $model->ignoreInvalidInstance = $map['IgnoreInvalidInstance'];
        }
        if (isset($map['InstanceIds'])) {
            if (!empty($map['InstanceIds'])) {
                $model->instanceIds = $map['InstanceIds'];
            }
        }
        if (isset($map['LifecycleHook'])) {
            $model->lifecycleHook = $map['LifecycleHook'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
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
