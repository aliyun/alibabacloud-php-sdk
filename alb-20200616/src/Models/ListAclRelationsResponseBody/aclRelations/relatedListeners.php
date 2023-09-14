<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\ListAclRelationsResponseBody\aclRelations;

use AlibabaCloud\Tea\Model;

class relatedListeners extends Model
{
    /**
     * @description The listener ID.
     *
     * @example lsr-bp1bpn0kn908w4nbw****
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
     * @description The ID of the Server Load Balancer (SLB) instance.
     *
     * @example lb-bp1b6c719dfa08ex****
     *
     * @var string
     */
    public $loadBalancerId;

    /**
     * @description The association status between the ACL and the listener. Valid values:
     *
     *   **Associating**
     *   **Associated**
     *   **Dissociating**
     *
     * @example Associated
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'listenerId'       => 'ListenerId',
        'listenerPort'     => 'ListenerPort',
        'listenerProtocol' => 'ListenerProtocol',
        'loadBalancerId'   => 'LoadBalancerId',
        'status'           => 'Status',
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
