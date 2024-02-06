<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeLoadBalancerTCPListenerAttributeRequest extends Model
{
    /**
     * @description The frontend port that is used by the Edge Load Balance (ELB) instance. Valid values: **1** to **65535**.
     *
     * @example 80
     *
     * @var int
     */
    public $listenerPort;

    /**
     * @description The ID of the ELB instance.
     *
     * @example lb-5snthcyu1x10g7tywj7iu****
     *
     * @var string
     */
    public $loadBalancerId;
    protected $_name = [
        'listenerPort'   => 'ListenerPort',
        'loadBalancerId' => 'LoadBalancerId',
    ];

    public function validate()
    {
    }

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
     * @return DescribeLoadBalancerTCPListenerAttributeRequest
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
