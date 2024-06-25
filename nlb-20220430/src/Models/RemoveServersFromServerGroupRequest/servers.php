<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlb\V20220430\Models\RemoveServersFromServerGroupRequest;

use AlibabaCloud\Tea\Model;

class servers extends Model
{
    /**
     * @description The port that is used by the backend server. Valid values: **1** to **65535**.
     *
     * @example 443
     *
     * @var int
     */
    public $port;

    /**
     * @description The backend server ID.
     *
     *   If the server group type is **Instance**, set this parameter to the ID of an Elastic Compute Service (ECS) instance, an elastic network interface (ENI), or an elastic container instance. The backend servers are specified by **Ecs**, **Eni**, or **Eci**.
     *   If the server group type is **Ip**, set this parameter to an IP address.
     *
     * This parameter is required.
     * @example ecs-bp67acfmxazb4p****
     *
     * @var string
     */
    public $serverId;

    /**
     * @description The IP address of the backend server. If the server group type is **Ip**, you must specify an IP address.
     *
     * @example 192.168.6.6
     *
     * @var string
     */
    public $serverIp;

    /**
     * @description The type of the backend server. Valid values:
     *
     *   **Ecs**: ECS instance
     *   **Eni**: ENI
     *   **Eci**: elastic container instance
     *   **Ip**: IP address
     *
     * This parameter is required.
     * @example Ecs
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
     * @return servers
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
