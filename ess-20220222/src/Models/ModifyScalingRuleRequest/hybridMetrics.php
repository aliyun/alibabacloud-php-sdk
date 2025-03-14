<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\ModifyScalingRuleRequest;

use AlibabaCloud\SDK\Ess\V20220222\Models\ModifyScalingRuleRequest\hybridMetrics\dimensions;
use AlibabaCloud\Tea\Model;

class hybridMetrics extends Model
{
    /**
     * @description The metric dimensions. You can use this parameter to specify the monitored resources.
     *
     * @var dimensions[]
     */
    public $dimensions;

    /**
     * @description The metric expression that consists of multiple Hybrid Cloud Monitoring metrics. It calculates a result used to trigger scaling events.
     *
     * The expression must be written in Reverse Polish Notation (RPN) format and supports only the following operators: `+, -, *, /`.
     *
     * @example (a+b)/2
     *
     * @var string
     */
    public $expression;

    /**
     * @description The reference ID of the metric in the metric expression.
     *
     * @example a
     *
     * @var string
     */
    public $id;

    /**
     * @description The name of the Hybrid Cloud Monitoring metric.
     *
     * @example AliyunSmq_NumberOfMessagesVisible
     *
     * @var string
     */
    public $metricName;

    /**
     * @description The statistical method of the metric value. Valid values:
     *
     *   Average: calculates the average value of all metric values within a specified interval.
     *   Minimum: calculates the minimum value of all metric values within a specified interval.
     *   Maximum: calculates the maximum value of all metric values within a specified interval.
     *
     * @example Average
     *
     * @var string
     */
    public $statistic;
    protected $_name = [
        'dimensions' => 'Dimensions',
        'expression' => 'Expression',
        'id' => 'Id',
        'metricName' => 'MetricName',
        'statistic' => 'Statistic',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dimensions) {
            $res['Dimensions'] = [];
            if (null !== $this->dimensions && \is_array($this->dimensions)) {
                $n = 0;
                foreach ($this->dimensions as $item) {
                    $res['Dimensions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->expression) {
            $res['Expression'] = $this->expression;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->statistic) {
            $res['Statistic'] = $this->statistic;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hybridMetrics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Dimensions'])) {
            if (!empty($map['Dimensions'])) {
                $model->dimensions = [];
                $n = 0;
                foreach ($map['Dimensions'] as $item) {
                    $model->dimensions[$n++] = null !== $item ? dimensions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Expression'])) {
            $model->expression = $map['Expression'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['Statistic'])) {
            $model->statistic = $map['Statistic'];
        }

        return $model;
    }
}
