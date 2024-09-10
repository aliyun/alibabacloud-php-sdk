<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeActiveMetricRuleListResponseBody\alertList;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeActiveMetricRuleListResponseBody\alertList\alert\escalations;
use AlibabaCloud\Tea\Model;

class alert extends Model
{
    /**
     * @description The status of the alert rule. Valid values:
     *
     *   OK: The alert rule has no active alerts.
     *   ALARM: The alert rule has active alerts.
     *   INSUFFICIENT_DATA: No data is found.
     *
     * @example OK
     *
     * @var string
     */
    public $alertState;

    /**
     * @description The alert contact group.
     *
     * @example ECS_Group
     *
     * @var string
     */
    public $contactGroups;

    /**
     * @description The monitoring data of the specified resource.
     *
     * @example ""
     *
     * @var string
     */
    public $dimensions;

    /**
     * @description The time period during which the alert rule is effective.
     *
     * @example 00:00-23:59
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
     * @description The subject of the alert notification email.
     *
     * @example ECS_Bucket
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
     * @description The namespace of the Alibaba Cloud service.
     *
     * @example acs_ecs_dashboard
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The time period during which the alert rule is ineffective.
     *
     * @example 00:00-06:00
     *
     * @var string
     */
    public $noEffectiveInterval;

    /**
     * @description The aggregation period of monitoring data.
     *
     * Unit: seconds.
     * @example 60
     *
     * @var string
     */
    public $period;

    /**
     * @description The resources that are associated with the alert rule.
     *
     * @example [{"resource":"_ALL"}]
     *
     * @var string
     */
    public $resources;

    /**
     * @description The ID of the alert rule.
     *
     * @example ruleIdxxxx
     *
     * @var string
     */
    public $ruleId;

    /**
     * @description The name of the alert rule.
     *
     * @example myAlert
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The mute period during which new alerts are not sent even if the trigger conditions are met.
     *
     * Unit: seconds.
     * @example 86400
     *
     * @var string
     */
    public $silenceTime;

    /**
     * @description The callback URL.
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
