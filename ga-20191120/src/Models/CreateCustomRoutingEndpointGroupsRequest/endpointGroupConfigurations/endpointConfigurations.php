<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\CreateCustomRoutingEndpointGroupsRequest\endpointGroupConfigurations;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateCustomRoutingEndpointGroupsRequest\endpointGroupConfigurations\endpointConfigurations\policyConfigurations;

class endpointConfigurations extends Model
{
    /**
     * @var string
     */
    public $endpoint;

    /**
     * @var policyConfigurations[]
     */
    public $policyConfigurations;

    /**
     * @var string
     */
    public $trafficToEndpointPolicy;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'endpoint' => 'Endpoint',
        'policyConfigurations' => 'PolicyConfigurations',
        'trafficToEndpointPolicy' => 'TrafficToEndpointPolicy',
        'type' => 'Type',
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
        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
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

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
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

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
