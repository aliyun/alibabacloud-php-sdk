<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\CreateScalingRuleRequest;

use AlibabaCloud\Dara\Model;

class stepAdjustments extends Model
{
    /**
     * @var float
     */
    public $metricIntervalLowerBound;
    /**
     * @var float
     */
    public $metricIntervalUpperBound;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
