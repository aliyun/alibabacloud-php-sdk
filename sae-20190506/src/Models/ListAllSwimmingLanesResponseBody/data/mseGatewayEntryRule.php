<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\ListAllSwimmingLanesResponseBody\data;

use AlibabaCloud\SDK\Sae\V20190506\Models\ListAllSwimmingLanesResponseBody\data\mseGatewayEntryRule\conditions;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListAllSwimmingLanesResponseBody\data\mseGatewayEntryRule\routes;
use AlibabaCloud\Tea\Model;

class mseGatewayEntryRule extends Model
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
     * @example 100
     *
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

    /**
     * @var routes[]
     */
    public $routes;
    protected $_name = [
        'conditionJoiner' => 'ConditionJoiner',
        'conditions' => 'Conditions',
        'independentPercentageEnable' => 'IndependentPercentageEnable',
        'percentage' => 'Percentage',
        'percentageByRoute' => 'PercentageByRoute',
        'routeIds' => 'RouteIds',
        'routes' => 'Routes',
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
        if (null !== $this->percentage) {
            $res['Percentage'] = $this->percentage;
        }
        if (null !== $this->percentageByRoute) {
            $res['PercentageByRoute'] = $this->percentageByRoute;
        }
        if (null !== $this->routeIds) {
            $res['RouteIds'] = $this->routeIds;
        }
        if (null !== $this->routes) {
            $res['Routes'] = [];
            if (null !== $this->routes && \is_array($this->routes)) {
                $n = 0;
                foreach ($this->routes as $item) {
                    $res['Routes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mseGatewayEntryRule
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
        if (isset($map['Percentage'])) {
            $model->percentage = $map['Percentage'];
        }
        if (isset($map['PercentageByRoute'])) {
            $model->percentageByRoute = $map['PercentageByRoute'];
        }
        if (isset($map['RouteIds'])) {
            if (!empty($map['RouteIds'])) {
                $model->routeIds = $map['RouteIds'];
            }
        }
        if (isset($map['Routes'])) {
            if (!empty($map['Routes'])) {
                $model->routes = [];
                $n = 0;
                foreach ($map['Routes'] as $item) {
                    $model->routes[$n++] = null !== $item ? routes::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
