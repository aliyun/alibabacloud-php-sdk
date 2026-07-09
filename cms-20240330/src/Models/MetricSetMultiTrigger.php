<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class MetricSetMultiTrigger extends Model
{
    /**
     * @var MetricSetTriggerSimpleExpression[]
     */
    public $conditions;

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
     * @var float
     */
    public $max;

    /**
     * @var float
     */
    public $min;

    /**
     * @var string
     */
    public $operator;

    /**
     * @var string
     */
    public $queryName;

    /**
     * @var string
     */
    public $severity;

    /**
     * @var float
     */
    public $threshold;
    protected $_name = [
        'conditions' => 'conditions',
        'durationSecs' => 'durationSecs',
        'expressionType' => 'expressionType',
        'logicOperator' => 'logicOperator',
        'max' => 'max',
        'min' => 'min',
        'operator' => 'operator',
        'queryName' => 'queryName',
        'severity' => 'severity',
        'threshold' => 'threshold',
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

        if (null !== $this->durationSecs) {
            $res['durationSecs'] = $this->durationSecs;
        }

        if (null !== $this->expressionType) {
            $res['expressionType'] = $this->expressionType;
        }

        if (null !== $this->logicOperator) {
            $res['logicOperator'] = $this->logicOperator;
        }

        if (null !== $this->max) {
            $res['max'] = $this->max;
        }

        if (null !== $this->min) {
            $res['min'] = $this->min;
        }

        if (null !== $this->operator) {
            $res['operator'] = $this->operator;
        }

        if (null !== $this->queryName) {
            $res['queryName'] = $this->queryName;
        }

        if (null !== $this->severity) {
            $res['severity'] = $this->severity;
        }

        if (null !== $this->threshold) {
            $res['threshold'] = $this->threshold;
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
        if (isset($map['conditions'])) {
            if (!empty($map['conditions'])) {
                $model->conditions = [];
                $n1 = 0;
                foreach ($map['conditions'] as $item1) {
                    $model->conditions[$n1] = MetricSetTriggerSimpleExpression::fromMap($item1);
                    ++$n1;
                }
            }
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

        if (isset($map['max'])) {
            $model->max = $map['max'];
        }

        if (isset($map['min'])) {
            $model->min = $map['min'];
        }

        if (isset($map['operator'])) {
            $model->operator = $map['operator'];
        }

        if (isset($map['queryName'])) {
            $model->queryName = $map['queryName'];
        }

        if (isset($map['severity'])) {
            $model->severity = $map['severity'];
        }

        if (isset($map['threshold'])) {
            $model->threshold = $map['threshold'];
        }

        return $model;
    }
}
