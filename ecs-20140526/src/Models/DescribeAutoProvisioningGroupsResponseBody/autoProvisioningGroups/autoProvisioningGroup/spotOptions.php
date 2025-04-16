<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupsResponseBody\autoProvisioningGroups\autoProvisioningGroup;

use AlibabaCloud\Dara\Model;

class spotOptions extends Model
{
    /**
     * @var string
     */
    public $allocationStrategy;

    /**
     * @var string
     */
    public $instanceInterruptionBehavior;

    /**
     * @var int
     */
    public $instancePoolsToUseCount;
    protected $_name = [
        'allocationStrategy' => 'AllocationStrategy',
        'instanceInterruptionBehavior' => 'InstanceInterruptionBehavior',
        'instancePoolsToUseCount' => 'InstancePoolsToUseCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
