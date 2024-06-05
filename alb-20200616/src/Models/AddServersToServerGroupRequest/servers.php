<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\AddServersToServerGroupRequest;

use AlibabaCloud\Tea\Model;

class servers extends Model
{
    /**
     * @description The description of the backend server. The description must be 2 to 256 characters in length and can contain letters, digits, periods (.), underscores (_), hyphens (-), commas (,), semicolons (;), forward slashes (/), and at signs (@). You can specify up to 40 servers in each call.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The port used by the backend server. Valid values: **1** to **65535**. You can specify up to 40 server IDs in each call.
     *
     * > This parameter is required if the **ServerType** parameter is set to **Ecs**, **Eni**, **Eci**, or **Ip**. You do not need to set this parameter if **ServerType** is set to **Fc**.
     * @example 80
     *
     * @var int
     */
    public $port;

    /**
     * @description Specifies whether to enable the remote IP address feature. You can specify up to 40 server IDs in each call. Valid values:
     *
     *   **true**
     *   **false**
     *
     * Regions that support the remote IP address feature: China (Hangzhou), China (Shenzhen), China (Qingdao), China (Beijing), China (Zhangjiakou), China (Ulanqab), China (Shanghai), China (Chengdu), China (Guangzhou), China (Hong Kong), US (Virginia), Japan (Tokyo), UK (London), US (Silicon Valley), Germany (Frankfurt), Indonesia (Jakarta), Singapore, Malaysia (Kuala Lumpur), Australia (Sydney), and India (Mumbai).
     *
     * > If **ServerType** is set to **Ip**, this parameter is available.
     * @example false
     *
     * @var bool
     */
    public $remoteIpEnabled;

    /**
     * @description The backend server ID. You can specify up to 40 server IDs in each call.
     *
     *   If ServerType is set to **Instance**, set the ServerId parameter to the ID of an Elastic Compute Service (ECS) instance, an elastic network interface (ENI), or an elastic container instance. These backend servers are specified by **Ecs**, **Eni**, or **Eci**.
     *   If ServerType is set to **Ip**, set the ServerId parameter to an IP address specified in the server group.
     *   If the backend server group is of the **Fc** type, set this parameter to the Alibaba Cloud Resource Name (ARN) of a function.
     *
     * This parameter is required.
     * @example ecs-bp67acfmxazb4p****
     *
     * @var string
     */
    public $serverId;

    /**
     * @description The IP address in inclusive ENI mode. You can specify up to 40 server IDs in each call.
     *
     * > You do not need to set this parameter if **ServerType** is set to **Fc**.
     * @example 192.168.1.1
     *
     * @var string
     */
    public $serverIp;

    /**
     * @description The type of the backend server that you want to add to the server group. You can specify up to 40 server IDs in each call. Valid values:
     *
     *   **Ecs**
     *   **Eni**
     *   **Eci**
     *   **Ip**
     *   **fc**
     *
     * This parameter is required.
     * @example Ecs
     *
     * @var string
     */
    public $serverType;

    /**
     * @description The weight of the backend server. Valid values: **0** to **100**. Default value: **100**. If the weight of a backend server is set to **0**, no requests are forwarded to the backend server. You can specify up to 40 server IDs in each call.
     *
     * > You do not need to set this parameter if **ServerType** is set to **Fc**.
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
