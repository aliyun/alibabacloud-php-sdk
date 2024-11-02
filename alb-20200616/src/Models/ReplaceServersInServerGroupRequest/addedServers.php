<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\ReplaceServersInServerGroupRequest;

use AlibabaCloud\Tea\Model;

class addedServers extends Model
{
    /**
     * @description The description of the backend server. The description must be 2 to 256 characters in length, and cannot start with http:// or https://.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The port used by the backend server in the server group. Valid values: **1** to **65535**. You can specify at most 200 servers in each call.
     *
     * @example 80
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
     * @description The type of backend server. You can specify at most 200 servers in each call. Valid values:
     *
     *   **Ecs**: Elastic Compute Service (ECS) instance
     *   **Eni**: ENI
     *   **Eci**: elastic container instance
     *
     * @example Ecs
     *
     * @var string
     */
    public $serverType;

    /**
     * @description The weight of the backend server. You can specify at most 200 servers in each call.
     *
     * Valid values: **0** to **100**. Default value: **100**. If the value is set to **0**, no requests are forwarded to the server.
     * @example 100
     *
     * @var int
     */
    public $weight;
    protected $_name = [
        'description' => 'Description',
        'port'        => 'Port',
        'serverId'    => 'ServerId',
        'serverIp'    => 'ServerIp',
        'serverType'  => 'ServerType',
        'weight'      => 'Weight',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
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
        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return addedServers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
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
        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }

        return $model;
    }
}
