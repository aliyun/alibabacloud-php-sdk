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
     * @description The description of the alert rule.
     *
     * > The content of the alert rule. If the metric value meets the alert condition, an alert is triggered.
     * @example $Average>=10
     *
     * @var string
     */
    public $expression;

    /**
     * @description The description of the multi-metric alert rule.
     *
     * @var expressionList
     */
    public $expressionList;

    /**
     * @description The relationship between multiple metrics. Valid values:
     *
     *   &&: If all metrics meet the alert conditions, CloudMonitor sends alert notifications.
     *   ||: If one of the metrics meets the alert conditions, CloudMonitor sends alert notifications.
     *
     * @example &&
     *
     * @var string
     */
    public $expressionListJoin;

    /**
     * @description The trigger conditions that are created by using expressions. You can use expressions to create trigger conditions in the following scenarios:
     *
     *   Set an alert blacklist for specific resources. For example, if you specify `$instanceId != \"i-io8kfvcpp7x5****\" ``&&`` $Average > 50`, no alert is triggered when the `average metric value` of the `i-io8kfvcpp7x5****` instance exceeds 50.
     *   Set a special alert threshold for a specified instance in the rule. For example, if you specify `$Average > ($instanceId == \"i-io8kfvcpp7x5****\"? 80: 50)`, an alert is triggered when the `average metric value` of the `i-io8kfvcpp7x5****` instance exceeds 80 or the `average metric value` of other instances exceeds 50.
     *   Limit the number of instances whose metric values exceed the threshold. For example, if you specify `count($Average > 20) > 3`, an alert is triggered only when the number of instances whose `average metric value` exceeds 20 exceeds three.
     *
     * @example $Average > ($instanceId == \"i-io8kfvcpp7x5****\"? 80: 50)
     *
     * @var string
     */
    public $expressionRaw;

    /**
     * @description The severity level and notification methods of the alert. Valid values:
     *
     *   4: Alert notifications are sent by using emails and DingTalk chatbots.
     *   OK: No alert is generated.
     *
     * @example 3
     *
     * @var int
     */
    public $level;

    /**
     * @description The operator that is used to compare the metric value with the threshold. Valid values:
     *
     *   `>=`
     *   `=`
     *   `<=`
     *   `>`
     *   `<`
     *   `!=`
     *
     * @example >=
     *
     * @var string
     */
    public $preCondition;

    /**
     * @description The instance tag.
     *
     * @example mns
     *
     * @var string
     */
    public $tag;

    /**
     * @description The alert threshold.
     *
     * @example 10
     *
     * @var string
     */
    public $threshold;

    /**
     * @description The consecutive number of times for which the metric value meets the alert condition before an alert is triggered.
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
