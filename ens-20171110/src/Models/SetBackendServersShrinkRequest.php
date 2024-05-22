<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class SetBackendServersShrinkRequest extends Model
{
    /**
     * @description The list of backend servers that you want to add. You can modify at most 20 backend servers.
     *
     * This parameter is required.
     * @var string
     */
    public $backendServersShrink;

    /**
     * @description The ID of the Edge Load Balancer (ELB) instance.
     *
     * This parameter is required.
     * @example lb-5s7crik3yo3bp03gqrbp5****
     *
     * @var string
     */
    public $loadBalancerId;
    protected $_name = [
        'backendServersShrink' => 'BackendServers',
        'loadBalancerId'       => 'LoadBalancerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backendServersShrink) {
            $res['BackendServers'] = $this->backendServersShrink;
        }
        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetBackendServersShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackendServers'])) {
            $model->backendServersShrink = $map['BackendServers'];
        }
        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }

        return $model;
    }
}
