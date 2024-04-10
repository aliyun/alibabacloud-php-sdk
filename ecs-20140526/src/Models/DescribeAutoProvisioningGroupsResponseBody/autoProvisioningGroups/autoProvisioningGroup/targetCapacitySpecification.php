<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupsResponseBody\autoProvisioningGroups\autoProvisioningGroup;

use AlibabaCloud\Tea\Model;

class targetCapacitySpecification extends Model
{
    /**
     * @description The type of supplemental instances. When the sum of the `PayAsYouGoTargetCapacity` and `SpotTargetCapacity` values is less than the `TotalTargetCapacity` value, the auto provisioning group creates instances of the specified billing method to meet the target capacity. Valid values:
     *
     *   PayAsYouGo: pay-as-you-go instances
     *   Spot: preemptible instances
     *
     * @example Spot
     *
     * @var string
     */
    public $defaultTargetCapacityType;

    /**
     * @description The target capacity of pay-as-you-go instances in the auto provisioning group.
     *
     * @example 30
     *
     * @var float
     */
    public $payAsYouGoTargetCapacity;

    /**
     * @description The target capacity of preemptible instances in the auto provisioning group.
     *
     * @example 20
     *
     * @var float
     */
    public $spotTargetCapacity;

    /**
     * @description The target capacity of the auto provisioning group. The capacity consists of the following parts:
     *
     *   PayAsYouGoTargetCapacity
     *   SpotTargetCapacity
     *   The supplemental capacity besides instance capacities specified by PayAsYouGoTargetCapacity and SpotTargetCapacity.
     *
     * @example 60
     *
     * @var float
     */
    public $totalTargetCapacity;
    protected $_name = [
        'defaultTargetCapacityType' => 'DefaultTargetCapacityType',
        'payAsYouGoTargetCapacity'  => 'PayAsYouGoTargetCapacity',
        'spotTargetCapacity'        => 'SpotTargetCapacity',
        'totalTargetCapacity'       => 'TotalTargetCapacity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->defaultTargetCapacityType) {
            $res['DefaultTargetCapacityType'] = $this->defaultTargetCapacityType;
        }
        if (null !== $this->payAsYouGoTargetCapacity) {
            $res['PayAsYouGoTargetCapacity'] = $this->payAsYouGoTargetCapacity;
        }
        if (null !== $this->spotTargetCapacity) {
            $res['SpotTargetCapacity'] = $this->spotTargetCapacity;
        }
        if (null !== $this->totalTargetCapacity) {
            $res['TotalTargetCapacity'] = $this->totalTargetCapacity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return targetCapacitySpecification
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DefaultTargetCapacityType'])) {
            $model->defaultTargetCapacityType = $map['DefaultTargetCapacityType'];
        }
        if (isset($map['PayAsYouGoTargetCapacity'])) {
            $model->payAsYouGoTargetCapacity = $map['PayAsYouGoTargetCapacity'];
        }
        if (isset($map['SpotTargetCapacity'])) {
            $model->spotTargetCapacity = $map['SpotTargetCapacity'];
        }
        if (isset($map['TotalTargetCapacity'])) {
            $model->totalTargetCapacity = $map['TotalTargetCapacity'];
        }

        return $model;
    }
}
