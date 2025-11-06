<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqp\V20190901\Models\ListInstanceAlarmResponseBody\data\voList\commodityInstanceAlarmVO\alarmVO\alarmDetails;

use AlibabaCloud\Dara\Model;

class alarmDetail extends Model
{
    /**
     * @var string
     */
    public $alertState;

    /**
     * @var string
     */
    public $comparisonOperator;

    /**
     * @var string
     */
    public $contactGroups;

    /**
     * @var string
     */
    public $dimensions;

    /**
     * @var string
     */
    public $effectiveInterval;

    /**
     * @var bool
     */
    public $enableState;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $mailSubject;

    /**
     * @var string
     */
    public $metricName;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $noEffectiveInterval;

    /**
     * @var string
     */
    public $period;

    /**
     * @var string
     */
    public $resources;

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
    public $silenceTime;

    /**
     * @var string
     */
    public $statistics;

    /**
     * @var string
     */
    public $threshold;

    /**
     * @var string
     */
    public $times;

    /**
     * @var string
     */
    public $webhook;
    protected $_name = [
        'alertState' => 'AlertState',
        'comparisonOperator' => 'ComparisonOperator',
        'contactGroups' => 'ContactGroups',
        'dimensions' => 'Dimensions',
        'effectiveInterval' => 'EffectiveInterval',
        'enableState' => 'EnableState',
        'groupId' => 'GroupId',
        'groupName' => 'GroupName',
        'mailSubject' => 'MailSubject',
        'metricName' => 'MetricName',
        'namespace' => 'Namespace',
        'noEffectiveInterval' => 'NoEffectiveInterval',
        'period' => 'Period',
        'resources' => 'Resources',
        'ruleId' => 'RuleId',
        'ruleName' => 'RuleName',
        'silenceTime' => 'SilenceTime',
        'statistics' => 'Statistics',
        'threshold' => 'Threshold',
        'times' => 'Times',
        'webhook' => 'Webhook',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertState) {
            $res['AlertState'] = $this->alertState;
        }

        if (null !== $this->comparisonOperator) {
            $res['ComparisonOperator'] = $this->comparisonOperator;
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

        if (null !== $this->enableState) {
            $res['EnableState'] = $this->enableState;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        if (null !== $this->mailSubject) {
            $res['MailSubject'] = $this->mailSubject;
        }

        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
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

        if (null !== $this->statistics) {
            $res['Statistics'] = $this->statistics;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertState'])) {
            $model->alertState = $map['AlertState'];
        }

        if (isset($map['ComparisonOperator'])) {
            $model->comparisonOperator = $map['ComparisonOperator'];
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

        if (isset($map['EnableState'])) {
            $model->enableState = $map['EnableState'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        if (isset($map['MailSubject'])) {
            $model->mailSubject = $map['MailSubject'];
        }

        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
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

        if (isset($map['Statistics'])) {
            $model->statistics = $map['Statistics'];
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
