<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\PutGroupMetricRuleRequest\escalations;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutGroupMetricRuleRequest\labels;
use AlibabaCloud\Tea\Model;

class PutGroupMetricRuleRequest extends Model
{
    /**
     * @var escalations
     */
    public $escalations;

    /**
     * @description The abbreviation of the cloud service name.
     *
     * For more information about how to obtain the abbreviation of a cloud service name, see `metricCategory` in the response parameter `Labels` of the [DescribeProjectMeta](~~114916~~) operation.
     * @example ECS
     *
     * @var string
     */
    public $category;

    /**
     * @description The alert contact group.
     *
     * @example ECS_Group
     *
     * @var string
     */
    public $contactGroups;

    /**
     * @description The first-level dimension of the alert rule in the application group.
     *
     * Set the value to a set of key-value pairs, for example, `userId:120886317861****` or `instanceId:i-m5e1qg6uo38rztr4****`.
     * @example [{"instanceId":"i-m5e1qg6uo38rztr4****"}]
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
     * @description The subject of the alert notification email.
     *
     * @var string
     */
    public $emailSubject;

    /**
     * @description The second-level or third-level dimension of the alert rule in the application group.
     *
     * Set the value to a set of key-value pairs, for example, `port:80` or `/dev/xvda:d-m5e6yphgzn3aprwu****`.
     *
     * If the first-level dimension of the alert rule is `instanceId:i-m5e1qg6uo38rztr4****`, its second-level dimension is the `/dev/xvda:d-m5e6yphgzn3aprwu****` disk in the instance.
     * @example {"/dev/xvda":"d-m5e6yphgzn3aprwu****"}
     *
     * @var string
     */
    public $extraDimensionJson;

    /**
     * @description The application group ID.
     *
     * For more information about how to obtain the ID of an application group, see [DescribeMonitorGroups](~~115032~~).
     * @example 17285****
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The interval at which CloudMonitor checks whether the alert rule is triggered. Unit: seconds.
     *
     * >  We recommend that you set the interval to the data aggregation period. If the interval is shorter than the data aggregation period, alerts cannot be triggered due to insufficient data.
     * @example 60
     *
     * @var string
     */
    public $interval;

    /**
     * @description The tags of the alert rule.
     *
     * The specified tag is contained in alert notifications.
     * @var labels[]
     */
    public $labels;

    /**
     * @description The metric name.
     *
     * For more information about how to obtain the name of a metric, see [DescribeMetricMetaList](~~98846~~) or [Appendix 1: Metrics](~~163515~~).
     * @example cpu_total
     *
     * @var string
     */
    public $metricName;

    /**
     * @description The namespace of the cloud service.
     *
     * For more information about how to obtain the namespace of a cloud service, see [DescribeMetricMetaList](~~98846~~) or [Appendix 1: Metrics](~~163515~~).
     * @example acs_ecs_dashboard
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The method that is used to handle alerts when no monitoring data is found. Valid values:
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
     * @description The time period during which the alert rule is ineffective.
     *
     * @example 00:00-05:30
     *
     * @var string
     */
    public $noEffectiveInterval;

    /**
     * @var string
     */
    public $options;

    /**
     * @description The aggregation period of the metric data.
     *
     * Set the `Period` parameter to an integral multiple of 60. Unit: seconds. Default value: 300.
     * @example 60
     *
     * @var string
     */
    public $period;

    /**
     * @description The ID of the alert rule.
     *
     *   When you create an alert rule for the application group, enter the ID of the alert rule.
     *   When you modify a specified alert rule in the application group, you must obtain the ID of the alert rule. For information about how to obtain the ID of an alert rule, see [DescribeMetricRuleList](~~114941~~).
     *
     * @example 123456
     *
     * @var string
     */
    public $ruleId;

    /**
     * @description The name of the alert rule.
     *
     *   When you create an alert rule for the application group, enter the name of the alert rule.
     *   When you modify a specified alert rule in the application group, you must obtain the name of the alert rule. For more information about how to obtain the name of an alert rule, see [DescribeMetricRuleList](~~114941~~).
     *
     * @example Rule_01
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The mute period during which new alerts are not sent even if the trigger conditions are met.
     *
     * Unit: seconds. Default value: 86400.
     * @example 86400
     *
     * @var int
     */
    public $silenceTime;

    /**
     * @description The callback URL.
     *
     * The callback URL must be accessible over the Internet. CloudMonitor sends a POST request to push an alert notification to the callback URL that you specify. Only HTTP requests are supported.
     * @example https://www.aliyun.com
     *
     * @var string
     */
    public $webhook;
    protected $_name = [
        'escalations'         => 'Escalations',
        'category'            => 'Category',
        'contactGroups'       => 'ContactGroups',
        'dimensions'          => 'Dimensions',
        'effectiveInterval'   => 'EffectiveInterval',
        'emailSubject'        => 'EmailSubject',
        'extraDimensionJson'  => 'ExtraDimensionJson',
        'groupId'             => 'GroupId',
        'interval'            => 'Interval',
        'labels'              => 'Labels',
        'metricName'          => 'MetricName',
        'namespace'           => 'Namespace',
        'noDataPolicy'        => 'NoDataPolicy',
        'noEffectiveInterval' => 'NoEffectiveInterval',
        'options'             => 'Options',
        'period'              => 'Period',
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
        if (null !== $this->category) {
            $res['Category'] = $this->category;
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
        if (null !== $this->emailSubject) {
            $res['EmailSubject'] = $this->emailSubject;
        }
        if (null !== $this->extraDimensionJson) {
            $res['ExtraDimensionJson'] = $this->extraDimensionJson;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
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
        if (null !== $this->options) {
            $res['Options'] = $this->options;
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
        if (null !== $this->webhook) {
            $res['Webhook'] = $this->webhook;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutGroupMetricRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Escalations'])) {
            $model->escalations = escalations::fromMap($map['Escalations']);
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
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
        if (isset($map['EmailSubject'])) {
            $model->emailSubject = $map['EmailSubject'];
        }
        if (isset($map['ExtraDimensionJson'])) {
            $model->extraDimensionJson = $map['ExtraDimensionJson'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
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
        if (isset($map['Options'])) {
            $model->options = $map['Options'];
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
        if (isset($map['Webhook'])) {
            $model->webhook = $map['Webhook'];
        }

        return $model;
    }
}
