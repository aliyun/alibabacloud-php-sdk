<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\PutResourceMetricRuleShrinkRequest\escalations;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutResourceMetricRuleShrinkRequest\labels;
use AlibabaCloud\Tea\Model;

class PutResourceMetricRuleShrinkRequest extends Model
{
    /**
     * @var escalations
     */
    public $escalations;

    /**
     * @description The alert contact group. The alert notifications are sent to the contacts that belong to the alert contact group.
     *
     * >  An alert contact group can contain one or more alert contacts. For information about how to create alert contacts and alert contact groups, see [PutContact](~~114923~~) and [PutContactGroup](~~114929~~).
     * @var string
     */
    public $compositeExpressionShrink;

    /**
     * @description The statistical methods for Info-level alerts. Valid values:
     *
     *   Maximum: the maximum value
     *   Minimum: the minimum value
     *   Average: the average value
     *   Availability: the availability rate
     *
     * >  You must select at least one of the Critical, Warn, and Info alert levels and specify the Statistics, ComparisonOperator, Threshold, and Times parameters for the selected alert level.
     * @example ECS_Group
     *
     * @var string
     */
    public $contactGroups;

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
     * >  You must select at least one of the Critical, Warn, and Info alert levels and specify the Statistics, ComparisonOperator, Threshold, and Times parameters for the selected alert level.
     * @example 00:00-23:59
     *
     * @var string
     */
    public $effectiveInterval;

    /**
     * @description The namespace of the cloud service. For information about how to query the namespace of a cloud service, see [Appendix 1: Metrics](~~163515~~).
     *
     * >  If you create a Prometheus alert rule for Hybrid Cloud Monitoring, you must set this parameter to `acs_prometheus`.
     * @var string
     */
    public $emailSubject;

    /**
     * @description The subject of the alert notification email.
     *
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
     * @description The trigger conditions that are created in standard mode.
     *
     * @example cpu_total
     *
     * @var string
     */
    public $metricName;

    /**
     * @description The operation that you want to perform. Set the value to **PutResourceMetricRule**.
     *
     * @example acs_ecs_dashboard
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The error message.
     *
     * @example KEEP_LAST_STATE
     *
     * @var string
     */
    public $noDataPolicy;

    /**
     * @description The value of the annotation.
     *
     * @example 00:00-06:00
     *
     * @var string
     */
    public $noEffectiveInterval;

    /**
     * @description The name of the alert rule.
     *
     * >  If you specify a new name, a threshold-triggered alert rule is created.
     * @example 60
     *
     * @var string
     */
    public $period;

    /**
     * @description The time period during which the alert rule is ineffective.
     *
     * @var string
     */
    public $prometheusShrink;

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
     * >  You must select at least one of the Critical, Warn, and Info alert levels and specify the Statistics, ComparisonOperator, Threshold, and Times parameters for the selected alert level.
     * @example [{"instanceId":"i-uf6j91r34rnwawoo****"}]
     *
     * @var string
     */
    public $resources;

    /**
     * @description The metric that is used to monitor the cloud service.
     *
     * @example a151cd6023eacee2f0978e03863cc1697c89508****
     *
     * @var string
     */
    public $ruleId;

    /**
     * @description The level of the alert. Valid values:
     *
     *   Critical
     *   Warn
     *   Info
     *
     * @example test123
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The interval at which the alert is triggered. Unit: seconds.
     *
     * >  For information about how to query the statistical period of a metric, see [Appendix 1: Metrics](~~163515~~).
     * @example 86400
     *
     * @var int
     */
    public $silenceTime;

    /**
     * @description The ID of the alert rule.
     *
     * >  If you specify a new ID, a threshold-triggered alert rule is created.
     * @example https://alert.aliyun.com.com:8080/callback
     *
     * @var string
     */
    public $webhook;
    protected $_name = [
        'escalations'               => 'Escalations',
        'compositeExpressionShrink' => 'CompositeExpression',
        'contactGroups'             => 'ContactGroups',
        'effectiveInterval'         => 'EffectiveInterval',
        'emailSubject'              => 'EmailSubject',
        'interval'                  => 'Interval',
        'labels'                    => 'Labels',
        'metricName'                => 'MetricName',
        'namespace'                 => 'Namespace',
        'noDataPolicy'              => 'NoDataPolicy',
        'noEffectiveInterval'       => 'NoEffectiveInterval',
        'period'                    => 'Period',
        'prometheusShrink'          => 'Prometheus',
        'resources'                 => 'Resources',
        'ruleId'                    => 'RuleId',
        'ruleName'                  => 'RuleName',
        'silenceTime'               => 'SilenceTime',
        'webhook'                   => 'Webhook',
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
        if (null !== $this->compositeExpressionShrink) {
            $res['CompositeExpression'] = $this->compositeExpressionShrink;
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
        if (null !== $this->prometheusShrink) {
            $res['Prometheus'] = $this->prometheusShrink;
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
     * @return PutResourceMetricRuleShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Escalations'])) {
            $model->escalations = escalations::fromMap($map['Escalations']);
        }
        if (isset($map['CompositeExpression'])) {
            $model->compositeExpressionShrink = $map['CompositeExpression'];
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
        if (isset($map['Prometheus'])) {
            $model->prometheusShrink = $map['Prometheus'];
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
