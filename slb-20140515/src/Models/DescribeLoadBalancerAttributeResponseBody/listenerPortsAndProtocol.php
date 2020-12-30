<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\DescribeLoadBalancerAttributeResponseBody;

use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeLoadBalancerAttributeResponseBody\listenerPortsAndProtocol\listenerPortAndProtocol;
use AlibabaCloud\Tea\Model;

class listenerPortsAndProtocol extends Model
{
    /**
     * @var listenerPortAndProtocol[]
     */
    public $listenerPortAndProtocol;
    protected $_name = [
        'listenerPortAndProtocol' => 'ListenerPortAndProtocol',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->listenerPortAndProtocol) {
            $res['ListenerPortAndProtocol'] = [];
            if (null !== $this->listenerPortAndProtocol && \is_array($this->listenerPortAndProtocol)) {
                $n = 0;
                foreach ($this->listenerPortAndProtocol as $item) {
                    $res['ListenerPortAndProtocol'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return listenerPortsAndProtocol
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ListenerPortAndProtocol'])) {
            if (!empty($map['ListenerPortAndProtocol'])) {
                $model->listenerPortAndProtocol = [];
                $n                              = 0;
                foreach ($map['ListenerPortAndProtocol'] as $item) {
                    $model->listenerPortAndProtocol[$n++] = null !== $item ? listenerPortAndProtocol::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
