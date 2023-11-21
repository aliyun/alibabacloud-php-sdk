<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeProductsOfActiveMetricRuleResponseBody\allProductInitMetricRuleList\allProductInitMetricRule\alertInitConfigList;

use AlibabaCloud\Tea\Model;

class alertInitConfig extends Model
{
    /**
     * @var string
     */
    public $comparisonOperator;

    /**
     * @description The consecutive number of times for which the metric value is measured before an alert is triggered.
     *
     * @example 3
     *
     * @var string
     */
    public $evaluationCount;

    /**
     * @var string
     */
    public $level;

    /**
     * @description The name of the metric. For more information, see [Appendix 1: Metrics](~~163515~~).
     *
     * @example cpu_total
     *
     * @var string
     */
    public $metricName;

    /**
     * @description The namespace of the service. For more information, see [Appendix 1: Metrics](~~163515~~).
     *
     * @example acs_rds_dashboard
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The aggregation period of the monitoring data. Unit: minutes. For more information, see [Appendix 1: Metrics](~~163515~~).
     *
     * @example 1m
     *
     * @var string
     */
    public $period;

    /**
     * @description The statistical aggregation method that is used to calculate metric values that trigger alerts. For more information, see [Appendix 1: Metrics](~~163515~~).
     *
     * @example Average
     *
     * @var string
     */
    public $statistics;

    /**
     * @description The threshold of the metric value.
     *
     * @example 90
     *
     * @var string
     */
    public $threshold;
    protected $_name = [
        'comparisonOperator' => 'ComparisonOperator',
        'evaluationCount'    => 'EvaluationCount',
        'level'              => 'Level',
        'metricName'         => 'MetricName',
        'namespace'          => 'Namespace',
        'period'             => 'Period',
        'statistics'         => 'Statistics',
        'threshold'          => 'Threshold',
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
        if (null !== $this->evaluationCount) {
            $res['EvaluationCount'] = $this->evaluationCount;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->statistics) {
            $res['Statistics'] = $this->statistics;
        }
        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alertInitConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ComparisonOperator'])) {
            $model->comparisonOperator = $map['ComparisonOperator'];
        }
        if (isset($map['EvaluationCount'])) {
            $model->evaluationCount = $map['EvaluationCount'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['Statistics'])) {
            $model->statistics = $map['Statistics'];
        }
        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }

        return $model;
    }
}
