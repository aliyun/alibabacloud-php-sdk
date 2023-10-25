<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\AddBackendServersResponseBody\backendServers;

use AlibabaCloud\Tea\Model;

class backendServer extends Model
{
    /**
     * @description The description of the backend server.
     *
     * @example backend server
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the ECS instance, ENI, or elastic container instance.
     *
     * @example i-2zej4lxhjoq1icu*****
     *
     * @var string
     */
    public $serverId;

    /**
     * @description The type of the backend server. Valid values:
     *
     *   **ecs** (default): an ECS instance
     *   **eni**: an ENI
     *   **eci**: an elastic container instance
     *
     * @example ecs
     *
     * @var string
     */
    public $type;

    /**
     * @description The weight of the backend server.
     *
     * Valid values: **0 to 100**. Default value: **100**.
     *
     * If the value is set to **0**, no requests are forwarded to the backend server.
     * @example 100
     *
     * @var string
     */
    public $weight;
    protected $_name = [
        'description' => 'Description',
        'serverId'    => 'ServerId',
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
        if (null !== $this->serverId) {
            $res['ServerId'] = $this->serverId;
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
     * @return backendServer
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ServerId'])) {
            $model->serverId = $map['ServerId'];
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
