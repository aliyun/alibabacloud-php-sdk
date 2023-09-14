<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\ListSecurityPolicyRelationsResponseBody\secrityPolicyRelations;

use AlibabaCloud\Tea\Model;

class relatedListeners extends Model
{
    /**
     * @description The listener ID.
     *
     * @example lsn-0bfuc****
     *
     * @var string
     */
    public $listenerId;

    /**
     * @description The listener port.
     *
     * @example 80
     *
     * @var int
     */
    public $listenerPort;

    /**
     * @description The listener protocol.
     *
     * @example HTTPS
     *
     * @var string
     */
    public $listenerProtocol;

    /**
     * @description The Server Load Balancer (SLB) instance ID.
     *
     * @example lb-bp1o94dp5i6ea****
     *
     * @var string
     */
    public $loadBalancerId;
    protected $_name = [
        'listenerId'       => 'ListenerId',
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
        if (null !== $this->listenerId) {
            $res['ListenerId'] = $this->listenerId;
        }
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
     * @return relatedListeners
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ListenerId'])) {
            $model->listenerId = $map['ListenerId'];
        }
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
