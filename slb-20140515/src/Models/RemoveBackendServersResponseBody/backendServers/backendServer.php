<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\RemoveBackendServersResponseBody\backendServers;

use AlibabaCloud\Tea\Model;

class backendServer extends Model
{
    /**
     * @description The description of the server group.
     *
     * @example BackendServer1
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the backend server.
     *
     * @example i-bp1fq61enf4loa5i****
     *
     * @var string
     */
    public $serverId;

    /**
     * @description The type of the backend server. Valid values:
     *
     *   **ecs**: an ECS instance
     *   **eni**: an ENI
     *
     * @example ecs
     *
     * @var string
     */
    public $type;

    /**
     * @description The weight of the backend server. Valid values: **0 to 100**.
     *
     * @example 100
     *
     * @var int
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
