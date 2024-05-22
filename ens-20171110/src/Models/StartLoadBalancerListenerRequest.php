<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class StartLoadBalancerListenerRequest extends Model
{
    /**
     * @description The frontend port that is used by the Edge Load Balance (ELB) instance. Valid values: **1** to **65535**.
     *
     * >
     *
     *   You cannot specify port 250, 4789, or 4790 for UDP listeners. The preceding ports are system reserved ports.
     *
     *   We recommend that you use port 80 for HTTP.
     *
     *   We recommend that you use port 443 for HTTPS.
     *
     * This parameter is required.
     * @example 8080
     *
     * @var int
     */
    public $listenerPort;

    /**
     * @description The frontend protocol that is used by the ELB instance. Valid values:
     *
     *   tcp
     *   udp
     *   http
     *   https
     *
     * >  This parameter is required if the same port is used by listeners that use different protocols.
     * @example tcp
     *
     * @var string
     */
    public $listenerProtocol;

    /**
     * @description The ID of the ELB instance.
     *
     * This parameter is required.
     * @example lb-5saivuir6b1mupxjfbhmk****
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
     * @return StartLoadBalancerListenerRequest
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
