<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\AddServersToServerGroupRequest;

use AlibabaCloud\Tea\Model;

class servers extends Model
{
    /**
     * @description The description of the backend server. The description must be 2 to 256 characters in length and cannot start with http:// or https://.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The port that is used by the backend server. Valid values: **1** to **65535**. You can specify at most 200 servers in each call.
     *
     * >  This parameter is required if you set **ServerType** to **Ecs**, **Eni**, **Eci**, or **Ip**. You do not need to set this parameter if **ServerType** is set to **Fc**.
     * @example 80
     *
     * @var int
     */
    public $port;

    /**
     * @description Specifies whether to enable the remote IP feature. You can specify at most 200 servers in each call. Default values:
     *
     *   **true**: enables the feature.
     *   **false**: disables the feature.
     *
     * >  This parameter takes effect only when **ServerType** is set to **Ip**.
     * @example false
     *
     * @var bool
     */
    public $remoteIpEnabled;

    /**
     * @description The ID of the server group. You can specify at most 200 servers in each call.
     *
     *   If the server group is of the **Instance** type, set ServerId to the ID of a resource of the **Ecs**, **Eni**, or **Eci** type.
     *   If the server group is of the **Ip** type, set this parameter to IP addresses.
     *   If the server group is of the **Fc** type, set ServerId to an Alibaba Cloud Resource Name (ARN).
     *
     * This parameter is required.
     * @example ecs-bp67acfmxazb4p****
     *
     * @var string
     */
    public $serverId;

    /**
     * @description The IP address of the backend server. You can specify at most 200 servers in each call.
     *
     * >  You do not need to set this parameter if you set **ServerType** to **Fc**.
     * @example 192.168.1.1
     *
     * @var string
     */
    public $serverIp;

    /**
     * @description The type of the backend server. You can specify at most 200 servers in each call. Default values:
     *
     *   **Ecs**: Elastic Compute Service (ECS) instance
     *   **Eni**: elastic network interface (ENI)
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

    /**
     * @description The weight of the backend server. Valid values: **0** to **100**. Default value: **100**. If the value is set to **0**, no requests are forwarded to the server. You can specify at most 200 servers in each call.
     *
     * >  You do not need to set this parameter if you set **ServerType** to **Fc**.
     * @example 100
     *
     * @var int
     */
    public $weight;
    protected $_name = [
        'description'     => 'Description',
        'port'            => 'Port',
        'remoteIpEnabled' => 'RemoteIpEnabled',
        'serverId'        => 'ServerId',
        'serverIp'        => 'ServerIp',
        'serverType'      => 'ServerType',
        'weight'          => 'Weight',
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
        if (null !== $this->remoteIpEnabled) {
            $res['RemoteIpEnabled'] = $this->remoteIpEnabled;
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
     * @return servers
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
        if (isset($map['RemoteIpEnabled'])) {
            $model->remoteIpEnabled = $map['RemoteIpEnabled'];
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
