<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\CreateScalingConfigurationRequest;

use AlibabaCloud\Tea\Model;

class instanceTypeOverrides extends Model
{
    /**
     * @description Instance type N that you want to use to override the instance type that is specified in the launch template.
     *
     * If you want to trigger scale-outs based on the weighted capacities of instances, specify InstanceType and WeightedCapacity at the same time. You can specify N instance types by using the Extended Configurations feature. Valid values of N: 1 to 10.
     *
     * > This parameter takes effect only if you specify LaunchTemplateId.
     *
     * You can specify an instance type that is available for purchase as the value of InstanceType.
     *
     * @example ecs.c5.xlarge
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The weight of instance type N. If you want to trigger scale-outs based on the weighted capacities of instances, you must specify WeightedCapacity after you specify InstanceType.
     *
     * The weight of an instance type specifies the capacity of an instance of the instance type in the scaling group. A higher weight specifies that a smaller number of instances of the specified instance type is required to meet the expected capacity requirement.
     *
     * Performance metrics, such as the number of vCPUs and the memory size of each instance type, may vary. You can specify different weights for different instance types based on your business requirements.
     *
     * Example:
     *
     *   Current capacity: 0
     *   Expected capacity: 6
     *   Capacity of ecs.c5.xlarge: 4
     *
     * To meet the expected capacity requirement, Auto Scaling must create and add two ecs.c5.xlarge instances.
     *
     * > The capacity of the scaling group cannot exceed the sum of the maximum number of instances that is specified by MaxSize and the maximum weight of the instance types.
     *
     * Valid values of WeightedCapacity: 1 to 500.
     *
     * @example 4
     *
     * @var int
     */
    public $weightedCapacity;
    protected $_name = [
        'instanceType' => 'InstanceType',
        'weightedCapacity' => 'WeightedCapacity',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->weightedCapacity) {
            $res['WeightedCapacity'] = $this->weightedCapacity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceTypeOverrides
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['WeightedCapacity'])) {
            $model->weightedCapacity = $map['WeightedCapacity'];
        }

        return $model;
    }
}
