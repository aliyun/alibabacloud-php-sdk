<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeActiveMetricRuleListResponseBody\alertList\alert\escalations;

use AlibabaCloud\Tea\Model;

class info extends Model
{
    /**
     * @description The consecutive number of times for which the metric value meets the alert condition before an info-level alert is triggered.
     *
     * @example GreaterThanThreshold
     *
     * @var string
     */
    public $comparisonOperator;

    /**
     * @description The condition for triggering warn-level alerts.
     *
     * @example Average
     *
     * @var string
     */
    public $statistics;

    /**
     * @description The statistical aggregation method for info-level alerts.
     *
     * @example 95
     *
     * @var string
     */
    public $threshold;

    /**
     * @description The threshold for info-level alerts.
     *
     * @example 3
     *
     * @var string
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
