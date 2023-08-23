<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\SDK\Ess\V20220222\Models\AttachLoadBalancersRequest\loadBalancerConfigs;
use AlibabaCloud\Tea\Model;

class AttachLoadBalancersRequest extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $async;

    /**
     * @example 123e4567-e89b-12d3-a456-42665544****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example false
     *
     * @var bool
     */
    public $forceAttach;

    /**
     * @var loadBalancerConfigs[]
     */
    public $loadBalancerConfigs;

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
    public $resourceOwnerAccount;

    /**
     * @example asg-bp1avr6ensitts3w****
     *
     * @var string
     */
    public $scalingGroupId;
    protected $_name = [
        'async'                => 'Async',
        'clientToken'          => 'ClientToken',
        'forceAttach'          => 'ForceAttach',
        'loadBalancerConfigs'  => 'LoadBalancerConfigs',
        'loadBalancers'        => 'LoadBalancers',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'scalingGroupId'       => 'ScalingGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->async) {
            $res['Async'] = $this->async;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->forceAttach) {
            $res['ForceAttach'] = $this->forceAttach;
        }
        if (null !== $this->loadBalancerConfigs) {
            $res['LoadBalancerConfigs'] = [];
            if (null !== $this->loadBalancerConfigs && \is_array($this->loadBalancerConfigs)) {
                $n = 0;
                foreach ($this->loadBalancerConfigs as $item) {
                    $res['LoadBalancerConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->loadBalancers) {
            $res['LoadBalancers'] = $this->loadBalancers;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->scalingGroupId) {
            $res['ScalingGroupId'] = $this->scalingGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AttachLoadBalancersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Async'])) {
            $model->async = $map['Async'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['ForceAttach'])) {
            $model->forceAttach = $map['ForceAttach'];
        }
        if (isset($map['LoadBalancerConfigs'])) {
            if (!empty($map['LoadBalancerConfigs'])) {
                $model->loadBalancerConfigs = [];
                $n                          = 0;
                foreach ($map['LoadBalancerConfigs'] as $item) {
                    $model->loadBalancerConfigs[$n++] = null !== $item ? loadBalancerConfigs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['LoadBalancers'])) {
            if (!empty($map['LoadBalancers'])) {
                $model->loadBalancers = $map['LoadBalancers'];
            }
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
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
