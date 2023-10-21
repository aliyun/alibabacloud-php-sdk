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
     * @description The alert contact group. The alert notifications are sent to the alert contacts in the alert contact group.
     *
     * >  An alert contact group can contain one or more alert contacts. For information about how to create alert contacts and alert contact groups, see [PutContact](~~114923~~) and [PutContactGroup](~~114929~~).
     * @example ECS_Group
     *
     * @var string
     */
    public $contactGroups;

    /**
     * @description The time period during which the alert rule is effective.
     *
     * Valid values of N: 1 to 500.
     * @example 00:00-23:59
     *
     * @var string
     */
    public $effectiveInterval;

    /**
     * @description The subject of the alert notification email.
     *
     * Valid values of N: 1 to 500.
     * @var string
     */
    public $emailSubject;

    /**
     * @description The interval at which the alert rule is executed.
     *
     * >  For information about how to query the statistical period of a metric, see [Appendix 1: Metrics](~~163515~~).
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
     * @description The name of the metric.
     *
     * For information about how to query the name of a metric, see [Appendix 1: Metrics](~~163515~~).
     * @example cpu_total
     *
     * @var string
     */
    public $metricName;

    /**
     * @description The namespace of the cloud service.
     *
     * For information about how to query the namespace of a cloud service, see [Appendix 1: Metrics](~~163515~~).
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
     * Valid values of N: 1 to 500.
     * @example KEEP_LAST_STATE
     *
     * @var string
     */
    public $noDataPolicy;

    /**
     * @description The time period during which the alert rule is ineffective.
     *
     * Valid values of N: 1 to 500.
     * @example 00:00-06:00
     *
     * @var string
     */
    public $noEffectiveInterval;

    /**
     * @description The statistical period of the metric.
     *
     * >  For information about how to query the statistical period of a metric, see [Appendix 1: Metrics](~~163515~~).
     * @example 60
     *
     * @var string
     */
    public $period;

    /**
     * @description The information about the resource. Examples: `[{"instanceId":"i-uf6j91r34rnwawoo****"}]` and `[{"userId":"100931896542****"}]`.
     *
     * For more information about the supported dimensions that are used to query resources, see [Appendix 1: Metrics](~~163515~~).
     * @example [{"instanceId":"i-uf6j91r34rnwawoo****"}]
     *
     * @var string
     */
    public $resources;

    /**
     * @description The ID of the alert rule.
     *
     * >  If you specify a new ID, you create a threshold-triggered alert rule.
     * @example a151cd6023eacee2f0978e03863cc1697c89508****
     *
     * @var string
     */
    public $ruleId;

    /**
     * @description The name of the alert rule.
     *
     * >  If you specify a new name, you create a threshold-triggered alert rule.
     * @example test123
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The mute period during which new alerts are not sent even if the trigger conditions are met.
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
     * Valid values of N: 1 to 500.
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
