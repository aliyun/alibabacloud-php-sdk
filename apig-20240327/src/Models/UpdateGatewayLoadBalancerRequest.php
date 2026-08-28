<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateGatewayLoadBalancerRequest\loadBalancerDTO;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateGatewayLoadBalancerRequest\ports;

class UpdateGatewayLoadBalancerRequest extends Model
{
    /**
     * @var loadBalancerDTO
     */
    public $loadBalancerDTO;

    /**
     * @var string
     */
    public $option;

    /**
     * @var ports[]
     */
    public $ports;
    protected $_name = [
        'loadBalancerDTO' => 'loadBalancerDTO',
        'option' => 'option',
        'ports' => 'ports',
    ];

    public function validate()
    {
        if (null !== $this->loadBalancerDTO) {
            $this->loadBalancerDTO->validate();
        }
        if (\is_array($this->ports)) {
            Model::validateArray($this->ports);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->loadBalancerDTO) {
            $res['loadBalancerDTO'] = null !== $this->loadBalancerDTO ? $this->loadBalancerDTO->toArray($noStream) : $this->loadBalancerDTO;
        }

        if (null !== $this->option) {
            $res['option'] = $this->option;
        }

        if (null !== $this->ports) {
            if (\is_array($this->ports)) {
                $res['ports'] = [];
                $n1 = 0;
                foreach ($this->ports as $item1) {
                    $res['ports'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['loadBalancerDTO'])) {
            $model->loadBalancerDTO = loadBalancerDTO::fromMap($map['loadBalancerDTO']);
        }

        if (isset($map['option'])) {
            $model->option = $map['option'];
        }

        if (isset($map['ports'])) {
            if (!empty($map['ports'])) {
                $model->ports = [];
                $n1 = 0;
                foreach ($map['ports'] as $item1) {
                    $model->ports[$n1] = ports::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
