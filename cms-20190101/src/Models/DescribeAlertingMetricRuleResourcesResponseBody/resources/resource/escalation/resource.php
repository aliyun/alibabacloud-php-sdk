<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertingMetricRuleResourcesResponseBody\resources\resource\escalation;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertingMetricRuleResourcesResponseBody\resources\resource\escalation\resource\expressionList;
use AlibabaCloud\Tea\Model;

class resource extends Model
{
    /**
     * @description The operator that is used to compare the metric value with the threshold. Valid values:
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
     * @description The time when the resource was associated with the alert rule.
     *
     * Unit: milliseconds.
     * @example $Average>=10
     *
     * @var string
     */
    public $expression;

    /**
     * @description The alert threshold.
     *
     * @var expressionList
     */
    public $expressionList;

    /**
     * @description The ID of the request.
     *
     * @example &&
     *
     * @var string
     */
    public $expressionListJoin;

    /**
     * @example $Average > ($instanceId == \"i-io8kfvcpp7x5****\"? 80: 50)
     *
     * @var string
     */
    public $expressionRaw;

    /**
     * @description The statistical period of the metric. Unit: seconds. The default value is the interval at which the monitoring data of the metric is collected.
     *
     * @example 3
     *
     * @var int
     */
    public $level;

    /**
     * @description The resources to which the alert rule is applied.
     *
     * @example >=
     *
     * @var string
     */
    public $preCondition;

    /**
     * @description The number of entries to return on each page.
     *
     * Default value: 10.
     * @example mns
     *
     * @var string
     */
    public $tag;

    /**
     * @description The severity level and notification method of the alert. Valid values:
     *
     *   4: Alert notifications are sent by using emails and DingTalk chatbots.
     *
     * <!---->
     *
     *   OK: No alert is generated.
     *
     * @example 10
     *
     * @var string
     */
    public $threshold;

    /**
     * @description The type of the cloud service.
     *
     * @example 1
     *
     * @var int
     */
    public $times;
    protected $_name = [
        'comparisonOperator' => 'ComparisonOperator',
        'expression'         => 'Expression',
        'expressionList'     => 'ExpressionList',
        'expressionListJoin' => 'ExpressionListJoin',
        'expressionRaw'      => 'ExpressionRaw',
        'level'              => 'Level',
        'preCondition'       => 'PreCondition',
        'tag'                => 'Tag',
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
        if (null !== $this->expression) {
            $res['Expression'] = $this->expression;
        }
        if (null !== $this->expressionList) {
            $res['ExpressionList'] = null !== $this->expressionList ? $this->expressionList->toMap() : null;
        }
        if (null !== $this->expressionListJoin) {
            $res['ExpressionListJoin'] = $this->expressionListJoin;
        }
        if (null !== $this->expressionRaw) {
            $res['ExpressionRaw'] = $this->expressionRaw;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->preCondition) {
            $res['PreCondition'] = $this->preCondition;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
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
     * @return resource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ComparisonOperator'])) {
            $model->comparisonOperator = $map['ComparisonOperator'];
        }
        if (isset($map['Expression'])) {
            $model->expression = $map['Expression'];
        }
        if (isset($map['ExpressionList'])) {
            $model->expressionList = expressionList::fromMap($map['ExpressionList']);
        }
        if (isset($map['ExpressionListJoin'])) {
            $model->expressionListJoin = $map['ExpressionListJoin'];
        }
        if (isset($map['ExpressionRaw'])) {
            $model->expressionRaw = $map['ExpressionRaw'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['PreCondition'])) {
            $model->preCondition = $map['PreCondition'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
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
