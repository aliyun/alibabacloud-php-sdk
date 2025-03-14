<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\EnableScalingGroupRequest;

use AlibabaCloud\Tea\Model;

class launchTemplateOverrides extends Model
{
    /**
     * @description The instance type. If you want to scale instances based on instance type weights in the scaling group, you must specify `LaunchTemplateOverrides.WeightedCapacity` after you specify this parameter.
     *
     * The instance type specified by using this parameter overwrites the instance type of the launch template.
     *
     * >  This parameter takes effect only if you specify LaunchTemplateId.
     *
     * You can use this parameter to specify any instance types that are available for purchase.
     *
     * @example ecs.c5.xlarge
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The weight of the instance type. If you want to scale instances based on instance type weights in the scaling group, you must specify this parameter after you specify `LaunchTemplateOverrides.InstanceType`.
     *
     * The weight specifies the capacity of an instance of the specified instance type in the scaling group. A higher weight specifies that a smaller number of instances of the specified instance type are required to meet the expected capacity requirement.
     *
     * Performance metrics such as the number of vCPUs and the memory size of each instance type may vary. You can specify different weights for different instance types based on your business requirements.
     *
     * Example:
     *
     *   Current capacity: 0
     *   Expected capacity: 6
     *   Capacity of ecs.c5.xlarge: 4
     *
     * To reach the expected capacity, Auto Scaling must scale out two instances of ecs.c5.xlarge.
     *
     * >  The total capacity of the scaling group is constrained and cannot surpass the combined total of the maximum group size defined by MaxSize and the highest weight assigned to any instance type.
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
     * @return launchTemplateOverrides
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
