<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeSwimmingLaneResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeSwimmingLaneResponseBody\data\appEntryRule\conditions;

class appEntryRule extends Model
{
    /**
     * @var string
     */
    public $conditionJoiner;

    /**
     * @var conditions[]
     */
    public $conditions;

    /**
     * @var bool
     */
    public $independentPercentageEnable;

    /**
     * @var string[]
     */
    public $paths;

    /**
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

    public function validate()
    {
        if (\is_array($this->conditions)) {
            Model::validateArray($this->conditions);
        }
        if (\is_array($this->paths)) {
            Model::validateArray($this->paths);
        }
        if (\is_array($this->percentageByPath)) {
            Model::validateArray($this->percentageByPath);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->conditionJoiner) {
            $res['ConditionJoiner'] = $this->conditionJoiner;
        }

        if (null !== $this->conditions) {
            if (\is_array($this->conditions)) {
                $res['Conditions'] = [];
                $n1 = 0;
                foreach ($this->conditions as $item1) {
                    $res['Conditions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->independentPercentageEnable) {
            $res['IndependentPercentageEnable'] = $this->independentPercentageEnable;
        }

        if (null !== $this->paths) {
            if (\is_array($this->paths)) {
                $res['Paths'] = [];
                $n1 = 0;
                foreach ($this->paths as $item1) {
                    $res['Paths'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->percentage) {
            $res['Percentage'] = $this->percentage;
        }

        if (null !== $this->percentageByPath) {
            if (\is_array($this->percentageByPath)) {
                $res['PercentageByPath'] = [];
                foreach ($this->percentageByPath as $key1 => $value1) {
                    $res['PercentageByPath'][$key1] = $value1;
                }
            }
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
        if (isset($map['ConditionJoiner'])) {
            $model->conditionJoiner = $map['ConditionJoiner'];
        }

        if (isset($map['Conditions'])) {
            if (!empty($map['Conditions'])) {
                $model->conditions = [];
                $n1 = 0;
                foreach ($map['Conditions'] as $item1) {
                    $model->conditions[$n1] = conditions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['IndependentPercentageEnable'])) {
            $model->independentPercentageEnable = $map['IndependentPercentageEnable'];
        }

        if (isset($map['Paths'])) {
            if (!empty($map['Paths'])) {
                $model->paths = [];
                $n1 = 0;
                foreach ($map['Paths'] as $item1) {
                    $model->paths[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Percentage'])) {
            $model->percentage = $map['Percentage'];
        }

        if (isset($map['PercentageByPath'])) {
            if (!empty($map['PercentageByPath'])) {
                $model->percentageByPath = [];
                foreach ($map['PercentageByPath'] as $key1 => $value1) {
                    $model->percentageByPath[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
