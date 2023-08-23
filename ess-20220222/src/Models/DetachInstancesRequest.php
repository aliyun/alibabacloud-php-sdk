<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Tea\Model;

class DetachInstancesRequest extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $decreaseDesiredCapacity;

    /**
     * @example both
     *
     * @var string
     */
    public $detachOption;

    /**
     * @var string[]
     */
    public $instanceIds;

    /**
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
     * @example asg-bp1igpak5ft1flyp****
     *
     * @var string
     */
    public $scalingGroupId;
    protected $_name = [
        'decreaseDesiredCapacity' => 'DecreaseDesiredCapacity',
        'detachOption'            => 'DetachOption',
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
        if (null !== $this->decreaseDesiredCapacity) {
            $res['DecreaseDesiredCapacity'] = $this->decreaseDesiredCapacity;
        }
        if (null !== $this->detachOption) {
            $res['DetachOption'] = $this->detachOption;
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
        if (isset($map['DecreaseDesiredCapacity'])) {
            $model->decreaseDesiredCapacity = $map['DecreaseDesiredCapacity'];
        }
        if (isset($map['DetachOption'])) {
            $model->detachOption = $map['DetachOption'];
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
