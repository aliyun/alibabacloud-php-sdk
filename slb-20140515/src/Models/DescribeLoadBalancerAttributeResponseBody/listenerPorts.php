<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\DescribeLoadBalancerAttributeResponseBody;

use AlibabaCloud\Tea\Model;

class listenerPorts extends Model
{
    /**
     * @var int[]
     */
    public $listenerPort;
    protected $_name = [
        'listenerPort' => 'ListenerPort',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return listenerPorts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ListenerPort'])) {
            if (!empty($map['ListenerPort'])) {
                $model->listenerPort = $map['ListenerPort'];
            }
        }

        return $model;
    }
}
