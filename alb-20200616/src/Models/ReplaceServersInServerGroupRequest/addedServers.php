<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\ReplaceServersInServerGroupRequest;

use AlibabaCloud\Tea\Model;

class addedServers extends Model
{
    /**
     * @description The description of the backend server. The description must be 2 to 256 characters in length, and can contain letters, digits, periods (.), underscores (_), hyphens (-), commas (,), semicolons (;), forward slashes (/), and at signs (@). You can specify at most 40 servers in each call.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The port used by the server group. Valid values: **1** to **65535**. You can specify at most 40 servers in each call.
     *
     * @example 80
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
     * @example i-bp1f9kdprbgy9uiu****
     *
     * @var string
     */
    public $serverId;

    /**
     * @description The IP address in inclusive ENI mode. You can specify at most 40 servers in each call.
     *
     * @example 192.168.1.1
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
     * @example Ecs
     *
     * @var string
     */
    public $serverType;

    /**
     * @description The weight of the backend server that you want to add to the server group. You can specify up to 40 backend servers in each call.
     *
     * Valid values: **0** to **100**. Default value: **100**. If the weight of a backend server is set to **0**, no requests are forwarded to the backend server.
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
