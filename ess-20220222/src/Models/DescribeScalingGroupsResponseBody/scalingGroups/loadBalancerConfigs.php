<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingGroupsResponseBody\scalingGroups;

use AlibabaCloud\Tea\Model;

class loadBalancerConfigs extends Model
{
    /**
     * @description The ID of the CLB (formerly known as Server Load Balancer or SLB) instance.
     *
     * @example lb-2zep8alpq5zq1a2xwyxxx
     *
     * @var string
     */
    public $loadBalancerId;

    /**
     * @description The weight of an ECS instance as a backend server in the CLB server group. If you increase the weight of an ECS instance, the number of access requests that are forwarded to the ECS instance increases. If you set the weight of an ECS instance to 0, no access requests are forwarded to the ECS instance. Valid values: 0 to 100.
     *
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
