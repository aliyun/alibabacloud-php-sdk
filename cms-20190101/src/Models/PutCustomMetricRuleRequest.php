<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class PutCustomMetricRuleRequest extends Model
{
    /**
     * @description The HTTP status code.
     *
     * >  The value 200 indicates that the call was successful.
     * @example >=
     *
     * @var string
     */
    public $comparisonOperator;

    /**
     * @description The callback URL to which a POST request is sent when an alert is triggered based on the alert rule.
     *
     * @example ECS_Group
     *
     * @var string
     */
    public $contactGroups;

    /**
     * @description The mute period during which notifications are not repeatedly sent for an alert. Unit: seconds. Default value: 86400. The default value indicates one day.
     *
     * >  Only one alert notification is sent during each mute period even if the metric value consecutively exceeds the alert threshold several times.
     * @example 00:00-23:59
     *
     * @var string
     */
    public $effectiveInterval;

    /**
     * @description The threshold of the metric value.
     *
     * @var string
     */
    public $emailSubject;

    /**
     * @description The method that is used to calculate the metric values that trigger alerts.
     *
     * @example 3
     *
     * @var int
     */
    public $evaluationCount;

    /**
     * @description The ID of the alert rule.
     *
     * >  You can specify an existing ID to modify the corresponding alert rule or specify a new ID to create an alert rule.
     * @example 7378****
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The consecutive number of times for which the metric value is measured before an alert is triggered.
     *
     * @example CRITICAL
     *
     * @var string
     */
    public $level;

    /**
     * @description The custom monitoring data to which the alert rule applies. The value includes the application group ID to which the custom monitoring data belongs and the dimension to which the metric belongs.
     *
     * @example cpu_total
     *
     * @var string
     */
    public $metricName;

    /**
     * @description The subject of the alert notification email.
     *
     * @example 300
     *
     * @var string
     */
    public $period;

    /**
     * @description The alert group that receives alert notifications. Separate multiple alert groups with commas (,).
     *
     * @example [{"groupId":7378****,"dimension":"instanceId=i-hp3543t5e4sudb3s****"}]
     *
     * @var string
     */
    public $resources;

    /**
     * @description The name of the alert rule.
     *
     * @example MyRuleId1
     *
     * @var string
     */
    public $ruleId;

    /**
     * @description The name of the metric.
     *
     * >  For more information about how to obtain the metric name, see [DescribeCustomMetricList](~~115005~~).
     * @example CpuUsage
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The cycle that is used to aggregate custom monitoring data. Unit: seconds. Set the value to an integral multiple of 60. The original reporting cycle of custom monitoring data is used by default.
     *
     * @example 86400
     *
     * @var int
     */
    public $silenceTime;

    /**
     * @description The comparison operator before the threshold. Valid values:
     *
     *   `>=`
     *   `=`
     *   `<=`
     *   `>`
     *   `<`
     *   `!=`
     *
     * @example Average
     *
     * @var string
     */
    public $statistics;

    /**
     * @description The level of the alert. Valid values:
     *
     *   CRITICAL
     *   WARN
     *   INFO
     *
     * @example 90
     *
     * @var string
     */
    public $threshold;

    /**
     * @description The time period during which the alert rule is effective. Valid values: 00:00 to 23:59.
     *
     * @example https://www.aliyun.com
     *
     * @var string
     */
    public $webhook;
    protected $_name = [
        'comparisonOperator' => 'ComparisonOperator',
        'contactGroups'      => 'ContactGroups',
        'effectiveInterval'  => 'EffectiveInterval',
        'emailSubject'       => 'EmailSubject',
        'evaluationCount'    => 'EvaluationCount',
        'groupId'            => 'GroupId',
        'level'              => 'Level',
        'metricName'         => 'MetricName',
        'period'             => 'Period',
        'resources'          => 'Resources',
        'ruleId'             => 'RuleId',
        'ruleName'           => 'RuleName',
        'silenceTime'        => 'SilenceTime',
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
        if (null !== $this->effectiveInterval) {
            $res['EffectiveInterval'] = $this->effectiveInterval;
        }
        if (null !== $this->emailSubject) {
            $res['EmailSubject'] = $this->emailSubject;
        }
        if (null !== $this->evaluationCount) {
            $res['EvaluationCount'] = $this->evaluationCount;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->resources) {
            $res['Resources'] = $this->resources;
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
     * @return PutCustomMetricRuleRequest
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
        if (isset($map['EffectiveInterval'])) {
            $model->effectiveInterval = $map['EffectiveInterval'];
        }
        if (isset($map['EmailSubject'])) {
            $model->emailSubject = $map['EmailSubject'];
        }
        if (isset($map['EvaluationCount'])) {
            $model->evaluationCount = $map['EvaluationCount'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['Resources'])) {
            $model->resources = $map['Resources'];
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
