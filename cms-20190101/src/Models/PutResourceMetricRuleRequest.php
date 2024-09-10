<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\PutResourceMetricRuleRequest\compositeExpression;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutResourceMetricRuleRequest\escalations;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutResourceMetricRuleRequest\labels;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutResourceMetricRuleRequest\prometheus;
use AlibabaCloud\Tea\Model;

class PutResourceMetricRuleRequest extends Model
{
    /**
     * @var escalations
     */
    public $escalations;

    /**
     * @description The trigger conditions for multiple metrics.
     *
     * >  The trigger conditions for a single metric and multiple metrics are mutually exclusive. You cannot specify trigger conditions for a single metric and multiple metrics at the same time.
     * @var compositeExpression
     */
    public $compositeExpression;

    /**
     * @description The alert contact groups. Alert notifications are sent to the alert contacts in the alert contact group.
     *
     * This parameter is required.
     * @example ECS_Group
     *
     * @var string
     */
    public $contactGroups;

    /**
     * @description The period of time during which the alert rule is effective.
     *
     * @example 00:00-23:59
     *
     * @var string
     */
    public $effectiveInterval;

    /**
     * @description The subject of the alert notification email.
     *
     * @var string
     */
    public $emailSubject;

    /**
     * @description The interval at which alerts are triggered based on the alert rule. Unit: seconds.
     *
     * >  For more information about how to query the statistical periods of metrics, see [Appendix 1: Metrics](https://help.aliyun.com/document_detail/163515.html).
     * @example 60
     *
     * @var string
     */
    public $interval;

    /**
     * @description If the metric meets the specified condition in the alert rule and CloudMonitor sends an alert notification, the tag is also written to the metric and displayed in the alert notification.
     *
     * >  This parameter is equivalent to the Label parameter of Prometheus alerts.
     * @var labels[]
     */
    public $labels;

    /**
     * @description The metric name. For more information about how to query metric names, see [Appendix 1: Metrics](https://help.aliyun.com/document_detail/163515.html).
     *
     * This parameter is required.
     * @example cpu_total
     *
     * @var string
     */
    public $metricName;

    /**
     * @description The namespace of the cloud service. For more information about how to query the namespaces of cloud services, see [Appendix 1: Metrics](https://help.aliyun.com/document_detail/163515.html).
     *
     * This parameter is required.
     * @example acs_ecs_dashboard
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The method that is used to handle alerts when no monitoring data is found. Valid value:
     *
     *   KEEP_LAST_STATE (default): No operation is performed.
     *   INSUFFICIENT_DATA: An alert whose content is "Insufficient data" is triggered.
     *   OK: The status is considered normal.
     *
     * @example KEEP_LAST_STATE
     *
     * @var string
     */
    public $noDataPolicy;

    /**
     * @description The period of time during which the alert rule is ineffective.
     *
     * @example 00:00-06:00
     *
     * @var string
     */
    public $noEffectiveInterval;

    /**
     * @description The statistical period of the metric. Unit: seconds. The default value is the interval at which the monitoring data of the metric is collected.
     *
     * >  For more information about how to query the statistical periods of metrics, see [Appendix 1: Metrics](https://help.aliyun.com/document_detail/163515.html).
     * @example 60
     *
     * @var string
     */
    public $period;

    /**
     * @description Prometheus alerts.
     *
     * >  This parameter is required only if you create a Prometheus alert rule for Hybrid Cloud Monitoring.
     * @var prometheus
     */
    public $prometheus;

    /**
     * @description The resource information. Examples: `[{"instanceId":"i-uf6j91r34rnwawoo****"}]` and `[{"userId":"100931896542****"}]`.
     *
     * For more information about the supported dimensions that are used to query resources, see [Appendix 1: Metrics](https://help.aliyun.com/document_detail/163515.html).
     * @example [{"instanceId":"i-uf6j91r34rnwawoo****"}]
     *
     * @var string
     */
    public $resources;

    /**
     * @description The ID of the alert rule.
     *
     * This parameter is required.
     * @example a151cd6023eacee2f0978e03863cc1697c89508****
     *
     * @var string
     */
    public $ruleId;

    /**
     * @description The name of the alert rule.
     *
     * This parameter is required.
     * @example test123
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The mute period during which new alert notifications are not sent even if the trigger conditions are met. Unit: seconds. Default value: 86400.
     *
     * >  If an alert is not cleared after the mute period ends, CloudMonitor resends an alert notification.
     * @example 86400
     *
     * @var int
     */
    public $silenceTime;

    /**
     * @description The callback URL to which a POST request is sent when an alert is triggered based on the alert rule.
     *
     * @example https://alert.aliyun.com.com:8080/callback
     *
     * @var string
     */
    public $webhook;
    protected $_name = [
        'escalations'         => 'Escalations',
        'compositeExpression' => 'CompositeExpression',
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
        'prometheus'          => 'Prometheus',
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
        if (null !== $this->compositeExpression) {
            $res['CompositeExpression'] = null !== $this->compositeExpression ? $this->compositeExpression->toMap() : null;
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
        if (null !== $this->webhook) {
            $res['Webhook'] = $this->webhook;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutResourceMetricRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Escalations'])) {
            $model->escalations = escalations::fromMap($map['Escalations']);
        }
        if (isset($map['CompositeExpression'])) {
            $model->compositeExpression = compositeExpression::fromMap($map['CompositeExpression']);
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
        if (isset($map['Webhook'])) {
            $model->webhook = $map['Webhook'];
        }

        return $model;
    }
}
