<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class PutCustomEventRuleRequest extends Model
{
    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $ruleId;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var string
     */
    public $eventName;

    /**
     * @var string
     */
    public $contactGroups;

    /**
     * @var string
     */
    public $webhook;

    /**
     * @var string
     */
    public $effectiveInterval;

    /**
     * @var string
     */
    public $period;

    /**
     * @var string
     */
    public $emailSubject;

    /**
     * @var string
     */
    public $threshold;

    /**
     * @var string
     */
    public $level;
    protected $_name = [
        'groupId'           => 'GroupId',
        'ruleId'            => 'RuleId',
        'ruleName'          => 'RuleName',
        'eventName'         => 'EventName',
        'contactGroups'     => 'ContactGroups',
        'webhook'           => 'Webhook',
        'effectiveInterval' => 'EffectiveInterval',
        'period'            => 'Period',
        'emailSubject'      => 'EmailSubject',
        'threshold'         => 'Threshold',
        'level'             => 'Level',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->eventName) {
            $res['EventName'] = $this->eventName;
        }
        if (null !== $this->contactGroups) {
            $res['ContactGroups'] = $this->contactGroups;
        }
        if (null !== $this->webhook) {
            $res['Webhook'] = $this->webhook;
        }
        if (null !== $this->effectiveInterval) {
            $res['EffectiveInterval'] = $this->effectiveInterval;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->emailSubject) {
            $res['EmailSubject'] = $this->emailSubject;
        }
        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
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
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['EventName'])) {
            $model->eventName = $map['EventName'];
        }
        if (isset($map['ContactGroups'])) {
            $model->contactGroups = $map['ContactGroups'];
        }
        if (isset($map['Webhook'])) {
            $model->webhook = $map['Webhook'];
        }
        if (isset($map['EffectiveInterval'])) {
            $model->effectiveInterval = $map['EffectiveInterval'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['EmailSubject'])) {
            $model->emailSubject = $map['EmailSubject'];
        }
        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        return $model;
    }
}
