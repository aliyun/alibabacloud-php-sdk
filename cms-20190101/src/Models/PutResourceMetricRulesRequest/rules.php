<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\PutResourceMetricRulesRequest;

use AlibabaCloud\SDK\Cms\V20190101\Models\PutResourceMetricRulesRequest\rules\escalations;
use AlibabaCloud\Tea\Model;

class rules extends Model
{
    /**
     * @var escalations
     */
    public $escalations;

    /**
     * @var string
     */
    public $metricName;

    /**
     * @var string
     */
    public $effectiveInterval;

    /**
     * @var string
     */
    public $noEffectiveInterval;

    /**
     * @var string
     */
    public $ruleId;

    /**
     * @var string
     */
    public $resources;

    /**
     * @var int
     */
    public $silenceTime;

    /**
     * @var string
     */
    public $webhook;

    /**
     * @var string
     */
    public $contactGroups;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $emailSubject;

    /**
     * @var string
     */
    public $period;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var string
     */
    public $interval;
    protected $_name = [
        'escalations'         => 'Escalations',
        'metricName'          => 'MetricName',
        'effectiveInterval'   => 'EffectiveInterval',
        'noEffectiveInterval' => 'NoEffectiveInterval',
        'ruleId'              => 'RuleId',
        'resources'           => 'Resources',
        'silenceTime'         => 'SilenceTime',
        'webhook'             => 'Webhook',
        'contactGroups'       => 'ContactGroups',
        'namespace'           => 'Namespace',
        'emailSubject'        => 'EmailSubject',
        'period'              => 'Period',
        'ruleName'            => 'RuleName',
        'interval'            => 'Interval',
    ];

    public function validate()
    {
        Model::validateRequired('escalations', $this->escalations, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->escalations) {
            $res['Escalations'] = null !== $this->escalations ? $this->escalations->toMap() : null;
        }
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->effectiveInterval) {
            $res['EffectiveInterval'] = $this->effectiveInterval;
        }
        if (null !== $this->noEffectiveInterval) {
            $res['NoEffectiveInterval'] = $this->noEffectiveInterval;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->resources) {
            $res['Resources'] = $this->resources;
        }
        if (null !== $this->silenceTime) {
            $res['SilenceTime'] = $this->silenceTime;
        }
        if (null !== $this->webhook) {
            $res['Webhook'] = $this->webhook;
        }
        if (null !== $this->contactGroups) {
            $res['ContactGroups'] = $this->contactGroups;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->emailSubject) {
            $res['EmailSubject'] = $this->emailSubject;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
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
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['EffectiveInterval'])) {
            $model->effectiveInterval = $map['EffectiveInterval'];
        }
        if (isset($map['NoEffectiveInterval'])) {
            $model->noEffectiveInterval = $map['NoEffectiveInterval'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['Resources'])) {
            $model->resources = $map['Resources'];
        }
        if (isset($map['SilenceTime'])) {
            $model->silenceTime = $map['SilenceTime'];
        }
        if (isset($map['Webhook'])) {
            $model->webhook = $map['Webhook'];
        }
        if (isset($map['ContactGroups'])) {
            $model->contactGroups = $map['ContactGroups'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['EmailSubject'])) {
            $model->emailSubject = $map['EmailSubject'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }

        return $model;
    }
}
