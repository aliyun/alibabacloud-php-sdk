<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeActiveMetricRuleListResponseBody\alertList;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeActiveMetricRuleListResponseBody\alertList\alert\escalations;
use AlibabaCloud\Tea\Model;

class alert extends Model
{
    /**
     * @description The dimensions that specify the resources for which you want to query monitoring data.
     *
     * >  Dimensions must be organized in a JSON string and follow the required order.
     * @example OK
     *
     * @var string
     */
    public $alertState;

    /**
     * @description The namespace of the service. For more information, see [Appendix 1: Metrics](~~163515~~).
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
     * @example ""
     *
     * @var string
     */
    public $dimensions;

    /**
     * @description The time period during which the alert rule is ineffective.
     *
     * @example 00:00-23:59
     *
     * @var string
     */
    public $effectiveInterval;

    /**
     * @description The resources that are associated with the alert rule. A one-click alert rule is associated with all resources. The return value is fixed.
     *
     * @example true
     *
     * @var bool
     */
    public $enableState;

    /**
     * @description The condition for triggering info-level alerts.
     *
     * @var escalations
     */
    public $escalations;

    /**
     * @example ECS_Bucket
     *
     * @var string
     */
    public $mailSubject;

    /**
     * @description The callback URL.
     *
     * @example cpu_total
     *
     * @var string
     */
    public $metricName;

    /**
     * @description The time period during which the alert rule is effective.
     *
     * @example acs_ecs_dashboard
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The name of the alert rule.
     *
     * @example 00:00-06:00
     *
     * @var string
     */
    public $noEffectiveInterval;

    /**
     * @description The status of the alert rule. Valid values:
     *
     *   OK: The alert rule has no active alert.
     *   ALARM: The alert rule has at least one active alert.
     *   INSUFFICIENT_DATA: The alert rule has no data.
     *
     * @example 60
     *
     * @var string
     */
    public $period;

    /**
     * @description The conditions for triggering different levels of alerts.
     *
     * @example [{"resource":"_ALL"}]
     *
     * @var string
     */
    public $resources;

    /**
     * @description The aggregation period of the monitoring data. Unit: seconds. The default value is the minimum aggregation period, indicating that the metric is polled at the highest frequency. Typically, you do not need to specify the minimum aggregation period.
     *
     * @example ruleIdxxxx
     *
     * @var string
     */
    public $ruleId;

    /**
     * @description The ID of the alert rule.
     *
     * @example myAlert
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The name of the metric.
     *
     * @example 86400
     *
     * @var string
     */
    public $silenceTime;

    /**
     * @description The alert group that receives alert notifications.
     *
     * @example http://www.aliyun.com
     *
     * @var string
     */
    public $webhook;
    protected $_name = [
        'alertState'          => 'AlertState',
        'contactGroups'       => 'ContactGroups',
        'dimensions'          => 'Dimensions',
        'effectiveInterval'   => 'EffectiveInterval',
        'enableState'         => 'EnableState',
        'escalations'         => 'Escalations',
        'mailSubject'         => 'MailSubject',
        'metricName'          => 'MetricName',
        'namespace'           => 'Namespace',
        'noEffectiveInterval' => 'NoEffectiveInterval',
        'period'              => 'Period',
        'resources'           => 'Resources',
        'ruleId'              => 'RuleId',
        'ruleName'            => 'RuleName',
        'silenceTime'         => 'SilenceTime',
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
        if (null !== $this->mailSubject) {
            $res['MailSubject'] = $this->mailSubject;
        }
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->noEffectiveInterval) {
            $res['NoEffectiveInterval'] = $this->noEffectiveInterval;
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
        if (null !== $this->webhook) {
            $res['Webhook'] = $this->webhook;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alert
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertState'])) {
            $model->alertState = $map['AlertState'];
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
        if (isset($map['MailSubject'])) {
            $model->mailSubject = $map['MailSubject'];
        }
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['NoEffectiveInterval'])) {
            $model->noEffectiveInterval = $map['NoEffectiveInterval'];
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
        if (isset($map['Webhook'])) {
            $model->webhook = $map['Webhook'];
        }

        return $model;
    }
}
