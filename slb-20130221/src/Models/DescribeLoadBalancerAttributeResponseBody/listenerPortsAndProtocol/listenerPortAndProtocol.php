<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20130221\Models\DescribeLoadBalancerAttributeResponseBody\listenerPortsAndProtocol;

use AlibabaCloud\Dara\Model;

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
    protected $_name = [
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
        if (isset($map['ListenerPort'])) {
            $model->listenerPort = $map['ListenerPort'];
        }

        if (isset($map['ListenerProtocol'])) {
            $model->listenerProtocol = $map['ListenerProtocol'];
        }

        return $model;
    }
}
