<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Dara\Model;

class DetachLoadBalancersRequest extends Model
{
    /**
     * @var bool
     */
    public $async;
    /**
     * @var string
     */
    public $clientToken;
    /**
     * @var bool
     */
    public $forceDetach;
    /**
     * @var string[]
     */
    public $loadBalancers;
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
    public $resourceOwnerAccount;
    /**
     * @var string
     */
    public $scalingGroupId;
    protected $_name = [
        'async'                => 'Async',
        'clientToken'          => 'ClientToken',
        'forceDetach'          => 'ForceDetach',
        'loadBalancers'        => 'LoadBalancers',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'scalingGroupId'       => 'ScalingGroupId',
    ];

    public function validate()
    {
        if (\is_array($this->loadBalancers)) {
            Model::validateArray($this->loadBalancers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->async) {
            $res['Async'] = $this->async;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->forceDetach) {
            $res['ForceDetach'] = $this->forceDetach;
        }

        if (null !== $this->loadBalancers) {
            if (\is_array($this->loadBalancers)) {
                $res['LoadBalancers'] = [];
                $n1                   = 0;
                foreach ($this->loadBalancers as $item1) {
                    $res['LoadBalancers'][$n1++] = $item1;
                }
            }
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

        if (null !== $this->scalingGroupId) {
            $res['ScalingGroupId'] = $this->scalingGroupId;
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
        if (isset($map['Async'])) {
            $model->async = $map['Async'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['ForceDetach'])) {
            $model->forceDetach = $map['ForceDetach'];
        }

        if (isset($map['LoadBalancers'])) {
            if (!empty($map['LoadBalancers'])) {
                $model->loadBalancers = [];
                $n1                   = 0;
                foreach ($map['LoadBalancers'] as $item1) {
                    $model->loadBalancers[$n1++] = $item1;
                }
            }
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

        if (isset($map['ScalingGroupId'])) {
            $model->scalingGroupId = $map['ScalingGroupId'];
        }

        return $model;
    }
}
