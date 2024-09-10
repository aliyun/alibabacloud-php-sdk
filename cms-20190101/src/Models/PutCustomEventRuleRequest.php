<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class PutCustomEventRuleRequest extends Model
{
    /**
     * @description The alert contact group that receives alert notifications. Separate multiple contact groups with commas (,).
     *
     * This parameter is required.
     * @example ECS_Group
     *
     * @var string
     */
    public $contactGroups;

    /**
     * @description The time period during which the alert rule is effective. Valid values: 00:00 to 23:59.
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
     * @description The name of the custom event. For more information about how to obtain the event name, see [DescribeCustomEventAttribute](https://help.aliyun.com/document_detail/115262.html).
     *
     * This parameter is required.
     * @example HostDown
     *
     * @var string
     */
    public $eventName;

    /**
     * @description The ID of the application group. For more information about how to obtain the group ID, see [DescribeCustomEventAttribute](https://help.aliyun.com/document_detail/115262.html).
     *
     * This parameter is required.
     * @example 7378****
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The level of the alert. Valid values:
     *
     *   CRITICAL: critical issue
     *   WARN: warning
     *   INFO: information
     *
     * This parameter is required.
     * @example CRITICAL
     *
     * @var string
     */
    public $level;

    /**
     * @description The cycle that is used to aggregate monitoring data of the custom event. Unit: seconds. Set the value to an integral multiple of 60. Default value: 300.
     *
     * @example 60
     *
     * @var string
     */
    public $period;

    /**
     * @description The ID of the alert rule.
     *
     * This parameter is required.
     * @example CustomRuleId1
     *
     * @var string
     */
    public $ruleId;

    /**
     * @description The name of the alert rule.
     *
     * This parameter is required.
     * @example CustomeRule
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The alert threshold.
     *
     * This parameter is required.
     * @example 99
     *
     * @var string
     */
    public $threshold;

    /**
     * @description The callback URL to which a POST request is sent when an alert is triggered based on the alert rule.
     *
     * @example https://www.aliyun.com
     *
     * @var string
     */
    public $webhook;
    protected $_name = [
        'contactGroups'     => 'ContactGroups',
        'effectiveInterval' => 'EffectiveInterval',
        'emailSubject'      => 'EmailSubject',
        'eventName'         => 'EventName',
        'groupId'           => 'GroupId',
        'level'             => 'Level',
        'period'            => 'Period',
        'ruleId'            => 'RuleId',
        'ruleName'          => 'RuleName',
        'threshold'         => 'Threshold',
        'webhook'           => 'Webhook',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactGroups) {
            $res['ContactGroups'] = $this->contactGroups;
        }
        if (null !== $this->effectiveInterval) {
            $res['EffectiveInterval'] = $this->effectiveInterval;
        }
        if (null !== $this->emailSubject) {
            $res['EmailSubject'] = $this->emailSubject;
        }
        if (null !== $this->eventName) {
            $res['EventName'] = $this->eventName;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
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
        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }
        if (null !== $this->webhook) {
            $res['Webhook'] = $this->webhook;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutCustomEventRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactGroups'])) {
            $model->contactGroups = $map['ContactGroups'];
        }
        if (isset($map['EffectiveInterval'])) {
            $model->effectiveInterval = $map['EffectiveInterval'];
        }
        if (isset($map['EmailSubject'])) {
            $model->emailSubject = $map['EmailSubject'];
        }
        if (isset($map['EventName'])) {
            $model->eventName = $map['EventName'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
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
        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }
        if (isset($map['Webhook'])) {
            $model->webhook = $map['Webhook'];
        }

        return $model;
    }
}
