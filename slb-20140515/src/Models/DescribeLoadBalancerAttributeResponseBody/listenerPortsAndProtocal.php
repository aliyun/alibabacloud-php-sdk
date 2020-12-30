<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\DescribeLoadBalancerAttributeResponseBody;

use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeLoadBalancerAttributeResponseBody\listenerPortsAndProtocal\listenerPortAndProtocal;
use AlibabaCloud\Tea\Model;

class listenerPortsAndProtocal extends Model
{
    /**
     * @var listenerPortAndProtocal[]
     */
    public $listenerPortAndProtocal;
    protected $_name = [
        'listenerPortAndProtocal' => 'ListenerPortAndProtocal',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->listenerPortAndProtocal) {
            $res['ListenerPortAndProtocal'] = [];
            if (null !== $this->listenerPortAndProtocal && \is_array($this->listenerPortAndProtocal)) {
                $n = 0;
                foreach ($this->listenerPortAndProtocal as $item) {
                    $res['ListenerPortAndProtocal'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['ListenerPortAndProtocal'])) {
            if (!empty($map['ListenerPortAndProtocal'])) {
                $model->listenerPortAndProtocal = [];
                $n                              = 0;
                foreach ($map['ListenerPortAndProtocal'] as $item) {
                    $model->listenerPortAndProtocal[$n++] = null !== $item ? listenerPortAndProtocal::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
