<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Dara\Model;

class MetricsTrigger extends Model
{
    /**
     * @var string
     */
    public $conditionLogicOperator;
    /**
     * @var TriggerCondition[]
     */
    public $conditions;
    /**
     * @var int
     */
    public $coolDownInterval;
    /**
     * @var int
     */
    public $evaluationCount;
    /**
     * @var TimeConstraint[]
     */
    public $timeConstraints;
    /**
     * @var int
     */
    public $timeWindow;
    protected $_name = [
        'conditionLogicOperator' => 'ConditionLogicOperator',
        'conditions'             => 'Conditions',
        'coolDownInterval'       => 'CoolDownInterval',
        'evaluationCount'        => 'EvaluationCount',
        'timeConstraints'        => 'TimeConstraints',
        'timeWindow'             => 'TimeWindow',
    ];

    public function validate()
    {
        if (\is_array($this->conditions)) {
            Model::validateArray($this->conditions);
        }
        if (\is_array($this->timeConstraints)) {
            Model::validateArray($this->timeConstraints);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->conditionLogicOperator) {
            $res['ConditionLogicOperator'] = $this->conditionLogicOperator;
        }

        if (null !== $this->conditions) {
            if (\is_array($this->conditions)) {
                $res['Conditions'] = [];
                $n1                = 0;
                foreach ($this->conditions as $item1) {
                    $res['Conditions'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->coolDownInterval) {
            $res['CoolDownInterval'] = $this->coolDownInterval;
        }

        if (null !== $this->evaluationCount) {
            $res['EvaluationCount'] = $this->evaluationCount;
        }

        if (null !== $this->timeConstraints) {
            if (\is_array($this->timeConstraints)) {
                $res['TimeConstraints'] = [];
                $n1                     = 0;
                foreach ($this->timeConstraints as $item1) {
                    $res['TimeConstraints'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->timeWindow) {
            $res['TimeWindow'] = $this->timeWindow;
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
        if (isset($map['ConditionLogicOperator'])) {
            $model->conditionLogicOperator = $map['ConditionLogicOperator'];
        }

        if (isset($map['Conditions'])) {
            if (!empty($map['Conditions'])) {
                $model->conditions = [];
                $n1                = 0;
                foreach ($map['Conditions'] as $item1) {
                    $model->conditions[$n1++] = TriggerCondition::fromMap($item1);
                }
            }
        }

        if (isset($map['CoolDownInterval'])) {
            $model->coolDownInterval = $map['CoolDownInterval'];
        }

        if (isset($map['EvaluationCount'])) {
            $model->evaluationCount = $map['EvaluationCount'];
        }

        if (isset($map['TimeConstraints'])) {
            if (!empty($map['TimeConstraints'])) {
                $model->timeConstraints = [];
                $n1                     = 0;
                foreach ($map['TimeConstraints'] as $item1) {
                    $model->timeConstraints[$n1++] = TimeConstraint::fromMap($item1);
                }
            }
        }

        if (isset($map['TimeWindow'])) {
            $model->timeWindow = $map['TimeWindow'];
        }

        return $model;
    }
}
