<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\UpdateGatewayLoadBalancerRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateGatewayLoadBalancerRequest\ports\gatewayLoadBalancerPorts;

class ports extends Model
{
    /**
     * @var gatewayLoadBalancerPorts[]
     */
    public $gatewayLoadBalancerPorts;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'gatewayLoadBalancerPorts' => 'gatewayLoadBalancerPorts',
        'type' => 'type',
    ];

    public function validate()
    {
        if (\is_array($this->gatewayLoadBalancerPorts)) {
            Model::validateArray($this->gatewayLoadBalancerPorts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->gatewayLoadBalancerPorts) {
            if (\is_array($this->gatewayLoadBalancerPorts)) {
                $res['gatewayLoadBalancerPorts'] = [];
                $n1 = 0;
                foreach ($this->gatewayLoadBalancerPorts as $item1) {
                    $res['gatewayLoadBalancerPorts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['gatewayLoadBalancerPorts'])) {
            if (!empty($map['gatewayLoadBalancerPorts'])) {
                $model->gatewayLoadBalancerPorts = [];
                $n1 = 0;
                foreach ($map['gatewayLoadBalancerPorts'] as $item1) {
                    $model->gatewayLoadBalancerPorts[$n1] = gatewayLoadBalancerPorts::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
