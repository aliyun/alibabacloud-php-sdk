<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\ReplaceServersInServerGroupRequest;

use AlibabaCloud\Tea\Model;

class removedServers extends Model
{
    /**
     * @description The port that is used by the backend server. Valid values: **1** to **65535**. You can specify at most 40 servers in each call.
     *
     * @example 81
     *
     * @var int
     */
    public $port;

    /**
     * @description The ID of the backend server. You can specify up to 40 server IDs in each call.
     *
     *   If the server group type is **Instance**, set the ServerId parameter to the ID of an ECS instance, an ENI, or an elastic container instance. These backend servers are specified by **Ecs**, **Eni**, or **Eci**.
     *   If the server group type is **Ip**, set the ServerId parameter to an IP address specified in the server group.
     *
     * This parameter is required.
     * @example ecs-bp1ac9uozods2uc****
     *
     * @var string
     */
    public $serverId;

    /**
     * @description The IP address in inclusive ENI mode. You can specify at most 40 servers in each call.
     *
     * @example 192.168.1.12
     *
     * @var string
     */
    public $serverIp;

    /**
     * @description The type of the backend server that you want to remove from the server group. You can specify up to 40 backend servers in each call. Valid values:
     *
     *   **Ecs**
     *   **Eni**
     *   **Eci**
     *
     * @example ecs
     *
     * @var string
     */
    public $serverType;
    protected $_name = [
        'port'       => 'Port',
        'serverId'   => 'ServerId',
        'serverIp'   => 'ServerIp',
        'serverType' => 'ServerType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->serverId) {
            $res['ServerId'] = $this->serverId;
        }
        if (null !== $this->serverIp) {
            $res['ServerIp'] = $this->serverIp;
        }
        if (null !== $this->serverType) {
            $res['ServerType'] = $this->serverType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return removedServers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['ServerId'])) {
            $model->serverId = $map['ServerId'];
        }
        if (isset($map['ServerIp'])) {
            $model->serverIp = $map['ServerIp'];
        }
        if (isset($map['ServerType'])) {
            $model->serverType = $map['ServerType'];
        }

        return $model;
    }
}
