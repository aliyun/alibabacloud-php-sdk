<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\AttachLoadBalancersRequest;

use AlibabaCloud\Tea\Model;

class loadBalancerConfigs extends Model
{
    /**
     * @description The ID of the CLB instance.
     *
     * @example 147b46d767c-cn-qingdao-cm5****
     *
     * @var string
     */
    public $loadBalancerId;

    /**
     * @description The weight of an Elastic Compute Service (ECS) instance or elastic container instance as a backend sever of the CLB instance. If an instance has a higher weight, more access traffic is routed to the instance. If an instance has zero weight, no access traffic is routed to the instance.
     *
     * Valid values: 0 to 100.
     * @example 10
     *
     * @var int
     */
    public $weight;
    protected $_name = [
        'loadBalancerId' => 'LoadBalancerId',
        'weight'         => 'Weight',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
        }
        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return loadBalancerConfigs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }
        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }

        return $model;
    }
}
