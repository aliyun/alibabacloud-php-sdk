<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleListResponseBody\alarms;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleListResponseBody\alarms\alarm\compositeExpression;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleListResponseBody\alarms\alarm\escalations;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleListResponseBody\alarms\alarm\labels;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleListResponseBody\alarms\alarm\prometheus;
use AlibabaCloud\Tea\Model;

class alarm extends Model
{
    /**
     * @description The status of the alert rule. Valid values:
     *
     *   OK: The alert rule has no active alerts.
     *   ALARM: The alert rule has active alerts.
     *   INSUFFICIENT_DATA: No data is available.
     *
     * @example OK
     *
     * @var string
     */
    public $alertState;

    /**
     * @description The trigger conditions for multiple metrics.
     *
     * >  The trigger conditions for a single metric and multiple metrics are mutually exclusive. You cannot specify trigger conditions for a single metric and multiple metrics at the same time.
     * @var compositeExpression
     */
    public $compositeExpression;

    /**
     * @description The alert contact group.
     *
     * @example ECS_Alarm
     *
     * @var string
     */
    public $contactGroups;

    /**
     * @description The dimensions of the alert rule.
     *
     * @example [{"instanceId":"i-2ze2d6j5uhg20x47****"}]
     *
     * @var string
     */
    public $dimensions;

    /**
     * @description The time period during which the alert rule is effective.
     *
     * @example 05:31-23:59
     *
     * @var string
     */
    public $effectiveInterval;

    /**
     * @description Indicates whether the alert rule is enabled. Valid values:
     *
     *   true: The alert rule is enabled.
     *   false: The alert rule is disabled.
     *
     * @example true
     *
     * @var bool
     */
    public $enableState;

    /**
     * @description The conditions for triggering different levels of alerts.
     *
     * @var escalations
     */
    public $escalations;

    /**
     * @description The ID of the application group.
     *
     * @example 7301****
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The name of the application group.
     *
     * >  If the alert rule is associated with an application group, the name of the application group is returned in this parameter.
     * @example ECS_Group
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The tags of the alert rule.
     *
     * @var labels
     */
    public $labels;

    /**
     * @description The subject of the alert notification email.
     *
     * @example "${serviceType}-${metricName}-${levelDescription}Notification(${dimensions})"
     *
     * @var string
     */
    public $mailSubject;

    /**
     * @description The name of the metric.
     *
     * @example cpu_total
     *
     * @var string
     */
    public $metricName;

    /**
     * @description The namespace of the cloud service.
     *
     * @example acs_ecs_dashboard
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The method that is used to handle alerts when no monitoring data is found. Valid values:
     *
     *   KEEP_LAST_STATE (default value): No operation is performed.
     *   INSUFFICIENT_DATA: An alert whose content is "Insufficient data" is triggered.
     *   OK: The status is considered normal.
     *
     * @example KEEP_LAST_STATE
     *
     * @var string
     */
    public $noDataPolicy;

    /**
     * @description The time period during which the alert rule is ineffective.
     *
     * @example 00:00-05:30
     *
     * @var string
     */
    public $noEffectiveInterval;

    /**
     * @description The statistical period.
     *
     * @example 60
     *
     * @var string
     */
    public $period;

    /**
     * @description The Prometheus alert rule.
     *
     * >  This parameter is required only when you create a Prometheus alert rule for Hybrid Cloud Monitoring.
     * @var prometheus
     */
    public $prometheus;

    /**
     * @description The resources that are associated with the alert rule.
     *
     * @example [{\"instanceId\":\"i-2ze2d6j5uhg20x47****\"}]
     *
     * @var string
     */
    public $resources;

    /**
     * @description The ID of the alert rule.
     *
     * @example applyTemplate344cfd42-0f32-4fd6-805a-88d7908a****
     *
     * @var string
     */
    public $ruleId;

    /**
     * @description The name of the alert rule.
     *
     * @example Rule_01
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The mute period during which new alert notifications are not sent even if the trigger conditions are met. Unit: seconds. Default value: 86400. Minimum value: 3600.
     *
     * Only one alert is reported during each mute period even if the metric value consecutively exceeds the alert rule threshold several times.
     * @example 86400
     *
     * @var int
     */
    public $silenceTime;

    /**
     * @description The type of the alert rule. Valid value: METRIC. This value indicates an alert rule for time series metrics.
     *
     * @example METRIC
     *
     * @var string
     */
    public $sourceType;

    /**
     * @description The callback URL. CloudMonitor pushes an alert notification to the specified callback URL by sending an HTTP POST request. Only the HTTP protocol is supported.
     *
     * @example https://www.aliyun.com
     *
     * @var string
     */
    public $webhook;
    protected $_name = [
        'alertState'          => 'AlertState',
        'compositeExpression' => 'CompositeExpression',
        'contactGroups'       => 'ContactGroups',
        'dimensions'          => 'Dimensions',
        'effectiveInterval'   => 'EffectiveInterval',
        'enableState'         => 'EnableState',
        'escalations'         => 'Escalations',
        'groupId'             => 'GroupId',
        'groupName'           => 'GroupName',
        'labels'              => 'Labels',
        'mailSubject'         => 'MailSubject',
        'metricName'          => 'MetricName',
        'namespace'           => 'Namespace',
        'noDataPolicy'        => 'NoDataPolicy',
        'noEffectiveInterval' => 'NoEffectiveInterval',
        'period'              => 'Period',
        'prometheus'          => 'Prometheus',
        'resources'           => 'Resources',
        'ruleId'              => 'RuleId',
        'ruleName'            => 'RuleName',
        'silenceTime'         => 'SilenceTime',
        'sourceType'          => 'SourceType',
        'webhook'             => 'Webhook',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertState) {
            $res['AlertState'] = $this->alertState;
        }
        if (null !== $this->compositeExpression) {
            $res['CompositeExpression'] = null !== $this->compositeExpression ? $this->compositeExpression->toMap() : null;
        }
        if (null !== $this->contactGroups) {
            $res['ContactGroups'] = $this->contactGroups;
        }
        if (null !== $this->dimensions) {
            $res['Dimensions'] = $this->dimensions;
        }
        if (null !== $this->effectiveInterval) {
            $res['EffectiveInterval'] = $this->effectiveInterval;
        }
        if (null !== $this->enableState) {
            $res['EnableState'] = $this->enableState;
        }
        if (null !== $this->escalations) {
            $res['Escalations'] = null !== $this->escalations ? $this->escalations->toMap() : null;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->labels) {
            $res['Labels'] = null !== $this->labels ? $this->labels->toMap() : null;
        }
        if (null !== $this->mailSubject) {
            $res['MailSubject'] = $this->mailSubject;
        }
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->noDataPolicy) {
            $res['NoDataPolicy'] = $this->noDataPolicy;
        }
        if (null !== $this->noEffectiveInterval) {
            $res['NoEffectiveInterval'] = $this->noEffectiveInterval;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->prometheus) {
            $res['Prometheus'] = null !== $this->prometheus ? $this->prometheus->toMap() : null;
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
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
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
        if (isset($map['AlertState'])) {
            $model->alertState = $map['AlertState'];
        }
        if (isset($map['CompositeExpression'])) {
            $model->compositeExpression = compositeExpression::fromMap($map['CompositeExpression']);
        }
        if (isset($map['ContactGroups'])) {
            $model->contactGroups = $map['ContactGroups'];
        }
        if (isset($map['Dimensions'])) {
            $model->dimensions = $map['Dimensions'];
        }
        if (isset($map['EffectiveInterval'])) {
            $model->effectiveInterval = $map['EffectiveInterval'];
        }
        if (isset($map['EnableState'])) {
            $model->enableState = $map['EnableState'];
        }
        if (isset($map['Escalations'])) {
            $model->escalations = escalations::fromMap($map['Escalations']);
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['Labels'])) {
            $model->labels = labels::fromMap($map['Labels']);
        }
        if (isset($map['MailSubject'])) {
            $model->mailSubject = $map['MailSubject'];
        }
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['NoDataPolicy'])) {
            $model->noDataPolicy = $map['NoDataPolicy'];
        }
        if (isset($map['NoEffectiveInterval'])) {
            $model->noEffectiveInterval = $map['NoEffectiveInterval'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['Prometheus'])) {
            $model->prometheus = prometheus::fromMap($map['Prometheus']);
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
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['Webhook'])) {
            $model->webhook = $map['Webhook'];
        }

        return $model;
    }
}
