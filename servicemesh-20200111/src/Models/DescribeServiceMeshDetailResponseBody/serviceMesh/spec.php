<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\loadBalancer;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\network;

class spec extends Model
{
    /**
     * @var loadBalancer
     */
    public $loadBalancer;

    /**
     * @var meshConfig
     */
    public $meshConfig;

    /**
     * @var network
     */
    public $network;
    protected $_name = [
        'loadBalancer' => 'LoadBalancer',
        'meshConfig' => 'MeshConfig',
        'network' => 'Network',
    ];

    public function validate()
    {
        if (null !== $this->loadBalancer) {
            $this->loadBalancer->validate();
        }
        if (null !== $this->meshConfig) {
            $this->meshConfig->validate();
        }
        if (null !== $this->network) {
            $this->network->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->loadBalancer) {
            $res['LoadBalancer'] = null !== $this->loadBalancer ? $this->loadBalancer->toArray($noStream) : $this->loadBalancer;
        }

        if (null !== $this->meshConfig) {
            $res['MeshConfig'] = null !== $this->meshConfig ? $this->meshConfig->toArray($noStream) : $this->meshConfig;
        }

        if (null !== $this->network) {
            $res['Network'] = null !== $this->network ? $this->network->toArray($noStream) : $this->network;
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
        if (isset($map['LoadBalancer'])) {
            $model->loadBalancer = loadBalancer::fromMap($map['LoadBalancer']);
        }

        if (isset($map['MeshConfig'])) {
            $model->meshConfig = meshConfig::fromMap($map['MeshConfig']);
        }

        if (isset($map['Network'])) {
            $model->network = network::fromMap($map['Network']);
        }

        return $model;
    }
}
