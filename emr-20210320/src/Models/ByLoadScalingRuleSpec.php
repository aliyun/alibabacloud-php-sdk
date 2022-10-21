<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class ByLoadScalingRuleSpec extends Model
{
    /**
     * @var string
     */
    public $comparisonOperator;

    /**
     * @var int
     */
    public $evaluationCount;

    /**
     * @var string
     */
    public $metricName;

    /**
     * @var string
     */
    public $statistics;

    /**
     * @var float
     */
    public $threshold;

    /**
     * @var int
     */
    public $timeWindow;
    protected $_name = [
        'comparisonOperator' => 'ComparisonOperator',
        'evaluationCount'    => 'EvaluationCount',
        'metricName'         => 'MetricName',
        'statistics'         => 'Statistics',
        'threshold'          => 'Threshold',
        'timeWindow'         => 'TimeWindow',
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
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->statistics) {
            $res['Statistics'] = $this->statistics;
        }
        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }
        if (null !== $this->timeWindow) {
            $res['TimeWindow'] = $this->timeWindow;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ByLoadScalingRuleSpec
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
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['Statistics'])) {
            $model->statistics = $map['Statistics'];
        }
        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }
        if (isset($map['TimeWindow'])) {
            $model->timeWindow = $map['TimeWindow'];
        }

        return $model;
    }
}
