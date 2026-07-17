<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterRequest\controlPlaneEndpointsConfig;

use AlibabaCloud\Dara\Model;

class loadBalancersConfig extends Model
{
    /**
     * @var string
     */
    public $endpointType;

    /**
     * @var string
     */
    public $loadBalancerId;
    protected $_name = [
        'endpointType' => 'endpoint_type',
        'loadBalancerId' => 'load_balancer_id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endpointType) {
            $res['endpoint_type'] = $this->endpointType;
        }

        if (null !== $this->loadBalancerId) {
            $res['load_balancer_id'] = $this->loadBalancerId;
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
        if (isset($map['endpoint_type'])) {
            $model->endpointType = $map['endpoint_type'];
        }

        if (isset($map['load_balancer_id'])) {
            $model->loadBalancerId = $map['load_balancer_id'];
        }

        return $model;
    }
}
