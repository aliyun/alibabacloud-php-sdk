<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\PutResourceMetricRulesRequest;

use AlibabaCloud\SDK\Cms\V20190101\Models\PutResourceMetricRulesRequest\rules\escalations;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutResourceMetricRulesRequest\rules\labels;
use AlibabaCloud\Tea\Model;

class rules extends Model
{
    /**
     * @var escalations
     */
    public $escalations;

    /**
     * @description The error message.
     *
     * @example ECS_Group
     *
     * @var string
     */
    public $contactGroups;

    /**
     * @description The operation that you want to perform. Set the value to **PutResourceMetricRules**.
     *
     * @example 00:00-23:59
     *
     * @var string
     */
    public $effectiveInterval;

    /**
     * @description The HTTP status code.
     *
     * @var string
     */
    public $emailSubject;

    /**
     * @description The alert contact group. The alert notifications are sent to the alert contacts in the alert contact group.
     *
     * >  An alert contact group can contain one or more alert contacts. For information about how to create alert contacts and alert contact groups, see [PutContact](~~114923~~) and [PutContactGroup](~~114929~~).
     * @example 60
     *
     * @var string
     */
    public $interval;

    /**
     * @var labels[]
     */
    public $labels;

    /**
     * @description The HTTP status code.
     *
     * >  The status code 200 indicates that the call was successful.
     * @example cpu_total
     *
     * @var string
     */
    public $metricName;

    /**
     * @description The name of the alert rule.
     *
     * >  If you specify a new name, you create a threshold-triggered alert rule.
     * @example acs_ecs_dashboard
     *
     * @var string
     */
    public $namespace;

    /**
     * @description Indicates whether the call was successful. Valid values:
     *
     *   true: The call was successful.
     *   false: The call failed.
     *
     * @example KEEP_LAST_STATE
     *
     * @var string
     */
    public $noDataPolicy;

    /**
     * @description The time period during which the alert rule is effective.
     *
     * Valid values of N: 1 to 500.
     * @example 00:00-06:00
     *
     * @var string
     */
    public $noEffectiveInterval;

    /**
     * @description The name of the metric.
     *
     * For information about how to query the name of a metric, see [Appendix 1: Metrics](~~163515~~).
     * @example 60
     *
     * @var string
     */
    public $period;

    /**
     * @description The statistical methods for Warn-level alerts. Valid values:
     *
     *   Maximum: the maximum value
     *   Minimum: the minimum value
     *   Average: the average value
     *   Availability: the availability rate
     *
     * >  You must set a collection of the Rules.N.Escalations.Critical.Statistics, Rules.N.Escalations.Critical.ComparisonOperator, Rules.N.Escalations.Critical.Threshold, and Rules.N.Escalations.Critical.Times parameters, a collection of the Rules.N.Escalations.Warn.Statistics, Rules.N.Escalations.Warn.ComparisonOperator, Rules.N.Escalations.Warn.Threshold, and Rules.N.Escalations.Warn.Times parameters, or a collection of the Rules.N.Escalations.Info.Statistics, Rules.N.Escalations.Info.ComparisonOperator, Rules.N.Escalations.Info.Threshold, and Rules.N.Escalations.Info.Times parameters.
     * @example [{"instanceId":"i-uf6j91r34rnwawoo****"}]
     *
     * @var string
     */
    public $resources;

    /**
     * @description The error message.
     *
     * @example a151cd6023eacee2f0978e03863cc1697c89508****
     *
     * @var string
     */
    public $ruleId;

    /**
     * @description The ID of the alert rule.
     *
     * @example test123
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The method that is used to handle alerts when no monitoring data is found. Valid values:
     *
     *   KEEP_LAST_STATE (default value): No operation is performed.
     *   INSUFFICIENT_DATA: An alert whose content is "Insufficient data" is triggered.
     *   OK: The status is considered normal.
     *
     * Valid values of N: 1 to 500.
     * @example 86400
     *
     * @var int
     */
    public $silenceTime;

    /**
     * @description The mute period during which new alerts are not sent even if the trigger conditions are met.
     *
     * >  If an alert is not cleared after the mute period ends, CloudMonitor resends an alert notification.
     * @example https://alert.aliyun.com.com:8080/callback
     *
     * @var string
     */
    public $webhook;
    protected $_name = [
        'escalations'         => 'Escalations',
        'contactGroups'       => 'ContactGroups',
        'effectiveInterval'   => 'EffectiveInterval',
        'emailSubject'        => 'EmailSubject',
        'interval'            => 'Interval',
        'labels'              => 'Labels',
        'metricName'          => 'MetricName',
        'namespace'           => 'Namespace',
        'noDataPolicy'        => 'NoDataPolicy',
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
        if (null !== $this->escalations) {
            $res['Escalations'] = null !== $this->escalations ? $this->escalations->toMap() : null;
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
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->labels) {
            $res['Labels'] = [];
            if (null !== $this->labels && \is_array($this->labels)) {
                $n = 0;
                foreach ($this->labels as $item) {
                    $res['Labels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return rules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Escalations'])) {
            $model->escalations = escalations::fromMap($map['Escalations']);
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
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = [];
                $n             = 0;
                foreach ($map['Labels'] as $item) {
                    $model->labels[$n++] = null !== $item ? labels::fromMap($item) : $item;
                }
            }
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
