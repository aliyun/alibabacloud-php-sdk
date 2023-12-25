<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingRulesResponseBody\scalingRules;

use AlibabaCloud\Tea\Model;

class stepAdjustments extends Model
{
    /**
     * @description The lower limit that is specified in a step adjustment. Valid values: -9.999999E18 to 9.999999E18.
     *
     * @example 1.0
     *
     * @var float
     */
    public $metricIntervalLowerBound;

    /**
     * @description The upper limit that is specified in a step adjustment. Valid values: -9.999999E18 to 9.999999E18.
     *
     * @example 5.0
     *
     * @var float
     */
    public $metricIntervalUpperBound;

    /**
     * @description The number of ECS instances that are scaled in a step adjustment.
     *
     * @example 1
     *
     * @var int
     */
    public $scalingAdjustment;
    protected $_name = [
        'metricIntervalLowerBound' => 'MetricIntervalLowerBound',
        'metricIntervalUpperBound' => 'MetricIntervalUpperBound',
        'scalingAdjustment'        => 'ScalingAdjustment',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->metricIntervalLowerBound) {
            $res['MetricIntervalLowerBound'] = $this->metricIntervalLowerBound;
        }
        if (null !== $this->metricIntervalUpperBound) {
            $res['MetricIntervalUpperBound'] = $this->metricIntervalUpperBound;
        }
        if (null !== $this->scalingAdjustment) {
            $res['ScalingAdjustment'] = $this->scalingAdjustment;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stepAdjustments
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MetricIntervalLowerBound'])) {
            $model->metricIntervalLowerBound = $map['MetricIntervalLowerBound'];
        }
        if (isset($map['MetricIntervalUpperBound'])) {
            $model->metricIntervalUpperBound = $map['MetricIntervalUpperBound'];
        }
        if (isset($map['ScalingAdjustment'])) {
            $model->scalingAdjustment = $map['ScalingAdjustment'];
        }

        return $model;
    }
}
