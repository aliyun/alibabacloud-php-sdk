<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\QueryAllSwimmingLaneResponseBody\data;

use AlibabaCloud\SDK\Mse\V20190531\Models\QueryAllSwimmingLaneResponseBody\data\gatewaySwimmingLaneRoute\conditions;
use AlibabaCloud\Tea\Model;

class gatewaySwimmingLaneRoute extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $canaryModel;

    /**
     * @var conditions[]
     */
    public $conditions;

    /**
     * @example 1
     *
     * @var int
     */
    public $gatewayId;

    /**
     * @example gw-84efde2ee1464260bdb17a5b****
     *
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @example 20
     *
     * @var int
     */
    public $percentage;

    /**
     * @var int[]
     */
    public $routeIdList;
    protected $_name = [
        'canaryModel'     => 'CanaryModel',
        'conditions'      => 'Conditions',
        'gatewayId'       => 'GatewayId',
        'gatewayUniqueId' => 'GatewayUniqueId',
        'percentage'      => 'Percentage',
        'routeIdList'     => 'RouteIdList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->canaryModel) {
            $res['CanaryModel'] = $this->canaryModel;
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
            $res['RouteIdList'] = $this->routeIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return gatewaySwimmingLaneRoute
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CanaryModel'])) {
            $model->canaryModel = $map['CanaryModel'];
        }
        if (isset($map['Conditions'])) {
            if (!empty($map['Conditions'])) {
                $model->conditions = [];
                $n                 = 0;
                foreach ($map['Conditions'] as $item) {
                    $model->conditions[$n++] = null !== $item ? conditions::fromMap($item) : $item;
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
                $model->routeIdList = $map['RouteIdList'];
            }
        }

        return $model;
    }
}
