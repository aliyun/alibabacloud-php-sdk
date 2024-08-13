<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models\QuerySchedruleOnDemandResponseBody;

use AlibabaCloud\Tea\Model;

class ruleConfig extends Model
{
    /**
     * @description The scheduling action. The value is set to **declare**, which indicates that the route is advertised.
     *
     * @example declare
     *
     * @var string
     */
    public $ruleAction;

    /**
     * @description If the inbound bandwidth or packets consecutively exceed the threshold for the specified number of times, the scheduling rule is triggered and traffic is rerouted to the on-demand instance. The specified number of times is the value of this parameter.
     *
     * >  The threshold of inbound bandwidth is the value of **RuleConditionMbps**. The threshold of inbound packets is the value of **RuleConditionKpps**.
     * @example 3
     *
     * @var string
     */
    public $ruleConditionCnt;

    /**
     * @description The threshold of inbound packets. Unit: kilo packets per second (Kpps). Minimum value: **10**.
     *
     * @example 10
     *
     * @var string
     */
    public $ruleConditionKpps;

    /**
     * @description The threshold of inbound bandwidth. Unit: Mbit/s. Minimum value: **100**.
     *
     * @example 100
     *
     * @var string
     */
    public $ruleConditionMbps;

    /**
     * @description The name of the scheduling rule.
     *
     * @example ddosbgp-cn-z2q1qzxb****
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description Indicates whether the scheduling rule is enabled. Valid values:
     *
     *   **on**: enabled.
     *   **off**: disabled.
     *
     * @example on
     *
     * @var string
     */
    public $ruleSwitch;

    /**
     * @description The start time of the period during which the scheduling rule is automatically stopped. The time must be in the 24-hour clock and in the `hh:mm` format.
     *
     * If the system detects that DDoS attacks stop, the system no longer reroutes traffic to the on-demand instance from the time you specified. We recommend that you set this parameter to a value that is defined as off-peak hours.
     *
     * >  This parameter takes effect only when the value of **RuleUndoMode** is **auto**.
     * @example 03:00
     *
     * @var string
     */
    public $ruleUndoBeginTime;

    /**
     * @description The end time of the period during which the scheduling rule is automatically stopped. The time must be in the 24-hour clock and in the `hh:mm` format.
     *
     * @example 03:05
     *
     * @var string
     */
    public $ruleUndoEndTime;

    /**
     * @description The stop method of the scheduling rule. Valid values:
     *
     *   **auto**
     *   **manual**
     *
     * @example auto
     *
     * @var string
     */
    public $ruleUndoMode;

    /**
     * @description The time zone of the time when the scheduling rule automatically stops. The time zone must be in the `GMT-hh:mm` format.
     *
     * For example, the value `GMT-08:00` indicates that the time zone is UTC+8.
     *
     * >  This parameter takes effect only when the value of **RuleUndoMode** is **auto**.
     * @example GMT-08:00
     *
     * @var string
     */
    public $timeZone;
    protected $_name = [
        'ruleAction'        => 'RuleAction',
        'ruleConditionCnt'  => 'RuleConditionCnt',
        'ruleConditionKpps' => 'RuleConditionKpps',
        'ruleConditionMbps' => 'RuleConditionMbps',
        'ruleName'          => 'RuleName',
        'ruleSwitch'        => 'RuleSwitch',
        'ruleUndoBeginTime' => 'RuleUndoBeginTime',
        'ruleUndoEndTime'   => 'RuleUndoEndTime',
        'ruleUndoMode'      => 'RuleUndoMode',
        'timeZone'          => 'TimeZone',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ruleAction) {
            $res['RuleAction'] = $this->ruleAction;
        }
        if (null !== $this->ruleConditionCnt) {
            $res['RuleConditionCnt'] = $this->ruleConditionCnt;
        }
        if (null !== $this->ruleConditionKpps) {
            $res['RuleConditionKpps'] = $this->ruleConditionKpps;
        }
        if (null !== $this->ruleConditionMbps) {
            $res['RuleConditionMbps'] = $this->ruleConditionMbps;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->ruleSwitch) {
            $res['RuleSwitch'] = $this->ruleSwitch;
        }
        if (null !== $this->ruleUndoBeginTime) {
            $res['RuleUndoBeginTime'] = $this->ruleUndoBeginTime;
        }
        if (null !== $this->ruleUndoEndTime) {
            $res['RuleUndoEndTime'] = $this->ruleUndoEndTime;
        }
        if (null !== $this->ruleUndoMode) {
            $res['RuleUndoMode'] = $this->ruleUndoMode;
        }
        if (null !== $this->timeZone) {
            $res['TimeZone'] = $this->timeZone;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ruleConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RuleAction'])) {
            $model->ruleAction = $map['RuleAction'];
        }
        if (isset($map['RuleConditionCnt'])) {
            $model->ruleConditionCnt = $map['RuleConditionCnt'];
        }
        if (isset($map['RuleConditionKpps'])) {
            $model->ruleConditionKpps = $map['RuleConditionKpps'];
        }
        if (isset($map['RuleConditionMbps'])) {
            $model->ruleConditionMbps = $map['RuleConditionMbps'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['RuleSwitch'])) {
            $model->ruleSwitch = $map['RuleSwitch'];
        }
        if (isset($map['RuleUndoBeginTime'])) {
            $model->ruleUndoBeginTime = $map['RuleUndoBeginTime'];
        }
        if (isset($map['RuleUndoEndTime'])) {
            $model->ruleUndoEndTime = $map['RuleUndoEndTime'];
        }
        if (isset($map['RuleUndoMode'])) {
            $model->ruleUndoMode = $map['RuleUndoMode'];
        }
        if (isset($map['TimeZone'])) {
            $model->timeZone = $map['TimeZone'];
        }

        return $model;
    }
}
