<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeLoadBalancerUDPListenerAttributeRequest extends Model
{
    /**
     * @description The listening port that you want to query. Valid values: **1** to **65535**.
     *
     * This parameter is required.
     *
     * @example 80
     *
     * @var int
     */
    public $listenerPort;

    /**
     * @description The ID of the ELB instance.
     *
     * This parameter is required.
     *
     * @example lb-5pzipr2fszqtl2xf64uy5****
     *
     * @var string
     */
    public $loadBalancerId;
    protected $_name = [
        'listenerPort' => 'ListenerPort',
        'loadBalancerId' => 'LoadBalancerId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->listenerPort) {
            $res['ListenerPort'] = $this->listenerPort;
        }
        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLoadBalancerUDPListenerAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ListenerPort'])) {
            $model->listenerPort = $map['ListenerPort'];
        }
        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }

        return $model;
    }
}
