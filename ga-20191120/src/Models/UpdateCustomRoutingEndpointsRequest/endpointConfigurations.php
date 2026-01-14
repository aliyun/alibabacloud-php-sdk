<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\UpdateCustomRoutingEndpointsRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ga\V20191120\Models\UpdateCustomRoutingEndpointsRequest\endpointConfigurations\policyConfigurations;

class endpointConfigurations extends Model
{
    /**
     * @var string
     */
    public $endpointId;

    /**
     * @var policyConfigurations[]
     */
    public $policyConfigurations;

    /**
     * @var string
     */
    public $trafficToEndpointPolicy;
    protected $_name = [
        'endpointId' => 'EndpointId',
        'policyConfigurations' => 'PolicyConfigurations',
        'trafficToEndpointPolicy' => 'TrafficToEndpointPolicy',
    ];

    public function validate()
    {
        if (\is_array($this->policyConfigurations)) {
            Model::validateArray($this->policyConfigurations);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endpointId) {
            $res['EndpointId'] = $this->endpointId;
        }

        if (null !== $this->policyConfigurations) {
            if (\is_array($this->policyConfigurations)) {
                $res['PolicyConfigurations'] = [];
                $n1 = 0;
                foreach ($this->policyConfigurations as $item1) {
                    $res['PolicyConfigurations'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->trafficToEndpointPolicy) {
            $res['TrafficToEndpointPolicy'] = $this->trafficToEndpointPolicy;
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
        if (isset($map['EndpointId'])) {
            $model->endpointId = $map['EndpointId'];
        }

        if (isset($map['PolicyConfigurations'])) {
            if (!empty($map['PolicyConfigurations'])) {
                $model->policyConfigurations = [];
                $n1 = 0;
                foreach ($map['PolicyConfigurations'] as $item1) {
                    $model->policyConfigurations[$n1] = policyConfigurations::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TrafficToEndpointPolicy'])) {
            $model->trafficToEndpointPolicy = $map['TrafficToEndpointPolicy'];
        }

        return $model;
    }
}
