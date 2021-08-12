<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20140828\Models\DescribeScalingRulesResponseBody\scalingRules\scalingRule\alarms;

use AlibabaCloud\SDK\Ess\V20140828\Models\DescribeScalingRulesResponseBody\scalingRules\scalingRule\alarms\alarm\dimensions;
use AlibabaCloud\Tea\Model;

class alarm extends Model
{
    /**
     * @var string
     */
    public $alarmTaskId;

    /**
     * @var string
     */
    public $comparisonOperator;

    /**
     * @var string
     */
    public $metricName;

    /**
     * @var int
     */
    public $evaluationCount;

    /**
     * @var string
     */
    public $alarmTaskName;

    /**
     * @var string
     */
    public $metricType;

    /**
     * @var float
     */
    public $threshold;

    /**
     * @var string
     */
    public $statistics;

    /**
     * @var dimensions
     */
    public $dimensions;
    protected $_name = [
        'alarmTaskId'        => 'AlarmTaskId',
        'comparisonOperator' => 'ComparisonOperator',
        'metricName'         => 'MetricName',
        'evaluationCount'    => 'EvaluationCount',
        'alarmTaskName'      => 'AlarmTaskName',
        'metricType'         => 'MetricType',
        'threshold'          => 'Threshold',
        'statistics'         => 'Statistics',
        'dimensions'         => 'Dimensions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarmTaskId) {
            $res['AlarmTaskId'] = $this->alarmTaskId;
        }
        if (null !== $this->comparisonOperator) {
            $res['ComparisonOperator'] = $this->comparisonOperator;
        }
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->evaluationCount) {
            $res['EvaluationCount'] = $this->evaluationCount;
        }
        if (null !== $this->alarmTaskName) {
            $res['AlarmTaskName'] = $this->alarmTaskName;
        }
        if (null !== $this->metricType) {
            $res['MetricType'] = $this->metricType;
        }
        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }
        if (null !== $this->statistics) {
            $res['Statistics'] = $this->statistics;
        }
        if (null !== $this->dimensions) {
            $res['Dimensions'] = null !== $this->dimensions ? $this->dimensions->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alarm
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlarmTaskId'])) {
            $model->alarmTaskId = $map['AlarmTaskId'];
        }
        if (isset($map['ComparisonOperator'])) {
            $model->comparisonOperator = $map['ComparisonOperator'];
        }
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['EvaluationCount'])) {
            $model->evaluationCount = $map['EvaluationCount'];
        }
        if (isset($map['AlarmTaskName'])) {
            $model->alarmTaskName = $map['AlarmTaskName'];
        }
        if (isset($map['MetricType'])) {
            $model->metricType = $map['MetricType'];
        }
        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }
        if (isset($map['Statistics'])) {
            $model->statistics = $map['Statistics'];
        }
        if (isset($map['Dimensions'])) {
            $model->dimensions = dimensions::fromMap($map['Dimensions']);
        }

        return $model;
    }
}
