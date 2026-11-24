<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ess\V20220222\Models\PutWarmPoolRequest\capacityOptions;
use AlibabaCloud\SDK\Ess\V20220222\Models\PutWarmPoolRequest\instanceReusePolicy;

class PutWarmPoolRequest extends Model
{
    /**
     * @var capacityOptions
     */
    public $capacityOptions;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var instanceReusePolicy
     */
    public $instanceReusePolicy;

    /**
     * @var string
     */
    public $poolState;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $scalingGroupId;
    protected $_name = [
        'capacityOptions' => 'CapacityOptions',
        'clientToken' => 'ClientToken',
        'instanceReusePolicy' => 'InstanceReusePolicy',
        'poolState' => 'PoolState',
        'regionId' => 'RegionId',
        'scalingGroupId' => 'ScalingGroupId',
    ];

    public function validate()
    {
        if (null !== $this->capacityOptions) {
            $this->capacityOptions->validate();
        }
        if (null !== $this->instanceReusePolicy) {
            $this->instanceReusePolicy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->capacityOptions) {
            $res['CapacityOptions'] = null !== $this->capacityOptions ? $this->capacityOptions->toArray($noStream) : $this->capacityOptions;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->instanceReusePolicy) {
            $res['InstanceReusePolicy'] = null !== $this->instanceReusePolicy ? $this->instanceReusePolicy->toArray($noStream) : $this->instanceReusePolicy;
        }

        if (null !== $this->poolState) {
            $res['PoolState'] = $this->poolState;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['CapacityOptions'])) {
            $model->capacityOptions = capacityOptions::fromMap($map['CapacityOptions']);
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['InstanceReusePolicy'])) {
            $model->instanceReusePolicy = instanceReusePolicy::fromMap($map['InstanceReusePolicy']);
        }

        if (isset($map['PoolState'])) {
            $model->poolState = $map['PoolState'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ScalingGroupId'])) {
            $model->scalingGroupId = $map['ScalingGroupId'];
        }

        return $model;
    }
}
