<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\DescribeHealthStatusResponseBody\backendServers;

use AlibabaCloud\Tea\Model;

class backendServer extends Model
{
    /**
     * @description The frontend port that is used by the CLB instance.
     *
     * @example 80
     *
     * @var int
     */
    public $listenerPort;

    /**
     * @description The backend port that is used by the CLB instance.
     *
     * @example 70
     *
     * @var int
     */
    public $port;

    /**
     * @description The frontend protocol that is used by the CLB instance.
     *
     * @example https
     *
     * @var string
     */
    public $protocol;

    /**
     * @description The health status of the backend server. Valid values:
     *
     *   **normal**: The backend server is healthy.
     *   **abnormal**: The backend server is unhealthy.
     *   **unavailable**: The health check is not complete.
     *
     * @example abnormal
     *
     * @var string
     */
    public $serverHealthStatus;

    /**
     * @description The ID of the Elastic Compute Service (ECS) instance or elastic network interface (ENI).
     *
     * @example i-bp1h5u3fv54ytf***
     *
     * @var string
     */
    public $serverId;

    /**
     * @description The IP address of the ECS instance.
     *
     * @example 192.XX.XX.11
     *
     * @var string
     */
    public $serverIp;
    protected $_name = [
        'listenerPort'       => 'ListenerPort',
        'port'               => 'Port',
        'protocol'           => 'Protocol',
        'serverHealthStatus' => 'ServerHealthStatus',
        'serverId'           => 'ServerId',
        'serverIp'           => 'ServerIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->listenerPort) {
            $res['ListenerPort'] = $this->listenerPort;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->serverHealthStatus) {
            $res['ServerHealthStatus'] = $this->serverHealthStatus;
        }
        if (null !== $this->serverId) {
            $res['ServerId'] = $this->serverId;
        }
        if (null !== $this->serverIp) {
            $res['ServerIp'] = $this->serverIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return backendServer
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ListenerPort'])) {
            $model->listenerPort = $map['ListenerPort'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['ServerHealthStatus'])) {
            $model->serverHealthStatus = $map['ServerHealthStatus'];
        }
        if (isset($map['ServerId'])) {
            $model->serverId = $map['ServerId'];
        }
        if (isset($map['ServerIp'])) {
            $model->serverIp = $map['ServerIp'];
        }

        return $model;
    }
}
