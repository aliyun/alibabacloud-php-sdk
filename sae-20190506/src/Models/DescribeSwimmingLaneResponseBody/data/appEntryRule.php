<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeSwimmingLaneResponseBody\data;

use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeSwimmingLaneResponseBody\data\appEntryRule\conditions;
use AlibabaCloud\Tea\Model;

class appEntryRule extends Model
{
    /**
     * @example AND
     *
     * @var string
     */
    public $conditionJoiner;

    /**
     * @var conditions[]
     */
    public $conditions;

    /**
     * @example true
     *
     * @var bool
     */
    public $independentPercentageEnable;

    /**
     * @var string[]
     */
    public $paths;

    /**
     * @example 50
     *
     * @var int
     */
    public $percentage;

    /**
     * @var int[]
     */
    public $percentageByPath;
    protected $_name = [
        'conditionJoiner' => 'ConditionJoiner',
        'conditions' => 'Conditions',
        'independentPercentageEnable' => 'IndependentPercentageEnable',
        'paths' => 'Paths',
        'percentage' => 'Percentage',
        'percentageByPath' => 'PercentageByPath',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->conditionJoiner) {
            $res['ConditionJoiner'] = $this->conditionJoiner;
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
        if (null !== $this->independentPercentageEnable) {
            $res['IndependentPercentageEnable'] = $this->independentPercentageEnable;
        }
        if (null !== $this->paths) {
            $res['Paths'] = $this->paths;
        }
        if (null !== $this->percentage) {
            $res['Percentage'] = $this->percentage;
        }
        if (null !== $this->percentageByPath) {
            $res['PercentageByPath'] = $this->percentageByPath;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return appEntryRule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConditionJoiner'])) {
            $model->conditionJoiner = $map['ConditionJoiner'];
        }
        if (isset($map['Conditions'])) {
            if (!empty($map['Conditions'])) {
                $model->conditions = [];
                $n = 0;
                foreach ($map['Conditions'] as $item) {
                    $model->conditions[$n++] = null !== $item ? conditions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['IndependentPercentageEnable'])) {
            $model->independentPercentageEnable = $map['IndependentPercentageEnable'];
        }
        if (isset($map['Paths'])) {
            if (!empty($map['Paths'])) {
                $model->paths = $map['Paths'];
            }
        }
        if (isset($map['Percentage'])) {
            $model->percentage = $map['Percentage'];
        }
        if (isset($map['PercentageByPath'])) {
            $model->percentageByPath = $map['PercentageByPath'];
        }

        return $model;
    }
}
