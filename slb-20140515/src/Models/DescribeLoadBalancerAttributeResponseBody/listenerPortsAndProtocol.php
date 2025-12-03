<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\DescribeLoadBalancerAttributeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeLoadBalancerAttributeResponseBody\listenerPortsAndProtocol\listenerPortAndProtocol;

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
        if (\is_array($this->listenerPortAndProtocol)) {
            Model::validateArray($this->listenerPortAndProtocol);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->listenerPortAndProtocol) {
            if (\is_array($this->listenerPortAndProtocol)) {
                $res['ListenerPortAndProtocol'] = [];
                $n1 = 0;
                foreach ($this->listenerPortAndProtocol as $item1) {
                    $res['ListenerPortAndProtocol'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['ListenerPortAndProtocol'])) {
            if (!empty($map['ListenerPortAndProtocol'])) {
                $model->listenerPortAndProtocol = [];
                $n1 = 0;
                foreach ($map['ListenerPortAndProtocol'] as $item1) {
                    $model->listenerPortAndProtocol[$n1] = listenerPortAndProtocol::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
