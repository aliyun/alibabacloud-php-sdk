<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeActiveMetricRuleListResponseBody\datapoints;

use AlibabaCloud\Tea\Model;

class alarm extends Model
{
    /**
     * @description The comparison operator that is used in the alert rule. Valid values:
     *
     *   `>`
     *   `<`
     *   `>=`
     *   `<=`
     *   `=`
     *   `=`
     *
     * @example >
     *
     * @var string
     */
    public $comparisonOperator;

    /**
     * @description The alert group that receives alert notifications.
     *
     * @example ECS_Group
     *
     * @var string
     */
    public $contactGroups;

    /**
     * @description Indicates whether the alert rule is enabled. Valid values:
     *
     *   true: The alert rule is enabled.
     *   false: The alert rule is disabled.
     *
     * @example true
     *
     * @var string
     */
    public $enable;

    /**
     * @description The beginning of the time period during which the alert rule is effective. Unit: hours. For example, the value 23 indicates `23:59:59`.
     *
     * @example 24
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The consecutive number of times for which the metric value meets the alert condition before an alert is triggered.
     *
     * @example 3
     *
     * @var string
     */
    public $evaluationCount;

    /**
     * @description The name of the metric.
     *
     * @example cpu_total
     *
     * @var string
     */
    public $metricName;

    /**
     * @description The namespace of the service. For more information, see [Appendix 1: Metrics](~~163515~~).
     *
     * @example acs_ecs_dashboard
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The aggregation period of the monitoring data. Unit: seconds. The default value is the minimum aggregation period, indicating that the metric is polled at the highest frequency. Typically, you do not need to specify the minimum aggregation period.
     *
     * @example 60
     *
     * @var string
     */
    public $period;

    /**
     * @description The ID of the alert rule.
     *
     * @example a151cd6023eacee2f0978e03863cc1697c89508****
     *
     * @var string
     */
    public $ruleId;

    /**
     * @description The name of the alert rule.
     *
     * @example SystemDefault_acs_rds_dashboard_CpuUsage
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The mute period during which new alerts are not sent even if the trigger conditions are met. Unit: seconds. Default value: 86400.
     *
     * @example 86400
     *
     * @var string
     */
    public $silenceTime;

    /**
     * @description The end of the time period during which the alert rule is effective. Unit: hours. For example, the value 00 indicates `00:00:00`.
     *
     * @example 00
     *
     * @var string
     */
    public $startTime;

    /**
     * @description Indicates whether the alert rule is enabled.
     *
     * @example Enable
     *
     * @var string
     */
    public $state;

    /**
     * @description The statistical aggregation method.
     *
     * @example Average
     *
     * @var string
     */
    public $statistics;

    /**
     * @description The threshold of the metric value.
     *
     * @example 90
     *
     * @var string
     */
    public $threshold;

    /**
     * @description The callback URL.
     *
     * @example http://www.aliyun.com
     *
     * @var string
     */
    public $webhook;
    protected $_name = [
        'comparisonOperator' => 'ComparisonOperator',
        'contactGroups'      => 'ContactGroups',
        'enable'             => 'Enable',
        'endTime'            => 'EndTime',
        'evaluationCount'    => 'EvaluationCount',
        'metricName'         => 'MetricName',
        'namespace'          => 'Namespace',
        'period'             => 'Period',
        'ruleId'             => 'RuleId',
        'ruleName'           => 'RuleName',
        'silenceTime'        => 'SilenceTime',
        'startTime'          => 'StartTime',
        'state'              => 'State',
        'statistics'         => 'Statistics',
        'threshold'          => 'Threshold',
        'webhook'            => 'Webhook',
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
        if (null !== $this->contactGroups) {
            $res['ContactGroups'] = $this->contactGroups;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->evaluationCount) {
            $res['EvaluationCount'] = $this->evaluationCount;
        }
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
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
        if (null !== $this->silenceTime) {
            $res['SilenceTime'] = $this->silenceTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->statistics) {
            $res['Statistics'] = $this->statistics;
        }
        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }
        if (null !== $this->webhook) {
            $res['Webhook'] = $this->webhook;
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
        if (isset($map['ComparisonOperator'])) {
            $model->comparisonOperator = $map['ComparisonOperator'];
        }
        if (isset($map['ContactGroups'])) {
            $model->contactGroups = $map['ContactGroups'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['EvaluationCount'])) {
            $model->evaluationCount = $map['EvaluationCount'];
        }
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
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
        if (isset($map['SilenceTime'])) {
            $model->silenceTime = $map['SilenceTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['Statistics'])) {
            $model->statistics = $map['Statistics'];
        }
        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }
        if (isset($map['Webhook'])) {
            $model->webhook = $map['Webhook'];
        }

        return $model;
    }
}
