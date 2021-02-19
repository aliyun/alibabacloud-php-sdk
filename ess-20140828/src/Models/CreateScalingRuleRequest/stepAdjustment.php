<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20140828\Models\CreateScalingRuleRequest;

use AlibabaCloud\Tea\Model;

class stepAdjustment extends Model
{
    /**
     * @var float
     */
    public $metricIntervalUpperBound;

    /**
     * @var int
     */
    public $scalingAdjustment;

    /**
     * @var float
     */
    public $metricIntervalLowerBound;
    protected $_name = [
        'metricIntervalUpperBound' => 'MetricIntervalUpperBound',
        'scalingAdjustment'        => 'ScalingAdjustment',
        'metricIntervalLowerBound' => 'MetricIntervalLowerBound',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->metricIntervalUpperBound) {
            $res['MetricIntervalUpperBound'] = $this->metricIntervalUpperBound;
        }
        if (null !== $this->scalingAdjustment) {
            $res['ScalingAdjustment'] = $this->scalingAdjustment;
        }
        if (null !== $this->metricIntervalLowerBound) {
            $res['MetricIntervalLowerBound'] = $this->metricIntervalLowerBound;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stepAdjustment
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MetricIntervalUpperBound'])) {
            $model->metricIntervalUpperBound = $map['MetricIntervalUpperBound'];
        }
        if (isset($map['ScalingAdjustment'])) {
            $model->scalingAdjustment = $map['ScalingAdjustment'];
        }
        if (isset($map['MetricIntervalLowerBound'])) {
            $model->metricIntervalLowerBound = $map['MetricIntervalLowerBound'];
        }

        return $model;
    }
}
