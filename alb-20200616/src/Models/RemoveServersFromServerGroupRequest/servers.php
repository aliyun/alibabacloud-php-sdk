<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\RemoveServersFromServerGroupRequest;

use AlibabaCloud\Tea\Model;

class servers extends Model
{
    /**
     * @description The port that is used by the backend server. Valid values: **1** to **65535**.
     *
     * >  This parameter is required when you set **ServerType** to **Ecs**, **Eni**, **Eci**, or **Ip**.
     * @example 80
     *
     * @var int
     */
    public $port;

    /**
     * @description The ID of the server group.
     *
     *   If the server group is of the **Instance** type, set ServerId to the ID of a resource of the **Ecs**, **Eni**, or **Eci** type.
     *   If the server group is of the **Ip** type, set ServerId to IP addresses.
     *   If the server group is of the **Fc**, set ServerId to the Alibaba Cloud Resource Name (ARN) of a function.
     *
     * This parameter is required.
     * @example i-bp1f9kdprbgy9uiu****
     *
     * @var string
     */
    public $serverId;

    /**
     * @description The IP address of the elastic network interface (ENI) in exclusive mode.
     *
     * @example 192.168.1.1
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
     *   **Fc**: Function Compute
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
