<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\SDK\Slb\V20140515\Models\AddBackendServersResponseBody\backendServers;
use AlibabaCloud\Tea\Model;

class AddBackendServersResponseBody extends Model
{
    /**
     * @description The list of backend servers.
     *
     * @var backendServers
     */
    public $backendServers;

    /**
     * @description The ID of the CLB instance.
     *
     * @example lb-2ze7o5h52g02kkzz****
     *
     * @var string
     */
    public $loadBalancerId;

    /**
     * @description The ID of the request.
     *
     * @example 34B82C81-F13B-4EEB-99F6-A048C67CC830
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'backendServers' => 'BackendServers',
        'loadBalancerId' => 'LoadBalancerId',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backendServers) {
            $res['BackendServers'] = null !== $this->backendServers ? $this->backendServers->toMap() : null;
        }
        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddBackendServersResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackendServers'])) {
            $model->backendServers = backendServers::fromMap($map['BackendServers']);
        }
        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
