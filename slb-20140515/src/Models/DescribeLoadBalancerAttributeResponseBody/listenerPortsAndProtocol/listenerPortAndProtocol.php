<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\DescribeLoadBalancerAttributeResponseBody\listenerPortsAndProtocol;

use AlibabaCloud\Tea\Model;

class listenerPortAndProtocol extends Model
{
    /**
     * @var int
     */
    public $listenerPort;

    /**
     * @var string
     */
    public $listenerProtocol;

    /**
     * @var string
     */
    public $listenerForward;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $forwardPort;
    protected $_name = [
        'listenerPort'     => 'ListenerPort',
        'listenerProtocol' => 'ListenerProtocol',
        'listenerForward'  => 'ListenerForward',
        'description'      => 'Description',
        'forwardPort'      => 'ForwardPort',
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
        if (null !== $this->listenerForward) {
            $res['ListenerForward'] = $this->listenerForward;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->forwardPort) {
            $res['ForwardPort'] = $this->forwardPort;
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
        if (isset($map['ListenerPort'])) {
            $model->listenerPort = $map['ListenerPort'];
        }
        if (isset($map['ListenerProtocol'])) {
            $model->listenerProtocol = $map['ListenerProtocol'];
        }
        if (isset($map['ListenerForward'])) {
            $model->listenerForward = $map['ListenerForward'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ForwardPort'])) {
            $model->forwardPort = $map['ForwardPort'];
        }

        return $model;
    }
}
