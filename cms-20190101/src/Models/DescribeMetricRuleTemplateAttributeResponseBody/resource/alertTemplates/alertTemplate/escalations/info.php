<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleTemplateAttributeResponseBody\resource\alertTemplates\alertTemplate\escalations;

use AlibabaCloud\Tea\Model;

class info extends Model
{
    /**
     * @description The comparison operator that is used to compare the metric value with the threshold. Valid values:
     *
     *   GreaterThanOrEqualToThreshold: greater than or equal to the threshold
     *   GreaterThanThreshold: greater than the threshold
     *   LessThanOrEqualToThreshold: less than or equal to the threshold
     *   LessThanThreshold: less than the threshold
     *   NotEqualToThreshold: not equal to the threshold
     *   GreaterThanYesterday: greater than the metric value at the same time yesterday
     *   LessThanYesterday: less than the metric value at the same time yesterday
     *   GreaterThanLastWeek: greater than the metric value at the same time last week
     *   LessThanLastWeek: less than the metric value at the same time last week
     *   GreaterThanLastPeriod: greater than the metric value in the last monitoring cycle
     *   LessThanLastPeriod: less than the metric value in the last monitoring cycle
     *
     * @example GreaterThanOrEqualToThreshold
     *
     * @var string
     */
    public $comparisonOperator;

    /**
     * @description The statistical method for Info-level alerts.
     *
     * The value of the `Statistics` parameter varies with the cloud service. For more information, see [Appendix 1: Metrics](~~163515~~).
     * @example Average
     *
     * @var string
     */
    public $statistics;

    /**
     * @description The threshold for Info-level alerts.
     *
     * @example 90
     *
     * @var string
     */
    public $threshold;

    /**
     * @description The consecutive number of times for which the metric value meets the alert condition before an Info-level alert is triggered.
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
