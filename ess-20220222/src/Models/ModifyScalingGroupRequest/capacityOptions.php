<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\ModifyScalingGroupRequest;

use AlibabaCloud\Tea\Model;

class capacityOptions extends Model
{
    /**
     * @description Specifies whether to automatically create pay-as-you-go instances to meet the requirements on the number of ECS instances in the scaling group when the number of preemptible instances cannot be reached due to reasons such as cost-related issues and insufficient resources. This parameter takes effect only if you set `MultiAZPolicy` in the `CreateScalingGroup` operation to `COST_OPTIMIZED`. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $compensateWithOnDemand;

    /**
     * @description The minimum number of pay-as-you-go instances that must be contained in the scaling group. When the actual number of pay-as-you-go instances in the scaling group drops below the value of this parameter, Auto Scaling preferentially creates pay-as-you-go instances. Valid values: 0 to 1000.
     *
     * If you set `MultiAZPolicy` to `COMPOSABLE`, the default value is 0.
     * @example 30
     *
     * @var int
     */
    public $onDemandBaseCapacity;

    /**
     * @description The percentage of pay-as-you-go instances in the excess instances when the minimum number of pay-as-you-go instances is reached. `OnDemandBaseCapacity` specifies the minimum number of pay-as-you-go instances that must be contained in the scaling group. Valid values: 0 to 100
     *
     * If you set `MultiAZPolicy` to `COMPOSABLE`, the default value is 100.
     * @example 20
     *
     * @var int
     */
    public $onDemandPercentageAboveBaseCapacity;

    /**
     * @description Specifies whether to replace pay-as-you-go ECS instances with preemptible ECS instances. If you specify `CompensateWithOnDemand`, it may result in a higher percentage of pay-as-you-go instances compared to the value of `OnDemandPercentageAboveBaseCapacity`. In this scenario, Auto Scaling will try to deploy preemptible ECS instances to replace the surplus pay-as-you-go ECS instances. When `CompensateWithOnDemand` is specified, Auto Scaling creates pay-as-you-go ECS instances if there are not enough preemptible instance types. To avoid keeping these pay-as-you-go ECS instances for long periods, Auto Scaling tries to replace them with preemptible instances as soon as enough of preemptible instance types become available. Valid values:
     *
     *   true
     *   false
     *
     * Default value: false.
     * @example true
     *
     * @var bool
     */
    public $spotAutoReplaceOnDemand;
    protected $_name = [
        'compensateWithOnDemand'              => 'CompensateWithOnDemand',
        'onDemandBaseCapacity'                => 'OnDemandBaseCapacity',
        'onDemandPercentageAboveBaseCapacity' => 'OnDemandPercentageAboveBaseCapacity',
        'spotAutoReplaceOnDemand'             => 'SpotAutoReplaceOnDemand',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->compensateWithOnDemand) {
            $res['CompensateWithOnDemand'] = $this->compensateWithOnDemand;
        }
        if (null !== $this->onDemandBaseCapacity) {
            $res['OnDemandBaseCapacity'] = $this->onDemandBaseCapacity;
        }
        if (null !== $this->onDemandPercentageAboveBaseCapacity) {
            $res['OnDemandPercentageAboveBaseCapacity'] = $this->onDemandPercentageAboveBaseCapacity;
        }
        if (null !== $this->spotAutoReplaceOnDemand) {
            $res['SpotAutoReplaceOnDemand'] = $this->spotAutoReplaceOnDemand;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return capacityOptions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CompensateWithOnDemand'])) {
            $model->compensateWithOnDemand = $map['CompensateWithOnDemand'];
        }
        if (isset($map['OnDemandBaseCapacity'])) {
            $model->onDemandBaseCapacity = $map['OnDemandBaseCapacity'];
        }
        if (isset($map['OnDemandPercentageAboveBaseCapacity'])) {
            $model->onDemandPercentageAboveBaseCapacity = $map['OnDemandPercentageAboveBaseCapacity'];
        }
        if (isset($map['SpotAutoReplaceOnDemand'])) {
            $model->spotAutoReplaceOnDemand = $map['SpotAutoReplaceOnDemand'];
        }

        return $model;
    }
}
