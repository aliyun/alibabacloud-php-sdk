<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\CreateOrUpdateSwimmingLaneRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreateOrUpdateSwimmingLaneRequest\gatewaySwimmingLaneRouteJson\conditions;
use AlibabaCloud\SDK\Mse\V20190531\Models\CreateOrUpdateSwimmingLaneRequest\gatewaySwimmingLaneRouteJson\routeIndependentPercentageList;

class gatewaySwimmingLaneRouteJson extends Model
{
    /**
     * @var int
     */
    public $canaryModel;

    /**
     * @var string
     */
    public $condition;

    /**
     * @var conditions[]
     */
    public $conditions;

    /**
     * @var int
     */
    public $gatewayId;

    /**
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @var int
     */
    public $percentage;

    /**
     * @var int[]
     */
    public $routeIdList;

    /**
     * @var bool
     */
    public $routeIndependentPercentageEnable;

    /**
     * @var routeIndependentPercentageList[]
     */
    public $routeIndependentPercentageList;
    protected $_name = [
        'canaryModel' => 'CanaryModel',
        'condition' => 'Condition',
        'conditions' => 'Conditions',
        'gatewayId' => 'GatewayId',
        'gatewayUniqueId' => 'GatewayUniqueId',
        'percentage' => 'Percentage',
        'routeIdList' => 'RouteIdList',
        'routeIndependentPercentageEnable' => 'RouteIndependentPercentageEnable',
        'routeIndependentPercentageList' => 'RouteIndependentPercentageList',
    ];

    public function validate()
    {
        if (\is_array($this->conditions)) {
            Model::validateArray($this->conditions);
        }
        if (\is_array($this->routeIdList)) {
            Model::validateArray($this->routeIdList);
        }
        if (\is_array($this->routeIndependentPercentageList)) {
            Model::validateArray($this->routeIndependentPercentageList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->canaryModel) {
            $res['CanaryModel'] = $this->canaryModel;
        }

        if (null !== $this->condition) {
            $res['Condition'] = $this->condition;
        }

        if (null !== $this->conditions) {
            if (\is_array($this->conditions)) {
                $res['Conditions'] = [];
                $n1 = 0;
                foreach ($this->conditions as $item1) {
                    $res['Conditions'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }

        if (null !== $this->gatewayUniqueId) {
            $res['GatewayUniqueId'] = $this->gatewayUniqueId;
        }

        if (null !== $this->percentage) {
            $res['Percentage'] = $this->percentage;
        }

        if (null !== $this->routeIdList) {
            if (\is_array($this->routeIdList)) {
                $res['RouteIdList'] = [];
                $n1 = 0;
                foreach ($this->routeIdList as $item1) {
                    $res['RouteIdList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->routeIndependentPercentageEnable) {
            $res['RouteIndependentPercentageEnable'] = $this->routeIndependentPercentageEnable;
        }

        if (null !== $this->routeIndependentPercentageList) {
            if (\is_array($this->routeIndependentPercentageList)) {
                $res['RouteIndependentPercentageList'] = [];
                $n1 = 0;
                foreach ($this->routeIndependentPercentageList as $item1) {
                    $res['RouteIndependentPercentageList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CanaryModel'])) {
            $model->canaryModel = $map['CanaryModel'];
        }

        if (isset($map['Condition'])) {
            $model->condition = $map['Condition'];
        }

        if (isset($map['Conditions'])) {
            if (!empty($map['Conditions'])) {
                $model->conditions = [];
                $n1 = 0;
                foreach ($map['Conditions'] as $item1) {
                    $model->conditions[$n1++] = conditions::fromMap($item1);
                }
            }
        }

        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }

        if (isset($map['GatewayUniqueId'])) {
            $model->gatewayUniqueId = $map['GatewayUniqueId'];
        }

        if (isset($map['Percentage'])) {
            $model->percentage = $map['Percentage'];
        }

        if (isset($map['RouteIdList'])) {
            if (!empty($map['RouteIdList'])) {
                $model->routeIdList = [];
                $n1 = 0;
                foreach ($map['RouteIdList'] as $item1) {
                    $model->routeIdList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['RouteIndependentPercentageEnable'])) {
            $model->routeIndependentPercentageEnable = $map['RouteIndependentPercentageEnable'];
        }

        if (isset($map['RouteIndependentPercentageList'])) {
            if (!empty($map['RouteIndependentPercentageList'])) {
                $model->routeIndependentPercentageList = [];
                $n1 = 0;
                foreach ($map['RouteIndependentPercentageList'] as $item1) {
                    $model->routeIndependentPercentageList[$n1++] = routeIndependentPercentageList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
