<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\AddBackendServersRequest\backendServers;
use AlibabaCloud\Tea\Model;

class AddBackendServersRequest extends Model
{
    /**
     * @description The list of backend servers that you want to add. You can add at most 20 backend servers.
     *
     * >  Only ENS instances that are in the running state can be attached to the ELB instance as backend servers.
     * @var backendServers[]
     */
    public $backendServers;

    /**
     * @description The frontend port that is used by the Edge Load Balance (ELB) instance. Valid values: **1** to **65535**.
     *
     * @example lb-5qzdmxefgrpxd7oz2mefonvtx
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
     * @return AddBackendServersRequest
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
