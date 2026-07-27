<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class Triggers extends Model
{
    /**
     * @var string
     */
    public $comparisonOperator;

    /**
     * @var TriggerConditions[]
     */
    public $conditions;

    /**
     * @var string
     */
    public $countOperator;

    /**
     * @var int
     */
    public $countThreshold;

    /**
     * @var int
     */
    public $durationSecs;

    /**
     * @var string
     */
    public $expressionType;

    /**
     * @var string
     */
    public $logicOperator;

    /**
     * @var string
     */
    public $matchField;

    /**
     * @var string
     */
    public $matchOperator;

    /**
     * @var string
     */
    public $matchValue;

    /**
     * @var float
     */
    public $max;

    /**
     * @var string
     */
    public $metricName;

    /**
     * @var float
     */
    public $min;

    /**
     * @var string
     */
    public $operator;

    /**
     * @var int
     */
    public $period;

    /**
     * @var string
     */
    public $preCondition;

    /**
     * @var string
     */
    public $queryName;

    /**
     * @var string
     */
    public $severity;

    /**
     * @var string
     */
    public $statistics;

    /**
     * @var mixed
     */
    public $threshold;

    /**
     * @var int
     */
    public $times;
    protected $_name = [
        'comparisonOperator' => 'comparisonOperator',
        'conditions' => 'conditions',
        'countOperator' => 'countOperator',
        'countThreshold' => 'countThreshold',
        'durationSecs' => 'durationSecs',
        'expressionType' => 'expressionType',
        'logicOperator' => 'logicOperator',
        'matchField' => 'matchField',
        'matchOperator' => 'matchOperator',
        'matchValue' => 'matchValue',
        'max' => 'max',
        'metricName' => 'metricName',
        'min' => 'min',
        'operator' => 'operator',
        'period' => 'period',
        'preCondition' => 'preCondition',
        'queryName' => 'queryName',
        'severity' => 'severity',
        'statistics' => 'statistics',
        'threshold' => 'threshold',
        'times' => 'times',
    ];

    public function validate()
    {
        if (\is_array($this->conditions)) {
            Model::validateArray($this->conditions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->comparisonOperator) {
            $res['comparisonOperator'] = $this->comparisonOperator;
        }

        if (null !== $this->conditions) {
            if (\is_array($this->conditions)) {
                $res['conditions'] = [];
                $n1 = 0;
                foreach ($this->conditions as $item1) {
                    $res['conditions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->countOperator) {
            $res['countOperator'] = $this->countOperator;
        }

        if (null !== $this->countThreshold) {
            $res['countThreshold'] = $this->countThreshold;
        }

        if (null !== $this->durationSecs) {
            $res['durationSecs'] = $this->durationSecs;
        }

        if (null !== $this->expressionType) {
            $res['expressionType'] = $this->expressionType;
        }

        if (null !== $this->logicOperator) {
            $res['logicOperator'] = $this->logicOperator;
        }

        if (null !== $this->matchField) {
            $res['matchField'] = $this->matchField;
        }

        if (null !== $this->matchOperator) {
            $res['matchOperator'] = $this->matchOperator;
        }

        if (null !== $this->matchValue) {
            $res['matchValue'] = $this->matchValue;
        }

        if (null !== $this->max) {
            $res['max'] = $this->max;
        }

        if (null !== $this->metricName) {
            $res['metricName'] = $this->metricName;
        }

        if (null !== $this->min) {
            $res['min'] = $this->min;
        }

        if (null !== $this->operator) {
            $res['operator'] = $this->operator;
        }

        if (null !== $this->period) {
            $res['period'] = $this->period;
        }

        if (null !== $this->preCondition) {
            $res['preCondition'] = $this->preCondition;
        }

        if (null !== $this->queryName) {
            $res['queryName'] = $this->queryName;
        }

        if (null !== $this->severity) {
            $res['severity'] = $this->severity;
        }

        if (null !== $this->statistics) {
            $res['statistics'] = $this->statistics;
        }

        if (null !== $this->threshold) {
            $res['threshold'] = $this->threshold;
        }

        if (null !== $this->times) {
            $res['times'] = $this->times;
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
        if (isset($map['comparisonOperator'])) {
            $model->comparisonOperator = $map['comparisonOperator'];
        }

        if (isset($map['conditions'])) {
            if (!empty($map['conditions'])) {
                $model->conditions = [];
                $n1 = 0;
                foreach ($map['conditions'] as $item1) {
                    $model->conditions[$n1] = TriggerConditions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['countOperator'])) {
            $model->countOperator = $map['countOperator'];
        }

        if (isset($map['countThreshold'])) {
            $model->countThreshold = $map['countThreshold'];
        }

        if (isset($map['durationSecs'])) {
            $model->durationSecs = $map['durationSecs'];
        }

        if (isset($map['expressionType'])) {
            $model->expressionType = $map['expressionType'];
        }

        if (isset($map['logicOperator'])) {
            $model->logicOperator = $map['logicOperator'];
        }

        if (isset($map['matchField'])) {
            $model->matchField = $map['matchField'];
        }

        if (isset($map['matchOperator'])) {
            $model->matchOperator = $map['matchOperator'];
        }

        if (isset($map['matchValue'])) {
            $model->matchValue = $map['matchValue'];
        }

        if (isset($map['max'])) {
            $model->max = $map['max'];
        }

        if (isset($map['metricName'])) {
            $model->metricName = $map['metricName'];
        }

        if (isset($map['min'])) {
            $model->min = $map['min'];
        }

        if (isset($map['operator'])) {
            $model->operator = $map['operator'];
        }

        if (isset($map['period'])) {
            $model->period = $map['period'];
        }

        if (isset($map['preCondition'])) {
            $model->preCondition = $map['preCondition'];
        }

        if (isset($map['queryName'])) {
            $model->queryName = $map['queryName'];
        }

        if (isset($map['severity'])) {
            $model->severity = $map['severity'];
        }

        if (isset($map['statistics'])) {
            $model->statistics = $map['statistics'];
        }

        if (isset($map['threshold'])) {
            $model->threshold = $map['threshold'];
        }

        if (isset($map['times'])) {
            $model->times = $map['times'];
        }

        return $model;
    }
}
