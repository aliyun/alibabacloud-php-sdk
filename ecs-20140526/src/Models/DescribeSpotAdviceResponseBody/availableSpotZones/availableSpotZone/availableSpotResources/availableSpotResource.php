<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSpotAdviceResponseBody\availableSpotZones\availableSpotZone\availableSpotResources;

use AlibabaCloud\Tea\Model;

class availableSpotResource extends Model
{
    /**
     * @description The percentage of the average preemptible instance price relative to the pay-as-you-go instance price in the previous 30 days. Unit: %. Valid values: 1 to 100.
     *
     * You can calculate the average preemptible instance price based on the return value. For example, if the pay-as-you-go instance price is 1 and the return value of this parameter is 20, the average preemptible instance price in the previous 30 days is 0.2.
     * @example 20
     *
     * @var int
     */
    public $averageSpotDiscount;

    /**
     * @description The instance type.
     *
     * @example ecs.c5.large
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The release rate range of preemptible instances in the previous 30 days, which corresponds to the `InterruptionRate` value. Valid values:
     *
     *   0-3%
     *   3-5%
     *   5-10%
     *   10-100%
     *
     * @example 0-3%
     *
     * @var string
     */
    public $interruptRateDesc;

    /**
     * @description The average release rate of preemptible instances in the previous 30 days. Unit: %.
     *
     * @example 0
     *
     * @var float
     */
    public $interruptionRate;
    protected $_name = [
        'averageSpotDiscount' => 'AverageSpotDiscount',
        'instanceType'        => 'InstanceType',
        'interruptRateDesc'   => 'InterruptRateDesc',
        'interruptionRate'    => 'InterruptionRate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->averageSpotDiscount) {
            $res['AverageSpotDiscount'] = $this->averageSpotDiscount;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->interruptRateDesc) {
            $res['InterruptRateDesc'] = $this->interruptRateDesc;
        }
        if (null !== $this->interruptionRate) {
            $res['InterruptionRate'] = $this->interruptionRate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return availableSpotResource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AverageSpotDiscount'])) {
            $model->averageSpotDiscount = $map['AverageSpotDiscount'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['InterruptRateDesc'])) {
            $model->interruptRateDesc = $map['InterruptRateDesc'];
        }
        if (isset($map['InterruptionRate'])) {
            $model->interruptionRate = $map['InterruptionRate'];
        }

        return $model;
    }
}
