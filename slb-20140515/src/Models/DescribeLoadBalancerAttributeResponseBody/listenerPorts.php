<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\DescribeLoadBalancerAttributeResponseBody;

use AlibabaCloud\Dara\Model;

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
        if (\is_array($this->listenerPort)) {
            Model::validateArray($this->listenerPort);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->listenerPort) {
            if (\is_array($this->listenerPort)) {
                $res['ListenerPort'] = [];
                $n1 = 0;
                foreach ($this->listenerPort as $item1) {
                    $res['ListenerPort'][$n1] = $item1;
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
        if (isset($map['ListenerPort'])) {
            if (!empty($map['ListenerPort'])) {
                $model->listenerPort = [];
                $n1 = 0;
                foreach ($map['ListenerPort'] as $item1) {
                    $model->listenerPort[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
