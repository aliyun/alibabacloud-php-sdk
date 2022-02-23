<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\DescribeLoadBalancerAttributeResponseBody\listenerPortsAndProtocal;

use AlibabaCloud\Tea\Model;

class listenerPortAndProtocal extends Model
{
    /**
     * @var int
     */
    public $listenerPort;

    /**
     * @var string
     */
    public $listenerProtocal;
    protected $_name = [
        'listenerPort'     => 'ListenerPort',
        'listenerProtocal' => 'ListenerProtocal',
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
        if (null !== $this->listenerProtocal) {
            $res['ListenerProtocal'] = $this->listenerProtocal;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return listenerPortAndProtocal
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ListenerPort'])) {
            $model->listenerPort = $map['ListenerPort'];
        }
        if (isset($map['ListenerProtocal'])) {
            $model->listenerProtocal = $map['ListenerProtocal'];
        }

        return $model;
    }
}
