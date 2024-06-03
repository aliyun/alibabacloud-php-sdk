<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class ByLoadScalingRuleSpec extends Model
{
    /**
     * @description 比较符。
     *
     * This parameter is required.
     * @example LT
     *
     * @var string
     */
    public $comparisonOperator;

    /**
     * @description 统计次数。
     *
     * This parameter is required.
     * @example 2
     *
     * @var int
     */
    public $evaluationCount;

    /**
     * @description 指标名称。指标名称需要在 ListAutoScalingMetrics 接口返回的指标名称列表中。
     *
     * This parameter is required.
     * @example yarn_resourcemanager_root_availablememoryusage
     *
     * @var string
     */
    public $metricName;

    /**
     * @description 统计量名称。
     *
     * This parameter is required.
     * @example AVG
     *
     * @var string
     */
    public $statistics;

    /**
     * @description 阈值。
     *
     * This parameter is required.
     * @example 12.5
     *
     * @var float
     */
    public $threshold;

    /**
     * @description 统计窗口。单位为秒。
     *
     * This parameter is required.
     * @example 30
     *
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
