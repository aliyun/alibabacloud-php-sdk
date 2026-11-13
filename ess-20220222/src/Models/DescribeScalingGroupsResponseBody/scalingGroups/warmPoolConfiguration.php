<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingGroupsResponseBody\scalingGroups;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingGroupsResponseBody\scalingGroups\warmPoolConfiguration\capacityOptions;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingGroupsResponseBody\scalingGroups\warmPoolConfiguration\instanceReusePolicy;

class warmPoolConfiguration extends Model
{
    /**
     * @var capacityOptions
     */
    public $capacityOptions;

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
    public $status;
    protected $_name = [
        'capacityOptions' => 'CapacityOptions',
        'instanceReusePolicy' => 'InstanceReusePolicy',
        'poolState' => 'PoolState',
        'status' => 'Status',
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

        if (null !== $this->instanceReusePolicy) {
            $res['InstanceReusePolicy'] = null !== $this->instanceReusePolicy ? $this->instanceReusePolicy->toArray($noStream) : $this->instanceReusePolicy;
        }

        if (null !== $this->poolState) {
            $res['PoolState'] = $this->poolState;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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

        if (isset($map['InstanceReusePolicy'])) {
            $model->instanceReusePolicy = instanceReusePolicy::fromMap($map['InstanceReusePolicy']);
        }

        if (isset($map['PoolState'])) {
            $model->poolState = $map['PoolState'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
