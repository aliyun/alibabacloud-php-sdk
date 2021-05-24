<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\DescribeHealthStatusResponseBody\backendServers;

use AlibabaCloud\Tea\Model;

class backendServer extends Model
{
    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $serverHealthStatus;

    /**
     * @var int
     */
    public $listenerPort;

    /**
     * @var string
     */
    public $serverIp;

    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $serverId;
    protected $_name = [
        'protocol'           => 'Protocol',
        'serverHealthStatus' => 'ServerHealthStatus',
        'listenerPort'       => 'ListenerPort',
        'serverIp'           => 'ServerIp',
        'port'               => 'Port',
        'serverId'           => 'ServerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->serverHealthStatus) {
            $res['ServerHealthStatus'] = $this->serverHealthStatus;
        }
        if (null !== $this->listenerPort) {
            $res['ListenerPort'] = $this->listenerPort;
        }
        if (null !== $this->serverIp) {
            $res['ServerIp'] = $this->serverIp;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->serverId) {
            $res['ServerId'] = $this->serverId;
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
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['ServerHealthStatus'])) {
            $model->serverHealthStatus = $map['ServerHealthStatus'];
        }
        if (isset($map['ListenerPort'])) {
            $model->listenerPort = $map['ListenerPort'];
        }
        if (isset($map['ServerIp'])) {
            $model->serverIp = $map['ServerIp'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['ServerId'])) {
            $model->serverId = $map['ServerId'];
        }

        return $model;
    }
}
