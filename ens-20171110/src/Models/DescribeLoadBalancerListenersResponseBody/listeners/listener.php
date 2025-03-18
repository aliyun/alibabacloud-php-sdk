<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeLoadBalancerListenersResponseBody\listeners;

use AlibabaCloud\Tea\Model;

class listener extends Model
{
    /**
     * @var int
     */
    public $backendServerPort;

    /**
     * @description The timestamp when the listener was created.
     *
     * @example 2022-08-15T08:42:57Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The description of the listener.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The listener port that is used for HTTP-to-HTTPS redirection.
     *
     * @example 443
     *
     * @var string
     */
    public $forwardPort;

    /**
     * @description Indicates whether HTTP-to-HTTPS redirection is enabled for the listener. Valid values:
     *
     *   **on**
     *   **off**
     *
     * @example off
     *
     * @var string
     */
    public $listenerForward;

    /**
     * @description The listening port.
     *
     * @example 8080
     *
     * @var string
     */
    public $listenerPort;

    /**
     * @description The ID of the ELB instance.
     *
     * @example lb-51a5fhou****
     *
     * @var string
     */
    public $loadBalancerId;

    /**
     * @description The network transmission protocol that is used by the listener.
     *
     *   **tcp**
     *   **udp**
     *   **http**
     *   **https**
     *
     * @example tcp
     *
     * @var string
     */
    public $protocol;

    /**
     * @description The status of the listener. Valid values:
     *
     *   **running**
     *   **stopped**
     *
     * @example running
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'backendServerPort' => 'BackendServerPort',
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'forwardPort' => 'ForwardPort',
        'listenerForward' => 'ListenerForward',
        'listenerPort' => 'ListenerPort',
        'loadBalancerId' => 'LoadBalancerId',
        'protocol' => 'Protocol',
        'status' => 'Status',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->backendServerPort) {
            $res['BackendServerPort'] = $this->backendServerPort;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->forwardPort) {
            $res['ForwardPort'] = $this->forwardPort;
        }
        if (null !== $this->listenerForward) {
            $res['ListenerForward'] = $this->listenerForward;
        }
        if (null !== $this->listenerPort) {
            $res['ListenerPort'] = $this->listenerPort;
        }
        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return listener
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackendServerPort'])) {
            $model->backendServerPort = $map['BackendServerPort'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ForwardPort'])) {
            $model->forwardPort = $map['ForwardPort'];
        }
        if (isset($map['ListenerForward'])) {
            $model->listenerForward = $map['ListenerForward'];
        }
        if (isset($map['ListenerPort'])) {
            $model->listenerPort = $map['ListenerPort'];
        }
        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
