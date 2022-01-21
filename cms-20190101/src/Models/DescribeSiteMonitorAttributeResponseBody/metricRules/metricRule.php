<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\metricRules;

use AlibabaCloud\Tea\Model;

class metricRule extends Model
{
    /**
     * @var string
     */
    public $actionEnable;

    /**
     * @var string
     */
    public $alarmActions;

    /**
     * @var string
     */
    public $comparisonOperator;

    /**
     * @var string
     */
    public $dimensions;

    /**
     * @var string
     */
    public $evaluationCount;

    /**
     * @var string
     */
    public $expression;

    /**
     * @var string
     */
    public $level;

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
    public $okActions;

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
    public $stateValue;

    /**
     * @var string
     */
    public $statistics;

    /**
     * @var string
     */
    public $threshold;
    protected $_name = [
        'actionEnable'       => 'ActionEnable',
        'alarmActions'       => 'AlarmActions',
        'comparisonOperator' => 'ComparisonOperator',
        'dimensions'         => 'Dimensions',
        'evaluationCount'    => 'EvaluationCount',
        'expression'         => 'Expression',
        'level'              => 'Level',
        'metricName'         => 'MetricName',
        'namespace'          => 'Namespace',
        'okActions'          => 'OkActions',
        'period'             => 'Period',
        'ruleId'             => 'RuleId',
        'ruleName'           => 'RuleName',
        'stateValue'         => 'StateValue',
        'statistics'         => 'Statistics',
        'threshold'          => 'Threshold',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionEnable) {
            $res['ActionEnable'] = $this->actionEnable;
        }
        if (null !== $this->alarmActions) {
            $res['AlarmActions'] = $this->alarmActions;
        }
        if (null !== $this->comparisonOperator) {
            $res['ComparisonOperator'] = $this->comparisonOperator;
        }
        if (null !== $this->dimensions) {
            $res['Dimensions'] = $this->dimensions;
        }
        if (null !== $this->evaluationCount) {
            $res['EvaluationCount'] = $this->evaluationCount;
        }
        if (null !== $this->expression) {
            $res['Expression'] = $this->expression;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->okActions) {
            $res['OkActions'] = $this->okActions;
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
        if (null !== $this->stateValue) {
            $res['StateValue'] = $this->stateValue;
        }
        if (null !== $this->statistics) {
            $res['Statistics'] = $this->statistics;
        }
        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
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
        if (isset($map['ActionEnable'])) {
            $model->actionEnable = $map['ActionEnable'];
        }
        if (isset($map['AlarmActions'])) {
            $model->alarmActions = $map['AlarmActions'];
        }
        if (isset($map['ComparisonOperator'])) {
            $model->comparisonOperator = $map['ComparisonOperator'];
        }
        if (isset($map['Dimensions'])) {
            $model->dimensions = $map['Dimensions'];
        }
        if (isset($map['EvaluationCount'])) {
            $model->evaluationCount = $map['EvaluationCount'];
        }
        if (isset($map['Expression'])) {
            $model->expression = $map['Expression'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['OkActions'])) {
            $model->okActions = $map['OkActions'];
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
        if (isset($map['StateValue'])) {
            $model->stateValue = $map['StateValue'];
        }
        if (isset($map['Statistics'])) {
            $model->statistics = $map['Statistics'];
        }
        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }

        return $model;
    }
}
