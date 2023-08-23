<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingRulesResponseBody\scalingRules;

use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingRulesResponseBody\scalingRules\alarms\dimensions;
use AlibabaCloud\Tea\Model;

class alarms extends Model
{
    /**
     * @description The comparison operator between the metric value and the threshold for the event-triggered task that is associated with the scaling rule. The comparison operator indicates the relationship between the metric value and the threshold that is required to meet the condition.
     *
     *   Valid value if the metric value is greater than or equal to the threshold: >=.
     *   Valid value if the metric value is less than or equal to the threshold: <=.
     *   Valid value if the metric value is greater than the threshold: >.
     *   Valid value if the metric value is less than the threshold: <.
     *
     * @example asg-bp18p2yfxow2dloq****_1f9458d1-70e1-4bee-8c7f-7a47695b****
     *
     * @var string
     */
    public $alarmTaskId;

    /**
     * @description The type of the event-triggered task that is associated with the scaling rule. Valid values:
     *
     *   system: system monitoring event-triggered tasks
     *   custom: custom monitoring event-triggered tasks
     *
     * @example alarmtask****
     *
     * @var string
     */
    public $alarmTaskName;

    /**
     * @description The name of the metric of the event-triggered task that is associated with the scaling rule.
     *
     * @example >=
     *
     * @var string
     */
    public $comparisonOperator;

    /**
     * @description The dimensions of the event-triggered task that is associated with the scaling rule.
     *
     * @var dimensions[]
     */
    public $dimensions;

    /**
     * @description The name of the event-triggered task that is associated with the scaling rule.
     *
     * @example 3
     *
     * @var int
     */
    public $evaluationCount;

    /**
     * @description The number of consecutive times for which the event-triggered task that is associated with the scaling rule meets the threshold expressions before an alert is triggered.
     *
     * @example CpuUtilization
     *
     * @var string
     */
    public $metricName;

    /**
     * @description The alert threshold of the event-triggered task that is associated with the scaling rule.
     *
     * @example system
     *
     * @var string
     */
    public $metricType;

    /**
     * @description The dimensions of the event-triggered task that is associated with the scaling rule.
     *
     * @example Average
     *
     * @var string
     */
    public $statistics;

    /**
     * @description The statistical method of the event-triggered task that is associated with the scaling rule. Valid values:
     *
     *   Average
     *   Maximum
     *   Minimum
     *
     * @example 50
     *
     * @var float
     */
    public $threshold;
    protected $_name = [
        'alarmTaskId'        => 'AlarmTaskId',
        'alarmTaskName'      => 'AlarmTaskName',
        'comparisonOperator' => 'ComparisonOperator',
        'dimensions'         => 'Dimensions',
        'evaluationCount'    => 'EvaluationCount',
        'metricName'         => 'MetricName',
        'metricType'         => 'MetricType',
        'statistics'         => 'Statistics',
        'threshold'          => 'Threshold',
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
        if (null !== $this->alarmTaskName) {
            $res['AlarmTaskName'] = $this->alarmTaskName;
        }
        if (null !== $this->comparisonOperator) {
            $res['ComparisonOperator'] = $this->comparisonOperator;
        }
        if (null !== $this->dimensions) {
            $res['Dimensions'] = [];
            if (null !== $this->dimensions && \is_array($this->dimensions)) {
                $n = 0;
                foreach ($this->dimensions as $item) {
                    $res['Dimensions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->evaluationCount) {
            $res['EvaluationCount'] = $this->evaluationCount;
        }
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->metricType) {
            $res['MetricType'] = $this->metricType;
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
     * @return alarms
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlarmTaskId'])) {
            $model->alarmTaskId = $map['AlarmTaskId'];
        }
        if (isset($map['AlarmTaskName'])) {
            $model->alarmTaskName = $map['AlarmTaskName'];
        }
        if (isset($map['ComparisonOperator'])) {
            $model->comparisonOperator = $map['ComparisonOperator'];
        }
        if (isset($map['Dimensions'])) {
            if (!empty($map['Dimensions'])) {
                $model->dimensions = [];
                $n                 = 0;
                foreach ($map['Dimensions'] as $item) {
                    $model->dimensions[$n++] = null !== $item ? dimensions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['EvaluationCount'])) {
            $model->evaluationCount = $map['EvaluationCount'];
        }
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['MetricType'])) {
            $model->metricType = $map['MetricType'];
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
