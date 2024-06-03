<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class MetricsTrigger extends Model
{
    /**
     * @description 多指标逻辑关系。默认：Or。取值范围：
     * - Or：或
     * @example Or
     *
     * @var string
     */
    public $conditionLogicOperator;

    /**
     * @description 指标触发条件列表。
     *
     * @var TriggerCondition[]
     */
    public $conditions;

    /**
     * @description 冷却时间。 单位为秒
     *
     * @example 300
     *
     * @var int
     */
    public $coolDownInterval;

    /**
     * @description 统计次数。
     *
     * This parameter is required.
     * @example 2
     *
     * @var int
     */
    public $evaluationCount;

    /**
     * @description 时间限制。
     *
     * @var TimeConstraint[]
     */
    public $timeConstraints;

    /**
     * @description 统计窗口。单位为秒。
     *
     * This parameter is required.
     * @example 30
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->conditionLogicOperator) {
            $res['ConditionLogicOperator'] = $this->conditionLogicOperator;
        }
        if (null !== $this->conditions) {
            $res['Conditions'] = [];
            if (null !== $this->conditions && \is_array($this->conditions)) {
                $n = 0;
                foreach ($this->conditions as $item) {
                    $res['Conditions'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['TimeConstraints'] = [];
            if (null !== $this->timeConstraints && \is_array($this->timeConstraints)) {
                $n = 0;
                foreach ($this->timeConstraints as $item) {
                    $res['TimeConstraints'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->timeWindow) {
            $res['TimeWindow'] = $this->timeWindow;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MetricsTrigger
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConditionLogicOperator'])) {
            $model->conditionLogicOperator = $map['ConditionLogicOperator'];
        }
        if (isset($map['Conditions'])) {
            if (!empty($map['Conditions'])) {
                $model->conditions = [];
                $n                 = 0;
                foreach ($map['Conditions'] as $item) {
                    $model->conditions[$n++] = null !== $item ? TriggerCondition::fromMap($item) : $item;
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
                $n                      = 0;
                foreach ($map['TimeConstraints'] as $item) {
                    $model->timeConstraints[$n++] = null !== $item ? TimeConstraint::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TimeWindow'])) {
            $model->timeWindow = $map['TimeWindow'];
        }

        return $model;
    }
}
