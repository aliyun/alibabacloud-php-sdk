<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\DescribeLoadBalancerAttributeResponseBody\listenerPortsAndProtocol;

use AlibabaCloud\Tea\Model;

class listenerPortAndProtocol extends Model
{
    /**
     * @description Indicates whether the listener is enabled.
     *
     * @example Listener Description
     *
     * @var string
     */
    public $description;

    /**
     * @description The destination listening port to which requests are forwarded. The port must be open and use HTTPS.
     *
     * @example 443
     *
     * @var int
     */
    public $forwardPort;

    /**
     * @description Indicates whether the listener is enabled.
     *
     * @example on
     *
     * @var string
     */
    public $listenerForward;

    /**
     * @description The frontend port that is used by the CLB instance.
     *
     * @example 80
     *
     * @var int
     */
    public $listenerPort;

    /**
     * @description The frontend protocol that is used by the CLB instance.
     *
     * @example https
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
     * @return listenerPortAndProtocol
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
