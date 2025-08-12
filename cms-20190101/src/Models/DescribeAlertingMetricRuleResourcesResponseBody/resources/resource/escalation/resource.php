<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertingMetricRuleResourcesResponseBody\resources\resource\escalation;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertingMetricRuleResourcesResponseBody\resources\resource\escalation\resource\expressionList;

class resource extends Model
{
    /**
     * @var string
     */
    public $comparisonOperator;

    /**
     * @var string
     */
    public $expression;

    /**
     * @var expressionList
     */
    public $expressionList;

    /**
     * @var string
     */
    public $expressionListJoin;

    /**
     * @var string
     */
    public $expressionRaw;

    /**
     * @var int
     */
    public $level;

    /**
     * @var string
     */
    public $preCondition;

    /**
     * @var string
     */
    public $tag;

    /**
     * @var string
     */
    public $threshold;

    /**
     * @var int
     */
    public $times;
    protected $_name = [
        'comparisonOperator' => 'ComparisonOperator',
        'expression' => 'Expression',
        'expressionList' => 'ExpressionList',
        'expressionListJoin' => 'ExpressionListJoin',
        'expressionRaw' => 'ExpressionRaw',
        'level' => 'Level',
        'preCondition' => 'PreCondition',
        'tag' => 'Tag',
        'threshold' => 'Threshold',
        'times' => 'Times',
    ];

    public function validate()
    {
        if (null !== $this->expressionList) {
            $this->expressionList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->comparisonOperator) {
            $res['ComparisonOperator'] = $this->comparisonOperator;
        }

        if (null !== $this->expression) {
            $res['Expression'] = $this->expression;
        }

        if (null !== $this->expressionList) {
            $res['ExpressionList'] = null !== $this->expressionList ? $this->expressionList->toArray($noStream) : $this->expressionList;
        }

        if (null !== $this->expressionListJoin) {
            $res['ExpressionListJoin'] = $this->expressionListJoin;
        }

        if (null !== $this->expressionRaw) {
            $res['ExpressionRaw'] = $this->expressionRaw;
        }

        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }

        if (null !== $this->preCondition) {
            $res['PreCondition'] = $this->preCondition;
        }

        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }

        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }

        if (null !== $this->times) {
            $res['Times'] = $this->times;
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
        if (isset($map['ComparisonOperator'])) {
            $model->comparisonOperator = $map['ComparisonOperator'];
        }

        if (isset($map['Expression'])) {
            $model->expression = $map['Expression'];
        }

        if (isset($map['ExpressionList'])) {
            $model->expressionList = expressionList::fromMap($map['ExpressionList']);
        }

        if (isset($map['ExpressionListJoin'])) {
            $model->expressionListJoin = $map['ExpressionListJoin'];
        }

        if (isset($map['ExpressionRaw'])) {
            $model->expressionRaw = $map['ExpressionRaw'];
        }

        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        if (isset($map['PreCondition'])) {
            $model->preCondition = $map['PreCondition'];
        }

        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }

        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }

        if (isset($map['Times'])) {
            $model->times = $map['Times'];
        }

        return $model;
    }
}
