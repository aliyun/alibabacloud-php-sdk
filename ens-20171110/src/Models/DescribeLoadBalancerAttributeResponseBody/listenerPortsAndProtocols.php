<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeLoadBalancerAttributeResponseBody;

use AlibabaCloud\Tea\Model;

class listenerPortsAndProtocols extends Model
{
    /**
     * @description The description of the listener.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The destination listening port to which requests are forwarded.
     *
     * @example 0
     *
     * @var int
     */
    public $forwardPort;

    /**
     * @description Indicates whether the listener is enabled.
     *
     * @example off
     *
     * @var string
     */
    public $listenerForward;

    /**
     * @description The listener port of the instance.
     *
     * @example 8080
     *
     * @var int
     */
    public $listenerPort;

    /**
     * @description The listener protocol.
     *
     * @example tcp
     *
     * @var string
     */
    public $listenerProtocol;
    protected $_name = [
        'description'      => 'Description',
        'forwardPort'      => 'ForwardPort',
        'listenerForward'  => 'ListenerForward',
        'listenerPort'     => 'ListenerPort',
        'listenerProtocol' => 'ListenerProtocol',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->listenerProtocol) {
            $res['ListenerProtocol'] = $this->listenerProtocol;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return listenerPortsAndProtocols
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['ListenerProtocol'])) {
            $model->listenerProtocol = $map['ListenerProtocol'];
        }

        return $model;
    }
}
