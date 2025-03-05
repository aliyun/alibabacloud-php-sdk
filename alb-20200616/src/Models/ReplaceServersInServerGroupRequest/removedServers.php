<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\ReplaceServersInServerGroupRequest;

use AlibabaCloud\Tea\Model;

class removedServers extends Model
{
    /**
     * @description The port that is used by the backend server. Valid values: **1** to **65535**. You can specify at most 200 servers in each call.
     *
     * @example 81
     *
     * @var int
     */
    public $port;

    /**
     * @description The ID of the backend server. You can specify at most 200 servers in each call.
     *
     *   If the server group is of the **Instance** type, set ServerId to the ID of a resource of the **Ecs**, **Eni**, or **Eci** type.
     *   If the server group is of the **Ip** type, set ServerId to IP addresses.
     *
     * This parameter is required.
     * @example ecs-bp1ac9uozods2uc****
     *
     * @var string
     */
    public $serverId;

    /**
     * @description The IP address of the ENI in exclusive mode.
     *
     * @example 192.168.1.12
     *
     * @var string
     */
    public $serverIp;

    /**
     * @description The type of backend server. You can specify at most 200 servers in each call. Valid values:
     *
     *   **Ecs**: ECS instance
     *   **Eni**: ENI
     *   **Eci**: elastic container instance
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
