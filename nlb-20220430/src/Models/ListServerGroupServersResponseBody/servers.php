<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlb\V20220430\Models\ListServerGroupServersResponseBody;

use AlibabaCloud\Tea\Model;

class servers extends Model
{
    /**
     * @description The description of the backend server.
     *
     * @example ECS
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
     * @description The ID of the server group.
     *
     * @example sgp-atstuj3rtoptyui****
     *
     * @var string
     */
    public $serverGroupId;

    /**
     * @description The ID of the server.
     *
     * @example ecs-bp67acfmxazb4p****
     *
     * @var string
     */
    public $serverId;

    /**
     * @description The IP address of the backend server.
     *
     * @example 192.168.2.1
     *
     * @var string
     */
    public $serverIp;

    /**
     * @description The type of the backend server. Valid values:
     *
     *   **Ecs**: an Elastic Compute Service (ECS) instance
     *   **Eni**: an elastic network interface (ENI)
     *   **Eci**: an elastic container instance
     *   **Ip**: an IP address
     *
     * @example Ecs
     *
     * @var string
     */
    public $serverType;

    /**
     * @description Indicates the status of the backend server. Valid values:
     *
     *   **Adding**: The backend server is being added.
     *   **Available**: The backend server is added.
     *   **Configuring**: The backend server is being configured.
     *   **Removing**: The backend server is being removed.
     *
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @description The weight of the backend server.
     *
     * @example 100
     *
     * @var int
     */
    public $weight;

    /**
     * @description The zone ID of the server.
     *
     * @example cn-hangzhou-a
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'description'   => 'Description',
        'port'          => 'Port',
        'serverGroupId' => 'ServerGroupId',
        'serverId'      => 'ServerId',
        'serverIp'      => 'ServerIp',
        'serverType'    => 'ServerType',
        'status'        => 'Status',
        'weight'        => 'Weight',
        'zoneId'        => 'ZoneId',
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
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
