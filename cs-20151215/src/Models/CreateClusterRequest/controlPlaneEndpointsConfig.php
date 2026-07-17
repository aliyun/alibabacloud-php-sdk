<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterRequest\controlPlaneEndpointsConfig\internalDnsConfig;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterRequest\controlPlaneEndpointsConfig\loadBalancersConfig;

class controlPlaneEndpointsConfig extends Model
{
    /**
     * @var internalDnsConfig
     */
    public $internalDnsConfig;

    /**
     * @var loadBalancersConfig[]
     */
    public $loadBalancersConfig;
    protected $_name = [
        'internalDnsConfig' => 'internal_dns_config',
        'loadBalancersConfig' => 'load_balancers_config',
    ];

    public function validate()
    {
        if (null !== $this->internalDnsConfig) {
            $this->internalDnsConfig->validate();
        }
        if (\is_array($this->loadBalancersConfig)) {
            Model::validateArray($this->loadBalancersConfig);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->internalDnsConfig) {
            $res['internal_dns_config'] = null !== $this->internalDnsConfig ? $this->internalDnsConfig->toArray($noStream) : $this->internalDnsConfig;
        }

        if (null !== $this->loadBalancersConfig) {
            if (\is_array($this->loadBalancersConfig)) {
                $res['load_balancers_config'] = [];
                $n1 = 0;
                foreach ($this->loadBalancersConfig as $item1) {
                    $res['load_balancers_config'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['internal_dns_config'])) {
            $model->internalDnsConfig = internalDnsConfig::fromMap($map['internal_dns_config']);
        }

        if (isset($map['load_balancers_config'])) {
            if (!empty($map['load_balancers_config'])) {
                $model->loadBalancersConfig = [];
                $n1 = 0;
                foreach ($map['load_balancers_config'] as $item1) {
                    $model->loadBalancersConfig[$n1] = loadBalancersConfig::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
