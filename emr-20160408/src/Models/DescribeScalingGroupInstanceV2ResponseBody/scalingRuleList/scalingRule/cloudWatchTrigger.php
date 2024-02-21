<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\DescribeScalingGroupInstanceV2ResponseBody\scalingRuleList\scalingRule;

use AlibabaCloud\Tea\Model;

class cloudWatchTrigger extends Model
{
    /**
     * @example >
     *
     * @var string
     */
    public $comparisonOperator;

    /**
     * @example 1
     *
     * @var string
     */
    public $evaluationCount;

    /**
     * @example YARN.PendingVCores
     *
     * @var string
     */
    public $metricDisplayName;

    /**
     * @example YarnRootPendingVCores
     *
     * @var string
     */
    public $metricName;

    /**
     * @example 5
     *
     * @var int
     */
    public $period;

    /**
     * @example Average
     *
     * @var string
     */
    public $statistics;

    /**
     * @example 0
     *
     * @var string
     */
    public $threshold;

    /**
     * @example None
     *
     * @var string
     */
    public $unit;
    protected $_name = [
        'comparisonOperator' => 'ComparisonOperator',
        'evaluationCount'    => 'EvaluationCount',
        'metricDisplayName'  => 'MetricDisplayName',
        'metricName'         => 'MetricName',
        'period'             => 'Period',
        'statistics'         => 'Statistics',
        'threshold'          => 'Threshold',
        'unit'               => 'Unit',
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
        if (null !== $this->metricDisplayName) {
            $res['MetricDisplayName'] = $this->metricDisplayName;
        }
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
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
        if (null !== $this->unit) {
            $res['Unit'] = $this->unit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cloudWatchTrigger
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
        if (isset($map['MetricDisplayName'])) {
            $model->metricDisplayName = $map['MetricDisplayName'];
        }
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
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
        if (isset($map['Unit'])) {
            $model->unit = $map['Unit'];
        }

        return $model;
    }
}
