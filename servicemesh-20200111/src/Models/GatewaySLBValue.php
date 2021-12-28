<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GatewaySLBValue\backendServers;
use AlibabaCloud\Tea\Model;

class GatewaySLBValue extends Model
{
    /**
     * @var string
     */
    public $SLBAddress;

    /**
     * @var string
     */
    public $loadBalancerId;

    /**
     * @var backendServers
     */
    public $backendServers;

    /**
     * @var string
     */
    public $SLBHealthCheckState;
    protected $_name = [
        'SLBAddress'          => 'SLBAddress',
        'loadBalancerId'      => 'LoadBalancerId',
        'backendServers'      => 'BackendServers',
        'SLBHealthCheckState' => 'SLBHealthCheckState',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->SLBAddress) {
            $res['SLBAddress'] = $this->SLBAddress;
        }
        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
        }
        if (null !== $this->backendServers) {
            $res['BackendServers'] = null !== $this->backendServers ? $this->backendServers->toMap() : null;
        }
        if (null !== $this->SLBHealthCheckState) {
            $res['SLBHealthCheckState'] = $this->SLBHealthCheckState;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GatewaySLBValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SLBAddress'])) {
            $model->SLBAddress = $map['SLBAddress'];
        }
        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }
        if (isset($map['BackendServers'])) {
            $model->backendServers = backendServers::fromMap($map['BackendServers']);
        }
        if (isset($map['SLBHealthCheckState'])) {
            $model->SLBHealthCheckState = $map['SLBHealthCheckState'];
        }

        return $model;
    }
}
