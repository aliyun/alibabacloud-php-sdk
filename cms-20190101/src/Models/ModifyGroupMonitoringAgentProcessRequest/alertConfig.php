<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\ModifyGroupMonitoringAgentProcessRequest;

use AlibabaCloud\SDK\Cms\V20190101\Models\ModifyGroupMonitoringAgentProcessRequest\alertConfig\targetList;
use AlibabaCloud\Tea\Model;

class alertConfig extends Model
{
    /**
     * @description The comparison operator that is used to compare the metric value with the threshold. Valid values of N: 1 to 200. Valid values:
     *
     *   GreaterThanOrEqualToThreshold: greater than or equal to the threshold
     *   GreaterThanThreshold: greater than the threshold
     *   LessThanOrEqualToThreshold: less than or equal to the threshold
     *   LessThanThreshold: less than the threshold.
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
     * @description The time period during which the alert rule is effective. Valid values of N: 1 to 200.
     *
     * @example 00:00-22:59
     *
     * @var string
     */
    public $effectiveInterval;

    /**
     * @description The level of the alert. Valid values of N: 1 to 200. Valid values:
     *
     *   critical (default value): critical
     *   warn: warning
     *   info: information
     *
     * @example warn
     *
     * @var string
     */
    public $escalationsLevel;

    /**
     * @description The time period during which the alert rule is ineffective. Valid values of N: 1 to 200.
     *
     * @example 23:00-23:59
     *
     * @var string
     */
    public $noEffectiveInterval;

    /**
     * @description The mute period during which new alerts are not sent even if the trigger conditions are met. Valid values of N: 1 to 200.
     *
     * >  Only one alert notification is sent during a mute period even if the metric value exceeds the alert threshold during consecutive checks.
     * @example 86400
     *
     * @var string
     */
    public $silenceTime;

    /**
     * @description The statistical aggregation method that is used to calculate the metric values. Valid values of N: 1 to 200.
     *
     * >  Set the value to Average.
     * @example Average
     *
     * @var string
     */
    public $statistics;

    /**
     * @var targetList[]
     */
    public $targetList;

    /**
     * @description The alert threshold. Valid values of N: 1 to 200.
     *
     * @example 5
     *
     * @var string
     */
    public $threshold;

    /**
     * @description The number of times for which the threshold can be consecutively exceeded. Valid values of N: 1 to 200. Default value: 3.
     *
     * >  A metric triggers an alert only after the metric value reaches the threshold consecutively for the specified times.
     * @example 3
     *
     * @var string
     */
    public $times;

    /**
     * @description The callback URL to which a POST request is sent when an alert is triggered based on the alert rule. Valid values of N: 1 to 200.
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
            $res['TargetList'] = [];
            if (null !== $this->targetList && \is_array($this->targetList)) {
                $n = 0;
                foreach ($this->targetList as $item) {
                    $res['TargetList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
            if (!empty($map['TargetList'])) {
                $model->targetList = [];
                $n                 = 0;
                foreach ($map['TargetList'] as $item) {
                    $model->targetList[$n++] = null !== $item ? targetList::fromMap($item) : $item;
                }
            }
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
