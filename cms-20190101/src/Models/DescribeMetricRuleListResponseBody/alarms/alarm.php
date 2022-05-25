<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleListResponseBody\alarms;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleListResponseBody\alarms\alarm\compositeExpression;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleListResponseBody\alarms\alarm\escalations;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleListResponseBody\alarms\alarm\labels;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleListResponseBody\alarms\alarm\prometheus;
use AlibabaCloud\Tea\Model;

class alarm extends Model
{
    /**
     * @var string
     */
    public $alertState;

    /**
     * @var compositeExpression
     */
    public $compositeExpression;

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
     * @var escalations
     */
    public $escalations;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var labels
     */
    public $labels;

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
    public $noDataPolicy;

    /**
     * @var string
     */
    public $noEffectiveInterval;

    /**
     * @var string
     */
    public $period;

    /**
     * @var prometheus
     */
    public $prometheus;

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
     * @var int
     */
    public $silenceTime;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $webhook;
    protected $_name = [
        'alertState'          => 'AlertState',
        'compositeExpression' => 'CompositeExpression',
        'contactGroups'       => 'ContactGroups',
        'dimensions'          => 'Dimensions',
        'effectiveInterval'   => 'EffectiveInterval',
        'enableState'         => 'EnableState',
        'escalations'         => 'Escalations',
        'groupId'             => 'GroupId',
        'groupName'           => 'GroupName',
        'labels'              => 'Labels',
        'mailSubject'         => 'MailSubject',
        'metricName'          => 'MetricName',
        'namespace'           => 'Namespace',
        'noDataPolicy'        => 'NoDataPolicy',
        'noEffectiveInterval' => 'NoEffectiveInterval',
        'period'              => 'Period',
        'prometheus'          => 'Prometheus',
        'resources'           => 'Resources',
        'ruleId'              => 'RuleId',
        'ruleName'            => 'RuleName',
        'silenceTime'         => 'SilenceTime',
        'sourceType'          => 'SourceType',
        'webhook'             => 'Webhook',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertState) {
            $res['AlertState'] = $this->alertState;
        }
        if (null !== $this->compositeExpression) {
            $res['CompositeExpression'] = null !== $this->compositeExpression ? $this->compositeExpression->toMap() : null;
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
        if (null !== $this->escalations) {
            $res['Escalations'] = null !== $this->escalations ? $this->escalations->toMap() : null;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->labels) {
            $res['Labels'] = null !== $this->labels ? $this->labels->toMap() : null;
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
        if (null !== $this->noDataPolicy) {
            $res['NoDataPolicy'] = $this->noDataPolicy;
        }
        if (null !== $this->noEffectiveInterval) {
            $res['NoEffectiveInterval'] = $this->noEffectiveInterval;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->prometheus) {
            $res['Prometheus'] = null !== $this->prometheus ? $this->prometheus->toMap() : null;
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
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->webhook) {
            $res['Webhook'] = $this->webhook;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alarm
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertState'])) {
            $model->alertState = $map['AlertState'];
        }
        if (isset($map['CompositeExpression'])) {
            $model->compositeExpression = compositeExpression::fromMap($map['CompositeExpression']);
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
        if (isset($map['Escalations'])) {
            $model->escalations = escalations::fromMap($map['Escalations']);
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['Labels'])) {
            $model->labels = labels::fromMap($map['Labels']);
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
        if (isset($map['NoDataPolicy'])) {
            $model->noDataPolicy = $map['NoDataPolicy'];
        }
        if (isset($map['NoEffectiveInterval'])) {
            $model->noEffectiveInterval = $map['NoEffectiveInterval'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['Prometheus'])) {
            $model->prometheus = prometheus::fromMap($map['Prometheus']);
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
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['Webhook'])) {
            $model->webhook = $map['Webhook'];
        }

        return $model;
    }
}
