<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\CreateOrUpdateSwimmingLaneRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sae\V20190506\Models\CreateOrUpdateSwimmingLaneRequest\mseGatewayEntryRule\conditions;

class mseGatewayEntryRule extends Model
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
     * @var int
     */
    public $percentage;

    /**
     * @var int[]
     */
    public $percentageByRoute;

    /**
     * @var int[]
     */
    public $routeIds;
    protected $_name = [
        'conditionJoiner' => 'ConditionJoiner',
        'conditions' => 'Conditions',
        'independentPercentageEnable' => 'IndependentPercentageEnable',
        'percentage' => 'Percentage',
        'percentageByRoute' => 'PercentageByRoute',
        'routeIds' => 'RouteIds',
    ];

    public function validate()
    {
        if (\is_array($this->conditions)) {
            Model::validateArray($this->conditions);
        }
        if (\is_array($this->percentageByRoute)) {
            Model::validateArray($this->percentageByRoute);
        }
        if (\is_array($this->routeIds)) {
            Model::validateArray($this->routeIds);
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

        if (null !== $this->percentage) {
            $res['Percentage'] = $this->percentage;
        }

        if (null !== $this->percentageByRoute) {
            if (\is_array($this->percentageByRoute)) {
                $res['PercentageByRoute'] = [];
                foreach ($this->percentageByRoute as $key1 => $value1) {
                    $res['PercentageByRoute'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->routeIds) {
            if (\is_array($this->routeIds)) {
                $res['RouteIds'] = [];
                $n1 = 0;
                foreach ($this->routeIds as $item1) {
                    $res['RouteIds'][$n1] = $item1;
                    ++$n1;
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

        if (isset($map['Percentage'])) {
            $model->percentage = $map['Percentage'];
        }

        if (isset($map['PercentageByRoute'])) {
            if (!empty($map['PercentageByRoute'])) {
                $model->percentageByRoute = [];
                foreach ($map['PercentageByRoute'] as $key1 => $value1) {
                    $model->percentageByRoute[$key1] = $value1;
                }
            }
        }

        if (isset($map['RouteIds'])) {
            if (!empty($map['RouteIds'])) {
                $model->routeIds = [];
                $n1 = 0;
                foreach ($map['RouteIds'] as $item1) {
                    $model->routeIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
