<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeActiveMetricRuleListResponseBody\datapoints;

use AlibabaCloud\Tea\Model;

class alarm extends Model
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
    public $evaluationCount;

    /**
     * @var string
     */
    public $webhook;

    /**
     * @var string
     */
    public $state;

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
    public $period;

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
    public $endTime;

    /**
     * @var string
     */
    public $comparisonOperator;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $threshold;

    /**
     * @var string
     */
    public $statistics;

    /**
     * @var string
     */
    public $enable;
    protected $_name = [
        'silenceTime'        => 'SilenceTime',
        'metricName'         => 'MetricName',
        'evaluationCount'    => 'EvaluationCount',
        'webhook'            => 'Webhook',
        'state'              => 'State',
        'contactGroups'      => 'ContactGroups',
        'namespace'          => 'Namespace',
        'period'             => 'Period',
        'ruleId'             => 'RuleId',
        'ruleName'           => 'RuleName',
        'endTime'            => 'EndTime',
        'comparisonOperator' => 'ComparisonOperator',
        'startTime'          => 'StartTime',
        'threshold'          => 'Threshold',
        'statistics'         => 'Statistics',
        'enable'             => 'Enable',
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
        if (null !== $this->evaluationCount) {
            $res['EvaluationCount'] = $this->evaluationCount;
        }
        if (null !== $this->webhook) {
            $res['Webhook'] = $this->webhook;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->contactGroups) {
            $res['ContactGroups'] = $this->contactGroups;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
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
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->comparisonOperator) {
            $res['ComparisonOperator'] = $this->comparisonOperator;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }
        if (null !== $this->statistics) {
            $res['Statistics'] = $this->statistics;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
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
        if (isset($map['SilenceTime'])) {
            $model->silenceTime = $map['SilenceTime'];
        }
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['EvaluationCount'])) {
            $model->evaluationCount = $map['EvaluationCount'];
        }
        if (isset($map['Webhook'])) {
            $model->webhook = $map['Webhook'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['ContactGroups'])) {
            $model->contactGroups = $map['ContactGroups'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
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
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ComparisonOperator'])) {
            $model->comparisonOperator = $map['ComparisonOperator'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }
        if (isset($map['Statistics'])) {
            $model->statistics = $map['Statistics'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }

        return $model;
    }
}
