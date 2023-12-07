<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeGroupMonitoringAgentProcessResponseBody\processes\process\alertConfig;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeGroupMonitoringAgentProcessResponseBody\processes\process\alertConfig\alertConfig\targetList;
use AlibabaCloud\Tea\Model;

class alertConfig extends Model
{
    /**
     * @description The comparison operator that is used to compare the metric value with the threshold. Valid values:
     *
     *   GreaterThanOrEqualToThreshold: greater than or equal to the threshold
     *   GreaterThanThreshold: greater than the threshold
     *   LessThanOrEqualToThreshold: less than or equal to the threshold
     *   LessThanThreshold: less than the threshold
     *   NotEqualToThreshold: not equal to the threshold
     *   GreaterThanYesterday: greater than the metric value at the same time yesterday.
     *   LessThanYesterday: less than the metric value at the same time yesterday
     *   GreaterThanLastWeek: greater than the metric value at the same time last week
     *   LessThanLastWeek: less than the metric value at the same time last week
     *   GreaterThanLastPeriod: greater than the metric value in the last monitoring cycle
     *   LessThanLastPeriod: less than the metric value in the last monitoring cycle
     *
     * @example GreaterThanOrEqualToThreshold
     *
     * @var string
     */
    public $comparisonOperator;

    /**
     * @description The time period during which the alert rule is effective.
     *
     * @example 00:00-23:59
     *
     * @var string
     */
    public $effectiveInterval;

    /**
     * @description The level of the alert. Valid values:
     *
     *   critical
     *   warn
     *   Info
     *
     * @example warn
     *
     * @var string
     */
    public $escalationsLevel;

    /**
     * @description The time period during which the alert rule is ineffective.
     *
     * @example 00:00-23:59
     *
     * @var string
     */
    public $noEffectiveInterval;

    /**
     * @description The mute period during which new alert notifications are not sent even if the trigger conditions are met. Unit: seconds. Minimum value: 3600, which is equivalent to one hour. Default value: 86400, which is equivalent to one day.
     *
     * >  Only one alert notification is sent during each mute period even if the metric value exceeds the alert threshold several times.
     * @example 86400
     *
     * @var string
     */
    public $silenceTime;

    /**
     * @description The method used to calculate metric values that trigger alerts.
     *
     * @example Average
     *
     * @var string
     */
    public $statistics;

    /**
     * @description The resource for which alerts are triggered.
     *
     * @var targetList
     */
    public $targetList;

    /**
     * @description The alert threshold.
     *
     * @example 5
     *
     * @var string
     */
    public $threshold;

    /**
     * @description The number of times for which the threshold can be consecutively exceeded.
     *
     * >  A metric triggers an alert only after the metric value reaches the threshold consecutively for the specified times.
     * @example 3
     *
     * @var string
     */
    public $times;

    /**
     * @description The callback URL to which a POST request is sent when an alert is triggered based on the alert rule.
     *
     * @example http://www.aliyun.com
     *
     * @var string
     */
    public $webhook;
    protected $_name = [
        'comparisonOperator'  => 'ComparisonOperator',
        'effectiveInterval'   => 'EffectiveInterval',
        'escalationsLevel'    => 'EscalationsLevel',
        'noEffectiveInterval' => 'NoEffectiveInterval',
        'silenceTime'         => 'SilenceTime',
        'statistics'          => 'Statistics',
        'targetList'          => 'TargetList',
        'threshold'           => 'Threshold',
        'times'               => 'Times',
        'webhook'             => 'Webhook',
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
        if (null !== $this->effectiveInterval) {
            $res['EffectiveInterval'] = $this->effectiveInterval;
        }
        if (null !== $this->escalationsLevel) {
            $res['EscalationsLevel'] = $this->escalationsLevel;
        }
        if (null !== $this->noEffectiveInterval) {
            $res['NoEffectiveInterval'] = $this->noEffectiveInterval;
        }
        if (null !== $this->silenceTime) {
            $res['SilenceTime'] = $this->silenceTime;
        }
        if (null !== $this->statistics) {
            $res['Statistics'] = $this->statistics;
        }
        if (null !== $this->targetList) {
            $res['TargetList'] = null !== $this->targetList ? $this->targetList->toMap() : null;
        }
        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }
        if (null !== $this->times) {
            $res['Times'] = $this->times;
        }
        if (null !== $this->webhook) {
            $res['Webhook'] = $this->webhook;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alertConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ComparisonOperator'])) {
            $model->comparisonOperator = $map['ComparisonOperator'];
        }
        if (isset($map['EffectiveInterval'])) {
            $model->effectiveInterval = $map['EffectiveInterval'];
        }
        if (isset($map['EscalationsLevel'])) {
            $model->escalationsLevel = $map['EscalationsLevel'];
        }
        if (isset($map['NoEffectiveInterval'])) {
            $model->noEffectiveInterval = $map['NoEffectiveInterval'];
        }
        if (isset($map['SilenceTime'])) {
            $model->silenceTime = $map['SilenceTime'];
        }
        if (isset($map['Statistics'])) {
            $model->statistics = $map['Statistics'];
        }
        if (isset($map['TargetList'])) {
            $model->targetList = targetList::fromMap($map['TargetList']);
        }
        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }
        if (isset($map['Times'])) {
            $model->times = $map['Times'];
        }
        if (isset($map['Webhook'])) {
            $model->webhook = $map['Webhook'];
        }

        return $model;
    }
}
