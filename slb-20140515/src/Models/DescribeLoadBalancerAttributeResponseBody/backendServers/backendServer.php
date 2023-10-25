<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\DescribeLoadBalancerAttributeResponseBody\backendServers;

use AlibabaCloud\Tea\Model;

class backendServer extends Model
{
    /**
     * @description The description of the backend server.
     *
     * > This parameter is not returned if Description is not set.
     * @example backend server description
     *
     * @var string
     */
    public $description;

    /**
     * @description The backend server ID.
     *
     * @example i-2zej4lxhjoq1icu*****
     *
     * @var string
     */
    public $serverId;

    /**
     * @description The ID of the elastic network interface (ENI) or elastic container instance.
     *
     * @example 192.XX.XX.11
     *
     * @var string
     */
    public $serverIp;

    /**
     * @description The type of the backend server.
     *
     * @example ecs
     *
     * @var string
     */
    public $type;

    /**
     * @description The weight of the backend server.
     *
     * @example 90
     *
     * @var int
     */
    public $weight;
    protected $_name = [
        'description' => 'Description',
        'serverId'    => 'ServerId',
        'serverIp'    => 'ServerIp',
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
        if (null !== $this->serverIp) {
            $res['ServerIp'] = $this->serverIp;
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
        if (isset($map['ServerIp'])) {
            $model->serverIp = $map['ServerIp'];
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
