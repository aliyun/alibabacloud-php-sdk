<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeLoadBalancerAttributeResponseBody;

use AlibabaCloud\Tea\Model;

class listenerPortsAndProtocols extends Model
{
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
