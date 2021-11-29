<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ModifyScalingRuleRequest;

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
    public $evaluationCount;

    /**
     * @var string
     */
    public $metricName;

    /**
     * @var int
     */
    public $period;

    /**
     * @var string
     */
    public $statistics;

    /**
     * @var string
     */
    public $threshold;
    protected $_name = [
        'comparisonOperator' => 'ComparisonOperator',
        'evaluationCount'    => 'EvaluationCount',
        'metricName'         => 'MetricName',
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

        return $model;
    }
}
