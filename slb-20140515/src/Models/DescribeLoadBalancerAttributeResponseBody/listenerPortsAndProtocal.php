<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\DescribeLoadBalancerAttributeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeLoadBalancerAttributeResponseBody\listenerPortsAndProtocal\listenerPortAndProtocal;

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
        if (\is_array($this->listenerPortAndProtocal)) {
            Model::validateArray($this->listenerPortAndProtocal);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->listenerPortAndProtocal) {
            if (\is_array($this->listenerPortAndProtocal)) {
                $res['ListenerPortAndProtocal'] = [];
                $n1 = 0;
                foreach ($this->listenerPortAndProtocal as $item1) {
                    $res['ListenerPortAndProtocal'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ListenerPortAndProtocal'])) {
            if (!empty($map['ListenerPortAndProtocal'])) {
                $model->listenerPortAndProtocal = [];
                $n1 = 0;
                foreach ($map['ListenerPortAndProtocal'] as $item1) {
                    $model->listenerPortAndProtocal[$n1] = listenerPortAndProtocal::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
