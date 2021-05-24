<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\SDK\Slb\V20140515\Models\RemoveBackendServersResponseBody\backendServers;
use AlibabaCloud\Tea\Model;

class RemoveBackendServersResponseBody extends Model
{
    /**
     * @var string
     */
    public $loadBalancerId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var backendServers
     */
    public $backendServers;
    protected $_name = [
        'loadBalancerId' => 'LoadBalancerId',
        'requestId'      => 'RequestId',
        'backendServers' => 'BackendServers',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->backendServers) {
            $res['BackendServers'] = null !== $this->backendServers ? $this->backendServers->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemoveBackendServersResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['BackendServers'])) {
            $model->backendServers = backendServers::fromMap($map['BackendServers']);
        }

        return $model;
    }
}
