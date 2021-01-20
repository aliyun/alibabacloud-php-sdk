<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\metricRules;

use AlibabaCloud\Tea\Model;

class metricRule extends Model
{
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
    public $namespace;

    /**
     * @var string
     */
    public $okActions;

    /**
     * @var string
     */
    public $alarmActions;

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
    public $ruleId;

    /**
     * @var string
     */
    public $comparisonOperator;

    /**
     * @var string
     */
    public $expression;

    /**
     * @var string
     */
    public $dimensions;

    /**
     * @var string
     */
    public $stateValue;

    /**
     * @var string
     */
    public $actionEnable;

    /**
     * @var string
     */
    public $level;

    /**
     * @var string
     */
    public $threshold;

    /**
     * @var string
     */
    public $statistics;
    protected $_name = [
        'metricName'         => 'MetricName',
        'evaluationCount'    => 'EvaluationCount',
        'namespace'          => 'Namespace',
        'okActions'          => 'OkActions',
        'alarmActions'       => 'AlarmActions',
        'period'             => 'Period',
        'ruleName'           => 'RuleName',
        'ruleId'             => 'RuleId',
        'comparisonOperator' => 'ComparisonOperator',
        'expression'         => 'Expression',
        'dimensions'         => 'Dimensions',
        'stateValue'         => 'StateValue',
        'actionEnable'       => 'ActionEnable',
        'level'              => 'Level',
        'threshold'          => 'Threshold',
        'statistics'         => 'Statistics',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->evaluationCount) {
            $res['EvaluationCount'] = $this->evaluationCount;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->okActions) {
            $res['OkActions'] = $this->okActions;
        }
        if (null !== $this->alarmActions) {
            $res['AlarmActions'] = $this->alarmActions;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->comparisonOperator) {
            $res['ComparisonOperator'] = $this->comparisonOperator;
        }
        if (null !== $this->expression) {
            $res['Expression'] = $this->expression;
        }
        if (null !== $this->dimensions) {
            $res['Dimensions'] = $this->dimensions;
        }
        if (null !== $this->stateValue) {
            $res['StateValue'] = $this->stateValue;
        }
        if (null !== $this->actionEnable) {
            $res['ActionEnable'] = $this->actionEnable;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }
        if (null !== $this->statistics) {
            $res['Statistics'] = $this->statistics;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return metricRule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['EvaluationCount'])) {
            $model->evaluationCount = $map['EvaluationCount'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['OkActions'])) {
            $model->okActions = $map['OkActions'];
        }
        if (isset($map['AlarmActions'])) {
            $model->alarmActions = $map['AlarmActions'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['ComparisonOperator'])) {
            $model->comparisonOperator = $map['ComparisonOperator'];
        }
        if (isset($map['Expression'])) {
            $model->expression = $map['Expression'];
        }
        if (isset($map['Dimensions'])) {
            $model->dimensions = $map['Dimensions'];
        }
        if (isset($map['StateValue'])) {
            $model->stateValue = $map['StateValue'];
        }
        if (isset($map['ActionEnable'])) {
            $model->actionEnable = $map['ActionEnable'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }
        if (isset($map['Statistics'])) {
            $model->statistics = $map['Statistics'];
        }

        return $model;
    }
}
