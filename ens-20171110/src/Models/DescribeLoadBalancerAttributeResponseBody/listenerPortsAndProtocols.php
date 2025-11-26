<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeLoadBalancerAttributeResponseBody;

use AlibabaCloud\Dara\Model;

class listenerPortsAndProtocols extends Model
{
    /**
     * @var int
     */
    public $backendServerPort;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $forwardPort;

    /**
     * @var string
     */
    public $listenerForward;

    /**
     * @var int
     */
    public $listenerPort;

    /**
     * @var string
     */
    public $listenerProtocol;
    protected $_name = [
        'backendServerPort' => 'BackendServerPort',
        'description' => 'Description',
        'forwardPort' => 'ForwardPort',
        'listenerForward' => 'ListenerForward',
        'listenerPort' => 'ListenerPort',
        'listenerProtocol' => 'ListenerProtocol',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backendServerPort) {
            $res['BackendServerPort'] = $this->backendServerPort;
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

        if (null !== $this->listenerProtocol) {
            $res['ListenerProtocol'] = $this->listenerProtocol;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackendServerPort'])) {
            $model->backendServerPort = $map['BackendServerPort'];
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

        if (isset($map['ListenerProtocol'])) {
            $model->listenerProtocol = $map['ListenerProtocol'];
        }

        return $model;
    }
}
