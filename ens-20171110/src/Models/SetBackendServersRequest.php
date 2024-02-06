<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\SetBackendServersRequest\backendServers;
use AlibabaCloud\Tea\Model;

class SetBackendServersRequest extends Model
{
    /**
     * @description The list of backend servers that you want to add. You can add at most 20 backend servers.
     *
     * >  Only ENS instances that are in the running state can be attached to the ELB instance as backend servers.
     * @var backendServers[]
     */
    public $backendServers;

    /**
     * @description The ID of the Edge Load Balancer (ELB) instance.
     *
     * @example lb-5s7crik3yo3bp03gqrbp5****
     *
     * @var string
     */
    public $loadBalancerId;
    protected $_name = [
        'backendServers' => 'BackendServers',
        'loadBalancerId' => 'LoadBalancerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backendServers) {
            $res['BackendServers'] = [];
            if (null !== $this->backendServers && \is_array($this->backendServers)) {
                $n = 0;
                foreach ($this->backendServers as $item) {
                    $res['BackendServers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetBackendServersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackendServers'])) {
            if (!empty($map['BackendServers'])) {
                $model->backendServers = [];
                $n                     = 0;
                foreach ($map['BackendServers'] as $item) {
                    $model->backendServers[$n++] = null !== $item ? backendServers::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }

        return $model;
    }
}
