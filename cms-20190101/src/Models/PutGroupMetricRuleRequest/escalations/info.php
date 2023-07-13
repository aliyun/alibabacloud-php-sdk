<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\PutGroupMetricRuleRequest\escalations;

use AlibabaCloud\Tea\Model;

class info extends Model
{
    /**
     * @description The time period during which the alert rule is effective.
     *
     * @example GreaterThanOrEqualToThreshold
     *
     * @var string
     */
    public $comparisonOperator;

    /**
     * @description The mute period during which new alerts are not sent even if the trigger conditions are met.
     *
     * Unit: seconds. Default value: 86400.
     * @example Average
     *
     * @var string
     */
    public $statistics;

    /**
     * @description The alert contact group.
     *
     * @example 90
     *
     * @var string
     */
    public $threshold;

    /**
     * @description The statistical methods for Critical-level alerts. Separate multiple statistical methods with commas (,). Valid values:
     *
     *   Average: the average value
     *   Minimum: the minimum value
     *   Maximum: the maximum value
     *
     * @example 3
     *
     * @var int
     */
    public $times;
    protected $_name = [
        'comparisonOperator' => 'ComparisonOperator',
        'statistics'         => 'Statistics',
        'threshold'          => 'Threshold',
        'times'              => 'Times',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->comparisonOperator) {
            $res['ComparisonOperator'] = $this->comparisonOperator;
        }
        if (null !== $this->statistics) {
            $res['Statistics'] = $this->statistics;
        }
        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }
        if (null !== $this->times) {
            $res['Times'] = $this->times;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return info
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ComparisonOperator'])) {
            $model->comparisonOperator = $map['ComparisonOperator'];
        }
        if (isset($map['Statistics'])) {
            $model->statistics = $map['Statistics'];
        }
        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }
        if (isset($map['Times'])) {
            $model->times = $map['Times'];
        }

        return $model;
    }
}
