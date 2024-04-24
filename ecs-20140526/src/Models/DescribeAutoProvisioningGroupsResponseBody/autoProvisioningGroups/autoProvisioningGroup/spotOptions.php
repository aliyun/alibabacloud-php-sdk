<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupsResponseBody\autoProvisioningGroups\autoProvisioningGroup;

use AlibabaCloud\Tea\Model;

class spotOptions extends Model
{
    /**
     * @description The policy for creating preemptible instances. Valid values:
     *
     *   lowest-price: cost optimization policy. This policy indicates that the lowest-priced instance type is used to create instances.
     *   diversified: balanced distribution policy. This policy indicates that instances are created evenly across multiple zones specified in the extended configuration.
     *
     * @example diversified
     *
     * @var string
     */
    public $allocationStrategy;

    /**
     * @description The action to be performed after the excess preemptible instances are stopped. Valid values:
     *
     *   stop: retains the excess preemptible instances in the stopped state.
     *   terminate: releases the excess preemptible instances.
     *
     * @example stop
     *
     * @var string
     */
    public $instanceInterruptionBehavior;

    /**
     * @description The number of instances that the auto provisioning group creates by selecting the instance type of the lowest price.
     *
     * >  This parameter is set when the auto provisioning group is created, and cannot be modified.
     * @example 2
     *
     * @var int
     */
    public $instancePoolsToUseCount;
    protected $_name = [
        'allocationStrategy'           => 'AllocationStrategy',
        'instanceInterruptionBehavior' => 'InstanceInterruptionBehavior',
        'instancePoolsToUseCount'      => 'InstancePoolsToUseCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allocationStrategy) {
            $res['AllocationStrategy'] = $this->allocationStrategy;
        }
        if (null !== $this->instanceInterruptionBehavior) {
            $res['InstanceInterruptionBehavior'] = $this->instanceInterruptionBehavior;
        }
        if (null !== $this->instancePoolsToUseCount) {
            $res['InstancePoolsToUseCount'] = $this->instancePoolsToUseCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return spotOptions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllocationStrategy'])) {
            $model->allocationStrategy = $map['AllocationStrategy'];
        }
        if (isset($map['InstanceInterruptionBehavior'])) {
            $model->instanceInterruptionBehavior = $map['InstanceInterruptionBehavior'];
        }
        if (isset($map['InstancePoolsToUseCount'])) {
            $model->instancePoolsToUseCount = $map['InstancePoolsToUseCount'];
        }

        return $model;
    }
}
