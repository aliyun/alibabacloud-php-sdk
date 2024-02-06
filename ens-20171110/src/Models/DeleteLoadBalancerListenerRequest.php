<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DeleteLoadBalancerListenerRequest extends Model
{
    /**
     * @description The frontend port that is used by the Edge Load Balance (ELB) instance. Valid values: **1** to **65535**.
     *
     * @example 8080
     *
     * @var int
     */
    public $listenerPort;

    /**
     * @description The frontend protocol that is used by the ELB instance.
     *
     * Valid values:
     *
     *   tcp
     *   udp
     *   http
     *   https
     *
     * @example tcp
     *
     * @var string
     */
    public $listenerProtocol;

    /**
     * @description The ID of the ELB instance.
     *
     * @example lb-5snthcyu1x10g7tywj7iu****
     *
     * @var string
     */
    public $loadBalancerId;
    protected $_name = [
        'listenerPort'     => 'ListenerPort',
        'listenerProtocol' => 'ListenerProtocol',
        'loadBalancerId'   => 'LoadBalancerId',
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
        if (null !== $this->listenerProtocol) {
            $res['ListenerProtocol'] = $this->listenerProtocol;
        }
        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteLoadBalancerListenerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ListenerPort'])) {
            $model->listenerPort = $map['ListenerPort'];
        }
        if (isset($map['ListenerProtocol'])) {
            $model->listenerProtocol = $map['ListenerProtocol'];
        }
        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }

        return $model;
    }
}
