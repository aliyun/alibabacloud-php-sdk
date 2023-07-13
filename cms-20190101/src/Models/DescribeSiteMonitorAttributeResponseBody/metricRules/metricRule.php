<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\metricRules;

use AlibabaCloud\Tea\Model;

class metricRule extends Model
{
    /**
     * @description The alert threshold.
     *
     * @example true
     *
     * @var string
     */
    public $actionEnable;

    /**
     * @description The name of the alert rule.
     *
     * @example CloudMonitor
     *
     * @var string
     */
    public $alarmActions;

    /**
     * @description The dimension of the alert rule.
     *
     * @example GreaterThanYesterday
     *
     * @var string
     */
    public $comparisonOperator;

    /**
     * @description The status of the alert. Valid values:
     *
     *   OK: normal.
     *   ALARM: The alert is triggered.
     *
     * @example [{"taskId": "cc641dff-c19d-45f3-ad0a-818a0c4f****" }]
     *
     * @var string
     */
    public $dimensions;

    /**
     * @description The alert contact groups to which alert notifications are sent.
     *
     * @example 3
     *
     * @var string
     */
    public $evaluationCount;

    /**
     * @description Indicates whether the alert rule is enabled. Valid values:
     *
     *   true: The alert rule is enabled.
     *   false: The alert rule is disabled.
     *
     * @example $Availability=30
     *
     * @var string
     */
    public $expression;

    /**
     * @description This topic provides an example on how to query the details of a site monitoring task whose ID is `cc641dff-c19d-45f3-ad0a-818a0c4f****`. The returned result indicates that the task name is `test123`, the address that is monitored by the task is `https://aliyun.com`, and the name of the carrier is `Alibaba`.
     *
     * @example 2
     *
     * @var string
     */
    public $level;

    /**
     * @description The namespace of the cloud service.
     *
     * @example Availability
     *
     * @var string
     */
    public $metricName;

    /**
     * @description The alert contact group to which alert notifications are sent.
     *
     * @example acs_networkmonitor
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The ID of the alert rule.
     *
     * @example [ "CloudMonitor"]
     *
     * @var string
     */
    public $okActions;

    /**
     * @description The expression that is used to trigger alerts.
     *
     * @example 15s
     *
     * @var string
     */
    public $period;

    /**
     * @description The interval at which the monitoring data is queried. The value is the same as the interval at which metric data is reported. Unit: seconds.
     *
     * >  If you specify a statistical period for the alert rule, raw data is queried based on the statistical period.
     * @example bf071ae_7b7aec3817b0fdf****
     *
     * @var string
     */
    public $ruleId;

    /**
     * @description The comparison operator that is used in the alert rule. Valid values:
     *
     *   `>=`
     *   `>`
     *   `<=`
     *   `<`
     *   `=`
     *   `!=`
     *   GreaterThanYesterday: greater than the metric value at the same time yesterday
     *   LessThanYesterday: less than the metric value at the same time yesterday
     *   GreaterThanLastWeek: greater than the metric value at the same time last week
     *   LessThanLastWeek: less than the metric value at the same time last week
     *   GreaterThanLastPeriod: greater than the metric value in the last monitoring cycle
     *   LessThanLastPeriod: less than the metric value in the last monitoring cycle
     *
     * @example rule1
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The severity of the alert. Valid values:
     *
     *   1: critical
     *   2: warning
     *   3: information
     *
     * @example OK
     *
     * @var string
     */
    public $stateValue;

    /**
     * @description For more information about common request parameters, see [Common parameters](~~199331~~).
     *
     * @example Availability
     *
     * @var string
     */
    public $statistics;

    /**
     * @description The statistical method of the alert rule. Valid values:
     *
     *   Availability: the percentage of available detection points
     *   AvailableNumber: the number of available detection points
     *   ErrorCodeMaximum: a status code for an alert
     *   ErrorCodeMinimum: all status codes for a set of alerts
     *   Average: response time
     *
     * @example 30
     *
     * @var string
     */
    public $threshold;
    protected $_name = [
        'actionEnable'       => 'ActionEnable',
        'alarmActions'       => 'AlarmActions',
        'comparisonOperator' => 'ComparisonOperator',
        'dimensions'         => 'Dimensions',
        'evaluationCount'    => 'EvaluationCount',
        'expression'         => 'Expression',
        'level'              => 'Level',
        'metricName'         => 'MetricName',
        'namespace'          => 'Namespace',
        'okActions'          => 'OkActions',
        'period'             => 'Period',
        'ruleId'             => 'RuleId',
        'ruleName'           => 'RuleName',
        'stateValue'         => 'StateValue',
        'statistics'         => 'Statistics',
        'threshold'          => 'Threshold',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionEnable) {
            $res['ActionEnable'] = $this->actionEnable;
        }
        if (null !== $this->alarmActions) {
            $res['AlarmActions'] = $this->alarmActions;
        }
        if (null !== $this->comparisonOperator) {
            $res['ComparisonOperator'] = $this->comparisonOperator;
        }
        if (null !== $this->dimensions) {
            $res['Dimensions'] = $this->dimensions;
        }
        if (null !== $this->evaluationCount) {
            $res['EvaluationCount'] = $this->evaluationCount;
        }
        if (null !== $this->expression) {
            $res['Expression'] = $this->expression;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->okActions) {
            $res['OkActions'] = $this->okActions;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->stateValue) {
            $res['StateValue'] = $this->stateValue;
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
     * @return metricRule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionEnable'])) {
            $model->actionEnable = $map['ActionEnable'];
        }
        if (isset($map['AlarmActions'])) {
            $model->alarmActions = $map['AlarmActions'];
        }
        if (isset($map['ComparisonOperator'])) {
            $model->comparisonOperator = $map['ComparisonOperator'];
        }
        if (isset($map['Dimensions'])) {
            $model->dimensions = $map['Dimensions'];
        }
        if (isset($map['EvaluationCount'])) {
            $model->evaluationCount = $map['EvaluationCount'];
        }
        if (isset($map['Expression'])) {
            $model->expression = $map['Expression'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['OkActions'])) {
            $model->okActions = $map['OkActions'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['StateValue'])) {
            $model->stateValue = $map['StateValue'];
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
