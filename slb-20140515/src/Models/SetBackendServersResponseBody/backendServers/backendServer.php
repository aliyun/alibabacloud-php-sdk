<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\SetBackendServersResponseBody\backendServers;

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
     * @description The ID of the server.
     *
     * @example eni-hhshhs****
     *
     * @var string
     */
    public $serverId;

    /**
     * @description The type of the backend server. Valid values:
     *
     *   **ecs** (default): an ECS instance
     *   **eni**: an elastic network interface (ENI)
     *
     * @example eni
     *
     * @var string
     */
    public $type;

    /**
     * @description The weight of the backend server.
     *
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
