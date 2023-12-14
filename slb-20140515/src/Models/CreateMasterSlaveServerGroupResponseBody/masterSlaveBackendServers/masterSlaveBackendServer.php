<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\CreateMasterSlaveServerGroupResponseBody\masterSlaveBackendServers;

use AlibabaCloud\Tea\Model;

class masterSlaveBackendServer extends Model
{
    /**
     * @description The description of the primary/secondary server group.
     *
     * @example test-112
     *
     * @var string
     */
    public $description;

    /**
     * @description The port that is used by the backend server.
     *
     * @example 82
     *
     * @var int
     */
    public $port;

    /**
     * @description The ID of the ECS instance or ENI that is added.
     *
     * @example i-bp1fq61enf4loa5i****
     *
     * @var string
     */
    public $serverId;

    /**
     * @description The type of the backend server.
     *
     * Valid values: **Master** and **Slave**.
     * @example Master
     *
     * @var string
     */
    public $serverType;

    /**
     * @description The service type of the backend server. Valid values:
     *
     *   **ecs**
     *   **eni**
     *
     * @example ecs
     *
     * @var string
     */
    public $type;

    /**
     * @description The weight of the backend server.
     *
     * @example 100
     *
     * @var int
     */
    public $weight;
    protected $_name = [
        'description' => 'Description',
        'port'        => 'Port',
        'serverId'    => 'ServerId',
        'serverType'  => 'ServerType',
        'type'        => 'Type',
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
        if (null !== $this->serverType) {
            $res['ServerType'] = $this->serverType;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return masterSlaveBackendServer
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
        if (isset($map['ServerType'])) {
            $model->serverType = $map['ServerType'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }

        return $model;
    }
}
