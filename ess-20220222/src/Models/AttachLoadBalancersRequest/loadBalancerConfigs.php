<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\AttachLoadBalancersRequest;

use AlibabaCloud\Tea\Model;

class loadBalancerConfigs extends Model
{
    /**
     * @description 负载均衡CLB（原SLB）实例的ID。
     *
     * @example 147b46d767c-cn-qingdao-cm5****
     *
     * @var string
     */
    public $loadBalancerId;

    /**
     * @description 弹性伸缩将ECS实例添加到SLB服务器组后，ECS实例作为后端服务器的权重。权重越高，ECS实例将被分配到越多的访问请求。如果权重为0，则ECS实例不会收到访问请求。取值范围：0~100。
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
