<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\CreateScalingRuleRequest;

use AlibabaCloud\Tea\Model;

class cloudWatchTrigger extends Model
{
    /**
     * @var string
     */
    public $comparisonOperator;

    /**
     * @var string
     */
    public $metricName;

    /**
     * @var string
     */
    public $evaluationCount;

    /**
     * @var string
     */
    public $threshold;

    /**
     * @var int
     */
    public $period;

    /**
     * @var string
     */
    public $statistics;
    protected $_name = [
        'comparisonOperator' => 'ComparisonOperator',
        'metricName'         => 'MetricName',
        'evaluationCount'    => 'EvaluationCount',
        'threshold'          => 'Threshold',
        'period'             => 'Period',
        'statistics'         => 'Statistics',
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
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->evaluationCount) {
            $res['EvaluationCount'] = $this->evaluationCount;
        }
        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->statistics) {
            $res['Statistics'] = $this->statistics;
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
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['EvaluationCount'])) {
            $model->evaluationCount = $map['EvaluationCount'];
        }
        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['Statistics'])) {
            $model->statistics = $map['Statistics'];
        }

        return $model;
    }
}
