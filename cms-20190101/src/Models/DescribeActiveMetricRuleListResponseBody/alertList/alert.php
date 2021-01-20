<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeActiveMetricRuleListResponseBody\alertList;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeActiveMetricRuleListResponseBody\alertList\alert\escalations;
use AlibabaCloud\Tea\Model;

class alert extends Model
{
    /**
     * @var string
     */
    public $silenceTime;

    /**
     * @var string
     */
    public $metricName;

    /**
     * @var string
     */
    public $webhook;

    /**
     * @var escalations
     */
    public $escalations;

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
    public $mailSubject;

    /**
     * @var string
     */
    public $noEffectiveInterval;

    /**
     * @var string
     */
    public $effectiveInterval;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var string
     */
    public $alertState;

    /**
     * @var string
     */
    public $period;

    /**
     * @var string
     */
    public $ruleId;

    /**
     * @var string
     */
    public $dimensions;

    /**
     * @var bool
     */
    public $enableState;

    /**
     * @var string
     */
    public $resources;
    protected $_name = [
        'silenceTime'         => 'SilenceTime',
        'metricName'          => 'MetricName',
        'webhook'             => 'Webhook',
        'escalations'         => 'Escalations',
        'contactGroups'       => 'ContactGroups',
        'namespace'           => 'Namespace',
        'mailSubject'         => 'MailSubject',
        'noEffectiveInterval' => 'NoEffectiveInterval',
        'effectiveInterval'   => 'EffectiveInterval',
        'ruleName'            => 'RuleName',
        'alertState'          => 'AlertState',
        'period'              => 'Period',
        'ruleId'              => 'RuleId',
        'dimensions'          => 'Dimensions',
        'enableState'         => 'EnableState',
        'resources'           => 'Resources',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->silenceTime) {
            $res['SilenceTime'] = $this->silenceTime;
        }
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->webhook) {
            $res['Webhook'] = $this->webhook;
        }
        if (null !== $this->escalations) {
            $res['Escalations'] = null !== $this->escalations ? $this->escalations->toMap() : null;
        }
        if (null !== $this->contactGroups) {
            $res['ContactGroups'] = $this->contactGroups;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->mailSubject) {
            $res['MailSubject'] = $this->mailSubject;
        }
        if (null !== $this->noEffectiveInterval) {
            $res['NoEffectiveInterval'] = $this->noEffectiveInterval;
        }
        if (null !== $this->effectiveInterval) {
            $res['EffectiveInterval'] = $this->effectiveInterval;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->alertState) {
            $res['AlertState'] = $this->alertState;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->dimensions) {
            $res['Dimensions'] = $this->dimensions;
        }
        if (null !== $this->enableState) {
            $res['EnableState'] = $this->enableState;
        }
        if (null !== $this->resources) {
            $res['Resources'] = $this->resources;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alert
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SilenceTime'])) {
            $model->silenceTime = $map['SilenceTime'];
        }
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['Webhook'])) {
            $model->webhook = $map['Webhook'];
        }
        if (isset($map['Escalations'])) {
            $model->escalations = escalations::fromMap($map['Escalations']);
        }
        if (isset($map['ContactGroups'])) {
            $model->contactGroups = $map['ContactGroups'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['MailSubject'])) {
            $model->mailSubject = $map['MailSubject'];
        }
        if (isset($map['NoEffectiveInterval'])) {
            $model->noEffectiveInterval = $map['NoEffectiveInterval'];
        }
        if (isset($map['EffectiveInterval'])) {
            $model->effectiveInterval = $map['EffectiveInterval'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['AlertState'])) {
            $model->alertState = $map['AlertState'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['Dimensions'])) {
            $model->dimensions = $map['Dimensions'];
        }
        if (isset($map['EnableState'])) {
            $model->enableState = $map['EnableState'];
        }
        if (isset($map['Resources'])) {
            $model->resources = $map['Resources'];
        }

        return $model;
    }
}
