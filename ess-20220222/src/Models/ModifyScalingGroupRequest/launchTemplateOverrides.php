<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\ModifyScalingGroupRequest;

use AlibabaCloud\Tea\Model;

class launchTemplateOverrides extends Model
{
    /**
     * @description The instance type. The instance type that you specify by using the InstanceType parameter overwrites the instance type that is specified in the launch template.
     *
     * You can use the InstanceType parameter to specify only instance types that are available for purchase.
     * @example ecs.c5.xlarge
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description 本参数用于指定实例启动模板覆盖规格（即`LaunchTemplateOverride.N.InstanceType`）的竞价价格上限。您可以指定N个该参数，扩展启动模板支持N个实例规格。N的取值范围：1~10。
     * >仅当`LaunchTemplateId`参数指定了启动模板时，该参数才生效。
     * @example 0.025
     *
     * @var float
     */
    public $spotPriceLimit;

    /**
     * @description The weight of the instance type. The weight specifies the capacity of a single instance of the specified instance type in the scaling group. If you want Auto Scaling to scale instances in the scaling group based on the weighted capacity of instances, you must specify the WeightedCapacity parameter after you specify the InstanceType parameter.
     *
     * Example:
     *
     *   Current capacity: 0
     *   Expected capacity: 6
     *   Capacity of ecs.c5.xlarge: 4
     *
     * Valid values of the WeightedCapacity parameter: 1 to 500.
     * @example 4
     *
     * @var int
     */
    public $weightedCapacity;
    protected $_name = [
        'instanceType'     => 'InstanceType',
        'spotPriceLimit'   => 'SpotPriceLimit',
        'weightedCapacity' => 'WeightedCapacity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->spotPriceLimit) {
            $res['SpotPriceLimit'] = $this->spotPriceLimit;
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
        if (isset($map['SpotPriceLimit'])) {
            $model->spotPriceLimit = $map['SpotPriceLimit'];
        }
        if (isset($map['WeightedCapacity'])) {
            $model->weightedCapacity = $map['WeightedCapacity'];
        }

        return $model;
    }
}
