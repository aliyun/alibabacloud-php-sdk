<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\DescribeLoadBalancerAttributeResponseBody;

use AlibabaCloud\Tea\Model;

class listenerPortsAndProtocal extends Model
{
    /**
     * @var string
     */
    public $listenerProtocal;

    /**
     * @var int
     */
    public $listenerPort;
    protected $_name = [
        'listenerProtocal' => 'ListenerProtocal',
        'listenerPort'     => 'ListenerPort',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->listenerProtocal) {
            $res['ListenerProtocal'] = $this->listenerProtocal;
        }
        if (null !== $this->listenerPort) {
            $res['ListenerPort'] = $this->listenerPort;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return listenerPortsAndProtocal
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ListenerProtocal'])) {
            $model->listenerProtocal = $map['ListenerProtocal'];
        }
        if (isset($map['ListenerPort'])) {
            $model->listenerPort = $map['ListenerPort'];
        }

        return $model;
    }
}
