<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\ListServerGroupServersResponseBody;

use AlibabaCloud\Tea\Model;

class servers extends Model
{
    /**
     * @description The description of the backend server.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The port used by the backend server. Valid values: **1** to **65535**.
     *
     * @example 80
     *
     * @var int
     */
    public $port;

    /**
     * @description Indicates whether the remote IP address feature is enabled. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $remoteIpEnabled;

    /**
     * @description The ID of the server group.
     *
     * @example sgp-qy042e1jabmprh****
     *
     * @var string
     */
    public $serverGroupId;

    /**
     * @description The ID of the backend server.
     *
     * > If **ServerType** is set to **Fc**, **ServerId** is the ARN of a function.
     * @example i-bp1f9kdprbgy9uiu****
     *
     * @var string
     */
    public $serverId;

    /**
     * @description The IP address in inclusive ENI mode.
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $serverIp;

    /**
     * @description The type of the backend server.
     *
     * @example Ecs
     *
     * @var string
     */
    public $serverType;

    /**
     * @description The status of the backend server. Valid values:
     *
     *   **Adding**
     *   **Available**
     *   **Configuring**
     *   **Removing**
     *
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @description The weight of the backend server. An ECS instance with a higher weight receives more requests.
     *
     * @example 100
     *
     * @var int
     */
    public $weight;
    protected $_name = [
        'description'     => 'Description',
        'port'            => 'Port',
        'remoteIpEnabled' => 'RemoteIpEnabled',
        'serverGroupId'   => 'ServerGroupId',
        'serverId'        => 'ServerId',
        'serverIp'        => 'ServerIp',
        'serverType'      => 'ServerType',
        'status'          => 'Status',
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
        if (null !== $this->serverGroupId) {
            $res['ServerGroupId'] = $this->serverGroupId;
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['ServerGroupId'])) {
            $model->serverGroupId = $map['ServerGroupId'];
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }

        return $model;
    }
}
