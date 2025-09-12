<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Dara\Model;

class RemoveInstancesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var bool
     */
    public $decreaseDesiredCapacity;

    /**
     * @var bool
     */
    public $ignoreInvalidInstance;

    /**
     * @var string[]
     */
    public $instanceIds;

    /**
     * @var string
     */
    public $lifecycleHookContextShrink;

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
     * @var string
     */
    public $scalingGroupId;

    /**
     * @var int
     */
    public $stopInstanceTimeout;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'decreaseDesiredCapacity' => 'DecreaseDesiredCapacity',
        'ignoreInvalidInstance' => 'IgnoreInvalidInstance',
        'instanceIds' => 'InstanceIds',
        'lifecycleHookContextShrink' => 'LifecycleHookContext',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'removePolicy' => 'RemovePolicy',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'scalingGroupId' => 'ScalingGroupId',
        'stopInstanceTimeout' => 'StopInstanceTimeout',
    ];

    public function validate()
    {
        if (\is_array($this->instanceIds)) {
            Model::validateArray($this->instanceIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->instanceIds)) {
                $res['InstanceIds'] = [];
                $n1 = 0;
                foreach ($this->instanceIds as $item1) {
                    $res['InstanceIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->lifecycleHookContextShrink) {
            $res['LifecycleHookContext'] = $this->lifecycleHookContextShrink;
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

        if (null !== $this->stopInstanceTimeout) {
            $res['StopInstanceTimeout'] = $this->stopInstanceTimeout;
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
                $model->instanceIds = [];
                $n1 = 0;
                foreach ($map['InstanceIds'] as $item1) {
                    $model->instanceIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['LifecycleHookContext'])) {
            $model->lifecycleHookContextShrink = $map['LifecycleHookContext'];
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

        if (isset($map['StopInstanceTimeout'])) {
            $model->stopInstanceTimeout = $map['StopInstanceTimeout'];
        }

        return $model;
    }
}
