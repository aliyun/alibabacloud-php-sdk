<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\ModifyScalingConfigurationShrinkRequest;

use AlibabaCloud\Tea\Model;

class instanceTypeOverrides extends Model
{
    /**
     * @description The instance type. If you want to specify the capacity of instance types in the scaling configuration, specify InstanceType and WeightedCapacity at the same time.
     *
     * You can use InstanceType to specify multiple instance types and WeightedCapacity to specify the weights of the instance types.
     *
     * > If you specify InstanceType, you cannot specify InstanceTypes.
     *
     * You can use InstanceType to specify only instance types that are available for purchase.
     *
     * @example ecs.c5.xlarge
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The weight of the instance type. The weight specifies the capacity of an instance of the specified instance type in the scaling group. If you want Auto Scaling to scale instances in the scaling group based on the weighted capacity of the instances, specify WeightedCapacity after you specify InstanceType.
     *
     * A higher weight specifies that a smaller number of instances of the specified instance type are required to meet the expected capacity requirement.
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
