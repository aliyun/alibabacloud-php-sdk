<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alb\V20200616\Models\ModifyCapacityReservationRequest\minimumLoadBalancerCapacity;

class ModifyCapacityReservationRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var string
     */
    public $loadBalancerId;

    /**
     * @var minimumLoadBalancerCapacity
     */
    public $minimumLoadBalancerCapacity;

    /**
     * @var bool
     */
    public $resetCapacityReservation;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'dryRun' => 'DryRun',
        'loadBalancerId' => 'LoadBalancerId',
        'minimumLoadBalancerCapacity' => 'MinimumLoadBalancerCapacity',
        'resetCapacityReservation' => 'ResetCapacityReservation',
    ];

    public function validate()
    {
        if (null !== $this->minimumLoadBalancerCapacity) {
            $this->minimumLoadBalancerCapacity->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
        }

        if (null !== $this->minimumLoadBalancerCapacity) {
            $res['MinimumLoadBalancerCapacity'] = null !== $this->minimumLoadBalancerCapacity ? $this->minimumLoadBalancerCapacity->toArray($noStream) : $this->minimumLoadBalancerCapacity;
        }

        if (null !== $this->resetCapacityReservation) {
            $res['ResetCapacityReservation'] = $this->resetCapacityReservation;
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

        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }

        if (isset($map['MinimumLoadBalancerCapacity'])) {
            $model->minimumLoadBalancerCapacity = minimumLoadBalancerCapacity::fromMap($map['MinimumLoadBalancerCapacity']);
        }

        if (isset($map['ResetCapacityReservation'])) {
            $model->resetCapacityReservation = $map['ResetCapacityReservation'];
        }

        return $model;
    }
}
