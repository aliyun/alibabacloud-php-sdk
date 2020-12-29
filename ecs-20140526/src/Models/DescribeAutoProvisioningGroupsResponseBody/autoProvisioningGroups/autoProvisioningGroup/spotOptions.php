<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupsResponseBody\autoProvisioningGroups\autoProvisioningGroup;

use AlibabaCloud\Tea\Model;

class spotOptions extends Model
{
    /**
     * @var int
     */
    public $instancePoolsToUseCount;

    /**
     * @var string
     */
    public $instanceInterruptionBehavior;

    /**
     * @var string
     */
    public $allocationStrategy;
    protected $_name = [
        'instancePoolsToUseCount'      => 'InstancePoolsToUseCount',
        'instanceInterruptionBehavior' => 'InstanceInterruptionBehavior',
        'allocationStrategy'           => 'AllocationStrategy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instancePoolsToUseCount) {
            $res['InstancePoolsToUseCount'] = $this->instancePoolsToUseCount;
        }
        if (null !== $this->instanceInterruptionBehavior) {
            $res['InstanceInterruptionBehavior'] = $this->instanceInterruptionBehavior;
        }
        if (null !== $this->allocationStrategy) {
            $res['AllocationStrategy'] = $this->allocationStrategy;
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
        if (isset($map['InstancePoolsToUseCount'])) {
            $model->instancePoolsToUseCount = $map['InstancePoolsToUseCount'];
        }
        if (isset($map['InstanceInterruptionBehavior'])) {
            $model->instanceInterruptionBehavior = $map['InstanceInterruptionBehavior'];
        }
        if (isset($map['AllocationStrategy'])) {
            $model->allocationStrategy = $map['AllocationStrategy'];
        }

        return $model;
    }
}
